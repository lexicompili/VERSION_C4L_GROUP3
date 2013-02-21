<?php
	$username = $_POST['searchDoctorHere'];
	echo($username);	
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
	$query = "SELECT * FROM doctor WHERE username like '%$username%'";
	//$query = "SELECT * FROM doctor";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));
	//$row = pg_fetch_object($result, 0);
	$rows = pg_num_rows($result); // get the number of rows in the resultset
?>

<html>
	<head>
		
		<script type="text/javascript">
		</script>
		
		<meta charset="UTF-8" />
		
		<title>Search Doctor</title>
		
		<link rel="" type="" href="" />	
	</head>
	

	<body>
		<form name="homepage" action="searchDoctor" method="post" enctype="multipart/form-data" id="homepage">
		<?php
		$counter = 0;
		if(isset($_POST['searchdoctor'])){
				
			?><h2>Search value for <?php echo $_POST['searchDoctorHere']; ?></h2>
		<?php
		if($rows>0){
			for ($i=0; $i<$rows; $i++){ 
				$row = pg_fetch_object($result, $i);
				echo $row->username; ?> <br/> <?php	
			}
		}
		else{
			?> <br/> <?php
			echo	$_POST['searchDoctorHere'] . " ";
			echo "do not exists!";
		}	
		}
		else{
			echo "No search value!";
		}
		?>
	</body>
	
</html>
