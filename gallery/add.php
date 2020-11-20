
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>3D Gallery Room</title>
        <meta name="description" content="Add a description" />
        <meta name="keywords" content="Add keywords" />
        <meta name="author" content="Codrops" />

        
        <link rel="stylesheet" type="text/css" href="css/default.css" />
        <link rel="stylesheet" type="text/css" href="css/component2.css" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="lightbox2-2.11.1/dist/css/lightbox.min.css">
      <script src="lightbox2-2.11.1/dist/js/lightbox-plus-jquery.min.js"></script>
      <link rel="icon" type="image/png" href="images/rangrezz.png" sizes="32x32">
  <link rel="icon" type="image/png" href="images/rangrezz.png" sizes="192x192">
  <link rel="icon" type="image/png" href="images/rangrezz.png" sizes="96x96">
  <link rel="icon" type="image/png" href="images/rangrezz.png" sizes="16x16">
  
        
        
        <script src="js/modernizr.custom.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

       
       <link href="https://fonts.googleapis.com/css?family=Courgette|Pacifico|Prata|Sacramento|Unna&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Merienda+One|Princess+Sofia|Rancho|Sofia&display=swap" rel="stylesheet">
      <style type="text/css" media="screen">

      
      .btn
      {
        border:none;
        background-color: #661414;
        color: white;
        border-radius: 10px;
        padding: 10px;

      } 
      </style>
      <style type="text/css">

    .error
    
    {
     color:red;
    }
.gradient
{
  background: rgb(52,58,144);
background: linear-gradient(138deg, rgba(52,58,144,1) 0%, rgba(225,20,113,1) 51%, rgba(245,74,57,1) 87%);
}
.font
{



background: linear-gradient(138deg, rgba(52,58,144,1) 0%, rgba(225,20,113,1) 51%, rgba(245,74,57,1) 87%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
background-clip: text;
color: transparent;


}
.pacifico 
{
  font-family: 'Pacifico', cursive;
}
.Prata
{
  font-family: 'Prata', serif;
}
.unna
{
  font-family: 'Unna', serif;
}
.sacramento
{
  font-family: 'Sacramento', cursive;
}
.courgette
{
  font-family: 'Courgette', cursive;
}
.berkshire
{
  font-family: 'Berkshire Swash', cursive;
}
.Merienda
{
  font-family: 'Merienda One', cursive;
}
.Rancho
{
  font-family: 'Rancho', cursive;
}

.Sofia
{
  font-family: 'Sofia', cursive;
}
.Princess
{
  font-family: 'Princess Sofia', cursive;
}


</style>

</head>





 <?php
   
     if(isset($_POST['submit']))
     {
         date_default_timezone_set('Asia/Kolkata');
         $date      = date('Y/m/d G:i:s ');
         $conn = new mysqli('server','rangrezz_test','Jaymataji29','rangrezz_rangrez');
         $title = $_POST['title'];
         $genre= $_POST['genre'];
         $technique = $_POST['technique'];
         $material = $_POST['material'];
         $dimension = $_POST['dimension'];
         $gallery = $_POST['gallery'];
         $imagename = $_FILES['img']['name'];
         $tempname = $_FILES['img']['tmp_name'];
         move_uploaded_file($tempname,"painting/$imagename");


         $sql="INSERT INTO `gallery`( `title`, `genre`, `technique`, `material`, `dimension`, `gallery`, `image`,`addeddate`) VALUES ('$title','$genre','$technique','$material','$dimension','$gallery','$imagename','$date')";
         

         $result = $conn->query($sql);
         var_dump($result);


         if($result==true)
         {
            ?>
            <script type="text/javascript">
                window.alert("image inserted !");
                window.location.href="index.php";
            </script>
            <?php
         }
         else 
         {
            echo "image is not inserted";
         }
     }
         function addpainting()
         {
            $sql="SELECT * FROM `gallery`";
            $conn = new mysqli('server','rangrezz_test','Jaymataji29','rangrezz_rangrez');
            
            var_dump($result);
            if(!$conn)
            {
                echo"connection not done!";
                echo"<br>".$conn->connect_error;
            }
            
            $result = $conn->query($sql);
            var_dump($result);
            
            while($row = $result->fetch_assoc())
            {
                echo'<figure><div><img src="painting/'.$row["image"].'" alt="img10" />
                        </div>
                        <figcaption>
                            <h2><span>'.$row["title"].'</span></h2>
                            <div>
                                <dl>
                                    <dt>Genre</dt><dd>'.$row["genre"].'</dd>
                                    <dt>Technique</dt><dd>'.$row["technique"].'</dd>
                                    <dt>Material</dt><dd>'.$row["material"].'</dd>
                                    <dt>Dimensions</dt><dd>'.$row["dimension"].'</dd>
                                    <dt>Gallery</dt><dd>'.$row["gallery"].'</dd>
                                    <dt>click to see image:</dt><dd>
     <a href="painting/'.$row["image"].'" data-title="'.$row["title"].'" data-lightbox="example-1"><button class="btn Merienda">click me</button></a>
    </dd>
                                </dl>
                            </div>
                        </figcaption>
                    </figure>"';

            }
         }

     



     ?>