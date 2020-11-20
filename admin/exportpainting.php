<?php 

 include_once 'include/conn.php';

if (isset($_POST['export'])) 
{


  $conn = new Connection;
  $conn = $conn->connect();
  // var_dump($conn);
  // die();
  header('Content-Type: text/csv; charset=utf-8');
  header('Content-Disposition: attachment; filename=paintings.csv');
  $output = fopen("php://output","w");
  fputcsv($output,array('id','title','subtitle','description','image','startingprice','startingdate','endingdate','createdby','createddate','selleremail','bid','biddedby','biddeddate','bidid','status','payment'));
  $query ="SELECT * FROM `painting` WHERE `status`=0";
  $result=$conn->query($query);
  
  while($row = $result->fetch_assoc())
  {
  	fputcsv($output,$row);
  }

fclose($output);


}


?>