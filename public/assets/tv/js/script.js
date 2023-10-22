/*
 * Polyfills
 */

Number.isNaN = Number.isNaN || function(value) {
  return typeof value === 'number' && isNaN(value);
};

if ('NodeList' in window && !NodeList.prototype.forEach) {
  console.info('polyfill for IE11');
  NodeList.prototype.forEach = function (callback, thisArg) {
    thisArg = thisArg || window;
    for (var i = 0; i < this.length; i++) {
      callback.call(thisArg, this[i], i, this);
    }
  };
}

if (!Array.prototype.includes) {
  Object.defineProperty(Array.prototype, "includes", {
    enumerable: false,
    value: function(obj) {
        var newArr = this.filter(function(el) {
          return el == obj;
        });
        return newArr.length > 0;
      }
  });
}

if (!Element.prototype.matches) {
  Element.prototype.matches = Element.prototype.msMatchesSelector ||
                              Element.prototype.webkitMatchesSelector;
}

if (!Element.prototype.closest) {
  Element.prototype.closest = function(s) {
    var el = this;

    do {
      if (Element.prototype.matches.call(el, s)) return el;
      el = el.parentElement || el.parentNode;
    } while (el !== null && el.nodeType === 1);
    return null;
  };
}

// http://paulirish.com/2011/requestanimationframe-for-smart-animating/
// http://my.opera.com/emoller/blog/2011/12/20/requestanimationframe-for-smart-er-animating

// requestAnimationFrame polyfill by Erik Möller. fixes from Paul Irish and Tino Zijdel

// MIT license

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
 * Scroll spy logic
 */

(function() {
  var spy = new Gumshoe('#main-navigation a', {
    offset: $('#main-navigation').innerHeight(),
  });
})();


/*
 * Constructor logic
 */

