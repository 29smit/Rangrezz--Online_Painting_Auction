<?php  require_once'include/session.php';?>
<?php  require_once'include/header.php';  ?>

</div>
</div>


<div class="container-fluied ">
  <div class="jumbotron text-center gradient" style="color: white;">
    <h1 class="display-4 sacramento">Welcome to Rangrezz</h1>

    <p class="lead text-center Merienda">create the world colorful with us.</p>
    <hr class="my-4 Merienda">
    <p class="Merienda">to keep connected with us please register here ,Sign up here to become a member of Rangrezz Today !</p>


  </div>
</div>
<!--container is over -->
<!--form container starts here, login for seller-->
<br>
<br>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4"><?php
   
if (isset($_SESSION['val_error'])) 
{


    $error = $_SESSION['val_error'];
    if (!empty($error))
    {
     
      for($i=0;$i<count($error);$i++)
      {
         echo $error[$i]."<br>";

      }

    }

}
     ?></div>
    <div class="col-md-4"></div>
  </div>
</div>
<div class="container box-shadow Merienda" >

  <div class="row" style="">
    <div class="col-md-6 text-center gradient" style="color:white;" >
      <div class="align-self-center">
        <br>
        <br>
        <h1 style="font-size: 2rem;text-decoration: underline;"><b>Registration for seller</b></h1>
        <br>
        <br>
        <p>The page Registration having two registration forms ,<br>(1)Registration for seller : for them, who wants to sell their artworks.<br>(2)Registration for Buyer : for them, who wants to buy artworks from art auctions.</p>
      </div>
    </div>
    <div class="col-md-6" style="" >
      <p id="head" style="color: red;"></p>

      <form class="p-5" action="controller/call.php" method="post" name="myForm">
        <div class="form-group">
          <label for="last name"> lastname: </label>
          <input type="text" class="form-control" placeholder=" enter your surname" id="lname" name="lname" required>
          <p id="p1"></p>
        </div>
        <div id="lname_error" class="error"></div>
        <br>
        <div class="form-group">
          <label for="Enter your last name"> Firstname: </label>
          <input type="text" class="form-control" placeholder=" enter your firstname" id="fname" name="fname" required>
          <p id="p2"></p>
        </div>
        <div id="fname_error" class="error"></div>
        <br>
        <div class="form-group">
         <label for="gender">Gender:</label>
         <div class="form-check">
          <input class="form-check-input male" type="radio" name="gender" id="male" value="male" required>
          <label class="form-check-label" for="exampleRadios1">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input female" type="radio" name="gender" id="female" value="female" required>
          <label class="form-check-label" for="exampleRadios1">
            female
          </label>
        </div>
        <!-- <div class="form-check">
    <input class="form-check-input other" type="radio" name="radio" id="exampleRadios3" value="custome" required>
    <label class="form-check-label" for="exampleRadios1">
      Custom
    </label>
  </div> -->
