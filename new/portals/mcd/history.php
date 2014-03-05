<?php session_start();
//include ("config.php"); 
$uid=$_SESSION['uid']; ?>

<?php
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
<a id="back" href="index.php" title="Go Back"><img src="goback.png" border="0"></a>
<div id="hist">
<a href="cancel_order.php" rel="gb_page_center[640, 480]"><img border="0" src="cancel.png"></a>
</div>
<div id="hisp">
<div id="trans">
<strong><?php echo "'".$_SESSION['username']."'"; ?> Transactions</strong></div>
<table>  



<?php 
/*$Server='localhost';
$User='root';
$Pass='';
$DB='mcdh7'; */


$Server='localhost';
$User='hostel6';
$Pass='machauhostel6';
$DB='hostel6'; 


		$today = date("Y-m-d H:i:s"); //H:i:s
		
		//echo $today."</br>";
		$timestamp = strtotime($today);
		$day= date('D', $timestamp);
		//$day = date('w', $timestamp);
		//echo $day."</br>" ;
		
		
		//echo strtotime('Monday this week')."</br>";
		
		$s_date=date('Y-m-d h:i:s', strtotime('last Monday'));
		$e_date=date('Y-m-d h:i:s', strtotime("+3 day", strtotime($s_date)));
				
		$start_date = new DateTime($s_date);
		$start_date->setTime(23,0,0);
		$end_date = new DateTime($e_date);
		$end_date->setTime(23,0,0);
		
	$startdate =$start_date->format('d.m.Y , h:i A');
$enddate= $end_date->format('d.m.Y , h:i A');
		
		echo "<p class=\"pr\" style=\"font-family:Arial; font-size:15px;\">This week order Started on : Monday, ".$startdate."</br> Close date : ".$enddate."</br></p>";

$con = mysql_connect($Server, $User, $Pass)
or die("Couldn't connect to SQL Server on $Server :".mysql_error()); 

$db=mysql_select_db($DB,$con)
or die("Couldn't connect to $DB at $Server"); 
$sql="SELECT * from burger WHERE id='$uid'";
$result=mysql_query($sql,$con);
$count=mysql_num_rows($result);
$rows=mysql_fetch_row($result);
//echo mysql_result($result,1,mysql_field_name($result,1))."</br>";
//echo mysql_result($result,$i,mysql_field_name($result,3));
		
		/////////////////////////////////////////////////////////////////////////////////////////////////////////
		
		/*$today = date("Y-m-d H:i:s"); //H:i:s
		
		echo $today."</br>";
		$timestamp = strtotime($today);
		$day= date('D', $timestamp);
		//$day = date('w', $timestamp);
		echo $day."</br>" ;
		if($day=="Wed"){
			$time= date("H:i:s");
			if ($time>="20:00:00" ){
				echo "yes"; ?>
				<meta http-equiv="refresh" content="0; url=closed.php"> 
		<?php
				}
			}
		
		if($day=="Thu"){
			$time= date("H:i:s");
			if ($time<"20:00:00" ){
				?>
				<meta http-equiv="refresh" content="0; url=closed.php"> 
		<?php
				}
		}
		
		echo strtotime('Monday this week')."</br>";
		
		$s_date=date('Y-m-d h:i:s', strtotime('Wednesday last week'));
		$e_date=date('Y-m-d h:i:s', strtotime("+1 week", strtotime($s_date)));
				
		$start_date = new DateTime($s_date);
		$start_date->setTime(20,0,0);
		$end_date = new DateTime($e_date);
		$end_date->setTime(20,0,0);
		
		
		echo "Start date=".$start_date->format('Y-m-d h:i:s')."</br>";
		echo "Close date=".$end_date->format('Y-m-d h:i:s')."</br>";*/
		
		
		
		
		/*
		$td = new DateTime($s_date);
		$td->setTime(20,0,0);
		echo "dateTime ".$td->format('Y-m-d h:i:s').'\n';
		
		$end_date = new DateTime($s_date);
		$e_date->add(new DateInterval('P07D'));
		echo "end date ".$e_date->format('Y-m-d h:i:s').'\n';
		
*/
if ($count==0){
echo "You have no entries till now."; }
else
{ ?>
 <thead>  
	<tr>  
		<th >S.No </th>  
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
 
   <?php 
   $i=0;
   for($i=0;$i< $count;$i++){ 
    $total +=mysql_result($result,$i,mysql_field_name($result,6)); ?>
	   
	  <tr>
		<td><?php echo $i+1; ?></td>               
		<td><?php echo mysql_result($result,$i,mysql_field_name($result,11)); ?></td>
		<td><?php echo mysql_result($result,$i,mysql_field_name($result,1)); ?></td>
		<td><?php echo mysql_result($result,$i,mysql_field_name($result,2)); ?></td>
		<td><?php echo mysql_result($result,$i,mysql_field_name($result,3)); ?></td>
		<td><?php echo mysql_result($result,$i,mysql_field_name($result,4)); ?></td>  
		<td><?php echo mysql_result($result,$i,mysql_field_name($result,8)); ?></td>
        <td><?php echo mysql_result($result,$i,mysql_field_name($result,9)); ?></td> 
        <td><?php echo mysql_result($result,$i,mysql_field_name($result,10)); ?></td>
       
        <td><?php echo mysql_result($result,$i,mysql_field_name($result,5)); ?></td>                 
	</tr>  
	   
<?php	   }
   
    
?>
   
</tbody> 

<tfoot>  
	<tr>
    	<td></td>       
        <td></td>
        <td></td>
        <td></td>
        <td></td>
		<!--<td>Total Amount:</td>-->
        <td><?php /*echo "Rs.".$total;*/ ?></td>  
	</tr> 
    <tr>
    	<td></td>       
        <td></td>
        <td></td>
        <td></td>
        <td></td>
		<td></td>
    </tr> 
    <tr>
    	<td></td>       
        <td></td>
        <td></td>
        <td></td>
        <td></td>
		<td></td>
        <td><a href="index.php" title="Back to Home"><img src="home.png" border="0"></a></td>  
	</tr>
</tfoot> 
</table>  

<?php } 
	}
?>

</div>


</body>
</html>