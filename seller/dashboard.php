<?php 
require_once'include/session.php';
require_once'include/conn.php';


if(!isset($_SESSION['sellerid'])) 
{
  ?>
   
   <script>
       window.location.href="../login.php";
   </script>
   
  <?php 

}

require_once 'include/header.php';
require_once'include/sidebar.php';


?>

<section class="content">
        <div class="container-fluid">
            <div class="block-header Merienda">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Body Copy -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header Merienda">
                            <h2>
                                Dashboard
                            </h2>
                          
                        </div>
                        <div class="body Merienda">
                            <h1 style="text-align: center; text-transform: uppercase;"><?php echo"Welcome ,".$row['firstname']."!" ?></h1>
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Body Copy -->
            </div>
        
    </section>





<?php 




require_once'include/footer.php';



?>











































