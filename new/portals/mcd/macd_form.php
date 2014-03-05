<?php session_start();
$page_title = '';
$currentFile = $_SERVER["SCRIPT_NAME"];
    $parts = Explode('/', $currentFile);
    $currentFile = $parts[count($parts) - 1];
    $page_title = substr($currentFile,0,strlen($currentFile)-4);
	include("config.php");
	
	//echo $_SESSION['uid'];
?>
<?php
 if(!isset($_SESSION['roll']))
{
	header("location:index.php?val=1");
}
	else 
	{
	$today = date("Y-m-d H:i:s"); //H:i:s
	
	//echo $today."</br>";
	$timestamp = strtotime($today);
	$day= date('D', $timestamp);
	$time= date("H:i:s");
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
else {
	
?>


<html>
<head>
<title>Fill Mcdonalds Form</title>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link type="text/css" rel="stylesheet" href="css/buttons.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/jquery-1.6.1.min.js" type="text/javascript"></script>
<!--script src="js/jquery.lint.js" type="text/javascript" charset="utf-8"></script-->
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
 <link rel="stylesheet" type="text/css" href="css/style4.css" />
 <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto();
  });
  
  //refresh blocking code
  
  if (document.all) {
document.onkeydown = function () {
var key_f5 = 116; // 116 = F5
if (key_f5==event.keyCode) {
event.keyCode=0;
alert ("Sorry! You can not refresh this page!");
}
}
}
</script>



  
<!--<script type="text/javascript">
function allowsubmit(t1){
var n1=t1.a.value;
if(isNaN(n1)){alert("Form will not submit because you need to enter a number");return false;}

var i=1;
for(i=1;i<=4;i++){
	n[i]=Number(n1);
	
if(n[i]<0){alert("Form will not submit because you need to enter a positive number");return false;}
}
return true
}
</script>-->
</head>
<body id="b">
<div id="lbox">
<!--<ul class="gallery clearfix" style="text-decoration:none;">
<li><a href="images/fullscreen/1.jpg" rel="prettyPhoto[gallery1]" title="McDonalds Menu"><img src="images/thumbnails/t_1.jpg" width="60" height="60" alt="This facility is only available to H7 Junta" /></a></li>
<li><a href="images/fullscreen/2.jpg" rel="prettyPhoto[gallery1]" title="Instructions"><img src="images/thumbnails/t_2.jpg" width="60" height="60" alt="Instructions for Ordering" /></a></li>
<li class="instruction" style="text-align:center;"></br>Read Instructions</li>
</ul>-->
</div>

<div id="hist">
<div id="fb_like">
<iframe src="" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe></div>
<a href="history.php" rel="gb_page_center[640, 480]"><img border="0" src="hist.png"></a>
</div>
<div id="header">
<?php  	// $_SESSION['email'] = 0;
		    if(!isset($_SESSION['roll']))
			{
			?>
    <a class="button" href="index.php">Login</a>

    <?php }
			else
			{ 
			?>
    <a class="button" href="logout.php">Logout</a>
    <?php
		   }
	 }
	 
	   ?>
           
</div>
<div id="box">
<div id="welcome"><?php
$user= $_SESSION['username'];
//$roll= $_SESSION['roll'];
echo $user."<br/>".$roll;	
?>

</div>
</div>


 




<div class="form">

<h3>Fill in the Quantity below to post your order.</h3>
<!--<ol>
   <li>McVeggie &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Rs. 55</li>
   <li>McAloo tikki &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      Rs. 25</li>
   <li>Chicken Mc grill &nbsp;&nbsp;&nbsp;  Rs.30</li>
   <li>McChicken   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    Rs. 75</li>
   <li>McEgg &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs. 25</li>
   <li>Mc Spicy Paneer &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs. 99</li>
   <li> French Fries Large &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs. 60</li>
   <li>Mc Spicy Chicken &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs. 99</li>   
   </ol>-->

<form method="post" action="order.php">

