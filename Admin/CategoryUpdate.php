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
		$id=$_REQUEST["id"];
		if(isset($_POST['submit']))
		{
				$name=$_POST['name'];
				$sql="UPDATE `category` SET `product_id`='$id',`product_name`='$name' WHERE product_id=$id";
				//$sql="update category set product_id='$id',product_name='$name', where product_id=$id";
				$res=mysqli_query($conn,$sql);
				if($res)
				{
					header("Location:adcategoryview.php");
				}
				else
				{
					die(mysqli_error($conn));
				}
		}			
		$selcat=mysqli_query($conn,"select * from category where product_id=".@$_REQUEST["id"]);
		$r_cat=mysqli_fetch_row($selcat);	
	?>
	<section class="w3ls-bnrbtm py-5" id="about">
	<div class="container py-xl-5 py-lg-3">
	<div class="row pb-5">
	<div class="col-lg-12">

	<center>
	<form name="form1" method="post" enctype="multipart/form-data">

	<h1>Camera Data</h1>
	<br />
	<table border="3">
		<tr>
			<td>Name :</td>
			<td><input type="text" name="name" value="<?php echo $r_cat[1]; ?>">

			</td>
		</tr>

		<tr>
			<td>
			<input type="hidden" name="updateid" value="<?php echo $r_cat[0]; ?>">
			</td>
		</tr>
		<tr align="center">
			<td colspan="2"><input type="submit" name="submit" href="adcategoryview.php"  value="Update" class="btn btn-primary"></td>
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
	?>
</body>
</html>