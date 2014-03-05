<?php
session_start();
$uid=$_SESSION['uid'];
 if(!isset($_SESSION['roll']))
{
	//header("location:index.php?val=1"); ?>
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
<body id="d">
<div id="header">
<a class="button" href="logout.php">Logout</a></div>
<a id="back" style="top:22px; right:147px;" href="history.php" title="Go Back"><img src="goback.png" border="0"></a>
<div id="hisp">
<?php
include("config.php");
/*$Server='localhost';
$User='root';
$Pass='';
$DB='mcdh7';

$Server='localhost';
$User='hostel7';
$Pass='jay@h7';
$DB='hostel7'; */


		$today = date("Y-m-d H:i:s"); //H:i:s
		
		//echo $today."</br>";
		$timestamp = strtotime($today);
		$day= date('D', $timestamp);
		//$day = date('w', $timestamp);
		//echo $day."</br>" ;
		if($day=="Wed"){
			$time= date("H:i:s");
			if ($time>="23:00:00" ){
				//echo "yes"; ?>
				<meta http-equiv="refresh" content="0; url=closed.php"> 
		<?php
				}
			}
		
		if($day=="Sun"){
			$time= date("H:i:s");
			if ($time<"23:00:00" ){
				?>
				<meta http-equiv="refresh" content="0; url=closed.php"> 
		<?php
				}
		}
		
		//echo strtotime('Monday this week')."</br>";
		
		$s_date=date('Y-m-d h:i:s', strtotime('last Thursday'));
		$e_date=date('Y-m-d h:i:s', strtotime("+4 day", strtotime($s_date)));
				
		$start_date = new DateTime($s_date);
		$start_date->setTime(20,0,0);
		$end_date = new DateTime($e_date);
		$end_date->setTime(20,0,0);
		
		echo "<p class=\"pr\" style=\"font-family:Arial; font-size:15px;\">This week order Started on : Monday, ".$start_date->format('d.m.Y , h:i A')."</br> Close date : ".$end_date->format('d.m.Y , h:i A')."</br></p>";
		//echo "Close date=".$end_date->format('Y-m-d h:i:s')."</br>";

$con = mysql_connect($Server, $User, $Pass)
or die("Couldn't connect to SQL Server on $Server :".mysql_error()); 

$db=mysql_select_db($DB,$con)
or die("Couldn't connect to $DB at $Server"); 
$sql="SELECT * from burger WHERE id='$uid'";
$result=mysql_query($sql,$con);
$count=mysql_num_rows($result);
//$rows=mysql_fetch_row($result);
//$t= mysql_result($result,0,mysql_field_name($result,6));
$startdate =$start_date->format('Y-m-d H:i:s');
$enddate= $end_date->format('Y-m-d H:i:s');
//echo $startdate.$enddate."<br/>";

//mysql_query("DELETE FROM infos WHERE ") or die("Couldn't connect to SQL Server on $Server :".mysql_error());
$sql1 = "SELECT * FROM burger WHERE id='$uid'";
$delete=mysql_query($sql1) or die("Couldn't connect to SQL Server on $Server :".mysql_error());
//$t= mysql_result($delete,0,mysql_field_name($delete,6));
//echo $t;
//echo $delete;
if (mysql_num_rows($delete)) {
	if (isset($_POST['ans'])) {
		if($_POST['ans'] == 'yes') {
			$sql = "DELETE FROM burger WHERE id='$uid'";
			$delete=mysql_query($sql) or die("Couldn't connect to SQL Server on $Server :".mysql_error());
			if ($delete) echo "Last transaction cancelled successfully"; ?>
            <meta http-equiv="refresh" content="2, url=history.php"> 
            <?php
		}
		else { ?>
			<meta http-equiv="refresh" content="0; url=history.php">
            
            <?php }
	}
	else {
	?>	
    <table>
		<thead>  
	<tr>  
		<th scope="col" id="...">Ordered Date &nbsp;&nbsp;</th>
		<th scope="col" id="...">McVeggie &nbsp;&nbsp;</th>
		<th scope="col" id="...">McAloo tikki. &nbsp;&nbsp;</th>
		<th scope="col" id="...">Chicken Mc grill &nbsp;&nbsp;</th>  
		<th scope="col" id="...">McChicken &nbsp;&nbsp; </th>
        <th scope="col" id="...">McEgg &nbsp;&nbsp; </th>
        <th scope="col" id="...">McPaneer &nbsp;&nbsp; </th>
        <th scope="col" id="...">Mc Spicy Chicken &nbsp;&nbsp; </th>
		<th scope="col" id="...">Total Amount</th>
		</tr>  
</thead>  
	  
<tbody>   
   <tr>
		<td><?php echo mysql_result($delete,0,mysql_field_name($delete,6)); ?></td>
		<td><?php echo mysql_result($delete,0,mysql_field_name($delete,1)); ?></td>
		<td><?php echo mysql_result($delete,0,mysql_field_name($delete,2)); ?></td>
		<td><?php echo mysql_result($delete,0,mysql_field_name($delete,3)); ?></td>
		<td><?php echo mysql_result($delete,0,mysql_field_name($delete,4)); ?></td>
        <td><?php echo mysql_result($delete,0,mysql_field_name($delete,8)); ?></td>
        <td><?php echo mysql_result($delete,0,mysql_field_name($delete,9)); ?></td>
        <td><?php echo mysql_result($delete,0,mysql_field_name($delete,10)); ?></td>  
		<td class="pr"><?php echo "Rs. ".mysql_result($delete,0,mysql_field_name($delete,5)); ?></td>                
	</tr>  
   
</tbody> 
</table>  

<?php
		
		echo "</br>"."You are about to cancel above order. Are You sure? "."\n".'<form action="cancel_order.php" method="post"><label><input type="radio" name="ans" value="yes"/>Yes</label><label><input type="radio" name="ans" value="no"/>No</label></br></br>
		<input type="image" value="" src="c_order.png" border="0"/></form>';
	}
}
else {
	echo "You don't have any active order to cancel.";
}	
	}
?>
</div>
</body>
</html>