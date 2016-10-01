<?php
$curpage='login.php';
include 'menu.php';
?>

<?php  
if (isset($_POST['login'])) {
 	require_once('dbconst.php');


	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die('Missing or illegal email');
	$password = filter_input(INPUT_POST, 'password') or die('Missing or illegal parameter'); 
	
	//echo $email;
	//echo $name;
	//echo $sql;

   $sql = "SELECT id, password FROM users where email=?";
	
	$stmt = $link->prepare($sql);
    
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->bind_result($id, $phash);
    if($stmt->fetch()){
		$password = $password;
		$phash = $phash;
		 
	 if (password_verify($password, $phash)) {
			$_SESSION['uid'] = $email;
		?><meta http-equiv="refresh" content="0; url=http://localhost/login/phplogin2/restricted.php" /> <?php
		} else {
			echo ' ';
		}
        
}
}
?>


	<title>Log ind</title>


<p><a href="restricted.php">Secret information</a></p>
	