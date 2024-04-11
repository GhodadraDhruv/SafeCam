<?php
	if(isset($_POST['upload']))
	{
		$filename=$_FILES['uploadfile']["name"];
		$tmpname=$_FILES['uploadfile']['tmp_name'];
		$folder="./image/".$filename;
        $Product_name=$_REQUEST['pname'];
        $Product_type=$_REQUEST['ptype'];
        $Price=$_REQUEST['pprice'];

		$db=mysqli_connect("localhost","root","","admin");

		$sql="INSERT INTO product(Product_name,Product_type,filename,Price) VALUES('$Product_name','$Product_type','$filename','$Price')";

		mysqli_query($db,$sql);

		if(move_uploaded_file($tmpname,$folder))
		{
            
        }
		else  
		{
			echo "Failed to upload image!";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe Cam</title>
    <style type="text/css">
		.x{
			margin-left:390px;
		}
		
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>    
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">  
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Safe Cam</a>
	
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="x nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="adcategoryview.php">Category</a>
        </li>          
        </li> 
		<li class="nav-item">
          <a class="nav-link active" href="adproduct.php">Product</a>
        </li> 
		<li class="nav-item">
          <a class="nav-link active" href="adfeedback.php">Feedback</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" href="AdminLogin.php">Logout</a>
        </li>          
      </ul>
     
    </div>
  </div>
</nav>

      <div class="card">
        <div class="card-body">
        <h5 class="card-title">Add Product Form</h5>
        
        <form class="form-control" method="POST" action="adform.php" enctype="multipart/form-data">
            <div class="col-12">
            <label for="inputNanme4" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="pname">
            </div>
            <div class="col-12">
            <label class="form-label">Product Type</label>
            <input type="text" class="form-control" name="ptype">
            </div>
            <div class="col-12">
                  <label  class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="uploadfile">
                  </div>
            </div>
            <div class="col-12">
            <label class="form-label">Price</label>
            <input type="text" class="form-control"name="pprice">
            </div>
            <div class="text-center">
            <input type="submit" class="btn btn-info" name="upload" value="Submit">
            <button type="reset" class="btn btn-warning">Reset</button>
            </div>
        </form>
    
           </div>
        </div> 
        <?php
            include('footer.php');
        ?>
</body>
</html>
