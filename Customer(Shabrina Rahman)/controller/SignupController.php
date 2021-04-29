<?php
    session_start();
     require_once'models/db _config.php';
    $name ="";
    $err_name ="";
    $uname="";
	$err_uname="";
    $pass="";
	$err_pass="";
	$email="";
	$err_email="";
	$hasError = false;
  if($_SERVER["REQUEST_METHOD"]=="POST"){
	  if(empty($_POST["name"])){
		  $hasError = true;
		  $err_name = "* required";
	  } else{
		  $name = htmlspecialchars ($_POST["name"]);
	  }
	  if(empty($_POST["uname"])){
		  $hasError = true;
		  $err_uname = "* required";
	  } else{
		  $uname = $_POST["uname"];
	  }
	  if(empty($_POST["pass"])){
		  $hasError = true;
		  $err_pass = "* required";
	  } else{
		  $pass = htmlspecialchars ($_POST["pass"]);
	  }
	  if(empty($_POST["email"])){
		  $hasError = true;
		  $err_email = "* required";
	  }
	  else{
		  $email = htmlspecialchars ($_POST["email"]);
	  }
	  if(!$hasError){
        $query = "insert into signup values('$name','$uname','$email','$pass')";
	  execute($query);
	  echo $query;
	  }
		//$_SESSION["loggedin"]= $name;
			//header("Location: dashboard.php");
		
  }
    
  ?>
