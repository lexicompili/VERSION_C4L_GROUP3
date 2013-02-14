<?php
	$username = $_GET['username'];
	echo($username);	
	$host = "localhost";
	$user = "postgres";
	$pass = "cmsc128";
	$db = "UHS_Information_Management_System";
	// open a connection to the database server
	$connection = pg_connect("host=$host port=5432 dbname=$db user=$user password=$pass");
	if (!$connection)
	{
		die("Could not open connection to database server");
	}
	// generate and execute a query
	$query = "SELECT * FROM patient WHERE username = '".$username."';";
	$queryAddress = "SELECT * FROM patient_address  WHERE username= '".$username."';";
	$queryEmail = "SELECT * FROM patient_email_address  WHERE username= '".$username."';";
	$queryContactNumber = "SELECT * FROM patient_contact_number  WHERE username= '".$username."';";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));
	$resultAddress = pg_query($connection, $queryAddress) or die("Error in query: $query." . pg_last_error($connection));
	$resultEmail = pg_query($connection, $queryEmail) or die("Error in query: $query." . pg_last_error($connection));
	$resultContactNumber = pg_query($connection, $queryContactNumber) or die("Error in query: $query." . pg_last_error($connection));
	$row = pg_fetch_object($result, 0);
	$row1 = pg_fetch_object($resultAddress, 0);
	$row2 = pg_fetch_object($resultEmail, 0);
	$row3 = pg_fetch_object($resultContactNumber, 0);
	

?>
<html>
	<head>
		
		<script type="text/javascript">
			function disableTextBox{
			    document.getElementById("usernamePatient").disabled=true;
			}
		</script>
		
		<meta charset="UTF-8" />
		
		<title>Edit Patient Information</title>
		
		<link rel="" type="" href="" />	
	</head>

	<h2>Edit Patient Information </h2>

	<body>
		<form name="editPatient" action="edit_patient_process.php" method="post" enctype="multipart/form-data" id="editPatient">
		<div id="leftable">
			<table border="1">
			
				<tr>
					<td><label>Photo:</label></td>
					<td><input type='file' name='' placeholder='New Photo'/></td>
				</tr>
				
				<tr>
					<td><label>Username:</label></td>
					<td><input type='text' name="usernamePatient" placeholder='New Name' required='required' value="<?php echo $row->username; ?>" id="usernamePatient" onclick="disableTextBox()"/></td>
				</tr>
				
				<tr>
					<td><label>Name:</label></td>
					<td><input type='text' name='namePatient' placeholder='New Name' required='required' value="<?php echo $row->name; ?>"/></td>
				</tr>

				<tr>
					<td><label>Gender:</label></td>
					<td><input type='text' name='genderPatient' placeholder='New Gender' required='required' value="<?php echo $row->gender; ?>"/></td>
				</tr>		
				
				<tr>
					<td><label>Age:</label></td>
					<td><input type='number' min='0' max='80' name='agePatient' required='required' value="<?php echo $row->age; ?>"/></td>
				</tr>
						
				<tr>
					<td><label>New Address:</label></td>
					<td><input type='text' name='newAddressPatient' placeholder='New Address' required='required' value="<?php echo $row1->address; ?>"/></td>
				</tr>	
				
				<tr>
					<td><label>Contact Number:</label></td>
					<td><input type='number' name='contactNumberPatient' placeholder='New Number' required='required' value="<?php echo $row3->contact_number; ?>"/></td>
				</tr>
					
				<tr>
					<td><label>Email Address:</label></td>
					<td><input type='email' name='emailAddressPatient' placeholder='New Email Address' required='required' value="<?php echo $row2->email_address; ?>"/></td>
				</tr>				
				
				<tr>
					<td><textarea name='medicalHistoryPatient' rows="20" cols="50"/> <?php echo $row->medical_history; ?></textarea>
				
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td><input type="submit"  value="Edit Details" name="confirmEdit" style="height: 30px; width: 165px"/></td>
				</tr>
	
			</table>
		</div>
		
		</form>
		
	</body>
</html>
