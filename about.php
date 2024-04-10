<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe Cam</title>
	<link href="images/favicon.png" rel="icon">
    <link rel="stylesheet" href="style.css">
	<style type="text/css">
			.img-1{
				height:20px;
				width:20px;
				margin-bottom:5px;				
		}
		.im{
			height:35px;
			width:35px;
		}
		.img-2
		{
			height:20px;
			width:20px;
			margin-bottom:5px;
		}
	</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    
</head>
<body>

    <?php
		include("header.php");
	?>   
    <div class="container" id="about">
        <h3>About Us</h3>
        <hr><p>A camera is an optical instrument used to capture and store images or videos, either digitally via an electronic image sensor, or chemically via a light-sensitive material such as photographic film. As a pivotal technology in the fields of photography and videography, cameras have played a significant role in the progression of visual arts, media, entertainment, surveillance, and scientific research. The invention of the camera dates back to the 19th century and has since evolved with advancements in technology, leading to a vast array of types and models in the 21st century.

</p>
        <hr>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-5 py-3 py-md-0">
                <div class="card">
                    <img  width="500px" height="500px" src="./images/dslr camera.png" alt="">
                </div>
            </div>
            <div class="col-md-7 py-3 py-md-0">
                <p>Cameras function through a combination of various mechanical components and principles. These include exposure control, which regulates the amount of light reaching the sensor or film; the lens, which focuses the light; the viewfinder, which allows the user to preview the scene; and the film or sensor, which captures the image.                
            </div>
        </div>
    </div>


    <!-- offer -->
    <div class="container" id="offer">
      <div class="row">
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-cart-shopping"></i>
          <h3>Free Shipping</h3>
          <p>On order over $1000</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-rotate-left"></i>
          <h3>Free Returns</h3>
          <p>Within 30 days</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-truck"></i>
          <h3>Fast Delivery</h3>
          <p>World Wide</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-thumbs-up"></i>
          <h3>Big choice</h3>
          <p>Of products</p>
        </div>
      </div>
    </div>
    <div class="container" id="newslater">
      <h3 class="text-center">Subscribe To The Safe Cam For Latest upload.</h3>
      <div class="input text-center">
        <input type="text" placeholder="Enter Your Email..">
        <button id="subscribe">SUBSCRIBE</button>
      </div>
    </div>
    

    <a href="#" class="arrow"><i><img src="./images/arrow.png" alt=""></i></a>
	<?php
		include("footer.php");
	?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
