$(document).ready(function() {

	setTimeout(function(){
		$('body').addClass('loaded');
	}, 1000);

	//For Firefox we have to handle it in JavaScript
	var vids = $("video");
	$.each(vids, function() {
		this.controls = false;
	});
	//Loop though all Video tags and set Controls as false

	$("video").click(function() {
		//console.log(this);
		if (this.paused) {
			this.play();
		} else {
			this.pause();
		}
	});

	// Find all iframes
	var $iframes = $( "iframe" );

	// Find &#x26; save the aspect ratio for all iframes
	$iframes.each(function () {
	  $( this ).data( "ratio", this.height / this.width )
	    // Remove the hardcoded width &#x26; height attributes
	    .removeAttr( "width" )
	    .removeAttr( "height" );
	});

	// Resize the iframes when the window is resized
	$( window ).resize( function () {
	  $iframes.each( function() {
	    // Get the parent container&#x27;s width
	    var width = $( this ).parent().width();
	    $( this ).width( width )
	      .height( width * $( this ).data( "ratio" ) );
	  });
	// Resize to fix all iframes on page load.
	}).resize();

});
