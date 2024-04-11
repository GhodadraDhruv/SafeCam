<?php
		
		include("conn.php");
?>		
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
		.s{
				background:red;
				height:100%;
				width:0;
				position:absolute;
				left:0;
				bottom:0;
				z-index:-1;
				transition:0.5s;
		}
		.d{
			margin-left: 550px;
			margin-bottom: 5px;
		}
	</style>

</head>

<body>
	<?php
			include("header.php");
	?>	    
      <h1 class="h">Manage Products</h1>
	  <section class="w3ls-bnrbtm py-5" id="about">
	  <div class="d container">
		<a class="d btn btn-success" href="adform.php">Add Products</a>
	</div>
	<div class="container">
	<?php
		$result=mysqli_query($conn, "select * from dc;");
			
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
		
		while ($row=mysqli_fetch_assoc($result))
				{
					echo "<tr>";
					echo "<td>".@$row['Product_id']."</td>";
					echo "<td>".@$row['Product_name']."</td>";
					echo "<td>".@$row['Product_type']."</td>";
					echo "<td><img src='images/".@$row['Image']."' height=70px width=70px></td>";
					echo "<td>".@$row['Price']."</td>";
		
					echo "<td><a class='btn btn-info' href='ProductUpdate.php?id=$row[Product_id]'>Update</a></td>";
					echo "<td><a class='btn btn-danger' href='ProductDelete.php?id=$row[Product_id]'>Delete</a></td>";
										
					echo "</tr>";
					
				}
		echo"</table>";
		echo "</div>";
		echo "</div>";
		echo "</center>";
	?>    
	</section>
	<?php
			include("footer.php");
	?>	
</body>
</html>
	