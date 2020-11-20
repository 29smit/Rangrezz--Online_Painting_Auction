<?php

require_once'../include/session.php';

class Validation
{
	public $lastname  = "";
	public $firstname = "";
	public $gender    = "";
	public $address   = "";
	public $birthdate = "";
	public $email     = "";
	public $contact   = "";
	//public $username  = "";
	public $password  = "";
	public $cpassword = "";
	public $error     = array();

	function validate($post)
	{   


		$this->lastname  =$_POST['lname'];
		$this->firstname =$_POST['fname'];
		$this->gender    =$_POST['gender'];
		$this->address   =$_POST['address'];
		$this->birthdate =$_POST['bdate'];
		$this->email     =$_POST['email'];
		$this->contact   =$_POST['contact'];
		// $this->username  =$_POST['uname'];
		$this->password  =$_POST['password'];
		$this->cpassword =$_POST['cpass'];
		
		if($this->lastname === "" || $this->firstname === "" || $this->gender === "" || $this->address === "" || $this->birthdate === "" || $this->email === "" || $this->contact === "" ||  $this->password ==="" || $this->cpassword === "")
		{
			$this->error[] = "Field is missing ! please complete the form !";
		}

		if(strlen($this->lastname)<3)
		{
			$this->error[] = "lastname length must be greater than 2 characters!";
		}

		if(strlen($this->firstname)<3)
		{
			$this->error[] = "firstname length must be greater than 2 characters!";	
		}
		if (!preg_match("/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/",$this->email)) 
		{
			$this->error[] = "Email is invalid , please check!";        	
		}
		if (strlen($this->contact)!=10) 
		{
			$this->error[] = "Invalid contact number";

		}

		if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,8}$/",$this->password))
		{
			$this->error[] ="password is incorrect !";
		}
		if ($this->password != $this->cpassword) 
		{
			$this->error[] ="password is not matching!";
		}
		if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,8}$/",$this->cpassword)) 
		{
			$this->error[] ="confirm password is incorrect!";
		}

		return $this->error;

	}
        


        function validate_buyer($post)
	{   

        echo "function is called!";
        echo"<pre>";
        var_dump($post);

		$this->lastname  =$_POST['lname1'];
		$this->firstname =$_POST['fname1'];
		$this->gender    =$_POST['gender1'];
		$this->address   =$_POST['address1'];
		$this->birthdate =$_POST['bdate1'];
		$this->email     =$_POST['email1'];
		$this->contact   =$_POST['contact1'];
		// $this->username  =$_POST['uname'];
		$this->password  =$_POST['password1'];
		$this->cpassword =$_POST['cpass1'];
		
		if($this->lastname === "" || $this->firstname === "" || $this->gender === "" || $this->address === "" || $this->birthdate === "" || $this->email === "" || $this->contact === "" ||  $this->password ==="" || $this->cpassword === "")
		{
			$this->error[] = "Field is missing ! please complete the form !";
		}

		if(strlen($this->lastname)<3)
		{
			$this->error[] = "lastname length must be greater than 2 characters!";
		}

		if(strlen($this->firstname)<3)
		{
			$this->error[] = "firstname length must be greater than 2 characters!";	
		}
		if (!preg_match("/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/",$this->email)) 
		{
			$this->error[] = "Email is invalid , please check!";        	
		}
		if (strlen($this->contact)!=10) 
		{
			$this->error[] = "Invalid contact number";

		}

		if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,8}$/",$this->password))
		{
			$this->error[] ="password is incorrect !";
		}
		if ($this->password != $this->cpassword) 
		{
			$this->error[] ="password is not matching!";
		}
		if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,8}$/",$this->cpassword)) 
		{
			$this->error[] ="confirm password is incorrect!";
		}

		return $this->error;

	}


}



class Insert
{
	public $lastname  = "";
	public $firstname = "";
	public $gender    = "";
	public $address   = "";
	public $birthdate = "";
	public $email     = "";
	public $contact   = "";
	public $username  = "";
	public $password  = "";
	public $date      = "";
	public $question  = "";
	public $answer    = "";
    public $statement = ""; 
    public $result    = "";
    public $conn      = "";
    public $profile   = "";

