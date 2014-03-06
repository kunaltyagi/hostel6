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

<title>Hostel 6 Tshirt online order </title>

</head>

<body id="a">

<div class="login">
        <p>Login Using your Ldap username and Password.<br/></p>

        <form name="form" action="index1.php" method="POST" >
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
</div>
</body>
<?php }

	else 
	{
			header("location:form.php");
}
?>
</html>