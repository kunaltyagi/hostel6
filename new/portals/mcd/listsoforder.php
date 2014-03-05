 <html>
<head>
<link style="text/css" rel="stylesheet" href="css/style.css" />
<link type="text/css" rel="stylesheet" href="css/buttons.css" />
<style>

table, td, th
{
border:1px solid black;
text-align:center;
}
</style>
</head>
<body style="background-color:#FFC">
<div id="header" align="center" >
<div id="trans" style="color:black">
<strong><?php echo "This week orders list"."<br/>" ?> </strong></div>
<?php
include("config.php");
 /*$Server='localhost';
$User='root';
$Pass='';
$DB='mcdh7'; */

/*
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
		}*/
		
		//echo strtotime('Monday this week')."</br>";
		
		$s_date=date('Y-m-d H:i:s', strtotime('last Wednesday-1 week'));
		$e_date=date('Y-m-d H:i:s', strtotime("+1 week", strtotime($s_date)));
				
		$start_date = new DateTime($s_date);
		$start_date->setTime(20,00,00);
		$end_date = new DateTime($e_date);
		$end_date->setTime(20,00,00);
		
		$startdate =$start_date->format('Y-m-d H:i:s');
		$enddate= $end_date->format('Y-m-d H:i:s');
		echo "Start Date= ".$startdate."<br/>";
				echo "End Date= ".$enddate;
		
		
		//echo "Close date=".$end_date->format('Y-m-d h:i:s')."</br>";
		
		?>
         <table border="1" cellpadding="2px" style="border-width:2px; border-style:solid; width:800px">
		  
	<tr>
    	<th scope="col" id="...">Sr. No.</th>
        <th scope="col" id="..."> Name </th>   
    	<th scope="col" id="...">Roll No.</th> 
		<th scope="col" id="...">McVeggie &nbsp;&nbsp;</th>
		<th scope="col" id="...">McAloo tikki. &nbsp;&nbsp;</th>
		<th scope="col" id="...">Chicken Mc grill &nbsp;&nbsp;</th>  
		<th scope="col" id="...">McChicken &nbsp;&nbsp; </th>
        <th scope="col" id="...">McEgg &nbsp;&nbsp; </th>
        <th scope="col" id="...">McPaneer &nbsp;&nbsp; </th>
        <th scope="col" id="...">Mc Spicy Chicken &nbsp;&nbsp; </th>
 
		<th scope="col" id="...">&nbsp;&nbsp;&nbsp;&nbsp; Signature &nbsp;&nbsp; </th>
		</tr>  
        
<?php
$con = mysql_connect($Server, $User, $Pass)
or die("Couldn't connect to SQL Server on $Server :".mysql_error()); 

$db=mysql_select_db($DB,$con)
or die("Couldn't connect to $DB at $Server"); 
//$rows=mysql_fetch_row($result);
//$t= mysql_result($result,0,mysql_field_name($result,6));

//mysql_query("DELETE FROM infos WHERE ") or die("Couldn't connect to SQL Server on $Server :".mysql_error());
//$sql1 = "SELECT * FROM infos WHERE dytm BETWEEN ".$start_date->format('Ymdhis')." AND ".$end_date->format('Ymdhis')." ORDER BY dytm desc";
//$sql1 = "SELECT * FROM burger WHERE dytm BETWEEN \"".$startdate."\"AND \"".$enddate."\" ORDER BY roll desc";
$sql1 = "SELECT * FROM burger";
//echo $sql1;
$orders=mysql_query($sql1) or die("Couldn't connect to SQL Server on $Server :".mysql_error());
$count=mysql_num_rows($orders);
//$t= mysql_result($delete,0,mysql_field_name($delete,6));
//echo $t;
//echo $delete

for($i=0;$i<$count;$i++){
	$McVeggie = mysql_result($orders,$i,mysql_field_name($orders,1));
	$McAlootikki = mysql_result($orders,$i,mysql_field_name($orders,2));
	$ChickenMcgrill = mysql_result($orders,$i,mysql_field_name($orders,3));
	$McChicken = mysql_result($orders,$i,mysql_field_name($orders,4));
	$McEgg = mysql_result($orders,$i,mysql_field_name($orders,8));
	$McPaneer = mysql_result($orders,$i,mysql_field_name($orders,9));
	$Spicy = mysql_result($orders,$i,mysql_field_name($orders,10));
	$roll= mysql_result($orders,$i,mysql_field_name($orders,6));
	$name= mysql_result($orders,$i,mysql_field_name($orders,7));
	//$fries= mysql_result($orders,$i,mysql_field_name($orders,11));
?>	
     
  <tr>
  		<td><?php echo $i+1; ?></td>
        <td><?php echo $name; ?></td>
   		<td><?php echo $roll; ?></td>
   		<td><?php echo $McVeggie; ?></td>
		<td><?php echo $McAlootikki; ?></td>
		<td><?php echo $ChickenMcgrill; ?></td>
		<td><?php echo $McChicken; ?></td>
        <td><?php echo $McEgg; ?></td> 
        <td><?php echo $McPaneer; ?></td>
        <td><?php echo $Spicy; ?></td> 
		<td> </td>                
	</tr>  
   

<?php }
?>
</table>  
</div>
</body>
</html>