<?php  
session_start();
$con = mysql_connect('192.168.1.20', 'monwabisi', 'littlepig123');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('applicant', $con);

$ReferenceName=$_POST[ReferenceName];
$ContactNumber=$_POST[ContactNumber];
$EmailAddress=$_POST[EmailAddress];
$Relationship=$_POST[Relationship];
// $PersonalDetailsID=$_POST[PersonalDetailsID];


if(isset($ReferenceName) 
	&& isset($ContactNumber) 
	&& isset($EmailAddress) 
	&& isset($Relationship) 
	// && isset($PersonalDetailsID)
	) {
	$i = 0;
	foreach($ReferenceName as $value) {
		$l = strlen($value);
		$m = strlen($ContactNumber[$i]);
		$n = strlen($EmailAddress[$i]);
		$o = strlen($Relationship[$i]);
		// $p = strlen($PersonalDetailsID[$i]);

		if((strlen($value)>0) 
			&& (strlen($ContactNumber[$i])>0) 
			&& (strlen($EmailAddress[$i])>0) 
			&&(strlen($Relationship[$i])>0) 
			// &&(strlen($PersonalDetailsID[$i])>0)
			) {
			$sql1=mysql_query("INSERT INTO applicant_reference(
				Reference_Name, 
				Contact_Number, 
				Email_Address, 
				Relationship, 
				Personal_Details_ID) 
				VALUES (
				'$value', 
				'$ContactNumber[$i]', 
				'$EmailAddress[$i]', 
				'$Relationship[$i]', 
				'{$_SESSION['user']}')");
			$i++;
			
		} else {
			http_response_code(404);
			include('../error.php'); // provide your own HTML for the error page
			die();
			//die("Oops no value to be inserted. NAME: $value $ContactNumber[$i] $EmailAddress[$i] $Relationship[$i] $PersonalDetailsID[$i] LENGTHS: $l, $m, $n, $o, $p\n");
		}
  	}
}

header("Location: ../references2.php")
?>