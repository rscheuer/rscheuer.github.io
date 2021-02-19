var video;

var vScale = 16;
var slider;

var cols = 60;
var rows = 50;

var boxes = [];

var myting = [];

var str = "Click to invert.. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan est vehicula, condimentum purus nec, gravida sem. Vivamus nulla mauris, ornare sit amet turpis ut, commodo sagittis nisi. Etiam dignissim est id lectus posuere, a tincidunt metus varius. Nullam gravida, eros ut pellentesque elementum, turpis est dapibus ex, in placerat lacus lorem quis tortor. Phasellus quis accumsan ligula. Fusce at placerat diam, pharetra venenatis turpis. Quisque sit amet pretium lorem. Mauris erat eros, fringilla sit amet dui sit amet, lacinia pulvinar lectus. Quisque ultrices odio tellus, eu vulputate diam efficitur a. Aliquam lorem turpis, tincidunt et neque a, iaculis accumsan est. Integer eros leo, ultricies et blandit egestas, dictum id nulla. Morbi vel nisl sed metus imperdiet lacinia. Proin hendrerit ante eget arcu viverra, eu bibendum dolor vestibulum. Vestibulum luctus sagittis ipsum faucibus ultrices. Nulla dui dui, faucibus quis mauris at, imperdiet ornare metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam risus ut ligula laoreet imperdiet. Proin at maximus lacus. Sed sollicitudin eget sapien fermentum ullamcorper. Cras sagittis eget mi ut consectetur. Phasellus tincidunt ac arcu nec finibus. Aliquam nec quam eu quam vehicula fringilla sit amet at nulla. Aliquam faucibus vitae augue sollicitudin tempor. Mauris ut faucibus tortor. Pellentesque porttitor facilisis pretium. Vivamus et turpis eu augue fermentum varius eu vel lacus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam vitae mi massa. Sed tincidunt dolor quis feugiat ullamcorper. Nam convallis lorem quis enim sodales, at ultrices est convallis. Cras congue eu ligula vel facilisis. Pellentesque quis eros semper, dictum orci sit amet, fermentum eros. Morbi quis congue sem. Cras ut ex pellentesque, efficitur mi quis, ultricies neque. Ut nec ex nunc. Praesent laoreet nisl sem, a interdum orci consectetur nec. Nullam pretium dolor sed diam lacinia elementum a eu erat. Vivamus ex ex, ullamcorper sit amet placerat quis, faucibus mattis neque. Vivamus eget tempor augue. Donec eros turpis, cursus id velit euismod, sagittis malesuada nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan est vehicula, condimentum purus nec, gravida sem. Vivamus nulla mauris, ornare sit amet turpis ut, commodo sagittis nisi. Etiam dignissim est id lectus posuere, a tincidunt metus varius. Nullam gravida, eros ut pellentesque elementum, turpis est dapibus ex, in placerat lacus lorem quis tortor. Phasellus quis accumsan ligula. Fusce at placerat diam, pharetra venenatis turpis. Quisque sit amet pretium lorem. Mauris erat eros, fringilla sit amet dui sit amet, lacinia pulvinar lectus. Quisque ultrices odio tellus, eu vulputate diam efficitur a. Aliquam lorem turpis, tincidunt et neque a, iaculis accumsan est. Integer eros leo, ultricies et blandit egestas, dictum id nulla. Morbi vel nisl sed metus imperdiet lacinia. Proin hendrerit ante eget arcu viverra, eu bibendum dolor vestibulum. Vestibulum luctus sagittis ipsum faucibus ultrices. Nulla dui dui, faucibus quis mauris at, imperdiet ornare metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam risus ut ligula laoreet imperdiet. Proin at maximus lacus. Sed sollicitudin eget sapien fermentum ullamcorper. Cras sagittis eget mi ut consectetur. Phasellus tincidunt ac arcu nec finibus. Aliquam nec quam eu quam vehicula fringilla sit amet at nulla. Aliquam faucibus vitae augue sollicitudin tempor. Mauris ut faucibus tortor. Pellentesque porttitor facilisis pretium. Vivamus et turpis eu augue fermentum varius eu vel lacus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam vitae mi massa. Sed tincidunt dolor quis feugiat ullamcorper. Nam convallis lorem quis enim sodales, at ultrices est convallis. Cras congue eu ligula vel facilisis. Pellentesque quis eros semper, dictum orci sit amet, fermentum eros. Morbi quis congue sem. Cras ut ex pellentesque, efficitur mi quis, ultricies neque. Ut nec ex nunc. Praesent laoreet nisl sem, a interdum orci consectetur nec. Nullam pretium dolor sed diam lacinia elementum a eu erat. Vivamus ex ex, ullamcorper sit amet placerat quis, faucibus mattis neque. Vivamus eget tempor augue. Donec eros turpis, cursus id velit euismod, sagittis malesuada nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan est vehicula, condimentum purus nec, gravida sem. Vivamus nulla mauris, ornare sit amet turpis ut, commodo sagittis nisi. Etiam dignissim est id lectus posuere, a tincidunt metus varius. Nullam gravida, eros ut pellentesque elementum, turpis est dapibus ex, in placerat lacus lorem quis tortor. Phasellus quis accumsan ligula. Fusce at placerat diam, pharetra venenatis turpis. Quisque sit amet pretium lorem. Mauris erat eros, fringilla sit amet dui sit amet, lacinia pulvinar lectus. Quisque ultrices odio tellus, eu vulputate diam efficitur a. Aliquam lorem turpis, tincidunt et neque a, iaculis accumsan est. Integer eros leo, ultricies et blandit egestas, dictum id nulla. Morbi vel nisl sed metus imperdiet lacinia. Proin hendrerit ante eget arcu viverra, eu bibendum dolor vestibulum. Vestibulum luctus sagittis ipsum faucibus ultrices. Nulla dui dui, faucibus quis mauris at, imperdiet ornare metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam risus ut ligula laoreet imperdiet. Proin at maximus lacus. Sed sollicitudin eget sapien fermentum ullamcorper. Cras sagittis eget mi ut consectetur. Phasellus tincidunt ac arcu nec finibus. Aliquam nec quam eu quam vehicula fringilla sit amet at nulla. Aliquam faucibus vitae augue sollicitudin tempor. Mauris ut faucibus tortor. Pellentesque porttitor facilisis pretium. Vivamus et turpis eu augue fermentum varius eu vel lacus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam vitae mi massa. Sed tincidunt dolor quis feugiat ullamcorper. Nam convallis lorem quis enim sodales, at ultrices est convallis. Cras congue eu ligula vel facilisis. Pellentesque quis eros semper, dictum orci sit amet, fermentum eros. Morbi quis congue sem. Cras ut ex pellentesque, efficitur mi quis, ultricies neque. Ut nec ex nunc. Praesent laoreet nisl sem, a interdum orci consectetur nec. Nullam pretium dolor sed diam lacinia elementum a eu erat. Vivamus ex ex, ullamcorper sit amet placerat quis, faucibus mattis neque. Vivamus eget tempor augue. Donec eros turpis, cursus id velit euismod, sagittis malesuada nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan est vehicula, condimentum purus nec, gravida sem. Vivamus nulla mauris, ornare sit amet turpis ut, commodo sagittis nisi. Etiam dignissim est id lectus posuere, a tincidunt metus varius. Nullam gravida, eros ut pellentesque elementum, turpis est dapibus ex, in placerat lacus lorem quis tortor. Phasellus quis accumsan ligula. Fusce at placerat diam, pharetra venenatis turpis. Quisque sit amet pretium lorem. Mauris erat eros, fringilla sit amet dui sit amet, lacinia pulvinar lectus. Quisque ultrices odio tellus, eu vulputate diam efficitur a. Aliquam lorem turpis, tincidunt et neque a, iaculis accumsan est. Integer eros leo, ultricies et blandit egestas, dictum id nulla. Morbi vel nisl sed metus imperdiet lacinia. Proin hendrerit ante eget arcu viverra, eu bibendum dolor vestibulum. Vestibulum luctus sagittis ipsum faucibus ultrices. Nulla dui dui, faucibus quis mauris at, imperdiet ornare metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam risus ut ligula laoreet imperdiet. Proin at maximus lacus. Sed sollicitudin eget sapien fermentum ullamcorper. Cras sagittis eget mi ut consectetur. Phasellus tincidunt ac arcu nec finibus. Aliquam nec quam eu quam vehicula fringilla sit amet at nulla. Aliquam faucibus vitae augue sollicitudin tempor. Mauris ut faucibus tortor. Pellentesque porttitor facilisis pretium. Vivamus et turpis eu augue fermentum varius eu vel lacus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam vitae mi massa. Sed tincidunt dolor quis feugiat ullamcorper. Nam convallis lorem quis enim sodales, at ultrices est convallis. Cras congue eu ligula vel facilisis. Pellentesque quis eros semper, dictum orci sit amet, fermentum eros. Morbi quis congue sem. Cras ut ex pellentesque, efficitur mi quis, ultricies neque. Ut nec ex nunc. Praesent laoreet nisl sem, a interdum orci consectetur nec. Nullam pretium dolor sed diam lacinia elementum a eu erat. Vivamus ex ex, ullamcorper sit amet placerat quis, faucibus mattis neque. Vivamus eget tempor augue. Donec eros turpis, cursus id velit euismod, sagittis malesuada nunc.";
// var str = "BORN TO DIE / WORLD IS A FUCK / Kill Em All 1989 / I am trash man / 410,757,864,530 DEAD COPS ";
// var str = "Arbitrary Gaming: A Retrospective of Urban Experience, Mediating Dilettantes: Deconstructing Aesthetic Forms and Their Opposites, "
// str = str.repeat(100);
// var res = str.split("");
var res = str.match(/.{1,2}/g)

