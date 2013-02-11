<?php
	session_start();
	if(isset($_POST['Username'])){	
		$Username = $_POST['Username'];
		$Password = $_POST['Password'];
		$db=pg_connect("host=localhost port=5432 dbname=UHS_Information_Management_System user=postgres password=cmsc128");
		$stmt="SELECT * FROM admin WHERE Username='$Username' and Password='$Password';";
		$result = pg_query($stmt);
		if($row=pg_fetch_assoc($result)){
			
			$_SESSION['Username']=$_POST['Username'];
			header( 'Location: menu.php' );
		}
		else{
			$stmt="SELECT * FROM patient WHERE Username='$Username' and Password='$Password';";
			$result = pg_query($stmt);
			if($row=pg_fetch_assoc($result)){
				$_SESSION['Username']=$_POST['Username'];
				header( 'Location: menu.php' );
			}
			else{
				$stmt="SELECT * FROM doctor WHERE Username='$Username' and Password='$Password';";
				$result = pg_query($stmt);
				if($row=pg_fetch_assoc($result)){
					$_SESSION['Username']=$_POST['Username'];
					header( 'Location: menu.php' ) ;
				}
				else{
					header( 'Location: home.php' ) ;
				}
			}
		}
	}
	else{
		header( 'Location: home.php' ) ;
	}
	
?>