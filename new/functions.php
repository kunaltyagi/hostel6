<?php
function makemenu ($active,$page){
		echo '
			<!DOCTYPE  html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Hostel 6 IIT Bombay</title>
		
		<!-- CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/tabs.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/social-icons.css" type="text/css" media="screen" />
		<link rel="stlyesheet" href="css.council.css" type="text/css">
		<!-- ENDS CSS -->	
		
		<!--[if IE]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!-- ENDS JS -->
		
		<!-- JS -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
		<script type="text/javascript" src="js/slider.js"></script>
		<script type="text/javascript" src="js/tabs_diff.js"></script>
		<script src="js/slides/source/slides.min.jquery.js"></script>
		<script src="js/quicksand.js"></script>
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="css/superfish.css" /> 
		<script type="text/javascript" src="js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script type="text/javascript" src="js/superfish-1.4.8/js/superfish.js"></script>
		<script type="text/javascript" src="js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->

		<!-- poshytip -->
		<link rel="stylesheet" href="js/poshytip-1.0/src/tip-twitter/tip-twitter.css" type="text/css" />
		<link rel="stylesheet" href="js/poshytip-1.0/src/tip-yellowsimple/tip-yellowsimple.css" type="text/css" />
		<script type="text/javascript" src="js/poshytip-1.0/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
		<!-- Tweet -->
		<link rel="stylesheet" href="css/jquery.tweet.css" media="all"  type="text/css"/> 
		<script src="js/tweet/jquery.tweet.js" type="text/javascript"></script> 
		<!-- ENDS Tweet -->
		
		<!-- prettyPhoto -->
		<script type="text/javascript" src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />
		<!-- ENDS prettyPhoto -->
		
		<!-- GOOGLE FONTS -->
		<link href="http://fonts.googleapis.com/css?family=Droid+Serif:400italic" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/council.css" />
		<script type="text/javascript" src="js/tabs.js"></script>

	</head>
	<body>
	
		
		<div id="headerimgs">
			<div id="headerimg1" class="headerimg"></div>
			<div id="headerimg2" class="headerimg"></div>
		</div>
	
		
		
		<div id="headernav">
			<div id="back" class="btn"></div>
			<div id="next" class="btn"></div>
		</div>
		<!-- ENDS background nav -->
		
		<!--<div id="top-gap"></div>-->

		<!-- wrapper -->
		<div class="wrapper">
		
			<a href="index.php"><img  id="logo" src="img/logo.png" alt="Kroft"></a>
			
			
			<!-- nav bar holder -->
			<div id="nav-bar-holder">
				<!-- Navigation -->
				<ul id="nav" class="sf-menu">
		
					<li 
					';
					if ($active=='home')
						echo '
						class="current-menu-item"';
						echo'><a href="index.php">Home</a></li>
								<li ';
					if ($active=='gallery')
						echo '
						class="current-menu-item"';
						echo'><a href="gallery.php">Gallery</a></li>
					<li ';
					if ($active=='activities')
						echo '
						class="current-menu-item"';
						echo '><a href="#">Activities</a>
									<ul>
										<li><a href="activities-cult.php">Cult</a></li>
										<li><a href="activities-sports.php">Sports</a></li>
										<li><a href="activities-tech.php">Tech</a></li>
									</ul>
								</li>
					<li ';
					if ($active=='facilities')
						echo '
						class="current-menu-item"';
						echo '><a href="#">Facilities</a>
									<ul>
										<li><a href="activities-comp.php">Comp</a></li>	
										<li><a href="activities-mess.php">Mess</a></li>
										<li><a href="activities-maint.php">Maint</a></li>
									</ul>
								</li>
					<li ';
					if ($active=='alumni')
						echo '
						class="current-menu-item"';
						echo '><a href="alumni.php">Alumni</a></li>
					<li ';
					if ($active=='council')
						echo '
						class="current-menu-item"';
						echo '><a href="council.php">Council</a></li>
							</ul>
							<!-- ENDS Navigation -->
				
				<!-- Social -->
				<ul class="social">
					<li><a href="https://www.facebook.com/pages/VI-Kings-Hostel-6-IIT-Bombay/153075061382500" class="poshytip  facebook" title="Become a fan"></a></li>
				</ul>
				<!-- ENDS Social -->
			</div>
			';
		




}

	
function sidebar ($active,$page) {
		echo "<div id='sidebar'>
						<div class='sideblock'>";
						
				if ($active=="activities"){
					echo "<h6 class='side-title'>Activities</h6>
							<ul class='cat-list'>
					    		<li ";
							if ($page=='comp')
								echo "class='selected'";
							echo "><a href='' class='prevent-default' onclick='hide(\'comp1\')'> Comp </a></li>
					    		<li ";
							if ($page=='cult')
								echo "class='selected'";
							echo "><a href='' class='prevent-default' onclick='hide(\'cult1\')'> Cult </a></li>
					    		<li ";
							if ($page=='maint')
								echo "class='selected'";
							echo "><a href='' class='prevent-default' onclick='hide(\'maint1\')'> Maint  </a></li>
					    		<li ";
							if ($page=='sports')
								echo "class='selected'";
							echo '><a href="" class="prevent-default" onclick="hide(\'sports1\')"> Sports </a></li>
								<li ';
							if ($page=='tech')
								echo "class='selected'";
							echo '><a href="" class="prevent-default" onclick="hide(\'tech1\')"> Tech </a></li>
							</ul>';	
							
							}
				if ($active=="council"){
					echo "<h6 class='side-title'>Activities</h6>
							<ul class='cat-list'>
					    		<li ";
							if ($page=='comp')
								echo "class='selected'";
							echo '><a href="" class="prevent-default" onclick="hide(\'comp\')"> Comp </a></li>
					    		<li ';
							if ($page=='cult')
								echo "class='selected'";
							echo '><a href="" class="prevent-default" onclick="hide(\'cult\')"> Cult </a></li>
					    		<li ';
							if ($page=='maint')
								echo "class='selected'";
							echo '><a href="" class="prevent-default" onclick="hide(\'maint\')"> Maint  </a></li>
					    		<li ';
							if ($page=='sports')
								echo "class='selected'";
							echo '><a href="" class="prevent-default" onclick="hide(\'sports\')"> Sports </a></li>
								<li ';
							if ($page=='tech')
								echo "class='selected'";
							echo '><a href="" class="prevent-default" onclick="hide(\'tech\')"> Tech </a></li>
							</ul>';
				
				}
							
					    	
				echo '    	</div>
					</div>';
}




		