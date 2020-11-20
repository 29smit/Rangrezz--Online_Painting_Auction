<?php

require_once'include/session.php';
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
                                Settings
                            </h2>
                          
                        </div>
                        <div class="body">
                        
                              
                              <div class="row">
                              	<div class="col-md-4" style="text-align: center;">
                              		<button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#defaultModal" name="edit-profile">Edit Profile</button>
                              	</div>
                              	<div class="col-md-4" style="text-align: center;" >
                              		<button type="button" class="btn btn-info waves-effect" name="change-email" data-toggle="modal" data-target="#defaultModal1">Change Email</button>
                              		</div>
                              		<div class="col-md-4" style="text-align: center;">
                              		<button type="button" class="btn btn-success waves-effect" data-toggle="modal" data-target="#defaultModal2">Change Password</button>
                                    
                              	</div>
                              
</div>
                       

                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Body Copy -->
            </div>
        
    </section>
     <!-- Default Size -->
     <!-- start dialog box -->
            <div class="modal fade Merienda" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Change Details</h4>
                        </div>
                        <div class="modal-body">
              <?php
               ?>
      <form class="p-5" action="controller/call.php" method="post" name="myForm">
      <div class="form-group">
        <label for="Enter your last name"> lastname: </label>
         <div class="form-line">
          <input type="text" class="form-control" placeholder="<?php echo $row['lastname']; ?>" id="lname" name="lname" value="<?php echo $row['lastname'] ?>" required>
          </div>

     </div>
     
     <div id="lname_error" class="error"></div>
      <div class="form-group">
        <label for="Enter your last name"> Firstname: </label>
           <div class="form-line">
          <input type="text" class="form-control" placeholder="<?php echo $row['firstname']; ?>" id="fname" name="fname" value="<?php echo $row['firstname']; ?>" required>
         </div>
     </div>
     <div id="fname_error" class="error"></div>
     <div class="form-group">
        <label for="Enter your last name"> Contact No: </label>
           <div class="form-line">
          <input type="text" class="form-control" placeholder="<?php echo $row['contact']; ?>" id="contact" name="contact" value="<?php echo $row['contact']; ?>" required>
         </div>
     </div>
     <div id="contact_error" class="error"></div>
  
 <div class="form-group">
 	 <div class="form-line">
    <label for="exampleFormControlTextarea1" style="padding-bottom:  10px;">Address:</label>
    <textarea class="form-control" id="address" rows="2" name="address" placeholder="<?php echo $row['address']; ?>" required><?php echo $row['address']; ?></textarea>
  </div>
  </div>
  <div id="address_error" class="error"></div>

   <!-- <div class="form-group">
        <label for="Enter your last name">Username: </label>
           <div class="form-line">
          <input type="text" class="form-control" placeholder="<?php  ?>" id="username" name="uname" value="<?php  ?>" required>
          </div>
     </div> -->
   
   
     
     <div class="form-group">
       <button id="submit" type="Submit" class="btn btn-primary" name="edit">Submit</button>
      
     </div> 
    </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- dialogue box ends -->
            <!-- start dialog box -->
            <div class="modal fade Merienda" id="defaultModal1" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel1">Change Email</h4>
                        </div>
                        <div class="modal-body">
              
<form class="p-5" action="controller/call.php" method="post" name="myForm">
   <div class="form-group">
        <label for="Enter your last name">Email: </label>
           <div class="form-line">
          <input type="text" class="form-control" placeholder="<?php echo $row['email']; ?>" id="email" name="email" value="<?php echo $row['email']; ?>" required>
          </div>
     </div>
     <div id="email_error" class="error"></div>
        
     <div class="form-group">
       <button id="submit" type="Submit" class="btn btn-primary" name="editemail">Submit</button>
      
     </div> 
</form>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- dialogue box ends -->
            <!-- start dialog box -->
            
            <div class="modal fade Merienda" id="defaultModal2" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel2">Change Password</h4>
                        </div>
                        <div class="modal-body">
                    
      <form class="p-5" action="controller/call.php" method="post" name="myForm">
      <div class="form-group">
        <label for="Enter your last name"> Old Password: </label>
         <div class="form-line">
          <input type="password" class="form-control" name="opass" id="opass" required>
          </div>
     </div>
         <div class="form-group">
        <label for="Enter your last name"> New Password: </label>
         <div class="form-line">
          <input type="password" class="form-control" name="npass" id="npass" required>
          </div>
     </div>
     <div id="password_error" class="error"></div>
         <div class="form-group">
        <label for="Enter your last name"> Confirm Password: </label>
         <div class="form-line">
          <input type="password" class="form-control" name="cpass" id="cpass" required>
          </div>
<div id="result" style="color: red;"></div>
     </div>
     <div id="cpassword_error" class="error"></div>
          
     <div class="form-group">
       <button  id="submit-pass" type="Submit" class="btn btn-primary" name="editpass" >Submit</button>
     </div> 
    </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- dialogue box ends -->

<?php 

 require_once'include/footer.php';
?>