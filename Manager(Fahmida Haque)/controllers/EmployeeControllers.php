<?php
	require_once 'models/db_config.php';
	session_start();
	
	$id="";
	$err_id="";	
	$name="";
	$err_name="";
    $uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$cpass="";
	$err_cpass="";		
	$email="";
	$err_email="";	
	$num="";
	$err_num="";
	$add="";
	$err_add="";
	$gender="";
	$err_gender="";
	$birth="";
	$err_birth="";
	$hasError=false;
	$err_message="";
	
	 	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["id"])){
		   $err_id="*ID Required";
		   $hasError = true;
		}	 
		else{
		   $id = htmlspecialchars($_POST["id"]);
		}
		
		if(empty($_POST["name"])){
		   $err_name="*Name Required";
		   $hasError = true;
		}	 
		else{
		   $name = htmlspecialchars($_POST["name"]);
		}
		
		if(empty($_POST["uname"])){
		   $err_uname="*Username Required";
		   $hasError = true;
		}
		else if(strlen($_POST["uname"])>0 && strlen($_POST["uname"])<5)
		{
			$err_uname="*Username should contain atleast 5 character";
			$has_error=true;
		}
		else
		{
			$uname=htmlspecialchars($_POST["uname"]);
		}
	   
		if(empty($_POST["pass"])){
		   $err_pass="*Password Required";
		   $hasError = true;
		}
		else if(strlen($_POST["pass"])>0 && strlen($_POST["pass"])<8 )
		{
			$err_pass="*Password should contain atleast 8 character";
			$has_error=true;
		}
		else
		{
			$pass=htmlspecialchars($_POST["pass"]);
		}
		
		if(empty($_POST["cpass"])){
			$err_cpass="*Confirm your password.";
			$has_error=true;
		}
		else if(($_POST["pass"])!=($_POST["cpass"]))
		{
			$err_cpass="*Password doesn't match";
			$has_error=true;
		}
		else
		{
			$cpass=htmlspecialchars($_POST["cpass"]);
		}
	   
		if(empty($_POST["num"])){
		   $err_num="*Phone Number";
		   $hasError = true;
		}
		else if(strlen($_POST["num"])<11)
		{
		  $err_num="*Phone Number Must Contain At Least 11 Character";
		  $hasError = true;
		}
		else{
		   $num = htmlspecialchars($_POST["num"]);
		}
		
		if(empty($_POST["add"])){
		   $err_add="*Please give address";
		   $hasError = true;
		}	 
		else{
		   $add = htmlspecialchars($_POST["add"]);
		}
		
		if(isset($_POST["gender"])==false){
			$err_gender="*Select gender";
			$has_error=true;
		}
		else
		{
			$gender=$_POST["gender"];					
		}
								
		if (empty($_POST["email"]))
		{
			$err_email = "*Email is required";
			$hasError = true;
  	    }	

		else if(strpos($_POST["email"],"@")=="" || strpos($_POST["email"],".")=="")
		{
			$err_email="*Invalid Email Format";
			$has_error=true;
		}
		else
		{
			$email=htmlspecialchars($_POST["email"]);
		}
	 
		if(empty($_POST["birth"])){
		   $err_birth="*Date Of Birth Required";
		   $hasError = true;
		}
		else if(strlen($_POST["birth"])>0 && strlen($_POST["birth"])<10)
		{
			$err_birth="*Invalid date format";
			$has_error=true;
		}		
		else{
		   $birth = htmlspecialchars($_POST["birth"]);
		}
		if(!$hasError){
			//$_SESSION["employers"]=$name;
			$query = "insert into employers values('$id','$name','$uname','$pass','$email','$num','$add','$gender','$birth')";
			execute($query);							  
		}
	}
	
	
	//declare validation veriables
	/*if(isset($_POST["add_employers"])){
		//do validation
		insertEmployers($_POST["id"]);
		insertEmployers($_POST["name"]);
		insertEmployers($_POST["uname"]);
		insertEmployers($_POST["pass"]);
		insertEmployers($_POST["email"]);
		insertEmployers($_POST["num"]);
		insertEmployers($_POST["add"]);
		insertEmployers($_POST["gender"]);
		insertEmployers($_POST["birth"]);
	}*/
	
	function insertEmployers($id,$name,$uname,$pass,$email,$num,$add,$gender,$birth){
		$query = "insert into employers values('$id','$name','$uname','$pass','$email','$num','$add','$gender','$birth',)";		
		execute($query);
		header("Location: AllEmployers.php");
	}
	function getEmployers($id,$name,$uname,$pass,$email,$num,$add,$birth){
		$query = "select * from employers where id=$id and name=$name and uname=$uname and pass=$pass and email=$email and num=$num and add=$add and gender=$gender and birth=$birth";
		$result = get($query);
		
		if(count($result) > 0){
			return $result[0];
		}
		return false;
	}
	function getAllEmployers(){
		$query = "select * from employers";
		$result = get($query);		
		return $result;		
	}
	
	/*function UpdateEmployee($id,$name,$uname,$pass,$email,$num,$add,$birth){
		$query = "update employers set name='$name' where id=$id";
		execute($query);
		header("Location: AllEmployers.php");
	}*/
	
	function checkUsernameValidity($username){
		$query = "select * from employers where Username='$username'";
		$result = get($query);
		
		if(count($result) > 0){
			return "false";
		}
		return "true";
		}
?>