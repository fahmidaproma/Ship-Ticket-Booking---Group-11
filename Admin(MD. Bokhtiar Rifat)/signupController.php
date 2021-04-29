<?php
require_once 'db_config.php';
// session_start();
$name = $email = $passwords = $password1 =  $username = $contact = $gender = "";
$err_name = $err_email = $err_password = $err_password1 = $err_username = $err_contact = $err_gender =""  ;
$hasError = false;

if($_SERVER["REQUEST_METHOD"]=="POST"){

      if(empty($_POST["name"])){
        $err_name="* Name Required";
        $hasError = true;
      }
      else{
        $name = $_POST["name"];
      }

      if(empty($_POST["email"])){
        $err_email="* Email Required";
        $hasError = true;
      }
      else if(!filter_var( $_POST["email"],FILTER_VALIDATE_EMAIL)){
        $err_email="* Unvalid email";
        $hasError = true;
            }
      else{
        $email = $_POST["email"];
      }

      if(empty($_POST["password"])){
        
        $err_password="* Password Required";
        $hasError = true;
      }
      else{
        $passwords = $_POST["password"];
      }

      if(empty($_POST["password1"])){
        
        $err_password1="* Insert your password again";
        $hasError = true;
      }
      else if(($_POST['password'] !== $_POST['password1'])){
        
        $err_password1="* Password didn't match";
        $hasError = true;
      }
      else{
        $password1 = $_POST["password1"];
      }

      if(empty($_POST["username"])){
        
        $err_username="* Username Required";
        $hasError = true;
      }
      else{
        $username= $_POST["username"];
      }

      if(empty($_POST["contact"])){
        
        $err_contact="* Contact Required";
        $hasError = true;
      }
      else if(($_POST['contact'] < 0) || !filter_var($_POST["contact"], FILTER_VALIDATE_INT)){
        
        $err_contact="* Invlaid contact";
        $hasError = true;
      }
      else{
        $contact = $_POST["contact"];
      }

      if(!isset($_POST["gender"])){
        
        $err_gender ="* Gender Required";
        $hasError = true;
      }
      else{
        $gender = $_POST["gender"];
      }

      $name = validate($_POST["name"]);
      $email = validate($_POST["email"]);
      $passwords = validate($_POST["password"]);
      $password1 = validate($_POST["password1"]);
      $username = validate($_POST["username"]);
      $contact = validate($_POST["contact"]);
      // $gender =  validate($_POST["gender"]);

    if(!$hasError){

      insertAdmin($name , $email , $passwords ,  $username , $contact , $gender );
 
        header("Location: dashboard.php");

  }

  }
  function insertAdmin($name,$email,$passwords,$username,$contact,$gender){
    $query = "INSERT INTO all_admin values(NULL,'$name','$email','$passwords','$username','$contact','$gender')";  
    execute($query);

  }
  function validate($data){
      $data=trim($data);
      $data=stripcslashes($data);
      $data=htmlspecialchars($data);
      return $data;
  }

  function getAllAdmin(){
    $query = "SELECT * FROM all_admin";
    $result = get($query);
    return $result;
  }
  

function checkUsernameValidity($username){
  $query = "select * from all_admin where username='$username'";
  $result = get($query);
  
  if(count($result) > 0){
    return "false";
  }
  return "true";
  }

?>

 



