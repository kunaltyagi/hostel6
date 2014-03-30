<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header("Location:index.php");
		die();
	}
	$roll = $_SESSION['rollnumber'] ;
	$roll = substr($roll,0,2);
?>
<html>
<head>
<title>Hostel 6 Elections - 2013</title>
<style>
body{
	color:#693;
	font:1em trebuchet ms;
}
div.post{
	clear:both;
	margin-bottom:50px;
}
div.cand{
	width:240px;
	float:left;
	border:1px solid #ccc;
	padding:10px;
	margin:5px;
	height:100px;
}

div.cand span{
    margin-bottom:-20px
}

div.cand:hover,img:hover{
	border-color:#c30;
}
.cand span{
	display:block;
	font-weight:bold;
	color:#c30;
}
img{
	border:1px solid #ccc;
	padding:2px;
	width:80px;
	float:right;
	max-height:100px;
}
h3{
	font:1.2em arial;
	color:#c30;
	clear:both;
}
#ldap{
	display:none;
}
</style>
<script type="text/javascript" src="jquery.js"></script>
</head>
<script type="text/javascript">
	function clickradio(x){	
		var count = 0;
		var post = $(x).parent().parent();
		var maxyes = post.attr('maxyes'); 
		post.find('input:checked').each(function(){
			if($(this).val() == 'yes')
				count++;
		});
		if(count > maxyes){
			$(x).attr("checked",false);
			$(x).siblings('input').attr("checked",true);
			alert("You can not give yes to more than "+maxyes+" candidates");
		}
	}
