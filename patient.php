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

<form action="add_patient_process.php" method="post">
Desired Username: <input type="text" name="Username"><br>
Password: <input type="password" name="Password"><br>
Full Name: <input type="text" name="Name"><br>
Gender:<br> Male<input type="radio" value="Male" name="Gender">
Female<input type="radio" value="Female" name="Gender"><br>
Age: <input type="text" name="Age"><br>
Address: <textarea rows="5" cols="20" name="Address" wrap="physical"></textarea><br>
Medical History: <input type="text" name="Medical_history"><br>
Contact Number: <input type="text" name="Contact_number"><br>
E-mail Address: <input type="text" name="Email_address"><br>
<input type="submit">
</form>

</body>
</html>