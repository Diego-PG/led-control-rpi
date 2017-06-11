<?php

echo'
<html>
	<head>
		<title>LED</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<form Name ="form1" Method ="POST" ACTION = "red.php">
		<input type="submit" value="red" name="red" class="red" />
		</form>
		<form Name ="green" Method ="POST" ACTION = "green.php">
		<input type="submit" value="green" name="green" class="green" />
		</form>
		<form Name ="blue" Method ="POST" ACTION = "blue.php">
		<input type="submit" value="blue" name="blue" class="blue" />
		</form>


	</body>
</html>';
