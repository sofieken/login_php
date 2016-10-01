
<?php 
session_start();

?>
<?php
$curpage='restricted.php';
include 'menumenu.php';
?>



<?php if(isset($_SESSION['uid'])){ 

	header("location: login.php");
 }else{
	echo '<h1>Welcome to the secret page, you have succesfully logged in!</h1>';
	echo '<a href="logout.php">logout</a>';

}
?>


