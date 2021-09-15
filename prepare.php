<?php
	if(!file_exists($_GET['chatid'].".txt")){
		$chatfile = fopen($_GET['chatid'].".txt", "a");
		fwrite($chatfile, 'Chat created at '.date("l Y-m-d").PHP_EOL);
		fclose($chatfile);
	}
?>
