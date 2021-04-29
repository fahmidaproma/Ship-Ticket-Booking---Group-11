<html>
	<head>	
	</head>
	<body>
<?php
session_start();
	$_SESSION['message']="";
	require_once "models/db_config.php";
    $uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$email="";
	$err_email="";
	$hasError=false;
	$err_message="";
	
	 	
	if($_SERVER["REQUEST_METHOD"] == "POST"){		
	   if(empty($_POST["uname"])){
		   $err_uname="*Username Required";
		   $hasError = true;
	   }
	   else if(strlen($_POST["uname"])<3)
  	 {
  	  $err_uname="*Username Must Contain At Least 3 Character";
  	 }
	   else{
		   $uname = htmlspecialchars($_POST["uname"]);
	   }
	   if(empty($_POST["pass"])){
		   $err_pass="*Password Required";
		   $hasError = true;
	   }
	   else if(strlen($_POST["pass"])<4)
  	 {
  	  $err_pass="*Password Must Contain At Least 4 Character";
  	 }
	   else{
		   $pass = htmlspecialchars($_POST["pass"]);
	   }
	   if(empty($_POST["email"])){
		   $err_email="*Email ID Required";
		   $hasError = true;
	   }
	   else{
		   $email= htmlspecialchars($_POST["email"]);
	   }
	if(!$hasError){
		$query = "insert into delete_customer values('$uname','$pass','$email')";
			execute($query);							  
		}
	}
	
?>
<html>
     <head>
	     <link rel="stylesheet" type="text/css" href="styles/mystyle.css">
	      <style>
						  
		  </style>
	 </head>
     <body>
	      
	 
	      <div class="signupdiv">
		 
		  			  			  
		      <table align="center">
				  <tr>
					<td colspan="2" align="center"><span class="err-msg"><?php echo $err_message;?></span>
					</td>
				  </tr>
			      <tr>
				    <!--<td align="center"><img src="resources/user.png" width="150px" height="150px"></td>-->
		            <td><h1 align="center" style="font-family:verdana;">Delete Customer</h1></td>
					
			      </tr>
			  </table>
			  <form action="" method="post"  onsubmit="return validate()">
			 
				  <table align="center">
						<tr>
						   <td><span class="my-font">Username </span></td>
						   <td>:
						   <input class="my-font my-text-field" type="text" value="<?php echo $uname;?>" placeholder="Username" name="uname">
						   <br><span class="err-msg"><?php echo $err_uname;?></span>
						</td>
					    </tr>
					    <tr>
						   <td><span class="my-font">Password </span></td>
						   <td>:<input class="my-font my-text-field" type="password" placeholder="Password"  name="pass">
						   <br><span class="err-msg"><?php echo $err_pass;?></span></td>
					    </tr>
				
						<tr>
					   <td><span class="my-font">Email ID</span></td>
					   <td>:
					   <input class="my-font my-text-field" type="email" placeholder="Email" name="email" value="<?php echo $email?>"
					    <br><span class="err-msg"><?php echo $err_email?> </span></td>
				       </tr>
					   <tr>
					   <td colspan="2" align="center">
						<p><span><input type="checkbox"></span>I agree to the terms of services</p>
						</td>
						</tr>
					    <tr>
						   <td colspan="2" align="center"><input class="btn-mine my-font" type="submit"  value="Delete" name="signup">	</td>	   
					    </tr>
						
				  </table>
				  
				  
			  
			  </form>
		  </div>
		  
		  
		  
		  
		  
		  
	 </body>
</html>