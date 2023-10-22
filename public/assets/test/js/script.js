

(function() {
  var lastTime = 0;
  var vendors = ['ms', 'moz', 'webkit', 'o'];
  for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
      window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
      window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame']
                                 || window[vendors[x]+'CancelRequestAnimationFrame'];
  }

  if (!window.requestAnimationFrame)
      window.requestAnimationFrame = function(callback, element) {
          var currTime = new Date().getTime();
          var timeToCall = Math.max(0, 16 - (currTime - lastTime));
          var id = window.setTimeout(function() { callback(currTime + timeToCall); },
            timeToCall);
          lastTime = currTime + timeToCall;
          return id;
      };

  if (!window.cancelAnimationFrame)
      window.cancelAnimationFrame = function(id) {
          clearTimeout(id);
      };
}());

;(function() {
  if (typeof window.CustomEvent === "function") return false

  function CustomEvent(event, params) {
    params = params || { bubbles: false, cancelable: false, detail: undefined }
    var evt = document.createEvent("CustomEvent")
    evt.initCustomEvent(event, params.bubbles, params.cancelable, params.detail)
    return evt
  }

  CustomEvent.prototype = window.Event.prototype

  window.CustomEvent = CustomEvent
})();

/*
 * Navigation logic
 */

(function() {
  $('.navigation__hamburger').on('click', function() {
    $('.navigation__hamburger').toggleClass('navigation__hamburger--active');
    $('#main-navigation').toggleClass('active');
    $('.navigation__mobile').toggleClass('active');
  });

  $('.navigation__list-item').on('click', function() {
    $('.navigation__hamburger').removeClass('navigation__hamburger--active');
    $('#main-navigation').removeClass('active');
    $('.navigation__mobile').removeClass('active');
  });

  $('.header').css({paddingTop: $('#main-navigation').innerHeight()});

  $(window).on('resize', function() {
    $('.header').css({paddingTop: $('#main-navigation').innerHeight()});
    $('#main-navigation').removeClass('navigation--scrolled');
  });

  $(window).on('scroll', function() {
    if(window.innerWidth > 991) {
      if($(window).scrollTop() > 200) {
        $('#main-navigation').addClass('navigation--scrolled');
      } else {
        $('#main-navigation').removeClass('navigation--scrolled');
      }
    }
  });
})();


/*
 * Smooth scroll logic
 */

(function() {
  var calculateOffset = function() {
    return $('#main-navigation').innerHeight();
  }

  var SCROLL_LINK = 'a[href*="#"]';
  var scroll = new SmoothScroll(SCROLL_LINK, {
    speed: 300,
    speedAsDuration: true,
    offset: calculateOffset()
  });

  $(window).on('resize', function() {
    scroll.destroy();
    scroll = new SmoothScroll(SCROLL_LINK, {
      speed: 300,
      speedAsDuration: true,
      offset: calculateOffset()
    });
  });
})();


/*
 * Scroll spy logic
 */

(function() {
  var spy = new Gumshoe('#main-navigation a', {
    offset: $('#main-navigation').innerHeight(),
  });
})();
