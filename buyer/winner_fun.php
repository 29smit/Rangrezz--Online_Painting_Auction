<?php
require_once'include/session.php';
if(!isset($_SESSION['buyerid'])) 
{
  header('location:../login.php');

}
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
              $bid = $_SESSION['buyerid'];
              // echo $imgid;
              // echo "<br>";
              // echo $bid;
                $conn=new Connection;
                $conn=$conn->connect();

                $sql="SELECT * FROM `painting` WHERE `pid`='$imgid' AND `bidid` = '$bid' ";
                $result=$conn->query($sql);
                $row = $result->fetch_assoc();
                // $sql1="SELECT * FROM `painting` WHERE `Id`='$imgid'";
                // $result=$conn->query($sql);
                // $row = $result->fetch_assoc();
                $sellerid = $row['createdby'];
                $sql ="SELECT * FROM `seller` WHERE `sid`='$sellerid'";
                $final = $conn->query($sql);
                $seller = $final->fetch_assoc();



            ?>

           <!-- Body Copy -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Description:You Got The Deal :)
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
                            <img src="../seller/assets/auction/<?php echo$row['image'];   ?>" class="img-thumbnail">
                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="body">
                            <h4>Description:</h4>
                            <?php echo $row['description']; ?>
                            <br>
                            Ended On:
                            <p id="demo"><?php echo $row['endingdate']; ?></p>
                            <p>Highest bid : Rs.<?php echo $row['bid']; ?></p>
                            <p><label>Seller Details:<label></p>
                            <p>First Name: <?php echo  $seller['firstname']; ?></p>
                            <p>Last Name : <?php echo $seller['lastname'] ?></p>
                            <p>E-mail    : <?php echo $seller['email'] ?></p>
                            <!-- <p>Address   : </p> -->
                            <!-- by now -->
                            <?php 
                               if ($row['payment']==1)
                               {
                                      echo '<p>'.$_SESSION['oid'].'</p>';
                            

                                   ?>
                                   <script type="text/javascript">
                                             
                                               $(document).ready(function()
                                               {
                                                $('#pay').attr("disabled","true");
                                                $('#pay').text("paid");

                                               });
  

                            </script>
                            <p><a href="bill.php?pid=<?php echo $imgid; ?>" title=""><button type="button"class="btn btn-success" >Bill</button></a></p>
                             

                                                                             
<?php
                               }
                                

                               ?>
                            <p><a href="PaytmKit/TxnTest.php?price=<?php echo $row['bid'] ?>" title=""><button id="pay" type="button"class="btn btn-success" >pay now</button></a></p>
                              
                            <p id="msg"></p>

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