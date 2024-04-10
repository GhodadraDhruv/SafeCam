<?php 
    include('header.php');
	include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe Cam</title>
    
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
	.img-2
	{
		height:20px;
		width:20px;
		margin-bottom:5px;
	}
	.gallery{
			display:flex;
			flex-wrap:wrap;
			width:100%;
			justify-content:center;
			align-items:center;
			margin:50px 0;
	}
	.content-1{
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
	.content-1:hover{
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
	.checked{
		color:#ff9f43;
	}
	.fa:hover{
		transform:scale(1.3);
		transition:.6s;
	}
	button{
		text-align:center;
		font-size:24px;
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
	.x{
		margin-top:5px;
		margin-bottom:5px;
	}
	#shopnow{
    width: 150px;
    height: 90px;
    margin-top: -10px;
    margin-left: 10px;
    letter-spacing: 3px;
    color: white;
    background-color: black;
    font-weight: bold;
    border: none;
    cursor: pointer;
}

@media screen and (max-width:1000px){
    
    #shopnow{
        margin-top: 0px;
        width: 120px;
        height: 30px;
        font-size: 16px;
    }
}
.t{
    text-align: right;
}
  </style>
  <script>
	if(window.history.replaceState)
	{
		window.history.replaceState(null,null,window.location.href);
	}
</script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">           
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center border rounded bg-light my-5 ">
				<h1>MY CART</h1>
				<br><br>
			</div>
			<div class="col-lg-9">
				<table class="table">
				  <thead class="text-center">
				    <tr>
						<th scope="col">Serial No.</th>
						<th scope="col">Product Name</th>
						<th scope="col">Product Price</th>
						<th scope="col">Image</th>
						<th scope="col">Quantity</th>				                    
						<th scope="col">Total</th>				                    
						<th scope="col"></th>				                    
				    </tr>
				  </thead>
				  <tbody class="text-center">
				  	<?php 
						
				  	$total=0;
				  		if(isset($_SESSION['cart']))
				  		{
				  			
					  		foreach ($_SESSION['cart'] as $key => $value)
					  		{
								
					  			$ser=$key+1;
					  					
								echo "
									<tr>
										<td>$ser</td>
										<td>$value[Product_name]</td>
										<td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
										<td><img src='images/" .@$value['filename'] . "' alt='Product Image'width=\"100\" height=\"100\"></td>
										<td>	
											<form action='mdc.php' method='POST'>
												<input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
												<input type='hidden' name='Product_name' value='$value[Product_name]'>
											</form>
										</td>										
										<td class='itotal'></td>										
										<td><form action='mdc.php' method='POST'>
										<button name='rm_p' class='btn btn-sm btn-outline-danger'>REMOVE</button>
										<input type='hidden' name='Product_name' value='$value[Product_name]'>
										</form>
										</td>
									</tr>
								";
					  		}
				  		}
				  		
				  	?>
				    
				  </tbody>
				</table>
			</div>
			<div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4>Grand Total:</h4>
                    <h5 class="t" id="gtotal"></h5>
                    <br>
					<?php 
						if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
						{
					?>
                    <form action="purchase.php" method="POST">
						<div class="form-group">
							<label>Full Name</label>
							<input type="text" name="full_name" class="form-control" required>
						</div><br>
						<div class="form-group">
							<label>Phone Number</label>
							<input type="text" name="phone_no" class="form-control" required>
						</div><br>
						<div class="form-group">
							<label>Address</label>
							<input type="text" name="address" class="form-control" required>
						</div><br>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault2" checked>
							<label class="form-check-label" for="flexRadioDefault2">
							Cash On Delivery    
							</label>
						</div>
						<br>
							<button class="btn btn-primary btn-block" name="purchase">Buy Now</button>
                    </form>
					<?php
						 }
					?>
                </div>
            </div>
		</div>
	</div>
        </div>
    </div>
	<script>
		var gt=0;
		var iprice=document.getElementsByClassName('iprice');
		var iquantity=document.getElementsByClassName('iquantity');
		var itotal=document.getElementsByClassName('itotal');
		var gtotal=document.getElementById('gtotal');

		function subTotal()
		{
			gt=0;
			for (i=0; i<iprice.length; i++) 
			{
				itotal[i].innerText=(iprice[i].value) * (iquantity[i].value);

				gt=gt+(iprice[i].value) * (iquantity[i].value);
			}
			gtotal.innerText=gt;
		}
		subTotal();
	</script>
</body>
</html>
<?php 
    include('footer.php');
?>