<?php session_start(); ?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
<title>McDonalds H6</title>
</head>
<body id="a">
<div class="login">
<?php

include("config.php");

$user=$_POST['u'];
$pass=$_POST['p'];



function checklogin($username,$password)
{
  //if($_SERVER[REMOTE_ADDR]!='127.0.0.1') die("You are not allowed to use this //page.");//change here
  
  $ds = ldap_connect("ldap.iitb.ac.in") or die("Unable to connect to LDAP server. Please try again later.");
  if($username=='') die("You have not entered any LDAP ID. Please go back and fill it up.");

  $sr = ldap_search($ds,"dc=iitb,dc=ac,dc=in","(uid=$username)") or die("ldap search error");
  $info = ldap_get_entries($ds, $sr) or die("First of all,get Entries in LDAP list");
  $ldap_uid = $info[0]['dn'];
  $roll = $info[0]['employeenumber'][0];
  $query = "select * from hostel6users where users like '%$roll%'";
  $res = mysql_query($query) or die(mysql_error());
  if(mysql_num_rows($res) == 0) die("You don't belong to Hostel6. Go away and ask your hostel for the same.");
  $do_bind = @ldap_bind($ds,$ldap_uid,$password) or die("Wrong Username and/or Password. Please go back and try again.");
  //echo $roll;
  
   
if(!isset($_SESSION['roll'])){
  if(isset($_POST['u'])&&isset($_POST['p'])){
  $username=addslashes($_POST['u']);
  $password=addslashes($_POST['p']);
	  if($do_bind==1){
		//if you see this then thank you and sorry that i took your code for the portal; it saved my lot of time :P
			
			
			$Server='localhost';
			$User='hostel6';
			$Pass='machauhostel6';
			$DB='hostel6'; 
			
			$con2 = mysql_connect($Server, $User, $Pass)
			or die("Couldn't connect to SQL Server on $Server :".mysql_error()); 
			
			$db=mysql_select_db($DB,$con2)
			  or die("Couldn't connect to $DB at $Server"); 
			//$sql="select uid from userinfo WHERE roll='$roll'";
			$sql="SELECT * from hostel6users WHERE users Like'%$roll%'";
			$result = mysql_query($sql) or die(mysql_error());
			$rows=mysql_fetch_row($result);
			$uid=$rows[0];
			
			
			
		  //we can remove these session values once changes are make to all files
		  session_start();
		  $_SESSION['roll']=$roll;	
		  $_SESSION['username']=$username;
		  $_SESSION['uid']= $uid;
		  
		  setcookie('username',$username);
		  setcookie('roll',$roll);
		  
		 header("location:macd_form.php");
		 ?>
         <meta http-equiv="refresh" content="0; url=macd_form.php"> 
         <?php
	  }
	  else
	  {
	  header("location:index.php?val=2");
	  }
  }
}
else
header("location:macd_form.php"); 




  
  
echo "Logged in successfully ";
$count=1;
return $roll;
 
}
  
checklogin($user,$pass);
?>



</div>
</body>
</html>