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
                     $conn = new Connection;
                     $connx=$conn->connect(); 
                     
                     $id=$_GET['updateid'];
                     //getting the updated data in form
                     $sql = "SELECT * FROM `seller` WHERE `sid`='$id'";
                     $result=$connx->query($sql);
                     
                     $row= $result->fetch_assoc();

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
                <h3 class="card-title">Update</h3>
                <!-- <form method="post" action="export.php">
                  <input type="submit" name="export" value="CSV Export" >
                  
                </form> -->
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
              <div class="card-body  p-0">
              	<div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
               <form role="form" action="controller/call.php?updateid=<?php echo$id; ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Firstname:</label>
                    <input type="text" class="form-control" id="firstname" placeholder="Enter Fistname" value="<?php echo $row['firstname'];  ?>" name="firstname" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Lastname:</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Enter Lastname" value="<?php echo $row['lastname'];  ?>" name="lastname" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email:</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter Email" value="<?php echo $row['email'] ?>" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Contact No:</label>
                    <input type="text" class="form-control" id="firstname" placeholder="Enter Fistname" value="<?php echo $row['contact']; ?>"  name="contact" required>
                  </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary " name="updatedata">Submit</button>
                </div>  
                  
                </div>
                <!-- /.card-body -->

                
              </form>
              </div>
              <div class="col-md-4"></div>
              </div>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
  </section>

</div>







<?php require_once'include/footer.php';
       ?>