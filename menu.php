<?php
	session_start();
	if(isset($_SESSION['Username'])){
		echo "<a href='home.php'>Home</a>";
	}
	else{
		//header( 'Location: home.php' );
	}

?>

<html>
	<head>
		<title>
			UPLB University Health Service Information Management System
		</title>
	</head>
	<body>
		<link rel='stylesheet' type='text/css' href='menu.css'>
		<script type = "text/javascript" src = "javascripts/jquery.js"></script>
		<script type = "text/javascript" src= "javascripts/menu.js"></script>
		<div id='menu'>
				<?php 
				if(isset($_SESSION['Username'])){
					echo "<a href='#' class='menu'>Hi! ".$_SESSION['Username']."</a>";
				}	
				?>
			<a href="#" class='menu'>
				Add
			</a>
			<a href="#" class='menu'>
				Edit
			</a>
			<a href="#" class='menu'>
				View All
			</a>
			<a href="#" class='menu'>
				Search
			</a>
			<a href="#" class='menu'>
				Delete
			</a>
			<a href="logout.php" class='menu'>
				Logout
			</a>
		</div>
		<div id='hiddenmenu'>
			<a href="" class='hiddenmenu'>
				
			</a>
			<div class='hiddenmenu'>
				<a href='add_patient.php' >Patient
				</a>
				<br>
				<a href='add_doctor.php' >Doctor
				</a>
			</div>
			<div class='hiddenmenu'>
				<a href='edit_patient.php' >Patient
				</a>
				<br>
				<a href='edit_doctor.php' >Doctor
				</a>
			</div>
			<div class='hiddenmenu'>
				<a href='view_all_patients.php' >Patient
				</a>
				<br>
				<a href='view_all_doctors.php' >Doctor
				</a>
			</div>
			<a href="#" class='hiddenmenu'>
				
			</a>
			<div class='hiddenmenu'>
				<a href='delete_patient.php'>Patient
				</a>
				<br>
				<a href='delete_doctor.php'>Doctor
				</a>
			</div>
			<a href="#" class='hiddenmenu'>
				
			</a>
		</div>
	</body>
</html>