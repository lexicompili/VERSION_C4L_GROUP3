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
	$queryAddress = "DELETE FROM patient_address  WHERE username= '".$username."';";
	$resultAddress = pg_query($connection, $queryAddress) or die("Error in query: $query." . pg_last_error($connection));
	$query = "COMMIT";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));

	$queryEmail = "DELETE FROM patient_email_address  WHERE username= '".$username."';";
	$resultEmail = pg_query($connection, $queryEmail) or die("Error in query: $query." . pg_last_error($connection));
	$query = "COMMIT";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));

	$queryContactNumber = "DELETE FROM patient_contact_number  WHERE username= '".$username."';";
	$resultContactNumber = pg_query($connection, $queryContactNumber) or die("Error in query: $query." . pg_last_error($connection));
	$query = "COMMIT";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));

	$query = "DELETE FROM patient WHERE username = '".$username."';";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));
	$query = "COMMIT";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));

	
	pg_close($connection);

	header("Location: view_petients.php");
?>
