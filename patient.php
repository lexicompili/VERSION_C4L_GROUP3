<?
$user="username";
$password="password";
$database="database";
mysql_connect(localhost,$user,$password);
@mysql_select_db($database) or die( "Unable to select database");
$table1="CREATE TABLE PATIENT(
	Username VARCHAR(50),
	Name VARCHAR(50),
	Password VARCHAR(50),
	Medical_history VARCHAR(50),
	Gender VARCHAR(10),
	Age INTEGER NOT NULL,
	constraint patient_username_pk PRIMARY KEY(Username),
	constraint patient_admin_fk FOREIGN KEY (Admin) REFERENCES ADMIN(Username)
)";
$table2="CREATE TABLE PATIENT_CONTACT_NUMBER(
	Username VARCHAR(50),
	Contact_number VARCHAR(50),
	constraint patient_contact_number_pk PRIMARY KEY (Username, Contact_number),
	constraint patient_username_fk FOREIGN KEY (Username) REFERENCES PATIENT(Username)
)";
$table3="CREATE TABLE PATIENT_ADDRESS(
	Username VARCHAR(50),
	Address VARCHAR(100),
	constraint patient_address_pk PRIMARY KEY (Username, Address),
	constraint patient_username_fk FOREIGN KEY (Username) REFERENCES PATIENT(Username)
)";
$table4="CREATE TABLE PATIENT_EMAIL_ADDRESS(
	Username VARCHAR(50),
	Email_address VARCHAR(100),
	constraint patient_email_address_pk PRIMARY KEY (Email_address, Username),
	constraint patient_username_fk FOREIGN KEY (Username) REFERENCES PATIENT(Username)
)";
mysql_query($query);
mysql_close();
?>
<html>
<body>

<form action="confirmation.php" method="post">
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