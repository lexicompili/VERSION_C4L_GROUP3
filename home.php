<?php
	session_start();
?>

<html>
	<head>
		<title>
			University of the  Philippines Health Service
		</title>
	</head>
	<body>
		<?php
		$db=pg_connect("host=localhost port=5432 dbname=UHS_Information_Management_System user=postgres password=cmsc128");
		?>
		<link rel='stylesheet' type='text/css' href='home.css'>
		<script type = "text/javascript" src = "javascripts/jquery.js"></script>
		<script type = "text/javascript" src= "javascripts/home.js"></script>
			<div id='box1'>
			HISTORY
			</div>
			<div id='box2'>
			NEWS
			</div>
			<div id='box3'>
			ABOUT
			</div>
		<?php if(!isset($_SESSION['Username'])){
		echo"
		<div id='log-in'>
			<form name='log-in' method='post' action='loginvalidation.php'>
				<table>
					<tr>
						<td>
							<label for='Username'>Username: </label>
						</td>
						<td>
							<input type='text' id='Username' name='Username' /></td>
						</td>
						<td colspan='2'>
						<input type='submit' value='Log-in' title='Log-in' name='Log-in'/>
						</td>
						
					</tr>
					<tr>
						<td>
							<label for='Password'>Password: </label>
						</td>
						<td>
							<input type='password' id='Password' name='Password' /></td>
						</td>
						<td>
						</td>
						
					</tr>
				</table>		
			</form>
		</div>";
		}
		else{
			echo "<div id='log-in'><a href='logout.php'>Logout</a></div>";
		}
		?>
		
		<div id='historydiv'>
		<p>
		History
		</p>
		</div>
		
		<div id='newsdiv'>
		<p>
		News
		</p>
		</div>
		
		<div id='aboutdiv'>
		<p>
		About
		</p>
		</div>

	</body>
</html>