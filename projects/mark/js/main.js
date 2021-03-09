
  window.onload = function () {
    Marquee3k.init()

    lax.init()

    // Add a driver that we use to control our animations
    lax.addDriver('scrollY', function () {
      return window.scrollY
    })

    // Add animation bindings to elements
    lax.addElements('sauce', {
      scrollY: {
        scaleY: [
          ["elInY", "elOutY"],
          [10, 1],
        ]
      }
    })
  }
