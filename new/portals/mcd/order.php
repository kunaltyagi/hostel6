<?php
session_start();
$usid=$_SESSION['uid'];
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
<title>Fill Mcdonalds Form</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
<link type="text/css" rel="stylesheet" href="css/buttons.css" />
<script>
/*if (document.all) {
document.onkeydown = function () {
var key_f5 = 116; // 116 = F5
if (key_f5==event.keyCode) {
event.keyCode=0;
alert ("Sorry! You can not refresh this page!");
}
}
}*/
  </script>
<script type="text/javascript">  
 function showKeyCode(e)
{
//alert("Inside function showKeyCode(e)");
var keycode =(window.event) ? event.keyCode : e.keyCode;

if(keycode == 116)
{
event.keyCode = 0;
alert("Sorry! You can not refresh this page!");
event.returnValue = false;
return false;
}
}
</script>
</head>
<?php
if(!isset($_SESSION['roll']))
{
  header("location:index.php?val=1");
}
  else 
  {
?>

<body id="c">
<script type="text/javascript">  
 function showKeyCode(e)
{
//alert("Inside function showKeyCode(e)");
var keycode =(window.event) ? event.keyCode : e.keyCode;

if(keycode == 116)
{
event.keyCode = 0;
alert("Sorry! You can not refresh this page!");
event.returnValue = false;
return false;
}
}
</script>
<body  onKeyDown ="showKeyCode();">
<div id="hist">
<a href="history.php" rel="gb_page_center[640, 480]"><img border="0" src="hist.png"></a>
</div>
<div id="header">
 <a class="button" href="logout.php">Logout</a>
<a id="back" href="javascript:history.go(-1);" title="Go Back"><img src="goback.png" border="0"></a>

  
</div>
<div class="form">
<?php
include ("config.php");
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$f=$_POST['f'];
$g=$_POST['g'];
//$h=$_POST['h'];

//$e=$_POST['e'];

$a1=$a*68;
$a2=$b*26;
$a3=$c*42;
$a4=$d*84;
$a5=$e*26;
$a6=$f*119;
$a7=$g*121;
//$a8=$h*60;
$a9=$a1+$a2+$a3+$a4+$a5+$a6+$a7;

if($a9==0){
	die( "Please fill in the quantity you want to order.");
	return false;
	}
else{
	true;
	}
//echo $_SESSION['uid'];
/* $a1 = ltrim($a1, '-');
echo $a1;
$b1 = ltrim($b1, '-');
$c1 = ltrim($c1, '-');
$d1 = ltrim($d1, '-'); */

// $a1 = preg_replace("[^0-9]", "", $a1);

function are_int ( ) {
  $args = func_get_args ();
  foreach ( $args as $arg )
	  if ( ! is_int ( $arg ) )
		  return false;
  return true;
}

			  function p_int($b1,$b2,$b3,$b4,$b5){
			  for($i=1;$i<=5;$i++){
				   $t[i]= (int)${b.$i};
				  $c[i]= strcmp($t[i],${b.$i});
				  //echo "t[".$i."]=".$t[i]."</br>";
				  
				  //echo $c[i]."</br>";
				  
				 // echo ${b.$i}."<br/>";
				 if(${b.$i}<0 ){
					// if(!ereg('^[0-9]+$', ${b.$i})) {
						   die( "Form will not submit because you need to enter a positive number between <strong>0 and 999</strong><br/>");
					  return false;
					  }
				  if($c[i] == 0 ){
						  continue;
					  }
					  else {
						   die( "We're sorry. The quantity you have entered is not valid. Please go back & fill it carefully.");
					  return false;
						  }	
					  	  //return true;
							  }
				 }

$check=are_int($a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9);
$check1=p_int($a,$b,$c,$d,$e,$f,$g,$h,$a9);
//echo $check1."<br/>";

if($check1=="0"){
echo "We're sorry. The quantity you have entered is not valid. Please enter a quantity between 0 and 999.";
}
else{
	/*$Server='localhost';
	$User='root';
	$Pass='';
	$DB='mcdh7';
	
	$con3 = mysql_connect($Server, $User, $Pass)
	or die("Couldn't connect to SQL Server on $Server :".mysql_error()); 
	
	$db=mysql_select_db($DB,$con2)
	  or die("Couldn't connect to $DB at $Server");*/ 
	$uid= $_SESSION['uid'];
	$roll=$_SESSION['roll'];
	$name= $_SESSION['username'];
	// inserting into database
	$sql="INSERT INTO burger(id,McVeggie,McAloo,CMcG,McC,Total,roll,name,McEgg,McPaneer,SpicyChick) VALUES('$usid','$a','$b' ,'$c','$d','$a9','$roll','$name','$e','$f','$g')";
			$result=mysql_query($sql) or die(mysql_error());
			if($result==1)
		{
			function div(){
				
				}				
/*echo "McVeggie total: Rs.".$a1."<br/>";
echo "McAloo tikki total: Rs.".$a2."<br/>";
echo "Chicken Mc grill total: Rs.".$a3."<br/>";
echo "McChicken  total: Rs.".$a4."<br/><br/>"; 
echo '<p class="pr">'."Your Total Amount is: Rs.".$a5.'</p>'."<br/>"; 
echo "Thanks for using H7 McDonalds facility.<br/>Your Order has been recorded and it will be delivered on this thursday at 8.0 P.M in the Mess.</br>";
echo "Your Amount will be deduted by H7 Mess Account.<br/>";*/
?>
<meta http-equiv="refresh" content="0; url=view.php"> 
<?php
}
else {
	echo "Database connectivity problem, might be due to Down of Gymkhana server or else.";
	 }
}
  }
  }
?>
</div>

</body>
</html>