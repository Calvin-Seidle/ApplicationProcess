<?php  
session_start();
$con = mysql_connect('192.168.1.20', 'monwabisi', 'littlepig123');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('applicant', $con);

$CompanyName=$_POST[CompanyName];
$JobName=$_POST[JobName];
$Duties=$_POST[Duties];
$StartDate=$_POST[StartDate];
$EndDate=$_POST[EndDate];
//$PersonalDetailsID=$_POST[PersonalDetailsID];


if(isset($CompanyName) 
	&& isset($JobName) 
	&& isset($Duties) 
	&& isset($StartDate) 
	&& isset($EndDate) 
	//&& isset($PersonalDetailsID)
	) {
	$i = 0;
	foreach($CompanyName as $value) {
		$l = strlen($value);
		$m = strlen($JobName[$i]);
		$n = strlen($Duties[$i]);
		$o = strlen($StartDate[$i]);
		$p = strlen($EndDate[$i]);
		//$q = strlen($PersonalDetailsID[$i]);

		if((strlen($value)>0) 
			&& (strlen($JobName[$i])>0) 
			&& (strlen($Duties[$i])) 
			&& (strlen($StartDate[$i])>0) 
			&& (strlen($EndDate[$i])>0) 
			//&& (strlen($PersonalDetailsID[$i])>0)
			) {
			$sql1=mysql_query("INSERT INTO applicant_experience(
				Company_Name, 
				Job_Name, 
				Duties, 
				Start_Date, 
				End_Date, 
				Personal_Details_ID) 
				VALUES (
				'$value', 
				'$JobName[$i]', 
				'$Duties[$i]', 
				'$StartDate[$i]', 
				'$EndDate[$i]', 
				'{$_SESSION['user']}')");
			$i++;
			
		} else {
			http_response_code(404);
			include('../error.php'); // provide your own HTML for the error page
			die();
			//die("Oops no value to be inserted. NAME: $value $JobName[$i] $Duties[$i] $StartDate[$i] $EndDate[$i] $PersonalDetailsID[$i] LENGTHS: $l, $m, $n, $o, $p\n");
		}
  	}
}

header("Location: ../experience2.php")
?>