<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
  include_once 'dbconfig.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM system_login WHERE Login_ID=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);

?> 
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Welcome - <?php echo $_SESSION['user']; ?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"/>
<link rel="stylesheet" href="style.css" type="text/css" />
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/relCopy.jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
           var removeName = '<a class="white" type="button" href="#" onClick="$(this).parent().slideUp( function(){$(this).remove()}); return false">Remove (-)</a><br><br>';
        $('a.name').relCopy({limit: 2, append:removeName});
        });
    </script>
    
  <script type="text/javascript">
    $(document).ready(function()
    {
      $("#province").change(function()
      {
        var id=$(this).val();
        var dataString = 'id='+ id;
        
        $.ajax
        ({
          type: "POST",
          url: "get_municipality.php",
          data: dataString,
          cache: false,
          success: function(html)
          {
            $("#municipality").html(html);
          } 
        });
      });
    
      $("#municipality").change(function()
      {
        var id=$(this).val();
        var dataString = 'id='+ id;
        
        $.ajax
        ({
          type: "POST",
          url: "get_city.php",
          data: dataString,
          cache: false,
          success: function(html)
          {
            $("#city").html(html);
          } 
        });
      });
    });
  </script>

    

  
</head>
<body class="body">
<div class="container-fluid">
    <form action="php_insert/insert_address.php" method="POST">
      <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
            <a class="navbar-brand" ><span class="glyphicon glyphicon-user"></span>&nbsp;Logged in as: <?php echo $_SESSION['user']; ?></a>    
            </div>
              <ul class="nav navbar-nav navbar-right">
              <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
          </div>
        </nav> 

<div id="wrapper">
<section>
    <div class="row">
        <div class="col-xs-12 text-center">
            <h2 class="white">Address</h2>
            <hr class="star-primary">
        </div>
    </div><br>
    <div class="container">
        <div class="clone">

          <div class="alert alert-success">
            <strong>Your address has been submitted.</strong><a href="qualification.php" class="alert-link"> CLICK HERE!</a> to continue with the application process if you do not have another address to add.
          </div>

            <div class="well"> 
                <div class="row">
 
                    <div class="col-xs-6">
                        <label class="control-label" for="AddressLine1">Address Line 1:</label>
                        <input type="text" class="form-control" id="AddressLine1" name="AddressLine1[]" required>
                        <label class="control-label" for="AddressLine2">Address Line 2:</label>
                        <input type="text" class="form-control" id="AddressLine2" name="AddressLine2[]" required>
                        <label class="control-label" for="AddressLine3">Address Line 3:</label>
                        <input type="text" class="form-control" id="AddressLine3" name="AddressLine3[]" required>
                    </div>
                    <div class="col-xs-6">
                    <!--Province-->
                        <label class="control-label" for="Province">Province:</label>
                          <select id="province" name="Province[]" class="province form-control" required>
                          <option selected="selected"></option>
                          <?php
                            $stmt = $DB_con->prepare("SELECT * FROM applicant_province");
                            $stmt->execute();
                            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                            {
                              ?>
                                <option value="<?php echo $row['Province_ID']; ?>"><?php echo $row['Province_Name']; ?></option>
                                <?php
                            } 
                          ?>
                          </select>
                    <!-- Municipality -->
                        <label class="control-label" for="Municipality">Municipality:</label>
                        <select id="municipality" name="Municipality[]" class="municipality form-control" required>
                          <option selected="selected"></option>
                        </select>
                    <!-- City -->
                        <label class="control-label" for="City">City:</label>
                        <select id="city" name="City[]" class="city form-control" required>
                          <option selected="selected"></option>
                        </select>
                    </div>
                    <div class="col-xs-6 col-xs-offset-3">
                        <label class="control-label" for="PostalCode">Postal Code:</label>
                        <input type="text" class="form-control" name="PostalCode[]" placeholder="1234" pattern="[0-9]{4}" title="Please enter a valid 4 digit postal code" required maxlength="4" minlength="4"> 
                    </div>
                </div>  
            </div>
        </div>
        <div class="clone2"> </div> 
        
        <div class="row well">
              
              <div class="col-xs-6">
                  <button class="btn btn-block btn-primary">Submit Address</button>
              </div>
              <div class="col-xs-6">
                  <a href="qualification.php" class="btn btn-block btn-success" role="button">Continue</a>
              </div>
              
            
        </div>
        </div>
    </div>
</section>
<!-- Footer -->
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
    
</div>
    
    <!-- <script src="assets/jquery-1.11.3-jquery.min.js"></script> -->
    <script src="assets/js/bootstrap.min.js"></script>
</div>    
</body>
</html>
<?php ob_end_flush(); ?>