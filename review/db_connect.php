<?php $server = "localhost";
	$username = "hostel6";
	$password = "machauhostel6";
	$database = "hostel6";
	$con = mysql_connect($server, $username, $password);
	if(!$con) die("Can't connect to database.");
	mysql_select_db($database,$con);
?>
