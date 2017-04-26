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
	$res=mysql_query("SELECT * FROM applicant_login WHERE Login_ID=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $_SESSION['user']; ?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
  <script type="text/javascript" src="js/relCopy.jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
       var removeName = '<a class="white" href="#" onClick="$(this).parent().slideUp( function(){$(this).remove()}); return false">Remove (-)</a><br><br>';
    $('a.name').relCopy({append:removeName});
    });
  </script>
</head>
<body class="body">

	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand"><span class="glyphicon glyphicon-user"></span>&nbsp;Hi <?php echo $_SESSION['user']; ?></a>
        </div>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
          </ul>
      </div>
    </nav> 

<div id="wrapper">
<form action="php_insert/insert_references.php" method="post">
  
<h2 class="text-center white">References</h2>
<hr>
<div class="container">
  <div class="clone">
    <div class="well">
      <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
          <label> Reference Name: </label>
          <input class="form-control" type="text" name="ReferenceName[]" id="ReferenceName" required placeholder="John" />
        </div>
        <div class="col-xs-6 col-xs-offset-3">
          <label> Contact Number: </label>
          <input class="form-control" type="text" name="ContactNumber[]" id="ContactNumber" required maxlength="20" pattern="[\+][\(]\d{2}[\)]\d{9}" title="Enter a valid number starting with +(27)" placeholder="+(27)837654321"/>
        </div>
        <div class="col-xs-6 col-xs-offset-3">
          <label> Email Address:</label>
          <input class="form-control" type="email" name="EmailAddress[]" id="EmailAddress" required placeholder="reference@example.com" />
        </div>
        <div class="col-xs-6 col-xs-offset-3">
          <label> Relationship:</label>
          <input class="form-control" type="text" name="Relationship[]" id="Relationship" required placeholder="Manager" />
        </div>
      </div>  
    </div>
  </div>
  <div class="row well">
    <div class="col-xs-12">
      <input class="btn btn-primary btn-block" type="submit" value="Submit Reference" />
    </div>
  </div>  
</div>

</form>
</div>

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
    
    <script src="assets/js/bootstrap.min.js"></script>
    
</body>
</html>
<?php ob_end_flush(); ?>