(function() {
  var DEFAULT_OPTIONS = {
    currentStep: 0,
    progressBarPercentage: 0,
    prevStepSelector: '.constructor__actions-prev',
    nextStepSelector: '.constructor__actions-next',
    headings: [
      'Какая у вас модель телевизора?',
      'Какова причина поломки?',
      'Какая диагональ экрана?',
      'Был ли телевизор в ремонте?',
      'Сколько лет телевизору?',
      'Остался последний шаг'
    ]
  };


  function _instanceof(left, right) { if (right != null && typeof Symbol !== "undefined" && right[Symbol.hasInstance]) { return !!right[Symbol.hasInstance](left); } else { return left instanceof right; } }

  function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

  function _classCallCheck(instance, Constructor) { if (!_instanceof(instance, Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

  var Constructor = /*#__PURE__*/function () {
    function Constructor(options) {
      _classCallCheck(this, Constructor);

      if (options === undefined) options = DEFAULT_OPTIONS;
      this.currentStep = options.currentStep;
      this.progressBarPercentage = options.progressBarPercentage;
      this.prevStepSelector = options.prevStepSelector;
      this.nextStepSelector = options.nextStepSelector;
      this.headings = options.headings;
      this.maxSteps = options.headings.length;
      this.init();
    }

    _createClass(Constructor, [{
      key: "listenToClickPrevButton",
      value: function listenToClickPrevButton(selector) {
        $(selector).on('click', function () {
          this.prevStep();
        }.bind(this));
      }
    }, {
      key: "listenToClickNextButton",
      value: function listenToClickNextButton(selector) {
        $(selector).on('click', function () {
          this.nextStep();
        }.bind(this));
      }
    }, {
      key: "listenToClickAnswer",
      value: function listenToClickAnswer() {
        $('.constructor__answers-list-item').on('click', function (e) {
          this.changeNextButtonColor();
        }.bind(this));
      }
    }, {
      key: "listenToInputChange",
      value: function listenToInputChange() {
        $('.constructor__answers-list-item').find('input[type="text"]').on('input', function(e) {
          this.changeNextButtonColor();
        }.bind(this));
      }
    }, {
      key: "createProgressBar",
      value: function createProgressBar() {
        var createElement = function createElement(tag, attributes) {
          if (tag === undefined) throw Error('"tag" argument can\'t be undefined');

          var camelCaseToDash = function camelCaseToDash(str) {
            return str.replace(/[^a-zA-Z0-9]+/g, '-').replace(/([A-Z]+)([A-Z][a-z])/g, '$1-$2').replace(/([a-z])([A-Z])/g, '$1-$2').replace(/([0-9])([^0-9])/g, '$1-$2').replace(/([^0-9])([0-9])/g, '$1-$2').replace(/-+/g, '-').toLowerCase();
          };

          var element = document.createElement(tag);

          if (attributes !== undefined && _typeof(attributes) === 'object') {
            for (var key in attributes) {
              var normalizedAttrName = camelCaseToDash(key);
              element.setAttribute(normalizedAttrName, attributes[key]);
            }
          }

          for (var _len = arguments.length, children = new Array(_len > 2 ? _len - 2 : 0), _key = 2; _key < _len; _key++) {
            children[_key - 2] = arguments[_key];
          }

          if (children.length > 0) {
            var _$;

            (_$ = $(element)).append.apply(_$, children);
          }

          return element;
        };

        for (var i = 0; i < this.maxSteps - 1; i++) {
          var bar = createElement('div', {
            class: 'constructor__progress-dummy'
          }, createElement('div', {
            class: 'constructor__progress-dummy-inner'
          }));
          $('.constructor__progress').append(bar);
        }
      }
    }, {
      key: "init",
      value: function init() {
        var currentStep = this.currentStep;
        var maxSteps = this.maxSteps;
        $('#constructor-current').text(currentStep + 1);
        $('#constructor-header-max').text(maxSteps);
        $('#constructor-max').text(maxSteps);
        this.listenToClickAnswer();
        this.listenToInputChange();
        this.listenToClickPrevButton(this.prevStepSelector);
        this.listenToClickNextButton(this.nextStepSelector);
        this.createProgressBar();
        this.updateProgress();
      }
    }, {
      key: "prevStep",
      value: function prevStep() {
        var currentStep = this.currentStep;
        if (currentStep < 1) return;
        this.currentStep = currentStep - 1;
        this.progressBarPercentage = this.currentStep / this.maxSteps * 100;
        this.updateProgress();
        return this.currentStep;
      }
    }, {
      key: "nextStep",
      value: function nextStep() {
        var currentStep = this.currentStep;
        var maxSteps = this.maxSteps;
        if (currentStep >= maxSteps || !this.isCurrentStepValid()) return;
        this.currentStep = currentStep + 1;
        this.progressBarPercentage = this.currentStep / this.maxSteps * 100;
        this.updateProgress();
        return this.currentStep;
      }
    }, {
      key: "isCurrentStepValid",
      value: function isCurrentStepValid() {
        var currentStep = this.currentStep;
        var radiosInStep = $('.constructor__answers-list-item').eq(currentStep).find('input[type="radio"]').length;
        if (!radiosInStep) {
          if($('.constructor__answers-list-item').eq(currentStep).find('input[type="text"]').val() === "")
            return false;
          else
            return true;
        }
        var checkedRadiosAmount = $('.constructor__answers-list-item').eq(currentStep).find('input:checked').length;
        if (checkedRadiosAmount) return true;
        return false;
      }
    }, {
      key: "changeNextButtonColor",
      value: function changeNextButtonColor() {
        var isValid = this.isCurrentStepValid();
        if (isValid) $(this.nextStepSelector).addClass('constructor__actions-next--valid');else $(this.nextStepSelector).removeClass('constructor__actions-next--valid');
      }
    }, {
      key: "updateProgressBar",
      value: function updateProgressBar() {
        var currentStep = this.currentStep;
        var maxSteps = this.maxSteps;

        for (var i = 0; i < currentStep; i++) {
          $('.constructor__progress-dummy').eq(i).addClass('constructor__progress-dummy--active');
        }

        for (var _i = currentStep; _i < maxSteps; _i++) {
          $('.constructor__progress-dummy').eq(_i).removeClass('constructor__progress-dummy--active');
        }
      }
    }, {
      key: "updateProgress",
      value: function updateProgress() {
        var currentStep = this.currentStep;
        var maxSteps = this.maxSteps;
        var headings = this.headings;
        var progressBarPercentage = this.progressBarPercentage;
        $('#constructor-current').text(this.currentStep + 1);
        $('.constructor__question').text(headings[currentStep]);
        $('.constructor__answers-list-item').eq(currentStep).addClass('constructor__answers-list-item--active').siblings().removeClass('constructor__answers-list-item--active');

        if (currentStep === maxSteps - 1) {
          $('.constructor__current').hide();
          $('.constructor__footer').hide();
        }

        this.updateProgressBar();
        this.changeNextButtonColor();
      }
    }, {
      key: "showThanks",
      value: function showThanks() {
        $('.constructor__current').hide();
        $('.constructor__question').hide();
        $('.constructor__answers-list').hide();
        $('.constructor__footer').hide();
        $('.constructor__thanks').show().css({
          display: 'flex'
        });
      }
    }]);

    return Constructor;
  }();

  var constructor = new Constructor();
  return constructor;
})();


/*
 * Slider logic
 */

(function() {
  var SWIPER_CONFIG = {
    loop: true,
    observer: true,
    observeParents: true,
    slidesPerView: 2,
    navigation: {
      nextEl: '.swiper-button-next-unique',
      prevEl:'.swiper-button-prev-unique',
    },
    spaceBetween: 30,
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      // when window width is >= 640px
      768: {
        slidesPerView: 2
      }
    }
  };

  var mySwiper = new Swiper('#certs-slider', SWIPER_CONFIG);

  $(window).on('resize', function() {
    mySwiper.destroy();
    mySwiper = new Swiper('#certs-slider', SWIPER_CONFIG);
  });
})();