function setup() {
  noCanvas();
  pixelDensity(1);
  video = createCapture(VIDEO);
  video.size(cols, rows);
  video.hide();
  // slider = createSlider(0, 255, 77);

  for (var y = 0; y < rows; y++) {
    for (var x = 0; x < cols; x++) {
      // var box = createCheckbox();
      var ce = x + y * cols;
      // var box = createSpan('--');
      var box = createSpan(res[ce]);
      box.style('display', 'inline');
      box.addClass('letter');
      box.parent('mirror');
      boxes.push(box);
    }
    var linebreak = createSpan('<br/>');
    linebreak.parent('mirror');
  }

  // var op = createSpan();
  // op.parent('output');
  // myting.push(op);
}

function draw() {
  video.loadPixels();
  // myting[0].html(mouseY);
  for (var y = 0; y < video.height; y++) {
    for (var x = 0; x < video.width; x++) {
      var index = (video.width - x + 1 + y * video.width) * 4;
      var r = video.pixels[index + 0];
      var g = video.pixels[index + 1];
      var b = video.pixels[index + 2];

      var bright = (r + g + b) / 3;

      // var threshold = slider.value();
      var threshold = map(mouseY, 0, 1000, 0, 255, [0,255]);

      var checkIndex = x + y * cols;

      if (bright > threshold) {
        // boxes[checkIndex].checked(false);
        
        // boxes[checkIndex].html(res[checkIndex])
        // boxes[checkIndex].style('font-weight', 100);
        boxes[checkIndex].removeClass('bold');
        // boxes[checkIndex].style('color','grey');
      } else {
        // boxes[checkIndex].checked(true);
        // boxes[checkIndex].html('..')
        // boxes[checkIndex].html(res[checkIndex])
        // boxes[checkIndex].style('font-weight', 800);
        boxes[checkIndex].addClass('bold')
        // boxes[checkIndex].style('color','darkgrey');
      }
    }
  }
}