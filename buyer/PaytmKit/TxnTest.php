<?php
require_once'../include/session.php';
require_once'../include/conn.php';
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");


 $bid = $_SESSION['buyerid'];
 $imgid=$_SESSION['img'];
              // echo $imgid;
              // echo "<br>";
              // echo $bid;
                $conn=new Connection;
                $conn = $conn->connect();

                $sql="SELECT * FROM `painting` WHERE `pid`='$imgid' AND `bidid` = '$bid' ";
                $result=$conn->query($sql);
                $row = $result->fetch_assoc();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Merchant Check Out Page</title>
<meta name="GENERATOR" content="Evrsoft First Page">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Courgette|Pacifico|Prata|Sacramento|Unna&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Merienda+One|Princess+Sofia|Rancho|Sofia&display=swap" rel="stylesheet">
<style>
	.gradient
{
  background: rgb(52,58,144);
background: linear-gradient(138deg, rgba(52,58,144,1) 0%, rgba(225,20,113,1) 51%, rgba(245,74,57,1) 87%);
}
.font
{



background: linear-gradient(138deg, rgba(52,58,144,1) 0%, rgba(225,20,113,1) 51%, rgba(245,74,57,1) 87%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
background-clip: text;
color: transparent;


}
.pacifico 
{
  font-family: 'Pacifico', cursive;
}
.Prata
{
  font-family: 'Prata', serif;
}
.unna
{
  font-family: 'Unna', serif;
}
.sacramento
{
  font-family: 'Sacramento', cursive;
}
.courgette
{
  font-family: 'Courgette', cursive;
}
.berkshire
{
  font-family: 'Berkshire Swash', cursive;
}
.Merienda
{
  font-family: 'Merienda One', cursive;
}
.Rancho
{
  font-family: 'Rancho', cursive;
}

.Sofia
{
  font-family: 'Sofia', cursive;
}
.Princess
{
  font-family: 'Princess Sofia', cursive;
}

</style>
</head>
<body>
	<div class="container-fluid">
	  <div class="row" style="color: white;">
	  	<div class="col-md-12 gradient">
 	    <div class="jumbotron-fluid text-center">
  <h1 class="display-4 sacramento">Checkout</h1>
  <p class="lead Merienda">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4" style="background-color:white; ">
  <p class="Merienda">It uses utility classes for typography and spacing to space content out within the larger container.</p>
  
</div>
	     

	  </div>

	  </div>
	  <br>
	  <br>
	  <!--form-->
	  <!-- row starts -->
     <div class="row Merienda">
       <div class="col-md-12">
         	
         	<div class="card">
         		
         		<div class="card-body">
         			<div class="row">
         		    <div class="col-md-4"></div>
                    <div class="col-md-4">
                    	<form action="pgRedirect.php" method="post">
                	
                     	<input id="ORDER_ID" type="text" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>" hidden>
						
						<input  id="CUST_ID" type="text" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001" hidden>
                         <input id="INDUSTRY_TYPE_ID" tabindex="4"  type="hidden" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
 						<input id="CHANNEL_ID" type="hidden" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
						
						<input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"  
						value="<?=$_GET['price']?>" hidden>
					    <div class="form-group">
					    	<label> First Name:</label>
					    	<input type="text" name="fname" value="" class="form-control" placeholder="" required>
					    </div>
					    <div class="form-group">
					    	<label> Last Name:</label>
					    	<input type="text" name="lname" value="" class="form-control" placeholder="" required>
					    </div>
					    <div class="form-group">
					    	<label> email:</label>
					    	<input type="email" name="email" value="" class="form-control" placeholder="" required>
					    </div>
					    <div class="form-group">
					    	<label> Address1</label>
					    	<input type="text" name="address1" value="" class="form-control" placeholder="" required>
					    </div>
					    <div class="form-group">
					    	<label> Address2:</label>
					    	<input type="text" name="address2" value="" class="form-control" placeholder="" required>
					    </div>
					    <div class="form-group">
					    	<label> First Name:</label>
					    	<select name="state" required>
					    		
                                        <option value="">------------Select State------------</option>
										<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
										<option value="Andhra Pradesh">Andhra Pradesh</option>
										<option value="Arunachal Pradesh">Arunachal Pradesh</option>
										<option value="Assam">Assam</option>
										<option value="Bihar">Bihar</option>
										<option value="Chandigarh">Chandigarh</option>
										<option value="Chhattisgarh">Chhattisgarh</option>
										<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
										<option value="Daman and Diu">Daman and Diu</option>
										<option value="Delhi">Delhi</option>
										<option value="Goa">Goa</option>
										<option value="Gujarat">Gujarat</option>
										<option value="Haryana">Haryana</option>
										<option value="Himachal Pradesh">Himachal Pradesh</option>
										<option value="Jammu and Kashmir">Jammu and Kashmir</option>
										<option value="Jharkhand">Jharkhand</option>
										<option value="Karnataka">Karnataka</option>
										<option value="Kerala">Kerala</option>
										<option value="Lakshadweep">Lakshadweep</option>
										<option value="Madhya Pradesh">Madhya Pradesh</option>
										<option value="Maharashtra">Maharashtra</option>
										<option value="Manipur">Manipur</option>
										<option value="Meghalaya">Meghalaya</option>
										<option value="Mizoram">Mizoram</option>
										<option value="Nagaland">Nagaland</option>
										<option value="Orissa">Orissa</option>
										<option value="Pondicherry">Pondicherry</option>
										<option value="Punjab">Punjab</option>
										<option value="Rajasthan">Rajasthan</option>
										<option value="Sikkim">Sikkim</option>
										<option value="Tamil Nadu">Tamil Nadu</option>
										<option value="Tripura">Tripura</option>
										<option value="Uttaranchal">Uttaranchal</option>
										<option value="Uttar Pradesh">Uttar Pradesh</option>
										<option value="West Bengal">West Bengal</option>
					    	</select>
					    </div>
                     <div class="form-group">
					    	<label> Zip:</label>
					    	<input type="text" name="zip" value="" class="form-control" placeholder="" required="">
					    </div>
                      <button type="submit" name="submit" class="btn btn-success">Success</button>
                </form>

                    </div>
                    <div class="col-md-4"></div>
                </div>
         	    </div>
         	</div>
       </div>

     </div>



	</div>
</body>
</body>
</html>