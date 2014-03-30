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
<title>Hostel 6 Xerox cum Stationery Shop Review</title>


</head>
<?php
//change here
	if(isset($_POST['submission']))
	{
	error_reporting();
	include ('db_connect.php');
		$username=$_SESSION['username'];
		$yes=$_POST['yes'];
		$no=$_POST['no'];
		$comment=$_POST['comment'];
		$neutral=$_POST['neutral'];
			
		mysql_query("INSERT into voters (userid) VALUES ('$username')");
		mysql_query("INSERT into review (name, yes, no, comment, neutral) VALUES ('$username', '$yes', '$no', '$comment', '$neutral')");
		unset($_SESSION['username']);
		unset($_SESSION['rollnumber']);
		die("<b>Your vote has been taken. Please click <a href='index.php'>here</a> to go back.</b>");
		
	}

?>	
<form action="review.php" method="post" style="text-align:center">
	<H3>Junta this is a form for the review of hostel Xerox shop. Do comment your complaints here<br> on the basis of your complaints we will decide whether to continue with this vendor or not<br></H3>
	<H3>Do you have problems with current Vendor</H3>
	Yes: <input type="radio" value="yes" name="yes" /><br>
	No : <input type="radio" value="no" name="no" /><br>
	Neutral : <input type="radio" name="neutral" /><br>
	Comment/Suggestions : <input type="text" name="comment" /><br>
	<input type='submit' name='submission' value='Enter'>
	</form>
	</body>
</html>
