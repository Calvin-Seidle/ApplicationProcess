<?php
include('dbconfig.php');
if($_POST['id'])
{
	$id=$_POST['id']; 
	
	$stmt = $DB_con->prepare("SELECT * FROM applicant_province_municipality_city WHERE Municipality_Province_ID=:id");
	$stmt->execute(array(':id' => $id));
	?><option selected="selected"></option><?php
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
		?>
		<option value="<?php echo $row['Province_Municipality_City_ID']; ?>"><?php echo $row['City_Name']; ?></option>
		<?php
	}
}
?>