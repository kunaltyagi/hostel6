<?php session_start();
$usid=$_SESSION['uid'];

 if(!isset($_SESSION['roll']))
{
	header("location:index.php?val=1"); ?>
	<meta http-equiv="refresh" content="0; url=index.php?val=1"> 
    <?php
}
	else 
	{
		?> 
 <html>
<head>
<link style="text/css" rel="stylesheet" href="css/style.css" />
<link type="text/css" rel="stylesheet" href="css/buttons.css" />
</head>
<body id="c">
<div id="hist">
<a href="history.php" rel="gb_page_center[640, 480]"><img border="0" src="hist.png"></a>
</div>
<div id="header">
 <a class="button" href="logout.php">Logout</a>
<a id="back" href="javascript:history.go(-1);" title="Go Back"><img src="goback.png" border="0"></a>
</div>

<div class="form">
<?php
/* include("config.php");
$Server='localhost';
$User='root';
$Pass='';
$DB='mcdh7'; */

$Server='localhost';
$User='hostel6';
$Pass='machauhostel6';
$DB='hostel6';

$con = mysql_connect($Server, $User, $Pass)
or die("Couldn't connect to SQL Server on $Server :".mysql_error()); 

$db=mysql_select_db($DB,$con)
or die("Couldn't connect to $DB at $Server"); 
$sql="SELECT * from burger WHERE id='$usid'";
$result=mysql_query($sql,$con);
$count=mysql_num_rows($result);
$rows=mysql_fetch_row($result);
//echo mysql_result($result,0,mysql_field_name($result,1))."</br>";
$a1=mysql_result($result,0,mysql_field_name($result,1))*25;
$a2=mysql_result($result,0,mysql_field_name($result,2))*40;
$a3=mysql_result($result,0,mysql_field_name($result,3))*60;
$a4=mysql_result($result,0,mysql_field_name($result,4))*100;
$a5=mysql_result($result,0,mysql_field_name($result,8))*100;
$a6=mysql_result($result,0,mysql_field_name($result,9))*85;
$a7=mysql_result($result,0,mysql_field_name($result,10))*75;
//$a8=mysql_result($result,0,mysql_field_name($result,11))*60;
$a9=$a1+$a2+$a3+$a4+$a5+$a6+$a7;

echo "Potato Krisper total: Rs.".$a1."<br/>";
echo "Chicken Snacker total: Rs.".$a2."<br/>";
echo "popcorn Chi. regular total: Rs.".$a3."<br/>";
echo "popcorn chi. large total: Rs.".$a4."<br/><br/>";
echo "hotwings(5 pcs)  total: Rs.".$a5."<br/><br/>";
echo "chicken rice bowl  total: Rs.".$a6."<br/><br/>"; 
echo " veg rice bowl total: Rs.".$a7."<br/><br/>";
//echo "French Fries  total: Rs.".$a8."<br/><br/>";
echo '<p class="pr">'."Your Total Amount is: Rs.".$a9.'</p>'."<br/>"; 
echo "Thanks for using H6 KFC facility.<br/>Your Order has been recorded and it will be delivered on this Thursday at 8.00 P.M in the Mess.</br>";
echo "Your Amount will be deduted by H6 Mess Account.<br/>";

}
?>
</div>
</body>