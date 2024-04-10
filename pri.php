<?php
		include("header.php");
		include("conn.php");		
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe Cam</title>
	<link href="images/favicon.png" rel="icon">
	<style type="text/css">
	body{
		 margin:0;
		 font-family:sans-serif;
		 background:#f2f2f2;	 
	}
	h3{
		text-align:center;
		font-size:30px;
		margin:0;
		padding-top:10px;
	}
	
	.img-2
	{
		height:20px;
		width:20px;
		margin-bottom:5px;
	}
	a{
		text-decoration:none;
	}
	.gallery{
			display:flex;
			flex-wrap:wrap;
			width:100%;
			justify-content:center;
			align-items:center;
			margin:50px 0;
	}
	.content{
			width:20%;
			margin:15 px;
			box-sizing:border-box;
			float:left;
			text-align:center;
			border-radius:20px;
			cursor:pointer;
			padding-top:10px;
			box-shadow:0 14px 28px rgba(0,0,0,0.25),
			0 10px 10px rgba(0,0,0,0.22);
			transition:.4s;
			background:#f2f2f2;
	}
	.content:hover{
		box-shadow: 0 3px 6px rgba(0,0,0,0.16),
		0,3px 6px rgba(0,0,0,0.23);
		transform:translate(0px,-8px);		
	}
	.img-1{
		width:200px;
		height:200px;
		text-align:center;
		margin:0 auto;
		display:block;
	}
	.img-home{
		height:20px;
		width:20px;
		margin-bottom:5px;				
	}
	.im{
		height:35px;
		width:35px;
	}
	h6{
		font-size:26px;
		text-align:center;
		color:#222f3e;
		margin:0;
	}
	
	button{
		text-align:center;
		font-size:24px;
		background-color:blueviolet;
		color:#fff;
		width:100%;
		padding:15px;
		border:0;
		outline:none;
		cursor:pointer;
		margin-top:5px;
		border-bottom-right-radius:20px;
		border-bottom-left-radius:20px;
	}
	.buy-1{
		background:#2183a2;
	}
	.buy-2{
		background:#3b3e6e;
	}
	.buy-3{
		background:#ff9f43;
	}
	@media(max-width:1000px){
		.content{
			width:45px;
		}
	}
	@media(max-width:750px){
		.content{
			width:100%;
		}
	}
	.b{
		padding-top:5px;
		margin-left:1200px;
	}
	
         .container1 {
            max-width: 1000px;
            margin: auto;
            padding: 20px;
        }

        .row1{
            display: flex;
            flex-wrap: wrap;
            margin: -10px;
        }

        .product {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: inline-block;
            width: calc(33.33% - 20px);
            vertical-align: top;
            text-align: center;
        }


        .product h2 {
            margin-top: 0;
        }

        .product img {
            max-width: 100%;
            height: auto;
        }
  </style>
	<script>
	if(window.history.replaceState)
	{
		window.history.replaceState(null,null,window.location.href);
	}
	</script>
    <link rel="stylesheet" href="style.css">
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
		
			$count=0;
			if(isset($_SESSION['cart']))
			{
					$count=count($_SESSION['cart']);
			}				
	?>  
	<div class="b">
				<a href="mcart.php" class="btn btn-outline-success">My Cart(<?php echo $count; ?>)</a>
	</div>
	<div class="container" id="product-cards">
      <h1 class="text-center">IP CAMERA</h1>
		<?php 
			$SITE="http://localhost/SafeCam/";
				$con=mysqli_connect("localhost","root","","admin");
				$sel = "SELECT * FROM ic";
				$res = mysqli_query($con,$sel);
			 	if (mysqli_num_rows($res) > 0)
				{
					echo "<div class='row1'>";
					while($row = mysqli_fetch_assoc($res))
					{
						$id = $row['Product_id'];
						echo "<a href=' ". $SITE . "ic.php?pid=".$id."'>";
			            echo "<div class='product'>";
		                echo "<img src='images/" . $row['Image'] . "' alt='Product Image'width=\"150\" height=\"200\">";
		                echo "<h2>" . $row['Product_name'] . "</h2>";
		                echo "<p>Type : " . $row['Product_type'] . "</p>";
		                echo "<p>Price : " . $row['Price'] . "</p>";
		                echo "<h2><a href=''></a></h2>";
		                echo "<form action='mdc.php' method='POST'>";
		                echo "<button type='submit' name='Add_To_Cart'>Add To Cart</button>";
		                echo "<input type='hidden' name='Product_name' value=' ". $row['Product_name'] . "'>
							  <input type='hidden' name='Price' value='" . $row['Price'] ."'>
							  <input type='hidden' name='Product_id' value='" . $row['Product_id'] ."'>
							  <input type='hidden' name='Product_img' value='" . $row['Image'] ."'>
					         ";
		                echo "</form>";						
		                echo "</div>";
		                echo "</a>";
					}
				}
				else
				{
					echo "<script>
					alert('No record found');
					</script>";
				}
				?>
        	
    	</div>
    	</div>
		
    <a href="#" class="arrow"><i><img src="./images/arrow.png" alt=""></i></a>
	<?php
		include("footer.php");
	?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>