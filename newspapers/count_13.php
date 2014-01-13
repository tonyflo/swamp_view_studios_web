<?php

	if (file_exists('count_13.txt')) 
	{
		$fil = fopen('count_13.txt', r);
		$dat = fread($fil, filesize('count_13.txt')); 
		fclose($fil);
		$fil = fopen('count_13.txt', w);
		fwrite($fil, $dat+1);
	}

	else
	{
		$fil = fopen('count_13.txt', w);
		fwrite($fil, 1);
		fclose($fil);
	}
?>