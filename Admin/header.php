
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="x navbar-brand" href="#">Safe Cam</a>
	
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" href="dashboard.php">Dashboard</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="adindex.php">Index</a>
        </li>
         
		<li class="nav-item dropdown">	
							<a class="nav-link active dropdown-toggle" href="adDigitalcamera.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Category
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(67 0 86);">
								<?php
								$conn=mysqli_connect("localhost","root","","Admin");
								$cat=mysqli_query($conn,"select * from category where Product_id=1;");
								while($rcat=mysqli_fetch_array($cat))
								{
								?>
								<li><a class="nav-link" href="adprd.php?id=<?php echo $rcat[0]; ?>"><?php echo $rcat[1]; ?></a></li>																								
								
								<?php
								}
								?>
							
								<?php
								
								$cat=mysqli_query($conn,"select * from category where Product_id=2;");
								while($rcat=mysqli_fetch_array($cat))
								{
								?>
								<li><a class="nav-link" href="adprc.php?id=<?php echo $rcat[0]; ?>"><?php echo $rcat[1]; ?></a></li>																								
								
								<?php
								}
								?>

								<?php
								
								$cat=mysqli_query($conn,"select * from category where Product_id=3;");
								while($rcat=mysqli_fetch_array($cat))
								{
								?>
								<li><a class="nav-link" href="adpri.php?id=<?php echo $rcat[0]; ?>"><?php echo $rcat[1]; ?></a></li>																								
								
								<?php
								}
								?>

								<?php
								
								$cat=mysqli_query($conn,"select * from category where Product_id=4;");
								while($rcat=mysqli_fetch_array($cat))
								{
								?>
								<li><a class="nav-link" href="adprm.php?id=<?php echo $rcat[0]; ?>"><?php echo $rcat[1]; ?></a></li>																								
								
								<?php
								}
								?>

								<?php
								
								$cat=mysqli_query($conn,"select * from category where Product_id=5;");
								while($rcat=mysqli_fetch_array($cat))
								{
								?>
								<li><a class="nav-link" href="adprw.php?id=<?php echo $rcat[0]; ?>"><?php echo $rcat[1]; ?></a></li>																								
								
								<?php
								}
								?>

								<?php
								
								$cat=mysqli_query($conn,"select * from category where Product_id=6;");
								while($rcat=mysqli_fetch_array($cat))
								{
								?>
								<li><a class="nav-link" href="adprcatnew.php?id=<?php echo $rcat[0]; ?>"><?php echo $rcat[1]; ?></a></li>																								
								
								<?php
								}
								?>

							</ul>
				</li>
		<li class="nav-item">
          <a class="nav-link active" href="adproduct.php">Product</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link active" href="adcontact.php">Contact</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" href="adfeedback.php">Feedback</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" href="adcategoryview.php">Add Category</a>
        </li>		
		</ul>
    <a class="btn btn-warning" href="adlogout.php">Logout</a> 
    </div>
  </div>
</nav>
