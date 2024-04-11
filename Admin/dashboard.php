
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
            <div class="col-xxl-4 col-md-6"><br>
              <div class="card info-card sales-card">
			   <div class="card-body">
                  <h5 class="card-title">Total User</h5>

                  <div class="d-flex align-items-center">
                    <div class="ps-3">
                      <h6>7</h6>     
                    </div>
                  </div>
                </div>

              </div>
            </div>
			<div class="col-xxl-4 col-md-6"><br>
			<div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Total Cart</h5>

                  <div class="d-flex align-items-center">
                    <div class="ps-3">
                      <h6>7</h6>  
                    </div>
                  </div>
                </div>
			  </div>
              </div>               
		</div>
		<div class="row">
			 <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
			   <div class="card-body">
                  <h5 class="card-title">Total Products</h5>

                  <div class="d-flex align-items-center">
                    <div class="ps-3">
                      <h6>45</h6>      			
                    </div>
                  </div>
                </div>

              </div>
            </div>
			<div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
			   <div class="card-body">
                  <h5 class="card-title">Total Feeback</h5>

                  <div class="d-flex align-items-center">
                    <div class="ps-3">
                      <h6>2</h6>      			
                    </div>
                  </div>
                </div>

              </div>
            </div>
		</div>
	</div>
  	<?php
			include("footer.php");
	?>
</body>
</html>