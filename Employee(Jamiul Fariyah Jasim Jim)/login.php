<?php
    $uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	$err_message="";
	
	 	
	if($_SERVER["REQUEST_METHOD"] == "POST"){		
	   if(empty($_POST["uname"])){
		   $err_uname="Username Required";
		   $hasError = true;
	   }
	   else{
		   $uname = htmlspecialchars($_POST["uname"]);
	   }
	   if(empty($_POST["pass"])){
		   $err_pass="Password Required";
		   $hasError = true;
	   }
	   else{
		   $pass = htmlspecialchars($_POST["pass"]);
	   }
	   if(!$hasError){
		    header( "Location: dashboard.php");
						   
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
	      
		  <!--<div class="header my-font"  class="my-font" >Header</div>-->	  
	      <div class="logindiv">
		  			  			  
		      <table align="center">
				  <tr>
					<td colspan="2" align="center"><span class="err-msg"><?php echo $err_message;?></span>
					</td>
				  </tr>
			      <tr>
				    <td><img src="images/user.png" width="150px" height="150px"></td>
		            <td><h1 align="center" style="font-family:verdana;">Employee Login</h1></td>
			      </tr>
			  </table>
			  <form action="" method="post" onsubmit="validate()">
				  <table align="center">
						<tr>
						   <td><span class="my-font">Username: </span></td>
						   <td><input class="my-font my-text-field" type="text" value="<?php echo $uname;?>" placeholder="username" name="uname">
						   <br><span class="err-msg"><?php echo $err_uname;?></span>
						</td>
					    </tr>
					    <tr>
						   <td><span class="my-font">Password: </span></td>
						   <td><input class="my-font my-text-field" type="password" placeholder="password"  name="pass">
						   <br><span class="err-msg"><?php echo $err_pass;?></span></td>
					    </tr>
					    <tr>
                           <td colspan="2" align="right"><input class="btn-mine my-font" type="submit"  value="Login" name="login">    </td>      
                        </tr>
                  </table>
                  <p class="message">Already Signup? <a href="login.php">Login</a>
                        </p>
                       
                   
                       <p class="message">Not Registered? <a href="signup.php">Signup</a>
                        </p>
		
		</div>
				  </table>
			  </form>
		  </div>
		  
		  <!--<div class="footer my-font">Footer</div>-->
	 </body>
	 <script>
	   function validate(){
		   alert("Login");
	   }
	 </script>
</html>