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

    $sql1 = "SELECT * FROM applicant_gender";
    $Gender = mysql_query($sql1);

    $sql2 = "SELECT * FROM applicant_race";
    $Race = mysql_query($sql2);

    $sql3 = "SELECT * FROM applicant_nationality";
    $Nationality = mysql_query($sql3);

    $sql4 = "SELECT * FROM applicant_marital_status";
    $MaritalStatus = mysql_query($sql4);

    $sql5 = "SELECT * FROM applicant_drivers_license_code";
    $DriversLicense = mysql_query($sql5);

    $sql6 = "SELECT * FROM applicant_drivers_license_status";
    $LicenseStatus = mysql_query($sql6);

    $sql7 = "SELECT * FROM applicant_disability";
    $Disability = mysql_query($sql7);
   
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['Login_ID']; ?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body class="body">
<div class="container-fluid">
    <form action="php_insert/insert_personal_details.php" method="POST">
    	<nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://littlepig.cc">Little Pig</a>    
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
    			  <span class="glyphicon glyphicon-user"></span>&nbsp;Logged in as: <?php echo $userRow['Login_ID']; ?>&nbsp;<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav> 

<div id="wrapper">
    <section>
      <div class="row">
        <div class="col-xs-12 text-center">
            <h2 class="white">Personal Details</h2>
            <hr>
          </div>
      </div>
      <div class="container">
            <div class="well">  
                <div class="row"> 
                </div>    
                <div class="row">
                    <div class="col-xs-4">
                        <label class="control-label" for="FirstName">Name:</label>
                        <input type="text" class="form-control" name="FirstName" placeholder="John" required=""> <span class="text-danger"><?php echo $FirstNameError; ?></span>   
                    </div>
                    <div class="col-xs-4">  
                        <label class="control-label" for="MiddleName">Middle Name(s):</label>
                        <input type="text" class="form-control" name="MiddleName" placeholder="Middle Name(s)" required="">  
                    </div>
                    <div class="col-xs-4">  
                        <label class="control-label" for="Surname">Surname:</label>
                        <input type="text" class="form-control" name="Surname" placeholder="Doe" required="">     
                    </div>      
                </div>

                <div class="row">
                    <div class="col-xs-4">
                        <label class="control-label" for="Gender">Gender:</label>
                        <?php
                            echo "<select class=form-control name='Gender'>";
                                while ($row = mysql_fetch_array($Gender)){
                                    echo "<option value='".$row['Gender_ID']. "'>" .$row['Gender']. "</option>";
                                }
                            echo "</select>";
                        ?>                  
                    </div>
                    <div class="col-xs-4">      
                        <label class="control-label" for="Race">Race:</label>
                        <?php
                            echo "<select class=form-control name='Race'>";
                                while ($row = mysql_fetch_array($Race)){
                                    echo "<option value='".$row['Race_ID']. "'>" .$row['Race']. "</option>";
                                }
                            echo "</select>";
                        ?>   
                    </div>
                    <div class="col-xs-4">      
                        <label class="control-label" for="Nationality">Nationality:</label>
                        <?php
                            echo "<select class=form-control name='Nationality'>";
                                while ($row = mysql_fetch_array($Nationality)){
                                    echo "<option value='".$row['Nationality_ID']. "'>" .$row['Nationality']. "</option>";
                                }
                            echo "</select>";
                        ?>   
                    </div>  
                </div>  
                <div class="row">
                    <div class="col-xs-4">
                        <label class="control-label" for="Email">Email:</label>
                        <input type="email" class="form-control" name="Email" value="<?php echo $userRow['Email']; ?>" disabled="true">    
                    </div>
                    <div class="col-xs-4">      
                        <label class="control-label" for="PhoneNumber">Phone Number:</label>
                        <input type="text" class="form-control" name="PhoneNumber" placeholder="+(27)837654321" required maxlength="20" pattern="[\+][\(]\d{2}[\)]\d{9}" title="Enter a valid number starting with +(27)"> 
                    </div>
                    <div class="col-xs-4">  
                        <label class="control-label" for="AlternativeNumber">Alternative Phone Number:</label>
                        <input type="text" class="form-control" name="AlternativeNumber" placeholder="+(27)837654321" required maxlength="20" pattern="[\+][\(]\d{2}[\)]\d{9}" title="Enter a valid number starting with +(27)">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <label class="control-label" for="MaritalStatus">Marital Status:</label>
                        <?php
                            echo "<select class=form-control name='MaritalStatus'>";
                                while ($row = mysql_fetch_array($MaritalStatus)){
                                    echo "<option value='".$row['Marital_Status_ID']. "'>" .$row['Marital_Status']. "</option>";
                                }
                            echo "</select>";
                        ?> 
                    </div>
                    <div class="col-xs-6">
                        <label class="control-label" for="NumberOfDependencies">Number Of Dependencies: 
                        <span class="hint text-danger">Please specify number only</span></label>
                        <input type="text" class="form-control" name="NumberOfDependencies" placeholder="1, 2, 3, etc." required maxlength="2" pattern="[0-9]{2,}" title="Enter numbers only">
                    </div>
                </div>
                <div class="row">
                <h4 class="text-primary text-center text-size"> Drivers License </h4>
                <hr>
                    <div class="col-xs-6">
                        <label class="control-label" for="DriversCode">Drivers License Code:
                        <span class="hint text-danger">Please specify code only</span></label>
                        <?php
                            echo "<select class=form-control name='DriversCode'>";
                           
                                while ($row = mysql_fetch_array($DriversLicense)){
                                    echo "<option value='".$row['Drivers_License_Code_ID']. "'>" .$row['Drivers_License_Code']. "</option>";
                                }
                            echo "</select>";
                        ?> 
                    </div>
                    <div class="col-xs-6">
                        <label class="control-label" for="LicenseStatus">Vehicle Restrictions:</label>
                        <?php
                            echo "<select class=form-control name='LicenseStatus'>";
                                while ($row = mysql_fetch_array($LicenseStatus)){
                                    echo "<option value='".$row['Drivers_License_Status_ID']. "'>" .$row['Drivers_License_Status']. "</option>";
                                }
                            echo "</select>";
                        ?> 
                    </div>
                </div>
                <div class="row">
                <h4 class="text-primary text-center text-size"> Disability </h4>
                <hr>
                    <div class="col-xs-6">
                        <label class="control-label" for="Disability">Disability:</label>
                        <select class="form-control" name="Disability">
                            <option value="1">No</option>
                            <option value="2">Yes</option>
                        </select>   
                    </div>
                    <div class="col-xs-6">
                        <label class="control-label" for="DisabilityType">Disability Type:
                        <span class="hint text-danger">Please specify type</span></label>
                        <input type="text" class="form-control" name="DisabilityType" placeholder="Hearing Disability, Seeing Disability, etc.">
                    </div>
                </div>
                <div class="row">
                <h4 class="text-primary text-center text-size"> Skills </h4>
                <hr>
                    <div class="col-xs-6">
                        <label class="control-label" for="Skills">Skills:
                        <span class="hint text-danger">Please specify your top 5 skills</span></label> 
                        <input type="text" class="form-control" name="Skills" placeholder="Microsoft Office, Programming, Public Speaking, etc." required="">                        
                    </div>   
                    <div class="col-xs-6">
                        <label class="control-label" for="CriminalRecord">Criminal Record:</label> 
                        <select class="form-control" name="CriminalRecord">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>                
                    </div>                             
                </div>             
            </div>
            <div class="row well">
                <div class="col-xs-12">
                    <button class="btn btn-block btn-primary" name="submit">Submit & Continue</button>
                </div>
            </div>
        </div>
    </section>
    
    </form>
  </div>
</div>
    <!-- Footer -->
<footer class="text-center">
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 white">
                    Copyright &copy; Little Pig Recruitment Agency 2017
                    <!-- <center>
                        <img class="img-responsive" src="images/footer.jpg"  height="75px" width="500px">
                    </center> -->
                </div>
            </div>
        </div>
    </div>
</footer>
    <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
</body>
</html>
<?php ob_end_flush(); ?>