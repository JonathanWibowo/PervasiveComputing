<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Smart Home</title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
			<center>
				<h1>SMART HOME:</h1><br>
			    	<form id="content" method="get" action="index.php">
			    		<h4>LIGHT 1</h4>
						<input type="submit" value="OFF" name="off" class="btn btn-lg btn-danger">
				        	<input type="submit" value="ON" name="on" class="btn btn-lg btn-success">
						<input type="submit" value="BLINK" name="blink" class="btn btn-lg btn-warning">
			        	<h4>LIGHT 2</h4>
						<input type="submit" value="OFF" name="off2" class="btn btn-lg btn-danger">
			            		<input type="submit" value="ON" name="on2" class="btn btn-lg btn-success">
						<input type="submit" value="BLINK" name="blink2" class="btn btn-lg btn-warning">
					<h4>TEMPERATURE</h4>
						<input type="submit" value="Check Temperature" name="temp" class="btn btn-lg btn-info">
				</form>
			</center>
		</div>
	</div>
</div>
<?php
if(isset($_GET['off']))
{
	echo shell_exec("sudo python /var/www/html/light_off.py");
	echo "<center>LED 1 is off</center>";
}
else if(isset($_GET['on']))
{
	echo shell_exec("sudo python /var/www/html/light_on.py");
	echo "<center>LED 1 is on</center>";
}
else if(isset($_GET['blink']))
{
	echo shell_exec("sudo python /var/www/html/blink.py");
	echo "<center>LED 1 is blinking</center>";
}
else if(isset($_GET['temp']))
{
	$temperature = shell_exec("sudo python /var/www/html/temperature.py");
	echo "<center>$temperature</center>";
}
?>
</body>
</html>
