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
<!DOCTYPE html>
<html>
	<head>
	</head>
<body>

<form action="add_doctor_process.php" method="post">
	<table>
		<tr>
			<td>
				Desired Username: 
			</td>
			<td>
				<input type="text" name="Username" required='required' >
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
				<input type="text" name="Name" placeholder="LN,FN MI." required='required' onfocus="this.placeholder = ''" onblur="this.placeholder = 'LN, FN MI.'">
			</td>
		</tr>
		<tr>
			<td>
				Specialization:
			</td>
			<td>
				<input type="checkbox" name="Specialization" value="Anaesthetics">Anaesthetics
				<input type="checkbox" name="Specialization" value="Pathology">Pathology
				<input type="checkbox" name="Specialization" value="Cardiology">Cardiology
				<input type="checkbox" name="Specialization" value="Endocrinology">Endocrinology
				<input type="checkbox" name="Specialization" value="Gynaecology">Gynaecology<br>
				<input type="checkbox" name="Specialization" value="Microbiology">Microbiology
				<input type="checkbox" name="Specialization" value="Nephrology">Nephrology
				<input type="checkbox" name="Specialization" value="Neurosurgery">Neurosurgery
				<input type="checkbox" name="Specialization" value="Oncology">Oncology
				<input type="checkbox" name="Specialization" value="Ophthalmology">Ophthalmology<br>
				<input type="checkbox" name="Specialization" value="Pathology">Pathology
				<input type="checkbox" name="Specialization" value="Pediatrics">Pediatrics
				<input type="checkbox" name="Specialization" value="Plastic surgery">Plastic surgery
				<input type="checkbox" name="Specialization" value="Psychiatry">Psychiatry
				<input type="checkbox" name="Specialization" value="Radiology">Radiology<br>
				<input type="checkbox" name="Specialization" value="Rheumatology">Rheumatology
				<input type="checkbox" name="Specialization" value="Other">Other<br>
				
				
				
				
			</td>
		</tr>
		<tr>
			<td>
				Contact Number:
			</td>
			<td>
				<input type="tel" name="Contact_number" placeholder="+639xx-xxx-xxx" required='required' onfocus="this.placeholder = ''" onblur="this.placeholder ='+639xx-xxx-xxx'">
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
			<td colspan='2'>
				<input type="submit">
			</td>
			<td>
			</td>
		</tr>
	</table>
</form>

</body>
</html>