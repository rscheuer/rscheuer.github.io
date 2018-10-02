$(document).ready(showLetter);
//$(document).click(function(){
//    $( "div.img-container" ).remove();
//    showLetter();
//});

//$(document).ready(function() {
//    $("#scene").click(function() {
//        console.log("clicked");
//    });
//});

$(document).ready(function(){
    $("h1").click(function(){
        $( "div.img-container" ).remove();
        showLetter();
    });
});

//methods

var imgsArray = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10","11", "12", "13", "14", "15", "16", "17", "18"];

function generateRandomForArray() {
    var num = Math.floor(Math.random() * imgsArray.length);
    return num;
}

function generateRandom() {
    //lets do it based on percentage!!!
    var num = Math.floor(Math.random() * 90);
    return num;
}

function showLetter() {
    //var letter = imgsArray[generateRandomForArray()];
    //$("div").append("<img class='img-small' src='/imgs/" + letter + ".jpg'>");
    
    
    for (i = 1; i < imgsArray.length; i++) {
    		var letter = imgsArray[i];
    		var randomDepth = Math.random();
    		$(".big-container").append("<div id='draggable' class='img-container'><img class='img-small' src='/img2/" + letter + ".png'></div>");
    		var left = generateRandom();
    		var top = generateRandom();
    		console.log("left: " + left + ", top: " + top);
    		$("img").last().css({"top": top + "vh", "left": left + "%"});
    		//old css based on pixels
    		//$("img").last().css({"top": top + "px", "left": left + "px"});
    }
    
    var randomDepth = Math.random();
    $(".big-container").append("<div class='img-container' data-depth='" + randomDepth + "'><img class='img-small' src='/img2/earth.gif'></div>");
    var left = generateRandom();
    var top = generateRandom();
    console.log("left: " + left + ", top: " + top);
    $("img").last().css({"top": top + "vh", "left": left + "%"});
    
    $( ".img-small" ).draggable();
//    var left = generateRandom();
//    var top = generateRandom();
//    $("img").last().css({"top": top + "px", "left": left + "px"});
	
	
}
