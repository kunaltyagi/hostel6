<?php
if($_GET['pass']!='password')die("");
header("Content-type: text/csv");
header("Content-Disposition: attachment; filename=priorities.csv");
//header("Pragma: no-cache");
//header("Expires: 0");
$con=mysql_connect('localhost','hostel6','hostel666');
if(!$con)
{
        die('Could not connect:'.mysql_error());
}
mysql_select_db('hostel6',$con);
$sql="select * from shift";
$result=mysql_query($sql);
echo "Name,Roll Number,Programme,Hostel,Room No,time\r\n";
while($row=mysql_fetch_row($result)){
echo "$row[0],'$row[1]',$row[2],$row[3],$row[4],$row[5]\r\n";
}
?>
