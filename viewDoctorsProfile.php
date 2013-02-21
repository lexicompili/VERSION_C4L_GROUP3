<?php
	$username = $_GET['username'];
	$host = "localhost";
	$user = "postgres";
	$pass = "password";
	$db = "docutrack";
	// open a connection to the database server
	$connection = pg_connect("host=$host dbname=$db user=$user password=$pass");
	if (!$connection)
	{
		die("Could not open connection to database server");
	}
	// generate and execute a query

	$query = "SELECT * FROM doctor WHERE username = '".$username."';";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));
	$row = pg_fetch_object($result, 0);
	
	$queryContactNumber = "SELECT * FROM doctor_contact_number  WHERE username= '".$username."';";
	$resultContactNumber = pg_query($connection, $queryContactNumber) or die("Error in query: $query." . pg_last_error($connection));
	$row1 = pg_fetch_object($resultContactNumber, 0);
	
	$queryEmail = "SELECT * FROM doctor_email_address  WHERE username= '".$username."';";
	$resultEmail = pg_query($connection, $queryEmail) or die("Error in query: $query." . pg_last_error($connection));
	$row2 = pg_fetch_object($resultEmail, 0);
	
	$querySpecialization = "SELECT * FROM doctor_specialization  WHERE username= '".$username."';";
	$resultSpecialization = pg_query($connection, $querySpecialization) or die("Error in query: $query." . pg_last_error($connection));
	$row3 = pg_fetch_object($resultSpecialization, 0);
	
?>	
<html>
	<head>
		
		<script type="text/javascript">
		</script>
		
		<meta charset="UTF-8" />
		
		<title>View Doctor's Profile</title>
		
		<link rel="" type="" href="" />	
	</head>

	<h2>View Doctor's Profile</h2>

	<body>
		<form name="viewDoctorsProfile" action="#" method="post" enctype="multipart/form-data" id="viewDoctorsProfile">
		
	Username: <?php echo $row->username; ?> <br>
	Name: <?php echo $row->name; ?> <br>	
	Contact Number:<?php echo $row1->contact_number; ?> <br>
	Email Address: <?php echo $row2->email_address; ?> <br>
	Specialization: <?php echo $row3->specialization; ?> <br>	
