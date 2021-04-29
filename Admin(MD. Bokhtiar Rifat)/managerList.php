<?php
require_once "managerSignupController.php";
$result = getAllManager();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.container{
    margin-top:5%;
}
  .nav-bar {
    height: 15px;
    display: flex;
    gap: 40px;
    
}
.nav-bar a {
    /* text-decoration: none; */
    color: rgba(54, 57, 88, 1);
    height: 40px;
    width: auto;
    border-radius: 5px;
    padding: 5px 3px 4px 3px;
}
.nav-bar a:hover{
    background-color: rgba(54, 57, 88, 1);
    color: white;
    text-decoration: none;
}


.head-section {
    margin: 50px 100px 0 200px;
    display: flex;
    gap: 800px;
}
</style>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<section class="head-section">
<div class="nav-bar">
                
                <a href="index.php">Home</a>
        
                <a href="allcategories.php">Ship Package</a>
        
                <a href="managerLogin.php">Manager Login</a>
                <a href="#">Customer Login</a>

           </div>
           </section>
<div class="container">
  <h2>Manager List</h2>         
  <table class="table table-hover">
    <thead>
      
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Username</th>
      <th>Contact</th>
      <th>Gender</th>
      <th></th>
	  <th></th>
     
    </thead>
    <tbody>
    <?php
    foreach($result as $row){
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["email"]."</td>";
    echo "<td>".$row["username"]."</td>";
    echo "<td>".$row["contact"]."</td>";
    echo "<td>".$row["gender"]."</td>";

    echo "</tr>";
    }
    ?>
    </tbody>
  </table>
</div>

</body>
</html>