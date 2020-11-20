<?php

require_once'../include/session.php';
require_once'../include/conn.php';
require_once'../module/function.php';


if (isset($_POST['login'])) 
{

	$conn = new Connection;
	$conn = $conn->connect();
    $login = new Admin;
    $login->login($conn,$_POST);



	
}

if (isset($_GET['deleteid'])) 
{

    $conn = new Connection;
	$conn = $conn->connect();
    $delete = new Seller;
    $delete->delete($_GET,$conn);

}
if (isset($_POST['updatedata'])) 
{
    $conn = new Connection;
	$conn = $conn->connect();
    $update = new Seller;
    $update->update($_POST,$conn);
}
if (isset($_GET['Deletebid'])) 
{

    $conn = new Connection;
	$conn = $conn->connect();
    $delete = new Buyer;
    $delete->delete($_GET,$conn);

}

if (isset($_POST['updatebdata'])) 
{   

	$conn = new Connection;
	$conn = $conn->connect();
    $update = new Buyer;
    $update->update($_POST,$conn);

}
if (isset($_GET['Deletepid'])) 
{
  
  $conn = new Connection;
	$conn = $conn->connect();
    $delete = new Painting;
    $delete->delete($_GET,$conn);


}

if (isset($_GET['gid'])) 
{
  
  $conn = new Connection;
	$conn = $conn->connect();
    $delete = new Gallery;
    $delete->delete($_GET,$conn);


}
if (isset($_POST['updategallery']))
{

     $conn = new Connection;
	$conn = $conn->connect();
    $update = new Gallery;
    $update->update($_POST,$conn);


}

if (isset($_GET['msgid']))
{
    $conn = new Connection;
    $conn = $conn->connect();
    $delete = new Contact; 
    $delete->delete($_GET,$conn);

}




















?>