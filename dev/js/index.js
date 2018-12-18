src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"

function vidPlay() {  
    video1.play();  
} 
function vidPause() {
	video1.pause();
}



var yourImageSources = new Array();

$("a").each(function()
{
    yourImageSources.push($(this).attr("data-src"));
    console.log('size: '+yourImageSources.length);
    
    $('<img src="' + $('a',this).attr('data-src') +'"/>');
});

console.log(yourImageSources.toString())

function preload(arrayOfImages) {
    $(arrayOfImages).each(function () {
        $('<img />').attr('src',this).appendTo('body').css('display','none');
        console.log('preloaded');
    });
}

preload(yourImageSources);

