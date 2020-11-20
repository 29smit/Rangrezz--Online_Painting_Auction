<?php 
require_once'../include/conn.php';
require_once'../model/function.php';
require_once'../include/session.php';

if (isset($_POST['Sellsubmit']))
{
	$error                 = array();
	$obj                   = new Validation;
	$error                 = $obj->validate($_POST);
	$_SESSION['val_error'] = $error;

	if (!empty($error))
	{ 
		?>
		<script type="text/javascript">
			
			alert("something is wrong !");
		</script>

		<?php
		header("location:../register.php");

	}
	else
	{
		$obj    = new Connection;
		$conn   = $obj->connect();
		$insert = new Insert;
		$insert->insertSeller($_POST,$conn);

	}




}

if (isset($_POST['buysubmit'])) 
{

	$error                 = array();
	$obj                   = new Validation;
	$error                 = $obj->validate_buyer($_POST);
	$_SESSION['val_error'] = $error;
	if (!empty($error))
	{ 
		header("location:../register.php");

	}
	else
	{
		$obj    = new Connection;
		$conn   = $obj->connect();
		$insert = new Insert;
		$insert->insertBuyer($_POST,$conn);

	}


	
}

if (isset($_POST['sellerlogin'])) 
{
		$obj    = new Connection;
		$conn   = $obj->connect();
		$login  = new Login;
		$login->sellerLogin($_POST,$conn);
}
if (isset($_POST['buyerlogin'])) 
{
		$obj    = new Connection;
		$conn   = $obj->connect();
		$login  = new Login;
		$login->buyerLogin($_POST,$conn);
}

if (isset($_POST['msgsubmit'])) 
{

	$conn = new Connection;
	$conn = $conn->connect();
	$msg  = new Contact;
	$msg->message($_POST,$conn);
}
























?>