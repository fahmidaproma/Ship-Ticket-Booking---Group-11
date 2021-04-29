<?php include 'admin_header.php';?>
<!--dashboard starts -->
<html>
<body>
<?php
	session_start();
	if(!isset($_SESSION["loggedin"])){
		header("Location: signup.php");
		require_once "models/db _config.php";

	$query="select * from login";
	$result = get($query);
	}
?>

<h2>SHIP SCHEDULE </h2>

<table style="width:50%">
  <tr>
    <th>SHIP</th>
    <th>MORNING DEPARTURE</th> 
    <th>EVENING DEPARTURE</th>
  </tr>
  <tr>
    <td>saint cruise</td>
    <td>8.00 AM</td>
    <td>6.00 PM</td>
  </tr>
  <tr>
    <td>Ocean-1 </td>
    <td>9.00 AM</td>
    <td>6.30 PM</td>
  </tr>
  <tr>
    <td>The Luxurious</td>
    <td>9.30 AM</td>
    <td>7.00 PM</td>
  </tr>
</table>

</body>
</html>

<!--dashboard ends -->
<?php include 'main_footer.php';?>