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
	$query = "SELECT * FROM doctor WHERE username = '".$username."';";
	$queryContactNumber = "SELECT * FROM doctor_contact_number  WHERE username= '".$username."';";
	$queryEmail = "SELECT * FROM doctor_email_address  WHERE username= '".$username."';";
	$querySpecialization = "SELECT * FROM doctor_specialization  WHERE username= '".$username."';";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));
	$resultContactNumber = pg_query($connection, $queryContactNumber) or die("Error in query: $query." . pg_last_error($connection));
	$resultEmail = pg_query($connection, $queryEmail) or die("Error in query: $query." . pg_last_error($connection));
	$resultSpecialization = pg_query($connection, $querySpecialization) or die("Error in query: $query." . pg_last_error($connection));
	$row = pg_fetch_object($result, 0);
	$row1 = pg_fetch_object($resultContactNumber, 0);
	$row2 = pg_fetch_object($resultEmail, 0);
	$row3 = pg_fetch_object($resultSpecialization, 0);
	

?>
<html>
	<head>
		
		<script type="text/javascript">
			function disableTextBox{
			    document.getElementById("usernamePatient").disabled=true;
			}
		</script>
		
		<meta charset="UTF-8" />
		
		<title>Edit Doctor Information</title>
		
		<link rel="" type="" href="" />	
	</head>

	<h2>Edit Doctor Information </h2>

	<body>
		<form name="editDoctor" action="edit_doctor_process.php" method="post" enctype="multipart/form-data" id="editDoctor">
		<div id="leftable">
			<table border="1">
			
				<tr>
					<td><label>Photo:</label></td>
					<td><input type='file' name='' placeholder='New Photo'/></td>
				</tr>
				
				<tr>
					<td><label>Username:</label></td>
					<td><input type='text' name="usernameDoctor" placeholder='New Name' required='required' value="<?php echo $row->username; ?>" disabled="disabled" id="usernameDoctor" onclick="disableTextBox()"/></td>
				</tr>
				
				<tr>
					<td><label>Name:</label></td>
					<td><input type='text' name='nameDoctor' placeholder='New Name' required='required' value="<?php echo $row->name; ?>"/></td>
				</tr>

				<tr>
					<td><label>Contact Number</label></td>
					<td><input type='text' name='contactNumberDoctor' placeholder='New Gender' required='required' value="<?php echo $row1->contact_number; ?>"/></td>
				</tr>		
				
				<tr>
					<td><label>Email Address:</label></td>
					<td><input type='email' name='emailAddressDoctor' required='required' value="<?php echo $row2->email_address; ?>"/></td>
				</tr>
						
				<tr>
					<td><label>Specialization</label></td>
					<td><input type='text' name='specializationDoctor' placeholder='New Address' required='required' value="<?php echo $row3->specialization; ?>"/></td>
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