<table id="t1">
<!-- <tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<td>Select:</td>
<td>
<select>
  <option>--Select One--</option>
 
 <option>1. McVeggie</option>
  <option>2. McAloo tikki</option>
  <option>3. chicken Mc grill</option>
  <option>4. McChicken</option>
</select></td>
</tr>-->
 <tr bgcolor="#d7ebff" colspan="2" id="td">
 <td>Items:</td>
 <td>Price: </td>
 <td>Qty:</td>
 </tr>
 <tr>
	 <td>McVeggie </td>
     <td class="pr">Rs. 68</td>
	 <td><input type="text" class="target" maxlength="3" name="a" style="width: 35px; padding: 2px"
         $(".target").blur(function(event) {
        event.target.value = event.target.value.replace(/[^0-9]/g, "");
        });
        onblur="if(this.value=='')this.value='0';" onFocus="if(this.value=='0')this.value='';" value="0"
     /></input></td>
 </tr> 
 
  <tr>
  <td>McAloo tikki </td>
  <td class="pr">Rs. 26</td>
	<td><input type="text" maxlength="3" name="b" style="width: 35px; padding: 2px" onBlur="if(this.value=='')this.value='0';" onFocus="if(this.value=='0')this.value='';" value="0"/></input></td>
  </tr>   
  <tr>
	 <td>Chicken Mc grill </td>
     <td class="pr">Rs. 42</td>
	 <td><input type="text" maxlength="3" name="c" style="width: 35px; padding: 2px" onBlur="if(this.value=='')this.value='0';" onFocus="if(this.value=='0')this.value='';" value="0"/></input></td>
  </tr>
   <tr>
       <td>McChicken </td>
       <td class="pr">Rs. 84</td>
        <td><input type="text" maxlength="3" name="d" style="width: 35px; padding: 2px" onBlur="if(this.value=='')this.value='0';" onFocus="if(this.value=='0')this.value='';" value="0"/></input></td>
   </tr>
   
   <tr>
       <td>Mc Egg </td>
       <td class="pr">Rs. 26</td>
        <td><input type="text" maxlength="3" name="e" style="width: 35px; padding: 2px" onBlur="if(this.value=='')this.value='0';" onFocus="if(this.value=='0')this.value='';" value="0"/></input></td>
   </tr>
   
   <tr>
       <td>Mc Spicy Paneer </td>
       <td class="pr">Rs. 119</td>
        <td><input type="text" maxlength="3" name="f" style="width: 35px; padding: 2px" onBlur="if(this.value=='')this.value='0';" onFocus="if(this.value=='0')this.value='';" value="0"/></input></td>
   </tr>
   
  <!-- <tr>
       <td> French Fries Large</td>
       <td class="pr">Rs. 60</td>
        <td><input type="text" maxlength="3" name="h" style="width: 35px; padding: 2px" onBlur="if(this.value=='')this.value='0';" onFocus="if(this.value=='0')this.value='';" value="0"/></input></td>
   </tr>-->
   
   <td>Mc Spicy Chicken </td>
       <td class="pr">Rs. 121</td>
        <td><input type="text" maxlength="3" name="g" style="width: 35px; padding: 2px" onBlur="if(this.value=='')this.value='0';" onFocus="if(this.value=='0')this.value='';" value="0"/></input></td>
   </tr>
     <!--<tr>
         <td>Which time are you ordering</td>
         <td>.......</td>
         <td> <input type="text" name="e" maxlength="3" id="" style="width: 85px; padding: 2px; color:#CCC;" onblur="if(this.value=='')this.value='1 for 1st and so on';" 						onfocus="if(this.value=='1 for 1st and so on')this.value='';" value="1 for 1st and so on"></br>1 for 1st and 2 for 2nd</td></tr>
        <td> <input type="text" name="e" maxlength="3" id="" style="width: 35px; padding: 2px;"></br>like 10 for 10th time</td>
    </tr>-->
     <tr>  
 <td></td>
 <td></td>
 <td ><input type="image" value="order" src="order.png" border="0"></td></tr>


</table>
</form>
<h4 style="color:#ff0000">* Prices without taxes</h4>
</div>
 <?php
	}
 ?>    
           
</body>
</html>