</script>
<?php
if($_SERVER['REMOTE_ADDR']!='127.0.0.1' || $_SERVER['REMOTE_ADDR']!='10.6.14.2' || $_SERVER['REMOTE_ADDR']!='10.6.14.2' || $_SERVER['REMOTE_ADDR']!='10.6.14.3' || $_SERVER['REMOTE_ADDR']!='10.6.14.3')
{//change here
	if(isset($_POST['submission']))
	{
		include ('db_connect.php');
		$can = array();
		$can[1] = $_POST['anmol'];
		//$can[2] = $_POST['himanshu'];
	//	$can[3] = $_POST['sundeep'];
		$can[4] = $_POST['raghuvanshi'];
		$can[5] = $_POST['naveen'];
		//$can[6] = $_POST['surendra'];
		//$can[7] = $_POST['borkar'];
		//$can[8] = $_POST['sargun'];
		$can[9] = $_POST['amit'];
		//$can[10] = $_POST['meena'];
		$can[11] = $_POST['tanmay'];
		$can[12] = $_POST['visheswar'];
		//$can[13] = $_POST['dipesh'];
		$can[14] = $_POST['samaria'];
	//	$can[15] = $_POST['deepakk'];
		$can[16] = $_POST['goyal'];
	//	$can[17] = $_POST['krishna'];
		$can[18] = $_POST['mistry'];
		//$can[19] = $_POST['akshay'];
		$can[20] = $_POST['kaushik'];
		//$can[21] = $_POST['shreyans'];
		$can[22] = $_POST['garg'];
		$can[23] = $_POST['chavan'];
		//$can[24] = $_POST['bhartiya'];
		$can[25] = $_POST['varun'];
		$can[26] = $_POST['kunal'];
			//$can[27] = $_POST['kamlesh'];
			$can[28] = $_POST['neal'];
			//$can[29] = $_POST['yogesh'];	
		foreach($can as $key=>$value)
		{	
			if($value == ''){
				die("One of the selections is empty. Forgot to select option. Please go back and recast your vote");
			}
			else {
			if($value == "yes")
				mysql_query("UPDATE `candidate` SET yes=yes+1 WHERE id='$key'");
			else if($value == "no")
				mysql_query("UPDATE `candidate` SET no=no+1 WHERE id='$key'");	 
			else if($value == "neutral")
				mysql_query("UPDATE `candidate` SET neutral=neutral+1 WHERE id='$key'");	 
		}}
		mysql_query("INSERT into voters (userid) VALUES ('".$_SESSION['username']."')");
		unset($_SESSION['username']);
		unset($_SESSION['rollnumber']);
		die("<b>Your vote has been taken. Please click <a href='index.php'>here</a> to go back.</b>");
		
	}
}
else
{
die("You are not allowed to use this page.");
}
function printcand($name,$photo,$id){
?>
<div class="cand"><span><img src="<?php echo $photo;?>"><?php echo $name;?></span><br/><input onclick="clickradio(this)" type="radio" name="<?php echo $id; ?>" value="yes"/>yes<br/><input type="radio" name="<?php echo $id; ?>" value="no"/>no<br/><input type="radio" name="<?php echo $id; ?>" value="neutral" checked/>neutral<br/></div>
<?php
}
echo "<body> <h1>Hostel 6 Elections - 2013</h1>";
?>	<h1>Please read the instructions carefully before voting</h1>
	<div style="color:red;"><b>Instructions: </b>
	1) You have to select a vote for all the candidates, it may be Yes/No or order of preference, cannot leave anything empty<br/>
	2) In case order of preference NO TWO persons can have same vote (Example: you cannot give 1 as preference to two candidates and also cannot give No as preference for two candidates)<br/>
	3) If the number of posts contesting is equal to the number of candidates there is no PREFERENCE just Yes/No can be given as a vote
	</div>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
	<h2>Cast your vote below in order of PREFERENCE:</h2>

	
	

	<div class="post" maxyes="3">
		<h3>Secretary for Maintainence Affairs (3 Posts)</h3>
		<?php printcand("Anmol Hembrom","img/anmol.jpg","anmol"); ?>
		<?php// printcand("Himanshu Goyal","img/pritamkumar.jpg","himanshu"); ?>
		<?php// printcand("Chen Reddy Sundeep Reddy","img/chaitanya.jpg","sundeep"); ?>
		<?php printcand("Amit Raghuwanshi","img/raghuvanshi.jpg","raghuvanshi"); ?>
		<?php printcand("Naveen sagar","img/ankur.jpg","naveen"); ?>
	</div>
	<div style="clear:both"></div>
	<!--<br>
	<div class="post" maxyes="1">
		<h3>Secretary for Cultural Affairs - Music</h3>
		<?php// printcand("Ankhush Borkar ","img/mehul.jpg","borkar"); ?>
	</div>
	<div style="clear:both"></div>-->
	<br>
	<div class="post">
		<h3>Secretary of Cultural Affairs - SOC</h3>
		<?php printcand("Hemant Tmsrao","img/hemant.jpg","hemant"); ?>
	</div>
	<div style="clear:both"></div>
	<br>
	<div class="post" maxyes="1">
		<h3>Secretary for Cultural Affairs - Dramatics</h3>
		<?php //printcand("sargun singh gulati","img/sargun.jpg","sargun"); ?>
		<?php printcand("Amit Kumar Singh","img/ankit.jpg","amit"); ?>
	</div>
	<div style="clear:both"></div>
	<br>
	<div class="post">
		<h3>Secretary for Cultural Affairs - Film & Media</h3>
		<?php printcand("Neal Iyer","img/nikunj.jpg","neal"); ?>
	</div>	
	<div style="clear:both"></div>
	<!--<br>
	<div class="post" maxyes="1">
		<h3>Secretary for Cultural Affairs - PFA</h3>
		<?php //printcand("Nikhil Meena","img/bhavin.jpg","meena"); ?>
	</div>
	<div style="clear:both"></div>-->
	<br>
	<div class="post" maxyes="1">
		<h3>Secretary for Cultural Affairs - Literary</h3>
		<?php printcand("Tanmay Shrivastava","img/tanmay.jpg","tanmay"); ?>
	</div>
	<div style="clear:both"></div>
	<br>
	<div class="post" maxyes="1">
		<h3>Secretary for Cultural Affairs - Dance</h3>
		<?php printcand("Visheshwar Singh","img/.jpg","visheswar"); ?>
	</div>
	<div style="clear:both"></div>
	<br>
	<div class="post" maxyes="4">
		<h3>Secretary for Sports Affairs</h3>
		<?php //printcand("Deepak Chaudhary","img/deepak.jpg","deepak"); ?>
		<?php printcand("Abhijeet Samaria","img/.jpg","samaria"); ?>
		<?php //printcand("Deepak Miglani","img/deepakk.jpg","deepakk"); ?>
		<?php printcand("Vipul Goyal","img/goyal.jpg","goyal"); ?>
		<?php //printcand("P Hari Krishna","img/jaideep.jpg","krishna"); ?>
	</div>
	<div style="clear:both"></div>
	<br>
	<div class="post" maxyes="2">
		<h3>Secretary for Mess Affairs (2 Post)</h3>
		<?php printcand("Divyesh Mistry","img/rahul.jpg","mistry"); ?>
		<?php printcand("Ankur Kaushik","img/kaushik.jpg","kaushik"); ?>
	</div>
	<div style="clear:both"></div>
	<!--<br>
	<div class="post" maxyes="1">
		<h3>Secretary for Alumni</h3>
		<?php //printcand("Shreyans Kumat","img/shreyans.jpg","shreyans"); ?>
	</div>
	<div style="clear:both"></div>-->
	<br>
	<div class="post" maxyes="2">
		<h3>Secretary for Tech</h3>
		<?php printcand("Kunal Garg","img/garg_kunal.jpg","garg"); ?>
		<?php printcand("Subodh Chavan","img/chavan.jpg","chavan"); ?>
		<?php //printcand("Ayush Agrawal","img/ayush.jpg","ayush"); ?>
	</div>
	<div style="clear:both"></div>
	<br>
	<div class="post" maxyes="2">
		<h3>Secretary for Comp & Web</h3>
		<?php printcand("Prabhakara Varun ","img/varun.jpg","varun"); ?>
		<?php printcand("Kunal Tyagi","img/kunal.jpg","kunal"); ?>
	</div>
	<div style="clear:both"></div>
	<input type='submit' name='submission' value='submit'>
	</form>
	</body>
</html>
