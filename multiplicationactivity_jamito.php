<?php
	$n = 10;
	$i;
	$p;
	echo nl2br("multiplication table of $n \n");
	for ($i = 1; $i <= 10; $i++) {
		$p = $n * $i;
		echo nl2br("$n x $i = $p\n");
	}
?>