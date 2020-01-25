<?php
	if(isset($_SESSION['username']) || isset($_SESSION['session_id']))
		header("location:admin-main.php");
?>

<html>
	<head>
		<title>Admin Login</title>
		<link rel="stylesheet" href="css/login-style.css">
	</head>
	<body>
		<hgroup>
		  <h1>Admin Login | ITSA</h1>
		</hgroup>
		<form method="post" action="login.php" id="login-form">
		  <div class="group">
			<input type="text" name="username"><span class="highlight"></span><span class="bar"></span>
			<label>Admin username</label>
		  </div>
		  <div class="group">
			<input type="password" name="password"><span class="highlight"></span><span class="bar"></span>
			<label>Password</label>
		  </div>
		  <button type="submit" name="submit" id="login-button" class="button buttonBlue">Login
			<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
		  </button>
		  <div id="snackbar">Invalid credentials. Please try again</div>
		</form>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/login-script.js"></script>
	</body>
</html>