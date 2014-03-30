
<?php
	$ldap_uid = 'sravanb';
	$ldap_pass = "neverignore!";
	$ds = ldap_connect("ldap.iitb.ac.in") or die("Unable to connect 
to LDAP server. Please try again later.");
	if($ldap_uid=='') die("You have not entered any LDAP ID. Please 
go back and fill it up.");
	$sr = ldap_search($ds,"dc=iitb,dc=ac,dc=in","(uid=$ldap_uid)");
	$info = ldap_get_entries($ds, $sr);
	$ldap_uid = $info[0]['dn'];
	$do_bind = @ldap_bind($ds,$ldap_uid,$ldap_pass) or die("Wrong 
Username and/or Password. Please go back and try again.");
	print "correct password";
	?>
