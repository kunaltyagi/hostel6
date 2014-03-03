<?php

include("config.php");
/* echo "jayprakash"; */
//error_reporting(E_ALL);
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
  if(mysql_num_rows($res) == 0) die("You don't belong to Hostel6.");
  $do_bind = @ldap_bind($ds,$ldap_uid,$password) or die("Wrong Username and/or Password. Please go back and try again.");
  //echo $roll;
  
   
if(!isset($_SESSION['roll'])){
  if(isset($_POST['u'])&&isset($_POST['p'])){
  $username=addslashes($_POST['u']);
  $password=addslashes($_POST['p']);
	  if($do_bind==1){
		  /* $Server='localhost';
			$User='root';
			$Pass='';
			$DB='mcdh7';*/ 
			
			
			$Server='localhost';
			$User='hostel6';
			$Pass='machauhostel6';
			$DB='hostel6'; 
			
			$con2 = mysql_connect($Server, $User, $Pass)
			or die("Couldn't connect to SQL Server on $Server :".mysql_error()); 
			
			$db=mysql_select_db($DB,$con2)
			  or die("Couldn't connect to $DB at $Server"); 
			//$sql="select uid from userinfo WHERE roll='$roll'";
			$sql="SELECT users from hostel6users WHERE users Like'%$roll%'";
			$result = mysql_query($sql) or die(mysql_error());
			$rows=mysql_fetch_row($result);
			$uid=$rows[2];
			
			//echo $rows."</br>";
			//echo $rows[2]."  jay</br>";
		 
			
		  //we can remove these session values once changes are make to all files
		  session_start();
		  $_SESSION['roll']=$roll;	
		  $_SESSION['username']=$username;
		  $_SESSION['uid']= $uid;
		  
		  setcookie('username',$username);
		  setcookie('roll',$roll);
		  
		 header("location:../../complaint.php");
		 ?>
         <meta http-equiv="refresh" content="0; url=../../complaint.php"> 
         <?php
	  }
	  else
	  {
	  header("location:../../messcomp.php?val=2");
	  }
  }
}
else
header("location:../../complaint.php"); 




  
  
echo "Logged in successfully ";
$count=1;
return $roll;
 
}
  
checklogin($user,$pass);
?>
<form action="" type="POST" class="mastform">
	<span>LDAP ID:</span><input type="text" name="username" />
	<span>PASSWORD</span><input type="password" name="password" />
	<button type="submit" name="submit" >Submit</button>

</form>