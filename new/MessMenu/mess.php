<?php
$day = date("D");
$json = file_get_contents("admin/mess/mess.json");
$data = json_decode($json,true);
$type = array("Breakfast","Lunch","Tiffin","Dinner");
$img  = array("cake_slice32.png","fork_black32.png","cup32.png","coctail_glass32.png");
//echo '<ul class="messmenu123">';
echo '                    ';
	//echo '<li>
	//<span id="messHeading" style="display:block"><img src="img/mono-icons/'.$img[$i].'" class="box-icon" alt="pic"/><h6>'.$type[$i].'</h6></span><br/>
	//'.$data[$day][$type[$i]].'
	//</li>';

//echo '</ul>'
?>
  <div class="slide-box messmenu123">   
								<div class="mess">
									<img src="img/mono-icons/<?php echo $img[0] ; ?>" class="box-icon" alt="pic"/>
									<h6><?php echo $type[0]; ?></h6>
									
									<div class="box-divider"></div><p style="text-align:center"><?echo $data[$day][$type[0]] ;?></p></div>
								<div class="mess">
									<img src="img/mono-icons/<?php echo $img[1] ; ?>" class="box-icon" alt="pic"/>
									<h6><?php echo $type[1]; ?></h6>
									
									<div class="box-divider"></div><p style="text-align:center"><?echo $data[$day][$type[1]] ;?></p></div>
								<div class="mess">
									<img src="img/mono-icons/<?php echo $img[2] ; ?>" class="box-icon" alt="pic"/>
									<h6><?php echo $type[2]; ?></h6>
									
									<div class="box-divider">
									</div><p style="text-align:center"><?echo $data[$day][$type[2]] ;?></p></div>
								<div class="mess">
									<img src="img/mono-icons/<?php echo $img[3] ; ?>" class="box-icon" alt="pic"/>
									<h6><?php echo $type[3]; ?></h6>
									
									<div class="box-divider">
									</div><p style="text-align:center"><?echo $data[$day][$type[3]] ;?></p></div></div>