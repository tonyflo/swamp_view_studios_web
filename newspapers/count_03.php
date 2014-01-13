<?php

	if (file_exists('count_03.txt')) 
	{
		$fil = fopen('count_03.txt', r);
		$dat = fread($fil, filesize('count_03.txt')); 
		fclose($fil);
		$fil = fopen('count_03.txt', w);
		fwrite($fil, $dat+1);
	}

	else
	{
		$fil = fopen('count_03.txt', w);
		fwrite($fil, 1);
		fclose($fil);
	}
?>