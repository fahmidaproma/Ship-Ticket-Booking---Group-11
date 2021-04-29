<?php
	session_start();
	$_SESSION['message']="";
	require_once 'models/db_config.php';
	
	$id="";
	$err_id="";	
	$name="";
	$err_name="";
    $uname="";
	$err_uname="";
	$bonus="";
	$err_bonus="";
	$salary="";
	$err_salary="";
	$total_salary="";
	$err_total_salary="";
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
		else if(strlen($_POST["uname"])<5)
		{
		  $err_uname="*Username Must Contain At Least 5 Character";
		  $hasError = true;
		}
		else{
		   $uname = htmlspecialchars($_POST["uname"]);
		}
		
		if (empty($_POST["bonus"]))
		{
			$err_bonus = "*Employers Salary Bonus is required";
			$hasError = true;
  	    }	

		else{
		   $bonus = htmlspecialchars($_POST["bonus"]);
		}
	   
		if(empty($_POST["salary"])){
		   $err_salary="*Employers Salary Required";
		   $hasError = true;
		}
		
		else{
		   $salary = htmlspecialchars($_POST["salary"]);
		}
		
		if(empty($_POST["total_salary"])){
		   $err_total_salary="*Employers Total Salary Required";
		   $hasError = true;
		}
		
		else{
		   $total_salary = htmlspecialchars($_POST["total_salary"]);
		}
		
		if(!$hasError){
			//$_SESSION["employers"]=$name;
			$query = "insert into employee_salary_bonus values('$id','$name','$uname','$salary','$bonus','$total_salary')";
			execute($query);							  
		}
	}
	//declare validation veriables
	/*if(isset($_POST["add_employee_salary_bonus"])){
		//do validation
		insertEmployeeSalaryBonus($_POST["id"]);
		insertEmployeeSalaryBonus($_POST["name"]);
		insertEmployeeSalaryBonus($_POST["uname"]);
		insertEmployeeSalaryBonus($_POST["salary"]);
		insertEmployeeSalaryBonus($_POST["bonus"]);
		
	}*/
	
	function insertEmployeeSalaryBonus($id,$name,$uname,$salary,$bonus,$total_salary){
		$query = "insert into employee_salary_bonus values('$id','$name','$uname','$salary','$bonus','$total_salary')";		
		execute($query);
		header("Location: AllEmployeeSalaryBonus.php");
	}
	function getEmployeeSalaryBonus($id,$name,$uname,$salary,$bonus,$total_salary){
		$query = "select * from employee_salary_bonus where ID=$id and Name=$name and Username=$uname and Employers_Salary=$salary and Salary_Bonus=$bonus and Total_Salary=$total_salary";
		$result = get($query);
		
		if(count($result) > 0){
			return $result[0];
		}
		return false;
	}
	function getAllEmployeeSalaryBonus(){
		$query = "select * from employee_salary_bonus";
		$result = get($query);		
		return $result;		
	}
	
	
	
	
?>