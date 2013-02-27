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
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>UHS Information Management system</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<section id="slide">
	<div id="slideshow">
	<ul>
		<li><img src="img/slider1.jpg" alt="slide1" /></li>
        <li><img src="img/slider2.jpg" alt="slide2" /></li>
        <li><img src="img/slider3.jpg" alt="slide3" /></li>
        <li><img src="img/slider4.jpg" alt="slide4" /></li>
        <li><img src="img/slider5.jpg" alt="slide3" /></li>
	</ul>
    </div>
    <article>helping students for <b>easier access</b> to the university health services.<br/>
</section>

<header>
	<section id="content">
		<h1><strong>UPLB</strong>UniversityHealthServices InformationManagementSystem </h1>
    </section>
</header>

<nav>
	<ul>
		<li><a href="#" title="homepage">HOME PAGE</a>
        <li><a href="#" title="add">ADD</a>
        <li><a href="#" title="edit">EDIT</a>
        <li><a href="#" title="view">VIEW</a>
        <li><a href="#" title="search">SEARCH</a>
		<li><a href="#" title="delete">DELETE</a>
        <li><a href="#" title="delete">LOGOUT</a>
    </ul>
</nav>

<section id="main">
	<article>
	<form action="add_doctor_process.php" method="post">
		<table>
			<tr>
				<td width="150px">
					Desired Username: 
				</td>
				<td width="300px">
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
					<input type="checkbox" name="Specialization[]" value="Anaesthetics">Anaesthetics<br>
					<input type="checkbox" name="Specialization[]" value="Pathology">Pathology<br>
					<input type="checkbox" name="Specialization[]" value="Cardiology">Cardiology<br>
					<input type="checkbox" name="Specialization[]" value="Endocrinology">Endocrinology<br>
					<input type="checkbox" name="Specialization[]" value="Gynaecology">Gynaecology<br>
					<input type="checkbox" name="Specialization[]" value="Microbiology">Microbiology<br>
					<input type="checkbox" name="Specialization[]" value="Nephrology">Nephrology<br>
					<input type="checkbox" name="Specialization[]" value="Neurosurgery">Neurosurgery<br>

				</td>
				<td width="300px">
					<input type="checkbox" name="Specialization[]" value="Oncology">Oncology<br>
					<input type="checkbox" name="Specialization[]" value="Ophthalmology">Ophthalmology<br>
					<input type="checkbox" name="Specialization[]" value="Pathology">Pathology<br>
					<input type="checkbox" name="Specialization[]" value="Pediatrics">Pediatrics<br>
					<input type="checkbox" name="Specialization[]" value="Plastic surgery">Plastic surgery<br>
					<input type="checkbox" name="Specialization[]" value="Psychiatry">Psychiatry<br>
					<input type="checkbox" name="Specialization[]" value="Radiology">Radiology<br>
					<input type="checkbox" name="Specialization[]" value="Rheumatology">Rheumatology<br>
					<input type="checkbox" name="Specialization[]" value="Other">Other<br>

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
				<td>
				</td>
				<td>
					<input type="submit">
				</td>
				<td>
				</td>
			</tr>
		</table>
	</form>
	</article>
</section>

<section id="special">
</section>


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script src="js/craftyslide.min.js"></script>
	<script>
	$("#slideshow").craftyslide();
	</script> 
</body>
</html>
