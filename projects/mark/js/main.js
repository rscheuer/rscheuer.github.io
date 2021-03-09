// const scroller = new LocomotiveScroll({
//   el: document.querySelector('[data-scroll-container]'),
//   smooth: true
// });

  window.onload = function () {
    Marquee3k.init();

    lax.init()

    // Add a driver that we use to control our animations
    lax.addDriver('scrollY', function () {
      return window.scrollY
    })

    // Add animation bindings to elements
    lax.addElements('.selector', {
      scrollY: {
        translateY: [
          ["elInY", "elCenterY", "elOutY"],
          [0, '-screenHeight/10', '-screenHeight/4'],
        ]
      }
    })
  }