	function insertSeller($post,$conn)
	{   
		$this->conn      = $conn;
		$this->email     = htmlspecialchars($_POST['email']);
		$this->email     = mysqli_real_escape_string($this->conn,$this->email);
        $sql             = "SELECT * FROM `seller` WHERE `email`='$this->email'";
        $this->result    = $this->conn->query($sql);
        $rows            = $this->result->num_rows;
       

		

        if ($rows >0) 
        {
        	?>
             <script type="text/javascript">
             	alert("the user is already exist!");
             	window.location.href="../register.php";
             </script>

        	<?php
        	
        }
    
    else 
    
    {


 		date_default_timezone_set('Asia/Kolkata');
		$this->lastname  = htmlspecialchars($_POST['lname']);
		$this->lastname  = mysqli_real_escape_string($this->conn,$this->lastname);
		$this->firstname = htmlspecialchars($_POST['fname']);
		$this->firstname = mysqli_real_escape_string($this->conn,$this->firstname);
		$this->address   = htmlspecialchars($_POST['address']);
		$this->address   = mysqli_real_escape_string($this->conn,$this->address);
		$this->email     = htmlspecialchars($_POST['email']);
		$this->email     = mysqli_real_escape_string($this->conn,$this->email);
		$this->contact   = htmlspecialchars($_POST['contact']);
		$this->contact   = mysqli_real_escape_string($this->conn,$this->contact);
		// $this->username  = htmlspecialchars($_POST['uname']);
		// $this->username  = mysqli_real_escape_string($this->conn,$this->username);
		$this->password  = htmlspecialchars($_POST['password']);
		$this->password  = mysqli_real_escape_string($this->conn,$this->password);
		$this->password  = md5($this->password);
		$this->date      = date('Y/m/d G:i:s ');
		$this->gender    = $_POST['gender'];
		$this->birthdate = $_POST['bdate'];
		$this->question  = $_POST['secque'];
		$this->answer    = $_POST['answer'];
		$this->profile   = "user.png";
        $this->statement = $this->conn->prepare("INSERT INTO `seller`(`lastname`, `firstname`, `gender`, `address`, `birthday`, `email`, `contact`,`password`, `question`, `answer`, `createddate`, `createdby`,`proimage`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");   
        $this->statement->bind_param("sssssssssssss",$this->lastname,$this->firstname,$this->gender,$this->address,$this->birthdate,$this->email,$this->contact,$this->password,$this->question,$this->answer,$this->date,$this->email,$this->profile);
        $this->result    = $this->statement->execute();

        if($this->result==true)
        {
        	?>
            

           <script>
           	window.alert("data inserted successfully!");
            window.location.href="../login.php"; 
           </script>

        	<?php

           
            
        }
        else 

        {?>
            <script>
            	
            	window.alert("failed to insert data!");
            	 // window.location.href="../register.php";
            </script>

        	<?php
        }
     
     

	}
}

	function insertBuyer($post,$conn)
	{   
		$this->conn      = $conn;
		$this->email     = htmlspecialchars($_POST['email1']);
		$this->email     = mysqli_real_escape_string($this->conn,$this->email);
        $sql             = "SELECT * FROM `buyer` WHERE `email`='$this->email'";
        $this->result    = $this->conn->query($sql);
        $rows            = $this->result->num_rows;
       

		

        if ($rows >0) 
        {
        	echo "the user is already exist ! ";
        	?>
        	<script type="text/javascript">
        		alert("the user is already exist, please try another email id !");
        	</script>
        	<?php 
        	header('location:../register.php');
        }
    
    else 
    
    {


 		date_default_timezone_set('Asia/Kolkata');
		$this->lastname  = htmlspecialchars($_POST['lname1']);
		$this->lastname  = mysqli_real_escape_string($this->conn,$this->lastname);
		$this->firstname = htmlspecialchars($_POST['fname1']);
		$this->firstname = mysqli_real_escape_string($this->conn,$this->firstname);
		$this->address   = htmlspecialchars($_POST['address1']);
		$this->address   = mysqli_real_escape_string($this->conn,$this->address);
		$this->email     = htmlspecialchars($_POST['email1']);
		$this->email     = mysqli_real_escape_string($this->conn,$this->email);
		$this->contact   = htmlspecialchars($_POST['contact1']);
		$this->contact   = mysqli_real_escape_string($this->conn,$this->contact);
		// $this->username  = htmlspecialchars($_POST['uname1']);
		// $this->username  = mysqli_real_escape_string($this->conn,$this->username);
		$this->password  = htmlspecialchars($_POST['password1']);
		$this->password  = mysqli_real_escape_string($this->conn,$this->password);
		$this->password  = md5($this->password);
		$this->date      = date('Y/m/d G:i:s ');
		$this->gender    = $_POST['gender1'];
		$this->birthdate = $_POST['bdate1'];
		$this->question  = $_POST['secque1'];
		$this->answer    = $_POST['answer1'];
		$this->profile   = "user.png";
        $this->statement = $this->conn->prepare("INSERT INTO `buyer`(`lastname`, `firstname`, `gender`, `address`, `birthday`, `email`, `contact`,`password`, `question`, `answer`, `createddate`, `createdby`,`proimage`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");   
        $this->statement->bind_param("sssssssssssss",$this->lastname,$this->firstname,$this->gender,$this->address,$this->birthdate,$this->email,$this->contact,$this->password,$this->question,$this->answer,$this->date,$this->email,$this->profile);
        $this->result    = $this->statement->execute();

        if($this->result==true)
        {
        	
        	?>
        	<script type="text/javascript">
        		alert("data inserted successfully!");
        		window.location.href="../login.php";
        	</script>
        	<?php 

        }
        else 

        {
        	echo "data is not inserted !";
        }
     
      

	}
}

}

