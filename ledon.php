<?php
	system("gpio -g mode 17 out");
	system("gpio -g write 17 1");
	header("location:led.php");
?>
