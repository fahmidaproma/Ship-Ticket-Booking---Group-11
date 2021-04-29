<html>
	<head>	
	</head>
	<?php
	require_once'models/db _config.php';
    $defrom="";
	$err_defrom="";
	$desti="";
	$err_desti="";
	$dtime="";
	$err_dtime="";
	$ddate="";
	$err_ddate="";
	$tcata="";
	$err_tcata="";
	$triptype="";
	$err_triptype="";
	$nooffirst="";
	$err_nooffirst="";
	$noofsecond="";
	$err_noofsecond="";
	$noofeco="";
	$err_noofeco="";
	$noofchild="";
	$err_noofchild="";
	$hasError=false;
	
	if($_SERVER["REQUEST_METHOD"]=="POST"){
	    if(empty($_POST["defrom"])){
		  $hasError = true;
		  $err_defrom = "* required";
	    }
		else{
			$defrom = $_POST["defrom"];
		}
		if(empty($_POST["desti"])){
			$hasError= true;
			$err_desti = "* Required";
		}
		else{
			$desti = $_POST["desti"];
		}
		if(empty($_POST["dtime"])){
			$hasError= true;
			$err_dtime = "* Required";
		}
		else{
			$dtime = $_POST["dtime"];
		}
				if(empty($_POST["ddate"])){
			$hasError= true;
			$err_ddate = "* Required";
		}
		else{
			$ddate = $_POST["ddate"];
		}
		if(empty($_POST["tcata"])){
			$hasError= true;
			$err_tcata = "* Required";
		}
		else{
			$tcata = $_POST["tcata"];
		}
		if(empty($_POST["triptype"])){
			$hasError= true;
			$err_triptype = "* Required";
		}
		else{
			$triptype = $_POST["triptype"];
		}
		if(empty($_POST["nooffirst"])){
			$hasError= true;
			$err_nooffirst = "* Required";
		}
		else{
			$nooffirst = $_POST["nooffirst"];
		}
		if(empty($_POST["noofsecond"])){
			$hasError= true;
			$err_noofsecond = "* Required";
		}
		else{
			$noofsecond = $_POST["noofsecond"];
		}
		if(empty($_POST["noofeco"])){
			$hasError= true;
			$err_noofeco = "* Required";
		}
		else{
			$noofeco = $_POST["noofeco"];
		}
		if(empty($_POST["noofchild"])){
			$hasError= true;
			$err_noofchild = "* Required";
		}
		else{
			$noofchild = $_POST["noofchild"];
		}
	if(!$hasError){
        $query = "insert into booking values('$defrom','$desti','$dtime','$ddate','$tcata','$triptype','$nooffirst','$noofsecond','$noofeco','$noofchild')";
        execute($query);
		}
	}
 ?>
 <body>

	<fieldset>
	<legend><h1>Ticket Booking</h1></legend>
		<form action="" method ="post" class="form-horizontal form-material">
		
		 <li>Book Tickets</a></li>
			<table>
			<tr>
				<td><span>Departure From</span></td>
				<td>:
					<input type="text" placeholder="(......)" name="defrom" value="<?php echo$defrom?>"
					<span><?php echo $err_defrom?></span></td>


			</tr>
			<tr>
				<td><span> Destination</span></td>
				<td>:
				    <input type="text" placeholder="(......)" name="desti" value="<?php echo$desti?>"
				    <span><?php echo $err_desti?></span></td>
			</tr>
			<tr>
				<td><span>Departure Time </span></td>
                <td>:
				     <input type="text" placeholder="Departure time" name="dtime" value="<?php echo$dtime?>"
				     <span><?php echo $err_dtime?></span></td>
		    </tr>
			<tr>
				<td><span>Departure Date</span></td>
				<td>:
				  <select> 
				        <option>Day</option>
				<?php
				for($i=1; $i<31; $i++)
					echo"<option>$i</option>"
				?>
				  </select>
				  <select> 
				        <option>Month</option>
				<?php
				$month= array("Jan","Feb","Mar","Apr","May","Jun","Jul","Sep","Oct","Nov","Dec");
				foreach($month as $dtime){
					echo"<option>$dtime</option>";
				}
				?>
				  </select>
				  
				</td>
			</tr>
			
				<tr>
				<td><span>Ticket Catagory</span> </td>
				<td>:  
					  <input type="checkbox" value="<?php echo $tcata;?>" name="tcata ">First Class(50$)
					  <input type="checkbox" value="<?php echo $tcata;?>" name="tcata">Second Class(30$)
					  <input type="checkbox" value="<?php echo $tcata;?>" name="tcata">Economy Class(20$)
					  
					  <span> <?php echo $err_tcata?> </span>
				    </td>
			</tr>
			<tr>
				<td><span>Trip Type</span> </td>
				<td>:  
					  <input type="radio" value="<?php echo $triptype;?>" name="triptype">Round Trip
					  <input type="radio" value="<?php echo $triptype;?>" name="triptype">One Way
					  
					  
					  <span> <?php echo $err_triptype?> </span>
				    </td>
			</tr>
			
			
			<tr>
				<td><span>Number of First Class Ticket</span></td>
                <td>:
					<input type="text" placeholder="Number" value="<?php echo $nooffirst;?>" name="nooffirst">
					<span><?php echo $err_nooffirst?></span></td>
			</tr>
			<tr>
				<td><span>Number of Second Class Ticket</span></td>
                <td>:
					<input type="text" placeholder="Number" value="<?php echo $noofsecond;?>" name="noofsecond">
					<span><?php echo $err_noofsecond?></span></td>
			</tr>
			<tr>
				<td><span>Number of Economy Class Ticket</span></td>
                <td>:
					<input type="text" placeholder="Number" value="<?php echo $noofeco;?>" name="noofeco">
					<span><?php echo $err_noofeco?></span></td>
			</tr>
			<tr>
				<td><span>Number of Children Class Ticket</span></td>
                <td>:
					<input type="text" placeholder="Number" value="<?php echo $noofchild;?>" name="noofchild">				
					<span><?php echo $err_noofchild?></span></td>
			</tr>
			<tr>
			   <td colspan="2" align="center"><input class="btn-mine my-font" type="submit"  value="Submit" name="submit">	</td>	   
			</tr>
			</table>
		</fieldset>
        </form>
	</body>
</html>