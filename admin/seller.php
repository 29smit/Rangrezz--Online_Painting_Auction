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

$sql = "SELECT * FROM `seller`";
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

                <form method="post" action="exportseller.php">

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
                      <th>Fistname</th>
                      <th>Lastname</th>
                      <th>Email</th>
                      <th>Contact</th>
                      <th>Address</th>
                      
                      <th>Gender</th>
                      <th>Created On</th>
                      <th>Created By</th>
                      <th>Updated On</th>
                      <th>Updated By</th>
                      <th>Delete</th>
                      <th>Update</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php
                      while($row=$result->fetch_assoc())
                      {
                        echo"<tr>";
                        echo"<td>".$row['sid']."</td>";
                        echo"<td>".$row['firstname']."</td>";  
                        echo"<td>".$row['lastname']."</td>";
                        echo"<td>".$row['email']."</td>";
                        echo"<td>".$row['contact']."</td>";
                        echo"<td>".$row['address']."</td>";
                        echo"<td>".$row['gender']."</td>";
                        echo"<td>".$row['createddate']."</td>";
                        echo"<td>".$row['createdby']."</td>";
                        echo"<td>".$row['updateddate']."</td>";
                        echo"<td>".$row['updatedby']."</td>";
                        echo'<td><a href="controller/call.php?deleteid='.$row['sid'].'"><button type="button" class="btn btn-danger" >Delete</button></a></td>';
      echo'<td><a href="updateseller.php?updateid='.$row['sid'].'"><button type="button" class="btn btn-primary" onlick=>Update</button></a></td>';
                        

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