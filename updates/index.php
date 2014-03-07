<head>
<style type="text/css">

/*Example CSS for the two demo scrollers*/

#pscroller1{
width: 150px;
height: 85px;
padding: 0px;
}

#pscroller2{
width: 350px;
height: 20px;
border: 1px solid black;
padding: 3px;
}

#update-text{
	padding-top:0px;
	color:#CCC;
	font-size:14px;
	font-weight:normal;
}

#update-heading {
	font-family: Calluna-Regular;
	padding: 0px;
	color:#FFF;
	text-decoration: none;
	font-weight:bold;
}
#pscroller1 a{
	font-family: Calluna-Regular;
	padding: 0px;
	color:#FFF;
	text-decoration: none;
	font-weight:bold;
}
#pscroller1 a:hover{
	text-decoration:none;
}

.someclass{ //class to apply to your scroller(s) if desired
}

</style>

<script type="text/javascript">

/*Example message arrays for the two demo scrollers*/

var pausecontent=new Array()

<?php

//loading updates into updates array.....
$j = 0; //$j is the number of updates..

//Cult Updates...
$file = fopen('updates/cultUpdates.txt','r');
$data= fread($file,filesize('updates/cultUpdates.txt'));
$cultUpdate = explode(';',$data);


for($i=0;$i<5;$i++){
	if(!empty($cultUpdate[$i])){
	$updateHeading[$j] = $cultUpdate[$i];
	$updateText[$j]	   = $cultUpdate[$i+1];
	$j++;
	}
$i++;
}

//Sports Updates...
$file = fopen('updates/sportsUpdates.txt','r');
$data= fread($file,filesize('updates/sportsUpdates.txt'));
$sportsUpdate = explode(';',$data);


for($i=0;$i<5;$i++){
	if(!empty($sportsUpdate[$i])){
	$updateHeading[$j] = $sportsUpdate[$i];
	$updateText[$j]	   = $sportsUpdate[$i+1];
	$j++;
	}
$i++;
}

//Mess Updates...
$file = fopen('updates/messUpdates.txt','r');
$data= fread($file,filesize('updates/messUpdates.txt'));
$messUpdate = explode(';',$data);


for($i=0;$i<5;$i++){
	if(!empty($messUpdate[$i])){
	$updateHeading[$j] = $messUpdate[$i];
	$updateText[$j]	   = $messUpdate[$i+1];
	$j++;
	}
$i++;
}


//Maint Updates...
$file = fopen('updates/maintUpdates.txt','r');
$data= fread($file,filesize('updates/maintUpdates.txt'));
$maintUpdate = explode(';',$data);


for($i=0;$i<5;$i++){
	if(!empty($maintUpdate[$i])){
	$updateHeading[$j] = $maintUpdate[$i];
	$updateText[$j]	   = $maintUpdate[$i+1];
	$j++;
	}
$i++;
}

//Comp Updates...
$file = fopen('updates/compUpdates.txt','r');
$data= fread($file,filesize('updates/compUpdates.txt'));
$compUpdate = explode(';',$data);


for($i=0;$i<5;$i++){
	if(!empty($compUpdate[$i])){
	$updateHeading[$j] = $compUpdate[$i];
	$updateText[$j]	   = $compUpdate[$i+1];
	$j++;
	}
$i++;
}





$j=0; //For pausecontent[] index...
//Displaying updates....
for($i=0;$i<20;$i++){
	if(!empty($updateHeading[$i])){
	echo "pausecontent[$j]='<span id=\"update-heading\">".$updateHeading[$i]."</span><br /><span id=\"update-text\">".$updateText[$i]."</span>';";
	$j++;
	}
}

?>

/*
pausecontent[0]='<a href="http://www.ee.iitb.ac.in/uma/~eesa/aagomani12/#!/Workshops"><span id="update-heading">Maint</span><br /><span id="update-text">maint update comes here...</span></a>'

pausecontent[1]='<a href="http://www.ee.iitb.ac.in/uma/~eesa/aagomani12/#!/Workshops/E-Prayog"><span id="update-heading">Sports</span><br /><span id="update-text">Sports update comes here...Sports update comes here...</span></a>'

pausecontent[2]='<a href="http://www.ee.iitb.ac.in/uma/~eesa/aagomani12/#!/competitions/SelfParkingBot"><span id="update-heading">Lit</span><br /><span id="update-text">Lit update comes here...</span></a>'



/*
pausecontent[3]='<a href="http://www.aagomani.org/#!/lectures">Lectures<br /><span id="update-text">Coming Soon!</span></a>'
pausecontent[4]='<a href="http://www.aagomani.org/#!/workshops">Workshops<br /><span id="update-text">Coming Soon!</span></a>'
pausecontent[5]='<a href="http://www.aagomani.org/#!/funzone">Funzone<br /><span id="update-text">Coming Soon!</span></a>'

/*
var pausecontent2=new Array()
pausecontent2[0]='<a href="http://www.news.com">News.com: Technology and business reports</a>'
pausecontent2[1]='<a href="http://www.cnn.com">CNN: Headline and breaking news 24/7</a>'
pausecontent2[2]='<a href="http://news.bbc.co.uk">BBC News: UK and international news</a>'
*/

