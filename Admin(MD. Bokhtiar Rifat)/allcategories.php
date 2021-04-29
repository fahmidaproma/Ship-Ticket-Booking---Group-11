<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<style>
	body{
		width:80%;
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
    margin: 50px 100px 150px 700px;
    display: flex;
    gap: 800px;
}
.form-section{
  width:50%;
}
.center{
	margin-left:200px;
}
</style>
</head>
<body>

<section class="head-section">
<div class="nav-bar">
                
                <a href="index.php">Home</a>
        
                <a href="dashboard.php">Admin Dashboard</a>
        
                <a href="managerList.php">Manager Dashboard</a>
                <a href="managerLogin.php">Manager Login</a>

           </div>
           </section>
		   <?php 
      require_once 'CategoryController.php';
	  $categories = getAllCategories();
	
?>

<div class="center">
	<h3 class="text">All Categories</h3>
	<table class="table table-hover">
		<thead>
			<th>Index</th>
			<th>Package Name</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				foreach($categories as $category){
					echo "<tr>";
						echo "<td>".$category["id"]."</td>";
						echo "<td>".$category["name"]."</td>";
						echo '<td><a href="editcategory.php?id='.$category["id"].'" class="btn btn-success">Edit</a></td>';
						echo '<td><a href="deleteCategory.php?id='. $category["id"] .'" class="btn btn-danger">Delete</a></td>';
					echo "</tr>";
				}
			?>

			
		</tbody>
	</table>
</div>
</body>
</html>







