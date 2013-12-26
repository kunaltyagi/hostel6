<?php
$login='<form action="shifting.php" method="post">
<table>

<tr><td>Programme</td><td><select name="program">
  <option value="Ph.D">Ph.D</option>
  <option value="M.Tech">M.Tech</option>
  <option value="M.Des">M.Des</option>
  <option value="M.Phil">M.Phil</option>
  <option value="M.Mgmt">M.Mgmt</option>
  <option value="2yr M.Sc">2yr M.Sc</option>
  <option value="Intg.M.*+Ph">Intg.M.*+Ph</option>
</select></td></tr>
<tr><td>Category</td><td><select name="categorie">
  <option value="N/A">N/A</option>
  <option value="TA">TA</option>
  <option value="RA">RA</option>
  <option value="CSIR/UGC">CSIR/UGC</option>
  <option value="SW">SW</option>
  <option value="CT">CT</option>
  <option value="SF">SF</option>
</select></td></tr>

<tr><td>DOB(yyyy/mm/dd)<br><div style="font-size:xx-small">please add 0 for single digit m or d</div></td><td><input name="DOB"></td></tr>

<tr><td>First Priority</td><td><select name="priority1">
  <option value="h12">H12</option>
  <option value="h13">H13</option>
  <option value="h14">H14</option>
</select></td></tr>
<tr><td>Second Priority</td><td><select name="priority2">
  <option value="h12">H12</option>
  <option value="h13">H13</option>
  <option value="h14">H14</option>
</select></td></tr>
<tr><td>Third Priority</td><td><select name="priority3">
  <option value="h12">H12</option>
  <option value="h13">H13</option>
  <option value="h14">H14</option>
</select></td></tr>

<tr><td>Ldap Name</td><td><input name="ldapName"></td></tr>
<tr><td>Password</td><td><input name="password" type="password"></td></tr>
<tr><td></td><td><input type="submit" value="submit"></td></tr>
<form>';
if(isset($_POST['ldapName'])){


$username=$_POST['ldapName'];
$password=$_POST['password'];

$ds = ldap_connect("ldap.iitb.ac.in") or die("Unable to connect to LDAP server. Please try again later.");

function name($username,$ds){
        $sr = ldap_search($ds,"dc=iitb,dc=ac,dc=in","(uid=$username)");
        $info = ldap_get_entries($ds, $sr);
        $ldap_uid = $info[0]['dn'];
$tem=array("1","2","3","4","5");
#print_r($info[0]);
        $tem[2]=$info[0][homedirectory][0];
            $tem[0]=  $info[0]['employeenumber'][0];
            $tem[1]=  $info[0]['cn'][0];
return $tem;
}

	function validate_user($username, $password)
{
	$ds = ldap_connect("ldap.iitb.ac.in") or die("Unable to connect to LDAP server. Please try again later.");
	
	$sr = ldap_search($ds,"dc=iitb,dc=ac,dc=in","(uid=$username)");
	$info = ldap_get_entries($ds, $sr);
			
	$ldap_uid = $info[0]['dn'];
	$roll = $info[0]['employeenumber'][0];
	$username = $info[0]["uid"][0];
	//$employeetype = $info[0]['employeetype'][0];

	
	$do_bind = @ldap_bind($ds,$ldap_uid,$password);
	if(!$do_bind) {
			$result['success'] = 'false';
			$result['status'] = "Wrong Ldap credentials.";
	}
	else {
			$result['username'] = $username;
			$result['success'] = 'success';
	}
	return $result;

}
$result=validate_user($username, $password);
if($result['success']=='false')die($result['status']);

$dob=$_POST['DOB'];
$program=$_POST['program'];
$categorie=$_POST['categorie'];
$priority1=$_POST['priority1'];
$priority2=$_POST['priority2'];
$priority3=$_POST['priority3'];
$con=mysql_connect('localhost','hostel6','hostel666');
if(!$con)
{
	die('Could not connect:'.mysql_error());
}
$details=name($username,$ds);

mysql_select_db('hostel6',$con);
$sql="select * from shift where roll='".$details[0]."'";
if(mysql_fetch_row(mysql_query($sql))){
mysql_query("delete from shift where roll='$details[0]'");
}
$sql="insert into shift values('$details[1]','$details[0]','$program','$categorie','$dob','$priority1','$priority2','$priority3')";

mysql_query($sql) or die(mysql_error());
mysql_close($con);
echo "success";
}
else{
	echo $login;
}
?>

