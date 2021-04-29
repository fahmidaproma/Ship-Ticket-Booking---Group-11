<?php
require_once "db_config.php";
// $_SESSION['name']="riri321";
$email = $passwords = "";
$err_email = $err_password="";
$hasError = false;

if($_SERVER["REQUEST_METHOD"]=="POST"){
  $email =$_POST["email"];
  $passwords =$_POST["password"];
  $query = "select * from all_manager where email='$email' and password='$passwords'";
  $result = get($query);

  if ((empty($_POST["email"])) && (empty($_POST["password"]))){
    $hasError = true;
    $err_email="* Email Required";
    $err_password="* Password Required";
  }
  else if(empty($_POST["email"])){
    $hasError = true;
    $err_email="* Email Required";
  }
  else if(empty($_POST["password"])){
      $hasError = true;
      $err_password="* Password Required";
    }
  else if(count($result)>0){
      header("Location: managerList.php");
    }
  else{
    $err_password="* Username or Password doesn't match";
  }
}
?>