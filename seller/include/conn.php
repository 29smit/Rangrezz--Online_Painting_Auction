<?php 



class Connection 

{

    public $servername ="server";
    public $username   ="rangrezz_test";
    public $password   ="Jaymataji29";
    public $dbname     ="rangrezz_rangrez";
    public $conn       ="";
 function connect()
 {
    $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
    if (!$this->conn) 
    {
    	echo "connection error:".$this->conn->connect_error;
    	
    }
    else
    {
    	return $this->conn;
    }
   
 }

}























?>