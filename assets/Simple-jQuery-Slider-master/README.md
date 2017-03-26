# Simple jQuery Slider
[Example / Documentation](http://loganstellway.github.io/projects/simple-jquery-slider/)


A basic jQuery plugin that loops through specified elements with callback options, and several other parameters such as the addition of bullets and navigation arrows. Also features the ability to listen to the window hash, allowing one to link to a specified slide.

* * *

# Documentation
#### options [](#Options)

A map of options to pass to the $.simpleSlide() method.

*   **auto** (default `false`)

        *   Type: [Boolean](http://api.jquery.com/Types/#Boolean)
    *   Determines whether to automate the slideshow
*   **autoTime** (default `400`)

        *   Type: [Number](http://api.jquery.com/Types/#Number)
    *   The time between slides in an automated slideshow
*   **autoInteraction** (default `false`)

        *   Type: [Boolean](http://api.jquery.com/Types/#Boolean)
    *   Determines whether or not to continue automatically playing slideshow after a user interacts (with bullets or arrows).
*   **arrows** (default `true`)

        *   Type: [Boolean](http://api.jquery.com/Types/#Boolean)
    *   Determines whether or not to append arrow `<a />` elements to the slideshow
*   **bullets** (default `false`)

        *   Type: [Boolean](http://api.jquery.com/Types/#Boolean)
    *   Determines whether or not to append bullets to the slideshow
*   **transitionTime** (default `500`)

        *   Type: [Number](http://api.jquery.com/Types/#Number)
    *   The amount of time it takes to transition between slides
*   **hashChange** (default `true`)

        *   Type: [Boolean](http://api.jquery.com/Types/#Boolean)
    *   Determines if the slideshow should listen to 'hashchange' event. Hash format example: `#slide-0`
*   **slideSelector** (default `'.slide'`)

        *   Type: [String](http://api.jquery.com/Types/#String)
    *   Selector string for slide elements

#### event callbacks [](#Callbacks)

Functions that can be fired when different events in the slideshow occur

*   **onInitiate()**

        *   Type: [Function()](http://api.jquery.com/Types/#Function)
    *   Occurs when the slideshow is initiated
*   **onBeforeSlide()**

        *   Type: [Function()](http://api.jquery.com/Types/#Function)
    *   Occurs before the slide changes
*   **onSlideStart()**

        *   Type: [Function()](http://api.jquery.com/Types/#Function)
    *   Occurs when a new slide appears
*   **onAfterSlide()**

        *   Type: [Function()](http://api.jquery.com/Types/#Function)
    *   Occurs after a new slide finishes animating
*   **onBulletClick()**

        *   Type: [Function()](http://api.jquery.com/Types/#Function)
    *   Occurs when a bullet is clicked
*   **onArrowClick()**

        *   Type: [Function()](http://api.jquery.com/Types/#Function)
    *   Occurs when either arrow element is clicked
*   **onPreviousClick()**

        *   Type: [Function()](http://api.jquery.com/Types/#Function)
    *   Occurs when the 'previous' arrow is clicked
*   **onNextClick()**

        *   Type: [Function()](http://api.jquery.com/Types/#Function)
    *   Occurs when the 'next' arrow is clicked