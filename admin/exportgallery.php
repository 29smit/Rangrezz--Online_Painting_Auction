<?php 

 include_once 'include/conn.php';

if (isset($_POST['export'])) 
{


  $conn = new Connection;
  $conn = $conn->connect();
  // var_dump($conn);
  // die();
  header('Content-Type: text/csv; charset=utf-8');
  header('Content-Disposition: attachment; filename=gallery.csv');
  $output = fopen("php://output","w");
  fputcsv($output,array('id', 'title', 'genre', 'technique', 'material', 'dimension', 'gallery', 'image', 'addeddate', 'addedby', 'updateddate', 'updatedb'));
  $query ="SELECT * FROM `gallery`";
  $result=$conn->query($query);
  
  while($row = $result->fetch_assoc())
  {
  	fputcsv($output,$row);
  }

fclose($output);


}


?>