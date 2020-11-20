<?php

require_once'include/session.php';

require_once('include/header.php'); 

require_once'include/conn.php';

$conn = new Connection;
$conn = $conn->connect();

$sql="SELECT * FROM `painting` LIMIT 6";
$result=$conn->query($sql);




 ?>


    <div class="hero">
      <h1 id="title-1" style="font-family:'Merienda One', cursive;">Online Art Auction<em><span>R</span>ANGREZZ</em>Make the world beautiful with us.</h1>
      <div class="social-btn-container"> <span class="social-btn-box"> <a href="https://plus.google.com" class="google-plus-btn"><i class="fab fa-google-plus"></i></a> </span><!-- /.social-btn-box --> 
        <span class="social-btn-box"> <a href="https://www.facebook.com" class="facebook-btn"><i class="fab fa-facebook"></i></a> </span><!-- /.social-btn-box --> 
        <span class="social-btn-box"> <a href="https://twitter.com" class="twitter-btn"><i class="fab fa-twitter"></i></a> </span><!-- /.social-btn-box --> 
        <span class="social-btn-box"> <a href="https://hr.linkedin.com" class="linkedin-btn"><i class="fab fa-linkedin"></i></a> </span><!-- /.social-btn-box --> 
        <span class="social-btn-box"> <a href="#" class="youtube-btn"><i class="fab fa-youtube"></i></a> </span><!-- /.social-btn-box --> 
      </div>
      <!-- /.social-btn-container -->
      
      <div class="fixbottarro"> <a class="scroll" href="#section-2">Scroll for more</a> </div>
    </div>
    <!-- /.hero --> 
  </div>
  <!-- END #section-1 -->
  
  <div id="section-2">
    <div class="grid">
      <div class="col_12">
        <h2 class="title-2 sacramento font" style="font-size: 3rem;"><b>Rangrezz....</b><br><br>
        
          <span class="wow fadeInUp sacramento font" data-wow-duration="2s" style="font-size: 3rem;">We Are Creative Nerds; we try harder</span></h2>
      </div>
      <!-- END col_12 --> 
    </div>
    <!-- END .GRID -->
    
    <div class="grid flex">
      <div class="rows">
        <div class="colw_6 wow zoomIn Merienda">
          <div class="wrapimg hack960">
            <div class="pic"> <img src="assets/img/web-dizajn-1.png" class="pic-image full-width" alt="Pic"/>
              <div class="pic-caption top-to-bottom gradient">
                <h1 style="color:white; font-size: 2em; text-decoration: underline; margin-top: 20px;">Saraswati</h1>
                <p style="color:white; overflow: hidden; font-family:'Merienda One', cursive;">The  goddesses  Saraswati, painted in 1896, are iconic in their visualization.  </p>
                <button type="button" class="btn btn-light">Welcome</button>

              </div>
            </div>
          </div>
          <!-- END wrapimg --> 
        </div>
        <!-- END col_6 -->
        
        <div class="colw_6 ">
          <div class="box66 Merienda">
            <!--<div class="wrap icon"><i class="fa fa-sticky-note-o" aria-hidden="true"></i>-->
 <!--<i class="fa fa-cog fa-spin" style="color:#de1571"></i> <i class="fa fa-spin-reverse fa-cog" style="color:#de1571"></i> <i class="fa fa-cog fa-spin" style="color:#de1571"></i> </div>-->
            <h3 class="center wow fadeInDown sacramento font" data-wow-duration="0.5s" data-wow-delay="0.5s" style="font-size:3rem; font-weight: bolder; "><b>About : The Story</b></h3>
            <p style="font-family:'Merienda One', cursive; text-align: center;">"Rangrez": the word which we have taken is basically a Persian word which means dyer, the person who dyes called "Rangrez",for unique identity we have used " Rangrezz"</p>
            <p style="text-align: center;">Rangrezz is a final year project which is created to help artists to sell their artworks at best price which they deserves.</p>
           <p style="text-align: center;">Rangrezz also provides the beginners to showcase their artwork at Rangrezz virtual Gallery</p>
           <div class="d-flex justify-content-center"><a href="gallery/index.php"><button type="button" class="btn gradient" style="color: white;">Visit Gallery</button></a></div>
          </div>
          <!-- END box66 --> 
        </div>
        <!-- END col_6 --> 
        
      </div>
      <!-- END row --> 
      
    </div>
    <!-- End GRID FLEX --> 
    
  </div>
  <!-- END #section-2 -->

        <!-- partial:index.partial.html -->

