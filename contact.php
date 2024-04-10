
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
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>
<body>

    <?php
		include("header.php");
	?>  
       
   
    <div class="container" id="contact">
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <i class="fas fa-phone"> Phone</i>
                    <h6>+919876453120</h6>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <i class="fas fa-envelope"> Email</i>
                    <h6>SafeCam00@.com</h6>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <i class="fas fa-location-dot"> Address</i>
                    <h6>India</h6>
                </div>
            </div>
        </div>
		</div>
		<form method="POST">
		<div class="container">
			<div class="row" style="margin-top: 30px;">
				<div class="col-md-4 py-3 py-md-0">
					<th>&nbsp;<b>First Name :</b></th>
					<input type="text" class="form-control" name="fname" placeholder="First Name">
				</div>
				<div class="col-md-4 py-3 py-md-0">
					<th>&nbsp;<b>Last Name :</b></th>
					<input type="text" class="form-control" name="lname" placeholder="Last Name">
				</div>			
				<div class="col-md-4 py-3 py-md-0">
					<th>&nbsp;<b>E-mail :</b></th>
					<input type="email" class="form-control" name="email" placeholder="E-mail">
				</div>
				<div class="col-md-4 py-3 py-md-0" style="margin-top: 30px;">
					<th>&nbsp;<b>Phone No :</b></th>
					<input type="text" class="form-control" name="phone" placeholder="Phone No.">
				</div>
            </div>      
            <div class="messagebtn text-center">
				<button type="submit">Message</button>
			</div>
		</div>
		</form>
      
	<?php
		@$fn=$_POST['fname'];
		@$ln=$_POST['lname'];
		@$em=$_POST['email'];
		@$ph=$_POST['phone'];
		$con=mysqli_connect("localhost","root","","test");
		$query="INSERT INTO `contact`(`First Name`, `Last Name`, `E Mail`, `Phone No`) VALUES ('$fn','$ln','$em','$ph')";
		mysqli_query($con,$query);		
	?>    
    
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