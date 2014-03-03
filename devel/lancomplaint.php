
			<!-- ENDS nav bar holder --><?php
	if(isset($bool)){
		echo "<p style='color:red'>Your ldap password or id is not correct</p>";
	}

?>
<?php
        include 'header.php';
        menu('home');
?>
<div margin-right:"auto" text-align:"center">
<h1 style="text-indent; text-align:center">LAN COMPLAINT PORTAL</h1>
<form action='portals/lancomplaints/index.php' method="POST" style="display:block; text-align:center">
Ldap-id : <input name="u" type="text" style="margin-left:11px"><br>
Password :<input name="p" type="password"><br><br>
<input type="submit" value="Enter" style="margin-left:100px;">
</form>
</div>

			<!-- content wrap -->
	        <div id="content-wrap">

	        	<!-- Page wrap -->
	        	<div id="page-wrap">


<div id="TextContent">

</div>

<br><br><br><br>
	        	</div>
	        	<!-- ENDS Page wrap -->

	        </div>
	        <!-- ENDS content wrap -->

		<!-- FOOTER -->
		<?php include 'footer.php'?>
