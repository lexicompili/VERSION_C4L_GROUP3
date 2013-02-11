<?php
	session_start();
	if(isset($_SESSION['Username'])){
		echo "<a href='home.php'>Home</a>";
	}
	else{
		header( 'Location: home.php' );
	}

?>