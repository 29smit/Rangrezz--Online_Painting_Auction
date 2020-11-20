<?php
require_once'include/session.php';
if(!isset($_SESSION['buyerid'])) 
{
  header('location:../login.php');

}

require_once'include/conn.php';



$imgid = $_GET['pid'];

$sql = "SELECT * FROM `payment` WHERE `paintingid`='$imgid'";

$conn = new Connection;
$conn = $conn->connect();

$result=$conn->query($sql);
$payment=$result->fetch_assoc();

$sql = "SELECT * FROM `painting` WHERE `pid`='$imgid'";
$result=$conn->query($sql);
$painting=$result->fetch_assoc();
$seller = $painting['createdby'];
$buyer  = $painting['bidid'];

$sql  = "SELECT * FROM `seller` WHERE `sid`='$seller'";

$result = $conn->query($sql);
$seller  = $result->fetch_assoc();

$sql  = "SELECT * FROM `buyer` WHERE `bid`='$buyer'";

$result = $conn->query($sql);
$buyer = $result->fetch_assoc();







?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Rangrezz | Payment Bill</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
        text-align:center;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    #print
    {
    	border: none;
    	
    	border-radius: 10px;
    	height: 3rem;
    	width: 5rem;
    	color: white;
    	font-size: 1.2rem;
    	cursor: pointer;

    }
    .box-shadow
  {
    -webkit-box-shadow: 19px 19px 50px -17px rgba(0,0,0,0.5);
    -moz-box-shadow   : 19px 19px 50px -17px rgba(0,0,0,0.5);
    box-shadow        : 19px 19px 50px -17px rgba(0,0,0,0.5);
  }
  .gradient
    {
    background: rgb(52,58,144);
    background: linear-gradient(138deg, rgba(52,58,144,1) 0%, rgba(225,20,113,1) 51%, rgba(245,74,57,1) 87%);
  }
  
    </style>
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="assets/images/logo.png" style="width:65%; max-width:300px;">
                            </td>
                            
                            <td>
                                Invoice #:<?php echo $payment['payid']; ?> <br>
                                OrderId:<?php echo $payment['OrderId'];?> <br>
                                Created: <?php echo date('d-M-Y'); ?><br>
                                <?php
                                      $datetimeFromMysql=$payment['Date'];
                                      $time = strtotime($datetimeFromMysql);
                                      $myFormatForView = date("d/m/y g:i A", $time);

                                ?>
                                Payment date: <?php echo $myFormatForView; ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Painting Title:<?php echo $painting['title']; ?><br>
                                Seller Name: <?php echo$seller['firstname']." ".$seller['lastname'];?><br>
                                Seller Email:<?php echo$painting['selleremail'];?><br>
                                Seller Contact no.<?php echo"+91-".$seller['contact']; ?>
                            </td>
                            
                            <td>
                                Buyer Name:<?php echo$buyer['firstname']." ".$buyer['lastname'];?><br>
                                Buyer Email:<?php echo $buyer['email']; ?><br>
                                Buyer Contact no.<?php echo"+91-".$buyer['contact']; ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Painting
                </td>
                
                <td>
                    
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    <img src="../seller/assets/auction/<?php echo $painting['image']; ?>" style="width:100%; max-width:300px;">
                </td>
                
                <td>
                    <?php echo $painting['description']; ?>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Item
                </td>
                
                <td>
                    Price
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    <?php echo $painting['title']; ?>
                </td>
                
                <td>
                    ₹ <?php  echo$payment['Amount'];?>
                </td>
            </tr>
            
            <!-- <tr class="item">
                <td>
                    Hosting (3 months)
                </td>
                
                <td>
                    $75.00
                </td>
            </tr>
            
            <tr class="item last">
                <td>
                    Domain name (1 year)
                </td>
                
                <td>
                    $10.00
                </td>
            </tr> -->
            
            <tr class="total">
                <td></td>
                
                <td>
                   Total:₹ <?php  echo$payment['Amount'];?>
                </td>
            </tr>
        </table>
        <button id="print" class="gradient box-shadow" type="button" >print</button>
    </div>
    <script type="text/javascript">
    	$('#print').click(function(event) 
    	{
           $('#print').hide();
           window.print();
           $('#print').show();

    	});
    	
    </script>
</body>
</html>


