<?php
	$chatfile = fopen($_GET['chatid'].".txt", "a");
	fwrite($chatfile, "[".$_GET['user']."] ".$_GET['message'].PHP_EOL);
	fclose($chatfile);
	echo("Boo!");
?>
