<?php
require_once'include/session.php';
if (!isset($_SESSION['adminid'])) 
{

  ?>
  <script type="text/javascript">
    window.location.href="index.php";
  </script>
  <?php 
  
}
require_once'include/conn.php';
require_once 'include/header.php';
require_once'include/sidebar.php';

$sql = "SELECT * FROM `painting` WHERE `status`=0 ";
$conn = new Connection;
$conn = $conn->connect();
$result = $conn->query($sql);



?>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     <section class="content">
      <div class="container-fluid">

      	<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">USERS</h3>
                <form method="post" action="exportpainting.php">
                  <input type="submit" class="btn btn-info" name="export" value="CSV Export"  style="float: right;">
                  
                </form>
                <!-- <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap" id="table">
                  <thead>
                    <tr>
                    	
                      <th>Id</th>
                      <th>Title</th>
                      <th>Subtitle</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Starting Price</th>
                      
                      <th>Starting Date</th>
                      <th>Ending Date</th>
                      <th>Created By</th>
                      <th>Created On</th>
                      <th>Seller Email</th>
                      <th>Bid Amount</th>
                      <th>Bidded By</th>
                      <th>Last Bidded Date</th>
                      <th>Bid Id</th>
                      <th>Sold</th>
                      <th>Payment</th>
                      <!-- <th>Delete</th> -->

                    </tr>
                  </thead>
                  <tbody>
                     <?php
                      while($row=$result->fetch_assoc())
                      {
                        if ($row['status']==1) 
                        {
                          $sold = "yes";
                          
                        }
                        else
                        {
                          $sold = "no";
                        }
                        if ($row['payment']==1) {
                          $pay ="yes";
                        }
                        else
                        {
                          $pay ="no";
                        }
                        echo"<tr>";
                        echo"<td>".$row['pid']."</td>";
                        echo"<td>".$row['title']."</td>";  
                        echo"<td>".$row['subtitle']."</td>";
                        echo"<td>".$row['description']."</td>";
                        echo'<td><a href="../seller/assets/auction/'.$row['image'].'" target="_blank"><img src="../seller/assets/auction/'.$row['image'].'" class="img-thumbnail"></a></td>';
                        echo"<td>".$row['startingprice']."</td>";
                        echo"<td>".$row['startingdate']."</td>";
                        echo"<td>".$row['endingdate']."</td>";
                        echo"<td>".$row['createdby']."</td>";
                        echo"<td>".$row['createddate']."</td>";
                        echo"<td>".$row['selleremail']."</td>";
                        echo"<td>".$row['bid']."</td>";
                        echo"<td>".$row['biddedby']."</td>";
                        echo"<td>".$row['biddeddate']."</td>";
                        echo"<td>".$row['bidid']."</td>";
                        echo"<td>".$sold."</td>";
                        echo"<td>".$pay."</td>";

                        if ($row['status']==1 && $row['payment']==1) {
                          
                        
                        echo'<td><a href="controller/call.php?Deletepid='.$row['pid'].'"><button type="button" class="btn btn-danger">Delete</button></a></td>';
      
                        }
                        else
                        {
                          echo"";
                        }


                        echo"<tr>";
                      } 


                     ?>

                                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
  </section>

</div>









<?php require_once'include/footer.php'; ?>