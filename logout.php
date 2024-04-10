
<html>
<head>
	<title>login Page</title>
	
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
</head>
	<body background="1.png">
	<div class="container vh-100">
		<div class="row justify-content-center h-100">
			<div class="card w-25 my-auto shadow">
				<div class="card-header text-center bg-primary text-white">
					<h2>Login Form</h2>
				</div>
				<div class="card-body">
					<form action="login1.php" method="post">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" id="email" class="form-control" name="email" />
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" id="password" class="form-control" name="password" />
						</div>
						<input type="submit" class="btn btn-primary w-100" value="Login" name="">
					</form>
				</div>
				<div class="card-footer text-right">
					<small>&copy; Dhruv Ghodadra</small>
				</div>
			</div>
		</div>
	</div>
</body>
</html>