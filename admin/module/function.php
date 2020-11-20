<?php



class Admin 
{

	
	public $conn     = "";
	public $result   = "";
	public $email    = "";
	public $password = "";

function login($conn,$post)
{
  
		$this->conn     = $conn;
		$this->email    = htmlspecialchars($_POST['email']);
		$this->email    = mysqli_real_escape_string($this->conn,$this->email);
		$this->password = htmlspecialchars($_POST['password']);
		$this->password = mysqli_real_escape_string($this->conn,$this->password);
		$this->password = md5($this->password);

		$sql            = "SELECT * FROM `admin` WHERE `email`='$this->email' AND `password`='$this->password'";
		$this->result   = $this->conn->query($sql);
		$no            = $this->result->num_rows;
        
        if ($no>0) 
        {
              
             $admin =  $this->result->fetch_assoc();
             $_SESSION['adminid']=$admin['id'];

             ?>
             <script>
             	alert("successfully logged in !");
             	window.location.href="../dashboard.php";
             </script>
             <?
        

        }
        else 

        {
        	?>
        	<script type="text/javascript">
        		alert("incorrect email or password , pelase try again !");
                window.location.href="../index.php";
        	</script>

        	<?php
        }
		



}


}
class Seller
{

    public $conn     = "";
    public $result   = "";
    
function delete($get,$conn)
{
    $this->conn = $conn;
    $id         = $_GET['deleteid'];

    $sql="DELETE FROM `seller` WHERE `sid`='$id'";
    $this->result = $this->conn->query($sql);
    if ($this->result == true)
    {
    
        ?>
        <script type="text/javascript">
            
            alert("data deleted successfully!");
            window.location.href="../seller.php";
        </script>
        <?php


    }
    else 
    {
        echo "data not deleted!";
    }

}

function update($post,$conn)
{   
    date_default_timezone_set('Asia/Kolkata');
    $this->conn = $conn;
    $id         = $_GET['updateid'];
    $firstname     = htmlspecialchars($_POST['firstname']);
    $firstname     = mysqli_real_escape_string($this->conn,$firstname);
    $lastname     = htmlspecialchars($_POST['lastname']);
    $lastname     = mysqli_real_escape_string($this->conn,$lastname);
    $email     = htmlspecialchars($_POST['email']);
    $email     = mysqli_real_escape_string($this->conn,$email);
    $contact     = htmlspecialchars($_POST['contact']);
    $contact     = mysqli_real_escape_string($this->conn,$contact);
    $adminid     = "admin".$_SESSION['adminid'];
    $date        = date('Y/m/d G:i:s');

    $sql = "UPDATE `seller` SET `lastname`='$lastname',`firstname`='$firstname',`email`='$email',`contact`='$contact',`updateddate`='$date',`updatedby`='$adminid' WHERE `sid`='$id'";
    $this->result = $this->conn->query($sql);
    if ($this->result==true) 
    {
        ?>
        <script type="text/javascript">
            alert("data updated successfully!");
            window.location.href="../seller.php";
        </script>
        <?php
        
    }
    else
    {
        echo "data is not updated !";
    }

}
















}

class Buyer
{

    public $conn     = "";
    public $result   = "";
    
function delete($get,$conn)
{
    $this->conn = $conn;
    $id         = $_GET['Deletebid'];

    $sql="DELETE FROM `buyer` WHERE `bid`='$id'";
    $this->result = $this->conn->query($sql);
    if ($this->result == true)
    {
    
        ?>
        <script type="text/javascript">
            
            alert("data deleted successfully!");
            window.location.href="../buyer.php";
        </script>
        <?php


    }
    else 
    {
        echo "data not deleted!";
    }

}

function update($post,$conn)
{   
    date_default_timezone_set('Asia/Kolkata');
    $this->conn = $conn;
    $id         = $_GET['updatebid'];
    $firstname     = htmlspecialchars($_POST['firstname']);
    $firstname     = mysqli_real_escape_string($this->conn,$firstname);
    $lastname     = htmlspecialchars($_POST['lastname']);
    $lastname     = mysqli_real_escape_string($this->conn,$lastname);
    $email     = htmlspecialchars($_POST['email']);
    $email     = mysqli_real_escape_string($this->conn,$email);
    $contact     = htmlspecialchars($_POST['contact']);
    $contact     = mysqli_real_escape_string($this->conn,$contact);
    $adminid     = "admin".$_SESSION['adminid'];
    $date        = date('Y/m/d G:i:s');

    $sql = "UPDATE `buyer` SET `lastname`='$lastname',`firstname`='$firstname',`email`='$email',`contact`='$contact',`updateddate`='$date',`updatedby`='$adminid' WHERE `bid`='$id'";
    $this->result = $this->conn->query($sql);
    if ($this->result==true) 
    {
        ?>
        <script type="text/javascript">
             alert("data updated successfully!");
            window.location.href="../buyer.php";
        </script>
        <?php
        
    }
    else
    {
        echo "data is not updated !";
    }

}
}



