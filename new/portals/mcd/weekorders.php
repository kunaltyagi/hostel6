 <html>
<head>
<link style="text/css" rel="stylesheet" href="css/style.css" />
<link type="text/css" rel="stylesheet" href="css/buttons.css" />
</head>
<body id="d">
<div id="header">
<a id="back" style="top:22px; right:147px;" href="index.php" title="Home"><img src="goback.png" border="0"></a>
<div id="hisp">
<div id="trans">
<strong><?php echo "Orders of this week till now." ?> </strong></div>
<?php
include("config.php");


$Server='localhost';
$User='hostel6';
$Pass='machauhostel6';
$DB='hostel6';  


		//$today = date("Y-m-d H:i:s"); //H:i:s
		
		//echo $today."</br>";
		//$timestamp = strtotime($today);
		//$day= date('D', $timestamp);
		//$day = date('w', $timestamp);
		//echo $day."</br>" ;
		/*if($day=="Wed"){
			$time= date("H:i:s");
			if ($time>="20:00:00" ){
				//echo "yes"; ?>
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
		*/
		//echo strtotime('Monday this week')."</br>";
		
		//$s_date=date('Y-m-d h:i:s', strtotime('last Sunday'));
		//$e_date=date('Y-m-d h:i:s', strtotime("+1 week", strtotime($s_date)));
				
	//	$start_date = new DateTime($s_date);
		//$start_date->setTime(20,0,0);
		//$end_date = new DateTime($e_date);
//$end_date->setTime(20,0,0);
		
	//$startdate =$start_date->format('Y-m-d H:i:s');
//$enddate= $end_date->format('Y-m-d H:i:s');
		
		//echo "Close date=".$end_date->format('Y-m-d h:i:s')."</br>";

$con = mysql_connect($Server, $User, $Pass)
or die("Couldn't connect to SQL Server on $Server :".mysql_error()); 

$db=mysql_select_db($DB,$con)
or die("Couldn't connect to $DB at $Server"); 
//$rows=mysql_fetch_row($result);
//$t= mysql_result($result,0,mysql_field_name($result,6));

//mysql_query("DELETE FROM infos WHERE ") or die("Couldn't connect to SQL Server on $Server :".mysql_error());
$sql1 = "SELECT * FROM burger";
//$sql1 = "SELECT * FROM infos WHERE dytm BETWEEN ".$start_date->format('Ymdhis')." AND ".$end_date->format('Ymdhis')." ORDER BY dytm desc";
$orders=mysql_query($sql1) or die("Couldn't connect to SQL Server on $Server :".mysql_error());
$count=mysql_num_rows($orders);
//$t= mysql_result($delete,0,mysql_field_name($delete,6));
//echo $t;
//echo $delete


for($i=0;$i<$count;$i++){
	$tMcVeggie += mysql_result($orders,$i,mysql_field_name($orders,1));
	$tMcAlootikki += mysql_result($orders,$i,mysql_field_name($orders,2));
	$tChickenMcgrill += mysql_result($orders,$i,mysql_field_name($orders,3));
	$tMcChicken += mysql_result($orders,$i,mysql_field_name($orders,4));
	$TotalAmount += mysql_result($orders,$i,mysql_field_name($orders,5));
	$tMcEgg += mysql_result($orders,$i,mysql_field_name($orders,8));
	$tMcPaneer += mysql_result($orders,$i,mysql_field_name($orders,9));
	$tMcChick += mysql_result($orders,$i,mysql_field_name($orders,10));
	//$tfries += mysql_result($orders,$i,mysql_field_name($orders,11));
	
	}



	?>	
    <table>
		<thead>  
	<tr>  
		<th scope="col" id="...">Total McVeggie &nbsp;&nbsp;</th>
		<th scope="col" id="...">Total McAloo tikki. &nbsp;&nbsp;</th>
		<th scope="col" id="...">Total Chicken Mc grill &nbsp;&nbsp;</th>  
		<th scope="col" id="...">Total McChicken &nbsp;&nbsp; </th>
        <th scope="col" id="...">Total McEgg &nbsp;&nbsp; </th>
        <th scope="col" id="...">Total Mc Spicy Paneer &nbsp;&nbsp; </th>
        <th scope="col" id="...">Total Mc Spicy Chicken &nbsp;&nbsp; </th>
        
		<th scope="col" id="...">Total Amount</th><br>
		</tr>  
</thead>  
	  
<tbody>   
   <tr>
   		<td><?php echo $tMcVeggie; ?></td>
		<td><?php echo $tMcAlootikki; ?></td>
		<td><?php echo $tChickenMcgrill; ?></td>
		<td><?php echo $tMcChicken; ?></td>
        <td><?php echo $tMcEgg; ?></td>
        <td><?php echo $tMcPaneer; ?></td>
        <td><?php echo $tMcChick; ?></td>          
		<td class="pr"><?php echo "Rs. ".$TotalAmount; ?></td>                
	</tr>  
   
</tbody> 
</table>  

</div>
</body>
</html>