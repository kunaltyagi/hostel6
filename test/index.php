<?php
$con=mysql_connect('localhost','hostel9','hostel9');
mysql_select_db('hostel9',$con) or die ("error ".mysql_error());
print "success";
?>
