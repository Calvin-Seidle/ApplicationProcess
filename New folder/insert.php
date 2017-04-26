<html>
<body>
 
 
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("calvin", $con);
 
$sql1="INSERT INTO applicant_personal_details (
	ID_number, 
	Surname, 
	FirstName, 
	MiddleName, 
	Race, 
	Email, 
	ContactNum, 
	AltContactNum)
VALUES(
	'$_POST[idnum]',
	'$_POST[sname]',
	'$_POST[fname]',
	'$_POST[mname]',
	'$_POST[race]',
	'$_POST[email]',
	'$_POST[pnum]',
	'$_POST[anum]'
	)";

$sql2="INSERT INTO applicant_address (
	ID_Number,
	Address_Line_1,
	Address_Line_2,
	Address_Line_3,
	Municipality,
	City,
	Province,
	Postal_Code	)
VALUES(
	'$_POST[idnum]',
	'$_POST[AddressLine1]',
	'$_POST[AddressLine2]',
	'$_POST[AddressLine3]',
	'$_POST[Municipality]',
	'$_POST[City]',
	'$_POST[Province]',
	'$_POST[postal_code]'
	)";

$sql3="INSERT INTO "
 
if (!mysql_query($sql1,$con)) {
  	die('Error: ' . mysql_error());
  	}

if (!mysql_query($sql2,$con)) {
  	die('Error: ' . mysql_error());
  	}


	header("Location: success.php");
	mysql_close($con)

?>
</body>
</html>