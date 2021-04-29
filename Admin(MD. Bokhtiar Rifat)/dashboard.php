<?php
require_once "signupController.php";

$result = getAllAdmin();

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
        
                <a href="managerSignup.php">Add Manager</a>
                <a href="managerLogin.php">Manager Login</a>

           </div>
           </section>

<div class="container">
  <h2>Admin List</h2>         
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
    echo "<td>".$row["ID"]."</td>";
    echo "<td>".$row["Name"]."</td>";
    echo "<td>".$row["Email"]."</td>";
    echo "<td>".$row["Username"]."</td>";
    echo "<td>".$row["Contact"]."</td>";
    echo "<td>".$row["Gender"]."</td>";
    // echo '<td><a href="editAdmin.php?id='.$row["id"].'" class="btn btn-success">Edit</a></td>';
		// echo '<td><a href="deleteAdmin.php?id='. $row["id"].'" class="btn btn-danger">Delete</a></td>';
    echo "</tr>";
    }
    ?>
    </tbody>
  </table>
</div>

</body>
</html>