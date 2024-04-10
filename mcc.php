<?php
session_start();
	
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(isset($_POST['Add_To_Cart']))
		{
			if(isset($_SESSION['cart']))
			{
				$myitems=array_column($_SESSION['cart'],'Product_name');
				if(in_array($_POST['Product_name'],$myitems))
				{
					echo "<script>
					alert('Item Already Added');
					window.location.href='prm.php';
					</script>";
				}
				else
				{
					
					$count=count($_SESSION['cart']);
					$_SESSION['cart'][$count]=array('Product_name'=>$_POST['Product_name'],'Price'=>$_POST['Price'],'filename'=>$_POST['Product_img'],'Quantity'=>1);
					echo "<script>					
						alert('Product Added');
						window.location.href='prm.php';
					</script>";
				}
			}
			else
			{
				$_SESSION['cart'][0]=array('Product_name'=>$_POST['Product_name'],'Price'=>$_POST['Price'],'Image'=>$_POST['Product_img'],'Quantity'=>1);
				echo "<script>
					alert('Product Added');
					window.location.href='prm.php';
				</script>";
			}
		}
		if(isset($_POST['rm_p']))
		{
			foreach($_SESSION['cart'] as $key => $value)
			{
				if($value['Product_name']==$_POST['Product_name'])
				{
					unset($_SESSION['cart'][$key]);
					$_SESSION['cart']=array_values($_SESSION['cart']);
					echo "<script>
						alert('Product Removed');
						window.location.href='mcart.php';
					</script>";
				}
			}
		}
		if(isset($_POST['Mod_Quantity']))
		{
			foreach($_SESSION['cart'] as $key => $value)
			{
				if($value['Product_name']==$_POST['Product_name'])
				{
					$_SESSION['cart'][$key]['Quantity']=$_POST['Mod_Quantity'];
					
					echo "<script>
						window.location.href='mcart.php';
					</script>";
					}
			}
		}
	}
	
?>