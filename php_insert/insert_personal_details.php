<html>
<body>
 
 
<?php
session_start();
$con = mysql_connect("192.168.1.20","monwabisi","littlepig123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


mysql_select_db("applicant", $con); 

$sql1="INSERT INTO applicant_personal_details (
	Personal_Details_ID,
	Race_ID,
	Marital_Status_ID,
	Gender_ID,
	Nationality_ID,
	
	Criminal_Record,
	Surname, 
	First_Name, 
	Middle_Name,  
	Contact_Number, 
	Alt_Contact_Number,
	Skills,
	Number_Of_Dependencies,
	Application_Status)
VALUES(
	'{$_SESSION['user']}',
	'$_POST[Race]',
	'$_POST[MaritalStatus]',
	'$_POST[Gender]',
	'$_POST[Nationality]',
	
	'$_POST[CriminalRecord]',
	'$_POST[Surname]',
	'$_POST[FirstName]',
	'$_POST[MiddleName]',
	'$_POST[PhoneNumber]',
	'$_POST[AlternativeNumber]',
	'$_POST[Skills]',
	'$_POST[NumberOfDependencies]',
	'0')";
	
	echo "SQL: $sql1\n";
	if (!mysql_query($sql1,$con)) {
  	http_response_code(404);
	include('../error.php'); // provide your own HTML for the error page
  	die('Error: ' . mysql_error());
  	}

$sql2="INSERT INTO applicant_drivers_license (
	Personal_Details_ID,
	Drivers_License_Code_ID,
	Drivers_License_Status_ID)
VALUES(
	'{$_SESSION['user']}',
	'$_POST[DriversCode]',
	'$_POST[LicenseStatus]'
)";
	
	echo "SQL: $sql2\n";
	if (!mysql_query($sql2,$con)) {
	http_response_code(404);
	include('../error.php'); // provide your own HTML for the error page
	die('Error: ' . mysql_error());	
	}

$sql3="INSERT INTO applicant_disability_type (
	Personal_Details_ID,
	Disability_ID,
	Disability_Type)
VALUES(
	'{$_SESSION['user']}',
	'$_POST[Disability]',
	'$_POST[DisabilityType]'
)";
	
	echo "SQL: $sql3\n";
	if (!mysql_query($sql3,$con)) {
	http_response_code(404);
	include('../error.php'); // provide your own HTML for the error page
	die('Error: ' . mysql_error());	
	}
	

	header("Location: ../address.php");
	mysql_close($con)

?>
</body>
</html>