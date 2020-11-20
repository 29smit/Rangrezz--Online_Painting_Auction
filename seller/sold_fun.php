<?php
require_once'include/session.php';
require_once'include/conn.php';
require_once'include/header.php';
require_once'include/sidebar.php';
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <?php 

              $imgid = $_GET['id'];
              $_SESSION['img'] = $imgid;
              $sid = $_SESSION['sellerid'];
                $conn=new Connection;
                $conn = $conn->connect();
                $sql="SELECT * FROM `painting` WHERE `pid`='$imgid' AND `createdby` = '$sid' AND `status`=1 ";
                $result=$conn->query($sql);
                $row = $result->fetch_assoc();
                $buyerid = $row['bidid'];
                $sql="SELECT * FROM `buyer` WHERE `bid`='$buyerid'";
                $buyer = $conn->query($sql);
                $buyer=$buyer->fetch_assoc();
                // $sql1="SELECT * FROM `painting` WHERE `Id`='$imgid'";
                // $result=$conn->query($sql);
                // $row = $result->fetch_assoc();



            ?>

           <!-- Body Copy -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Description
                            </h2>
                          
                        </div>
                        <div class="body">
                             <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>                
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="header">
                            <h2>
                                <?php echo$row['title'];?> <small><?php echo $row['subtitle'];?></small>
                            </h2>
                            <img src="assets/auction/<?php echo $row['image']; ?>" class="img-thumbnail">
                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="body">
                            <h4>Description:</h4>
                            <?php echo $row['description']; ?>
                            <br>
                            Ended On:
                            <p id="demo"><?php echo $row['endingdate']; ?></p>
                            <p>Highest bid : Rs.<?php echo$row['bid']; ?></p>
                            <p><label>Buyer Details:<label></p>
                            <p>First Name: <?php echo $buyer['firstname']; ?></p>
                            <p>Last Name : <?php echo $buyer['lastname']; ?></p>
                            <p>E-mail    : <?php echo $buyer['email']; ?></p>
                            <p>Address   : <?php echo $buyer['address']; ?></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Body-->
<?php require_once'include/footer.php'; ?>