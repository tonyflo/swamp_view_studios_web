<?php

	if (file_exists('count_09.txt')) 
	{
		$fil = fopen('count_09.txt', r);
		$dat = fread($fil, filesize('count_09.txt')); 
		fclose($fil);
		$fil = fopen('count_09.txt', w);
		fwrite($fil, $dat+1);
	}

	else
	{
		$fil = fopen('count_09.txt', w);
		fwrite($fil, 1);
		fclose($fil);
	}
?>