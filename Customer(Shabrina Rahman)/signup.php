
<?php include 'main_header.php';
	  require_once 'controller/SignupController.php';
?>

<!--sign up starts -->
<div class="center-login">
	<h1 class="text text-center">Sign Up</h1>
	<form action="" method="post"  class="form-horizontal form-material"  onsubmit="return validate()">
		<div class="form-group">
			<h4 class="text">Name</h4> 
			<input type="text" id="name" name="name" value="<?php echo $name;?>" class="form-control">
			<span id="err_name"><?php echo $err_name?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" id="uname" name="uname" value="<?php echo $uname;?>" class="form-control">
			<span id="err_uname"><?php echo $err_uname?></span><br>
		</div>
		<div class="form-group">
			<h4 class="text">Email</h4> 
			<input type="text" id="email" name="email" value="<?php echo $email;?>" class="form-control">
			<span id="err_email"><?php echo $err_email?></span><br> 
			
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password"  id="pass" name="pass" value="<?php echo $pass;?>" class="form-control">
			<span id="err_pass"><?php echo $err_pass?></span><br> 
		</div>
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-success" name="sign_up" value="Sign Up" class="form-control">
		</div>
		</form>
</div>
<html>
<body>
</body>
 <script>
        function get (id){
            return document.getElementById("id");
        }
       function validate(){
          
           cleanUp();
           var hasError=false;
           if(get("name").value == ""){
               get ("err_name").innerHTML="name Required<br>";
               get ("err_name").style.color="red";
               hasError=true;             
           }
         
           if(get("uname").value == ""){
               get ("err_uname").innerHTML="username Required<br>";
               get ("err_uname").style.color="red";
               hasError=true;              
           }
           if(get("pass").value == ""){
               get ("err_pass").innerHTML="Password Required<br>";
               get ("err_pass").style.color="red";
               hasError=true;              
           }
           
           if(get("email").value == ""){
               get ("err_email").innerHTML="Email Required<br>";
               get ("err_email").style.color="red";
               hasError=true;
             
           }
           if(!hasError){
           return true;
           }         
               return false;
          
       }
        function cleanUp(){
            get ("err_name").innerHTML="";
            get ("err_uname").innerHTML="";
            get ("err_pass").innerHTML="";
            get ("err_email").innerHTML="";
          
        }
    }
     </script>
</html>

 
