<?php
	if(isset($_POST['confirmEdit'])){
		echo "aaaaa";
	}
	$username = $_POST['usernameDoctor'];
	$name = $_POST['nameDoctor'];
	$contactNumber = $_POST['contactNumberDoctor'];
	$emailAdd = $_POST['emailAddressDoctor'];
	$specialization = $_POST['specializationDoctor'];
	
	// alter this as per your configuration
	$host = "localhost";
	$user = "postgres";
	$pass = "cmsc128";
	$db = "UHS_Information_Management_System";
	// open a connection to the database server
	$connection = pg_connect("host=$host port=5432 dbname=$db user=$user password=$pass");
	if (!$connection) die("Could not open connection to database server");
		
	$query = "BEGIN WORK";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));
	
	$query = "UPDATE doctor SET name='$name' WHERE username='$username' "; 
	$result = pg_query($connection,$query) or die("Error in query: $query. " . pg_last_error($connection));
	$query = "COMMIT";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));
	
	$query = "UPDATE doctor_contact_number SET contact_number='$contactNumber' WHERE username='$username' "; 
	$result = pg_query($connection,$query) or die("Error in query: $query. " . pg_last_error($connection));
	$query = "COMMIT";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));
	
	$query = "UPDATE doctor_email_address SET email_address='$emailAdd' WHERE username='$username' "; 
	$result = pg_query($connection,$query) or die("Error in query: $query. " . pg_last_error($connection));
	$query = "COMMIT";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));
	
	$query = "UPDATE doctor_specialization SET specialization='$specialization' WHERE username='$username' "; 
	$result = pg_query($connection,$query) or die("Error in query: $query. " . pg_last_error($connection));
	$query = "COMMIT";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));
	
	
	
	$query = "COMMIT";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));
	pg_close($connection);
	header('Location:view_doctors.php');



?>