</div>
<div id="gender_error" class="error"></div>
<br>
  <!-- <div class="custom form-group" style="display: none;">
     <label for="inputState"></label>
        <select id="inputState" class="form-control" name="pronoun" required>
          <option >She:"Wish her a Happy birthday!"</option>
          <option >He:"Wish him a Happy birthday!"</option>
          <option >They:"Wish them a Happy birthday!"</option>
          <option selected>none</option>
        </select>
        <br>
        <small id="passwordHelpBlock" class="form-text text-muted " style="margin-top:-20px; font-size: .8em;">
  Your pronoun is visible to everyone.
  </small>
          <label for="Enter your last name"></label>
            <input type="text" class="form-control" placeholder="Gender (Optional)" id="surname" name="ogender">
       

          </div> -->
          <div class="form-group">
            <label for="Address" style="padding-bottom:  10px;">Address:</label>
            <textarea class="form-control" id="address" id="address" rows="3" placeholder="enter your address" name="address" required></textarea>
          </div>
          <div id="address_error" class="error"></div>
          <br>
          <div class="form-group">

            <label for="datepicker">Birthdate:</label>
            <input type="date"  class="form-control"  id="bdate" name="bdate" required>
    <!--<script type="text/javascript">
      $('#picker').datetimepicker({
               timepicker: false,

               datepicker:true,
               format:'d-m-Y',
               weeks:true
      });
    </script>-->
  </div>
  <div id="bday_error" class="error"></div>
  <br>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address:</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
  </div>
  <div id="email_error" class="error"></div>
  <br>
  <div class="form-group">
    <label for="contact">Contact no:</label>
    <input type="text" class="form-control" id="contact" name="contact" placeholder="9658XXXXXX" required>
  </div>
  <div id="contact_error" class="error"></div>
  <br>
  <div id="contact_error"></div>
  <!-- <div class="form-group">
    <label for="Enter your last name">Desired Username: </label>
    <input type="text" class="form-control" placeholder="username" id="username" name="uname" required>
    <p id="p3"></p>
  </div>
  <div id="uname_error" class="error"></div> -->
  <br>
  <div class="form-group">
    <label for="inputPassword" >Password:</label>
    
    <input type="password" class="form-control" id="password" placeholder="enter password" name ="password" required>
    <p id="p4"></p>
  </div>
  <div id="pass_error" class="error"></div>
  <br>
  <div class="form-group">
    <label for="inputPassword" >Confirm Password:</label>
    
    <input type="password" class="form-control" id="cpass" placeholder="confirm password" name ="cpass" required>
    <p id="p5"></p>
  </div>
  <div id="cpass_error" class="error"></div>
  <br>
  <div class="form-group ">
    <label for="inputState" style="margin-bottom: 10px;">Sequrity Question(optional)</label>
    <select id="question" class="form-control" name="secque" required>
      <option value="What was your childhood nickname?">What was your childhood nickname?</option>
      <option value="In what city did you meet your spouse/significant other?">In what city did you meet your spouse/significant other?</option>
      <option value="What was the name of your elementary / primary school?">What was the name of your elementary / primary school?</option>
      <option value="What was your favorite place to visit as a child?">What was your favorite place to visit as a child?</option>
      <option value="What is the country of your ultimate dream vacation?">What is the country of your ultimate dream vacation?</option>
      <option value="What is the name of your favorite childhood teacher?">What is the name of your favorite childhood teacher?</option>
      <option value="What was your dream job as a child? ">What was your dream job as a child? </option>
      <option value="Who was your childhood hero? ">Who was your childhood hero? </option>
      <option value="What is your grandmother's first name?">What is your grandmother's first name?</option>
      <option value="Where did you vacation last year?">Where did you vacation last year?</option>
    </select>
  </div>
  <div id="q_error"></div>
  <br>
  <div class="form-group">
    <label for="Enter your last name">Answer(optional): </label>
    <input type="text" class="form-control" placeholder="answer" id="answer" name="answer" required>
  </div>
  <div id="a_error"></div>
  <!-- <div class="g-recaptcha" data-sitekey="6Lcw8eAUAAAAAFM_ebTEWj1jxm3IiY_kdz-4hLyX"></div>
 -->  <br>
  <div class="form-group">
   <button id="submit" type="Submit" class="btn gradient" name="Sellsubmit" style="color: white;" id="submit">Submit</button>
   Already have an account?<a href="login.php" title="" class="font">click here</a>
 </div> 
</form>

</div>

</div>


</div>
<!--form container ends here-->



<br>
<br>
<br>
<div class="container box-shadow Merienda" style="">

  <div class="row" style="">

    <div class="col-md-6" style="" >

      <form class="p-5" action="controller/call.php" method="post">
        <div class="form-group">
          <label for="Enter your last name">Enter your lastname: </label>
          <input type="text" class="form-control" placeholder="enter your surname" id="lname1" name="lname1" required>
          <p id="p6"></p>
        </div>
        <div id="lname_error1" class="error"></div>
        <br>
        <div class="form-group">
          <label for="Enter your last name">Enter your Firstname: </label>
          <input type="text" class="form-control" placeholder="enter your firstname" id="fname1" name="fname1" required>
          <p id="p7"></p>
        </div>
        <div id="fname_error1" class="error"></div>
        <br>
        <div class="form-group">
         <label for="gender">Gender:</label>
         <div class="form-check">
          <input class="form-check-input" type="radio" name="gender1" id="male1" value="male" >
          <label class="form-check-label" for="exampleRadios1">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender1" id="female1" value="female" >
          <label class="form-check-label" for="exampleRadios1">
            female
          </label>
        </div>

       <!--  <div class="form-check">
    <input class="form-check-input" type="radio" name="radio1" id="other" value="custom" >
    <label class="form-check-label" for="exampleRadios1">
      Custom
    </label>
  </div -->
