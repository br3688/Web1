<?php echo "hello world"; ?>

<html>
<head>
<meta name="viewport" content="width=device-width" />
<title>LED Control</title>
</head>

	<body>
	LED Control:
	<form method="get" action= "LedsGpio.php">
		<input type="submit" value="ON" name="on">
		<input type="submit" value="OFF" name="off">
	</form>
	<?php
	
	$setmode17 = shell_exec("/usr/local/bin/gpio -g mode 17 out");
	if (isset($_GET['on']))
		$gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 1");
	if (isset($_GET['off']))
		$gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 0");
	?>
	
	</body>


</html>
