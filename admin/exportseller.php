<?php 

 include_once 'include/conn.php';

if (isset($_POST['export'])) 
{


  $conn = new Connection;
  $conn = $conn->connect();
  // var_dump($conn);
  // die();
  header('Content-Type: text/csv; charset=utf-8');
  header('Content-Disposition: attachment; filename=seller.csv');
  $output = fopen("php://output","w");
  fputcsv($output,array('id','lastname','firstname','gender','address','birthday','email','contect','password','question','answer','createddate','createdby','updateddate','updatedby','proimage'));
  $query ="SELECT * FROM `seller`";
  $result=$conn->query($query);
  
  while($row = $result->fetch_assoc())
  {
  	fputcsv($output,$row);
  }

fclose($output);


}



























?>