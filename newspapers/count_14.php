<?php

	if (file_exists('count_14.txt')) 
	{
		$fil = fopen('count_14.txt', r);
		$dat = fread($fil, filesize('count_14.txt')); 
		fclose($fil);
		$fil = fopen('count_14.txt', w);
		fwrite($fil, $dat+1);
	}

	else
	{
		$fil = fopen('count_14.txt', w);
		fwrite($fil, 1);
		fclose($fil);
	}
?>