
<?php
	include	'header.php';
	menu('gallery');
?>
			<!-- MAIN -->
			<div id="main" class="cf">
				
				<!-- categories -->
				<ul class="nav-categories cf">
					<li><a href="" class="prevent-default" onclick="hide(\'fart\')" >all</a></li>
					<li><a href="" class="prevent-default" onclick="hide(\'fs\')" >print</a></li>
					</ul>
				<!-- ENDS categories -->
			
				<!-- work list -->
				<ul class="work-list cf" id="filter-container">
					
					<li class="fart all">
						<a href="project.html" class="thumb" >
							<img src="img/dummies/f-01.jpg" alt="Thumbnail" />
							<div class="img-overlay">VIEW PROJECT</div>
						</a>
						<a href="single.html"  class="title">LOREM IPSUM DOLOR</a>
						
						<div class="categories"><a href="#" >print, </a><a href="#" >photo</a></div>
					</li>
					
					<li class="fs all" >
						<a href="project.html" class="thumb" >
							<img src="img/dummies/f-02.jpg" alt="Thumbnail" />
							<div class="img-overlay">VIEW PROJECT</div>
						</a>
						<a href="single.html"  class="title">LOREM IPSUM DOLOR</a>
						
						<div class="categories"><a href="#" >webdesign, </a><a href="#" >print, </a><a href="#" >photo</a></div>
					</li>
					<li class="fs all" >
						<a href="project.html" class="thumb" >
							<img src="img/dummies/f-02.jpg" alt="Thumbnail" />
							<div class="img-overlay">VIEW PROJECT</div>
						</a>
						<a href="single.html"  class="title">LOREM IPSUM DOLOR</a>
						
						<div class="categories"><a href="#" >webdesign, </a><a href="#" >print, </a><a href="#" >photo</a></div>
					</li>
					<li class="fart all" >
						<a href="project.html" class="thumb" >
							<img src="img/dummies/f-02.jpg" alt="Thumbnail" />
							<div class="img-overlay">VIEW PROJECT</div>
						</a>
						<a href="single.html"  class="title">LOREM IPSUM DOLOR</a>
						
						<div class="categories"><a href="#" >webdesign, </a><a href="#" >print, </a><a href="#" >photo</a></div>
					</li>
				</ul>
				<!-- ENDS work list -->	
				
				<!-- pager --><!--
				<ul class="pager cf">
					<li class="paged">Page 1 of 4 </li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
				</ul>-->
				<!-- ENDS pager -->
			
					
			</div>
			<!-- ENDS MAIN -->
		
<?php
	include 'footer.php'
?>
<script language="javascript">
window.onload = function(){

    $("a.prevent-default").click(function(event) {
         event.preventDefault(); 
          });
		  
  };
 
  
</script>	