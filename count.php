<?php

	if (file_exists('count_text.txt')) 
	{
		$fil = fopen('count_text.txt', r);
		$dat = fread($fil, filesize('count_text.txt')); 
		fclose($fil);
		$fil = fopen('count_text.txt', w);
		fwrite($fil, $dat+1);
		print('<p class="text center">pc: '.$dat.'</p>');
	}

	else
	{
		$fil = fopen('count_text.txt', w);
		fwrite($fil, 1);
		fclose($fil);
	}
?>