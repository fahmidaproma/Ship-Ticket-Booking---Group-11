<?php
session_start();
	$_SESSION['message']="";
	require_once "models/db_config.php";
	$uname = "";
	$err_uname="";
	$id = "";
	$err_id="";
	$hasError=false;
	$err_message="";
	


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["uname"])) {
			$err_uname = "* Ship Name required";
		} 
		else {
			$uname = $_POST["uname"];
		}

		if (empty($_POST["id"])) {
			$err_id = "* Ship ID required";
		} 
		else {
			$id = $_POST["id"];
		}
         if(!$hasError){
		$query = "insert into delete_bookings values('$uname','$id')";
			execute($query);							  
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
	      
	 
	      <div>
		 
		  			  			  
		      <table align="center">
				  <tr>
					<td colspan="2" align="center"><span class="err-msg"><?php echo $err_message;?></span>
					</td>
				  </tr>
			      <tr>
				    <!--<td align="center"><img src="resources/user.png" width="150px" height="150px"></td>-->
		            <td><h1 align="center" style="font-family:verdana;">Delete Bookings</h1></td>
					
			      </tr>
			  </table>
		<form action="" method="post" onsubmit="validate()">
			<table align="center">
				<tr>
					<td><span>Ship Name</span></td>
					<td>:
						<input type="text" placeholder="Ship Name" name="uname" value="<?php echo $uname?>"
						<span><?php echo $err_uname?></span></td>
				</tr>
				<tr>
					<td><span> Ship ID</span></td>
					<td>:
						<input type="number" placeholder="Ship ID" name="id" value="<?php echo $id?>"
						<span><?php echo $err_id?></span></td>
				</tr>
				<tr>
					   <td colspan="2" align="center">
						<p><span><input type="checkbox"></span>I agree to the terms of services</p>
						</td>
						</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" value="Delete" name="submit">
				</tr>
				</div>
			</table>	
		</form>
	</body>
	 <script>
	   function validate(){
		  // alert("Login");
	   }
</html>