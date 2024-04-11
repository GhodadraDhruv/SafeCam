
<html lang="en">

<head>
   <title>Safe Cam</title>  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	<style type="text/css">
		.x{
			margin-right:370px;
		}
		.h{
			color:blue;
			margin-left:120px;
		}
	</style>
</head>

<body>
	<?php
			include("header.php");
			include("conn.php");
	?>
		<section class="w3ls-bnrbtm py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
		

		<div class="row pb-5">
		<div class="col-lg-12">
		<h1 align="center" class="h">Add Category</h1><br />
		<?php
			$result=mysqli_query($conn, "select * from category;");
			
			echo "<center>";
			echo "<div class=row>";
			echo "<div class=col-12>";
			echo "<table class=table table-bordered>";
			
			echo "<tr>";

			$no=mysqli_num_fields($result);

			for ($i=0;$i<$no;$i++)
			{
			$fieldinfo=mysqli_fetch_field_direct($result,$i);
			echo "<th>".$fieldinfo->name."</th>";
			}
			echo "<th>Update</th>

			<th>Delete</th></tr>";
			
			while($row=mysqli_fetch_array($result))
			{
				
			echo"<tr>";
			echo "<td>".$row[0]."</td>";
			echo "<td>".$row[1]."</td>";
			//echo "<td><img src='../".$row[2]."' height=50px width=50px></td>";

			echo "<td> <a class=s href='CategoryUpdate.php?id=$row[0]'>Update</div></a></td>";
			echo "<td> <a href='CategoryDelete.php?id=$row[0]'>Delete</a></td>";
			
			
			echo "</tr>";
			

			}
			echo"</table>";
			echo "</div>";
			echo "</div>";
			echo "</center>";
		?>
<a href="CategoryAdd.php"><h3 align="center">Add new</h3></a>
</div>
</div>
</div>
</section>
	<?php
			
			include("footer.php");
	?>
</body>
</html>