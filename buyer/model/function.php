<?php 




class Update
{
	public $conn        = "";
	public $firstname   = "";
	public $lastname    = "";
	public $contact     = "";
	public $address     = "";
	public $result      = "";
	public $id          = "";
	public $email       = "";
	public $oldpassword = "";
	public $newpassword = "";
	public $cpassword   = "";
	public $error       = array();

	function updateBuyer($post,$conn)
	{
		echo "function is called!";

		$this->id        = $_SESSION['buyerid'];
		date_default_timezone_set('Asia/Kolkata');
		$this->conn      = $conn;
		$this->lastname  = htmlspecialchars($_POST['lname']);
		$this->lastname  = mysqli_real_escape_string($this->conn,$this->lastname);
		$this->firstname = htmlspecialchars($_POST['fname']);
		$this->firstname = mysqli_real_escape_string($this->conn,$this->firstname);
		$this->address   = htmlspecialchars($_POST['address']);
		$this->address   = mysqli_real_escape_string($this->conn,$this->address);
		$this->contact   = htmlspecialchars($_POST['contact']);
		$this->contact   = mysqli_real_escape_string($this->conn,$this->contact);
		$this->date      = date('Y/m/d G:i:s ');

		$sql             = "UPDATE `buyer` SET `lastname`='$this->lastname',`firstname`='$this->firstname',`address`='$this->address',`contact`='$this->contact',`updateddate`='$this->date',`updatedby`='$this->id' WHERE `bid`='$this->id'";

		$this->result    =$this->conn->query($sql);

		if ($this->result==true) 
		{

			?>
			<script type="text/javascript">
				window.alert("data is updated successfully!");
				window.location.href="../setting.php";
			</script>
			<?php 

		} 
		else

		{
			echo "data is not updated!";
			die();
		}


	}
	function updateEmail($post,$conn)
	{   
		date_default_timezone_set('Asia/Kolkata');	
		$this->id    = $_SESSION['buyerid'];
		$this->conn  = $conn;
		$this->email = htmlspecialchars($_POST['email']);
		$this->email = mysqli_real_escape_string($this->conn,$this->email);
		$this->date  = date('Y/m/d G:i:s ');
		$sql         = "UPDATE `buyer` SET `email`='$this->email',`updateddate`='$this->date',`updatedby`='$this->id' WHERE `bid`='$this->id'";
		$this->result= $this->conn->query($sql);
		if ($this->result==true) 
		{

			?>
			<script type="text/javascript">
				window.alert("data is updated successfully!");
				window.location.href="../setting.php";
			</script>
			<?php 

			die();
		} 
		else

		{
			echo "data is not updated!";
			die();
		}


	}
	function updatePassword($post,$conn)
	{
		date_default_timezone_set('Asia/Kolkata');	
		$this->id          = $_SESSION['buyerid'];
		$this->conn        = $conn;
		$this->oldpassword = htmlspecialchars($_POST['opass']);
		$this->oldpassword = mysqli_real_escape_string($this->conn,$this->oldpassword);
		$this->oldpassword = md5($this->oldpassword);
		$this->newpassword = htmlspecialchars($_POST['npass']);
		$this->newpassword = mysqli_real_escape_string($this->conn,$this->newpassword);
		$this->newpassword = md5($this->newpassword);
		$this->cpassword   = htmlspecialchars($_POST['npass']);
		$this->cpassword   = mysqli_real_escape_string($this->conn,$this->cpassword);
		$this->cpassword   = md5($this->cpassword);
		$this->date        = date('Y/m/d G:i:s ');
		
		$sql               = "SELECT `password` FROM `buyer` WHERE `bid`='$this->id'";
		$this->result      = $this->conn->query($sql);
		
		$row               = $this->result->fetch_assoc();
		
		if ($row['password']!=$this->oldpassword) 
		{
			?>
			<script type="text/javascript">
				window.alert("old password is not matching , please try again!");
				window.location.href="../setting.php";

			</script>
			<?php

			
		}
		else if($this->newpassword!=$this->cpassword)

		{
			?>
			<script type="text/javascript">
				window.alert("new password is not matching with confirm password!,please try again !");
				window.location.href="../setting.php";
			</script>
			<?php
		}
		else 
		{

			$sql ="UPDATE `buyer` SET `password`='$this->newpassword',`updateddate`='$this->date',`updatedby`='$this->id' WHERE `bid`='$this->id'";
			$this->result = $this->conn->query($sql);
			
			if ($this->result==true) 
			{
				?>
				<script type="text/javascript">
					window.alert("password is changed successfully!");
					window.location.href="../setting.php";
				</script>
				<?php
				
			}
			else
			{
				echo "password is not changed !";
				die();
			}
		}
		
	}

