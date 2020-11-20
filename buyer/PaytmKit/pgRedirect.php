<?php
session_start();
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");
require_once'../include/conn.php';






$checkSum = "";
$paramList = array();
$bid = $_SESSION['buyerid'];
$imgid=$_SESSION['img'];
 
$ORDER_ID = $_POST["ORDER_ID"];
$_SESSION['oid'] = $ORDER_ID;
$CUST_ID = $_POST["CUST_ID"];
$INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
$CHANNEL_ID = $_POST["CHANNEL_ID"];
$TXN_AMOUNT = (int)$_POST["TXN_AMOUNT"];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$state= $_POST['state'];
$zip  = $_POST['zip'];
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s');
$conn = new Connection;
$conn = $conn->connect();
$sql = "INSERT INTO `payment`(`OrderId`, `CustId`, `IndType`, `ChId`, `Amount`, `Fname`, `Lname`, `Email`, `Address`, `Address2`, `state`, `Zip`, `Date`,`bidderid`,`paintingid`) VALUES ('$ORDER_ID','$CUST_ID','$INDUSTRY_TYPE_ID','$CHANNEL_ID','$TXN_AMOUNT','$fname','$lname','$email','$address1','$address2','$state','$zip','$date','$bid','$imgid')";
// die($sql);
$res=$conn->query($sql);
// var_dump($res);
// echo"<br>";
$sql = "UPDATE `painting` SET `payment`=1 WHERE `pid`='$imgid'";
$res=$conn->query($sql);
// var_dump($res);
// die();


// Create an array having all required parameters for creating checksum.
$paramList["MID"] = PAYTM_MERCHANT_MID;
$paramList["ORDER_ID"] = $ORDER_ID;
$paramList["CUST_ID"] = $CUST_ID;
$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$paramList["CHANNEL_ID"] = $CHANNEL_ID;
$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
$paramList["CALLBACK_URL"] = "http://localhost/rangrezz/buyer/PaytmKit/pgResponse.php";
// $paramList["MSISDN"] = $MSISDN; //Mobile number of customer
// $paramList["EMAIL"] = $EMAIL; //Email ID of customer
// $paramList["VERIFIED_BY"] = "EMAIL"; //
// $paramList["IS_USER_VERIFIED"] = "YES"; //


//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);

?>
<html>
<head>
<title>Merchant Check Out Page</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
		<table border="1">
			<tbody>
			<?php
			foreach($paramList as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
			?>
			<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
			</tbody>
		</table>
		<script type="text/javascript">
			document.f1.submit();
		</script>
	</form>
</body>
</html>