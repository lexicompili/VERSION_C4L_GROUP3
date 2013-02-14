<?php
	if(isset($_POST['confirmEdit'])){
		echo "aaaaa";
	}
	$username = $_POST['usernamePatient'];
	$name = $_POST['namePatient'];
	$gender = $_POST['genderPatient'];
	$age = $_POST['agePatient'];
	$newAddress = $_POST['newAddressPatient'];
	$contactNumber = $_POST['contactNumberPatient'];
	$emailAdd = $_POST['emailAddressPatient'];
	$medHistory = $_POST['medicalHistoryPatient'];
	
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
	
	$query = "UPDATE patient SET name='$name', gender='$gender', age='$age', medical_history='$medHistory' WHERE username='$username' "; 
	$result = pg_query($connection,$query) or die("Error in query: $query. " . pg_last_error($connection));
	$query = "COMMIT";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));
	
	$query = "UPDATE patient_address SET address='$newAddress' WHERE username='$username' "; 
	$result = pg_query($connection,$query) or die("Error in query: $query. " . pg_last_error($connection));
	$query = "COMMIT";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));
	
	$query = "UPDATE patient_email_address SET email_address='$emailAdd' WHERE username='$username' "; 
	$result = pg_query($connection,$query) or die("Error in query: $query. " . pg_last_error($connection));
	$query = "COMMIT";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));
	
	$query = "UPDATE patient_contact_number SET contact_number='$contactNumber' WHERE username='$username' "; 
	$result = pg_query($connection,$query) or die("Error in query: $query. " . pg_last_error($connection));
	$query = "COMMIT";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));
	
	
	$query = "COMMIT";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));
	pg_close($connection);
	header('Location:view_all_patients.php');



?>
