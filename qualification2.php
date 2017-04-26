<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM system_login WHERE Login_ID=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);

  $sql1 = "SELECT * FROM applicant_university";
  $NameOfUniversity = mysql_query($sql1);
  $sql2 = "SELECT * FROM applicant_qualification";
  $NameOfQualification = mysql_query($sql2);
  $sql3 = "SELECT * FROM applicant_qualification_status";
  $QualificationStatus = mysql_query($sql3);

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $_SESSION['user']; ?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

  <script type="text/javascript" src="js/relCopy.jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
       var removeName = '<a class="white" href="#" onClick="$(this).parent().slideUp( function(){$(this).remove()}); return false">Remove (-)</a><br><br>';
    $('a.name').relCopy({append:removeName});
    });
  </script>
</head>
<body class="body">
<div class="container-fluid">
<form action="php_insert/insert_qualification.php" method="POST">
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand"><span class="glyphicon glyphicon-user"></span>&nbsp;Hello <?php echo $_SESSION['user']; ?></a>
        </div>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
      </div>
    </nav> 

<div id="wrapper">
  <section>
    <div class="row">
      <div class="col-xs-12 text-center">
          <h2 class="white">Qualifications</h2>
          <hr class="star-primary">
        </div>
    </div>
	<div class="container">
  <div class="clone">
    <div class="alert alert-success">
      <strong>Your qualification has been submitted.</strong><a href="experience.php" class="alert-link"> CLICK HERE!</a> to continue with the application process if you do not have another address to add.
    </div>
    <div class="well">
      <div class="row">
        <div class="col-xs-6 col-xs-offset-3" >
            <label class="control-label" for="NameOfQualification">Name of Qualification:</label>
              <?php
                  echo "<select class=form-control name='NameOfQualification[]' required>";
                  echo "<option selected='NULL'></option>";
                  while ($row = mysql_fetch_array($NameOfQualification)){
                      echo "<option value='".$row['Qualification_ID']. "'>" .$row['Qualification_Name']. "</option>";
                  }
                  echo "</select>";
              ?> 
        </div>
          <div class="col-xs-6 col-xs-offset-3">
              <label class="control-label" for="FieldOfStudy"> Field of Study:</label>
              <input type="text" name="FieldOfStudy[]" class="form-control" required />    
          </div>
        <div class="col-xs-6 col-xs-offset-3" >
            <label class="control-label" for="NameOfUniversity">University Name:</label>
              <?php
                  echo "<select class=form-control name='NameOfUniversity[]' required>";
                  echo "<option selected='NULL'></option>";
                  while ($row = mysql_fetch_array($NameOfUniversity)){
                      echo "<option value='".$row['University_ID']. "'>" .$row['University_Name']. "</option>";
                  }
                  echo "</select>";
              ?>
        </div>
        <div class="col-xs-6 col-xs-offset-3" >
            <label class="control-label" for="QualificationStatus">Status:</label>
              <?php
                  echo "<select class=form-control name='QualificationStatus[]' required>";
                  echo "<option selected='NULL'></option>";
                  while ($row = mysql_fetch_array($QualificationStatus)){
                      echo "<option value='".$row['Qualification_Status_ID']. "'>" .$row['Qualification_Status']. "</option>";
                  }
                  echo "</select>";
              ?> 
        </div>
        <div class="col-xs-6 col-xs-offset-3">
            <label class="control-label" for="StartDate">Start Date:</label>
            <input name="StartDate[] id="datepicker" class="form-control datepicker" data-date-format="dd/mm/yyyy" type="date" required placeholder="2017-01-01">
        </div>
        <div class="col-xs-6 col-xs-offset-3" >
            <label class="control-label" for="EndDate">End Date:</label>
            <input name="EndDate[]" class="form-control datepicker" data-date-format="dd/mm/yyyy" type="date" required placeholder="2017-01-02">
        </div>
      </div>
  </div>
  </div>
  <div class="row well">
    <div class="col-xs-6">
      <input class="btn btn-primary btn-block" type="submit" value="Submit Qualification" />
    </div>
    <div class="col-xs-6">
      <a href="experience.php" class="btn btn-block btn-success" role="button">Continue</a>
    </div>
  </div>  
    </div>
  </div>

    
  </div>    
</div>
    
    <!-- <script src="assets/jquery-1.11.3-jquery.min.js"></script> -->
    <script src="assets/js/bootstrap.min.js"></script>
</section>

<footer class="text-center">
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 white">
                    Copyright &copy; Little Pig Recruitment Agency 2017
                </div>
            </div>
        </div>
    </div>
</footer>

</div> 
</form>   
</body>
</html>
<?php ob_end_flush(); ?>