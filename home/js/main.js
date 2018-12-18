$(document).ready(showLetter);


imgCount = 8;

//methods

function generateRandom() {
    //lets do it based on percentage!!!
    var num = Math.floor(Math.random() * 90);
    return num;
}

function showLetter() {
    	console.log("test");
    	for (i = 0; i < imgCount; i++) {
    		var left = generateRandom();
    		var top = generateRandom();
    		console.log("left: " + left + " ,top: " + top);
    		$(".draggable").next().css({"top": top + "vh", "left": left + "vw"});
    	}
    	
    	
    	
    }

