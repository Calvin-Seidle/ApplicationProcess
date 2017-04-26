<?php  

$con = mysql_connect('192.168.1.20', 'monwabisi', 'littlepig123');

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('applicant', $con);

$PersonalDetailsID = $_POST[PersonalDetailsID];
$QualificationID = $_POST[NameOfQualification];
$FieldOfStudy = $_POST[FieldOfStudy];
$UniversityID = $_POST[NameOfUniversity];
$QualificationStatusID = $_POST[QualificationStatus];
$StartDate = $_POST[StartDate];
$EndDate = $_POST[EndDate];

if (isset($PersonalDetailsID)
	&& isset($QualificationID)
	&& isset($FieldOfStudy)
	&& isset($UniversityID)
	&& isset($QualificationStatusID)
	&& isset($StartDate)
	&& isset($EndDate)) {
	$i = 0;
	foreach ($PersonalDetailsID as $value) {
		$l = strlen($value);
		$m = strlen($QualificationID[$i]);
		$n = strlen($FieldOfStudy[$i]);
		$o = strlen($UniversityID[$i]);
		$p = strlen($QualificationStatusID[$i]);
		$q = strlen($StartDate[$i]);
		$r = strlen($EndDate[$i]);

		if ((strlen($value)>0)
			&& (strlen($QualificationID[$i])>0)
			&& (strlen($FieldOfStudy[$i])>0)
			&& (strlen($UniversityID[$i])>0)
			&& (strlen($QualificationStatusID[$i])>0)
			&& (strlen($StartDate[$i])>0)
			&& (strlen($EndDate[$i])>0)) {
			$sql = mysql_query("INSERT INTO applicant_person_qualification_university_field_of_study(
				Personal_Details_ID,
				Qualification_ID,
				Field_Of_Study,
				University_ID,
				Qualification_Status_ID,
				Start_Date,
				End_Date)
				VALUES (
				'$value',
				'$QualificationID[$i]',
				'$FieldOfStudy[$i]',
				'$UniversityID[$i]',
				'$QualificationStatusID[$i]',
				'$StartDate[$i]',
				'$EndDate[$i]')"
				 );
			$i++;
		} else {	
		die("OOPS");
		}
	}
}

header("Location: ../experience.php")
?>