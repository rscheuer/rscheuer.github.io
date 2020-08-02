//$(document).on('mouseover', 'a', function(e) {
//	var path = $(e.target).data('id');
//	console.log(path);
//	$('#hoverimage').attr("src", path);
//});

$("a").hover(function() {
	var path = $(this).data('id');
	console.log(path);
	$('#hoverimage').attr("src", path);
	$('#hoverimage').show();
}, function() {
	$('#hoverimage').attr("src", '');
	$('#hoverimage').hide();
});

$(document).mousemove(function(e) {
	$("#hoverimage").css({
		left: e.pageX+10,
		top:e.pageY+10
	});
});