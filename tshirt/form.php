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
	
else {
	
?>


<html>
<head>
<title>Online Hostel Tshirt order</title>
<iframe src="https://docs.google.com/forms/d/1LfpeWFh6f9erxOQgR08OdoV1BEwwNgSEYxgWT2HlJkA/viewform?embedded=true" width="760" height="600" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
<img src="tshirt.jpg" alt="Hostel6 Tshirt" style="height:450px; float:right;"/>
 <?php
	}
 ?>    
           
</body>
</html>