<div class="container wow fadeInUp Merienda" data-wow-duration="1.5s" data-wow-delay=".5s">
         <header class="main-header clearfixs">
      
            <h1 class="name sacramento font" style="font-weight: bolder; font-size: 3rem;">Current Auctions</h1>
        </header>

    <div class="content clearfixs">

    <?php

    while($row = $result->fetch_assoc())
    {
       echo'<div class="cube-container">';
        echo '<div class="photo-cube">';

          echo'<img class="front"src="" alt="">';
          echo'<div class="back photo-desc">';
            echo'<div class="headingbox">'.$row['title'].'</div>';
            echo'<div class="para">'.$row['subtitle'].'</div>';
            echo'<a href="" class="button" data-toggle="modal" data-target="#exampleModal">know more</a>
             </div>';
          echo'<img class="left" src="" alt="">';
          echo'<img class="right" src="seller/assets/auction/'.$row['image'].'" alt="">';

         echo'</div>';
 echo'</div>';


    }
  

    ?>

      <!-- <div class="cube-container " >
        <div class="photo-cube">

          <img class="front"src="" alt="">
          <div class="back photo-desc">
            <div class="headingbox">Menaka</div>
            <div class="para">Tallenge Menaka and Shakuntala - by Raja Ravi Varma - Large Canvas - Unframed (20 x 30 inches)</div>
            <a href="" class="button" data-toggle="modal" data-target="#exampleModal">know more</a>
          </div>
          <img class="left" src="" alt="">
          <img class="right" src="assets/img/menaka.JPG" alt="">

        </div>
      </div>  

      <div class="cube-container">
        <div class="photo-cube">

          <img class="front" src="" alt="">
          <div class="back photo-desc">
           <div class="headingbox">Jatayu Vadh</div>
            <div class="para">DollsofIndia Jatayu Vadh - Raja Ravi Varma Painting on Canvas - 33 x 19 inches (KQ91)</div>
            <a href="" class="button" data-toggle="modal" data-target="#exampleModal1">know more</a>
          </div>
          <img class="left" src="" alt="">
          <img class="right" src="assets/img/jatayu.jpg" alt="">

        </div>
      </div>
      <div class="cube-container">
        <div class="photo-cube">

          <img class="front" src="" alt="">
          <div class="back photo-desc">
            <div class="headingbox">Kadambari</div>
            <div class="para">64 Arts Kadambari(Unframed Canvas Prints) -Raja Ravi Varma Paintings - 24" X 16"</div>
            <a href="" class="button" data-toggle="modal" data-target="#exampleModal2">know more</a>
          </div>
          <img class="left" src="" alt="">
          <img class="right" src="assets/img/kadambari.jpg" alt="">

        </div>
      </div>  
      <div class="cube-container">
        <div class="photo-cube">

          <img class="front" src="" alt="">
          <div class="back photo-desc">
           <div class="headingbox">Radha</div>
            <div class="para">Tallenge Radha Krishna (Manini Radha) Raja Ravi Varma Mythology Collection Framed Poster (12 x 18 Inches)</div>
            <a href="" class="button" data-toggle="modal" data-target="#exampleModal3">know more</a>
          </div>
          <img class="left" src="" alt="">
          <img class="right" src="assets/img/radha.jpg" alt="">

        </div>
      </div>  
      <div class="cube-container">
        <div class="photo-cube">

          <img class="front" src="" alt="">
          <div class="back photo-desc">
            <div class="headingbox">Lakshmi</div>
            <div class="para">Lakshmi by Raja Ravi Varma  Small Size Premium Quality Unframed Wall Art Print On Canvas (9 inches x 12 inches) </div>
            <a href="" class="button" data-toggle="modal" data-target="#exampleModal4">know more</a>
          </div>
          <img class="left" src="" alt="">
          <img class="right" src="assets/img/Raja_Ravi_Varma,_Goddess_Lakshmi,_1896.jpg" alt="">

        </div>
      </div>  
      <div class="cube-container">
        <div class="photo-cube">

          <img class="front" src="" alt="">
          <div class="back photo-desc">
            <div class="headingbox">Shakuntala</div>
            <div class="para">Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo.</div>
            <a href="" class="button" data-toggle="modal" data-target="#exampleModal5">download</a>
          </div>
          <img class="left" src="" alt="">
          <img class="right" src="assets/img/shakunatala.jpg" alt="">

        </div>
      </div> -->    
  

    </div>
    <!--content clear fix -->
  </div>
