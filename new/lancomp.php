<?php
	include 'functions.php';
	makemenu ('','');
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
<br><br><br>
					<div class="featured-posts">
					
						<embed src="http://tinyurl.com/mlch33m" width="970px" height="670px">

					</div>		
					<div class="clear"></div>
					<!-- ENDS Featured -->

</div>
<!-- ENDS page-content -->
					
	        	
	        	</div>
	        	<!-- ENDS Page wrap -->
	        	
	        </div>
	        <!-- ENDS content wrap -->
	        
        </div>
		<!-- ENDS Wrapper -->
		<?php include 'footer.php'?>