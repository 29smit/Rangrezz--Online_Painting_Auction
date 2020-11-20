<?php   

require_once'include/session.php';


 

// echo "the session id is :".$_SESSION['sellerid'];

if (isset($_SESSION['sellerid'])) 
{
//   echo "session is set ";
//   echo "<br>".$_SESSION['sellerid'];
  ?>
 
 <script type="text/javascript">
 window.location.href="seller/dashboard.php";
 </script>

  <?php
}

if (isset($_SESSION['buyerid'])) 
{
//   echo "session is set ";
//   echo "<br>".$_SESSION['buyerid'];
  ?>
 
 <script type="text/javascript">
 window.location.href="buyer/dashboard.php";
 </script>

  <?php
}
//conditions over 
require_once 'include/header.php';
?>
</div>
<!-- END .animsition-overlaj --> 
<div class="container-fluied">
  <div class="jumbotron text-center gradient" style="background-color: #0099ff; color: white;">
  <h1 class="display-4 sacramento">Welcome to Rangrezz</h1>
  <p class="lead text-center Merienda">create the world colorful with us.</p>
  <hr class="my-4">
  <p class="Merienda">for buying and Selling artworks  please Login here</p>

</div>
</div>
<div class="container box-shadow p-5 m-5 Merienda">
  <div class="row">
    
       <div class="col-md-6 text-center gradient" style="color:white;" >
      <div class="align-miidle">
        <br>
        <br>
      <h1 style="font-size: 2rem;text-decoration: underline;">Login for seller</h1>
      <br>
      <br>
      <p>The login page  having two login  forms ,<br>(1)login for seller : for those, who wants to sell their artworks.<br>(2)Login for Buyer : for those, who wants to buy artworks from art auctions.</p>
    </div>
    </div>
      
    
    <div class="col-md-6">
       
       <form class="form p-5" action="controller/call.php" method="post">
      <i class="fa fa-user fa-5x font" style="color: #de1571;"></i>
      <br>
      <br>
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <div class="form-group">
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail1" class="form-control" placeholder="Email address" name="email" required autofocus>
</div>
<div class="form-group">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword1" class="form-control" placeholder="Password" name="password" required>
      </div>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg gradient btn-block" type="submit" name="sellerlogin" style="color: white;">Sign in</button>
      <p style="color:black;">Already have an Account?<a href="register.php" class="font">click here.</a></p>
      
    </form>
      
    </div>
  </div>
</div>
<br>
<br>
<br>
<div class="container box-shadow p-5 m-5 Merienda">
  <div class="row">
   
    <div class="col-md-6">
       <form class="form p-5" action="controller/call.php" method="post">
       
       <i class="fa fa-user fa-5x " style="color: #de1571;"></i>
       <br>
       <br>

      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <div class="form-group">      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
    </div>
<div class="form-group">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
    </div>
    <div class="form-group">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      </div>
      <button class="btn btn-lg gradient btn-block" type="submit" name="buyerlogin" style="color: white;">Sign in</button>
            <p >Already have an Account?<a href="register.html" title="" class="font">click here.</a></p>
      
    </form>
      
    </div>
  
     <div class="col-md-6 text-center gradient" style="color:white;" >
      <div class="align-self-center">
        <br>
        <br>
      <h1 style="font-size: 2rem;text-decoration: underline;">Login for Buyer</h1>
      <br>
      <br>
      <p>The login page  having two login  forms ,<br>(1)Login for seller : for those, who wants to sell their artworks.<br>(2)login for Buyer : for those, who wants to buy artworks from art auctions.</p>
    </div>
    </div>
      
    </div>
</div>
<br>
<br>
<br>

<?php require_once('include/footer.php'); ?>