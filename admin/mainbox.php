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


?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">DASHBOARD</h1>
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
        <div class="block-header">
            <h2></h2>
        </div>

        <!-- Body Copy -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h3>
                            Current Messages
                        </h3>
                        
                    </div>
                    <div class="body">
                        <?php 
                        
                        $conn=new Connection;
                        $conn=$conn->connect();
                        $sql="SELECT * FROM `message`";
                        $result=$conn->query($sql);




                        ?>
                        
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>date</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody><?php
                                while($row=$result->fetch_assoc())
                                { 
                                   $datetimeFromMysql=$row['date'];
                                   $time = strtotime($datetimeFromMysql);
                                   $myFormatForView = date("d/m/y g:i A", $time);


                                   ?>
                                   <tr>
                                    <td><?php echo $row['id'];?></td>
                                    
                                    <td><?=$row['name']?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?=$row['message']?></td>
                                    <td><?php echo $myFormatForView; ?></td>
                                    <td><a href="controller/call.php?msgid=<?php echo$row['id']?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
                                </tr>
                            <?php }   ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Body Copy -->
</div>

</section>

</div>




































<?php
require_once'include/footer.php';
?>