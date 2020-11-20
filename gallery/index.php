<?php  
 
 include_once 'add.php';


?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Rangrezz | 3D Gallery</title>
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
	<body>
		<script>
    lightbox.option({
    	'resizeDuration':700,
      'showImageNumberLabel':false
      
    })
</script>
<script>	

$(document).ready(function()
{
   $('#btn').click(function()
   {
     
       $( ".form" ).dialog();


   });



});



</script>

		<div class="containers Merienda">	
			<!-- Codrops top bar -->
			<div class="codrops-top clearfix">
				<a href="function.php"><strong style="color:white;" id="btn">Add Image</strong></a>
				<span class="right"><a href="../index.php"><strong style="color: white">Back to Home </strong></a></span>
			</div><!--/ Codrops top bar -->

			<h1>Rangrezz<!--<a href="index.html">Demo 1</a> <a  class="demo-current" href="index2.html">Demo 2</a>--></h1>

			<div id="gr-gallery" class="gr-gallery">

				<div class="gr-main">

					<!--<figure>
						
						<div>
							<img src="images/images (1).jpg" alt="img01" />
						</div>
						<figcaption>
							<h2><span>Radha, 1900</span></h2>
							<div>
																
								<dl>
									<dt>Genre</dt><dd>Mythological painting</dd>
									<dt>Technique</dt><dd>Acrylic</dd>
									<dt>Material</dt><dd>canvas</dd>
									<dt>Dimensions</dt><dd>96.52 x 66.68 cm</dd>
									<dt>Gallery</dt><dd>Ravi Varma Printing Press, Mumbai</dd>
									<dt>click to see image:</dt><dd>
	 <a  href="images/images (1).jpg" data-lightbox="example-1" data-title="Radha"><button class="btn">click me</button></a>
	</dd>

								</dl>
							</div>
						</figcaption>
					</figure>
					<figure>
						<div>
							<img src="images/images (10).jpg" alt="img02" />
						</div>
						<figcaption>
							<h2><span>Maharani Chimanbai,1902</span></h2>
							<div>
								<dl>
									<dt>Genre</dt><dd>family portrait painting</dd>
									<dt>Technique</dt><dd>oil</dd>
									<dt>Material</dt><dd>canvas</dd>
									<dt>Dimensions</dt><dd>91 x 152 cm</dd>
									<dt>Gallery</dt><dd>Maharaja Fateh Singh Museum, Lakshmi Vilas Palace, Vadodara (Baroda), Gujarat.</dd>
									<dt>click to see image:</dt><dd>
	 <a href="images/images (10).jpg" data-lightbox="image-1" data-title="Maharani Chimanbai"><button class="btn">click me</button></a>
	</dd>
								</dl>
							</div>
						</figcaption>
					</figure>
					<figure >
						<div>
							<img src="images/images (12).jpg" alt="img03" />
						</div>
						<figcaption>
							<h2><span>Radha Vilas, 1898</span></h2>
							<div>
								<dl>
									<dt>Genre</dt><dd>Mythological painting</dd>
									<dt>Technique</dt><dd>oil</dd>
									<dt>Material</dt><dd>canvas</dd>
									<dt>Dimensions</dt><dd>61 x 91.4 cm</dd>
									<dt>Gallery</dt><dd>Private Collection</dd>
									<dt>click to see image:</dt>Ravi Varma Printing Press, Mumbai<dd>
	 <a href="images/images (12).jpg" data-lightbox="image-1" data-title="Radha Vilas"><button class="btn">click me</button></a>
	</dd>
								</dl>
							</div>
						</figcaption>
					</figure>
					<figure>
						<div id="smit">

							<img src="images/images (13).jpg" alt="img04" />
						</div>
						<figcaption>
							<h2><span>Shakuntala , 1873</span></h2>
							<div>
								<dl>
									<dt>Genre</dt><dd>mythological painting</dd>
									<dt>Technique</dt><dd>oil</dd>
									<dt>Material</dt><dd>canvas</dd>
									<dt>Dimensions</dt><dd>68.5 x 106.7 cm</dd>
									<dt>Gallery</dt><dd>Ravi Varma Printing Press, Mumbai</dd>
									<dt>click to see image:</dt><dd>
	 <a href="images/images (13).jpg" data-lightbox="image-1" data-title="Shakuntala"><button class="btn">click me</button></a>
	</dd>
								</dl>
							</div>
						</figcaption>
					</figure>
					<figure>
						<div>
							<img src="images/images (14).jpg" alt="img01" />
						</div>
						<figcaption>
							<h2><span>Shakuntala with friends, 1895</span></h2>
							<div>
								<dl>
									<dt>Genre</dt><dd>Mythological painting</dd>
									<dt>Technique</dt><dd>oil</dd>
									<dt>Material</dt><dd>canvas</dd>
									<dt>Gallery</dt><dd>Ravi Varma Printing Press, Mumbai</dd>
									<dt>click to see image:</dt><dd>
	 <a href="images/images (14).jpg" data-lightbox="image-1" data-title="Shakuntala with friends"><button class="btn">click me</button></a>
	</dd>
								</dl>
							</div>
						</figcaption>
					</figure>
					<figure>
						<div>
							<img src="images/images (15).jpg" alt="img02" />
						</div>
						<figcaption>
							<h2><span>The Beautiful Lady Without Pity, 1893</span></h2>
							<div>
								<dl>
									<dt>Genre</dt><dd>literary painting</dd>
									<dt>Technique</dt><dd>oil</dd>
									<dt>Material</dt><dd>canvas</dd>
									<dt>Dimensions</dt><dd>81 x 112 cm</dd>
									<dt>Gallery</dt><dd>Ravi Varma Printing Press, Mumbai</dd>
									<dt>click to see image:</dt><dd>
	 <a href="images/images (15).jpg" data-lightbox="image-1" data-title="The Beautiful Lady Without Pity"><button class="btn">click me</button></a>
	</dd>
								</dl>
							</div>
						</figcaption>
					</figure>
					<figure>
						<div>
							<img src="images/images (16).jpg" alt="img03" />
						</div>
						<figcaption>
							<h2><span>Lord Dattatreya, 1893</span></h2>
							<div>
								<dl>
									<dt>Genre</dt><dd>religious painting</dd>
									<dt>Technique</dt><dd>oil</dd>
									<dt>Material</dt><dd>canvas</dd>
									<dt>Dimensions</dt><dd>127 x 66 cm</dd>
									<dt>Gallery</dt><dd>Ravi Varma Printing Press, Mumbai</dd>
									<dt>click to see image:</dt><dd>
	 <a href="images/images (16).jpg" data-lightbox="image-1" data-title="Lord Dattatreya"><button class="btn">click me</button></a>
	</dd>
								</dl>
							</div>
						</figcaption>
					</figure>
					<figure>
						<div>
							<img src="images/images (17).jpg" alt="img08" />
						</div>
						<figcaption>
							<h2><span>Saraswati, 1882</span></h2>
							<div>
								<dl>
									<dt>Genre</dt><dd>religious painting</dd>
									<dt>Technique</dt><dd>oil</dd>
									<dt>Material</dt><dd>canvas</dd>
									<dt>Dimensions</dt><dd>116.52 x 79.06 cm</dd>
									<dt>Gallery</dt><dd>Ravi Varma Printing Press, Mumbai</dd>
									<dt>click to see image:</dt><dd>
	 <a href="images/images (17).jpg" data-lightbox="image-1" data-title="Saraswati"><button class="btn">click me</button></a>
	</dd>
								</dl>
							</div>
						</figcaption>
					</figure>
					<figure>
						<div>
							<img src="images/images (18).jpg" alt="img09" />
						</div>
						<figcaption>
							<h2><span>Menaka & Shakunatala, 1888</span></h2>
							<div>
								<dl>
									<dt>Genre</dt><dd>mythological painting</dd>
									<dt>Technique</dt><dd>oil</dd>
									<dt>Material</dt><dd>canvas</dd>
									<dt>Gallery</dt><dd>Ravi Varma Printing Press, Mumbai</dd>
									<dt>click to see image:</dt><dd>
	 <a href="images/images (18).jpg" data-lightbox="image-1" data-title="Menaka & Shakunatala"><button class="btn">click me</button></a>
	</dd>
								</dl>
							</div>
						</figcaption>
					</figure>
					<figure>
						<div>
							<img src="images/images (19).jpg" alt="img10" />
						</div>
						<figcaption>
							<h2><span>Shakunatala, 1899</span></h2>
							<div>
								<dl>
									<dt>Genre</dt><dd>mythological painting</dd>
									<dt>Technique</dt><dd>oil</dd>
									<dt>Material</dt><dd>canvas</dd>
									<dt>Dimensions</dt><dd>188 x 95.9 cm</dd>
									<dt>Gallery</dt><dd>Ravi Varma Printing Press, Mumbai</dd>
									<dt>click to see image:</dt><dd>
	 <a href="images/images (19).jpg" data-lightbox="image-1" data-title="Shakunatala"><button class="btn">click me</button></a>
	</dd>
								</dl>
							</div>
						</figcaption>
					</figure>-->
					<?php
					addpainting();
 ?>

				</div>
			</div>
		</div><!-- /container -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="js/wallgallery.js"></script>
		<script>
			$(function() {

				Gallery.init( {
					layout : [10,10,10,10]
				} );

			});
		</script>
	</body>
</html>
