<?php
     session_start();
     require_once 'models/db _config.php';
	  
	$username="";
	$err_username="";
	
	$email="";
	$err_email="";
	
	$password="";
	$err_password="";
	$hasError=false;
	
	if($_SERVER["REQUEST_METHOD"]=="POST"){
	    if(empty($_POST["username"])){
		  $hasError = true;
		  $err_username = "* required";
	    }
		else{
			$username = $_POST["username"];
		}
		if(empty($_POST["email"])){
			$hasError= true;
			$err_email = "<br>* Required";
		}
		else{
			$email = $_POST["email"];
		}
		if(empty($_POST["password"])){
			$hasError= true;
			$err_password = "<br>* Required";
		}
		else{
			$password = $_POST["password"];
		}
			
		if(!$hasError){
        $query = "insert into login values('$username','$password','$email')";
        execute($query);
		$_SESSION["loggedin"]= $username;
			header("Location: dashboard.php");
		}
	}

		
?>