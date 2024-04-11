<html lang="en">

<head>
   <title>Safe Cam</title>  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	<style type="text/css">
		.x{
			margin-right:370px;
		}
		
	</style>
</head>

<body>	
	<?php
			
		include("header.php");

		include("conn.php");

		mysqli_query($conn,"delete from product where product_id=".$_REQUEST["id"]);

		echo "<script>window.location='adproduct.php';</script>";
	?>
	<?php
		include("footer.php");
	?>
</body>
</html>