<!-- partial -->



        
   
  
     <div id="section-5" class="Merienda">
      <div class="grid flex16">
       <div class="rows">
         <div class="colw_6">
           <div class="box66">
            <div class="icon wow fadeInRightBig"><a class="animsition-link" href="company.html"> <i class="fa fa-camera fa-4x" style="color:#de1571"></i></a></div>
            <h4 class="wow fadeInDown font" data-wow-duration="0.5s" data-wow-delay="0.5s" style="text-align: center;font-family: 'Merienda One', cursive;">Rangrezz Virtual Painting Gallery</h4>
            <p style="font-family: 'Merienda One', cursive;">There is no doubt that art is a great way of inspiration. Art provides a new direction of views about different problems to the people who have an interest in art. Rangrezz having Virtual painting Gallery ,Have a look once! </p>
            <a class="animsition-link vale gradient" href="gallery/index.php" style="color: white;">Visit Virtual Gallery</a> </div>
          <!-- END box66 --> 
             </div>
        <!-- END col_6 -->
        
         <div class="colw_6 hack960 paddbott100 wow zoomIn">
          <div class="wrapimg">
            <div class="pic"> <img src="assets/img/web-dizajn-3.jpg" class="pic-image full-width" alt="Pic"/>
              <div class="pic-caption top-to-bottom gradient"> <a class="animsition-link" href="gallery/index.php">
                <button id="button" class="BT-OH-BR-R6-NF-FH-FP-TU-PT">
                <canvas id="canvas"></canvas>
                <hover></hover>
                <span>Virtual Gallery</span> </button>
                </a> </div>
            </div>
          </div>
          <!-- END wrapimg --> 
        </div>
        <!-- END col_6 --> 
        
      </div>
      <!-- END row --> 
      
    </div>
    <!-- END .GRID FLEX16 --> 
    
  </div>
  <!-- END #section-5 -->

</div>
<!-- END .animsition-overla -->
<!--modals-->
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Auction</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <h5>You need to login first !</h5>
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary" href="buyer/auction.php" role="button" >Go to Auction</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
  <!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Jatayu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="assets/img/jatayu.jpg" class="img-fluid" alt="Responsive image">
      </div>
      <div class="modal-footer">
         <a class="btn btn-primary" href="Dashboardbuyer/auction.php" role="button" >Go to Auction</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kadambari</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="assets/img/kadambari.jpg" class="img-fluid" alt="Responsive image">
      </div>
      <div class="modal-footer">
         <a class="btn btn-primary" href="Dashboardbuyer/auction.php" role="button" >Go to Auction</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Radha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="assets/img/radha.jpg" class="img-fluid" alt="Responsive image">
      </div>
      <div class="modal-footer">
         <a class="btn btn-primary" href="Dashboardbuyer/auction.php" role="button" >Go to Auction</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lakshmi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="assets/img/Raja_Ravi_Varma,_Goddess_Lakshmi,_1896.jpg" class="img-fluid" alt="Responsive image">
      </div>
      <div class="modal-footer">
         <a class="btn btn-primary" href="Dashboardbuyer/auction.php" role="button" >Go to Auction</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Shakuntala</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="assets/img/shakunatala.jpg" class="img-fluid" alt="Responsive image">
      </div>
      <div class="modal-footer">
         <a class="btn btn-primary" href="Dashboardbuyer/auction.php" role="button" >Go to Auction</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!--modals over--> 
<?php require_once('include/footer.php');?>