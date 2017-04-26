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
<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div class="container-fluid">


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


<div class="jumbotron text-center">
	<h1>Congratulatons! Your application has been submitted!</h1>
</div>	
<center>
	<img src="images/congrats.jpg">
	<h3>Check out our social media pages</h3>
</center>

<div class="row">
	<div class="col-xs-4">
		<a href="" class="social-media1 btn btn-block btn-social btn-twitter">
    	<span class="fa fa-twitter"> Twitter</span>
  		</a>
	</div>
	<div class="col-xs-4">	
  		<a href="" class="social-media1 btn btn-block btn-social btn-facebook">
    	<span class="fa fa-facebook"> Facebook</span>
  		</a>
	</div>
	<div class="col-xs-4">	
  		<a href="" class="social-media1 btn btn-block btn-social btn-linkedin">
    	<span class="fa fa-linkedin"> Linkedin</span>
  		</a>
	</div>
</div><br><br>

<!-- Footer -->
<footer class="text-center">
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    Copyright &copy; Little Pig Recruitment Agency 2017
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<body>
  <script src="assets/js/bootstrap.min.js"></script>
</html>