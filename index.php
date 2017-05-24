<html>
<head>
	<meta name="viewport" content="width=device-width" />
	<title>Smart Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<center>
	<h1>Control LED:</h1>
        <form id="light" method="get" action="index.php">
        	<p>Light1:</p>
		<input type="submit" value="OFF" name="off">
                <input type="submit" value="ON" name="on">
		<input type="submit" value="BLINK" name="blink">
                <p>Light2:</p>
		<input type="submit" value="OFF" name="off">
                <input type="submit" value="ON" name="on">
		<input type="submit" value="BLINK" name="blink">
        </form>
	<h1>Temperature:</h1>
	<form id="temperature" method ="get" action="index.php">
		<input type="submit" value="Check Temperature" name="temp">
	</form>
        <?php
	//turn off the blink then it's not set anymore
        shell_exec("sudo killall python");
	shell_exec("sudo python /var/www/html/fanTemp.py");
	//control light, blink (turn on) & termperature
	if(isset($_GET['off']))
        {
		echo "LED is off";
		shell_exec("sudo python /var/www/html/light_off.py");
        }
	else if(isset($_GET['on']))
	{
		echo "LED is on";
		shell_exec("sudo python /var/www/html/light_on.py");
	}
	else if(isset($_GET['blink']))
	{
		shell_exec("sudo python /var/www/html/blink.py");
	}
	else if(isset($_GET['temp']))
	{
                $temperature = shell_exec("sudo python /var/www/html/temperature.py");
		echo $temperature;
	}
        ?>
</center>
</body>
</html>
