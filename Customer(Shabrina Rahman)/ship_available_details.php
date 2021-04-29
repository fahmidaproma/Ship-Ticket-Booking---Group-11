<?php
	session_start();
?>
<html>
	<head>
		<title>Add Ship Schedule Details</title>
	</head>
	<body>
		<?php
			if(isset($_POST['Submit']))
			{
				$data_missing=array();
				if(empty($_POST['Ship']))
				{
					$data_missing[]='Ship No.';
				}
				else
				{
					$flight_no=trim($_POST['Ship']);
				}

				if(empty($_POST['origin']))
				{
					$data_missing[]='Origin';
				}
				else
				{
					$origin=$_POST['origin'];
				}
				if(empty($_POST['destination']))
				{
					$data_missing[]='Destination';
				}
				else
				{
					$destination=$_POST['destination'];
				}

				if(empty($_POST['dep_date']))
				{
					$data_missing[]='Departure Date';
				}
				else
				{
					$dep_date=$_POST['dep_date'];
				}
				if(empty($_POST['arr_date']))
				{
					$data_missing[]='Arrival Date';
				}
				else
				{
					$arr_date=$_POST['arr_date'];
				}
				
				if(empty($_POST['dep_time']))
				{
					$data_missing[]='Departure Time';
				}
				else
				{
					$dep_time=$_POST['dep_time'];
				}
				
				if(empty($_POST['jet_id']))
				{
					$data_missing[]='Jet ID';
				}
				else
				{
					$jet_id=$_POST['jet_id'];
				}

				if(empty($data_missing))
				{
					
					{
						echo "Successfully Submitted";
						
					}
					
				}
				else
				{
					echo "The following data fields were empty! <br>";
					foreach($data_missing as $missing)
					{
						echo $missing ."<br>";
					}
				}
			}
			else
			{
				echo "Submit request not received";
			}
		?>
	</body>
</html>