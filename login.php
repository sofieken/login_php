<?php
$curpage='login.php';
include 'menu.php';
?>

<?php require_once 'dbconst.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="author" content="Sofie Ken" />
	<title>Create user</title>
</head>
<body>


<div id="formular">
<p>Register here!</p>
<form action="createuser.php" method="post">
Email: <br>
<input type="email" name="email" required><br>
Password: <br>
<input type="password" name="password" required><br><br>

<input type="submit" name="submitReg" value="Register">
</form>
</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>login</title>
</head>
<body>
<br>
 <div id="formular">
 <p>Login here!</p>
<form action="loginlogic.php" method="post" name="login">
  Email: <br>
  <input type="email" name="email" required>
  <br>
  Password: <br>
  <input type="password" name="password" required>
  <br><br>
  <input type="submit" name="login" value="Login">
</form></div>
 
 <br><br>

</body>
</html>