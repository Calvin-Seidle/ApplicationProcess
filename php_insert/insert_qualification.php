<?php  
session_start();
$con = mysql_connect('192.168.1.20', 'monwabisi', 'littlepig123');

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('applicant', $con);

$QualificationID = $_POST[NameOfQualification];
$FieldOfStudy = $_POST[FieldOfStudy];
$UniversityID = $_POST[NameOfUniversity];
$StartDate = $_POST[StartDate];
$EndDate = $_POST[EndDate];
//$PersonalDetailsID = $_POST[PersonalDetailsID];
$QualificationStatusID = $_POST[QualificationStatus]; 

if(isset($QualificationID)
 	&& isset($FieldOfStudy) 
 	&& isset($UniversityID) 
 	&& isset($StartDate) 
 	&& isset($EndDate) 
 	//&& isset($PersonalDetailsID) 
 	&& isset($QualificationStatusID)) {
	
	$i = 0;
	foreach($QualificationID as $value) {
		$l = strlen($value);
		$m = strlen($FieldOfStudy[$i]);
		$n = strlen($UniversityID[$i]);
		$o = strlen($StartDate[$i]);
		$p = strlen($EndDate[$i]);
		//$q = strlen($PersonalDetailsID[$i]);
		$r = strlen($QualificationStatusID[$i]);

		if((strlen($value)>0) 
			&& (strlen($FieldOfStudy[$i])>0) 
			&& (strlen($UniversityID[$i])>0) 
			&& (strlen($StartDate[$i])>0) 
			&& (strlen($EndDate[$i])>0) 
			//&& (strlen($PersonalDetailsID[$i])>0) 
			&& (strlen($QualificationStatusID[$i])>0)) {
			
			$sql=mysql_query("INSERT INTO applicant_person_qualification_university_field_of_study(Qualification_ID, 
				Field_Of_Study, 
				University_ID, 
				Start_Date, 
				End_Date, 
				Personal_Details_ID, 
				Qualification_Status_ID) 
				VALUES (
				'$value', 
				'$FieldOfStudy[$i]', 
				'$UniversityID[$i]', 
				'$StartDate[$i]', 
				'$EndDate[$i]', 
				'{$_SESSION['user']}', 
				'$QualificationStatusID[$i]')");
			$i++;
			
			
		} else {
			http_response_code(404);
			include('../error.php'); // provide your own HTML for the error page
			die();
			//die("Oops no value to be inserted. SQL: $sql *** NAME: '$value' '$FieldOfStudy[$i]' $'UniversityID[$i]' '$StartDate[$i]' '$EndDate[$i]' '$PersonalDetailsID[$i]' '$QualificationStatusID[$i]' *** LENGTHS: $l, $m, $n, $o, $p, $r\n");
		}
  	}
}

header("Location: ../qualification2.php")
?>