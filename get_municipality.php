<?php
include('dbconfig.php');
if($_POST['id']) //|| $_GET['id'])
{
	//$id=$_GET['id'];
	$id=$_POST['id'];
		
	$stmt = $DB_con->prepare("SELECT * FROM applicant_province_municipality WHERE Province_ID=:id");
	$stmt->execute(array(':id' => $id));
	?><option selected="selected"></option><?php
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
		?>
        <option value="<?php echo $row['Municipality_Province_ID']; ?>"><?php echo $row['Municipality_Name']; ?></option>
        <?php
	}
}
?>

