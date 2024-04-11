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
	?>
	<br />
	<br />
		<section class="w3ls-bnrbtm py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
		<div class="row pb-5">
		<div class="col-lg-12">

		<center>

		<form name="form1" method="post" enctype="multipart/form-data">
		<h1>Camera Data</h1>

		<table border="3">
			<tr>
			<td>Product_Name :</td>
			<td><input type="text" name="name" /></td>
			</tr>
			<tr align="center">
				<td colspan="2"><input type="submit" class="btn btn-primary" name="sub" value="Add"/></td>
			</tr>
		</table>
		</form>
		</center>
		</div> 
		</div> 
		</div>
		</section>
		<?php
			include("footer.php");
			
			if(isset($_POST["sub"]))
			{
				$nm=$_POST["name"];
				//$path="upload/".$_FILES["img"]["name"];
				//move_uploaded_file($_FILES["img"]["tmp_name"],"../".$path);
				mysqli_query($conn,"INSERT INTO `category`(`product_id`, `product_name`) VALUES (null,'$nm')");
				echo "<script>window.location='adcategoryview.php';</script>";
			}
		?>
</body>
</html>