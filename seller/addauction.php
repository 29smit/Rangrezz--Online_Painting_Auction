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
              Add Auction
            </h2>

          </div>
          <div class="body">


            <div class="row">
             <div class="col-md-4"></div>
             <div class="col-md-4" style="padding: 2rem;">
              <form action="controller/call.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                 <label>Title</label>
                 <div class="form-line">
                   <input type="text" name="title"  id="title" class="form-control" required>
                 </div>
               </div>
               <div id="title_error" class="error">hii</div>
               <div class="form-group">
                 <label>Subtitle</label>
                 <div class="form-line">
                  <input type="text" name="subtitle" id="subtitle" class="form-control" required>
                 </div>
               </div>
               <div id="subtitle_error" class="error"></div>
               <div class="form-group">
                 <label>Description</label>
                 <div class="form-line">
                   <textarea class="form-control" id="desc" name="description" rows="8" required></textarea>
                 </div>
               </div>
               <div id="desc_error" class="error"></div>
               <div class="form-group">
                 <label>Upload a picture</label>
                 <div class="form-line">
                   <input type="file" name="painting" id="file" class="form-control" required>
                 </div>
               </div>
               <div id="file_error" class="error"></div>
               <div class="form-group">
                 <label>Starting Price </label>
                 <div class="form-line">
                   <input type="text" name="price" id="price" class="form-control" required>
                 </div>
               </div>
               <div id="price_error" class="error"></div>
               <div class="form-group">
                 <label>Starting Date </label>
                 <div class="form-line">
                   <input type="datetime-local" id="sdate" min="<?php echo date('Y-m-d\TH:i'); ?>" name="sdate" class="form-control" required>
                 </div>
               </div>
               <div id="sdate_error" class="error"></div>
               <div class="form-group">
                 <label>Ending Date </label>
                 <div class="form-line">
                   <input type="datetime-local" id="edate" name="edate" min="<?php echo date('Y-m-d\TH:i'); ?>" class="form-control" required>
                 </div>
               </div>
               <div id="edate_error" class="error"></div>
               <div class="form-group">
                 <button type="submit" class="btn btn-primary" name="addauction">Submit</button>
               </div>
             </form>	
           </div>
           <div class="col-md-4"></div>

         </div>



       </div>
     </div>
   </div>
 </div>
 <!-- #END# Body Copy -->
</div>

</section>
<?php
include_once 'include/footer.php';
?>
