<?php  
//include_once 'dbconfig.php';
session_start();
$con = mysql_connect('192.168.1.20', 'monwabisi', 'littlepig123');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('applicant', $con);

$AddressLine1=$_POST[AddressLine1];
$AddressLine2=$_POST[AddressLine2];
$AddressLine3=$_POST[AddressLine3];
$PostalCode=$_POST[PostalCode];
$City=$_POST[City];
//$PersonalDetailsID=$_POST[PersonalDetailsID];


if(isset($AddressLine1) 
	&& isset($AddressLine2) 
	&& isset($AddressLine3) 
	&& isset($PostalCode) 
	&& isset($City) 
	//&& isset($PersonalDetailsID)
	) {
	$i = 0;
	foreach($AddressLine1 as $value) {
		$l = strlen($value);
		$m = strlen($AddressLine2[$i]);
		$n = strlen($AddressLine3[$i]);
		$o = strlen($PostalCode[$i]);
		$p = strlen($City[$i]);
		//$q = strlen($PersonalDetailsID[$i]);

		if((strlen($value)>0) 
			&& (strlen($AddressLine2[$i])>0) 
			&& (strlen($AddressLine3[$i])>0) 
			&& (strlen($PostalCode[$i])>0) 
			&& (strlen($City[$i])>0) 
			//&& (strlen($PersonalDetailsID[$i])>0)
			) {
			$sql1=mysql_query("INSERT INTO applicant_address(
				Address_Line_1, 
				Address_Line_2, 
				Address_Line_3, 
				Postal_Code, 
				Province_Municipality_City_ID,
				Personal_Details_ID)
				VALUES (
				'$value', 
				'$AddressLine2[$i]', 
				'$AddressLine3[$i]', 
				'$PostalCode[$i]', 
				'$City[$i]',
				'{$_SESSION['user']}')");
			$i++;
			
		} else {
			http_response_code(404);
			include('../error.php'); // provide your own HTML for the error page
			die();
			// die("Oops no value to be inserted. SQL: $City[$i]");
		}
  	}
}

header("Location: ../address2.php")
?>