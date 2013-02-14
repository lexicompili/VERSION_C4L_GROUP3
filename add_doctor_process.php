<?php
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
	
	$query = "INSERT INTO doctor (username,name,password) VALUES('$_POST[Username]','$_POST[Name]','$_POST[Password]')";
	$result = pg_query($connection,$query) or die("Error in query: $query. " . pg_last_error($connection));
	$query = "COMMIT";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));
	
	$query = "INSERT INTO doctor_contact_number(username,contact_number)
				VALUES('$_POST[Username]','$_POST[Contact_number]')"; 
	$result = pg_query($connection,$query) or die("Error in query: $query. " . pg_last_error($connection));
	$query = "COMMIT";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));
	
	$query = "INSERT INTO doctor_email_address(username,email_address) VALUES('$_POST[Username]','$_POST[Email_address]')";
	$result = pg_query($connection,$query) or die("Error in query: $query. " . pg_last_error($connection));
	$query = "COMMIT";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));
	
	$query = "INSERT INTO doctor_specialization(username,specialization) VALUES('$_POST[Username]','$_POST[Specialization]')";
	$result = pg_query($connection,$query) or die("Error in query: $query. " . pg_last_error($connection));
	$query = "COMMIT";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));
	
	
	pg_close($connection);
	header('Location:view_all_doctors.php');
?>
<html>
<body>

Welcome <?php echo $_POST['Name']; ?>!<br>

</body>
</html>