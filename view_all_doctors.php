<?php	//views all he database contents
	// database access parameters
	// alter this as per your configuration
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
	$query = "SELECT * FROM doctor ORDER BY username";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));
	$rows = pg_num_rows($result); // get the number of rows in the resultset
	
	$queryContactNumber = "SELECT * FROM doctor_contact_number ORDER BY username";
	$resultContactNumber = pg_query($connection, $queryContactNumber) or die("Error in query: $query." . pg_last_error($connection));
	$row1 = pg_num_rows($resultContactNumber); // get the number of rows in the resultset
	
	$queryEmailAddress = "SELECT * FROM doctor_email_address ORDER BY username";
	$resultEmailAddress = pg_query($connection, $queryEmailAddress) or die("Error in query: $query." . pg_last_error($connection));
	$row2 = pg_num_rows($resultEmailAddress); // get the number of rows in the resultset
	
	$querySpecialization = "SELECT * FROM doctor_specialization ORDER BY username";
	$resultSpecialization = pg_query($connection, $querySpecialization) or die("Error in query: $query." . pg_last_error($connection));
	$row3 = pg_num_rows($resultSpecialization); // get the number of rows in the resultset
		
//	echo "There are currently $rows records in the database.";
	
	// if records present
	if ($rows > 0){
	// iterate through resultset
?>
<center><table id="data" cellpadding=5cellspacing=0>
<h1>List of Doctors</h1>
<tr>	
	<th>Username</th>
	<th>Name</th>
	<th>Contact Number</th>
	<th>Email Address</th>
	<th>Specialization</th>
</tr>
<?php
		for ($i=0; $i<$rows; $i++){
			$row = pg_fetch_object($result, $i);
			$row1 = pg_fetch_object($resultContactNumber, $i);
			$row2 = pg_fetch_object($resultEmailAddress, $i);
			$row3 = pg_fetch_object($resultSpecialization, $i);
			
?>

<tr>
		<td><?php echo $row->username; ?></td>
		<td><?php echo $row->name; ?></td>
		<td><?php echo $row1->contact_number; ?></td>
		<td><?php echo $row2->email_address;?></td>
		<td><?php echo $row3->specialization;?></td>
		<td><a href="editDoctor.php?username=<?php echo $row->username;?>&submit=Submit">Edit</a></td>
		<td><a href="deleteDoctor.php?username=<?php echo $row->username;?>&submit=Submit">Delete</a></td>
</tr>
<?php
		}
?></table></center>
<?php	
	}
// if no records present
// display message
	else{
?>
	<font size="-1">No data available.</font>
<?php
	}
// close database connection
pg_close($connection);
?>
