<?php 
/*
session_start();

$_SESSION = array();

if(ini_get("session.use_cookies")){

	$param = session_get_cookie_params();
	setcookie(session_name(), '', time() - 42000,
		$param['path'], $param['domain'],
		$param['secure'], $param['httponly']
);

}

session_destroy();
*/

session_start();

session_unset();

session_destroy();

header("Location: login.php");
 ?>