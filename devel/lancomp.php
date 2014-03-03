<?php
	include 'header.php';
	menu ('','');
session_start();
 if(!isset($_SESSION['roll']))
{
	header("location:lancomplaint.php?val=1");
}
?>

			<!-- content wrap -->
	        <div id="content-wrap">

	        	<!-- Page wrap -->
	        	<div id="page-wrap">

					<!-- Featured -->
<br><br>
					<div class="featured-posts" align="center">

						<embed src="http://tinyurl.com/mlch33m" width="970px" height="680px">

					</div>
					<div class="clear"></div>
					<!-- ENDS Featured -->

	        	</div>
	        	<!-- ENDS Page wrap -->

	        </div>
	        <!-- ENDS content wrap -->
<br><br><br><br>
		<?php include 'footer.php'?>
