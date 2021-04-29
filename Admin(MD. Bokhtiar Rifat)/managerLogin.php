<?php
require_once 'managerLoginController.php';
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
   body{
       margin:0;
       padding:0;
      
   }
   form{
       margin-left:80%;
       margin-top:30%;
       
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
.form-section{
  width:50%;
}

</style>
<body>
  <section class="head-section">
<div class="nav-bar">
                
                <a href="index.php">Home</a>
        
                <a href="allcategories.php">Ship Package</a>
        
                <a href="managerLogin.php">Manager Login</a>
                <a href="dashboard.php">Admin Dashboard</a>

           </div>
           </section>
<section class="form-section">
  
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
<h2 style="color:cornflowerblue">MANAGER LOGIN</h2>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
    <span style="color:blue"><?php echo $err_email?></span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
    <span style="color:blue"><?php echo $err_password?></span>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-success" value="login">LOGIN</button>
  <p>Haven't signed up yet? </p>
  <a href="managerSignup.php">SIGNUP</a>
</form>
</section>


</body>
</html>