<?php $server = "localhost";
	$username = "hostel6";
	$password = "hostel666";
	$database = "election";
	$con = mysql_connect($server, $username, $password);
	if(!$con) die("Can't connect to database.");
	mysql_select_db($database,$con);
?>
