<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="default.css" media="screen"/>

<style type="text/css">
<!--
h1#blinking {text-decoration: blink;}
-->
</style> 

<title>feedback_sparta.php</title>
</head>

<body>

<div id="container">

<div id="content">

	<h1 id="site-title" ><a href="index.html">Radio Sparta</a></h1>
	<p id="site-description">The entertaining one!</p>

	<h1 class="decay">Feedback</h1>
	<div class="descr">Send in your comments.</div>

	
	<p>






<table align="center" width="620">
<tr><td>
<div>
<p>

<?php

$myFile = "testFile.txt";
$lines = file($myFile);


$fh = fopen($myFile, 'w') or die("can't open file");
$stringData =$_REQUEST["comments"];
$date=date("F j, Y, g:i a")."\n";
fwrite($fh,$date);
fwrite($fh, $stringData);
$stringData = "\n------------------------------------------------------------------------------------\n";
fwrite($fh, $stringData);
fwrite($fh, "\n");
fclose($fh);

$handle=fopen($myFile, 'a') or die("can't open file");

foreach ($lines as $line) { fwrite( $handle, "$line"); }
fclose($handle);

echo '<br> Thanks for your feedback!';
echo "<br>";
echo 'Your feedback has been quoted here <color="red"><a href="testFile.txt"><strong>feedback.</strong></a></color>';
echo "<br>";
?>

</p>
</div>
</td>
</tr>
</table>






</p>

	
	
  </div>

<div id="navigation">

	
	<ul>
		<li>
		  <h1 id="blinking"><a href="http://10.6.3.97:8000/listen.pls"><font size="5">Listen Now!</font></a></h1>
		</li>
                <li><a href="index.html">Home</a></li>
                             
		<li><a href="shows.html">Shows</a></li>
      		<li><a href="feedback_sparta.html">Feedback</a></li>
		<li><a href="help_me.html">Can't Play???</a></li>
		<li><a href="publicity.html">Want Publicity?</a></li>
	</ul>

	<h2 class="decay-small">Links</h2>
	<ul>
		<li><a href="friends_sparta.html">Friends of Radio SPARTA</a></li>
	</ul>








</div>



</div>

<h2>&nbsp;</h2>
<h2>&nbsp;</h2>
<h2>&nbsp;</h2>
<table width="1089" border="0">
  <tr>
  <td height="134"> aaa</td>
  </tr>
  
  <tr>
    <td width="903">&nbsp;</td>
    <td width="176"><iframe title="bamdev_mishra" src="http://www5.shoutmix.com/?bamdev_mishra" width="176" height="600" frameborder="0" scrolling="Auto"> <a href="http://www5.shoutmix.com/?bamdev_mishra">View shoutbox</a> </iframe>
<br />
&nbsp;</td>
  </tr>
</table>
<h2 >

</body>

</html>
