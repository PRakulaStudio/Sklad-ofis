console.log(init_map);

$(function(){
	if (typeof(init_map) != 'undefined') {
		run_canvas();initialize();
	}
	
	$( ".cross" ).hide();
	$( ".mobile_menu" ).hide();
	$( ".hamburger" ).click(function() {
			$( ".mobile_menu" ).slideToggle( "slow", function() {
				$( ".hamburger" ).hide();
				$( ".cross" ).show();
			});
	});

	$( ".cross" ).click(function() {
		$( ".mobile_menu" ).slideToggle( "slow", function() {
			$( ".cross" ).hide();
			$( ".hamburger" ).show();
		});
	});

});