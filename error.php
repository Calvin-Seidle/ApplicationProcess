<?php 
include 'head.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title>ERROR!!!</title>
</head>
<body>
  <div class="container-fluid">
	<div class="col-xs-8 col-xs-offset-2">	
	  <div class="panel panel-danger">	
		<div class="panel-heading">
			<h2 class="text-center text-danger">ERROR</h2>
		</div>
		<div class="panel-body">
			<div>
				<h2 class="text-center">Something went wrong</h2>
			</div>
			<div class="col-xs-6 col-xs-offset-3">
	  			<input type="button" class="btn btn-danger btn-block" value="Go Back From Whence You Came!" onclick="history.back(-1)" />
	  		</div>
		</div>
	  </div>
	</div>
  </div>	
</body>
</html>