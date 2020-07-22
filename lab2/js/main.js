// $(document).ready(function() {

//   $('.controls').hide();


//   $('#one .info').on('click', function() {
//     $('.controls').slideToggle('600');
//   });
// });

// $.fn.slideFadeToggle  = function(speed, easing, callback) {
// 	return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
// }; 

// $("#one .dropdown-button").click(function() {
//    $('.controls').slideFadeToggle();
// });


$(document).ready(function() {
	
	// $('.controls').hide();
	
// 	$("#one").click(function(event){
// //		  event.stopPropagation();
// //		  alert("This is : one" + $(this).attr('class'));
// 		  $('#one .controls').toggle();
// 		  // Comment the following to see the difference
		  
// 	});
	
	$(".controls").click(function(event){
	    event.stopPropagation();
//	    alert("The span element was clicked.");
	  });
});


$(document).ready(function() {
	
	// $('.controls').hide();
	
	$("#two").click(function(event){
		$('two').
//		  event.stopPropagation();
//		  alert("This is : one" + $(this).attr('class'));
		  $('#one .controls').toggle();
		  // Comment the following to see the difference
		  
	});
	
	$(".controls").click(function(event){
	    event.stopPropagation();
//	    alert("The span element was clicked.");
	  });
});


function getTestText() {
//	var x = document.getElementsByClassName("textarea");
		return document.getElementById("textarea");
//	return x[0];
}

function updateFeatures() {
	// update features based on user input:
	var testtext = getTestText();
	var codeLine = "";
	var checkboxes = document.getElementsByClassName("otFeature")
	for (i = 0; i < checkboxes.length; i++) {
		var checkbox = checkboxes[i];
		if (i!=0) { codeLine += ", " };
		codeLine += '"'+checkbox.name+'" ';
		codeLine += checkbox.checked ? '1' : '0';
		if (checkbox.name=="kern") {
			testtext.style.setProperty("font-kerning", checkbox.checked ? 'normal' : 'none');
		} else if (checkbox.name=="liga") {
			testtext.style.setProperty("font-variant-ligatures", checkbox.checked ? 'common-ligatures contextual' : 'no-common-ligatures no-contextual');
		} else if (checkbox.name=="dlig") {
			testtext.style.setProperty("font-variant-ligatures", checkbox.checked ? 'discretionary-ligatures' : 'no-discretionary-ligatures');
		} else if (checkbox.name=="hlig") {
			testtext.style.setProperty("font-variant-ligatures", checkbox.checked ? 'historical-ligatures' : 'no-historical-ligatures');
		}
	}
	testtext.style.setProperty("font-feature-settings", codeLine);
}

function updateSlider() {
	var body = getTestText();
	var sliders = document.getElementsByClassName("slider");
	var settingtext = "";
	for (var i = 0; i < sliders.length; i++) {
		var sliderID = sliders[i].id;
		var sliderValue = sliders[i].value;
		var label = document.getElementById("label_"+sliderID);
		var labelName = label.getAttribute("name");
		
		label.textContent = ""+labelName+": "+sliderValue;
		
		if (sliderID == "fontsize") {
			// Text Size Slider
			body.style.setProperty("font-size", ""+sliderValue+"px");
			label.textContent += "px";
		} else if (sliderID == "lineheight") {
			// Line Height Slider
			body.style.setProperty("line-height", ""+sliderValue/100.0+"em");
			label.textContent += "%";
		} else if (sliderID == "spacing") {
			// Line Height Slider
			body.style.setProperty("letter-spacing", ""+sliderValue/100.0+"em");
			label.textContent += "%";	
		} else {
			// OTVar Slider: collect settings
			if (settingtext != "") { settingtext += ", " };
			settingtext += '"' + sliderID + '" ' + sliderValue;
		}
	}
	// apply OTVar slider settings:
	body.style.setProperty("font-variation-settings", settingtext);
}