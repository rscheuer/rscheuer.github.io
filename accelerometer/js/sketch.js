var canvas;
let r, g, b;

function windowResized(){
	resizeCanvas(windowWidth, windowHeight);
}

function setup(){
	canvas = createCanvas(windowWidth, windowHeight);
	canvas.position(0,0);
	canvas.style('z-index', '-1');
//	background(220);
	r = random(50, 255);
	g = random(0, 200);
	b = random(50, 255);
}


function draw(){
	strokeWeight(30); // Thicker
	stroke(r, g, b);
	if (mouseIsPressed){
			line(pmouseX, pmouseY, mouseX, mouseY);
	}
	
}

function mouseClicked() {
	console.log("click");
  r = random(255);
  g = random(255);
  b = random(255);
}


function deviceMoved() {   
    r = map(accelerationX, -8, 8, 0, 255);
    g = map(accelerationY, -2, 2, 0, 200);
    b = map(accelerationZ, -5, 5, 1, 255);   
//    text('I WAS MOVED!: ' + accelerationX, width/2, height/2);
}
