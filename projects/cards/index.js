// var els = document.getElementsByClassName("stack__card");

const scale = (num, in_min, in_max, out_min, out_max) => {
	return ((num - in_min) * (out_max - out_min)) / (in_max - in_min) + out_min;
};

$(window).scroll(function () {
	// Setting: Start fading halfway up the page
	var startPos = 0.2;

	// Cache window object
	var $w = $(window);

	// Basically, we go through each element and check its relative position within the viewport
	$(".stack__card").each(function () {
		// Get current relative position in viewport, based on the top edge
		var pos = $(this).offset().top - $w.scrollTop();

		// Get viewport height
		var vh = $w.height();
        
        // console.log(pos);
        var s = scale(pos, 0, 3000, 0.3, 1);
        // console.log(s);
		if (pos < vh * startPos) {
			// If element has past the starting threshold, we fade it
			$(this).css("transform", "scale(" + scale(pos, 0, 2000, 1, 1.1) + ")");
			// console.log(pos);
		} else {
			$(this).css("transform", "scale(" + scale(pos, 0, 2000, 1, 1.1) + ")");
		}
	});
});
