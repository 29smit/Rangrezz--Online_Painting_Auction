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

	function updateSeller($post,$conn)
	{
		//echo "function is called!";

		$this->id        = $_SESSION['sellerid'];
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

		$sql             = "UPDATE `seller` SET `lastname`='$this->lastname',`firstname`='$this->firstname',`address`='$this->address',`contact`='$this->contact',`updateddate`='$this->date',`updatedby`='$this->id' WHERE `sid`='$this->id'";

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
		$this->id    = $_SESSION['sellerid'];
		$this->conn  = $conn;
		$this->email = htmlspecialchars($_POST['email']);
		$this->email = mysqli_real_escape_string($this->conn,$this->email);
		$this->date  = date('Y/m/d G:i:s ');
		$sql         = "UPDATE `seller` SET `email`='$this->email',`updateddate`='$this->date',`updatedby`='$this->id' WHERE `sid`='$this->id'";
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
		$this->id          = $_SESSION['sellerid'];
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
		
		$sql               = "SELECT `password` FROM `seller` WHERE `sid`='$this->id'";
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

			$sql ="UPDATE `seller` SET `password`='$this->newpassword',`updateddate`='$this->date',`updatedby`='$this->id' WHERE `sid`='$this->id'";
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
		$this->id    = $_SESSION['sellerid'];
		$this->conn  = $conn;
		
		
		$profile     = $_FILES['profilepicture']['name'];
		$tmp_profile = $_FILES['profilepicture']['tmp_name'];
		move_uploaded_file($tmp_profile, "../assets/profile/".$profile);
		$sql = "UPDATE `seller` SET `proimage`='$profile' WHERE `sid`='$this->id'";
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


class Auction 
	{
	public $conn          = "";
	public $result        = "";
	public $id            = "";
	public $title         = "";
	public $subtitle      = "";
	public $description   = "";
	public $paintingname  = "";
	public $startingprice = "";
	public $startingdate  = "";
	public $endingdate    = "";
	public $createddate   = "";
	public $createdby     = "";
	public $status        = "";
	public $selleremail   = "";
	public $tempname      = "";
	public $error         = array();

function validate_auction($conn,$post)
{      

        $this->paintingname  = $_FILES['painting']['name'];
		// $this->tempname      = $_FILES['painting']['tempname'];
		$ext                 = pathinfo($this->paintingname, PATHINFO_EXTENSION);
		




        if ($_FILES["painting"]["size"] >4000000) 
     {
     
      $this->error[] = "Sorry, your file is too large.";
    
     }

        if ($ext != "jpg" && $ext != "png" && $ext != "jpeg" && $ext != "gif") 
     {
      
      $this->error[] ="please only upload image file !";
     
     }

return $this->error;


}


function addAuction($conn,$post)
{
    
        date_default_timezone_set('Asia/Kolkata');	
	    $this->conn        = $conn;
		$this->id            = $_SESSION['sellerid'];
		$sql                 ="SELECT * FROM `seller` WHERE `sid`='$this->id'";
        $this->result        =$this->conn->query($sql);
        $row                 =$this->result->fetch_assoc();
         
		
		$this->title         = htmlspecialchars($_POST['title']);
		$this->title         = mysqli_real_escape_string($this->conn,$this->title);
		$this->subtitle      = htmlspecialchars($_POST['subtitle']);
		$this->subtitle      = mysqli_real_escape_string($this->conn,$this->subtitle);
		$this->description   = htmlspecialchars($_POST['description']);
		$this->description   = mysqli_real_escape_string($this->conn,$this->description);
		$this->startingprice = htmlspecialchars($_POST['price']);
		$this->startingprice = mysqli_real_escape_string($this->conn,$this->startingprice);
		$this->startingprice = (int)$this->startingprice;
        $this->startingdate  = $_POST['sdate'];
		$this->endingdate    = $_POST['edate'];
        $this->createddate   = date('Y/m/d G:i:s');
        $this->createdby     = $row['sid'];
        $this->status        = 0;
        $this->selleremail   = $row['email'];
        $this->paintingname  = $_FILES['painting']['name'];
        $this->tempname      = $_FILES['painting']['tmp_name'];
        $ext                 = pathinfo($this->paintingname, PATHINFO_EXTENSION);
        move_uploaded_file($this->tempname, "../assets/auction/".$this->paintingname);
        
       
        


        $sql ="INSERT INTO `painting`(`title`, `subtitle`, `description`, `image`, `startingprice`, `startingdate`, `endingdate`, `createdby`, `createddate`, `selleremail`,`status`) VALUES ('$this->title','$this->subtitle','$this->description','$this->paintingname','$this->startingprice','$this->startingdate','$this->endingdate','$this->createdby','$this->createddate','$this->selleremail','$this->status')";
        $this->result  = $this->conn->query($sql);

       if ($this->result == true) 
       {
       ?>
         <script type="text/javascript">
         	window.alert('auction created successfully!');
         	window.location.href="../dashboard.php";
         </script>


       <?php
       }
       else 

       {
       	  echo "failed to creating an auction !";

       }

		
		


}


}



























?>