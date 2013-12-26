<?php
	function hit_count(){
		$filename = 'count.txt';
		$handle = fopen($filename,'r');
		$curent = fread($handle, filesize($filename) );
		fclose($handle);
		
		$curent_inc = $curent + 1;
		
		$handle = fopen($filename, 'w');
		fwrite($handle, $curent_inc);
		fclose($handle);
		
		echo $curent_inc;
	}

?>