<?php
require_once 'include/session.php';
if(!isset($_SESSION['buyerid'])) 
{
  header('location:../login.php');

}

require_once'include/conn.php';
$imgid=$_SESSION['img'];
// $row='<script>document.writeln(res);</script>';
// if($row == 'true'){

$conn=new Connection;
$conn = $conn->connect();

$sql="UPDATE `painting` SET `status`= 1 WHERE `pid`='$imgid'";
// $sql="UPDATE `painting` SET `starting_price`='$amount' WHERE `id` = '$id'"; 
$result=$conn->query($sql);

// }
header('location:auction.php');
?>