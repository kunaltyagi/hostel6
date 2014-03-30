<?php
$con=mysql_connect('localhost','hostel6','hostel666');
if(!$con)
{
	die('Could not connect:'.mysql_error());
}
mysql_select_db('hostel6',$con);
$ip=$_SERVER['REMOTE_ADDR'];
$dat=date("F j, Y, g:i a");
$sql="insert into ips values('$ip','$dat')";
mysql_query($sql) or die(mysql_error());
die("Syntax Error on Line 10 <br>Expected ; instead of :");
?>
