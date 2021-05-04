var circles = [];
let img;
var pixelsPerFrame=20;
var growthSpeed=0.1;
let input;

function preload() {
  // imgT = loadImage("img.jpg");
  // print(imgT);
}

function handleFile(file) {
  // print(file);
  if (file.type === 'image') {
    // var img2 = createImg(file.data, '');
    // img2.hide();

    loadImage(file.data, im => {
      image(im, 0, 0);
      im.loadPixels();
      print(im.width + " " + im.height)
      img = im;
      reset();
    });

    
    // print(i2.height)
    // print(h)
    // redraw();
  } else {
    img = null;
  }
}

function setup() {
  createCanvas(200,200);
  input = createFileInput(handleFile);
  input.position(0, 0);
  reset();
}

function reset(){
  if (img) {
    print("made canvas: " + img.width + " " + img.height)
    // createCanvas(img.width,img.height);
    resizeCanvas(img.width,img.height);
    var density = displayDensity();
    pixelDensity(1);
    img.loadPixels();
    circles = [];
  }
  else{
    print('no IMG');
  }
}

function draw() {
  background('white');

  var total = pixelsPerFrame;
  var count = 0;
  var attempts = 0;

  if(img){
    while (count < total) {
      var newC = newCircle();
      if (newC !== null) {
        circles.push(newC);
        count++;
      }
      attempts++;
      if (attempts > 1000) {
        noLoop();
        console.log("finished");
        break;
      }
    }
  

    for (var i = 0; i < circles.length; i++) {
      var circle = circles[i];

      if (circle.growing) {
        if (circle.edges()) {
          circle.growing = false;
        } else {
          for (var j = 0; j < circles.length; j++) {
            var other = circles[j];
            if (circle !== other) {
              var d = dist(circle.x, circle.y, other.x, other.y);
              var distance = circle.r + other.r;

              if (d - 1 < distance) {
                circle.growing = false;
                break;
              }
            }
          }
        }
      }

      circle.show();
      circle.grow();
    }

  }
}

function newCircle() {
  if(img){

  
  var x = random(0, img.width);
  var y = random(0, img.height);

  var valid = true;
  for (var i = 0; i < circles.length; i++) {
    var circle = circles[i];
    var d = dist(x, y, circle.x, circle.y);
    if (d - 2 < circle.r) {
      valid = false;
      break;
    }
  }
  if (valid) {
    var index = (int(x) + int(y) * img.width) * 4;
    var r = img.pixels[index];
    var g = img.pixels[index+1];
    var b = img.pixels[index+2];
    var c = color(r,g,b);
    return new Circle(x, y, color(c));
  } else {
    return null;
  }
}
}