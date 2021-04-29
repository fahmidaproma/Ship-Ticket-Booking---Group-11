<?php
require_once 'managerSignupController.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</head>
<style>
/* body {
 background-image: url("queen.png");
 background-repeat: no-repeat;
 background-size: cover;

} */
   body{
       margin:0;
       padding:0;
   }
   form{
       margin-left:800px;
       margin-top:200px;
       width:20%;
   }
   .btn-success{
       margin-top:10px;
   }
   .nav-bar {
    height: 15px;
    display: flex;
    gap: 40px;
}
.nav-bar a {
    text-decoration: none;
    color: rgba(54, 57, 88, 1);
    height: 40px;
    width: auto;
    border-radius: 5px;
    padding: 5px 3px;
}
.nav-bar a:hover{
    background-color: rgba(54, 57, 88, 1);
    color: white;
}


.head-section {
    margin: 50px 100px 0 200px;
    display: flex;
    gap: 800px;
}
</style>
<body>

<section class="head-section">
<div class="nav-bar">
                
                <a href="index.php">Home</a>
                <a href="dashboard.php">Admin Dashboard</a>
                <a href="managerList">Manager Dashboard</a>
                <a href="allcategories.php">Add Ship Package</a>

           </div>
           </section>

<div class ="section1">
<form method="post" action="" onsubmit="return validate()">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name"  name="name" placeholder="Enter Name" >
    <span id="nameError"><?php echo $err_name?></span>
  </div>
  <div class="form-group">
    <label for="email">E-mail</label>
    <input type="text" class="form-control" id="email"  name="email" placeholder="Enter your e-mail" >
    <span id="mailError"><?php echo $err_email?></span>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password"  name="password" placeholder="Choose your password" >
    <span  id="passError"><?php echo $err_password?></span>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password1" name="password1" placeholder="Confirm password" >
    <span  id="pass1Error"><?php echo $err_password1?></span>
  </div>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username"  name="username" onfocusout="checkUsername(this)" placeholder="Enter a username" >
    <span  id="usernameError"><?php echo $err_username?></span>
  </div>
  <div class="form-group">
    <label for="Contact">Contact</label>
    <input type="tel" class="form-control" id="contact"  name="contact" placeholder="Phone No." >
    <span  id="contactError"><?php echo $err_contact?></span>
  </div>
<div class="form-group">
    <label for="gender">Gender </label><br>
    <input type="radio" value="male" id="male" name="gender">Male<br>
    <input type="radio" value="female" id="female" name="gender">Female<br>
    <span  id="genderError"><?php echo $err_gender?></span>
  </div>
 
  <button type="submit" class="btn btn-success" id="confirm-signup" name="reg" >Signup</button>
  <p>Already have an account?</p>
  <a  href="login.php">LOGIN</a>
</form>
</div>
</body>

<script>
function validate(){

var hasError=false;
 
 var checkName = document.getElementById("name").value;
 var checkEmail = document.getElementById("email").value;
 var checkPass = document.getElementById("password").value;
 var checkPass1 = document.getElementById("password1").value;
 var checkUsername = document.getElementById("username").value;
 var checkContact = document.getElementById("contact").value;


 if(checkName == ""){
  document.getElementById("nameError").innerHTML = "Name Required";
  document.getElementById("nameError").style.color="red";
  hasError=true;
}


if(checkEmail == ""){
  document.getElementById("mailError").innerHTML = "Email Required";
  document.getElementById("mailError").style.color="red";
  hasError=true;
}

if(checkPass == ""){
  document.getElementById("passError").innerHTML = "Password Required";
  document.getElementById("passError").style.color="red";
  hasError=true;
}

if(checkPass1 == ""){
  document.getElementById("pass1Error").innerHTML = "Password Required";
  document.getElementById("pass1Error").style.color="red";
  hasError=true;
}

if(checkUsername == ""){
  document.getElementById("usernameError").innerHTML = "Username Required";
  document.getElementById("usernameError").style.color="red";
  hasError=true;
}

if(checkContact == ""){
  document.getElementById("contactError").innerHTML = "Contact Required";
  document.getElementById("contactError").style.color="red";
  hasError=true;
}

if(!getElementById("male").checked && !getElementById("female").checked ){
    getElementById("genderError").innerHTML="Select gender";
    getElementById("genderError").style.color="red";
				hasError=true;
			}

      if(!hasError){
		  return true;
		   }		  
			return false;
}

    //     function cleanUp(){
    //         getElementById ("nameError").innerHTML="";
    //         getElementById ("mailError").innerHTML="";
    //         getElementById ("passError").innerHTML="";
    //         getElementById ("pass1Error").innerHTML="";
    //         getElementById ("usernameError").innerHTML="";
    //         getElementById ("contactError").innerHTML="";
    //         getElementById ("genderError").innerHTML="";

		// }

    function checkUsername(control){
		var username = control.value;
		if(username.length<4){
			document.getElementById("usernameError").innerHTML = "<br> Username should have atleast 4 characters";
			return;
		}
		//ajax
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200){
				//when server respond
				var rsp = this.responseText.trim();;
				if(rsp == "true"){
					document.getElementById("usernameError").innerHTML = "<br>Valid";
				}else{
					document.getElementById("usernameError").innerHTML = "Username is alreade taken";
				}
			}
		};
		xhttp.open("GET","checkManagerUsername.php?username="+username,true);
		xhttp.send();
	}
    
			

	 </script>
</html>