class Login 
{
  

	public $email    = "";
	public $conn     = "";
	public $password = "";
    public $result   = "";

 
    function sellerLogin($post,$conn)
    {
		$this->conn     = $conn;
		$this->email    = $_POST['email'];
		$this->password = $_POST['password'];
		$this->password = md5($this->password);
		
		$sql            = "SELECT * FROM `seller` WHERE `email`='$this->email' AND `password`='$this->password'";   
		$this->result   = $this->conn->query($sql);
	    $rows           = $this->result->num_rows; 
		
		


		if ($rows >0) 
		{
			
        $row = $this->result->fetch_assoc();
        echo $_SESSION['sellerid'] = $row['sid'];

     ?>
     <script type="text/javascript">
     	

     	window.location.href="../seller/dashboard.php";
     </script>



    <?php
            // header('location:../seller/dashboard.php');
          			
		}
		else 
		{
			?> 
			<script type="text/javascript">
				window.alert("incorrect email id or password, please try again!");
				window.location.href="../login.php";
			</script>

			<?php
			
		}
		

    }
    function buyerLogin($post,$conn)
    {
		$this->conn     = $conn;
		$this->email    = $_POST['email'];
		$this->password = $_POST['password'];
		$this->password = md5($this->password);
		
		$sql            = "SELECT * FROM `buyer` WHERE `email`='$this->email' AND `password`='$this->password'";   
		$this->result   = $this->conn->query($sql);
	    $rows           = $this->result->num_rows; 
		
		if ($rows >0) 
		{
			// echo "logged in !";
        $row               = $this->result->fetch_assoc();
        $_SESSION['buyerid'] = $row['bid'];
?>
<script type="text/javascript">
	window.location.href="../buyer/dashboard.php";
</script>

<?php 
    
            // header('location:../buyer/dashboard.php');
          			
		}
		else 
		{
			?> 
			<script type="text/javascript">
				window.alert("incorrect email id or password, please try again!");
				window.location.href="../login.php";
			</script>

			<?php
			
		}
		

    }




}




class Contact
{
  public $conn = "";
  public $result="";



  function message($post,$conn)
  {

  	$this->conn = $conn;
date_default_timezone_set('Asia/Kolkata');
  	$name  = htmlspecialchars($_POST['name']);
	$name  = mysqli_real_escape_string($this->conn,$name);
	$email = htmlspecialchars($_POST['email']);
	$email  = mysqli_real_escape_string($this->conn,$email);
    $msg    = htmlspecialchars($_POST['message']);
	$msg  = mysqli_real_escape_string($this->conn,$msg);
	$date      = date('Y/m/d G:i:s');
    $sql = "INSERT INTO `message`(`name`, `email`, `message`,`date`) VALUES ('$name','$email','$msg','$date')";
    $this->result = $this->conn->query($sql);
     
    if ($this->result==true) 
    {
    ?>
    <script type="text/javascript">
    	
    	alert("your message has been sent successfully, please wait for response !");
    	window.location.href="../contact.php";
    </script>


    <?php
    }
    else
    {

		echo "msg is not sent !";

  }
    }





}






























































?>