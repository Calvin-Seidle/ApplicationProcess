<?php
    ob_start();
    session_start();
    require 'head.php';
    require_once 'dbconnect.php';
    
    // if session is not set this will redirect to login page
    if( !isset($_SESSION['user']) ) {
        header("Location: index.php");
        exit;
    }
    // select loggedin users detail
    $res=mysql_query("SELECT * FROM system_login WHERE Login_ID=".$_SESSION['user']);
    $userRow=mysql_fetch_array($res);
?>

<?php
    mysql_connect('192.168.1.20', 'monwabisi', 'littlepig123');
    //mysql_connect('localhost', 'root', '');
    mysql_select_db('applicant');
    //DROP DOWN LISTS!!!
    $sql1 = "SELECT * FROM applicant_gender";
    $Gender = mysql_query($sql1);

    $sql2 = "SELECT * FROM applicant_race";
    $Race = mysql_query($sql2);

    $sql3 = "SELECT * FROM applicant_nationality";
    $Nationality = mysql_query($sql3);

    $sql4 = "SELECT * FROM applicant_marital_status";
    $MaritalStatus = mysql_query($sql4);

    $sql5 = "SELECT * FROM applicant_drivers_license_details";
    $DriversLicense = mysql_query($sql5);

    $sql6 = "SELECT * FROM applicant_vehicle_restriction";
    $VehicleRestrictions = mysql_query($sql6);

    $sql7 = "SELECT * FROM applicant_disability";
    $Disability = mysql_query($sql7);
?>

<body>
<div class="container-fluid">
<form action="php_insert/insert_personal_details.php" method="POST">
<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand">Logged in as: <span class="text-primary id-size"><?php echo $userRow['Login_ID']; ?></span></a>
            </div>
            <div class="col-xs-6">
                <div class="col-xs-6">
                    <button class="btn btn-warning btn-block">
                        <a href="edit_account.php"><label class="text-primary">Edit Account</label></a>
                    </button>
                </div>
                <div class="col-xs-6">
                    <button class="btn btn-danger btn-block">
                        <a href="logout.php"><label class="text-primary">Logout</label></a>
                    </button>
                </div>
            </div>
        </div>    
    </div>   
</nav>

<section>
	<div class="row">
		<div class="col-xs-12 text-center">
	    	<h2>Personal Details</h2>
	    	<hr class="star-primary">
	    </div>
	</div>
	<div class="container">
        <div class="well">  
            <div class="row"> 
                <div class="col-xs-6 col-xs-offset-3">
                    <label class="control-label" for="PersonalDetailsID">Identity Number:</label>
                    <input type="text" class="form-control" name="PersonalDetailsID" value="<?php echo $userRow['Login_ID']; ?>">
                </div>
            <div class="row">
                <div class="col-xs-4">
                    <label class="control-label" for="name">Name:</label>
                    <input type="text" class="form-control" name="FirstName" placeholder="John">    
                </div>
                <div class="col-xs-4">  
                    <label class="control-label" for="mname">Middle Name(s):</label>
                    <input type="text" class="form-control" name="MiddleName" placeholder="Middle Name(s)">  
                </div>
                <div class="col-xs-4">  
                    <label class="control-label" for="sname">Surname:</label>
                    <input type="text" class="form-control" name="Surname" placeholder="Doe">     
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
                    <input type="text" class="form-control" name="PhoneNumber" placeholder="0837654321"> 
                </div>
                <div class="col-xs-4">  
                    <label class="control-label" for="AlternativeNumber">Alternative Phone Number:</label>
                    <input type="text" class="form-control" name="AlternativeNumber" placeholder="0831234567">
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
                    <label class="control-label" for="NumberOfDependencies">Number Of Dependencies: </label>
                    <input type="text" class="form-control" name="NumberOfDependencies">
                </div>
            </div>
            <div class="row">
            <h4 class="text-primary text-center text-size"> Drivers License </h4>
            <hr class="star-primary">
                <div class="col-xs-6">
                    <label class="control-label" for="DriversCode">Drivers License Code:
                    <span class="hint text-danger">Please specify code only</span></label>
                    <?php
                        echo "<select class=form-control name='DriversCode'>";
                       
                            while ($row = mysql_fetch_array($DriversLicense)){
                                echo "<option value='".$row['Drivers_License_ID']. "'>" .$row['Drivers_License_Code']. "</option>";
                            }
                        echo "</select>";
                    ?> 
                </div>
                <div class="col-xs-6">
                    <label class="control-label" for="VehicleRestrictions">Vehicle Restrictions:</label>
                    <?php
                        echo "<select class=form-control name='VehicleRestrictions'>";
                            while ($row = mysql_fetch_array($VehicleRestrictions)){
                                echo "<option value='".$row['Vehicle_Restriction_ID']. "'>" .$row['Vehicle_Restrictions']. "</option>";
                            }
                        echo "</select>";
                    ?> 
                </div>
            </div>
            <div class="row">
            <h4 class="text-primary text-center text-size"> Disability </h4>
            <hr class="star-primary">
                <div class="col-xs-6">
                    <label class="control-label" for="Disability">Disability:</label>
                    <select class="form-control" name="Disability">
                        <option value="1">No</option>
                        <option value="2">Yes</option>
                    </select>  
                    <?php
                        // echo "<select class=form-control name='Disability'>";
                        //     while ($row = mysql_fetch_array($Disability)){
                        //         echo "<option value='".$row['Disability_ID']. "'>" .$row['Disability']. "</option>";
                        //     }
                        // echo "</select>";
                    ?> 
                </div>
                <div class="col-xs-6">
                    <label class="control-label" for="DisabilityType">Disability Type:
                    <span class="hint text-danger">Please specify type</span></label>
                    <input type="text" class="form-control" name="DisabilityType">
                </div>
            </div>
            <div class="row">
            <h4 class="text-primary text-center text-size"> Skills </h4>
            <hr class="star-primary">
                <div class="col-xs-6">
                    <label class="control-label" for="Skills">Skills:
                    <span class="hint text-danger">Please specify your top 5 skills</span></label> 
                    <input type="text" class="form-control" name="Skills">                        
                </div>   
                <div class="col-xs-6">
                    <label class="control-label" for="CriminalRecord">Criminal Record:</label> 
                    <select class="form-control" name="CriminalRecord">
                    
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>  
                    <?php
                       // echo "<select class=form-control name='CriminalRecord[]'>";
                       //     while ($row = mysql_fetch_array($CriminalRecord)){
                       //         echo "<option value='".$row['Criminal_Record_ID']. "'>" .$row['CriminalRecord']. "</option>";
                        //    }
                       // echo "</select>";
                    ?>               
                </div>                             
            </div>             
        </div>
        </div>

	
		<div class="row">
	    <div class="col-xs-12">
	        <button class="btn btn-block btn-primary">Submit Personal Details</button>
	    </div>
    </div>
</section>
</form>
</div>
</body>