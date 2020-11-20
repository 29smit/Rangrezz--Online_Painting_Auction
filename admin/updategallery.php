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
                     
                     $id=$_GET['gid'];
                     //getting the updated data in form
                     $sql = "SELECT * FROM `gallery` WHERE `gid`='$id'";
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
               <form role="form" action="controller/call.php?updategid=<?php echo$id; ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title:</label>
                    <input type="text" class="form-control" id="Title" placeholder="Enter title" value="<?php echo $row['title'];  ?>" name="title" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Genre:</label>
                    <input type="text" class="form-control" id="Genre" placeholder="Enter Genre" value="<?php echo $row['genre'];  ?>" name="genre" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Technique:</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter technique" value="<?php echo $row['technique'] ?>" name="technique" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Material:</label>
                    <input type="text" class="form-control" id="Material" placeholder="Enter Material" value="<?php echo $row['material']; ?>"  name="material" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Dimensions:</label>
                    <input type="text" class="form-control" id="dimension" placeholder="Enter dimension" value="<?php echo $row['dimension']; ?>"  name="dimension" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Gallery:</label>
                    <input type="text" class="form-control" id="dimension" placeholder="Enter Gallery name or Artist name" value="<?php echo $row['gallery']; ?>"  name="gallery" required>
                  </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary " name="updategallery">Submit</button>
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