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
<section class="content Merienda">
  <div class="container-fluid">
    <div class="block-header">
      <h2>DASHBOARD</h2>
    </div>
    <?php 

    $imgid = $_GET['id'];
    $_SESSION['img'] = $imgid;
    $conn=new Connection;
    $conn = $conn->connect();
    $sql="SELECT * FROM `painting` WHERE `pid`='$imgid'";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
                // $sql1="SELECT * FROM `painting` WHERE `Id`='$imgid'";
                // $result=$conn->query($sql);
                // $row = $result->fetch_assoc();



    ?>

    <!-- Body Copy -->
    <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="header">
            <h2>
              Description
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
                        <?php echo $row['title'];?> <small><?php echo$row['subtitle'];?></small>
                      </h2>
                      <img src="../seller/assets/auction/<?php echo$row['image'];?>" class="img-thumbnail">
                      
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="body">
                      <h4>Description:</h4>
                      <?php echo $row['description']; ?>
                      <br>
                      Ending On:
                      <p id="demo"><?php echo$row['endingdate']; ?></p>
                      <p>Current bid : Rs.<?= $row['bid']; ?></p>
                      <p></p>
                      <form action="controller/call.php" method="post">
                        <label for="bid">
                          Bid
                        </label>
                        <div class="form-group">
                         <div class="form-line">
                          <input type="number" class="form-control" name="bidamount" placeholder="" />
                        </div>
                      </div>
                      <button type="submit" class="btn btn-info" id="bid" name="bid">Bid</button>
                    </form>           
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
<script>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo $row['endingdate'] ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
  // var res = false;
  
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
  
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "Bid Closed";
    document.getElementById("bid").innerHTML = "Closed";
    document.getElementById("bid").type = "button";
    window.location.href = 'change_id.php';
    
  }
}, 1000);
</script>


<?php 
require_once'include/footer.php';
?>