</div>
<div id="gender_error1" class="error"></div>
<br>
  <!-- <div class="form-group" style="display: none;" id="custom">
     <label for="inputState"></label>
        <select id="inputState3" class="form-control" name="pronoun1" required>
          <option >She:"Wish her a Happy birthday!"</option>
          <option >He:"Wish him a Happy birthday!"</option>
          <option >They:"Wish them a Happy birthday!"</option>
           <option selected>none.</option>
        </select>
        <small id="passwordHelpBlock1" class="form-text text-muted " style="margin-top:px; font-size: .8em;">
  Your pronoun is visible to everyone.
  </small>
          <label for="Enter your last name"></label>
            <input type="text" class="form-control" placeholder="Gender (Optional)" id="ogender1" name="ogender1" >
       

          </div> -->
          <div class="form-group">
            <label for="exampleFormControlTextarea1" style="padding-bottom:  10px;">Address:</label>
            <textarea class="form-control" id="address1" rows="3" name="address1"required></textarea>
          </div>
          <div id="address_error1" class="error"></div>
          <br>
          <div class="form-group">
           <label for="datepicker">Birthdate:</label>
           <input type="date" class="form-control" name="bdate1" id="bdate1" required>
    <!--<script type="text/javascript">
      $('#picker1').datetimepicker({
               timepicker: false,
               datepicker:true,
               format:'d-m-Y',
               weeks:true
      });
    </script>-->
  </div>
  <div id="bday_error1" class="error"></div>
  <br>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address:</label>
    <input type="email" class="form-control" id="email1" placeholder="name@example.com" name="email1" required>
  </div>
  <div id="email_error1" class="error"></div>
  <br>
  <div class="form-group">
    <label for="contact">Contact no:</label>
    <input type="text" class="form-control" id="contact1" name="contact1" placeholder="9658XXXXXX" required>
  </div>
  <div id="contact_error1" class="error"></div>
  <br>

  <!-- <div class="form-group">
    <label for="Enter your last name">Desired Username: </label>
    <input type="text" class="form-control" placeholder="username" id="uname1" name="uname1" required>
    <p id="p8"></p>
  </div> -->
  <div id="uname_error1" class="error"></div>
  <br>
  <div class="form-group">
    <label for="inputPassword" >Password:</label>
    
    <input type="password" class="form-control" id="password1" placeholder="Password" name="password1" required>
    <p id="p9"></p>
  </div>
  <div id="pass_error1" class="error"></div>
  <br>
  <div class="form-group">
    <label for="inputPassword" >Confirm Password:</label>
    
    <input type="password" class="form-control" id="cpass1" placeholder="Password" name="cpass1" required>
    <p id="p10"></p>
  </div>

  <div id="cpass_error1" class="error"></div>
  <br>
  <div class="form-group ">
    <label for="inputState" style="margin-bottom: 10px;">Sequrity Question(optional)</label>
    <select id="inputState4" class="form-control" name="secque1">
      <option value="What was your childhood nickname?">What was your childhood nickname?</option>
      <option value="In what city did you meet your spouse/significant other?">In what city did you meet your spouse/significant other?</option>
      <option value="What was the name of your elementary / primary school?">What was the name of your elementary / primary school?</option>
      <option value="What was your favorite place to visit as a child?">What was your favorite place to visit as a child?</option>
      <option value="What is the country of your ultimate dream vacation?">What is the country of your ultimate dream vacation?</option>
      <option value="What is the name of your favorite childhood teacher?">What is the name of your favorite childhood teacher?</option>
      <option value="What was your dream job as a child? ">What was your dream job as a child? </option>
      <option value="Who was your childhood hero? ">Who was your childhood hero? </option>
      <option value="What is your grandmother's first name?">What is your grandmother's first name?</option>
      <option value="Where did you vacation last year?">Where did you vacation last year?</option>
    </select>
  </div>
  <div class="form-group">
    <label for="Enter your last name">Answer(optional): </label>
    <input type="text" class="form-control" placeholder="answer" id="answer2" name="answer1">
  </div>
  <!-- <div class="g-recaptcha" data-sitekey="6Lcw8eAUAAAAAFM_ebTEWj1jxm3IiY_kdz-4hLyX"></div> -->
  <br>
  <div class="form-group">
   <button type="Submit" id="submit1" class="btn gradient" name="buysubmit" style="color: white;">Submit</button>
   Already have an account?<a href="login.php" title="" class="font">click here</a>
 </div>
</form>

</div>
<div class="col-md-6 gradient" style="color:white;" >
  <br>
  <br>
  <div class="text-center">
    <h1 style="font-size: 2rem;text-decoration: underline;">Registration for buyer</h1>
    <br>
    <br>
    <p>The page Registration having two registration forms ,<br>(1)Registration for seller : for them, who wants to sell their artworks.<br>(2)Registration for Buyer : for them, who wants to buy artworks from art auctions.</p>
  </div>
</div>
</div>


</div>
<!--form container ends here-->
<br>
<br>
<br>
<?php  require_once'include/footer.php';    ?>