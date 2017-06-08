<?php

echo'
<html>
	<head>
		<title>LED</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<form Name ="form1" Method ="POST" ACTION = "ledon.php">
		<input type="submit" value="ON" name="ON" class="button1" />
		</form>
		<form Name ="form" Method ="POST" ACTION = "ledoff.php">
		<input type="submit" value="OFF" name="OFF" class="button2" />
		</form>
	</body>
</html>';
