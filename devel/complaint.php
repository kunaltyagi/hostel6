<?php
	include 'header.php';
	menu('');
session_start();
 if(!isset($_SESSION['roll']))
{
	header("location:messcomp.php?val=1");
}
?>
<div align="center">
			<!-- content wrap -->
	        <div id="content-wrap">

	        	<!-- Page wrap -->
	        	<div id="page-wrap">

					<!-- Featured -->
<br><br><br>
					<div class="featured-posts">

						<embed src="http://www.tinyurl.com/h6mess-complaints" width="630px" height="720px">

					</div>
					<div class="clear"></div>
					<!-- ENDS Featured -->


<br><br>
	        	</div>
	        	<!-- ENDS Page wrap -->

	        </div>
            <!-- ENDS content wrap -->
</div>
		<?php include 'footer.php'?>
