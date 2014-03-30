<?php

	
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




		
