<?php
session_start();
/*if($_SERVER['REMOTE_ADDR']=='127.0.0.1' || $_SERVER['REMOTE_ADDR']=='10.5.10.2' || $_SERVER['REMOTE_ADDR']=='10.5.10.1' || $_SERVER['REMOTE_ADDR']=='10.5.10.8' || $_SERVER['REMOTE_ADDR']=='10.5.10.3'){
	echo null;
}
else{
	die("You are not allowed to open this page");
}*/
function ldapauth($userid,$userpass){
		$ldap_uid = mysql_escape_string($userid);
		$ldap_pass = mysql_escape_string($userpass);
		$ds = ldap_connect("ldap.iitb.ac.in") or die("Unable to connect to LDAP server. Please try again later.");
		$sr = ldap_search($ds,"dc=iitb,dc=ac,dc=in","(uid=$ldap_uid)");
		$info = ldap_get_entries($ds, $sr);
		if(isset($info[0])){
			$ldap_uid = $info[0]['dn'];
			$do_bind = @ldap_bind($ds,$ldap_uid,$ldap_pass);								
			$roll_number =	($info[0]['employeenumber'][0]);
			if($do_bind && trim($ldap_uid) != '' )
				return $roll_number;
			else
				return false;
		}else
			return false;
}

if(isset($_POST['username'])){
	include ('./db_connect.php');
	$user = mysql_real_escape_string($_POST['username']);
	$pass = mysql_real_escape_string($_POST['password']);
	$rollnumber = ldapauth($user,$pass);
	if($rollnumber){
		$result = mysql_query("SELECT * FROM voters WHERE userid = '".$user."'");
		if(!$row = mysql_fetch_array($result)){
			$_SESSION['username'] = $user;
			$_SESSION['rollnumber'] = $rollnumber;
			header("Location:index1.php");
		}
		else{
			$bool1 = true;
		}
	}
	else{
		$bool = true;
	}
}	 
?>
<html>
<body>
<?php 
	if(isset($bool)){
		echo "<p style='color:red'>Your ldap password or id is not correct</p>"; 
	}
	else if(isset($bool1)){
		echo "<p style='color:red'>you have already voted</p>"; 
	}
?>
<h1>Hostel 6 Election</h1>
<form action='' method="POST">
Ldap-id : <input name="username" type="text"><br>
Password :<input name="password" type="password"><br>
<input type="submit" value="Enter">
</form>
</body>
</html>
