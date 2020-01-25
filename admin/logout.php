<?php
	session_start();
	unset($_SESSION['logged-in']);
	if(session_destroy())
		header("location:index.php");
?>