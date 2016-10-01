<?php 

	

	//connect to database
	$db = mysqli_connect("localhost", "root", "", "BrugerLogin");
	
	if (isset($_POST['register_btn']))  {
		session_start();
	
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		
		if ($password == $password) {
			// create user
			$password = md5($password); //hash password before storing for security purpose
			$sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
			mysqli_query($db, $sql);
				$_SESSION['message'] = "You are now logged in";
				$_SESSION['username'] = $username;
				header("location: home.php"); //redirect to home page 
			}else{
				$_SESSION['message'] = "The two passwords do not match";
				}
	}



?>

