<?php
	$server_name = "sql313.epizy.com";
	$user_name = "epiz_20458709";
	$password = "adminitsa123";
	$db_name = "epiz_20458709_itsa";
	
	$check = 1;
	
	$conn = mysqli_connect($server_name, $user_name, $password, $db_name);
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	
	if(strlen($name)<4){ // If length is less than 4 it will output JSON error.
        $check = 0;
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ 
		$check = 0;
    }


    if(!filter_var($phone, FILTER_SANITIZE_NUMBER_FLOAT)){
		$check = 0;
    }

    if(strlen($message)<3){
		$check = 0;
    }
	$sql_query = "INSERT INTO feedback_table (`id`, `name`, `email`, `phone`, `message`) VALUES(NULL, '$name', '$email', '$phone', '$message')";

	if($check == 1){
			mysqli_query($conn, $sql_query);
			echo 1;
	}
	else
		echo 0;
?>