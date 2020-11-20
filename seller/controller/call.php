<?php 
require_once '../include/session.php';
require_once '../include/conn.php';
require_once'../model/function.php';



if (isset($_POST['edit'])) 
{
	// echo " is cslled!";
	$conn = new Connection;
	$conn = $conn->connect();
	$obj = new Update;
	$obj->updateSeller($_POST,$conn);
	
}

if (isset($_POST['editemail'])) 
{
	// echo " is cslled!";
	$conn = new Connection;
	$conn = $conn->connect();
	$obj = new Update;
	$obj->updateEmail($_POST,$conn);
	
}

if (isset($_POST['editpass'])) 
{
	// echo " is cslled!";
	$conn = new Connection;
	$conn = $conn->connect();
	$obj = new Update;
	$obj->updatePassword($_POST,$conn);
	
}

if (isset($_POST['editpofile'])) 
{
	 // echo " is cslled!";
		$error = array();
		$conn  = new Connection;
		$conn  = $conn->connect();
		$obj   = new Update;
		$error = $obj->validateProfile($_POST,$_FILES);
		if (!empty($error)) 
		{
		    ?>
		    <script type="text/javascript">
		    	window.alert("only image file is allowed upto 4mb!,please try  again!");
		    	window.location.href="../dashboard.php";
		    </script>

		    <?php
		}
		else
	    {
	         $obj->updateProfile($conn,$_POST,$_FILES);
	    }
}
if (isset($_POST['addauction'])) 
{
	// echo " is cslled!";
	$error = array();
	$conn = new Connection;
	$conn = $conn->connect();
	$obj = new Auction;
	
	if (!empty($error)) 
		{
		    ?>
		    <script type="text/javascript">
		    	window.alert("only image file is allowed upto 4mb!,please try  again!");
		    	window.location.href="../dashboard.php";
		    </script>

		    <?php
		}
		else 
		{
	       $obj->addAuction($conn,$_POST);	
		}
	
}























?>