	function validateProfile($post,$files)
	{ 
		
		$ext = pathinfo($_FILES["profilepicture"]["name"], PATHINFO_EXTENSION);
		

		if ($_FILES["profilepicture"]["size"] >4000000) 
		{
			$this->error[] = "Sorry, your file is too large.";
			
		}
		if ($ext != "jpg" && $ext != "png" && $ext != "jpeg" && $ext != "gif") 
		{
			$this->error[] ="please only upload image file !";
		}


		
		return $this->error;



	}



	function updateProfile($conn,$post)
	{
		$this->id    = $_SESSION['buyerid'];
		$this->conn  = $conn;
		
		
		$profile     = $_FILES['profilepicture']['name'];
		$tmp_profile = $_FILES['profilepicture']['tmp_name'];
		move_uploaded_file($tmp_profile, "../assets/profile/".$profile);
		$sql = "UPDATE `buyer` SET `proimage`='$profile' WHERE `bid`='$this->id'";
		$this->result= $this->conn->query($sql);
		if ($this->result) 
		{
			?>
			<script type="text/javascript">
				window.alert("profile picture is updated!");
				window.location.href="../dashboard.php";
			</script>
			<?php
		}
		else
		{

			echo "profile picture is not uploaded!";
		}





	}




}


class Bid 
{
	public $pid           = "";
	public $buyerid       = "";
	public $lastbid       = "";
	public $bidamount     = "";
	public $conn          = "";
	public $result        = "";
	public $biddate       = "";
	public $email         = "";





	function bidpainting($post,$conn)
	{
		date_default_timezone_set('Asia/Kolkata');
		$this->conn=$conn;    
		$this->bidamount = (int)$_POST['bidamount'];
        // die();
		$this->biddate        = date('Y/m/d G:i:s ');
		$this->pid=$_SESSION['img'];
		$this->buyerid = $_SESSION['buyerid'];
		
		$sql = "SELECT * FROM `buyer` WHERE `bid`='$this->buyerid'";
		$this->result = $this->conn->query($sql);
		$row = $this->result->fetch_assoc();
		$this->email = $row['email'];

		
		$sql1="SELECT `bid` FROM `painting` WHERE `pid`='$this->pid'";
		$this->result=$this->conn->query($sql1);
		$row=$this->result->fetch_assoc();
		$this->lastbid = $row['bid'];
		
		if($this->lastbid < $this->bidamount)
		{
			
			
			$query = "UPDATE `painting` SET `bid`='$this->bidamount',`biddedby`='$this->email',`biddeddate`='$this->biddate',`bidid`='$this->buyerid' WHERE `pid`='$this->pid'"; 
			$this->result=$this->conn->query($query);
			

			if($this->result==true)
			{
				?>
				<script>
					window.alert("Bid updated successfully");
					window.location.href="../auction.php";
				</script>
				<?php
			}
			else
			{
				echo "not updated !";
			}
		}

		else
		{
			?>
			<script>
				window.alert("Please enter a greater value!!");
				window.location.href="../auction.php";
			</script>
			<?php    
		}


	}



}




















?>