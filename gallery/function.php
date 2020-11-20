<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Image | Rangrezz</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Courgette|Pacifico|Prata|Sacramento|Unna&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Merienda+One|Princess+Sofia|Rancho|Sofia&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="images/rangrezz.png" sizes="32x32">
  <link rel="icon" type="image/png" href="images/rangrezz.png" sizes="192x192">
  <link rel="icon" type="image/png" href="images/rangrezz.png" sizes="96x96">
  <link rel="icon" type="image/png" href="images/rangrezz.png" sizes="16x16">
  
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
<body background="images/damask.jpg">
    <div class="container Merienda">
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4 mt-4">
                <div class="card" style="width: 30rem;">
  <img class="card-img-top" src="images/banner.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Add Image:</h5>
   <form action="add.php" method="post" enctype="multipart/form-data">
    <div class="form-group">    
    
  <label>
   Title:
  </label>
  <input class="form-control" type="text" placeholder="enter title of picture.." name="title">
    </div>
        <div class="form-group">    
    
  <label>
   Genre:
  </label>
  <input class="form-control" type="text" placeholder="enter genre" name="genre">
    </div>
    <div class="form-group">    
    
  <label>
   Technique:
  </label>
  <input class="form-control" type="text" placeholder="enter technique" name="technique">
    </div>
        <div class="form-group">    
    
  <label>
   Material:
  </label>
  <input class="form-control" type="text" placeholder="enter material" name="material">
    </div>
        <div class="form-group">    
    
  <label>
   Dimensions:
  </label>
  <input class="form-control" type="text" placeholder="enter dimensions " name="dimension">
    </div>
        <div class="form-group">    
    
  <label>
   Gallery:
  </label>
  <input class="form-control" type="text" placeholder="enter source of painting" name="gallery">
    </div>
        <div class="form-group">    
    
  <label>
   select image
  </label>
  <input class="form-control" type="file" placeholder="enter title of picture.." name="img">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

</div>
  </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>


    
</body>
</html>