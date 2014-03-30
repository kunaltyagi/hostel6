function hide(fart){
	//$(".all").fadeOut("fast", function() {
	var x;
	x=0;
	$(".all").hide( function() {
		//alert("random!");
		$("."+fart).fadeIn("fast", function() {
			//alert('yay!');
			x=x+1;
		});
	});
};
