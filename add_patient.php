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
		<table>
			<tr>
				<td>
					Desired Username:
				</td>
				<td>
					<input type="text" placeholder="20xx-xxxxx" name="Username" required='required'  onfocus="this.placeholder = ''" onblur="this.placeholder = '20xx-xxxxx'">
				</td>
			</tr>
			<tr>
				<td>
					Password:
				</td>
				<td>
					<input type="password" name="Password" required='required'>
				</td>
			</tr>
			<tr>
				<td>
					Full Name:
				</td>
				<td>
					<input type="text" name="Name" required='required'>
				</td>
			</tr>
			<tr> 
				<td>
					Gender:
				</td>
				<td>
					Male<input type="radio" value="Male" name="Gender" required='required'><br>
					Female<input type="radio" value="Female" name="Gender" required='required'>
				</td>
			</tr>
			<tr>
				<td>
					Age:
				</td>
				<td>
					<input type="number" name="Age" required='required' min='14' max='60' step='1'>
				</td>
			</tr>
			<tr>
				<td>
					Address:
				</td>
				<td>
					<textarea rows="5" cols="20" name="Address" wrap="physical" required='required'></textarea>
				</td>
			</tr>
			<tr>
				<td>
					Medical History:
				</td>
				<td>
					<input type="text" name="Medical_history" required='required'>
				</td>
			</tr>
			<tr>
				<td>
					Contact Number:
				</td>
				<td>
					<input type="text" name="Contact_number" required='required'>
				</td>
			</tr>
			<tr>
				<td>
					E-mail Address:
				</td>
				<td>
					<input type="email" name="Email_address" required='required'>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit">
				</td>
				<td>
				</td>
			</tr>
	</form>

</body>
</html>