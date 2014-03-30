 <html>
<head>
<link style="text/css" rel="stylesheet" href="css/style.css" />
<link type="text/css" rel="stylesheet" href="css/buttons.css" />
<style>
.table_result td{
	padding:10px;
	}
	
table, td, th
{
border:1px solid black;
text-align:center;
}
</style>
</head>
<body style=" background: #aedfe5 url(sky2.jpg) 0 0 repeat;">
<div id="header" align="center" >
<div id="trans" style="color:black">
<strong><?php echo "<br/> List of Total Amounts <br/><br/>" ?> </strong></div>
<table border="1" cellpadding="2px" style="border-width:2px; border-style:solid; width:500px">
	  
	<tr>
    <th >Roll no </th>
    <th >Total </th>
    </tr>
<?php
include("config.php");

//error_reporting(0);


for($i=0;$i<=440;$i++){
	$total=0;
	$uid=$i;
	$sql="SELECT id,total,roll FROM burger where id='$uid'";
	$order=mysql_query($sql,$con) or die(mysql_error());
	$rows=mysql_num_rows($order);
	if($rows==0){
		$total=0;
		}
	else{
	for($j=0;$j<=$rows-1;$j++){
		$total+=mysql_result($order,$j,mysql_field_name($order,1));
		}
	}
	?>
    
    
    <tr>
    <td ><?php
	$sql1="SELECT users from hostel6users WHERE id='$uid' ";
	$name=mysql_query($sql1,$con) or die(mysql_error());
	echo mysql_result($name,0,mysql_field_name($name,0));
	 ?></td>
    <td ><?php echo $total; ?></td>
    </tr>
    
    
    <?php
	}

?>

</table>
<br/><br/><br/>
</div></body></html>