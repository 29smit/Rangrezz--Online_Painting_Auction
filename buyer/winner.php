<?php
require_once 'include/session.php';
if(!isset($_SESSION['buyerid'])) 
{
  header('location:../login.php');

}
require_once'include/conn.php';
require_once'include/header.php';
require_once'include/sidebar.php';
?>
 <section class="content Merienda">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Body Copy -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Winning Auctions
                            </h2>
                          
                        </div>
                        <div class="body">
                            <?php 
                            // var_dump($_SESSION);

                               $bid = $_SESSION['buyerid'];
                               $conn=new Connection;
                               $conn = $conn->connect();
                               $sql="SELECT * FROM `painting` WHERE `status`= 1";

                               $result=$conn->query($sql);

                               // var_dump($result)
                                
                            ?>
                            
                              <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Painting</th>
                                        <th>Title</th>
                                        <th>Starting price</th>
                                        <th>Ending date</th>
                                        <th>More</th>
                                    </tr>
                                </thead>
                                <tbody><?php
                                    while($row=$result->fetch_assoc())
                                    {
                                    $buyerid=$row['bidid'];
                                    // echo $buyerid; 
                                     $datetimeFromMysql=$row['endingdate'];
                                     $time = strtotime($datetimeFromMysql);
                                    $myFormatForView = date("d/m/y g:i A", $time);


                                     ?>
                                    <tr>
                                        <th scope="row"><?=$row['pid']?></th>
                                        <td><img src="../seller/assets/auction/<?php echo$row['image'];   ?>" alt="<?php echo$row['image']; ?>" style="height: 200px; width: 200px;" ></td>
                                        <td><?=$row['title']?></td>
                                        <td><?=$row['startingprice']?></td>
                                        <td><?php echo $myFormatForView; ?></td>
                                        <?php 

                                        if($buyerid == $bid)
                                        
                                        { ?>
                                        <td><a href="winner_fun.php?id=<?=$row['pid']?>"><button type="button" class="btn btn-info">Congratulations</button></a></td>
                                    </tr>
                                  <?php 
                                        }

                                  else{
                                    ?>


                                    
                                    <td>Sorry better <br> luck next time.</td>
                                  <?php
                                   }  

                               } 


                               ?>
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
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('table').DataTable();

            $('.dataTables_length').css('display','none');
        });
    </script>

<?php require_once'include/footer.php'; ?>
