<?php
	session_start();
?>
<html>
	<head>
		<title>
			Cancel Booked Tickets
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 68px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
<?php
	$pnr ="";
    $err_pnr ="";
	$hasError = false;
	if($_SERVER["REQUEST_METHOD"]=="POST"){
	  if(empty($_POST["pnr"])){
		  $hasError = true;
		  $err_pnr = "* required";
	  } else{
		  $pnr = htmlspecialchars ($_POST["pnr"]);
	  }
	  if(!$hasError){
			header("Location:dashboard.php");
		}
	
	}
?>
	
		<img class=" card-border" src="ship.jpg"/> 
		<h1 id="title">
			Ship
		</h1>
		<div>
			<ul>
				<li><a href="home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="dashboard.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="ships.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="ships.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<form action="" method="post">
			<h2>CANCEL BOOKED TICKETS</h2>
			<table cellpadding="5" style="padding-left: 30px;">
				<tr>
					<td class="fix_table">Enter the PNR</td>
				</tr>
				<tr>
					<div class="form-group">
			<h4 class="text">PNR</h4> 
			<input type="password" name="PNR" value="<?php echo $pnr;?>" class="form-control">
			<span><?php echo $err_pnr;?></span>
		</div>
				</tr>
			</table>
			<br>
			<input type="submit" value="Cancel Ticket" name="Cancel_Ticket">
		</form>
		
	</body>
</html>