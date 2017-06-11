<?php
	$r= $_POST['r'];
	$g= $_POST['g'];
	$b= $_POST['b'];
	system("pigs p 17 $r");
	system("pigs p 24 $g");
	system("pigs p 22 $b");
	header("location:rgb.php");
?>
