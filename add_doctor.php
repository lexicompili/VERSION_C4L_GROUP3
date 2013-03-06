<?php
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
	<script type="text/javascript" src="javascripts/jquery.js"></script>
<script type="text/javascript" src="javascripts/pass_strength.js"></script>

<script>
			$(document).ready( function() {

				$(".password_test").passStrength({
					userid:	"#user_id"
					});
				
			});                                                                                  1
		</script>
		
<script type="text/javascript">
jq = jQuery.noConflicts();
jq(document).ready(function() {  
  
        //the min chars for username  
        var min_chars = 3;  
  
        //result texts  
        var characters_error = 'Minimum amount of chars is 3';  
        var checking_html = 'Checking...';  
  
        //when button is clicked  
        jq('#user_id').keyup(function(){  
            //run the character number check  
            if(jq('#user_id').val().length < min_chars){  
                //if it's bellow the minimum show characters_error text '  
                jq('#username_availability_result').html(characters_error);  
            }else{  
                //else show the cheking_text and run the function to check  
                jq('#username_availability_result').html(checking_html);  
                check_availability();  
            }  
        });  
  
  });  
  
//function to check username availability  
function check_availability(){  
  
        //get the username  
        var username = jq('#user_id').val();  
  
        //use ajax to run the check  
        jq.post("try_user.php", { username: username },  
            function(result){  
                //if the result is 1  
                if(result == 1){  
                    //show that the username is available  
                    jq('#username_availability_result').html(username + ' is Available');  
                }else{  
                    //show that the username is NOT available  
                    jq('#username_availability_result').html(username + ' is not Available');  
                }  
        });
  
}
</script>
	</head>
<body>

<form action="add_doctor_process.php" method="post">
	<table>
		<tr>
			<td>
				Desired Username: 
			</td>
			<td>
				<input type="text" name="Username" required='required' id="user_id">
				<div id='username_availability_result'></div>  
			</td>
		</tr>
		<tr>
			<td>
				Password:
			</td>
			<td>
				<input type="password" name="Password" required='required' id="password" class="password_test">
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
				<input type="checkbox" name="Specialization[]" value="Anaesthetics">Anaesthetics
				<input type="checkbox" name="Specialization[]" value="Pathology">Pathology
				<input type="checkbox" name="Specialization[]" value="Cardiology">Cardiology
				<input type="checkbox" name="Specialization[]" value="Endocrinology">Endocrinology
				<input type="checkbox" name="Specialization[]" value="Gynaecology">Gynaecology<br>
				<input type="checkbox" name="Specialization[]" value="Microbiology">Microbiology
				<input type="checkbox" name="Specialization[]" value="Nephrology">Nephrology
				<input type="checkbox" name="Specialization[]" value="Neurosurgery">Neurosurgery
				<input type="checkbox" name="Specialization[]" value="Oncology">Oncology
				<input type="checkbox" name="Specialization[]" value="Ophthalmology">Ophthalmology<br>
				<input type="checkbox" name="Specialization[]" value="Pathology">Pathology
				<input type="checkbox" name="Specialization[]" value="Pediatrics">Pediatrics
				<input type="checkbox" name="Specialization[]" value="Plastic surgery">Plastic surgery
				<input type="checkbox" name="Specialization[]" value="Psychiatry">Psychiatry
				<input type="checkbox" name="Specialization[]" value="Radiology">Radiology<br>
				<input type="checkbox" name="Specialization[]" value="Rheumatology">Rheumatology<br>
				<input type="textbox" name="Specialization[]">Others (Please Specify)<br>

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