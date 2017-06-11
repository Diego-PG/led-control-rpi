<?php
	$r = $_POST['slideRed'];
	$g = $_POST['slideGreen'];
	$b = $_POST['slideBlue'];
	system("pigs p 17 $r");
	system("pigs p 24 $g");
	system("pigs p 22 $b");
	header("location:colorpicker.html");
?>
