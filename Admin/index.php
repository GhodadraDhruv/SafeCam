
<html lang="en">

<head>
   <title>Safe Cam</title>  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link href="assets/css/style.css" rel="stylesheet">
	<style type="text/css">
		.x{
			margin-right:370px;
		}
		
	</style>
</head>

<body>
	<?php
			include("header.php");
      include("conne.php");
	?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <table class="mt-3 table text-center table-dark">
  <thead>
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Phone No</th>
      <th scope="col">Address</th>
      <th scope="col">Pay Mode</th>
      <th scope="col">Orders</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $query="SELECT * FROM `order_manager`";
      $user_result=mysqli_query($conn,$query);
      while($user_fetch=mysqli_fetch_assoc($user_result))
      {
         echo"
              <tr>
                  <td>$user_fetch[Order_id]</td>
                  <td>$user_fetch[Full_Name]</td>
                  <td>$user_fetch[Phone_No]</td>
                  <td>$user_fetch[Address]</td>
                  <td>$user_fetch[Pay_Mode]</td>
                  <td>           
                    <table class='table text-center table-dark'>
                    <thead>
                      <tr>
                        <th scope='col'>Item Name</th>
                        <th scope='col'>Price</th>
                        <th scope='col'>Image</th>
                        <th scope='col'>Quantity</th>
                </tr>
                    </thead>
                    <tbody> 
                  ";
        $order_query="SELECT * FROM `user_orders` WHERE `Order_id`='$user_fetch[Order_id]'";
        $order_result=mysqli_query($conn,$order_query);
        while ($order_fetch=mysqli_fetch_assoc($order_result))
        {
            echo"
              <tr>
                  <td>$order_fetch[Item_Name]</td>
                  <td>$order_fetch[Price]</td>
                  <td><img src='images/".@$order_fetch['Image']."' alt='Product Image'width=\"100\" height=\"100\"></td>
                  <td>$order_fetch[Quantity]</td>
              </tr>          
            ";
        }
         echo"
                    </tbody>
                    </table>
                </td>
            </tr>         
         ";
      }
    ?>
  </tbody>
</table>
      </div>
    </div>
  </div>
	<?php
			include("footer.php");
	?>
</body>
</html>