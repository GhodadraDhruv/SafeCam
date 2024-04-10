<?php

	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$con = new mysqli('localhost','root','','test');
	if($con->connect_error)
	{
			die("Failed to Connect : ".$con->connect_error);
	}
	else
	{
		$stmt = $con->prepare("select * from registration where email = ?");
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$stmt_result=$stmt->get_result();
		if($stmt_result->num_rows > 0 )
		{
			$data=$stmt_result->fetch_assoc();
			if($data['password']===$password){
				echo "<script>
						alert('Login successfully...');
						window.location.href='index.php';
					</script>";
			}
			else
			{
				
				echo "<script>
						alert('Invalid Email or Password');
						window.location.href='login.php';
					</script>";
			}
		}
		else
		{
			echo "<script>
						alert('Invalid Email or Password');
						window.location.href='login.php';
					</script>";
		}
	}
?>