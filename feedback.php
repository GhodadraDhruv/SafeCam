
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
    <form method="POST">
		<div class="container">
			<div class="row" style="margin-top: 30px;">
				<div class="col-md-4 py-3 py-md-0">
					<th>&nbsp;<b>Name :</b></th>
					<input type="text" class="form-control" name="name1" placeholder="Name">
				</div>
				<div class="col-md-4 py-3 py-md-0">
					<th>&nbsp;<b>E-Mail :</b></th>
					<input type="email" class="form-control" name="ema" placeholder="E-mail">
				</div>			
				<div class="col-md-4 py-3 py-md-0">
					<th>&nbsp;<b>Phone No :</b></th>
					<input type="No" class="form-control" name="pho" placeholder="Phone No.">
				</div>
				<div class="form-group" style="margin-top: 30px;">
					<th>&nbsp;<b>Feedback :</b></th>
					<textarea class="form-control" name="msg" rows="5" placeholder="Give Your Feedback....."></textarea>
				</div>
            </div>      
            <div class="messagebtn text-center">
				<button type="submit">Feedback</button>
			</div>
		</div>
		</form>
		<?php
			@$n=$_POST['name1'];
			@$em=$_POST['ema'];
			@$ph=$_POST['pho'];
			@$ms=$_POST['msg'];
			$con=mysqli_connect("localhost","root","","test");
			$query="INSERT INTO `feedback`(`Name`, `E Mail`, `Phone No`, `Feedback`) VALUES ('$n','$em','$ph','$ms')";
			mysqli_query($con,$query);		
		?>        
    <div class="container" id="newslater">
      <h3 class="text-center">Subscribe To The Safe Cam For Latest upload.</h3>
      <div class="input text-center">
        <input type="text" placeholder="Enter Your Email..">
        <button id="subscribe">SUBSCRIBE</button>
      </div>
    </div>
    <!-- newslater -->
	

    <a href="#" class="arrow"><i><img src="./images/arrow.png" alt=""></i></a>
	<?php
		include("footer.php");
	?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>