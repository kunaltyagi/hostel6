<?php



$Server='localhost';
$User='hostel6';
$Pass='machauhostel6';
$DB='hostel6'; 
	
$con = mysql_connect($Server, $User, $Pass)
  or die("Couldn't connect to SQL Server on $Server :".mysql_error()); 
  
$db=mysql_select_db($DB,$con)
	or die("Couldn't connect to $DB at $Server"); 
?>