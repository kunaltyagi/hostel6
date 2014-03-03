<?php session_start();
 if(!isset($_SESSION['roll']))
{	?>
 <div class="login1">
 <?php 
				$val = $_GET['val'];
				
				if($val==1)
				{
					echo "<p class=\"pr\">Login to view the page<br />";
					 }
				else if($val==2)
				{
					echo "<p>Wrong Username, Password. Try again! <br />";
				}
				?></div>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="icon.png" type="image/png">
<link type="text/css" rel="stylesheet" href="css/style.css" />
<title>McDonalds H6</title>

</head>

<body id="a">
<div id="fb_like_index">
</div>
<div class="login">
        <p>Login Using your Ldap username and Password.<br/></p>

        <form name="form" action="macd_ldap.php" method="POST" >
        <table>
           <tr>
               <td> LDAP ID : </td>
               <td><input type="text" name="u" value="" id="emailID" /></td>
           </tr>
           
           <tr>
               <td>Password :</td>
               <td><input type="password" name="p" value=""  id="password" /></td>
           </tr>
            <tr>
                <td></td>
                <td><input type="image" value="Login" src="login.png" border="0"/></td>
            </tr>
        </table>
        </form>	

<?php }

	else 
	{
			header("location:macd_form.php");
}
?>
</html>