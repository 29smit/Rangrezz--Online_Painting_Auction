<?php
require_once 'include/session.php';
if(!isset($_SESSION['buyerid'])) 
{
  header('location:../login.php');

}

require_once 'include/conn.php';
require_once 'include/header.php'; 
require_once 'include/sidebar.php';

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
                            Current Auctions
                        </h2>
                        
                    </div>
                    <div class="body">
                        <?php 
                        
                        $conn=new Connection;
                        $conn=$conn->connect();
                        $sql="SELECT * FROM `painting` WHERE `status`= 0";
                        $result=$conn->query($sql);




                        ?>
                        
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Painting</th>
                                        <th>Title</th>
                                        <th>current price</th>
                                        <th>Ending date</th>
                                        <th>Bid</th>
                                    </tr>
                                </thead>
                                <tbody><?php
                                while($row=$result->fetch_assoc())
                                { 
                                   $datetimeFromMysql=$row['endingdate'];
                                   $time = strtotime($datetimeFromMysql);
                                   $myFormatForView = date("d/m/y g:i A", $time);


                                   ?>
                                   <tr>
                                    <th scope="row"><?=$row['pid']?></th>
                                    <td><img src="../seller/assets/auction/<?php echo$row['image'];   ?>" alt="" style="height: 200px; width: 200px;" ></td>
                                    <td><?=$row['title']?></td>
                                    <td><?php 

                                        if ($row['startingprice']>$row['bid']) 
                                        {
                                            echo$row['startingprice'];                                             
                                        }
                                        else
                                        {
                                            echo $row['bid'];

                                        }


                                    ?></td>
                                    <td><?php echo $myFormatForView; ?></td>
                                    <td><a href="showauction.php?id=<?=$row['pid']?>"><button type="button" class="btn btn-info">Bid</button></a></td>
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
<script type="text/javascript">
        $(document).ready(function()
        {
            $('table').DataTable();

            $('.dataTables_length').css('display','none');
        });
    </script>


<?php include_once 'include/footer.php'; ?>