<?php
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username == "admin" && $password == "adminitsa123")
	{
		$_SESSION['username'] = $username;
		$_SESSION['session_id'] = session_id();
		echo 1;
	} else{
		echo 0;
	}
?>