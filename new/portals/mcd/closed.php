<?php session_start();
$page_title = '';
$currentFile = $_SERVER["SCRIPT_NAME"];
    $parts = Explode('/', $currentFile);
    $currentFile = $parts[count($parts) - 1];
    $page_title = substr($currentFile,0,strlen($currentFile)-4);
	
	//echo $_SESSION['uid'];
?>
<?php
 if(!isset($_SESSION['roll']))
{
	header("location:index.php?val=1");
}
	else 
	{
		
include("config.php");	
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

<div id="hist">
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
<a id="back" href="index.php" title="Go Back"><img src="goback.png" border="0"></a>           
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

<p>Sorry, You won't be able to place or cancel any order between Tuesday, 11 AM  to Tuesday 8 pm . New orders will be taken only after the previous week orders  are delivered.
As of now the server got closed and will start on Tuesday,8 pm</br></br>
<strong class="pr">We appreciate your enthusiasm, but please visit after Tuesday, 8 pm.</strong>
</p>

</div>
           
           
</body>
</html>