</script>

<script type="text/javascript">

/***********************************************
* Pausing up-down scroller- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/

function pausescroller(content, divId, divClass, delay){
this.content=content //message array content
this.tickerid=divId //ID of ticker div to display information
this.delay=delay //Delay between msg change, in miliseconds.
this.mouseoverBol=0 //Boolean to indicate whether mouse is currently over scroller (and pause it if it is)
this.hiddendivpointer=1 //index of message array for hidden div
document.write('<div id="'+divId+'" class="'+divClass+'" style="position: relative; overflow: hidden"><div class="innerDiv" style="position: absolute; width: 100%" id="'+divId+'1">'+content[0]+'</div><div class="innerDiv" style="position: absolute; width: 100%; visibility: hidden" id="'+divId+'2">'+content[1]+'</div></div>')
var scrollerinstance=this
if (window.addEventListener) //run onload in DOM2 browsers
window.addEventListener("load", function(){scrollerinstance.initialize()}, false)
else if (window.attachEvent) //run onload in IE5.5+
window.attachEvent("onload", function(){scrollerinstance.initialize()})
else if (document.getElementById) //if legacy DOM browsers, just start scroller after 0.5 sec
setTimeout(function(){scrollerinstance.initialize()}, 500)
}

// -------------------------------------------------------------------
// initialize()- Initialize scroller method.
// -Get div objects, set initial positions, start up down animation
// -------------------------------------------------------------------

pausescroller.prototype.initialize=function(){
this.tickerdiv=document.getElementById(this.tickerid)
this.visiblediv=document.getElementById(this.tickerid+"1")
this.hiddendiv=document.getElementById(this.tickerid+"2")
this.visibledivtop=parseInt(pausescroller.getCSSpadding(this.tickerdiv))
//set width of inner DIVs to outer DIV's width minus padding (padding assumed to be top padding x 2)
this.visiblediv.style.width=this.hiddendiv.style.width=this.tickerdiv.offsetWidth-(this.visibledivtop*2)+"px"
this.getinline(this.visiblediv, this.hiddendiv)
this.hiddendiv.style.visibility="visible"
var scrollerinstance=this
document.getElementById(this.tickerid).onmouseover=function(){scrollerinstance.mouseoverBol=1}
document.getElementById(this.tickerid).onmouseout=function(){scrollerinstance.mouseoverBol=0}
if (window.attachEvent) //Clean up loose references in IE
window.attachEvent("onunload", function(){scrollerinstance.tickerdiv.onmouseover=scrollerinstance.tickerdiv.onmouseout=null})
setTimeout(function(){scrollerinstance.animateup()}, this.delay)
}


// -------------------------------------------------------------------
// animateup()- Move the two inner divs of the scroller up and in sync
// -------------------------------------------------------------------

pausescroller.prototype.animateup=function(){
var scrollerinstance=this
if (parseInt(this.hiddendiv.style.top)>(this.visibledivtop+5)){
this.visiblediv.style.top=parseInt(this.visiblediv.style.top)-5+"px"
this.hiddendiv.style.top=parseInt(this.hiddendiv.style.top)-5+"px"
setTimeout(function(){scrollerinstance.animateup()}, 50)
}
else{
this.getinline(this.hiddendiv, this.visiblediv)
this.swapdivs()
setTimeout(function(){scrollerinstance.setmessage()}, this.delay)
}
}

// -------------------------------------------------------------------
// swapdivs()- Swap between which is the visible and which is the hidden div
// -------------------------------------------------------------------

pausescroller.prototype.swapdivs=function(){
var tempcontainer=this.visiblediv
this.visiblediv=this.hiddendiv
this.hiddendiv=tempcontainer
}

pausescroller.prototype.getinline=function(div1, div2){
div1.style.top=this.visibledivtop+"px"
div2.style.top=Math.max(div1.parentNode.offsetHeight, div1.offsetHeight)+"px"
}

// -------------------------------------------------------------------
// setmessage()- Populate the hidden div with the next message before it's visible
// -------------------------------------------------------------------

pausescroller.prototype.setmessage=function(){
var scrollerinstance=this
if (this.mouseoverBol==1) //if mouse is currently over scoller, do nothing (pause it)
setTimeout(function(){scrollerinstance.setmessage()}, 100)
else{
var i=this.hiddendivpointer
var ceiling=this.content.length
this.hiddendivpointer=(i+1>ceiling-1)? 0 : i+1
this.hiddendiv.innerHTML=this.content[this.hiddendivpointer]
this.animateup()
}
}

pausescroller.getCSSpadding=function(tickerobj){ //get CSS padding value, if any
if (tickerobj.currentStyle)
return tickerobj.currentStyle["paddingTop"]
else if (window.getComputedStyle) //if DOM2
return window.getComputedStyle(tickerobj, "").getPropertyValue("padding-top")
else
return 0
}
</script>
</head>
<script type="text/javascript">

//new pausescroller(name_of_message_array, CSS_ID, CSS_classname, pause_in_miliseconds)

new pausescroller(pausecontent, "pscroller1", "someclass", 3000)

</script>