class Painting 
{

    public $conn     = "";
    public $result   = "";
    
function delete($get,$conn)
{
  $this->conn = $conn;
  $id         = $_GET['Deletepid'];

  $sql = "DELETE FROM `painting` WHERE `pid`='$id'";
  $this->result=$this->conn->query($sql);
  if ($this->result==true) 
  {
  ?>
  <script type="text/javascript">
      alert("painting deleted successfully!");
      window.location.href="../sold.php";
  </script>
  <?php
      
  }
  else
  {
    echo "painting not deleted!";
  }

}


}
class Gallery 
{

    public $conn     = "";
    public $result   = "";
    
function delete($get,$conn)
{
  $this->conn = $conn;
  $id         = $_GET['gid'];

  $sql = "DELETE FROM `gallery` WHERE `gid`='$id'";
  $this->result=$this->conn->query($sql);
  if ($this->result==true) 
  {
  ?>
  <script type="text/javascript">
      alert("painting deleted successfully!");
      window.location.href="../gallery.php";
  </script>
  <?php
      
  }
  else
  {
    echo "painting not deleted!";
  }

}
function update($post,$conn)
{
    date_default_timezone_set('Asia/Kolkata');
    $this->conn = $conn;
    $id         = $_GET['updategid'];
    $title     = htmlspecialchars($_POST['title']);
    $title     = mysqli_real_escape_string($this->conn,$title);
    $genre     = htmlspecialchars($_POST['genre']);
    $genre     = mysqli_real_escape_string($this->conn,$genre);
    $technique     = htmlspecialchars($_POST['technique']);
    $technique     = mysqli_real_escape_string($this->conn,$technique);
    $material     = htmlspecialchars($_POST['material']);
    $material     = mysqli_real_escape_string($this->conn,$material);
    $dimension     = htmlspecialchars($_POST['dimension']);
    $dimension     = mysqli_real_escape_string($this->conn,$dimension); 
    $gallery     = htmlspecialchars($_POST['gallery']);
    $gallery     = mysqli_real_escape_string($this->conn,$gallery);
    $adminid     = "admin".$_SESSION['adminid'];
    $date        = date('Y/m/d G:i:s');
    $sql         = "UPDATE `gallery` SET `title`='$title',`genre`='$genre',`technique`='$technique',`material`='$material',`dimension`='$dimension',`gallery`='gallery',`updateddate`='$date',`updatedby`='$adminid' WHERE `gid`='$id'"; 
    $this->result = $this->conn->query($sql);
    if ($this->result==true) 
    {
        ?>
        <script type="text/javascript">
            alert("data update successfully!");
            window.location.href="../gallery.php";
        </script>
        <?php
       
    }
    else
    {
        echo "data is not updated!";
    }
   

}


}

class Contact 
{


  public $conn ="";
  public $result ="";

  function delete($get,$conn)
  {

    $this->conn = $conn;
    $id = $_GET['msgid'];

    $sql ="DELETE FROM `message` WHERE `id`='$id'";
    $this->result=$this->conn->query($sql);
    if ($this->result==true) 
    {
       
       ?>
       <script type="text/javascript">
         alert("data deleted successfully!");
         window.location.href="../mainbox.php";
       </script>
       <?php

    }
    else 
    {
      echo "data is not deleted!";
    }


  }





}


































?>