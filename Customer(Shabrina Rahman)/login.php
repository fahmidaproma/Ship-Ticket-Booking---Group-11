<?php include 'main_header.php';
	  require_once 'controller/loginController.php';
?>

<!--login starts -->
<div class="center-login">
	<h1 class="text text-center">Login</h1>
	
	
	<form action="" method="post" class ="form-horizontal form-material"  onsubmit="return validate()">

		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" id="username" name="username"value="<?php echo $username;?>" class="form-control">
			<span id="err_username"><?php echo $err_username;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" placeholder="password" id ="password" name="password" value="<?php echo $password;?>" class="form-control">
			<span id="err_password"><?php echo $err_password;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Email</h4> 
			<input type="text" id="email" name="email" value="<?php echo $email;?>" class="form-control">
			<span id="err_email"><?php echo $err_email;?></span>
		</div>
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-danger" name="btn_login" value="Login" class="form-control">
		</div>
		<div class="form-group text-center">
			
			<a href="signup.php" >Not registered yet? Sign Up</a>
		</div>
	</form>
</div>
<html>
<body>
</body>
<script>
        function get (id){
            return document.getElementById(id);
        }
       function validate(){
          
           cleanUp();
           var hasError=false;
         
           if(get("username").value == ""){
               get ("err_username").innerHTML="username Required<br>";
               get ("err_username").style.display="red";
               hasError=true;              
           }
           if(get("password").value == ""){
               get ("err_password").innerHTML="Password Required<br>";
               get ("err_password").style.display="red";
               hasError=true;              
           }
           
           if(get("email").value == ""){
               get ("err_email").innerHTML="Email Required<br>";
               get ("err_email").style.display="red";
               hasError=true;
             
           }
           if(!hasError){
           return true;
           }         
               return false;
          
       }
        function cleanUp(){
            get ("err_username").innerHTML="";
            get ("err_password").innerHTML="";
            get ("err_email").innerHTML="";
          
        }
    }
	
     </script>
	 </html>
<!--login ends -->
<?php include 'main_footer.php';?>