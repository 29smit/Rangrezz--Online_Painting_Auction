<?php

require_once'include/session.php';
if(!isset($_SESSION['buyerid'])) 
{
  header('location:../login.php');

}

require_once 'include/conn.php';


require_once 'include/header.php';

require_once 'include/sidebar.php';

              // die();

?>
    <section class="content Merienda">
        <div class="container-fluid">
            <div class="block-header">
                <h2 class="Merienda">DASHBOARD</h2>
            </div>

            <!-- Body Copy -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BODY 
                            </h2>
                          
                        </div>
                        <div class="body">
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

   <?php include_once 'include/footer.php';

   ?>