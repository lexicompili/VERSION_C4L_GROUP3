<?
$user="username";
$password="password";
$database="database";
mysql_connect(localhost,$user,$password);
@mysql_select_db($database) or die( "Unable to select database");
$table1="INSERT INTO PATIENT(Username,Name,Password,Medical_history,Gender,Age)
VALUES('$_POST[Username]','$_POST[Name]','$_POST[Password]','$_POST[Name]','$_POST[Medical_history]','$_POST[Gender]','$_POST[Age]')";
$table2="INSERT INTO PATIENT_CONTACT_NUMBER(Username,Contact_number)
VALUES('$_POST[Username]','$_POST[Contact_number]')";
$table3="INSERT INTO PATIENT_ADDRESS(Username,Address)
VALUES('$_POST[Username]','$_POST[Address]')";
$table3="INSERT INTO PATIENT_EMAIL_ADDRESS(Username,Email_address)
VALUES('$_POST[Username]','$_POST[Email_address]')";
mysql_query($query);
mysql_close();
?>
<html>
<body>

Welcome <?php echo $_POST['Name']; ?>!<br>

</body>
</html>