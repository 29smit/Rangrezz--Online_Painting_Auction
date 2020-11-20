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



$conn     = new Connection;
$conn     = $conn->connect();

$sql      = "SELECT * FROM `seller`";
$result   = $conn->query($sql);
$seller   = $result->num_rows;
$sql      = "SELECT * FROM `buyer`";
$result   = $conn->query($sql);
$buyer    = $result->num_rows;
$sql      = "SELECT * FROM `painting`";
$result   = $conn->query($sql);
$painting = $result->num_rows;
$sql      = "SELECT * FROM `gallery`";
$result   = $conn->query($sql);
$gallery  = $result->num_rows;
$sql      = "SELECT * FROM `painting` WHERE `payment`=1";
$result   = $conn->query($sql);
$sold  = $result->num_rows;
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $seller; ?></h3>

                <p>Total Sellers</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="seller.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $buyer ?><sup style="font-size: 20px"></sup></h3>

                <p>Total Buyers</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="buyer.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 style="color: white"><?php echo$painting; ?></h3>

                <p style="color: white">Total Painitings in Auction</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-color-palette"></i>
              </div>
              <a href="painting.php" class="small-box-footer" ><span style="color: white">More info</span><i class="fas fa-arrow-circle-right" style="color: white"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $gallery; ?></h3>

                <p>Total Paintings in Gallery</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-image"></i>
              </div>
              <a href="gallery.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $sold; ?></h3>

                <p>Total Sold Paintings </p>
              </div>
              <div class="icon">
                <i class="ion ion-android-image"></i>
              </div>
              <a href="sold.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
    </div>
</section>
</div>
        <!-- /.row -->
  
































<?php
require_once'include/footer.php'; 

?>