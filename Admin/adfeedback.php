
<html lang="en">

<head>
   <title>Safe Cam</title>  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	<style type="text/css">
		.x{
			margin-right:370px;
		}
		.y{
			color:blueviolet;
			align:center;
		}		
	</style>
</head>

<body>
	<?php
			include("header.php");
			include("conne.php");
	?>
	<h1 class="y">User Feedback Details</h1>
	<div class="container">
    <?php
		$result=mysqli_query($conn, "select * from feedback;");
			
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
		
		
		while ($row=mysqli_fetch_assoc($result))
				{
					echo "<tr>";
					echo "<td>".@$row['id']."</td>";
					echo "<td>".@$row['Name']."</td>";
					echo "<td>".@$row['E MAIL']."</td>";
					echo "<td>".@$row['Phone No']."</td>";
					echo "<td>".@$row['Feedback']."</td>";					
					echo "</tr>";					
				}
		echo"</table>";
		echo "</div>";
		echo "</div>";
		echo "</center>";
	?>    
      </div>    
	<?php
			include("footer.php");
	?>
</body>
</html>