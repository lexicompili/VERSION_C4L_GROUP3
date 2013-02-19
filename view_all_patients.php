<?php	//views all he database contents
	// database access parameters
	// alter this as per your configuration
	session_start();
	if(isset($_SESSION['Username'])){
	$host = "localhost";
	$user = "postgres";
	$pass = "cmsc128";
	$db = "UHS_Information_Management_System";
	// open a connection to the database server
	$connection = pg_connect("host=localhost port=5432 dbname=UHS_Information_Management_System user=postgres password=cmsc128");
	if (!$connection)
	{
	die("Could not open connection to database server");
	}
	// generate and execute a query
	$query = "SELECT * FROM patient ORDER BY username";
	$result = pg_query($connection, $query) or die("Error in query: $query." . pg_last_error($connection));
	$rows = pg_num_rows($result); // get the number of rows in the resultset
	
//	echo "There are currently $rows records in the database.";
	
	// if records present
	if ($rows > 0){
	// iterate through resultset
?>
<html>
	<head>
	</head>
<body>
<script>
function delete_me(){
	var r=confirm("Are you sure you want to delete this account?");
	if (r==true)
	  {
	  x="You pressed OK!";
	  }
	else
	  {
	  x="You pressed Cancel!";
	  }
}

</script>
<center><table id="data" cellpadding=5cellspacing=0>
<h1>List of Patients</h1>
<tr>	
	<th>Username</th>
	<th>Name</th>
	<th>Medical history</th>
	<th>Gender</th>
	<th>Age</th>
</tr>
<?php
		for ($i=0; $i<$rows; $i++){
			$row = pg_fetch_object($result, $i);
			
?>

<tr>
		<td><?php echo $row->username; ?></td>
		<td><?php echo $row->name; ?></td>
		<td><?php echo $row->medical_history;?></td>
		<td><?php echo $row->gender;?></td>
		<td><?php echo $row->age;?></td>
		<td><a href="edit_patient.php?username=<?php echo $row->username;?>&submit=Submit" >Edit</a></td>
		<td><a href="delete_patient.php?username=<?php echo $row->username;?>&submit=Submit" onclick='delete_me();'>Delete</a></td>
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
echo "<a href='logout.php'>Logout</a>";

}
else{
	echo "Not logged in!";
}
?>
</html>