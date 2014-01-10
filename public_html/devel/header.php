<?php 

function menu ($active){
echo '
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" > <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Hostel 6 | IIT Bombay</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">
		
		<!-- CSS -->
		<link href="http://fonts.googleapis.com/css?family=Arvo:400" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		
		<script src="js/modernizr.js"></script>
	</head>
	<body>
	
		
		<!-- WRAPPER -->
		<div class="wrapper">
		
			<!-- HEADER -->
			<header class="cf">
				<div id="logo"><a href="index.php"><img src="img/logo.png" alt="Hostel 6 | IIT Bombay" /></a></div>
				
				<!-- social-bar -->
				<ul id="social-bar" class="cf">
					
					<li class="youtube"><a href="http://www.youtube.com/channel/UC_bnZdBhf_KCX3bQ_bK7BtQ"  title="YouTube" ></a></li>
					<li class="facebook"><a href="http://www.facebook.com/groups/vikingshostel6/"  title="Facebook" ></a></li>
					<li class="googleplus"><a href="https://plus.google.com/115505103954632822460/posts"  title="Google+" ></a></li>
				</ul>
				<!-- ENDS social-bar -->
				
			</header>
			<!-- ENDS HEADER -->  
       <!-- NAV -->
    		<nav class="cf">
				<ul id="nav" class="sf-menu">
    				<li';
			    if($active=='home')
			        echo '
					class="current-menu-item"';
				echo'><a href="index.php">HOME</a></li>
					<li';
			    if($active=='gallery')
			        echo '
					class="current-menu-item"';
				echo'><a href="#">GALLERY</a></li>
					<li';
			    if($active=='activities')
			        echo '
					class="current-menu-item"';
				echo'><a href="#">ACTIVITIES</a>
						<ul>
							<li><a href="cult.php">Cult</a></li>
							<li><a href="tech.php">Tech</a></li>
							<li><a href="sport.php">Sports</a></li>
						</ul>
					</li>
					<li';
			    if($active=='facilities')
			        echo '
					class="current-menu-item"';
				echo'><a href="#">FACILITIES</a>
						<ul>
							<li><a href="comp.php">Comp</a></li>
							<li><a href="mess.php">Mess</a></li>
							<li><a href="maint.php">Maint</a></li>
						</ul>
					</li>
					<li';
			    if($active=='alumni')
			        echo '
					class="current-menu-item"';
				echo'><a href="alumni.php">ALUMNI</a></li>
					<li';
			    if($active=='council')
			        echo '
					class="current-menu-item"';
				echo'><a href="council.php">COUNCIL</a></li>
					
				</ul>
			</nav>
      <!-- ENDS NAV -->';
}
			
?>
