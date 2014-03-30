<?php
	include 'functions.php';
	makemenu ('home','');	

?>


			<!-- content wrap -->	    	
	        <div id="content-wrap">
	        	
	        	<!-- Page wrap -->
	        	<div id="page-wrap">
	        	
	        		
	        		<!-- Front slider -->
	        		<div id="front-slides">
						<div class="slides_container">
							<div class="slide">
								<a href="#" target="blank"><img src="img/dummies/01.jpg"  alt="pic" width="940" height="360"  /></a>
								<div class="caption"></div>
							</div>
							<div class="slide">
								<a href="#" target="blank"><img src="img/dummies/02.jpg" alt="pic" width="940" height="360"  /></a>
								<div class="caption"></div>
							</div>
							<div class="slide">
								<img src="img/dummies/03.jpg" alt="pic" width="940" height="360"  />
								<div class="caption"></div>
							</div>
						</div>
						
						<div id="front-slides-cover"></div>
							
						<!-- Headline -->
						<div id="headline"><h6></h6></div>
						<!-- ENDS Headline -->	
					
					</div>
					<!-- ENDS Front slider -->					
					
					
					<!-- Featured -->
					<div class="featured-title">
						<div class="ribbon"><span>About Us</span></div>
					</div>
					Welcome to the most happening hostel in IIT Bombay. This site will provide you all the information you'll need about Hostel 6.
					Located on the other end of IIT Bombay surrounded by a green forest, Hostel 6 is known for its excellence in Cultural and Sports activities with increasing participation in Technical events.
					
					<div class="clear"></div>
					<!-- ENDS Featured -->

					<!-- Reel slider -->
	        		<div id="reel">
						<div class="slides_container">
							
							<div class="slide-box">
									<div class="box-container">
									<img src="img/mono-icons/spanner32.png" class="box-icon" alt="pic"/>
									<h6>Recent Events: Tech</h6>
									
									<div class="box-divider"></div><p style="text-align:center">5th position in RC plane GC</p></div>
								<div class="box-container">
									<img src="img/mono-icons/cardgame32.png" class="box-icon" alt="pic"/>
									<h6>Recent Events: Sports</h6>
									
									<div class="box-divider"></div><p style="text-align:center"> Going on in the hostel the one of its kind<br> <strong>VFL</strong><br>a.k.a.<br> Vikings Footer League</p></div>
								<div class="box-container">
									<img src="img/mono-icons/camera32.png" class="box-icon" alt="pic"/>
									<h6>Recent Events: Cultural</h6>
									
									<div class="box-divider">
									</div><p style="text-align:center">H6 cracks 2<sup>nd</sup> Position in MD GC and "Best Script Award" </p></div>
							</div>
										
							
							<?php require 'MessMenu/mess.php'; ?>
							
							
						</div>
						<a href="#" class="prev"></a>
						<a href="#" class="next"></a>
					</div>
					<!-- ENDS Reel slider -->

</div>
<!-- ENDS page-content -->
					
	        	
	        	</div>
	        	<!-- ENDS Page wrap -->
	        	
	        </div>
	        <!-- ENDS content wrap -->
	        
        </div>
		<!-- ENDS Wrapper -->
		
	
		<!-- ENDS footer-bottom -->


		<div id="updates"><span style="float:right; display:block">Updates</span><?php include 'updates/index.php'?></div>
	</body>
</html>

<?php include 'footer.php'?>
