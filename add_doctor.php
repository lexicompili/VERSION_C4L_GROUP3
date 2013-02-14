<?
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
?>
<html>
<body>

<form action="add_doctor_process.php" method="post">
Desired Username: <input type="text" name="Username"><br>
Password: <input type="password" name="Password"><br>
Full Name: <input type="text" name="Name"><br>
Specialization: <input type="text" name="Specialization"><br>
Contact Number: <input type="text" name="Contact_number"><br>
E-mail Address: <input type="email" name="Email_address"><br>
<input type="submit">
</form>

</body>
</html>