<?php 
	session_start();
?>
<style>
.x{
	  margin-right:20px;
}

</style>
   
    <div class="top-navbar">
		
        <p><img class="img-2" src="./images/home.png">&nbsp;<a href="AdminLogin.php">Admin Login</a></p>
        <div class="icons">
            <a href="login.php"><img src="./images/register.png" alt="" width="18px">Login</a>
            <a href="register.php"><img src="./images/register.png" alt="" width="18px">Register</a>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php" id="logo">
		  <img class="im" src="images/logo.png" alt="">
		  <span id="span1">S</span>afe <span>Cam</span></a>
		  <p style="color:blue; margin-top:15px">Capture The Moment</p>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="./images/menu.png" alt="" width="30px"></span>
          </button>
		  
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product.php">Product</a>
              </li>
			  <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="prd.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Category
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(67 0 86);">
								<?php
								$conn=mysqli_connect("localhost","root","","Admin");
								$cat=mysqli_query($conn,"select * from category where Product_id=1;");
								while($rcat=mysqli_fetch_array($cat))
								{
								?>
								<li><a class="nav-link" href="prd.php?id=<?php echo $rcat[0]; ?>"><?php echo $rcat[1]; ?></a></li>																								
								
								<?php
								}
								?>
							
								<?php
								
								$cat=mysqli_query($conn,"select * from category where Product_id=2;");
								while($rcat=mysqli_fetch_array($cat))
								{
								?>
								<li><a class="nav-link" href="prc.php?id=<?php echo $rcat[0]; ?>"><?php echo $rcat[1]; ?></a></li>																								
								
								<?php
								}
								?>

								<?php
								
								$cat=mysqli_query($conn,"select * from category where Product_id=3;");
								while($rcat=mysqli_fetch_array($cat))
								{
								?>
								<li><a class="nav-link" href="pri.php?id=<?php echo $rcat[0]; ?>"><?php echo $rcat[1]; ?></a></li>																								
								
								<?php
								}
								?>

								<?php
								
								$cat=mysqli_query($conn,"select * from category where Product_id=4;");
								while($rcat=mysqli_fetch_array($cat))
								{
								?>
								<li><a class="nav-link" href="prm.php?id=<?php echo $rcat[0]; ?>"><?php echo $rcat[1]; ?></a></li>																								
								
								<?php
								}
								?>

								<?php
								
								$cat=mysqli_query($conn,"select * from category where Product_id=5;");
								while($rcat=mysqli_fetch_array($cat))
								{
								?>
								<li><a class="nav-link" href="prw.php?id=<?php echo $rcat[0]; ?>"><?php echo $rcat[1]; ?></a></li>																								
								
								<?php
								}
								?>

								<?php
								
								$cat=mysqli_query($conn,"select * from category where Product_id=6;");
								while($rcat=mysqli_fetch_array($cat))
								{
								?>
								<li><a class="nav-link" href="prcatnew.php?id=<?php echo $rcat[0]; ?>"><?php echo $rcat[1]; ?></a></li>																								
								
								<?php
								}
								?>

							</ul>
				</li>
			  <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="feedback.php">Feedback</a>
              </li>           
            </ul>  
		    <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>		
	</nav>