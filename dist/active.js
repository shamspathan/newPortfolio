/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./js/active.js":
/*!**********************!*\
  !*** ./js/active.js ***!
  \**********************/
/*! no static exports found */
/***/ (function(module, exports) {

(function ($) {
  'use strict';

  var browserWindow = $(window); // :: 1.0 Preloader Active Code

  browserWindow.on('load', function () {
    $('.preloader').fadeOut('slow', function () {
      $(this).remove();
    });
  }); // :: 2.0 Nav Active Code

  if ($.fn.classyNav) {
    $('#pixelNav').classyNav();
  } // :: 3.0 Sliders Active Code


  if ($.fn.owlCarousel) {
    var welcomeSlide = $('.hero-slideshow');
    var testiSlide = $('.testimonial-slides');
    welcomeSlide.owlCarousel({
      items: 1,
      loop: true,
      nav: true,
      navText: ['Prev', 'Next'],
      dots: false,
      autoplay: true,
      autoplayTimeout: 10000,
      smartSpeed: 500,
      animateIn: 'fadeIn',
      animateOut: 'fadeOut'
    });
    welcomeSlide.on('translate.owl.carousel', function () {
      var slideLayer = $("[data-animation]");
      slideLayer.each(function () {
        var anim_name = $(this).data('animation');
        $(this).removeClass('animated ' + anim_name).css('opacity', '0');
      });
    });
    welcomeSlide.on('translated.owl.carousel', function () {
      var slideLayer = welcomeSlide.find('.owl-item.active').find("[data-animation]");
      slideLayer.each(function () {
        var anim_name = $(this).data('animation');
        $(this).addClass('animated ' + anim_name).css('opacity', '1');
      });
    });
    $("[data-delay]").each(function () {
      var anim_del = $(this).data('delay');
      $(this).css('animation-delay', anim_del);
    });
    $("[data-duration]").each(function () {
      var anim_dur = $(this).data('duration');
      $(this).css('animation-duration', anim_dur);
    });
    testiSlide.owlCarousel({
      items: 1,
      loop: true,
      dots: true,
      autoplay: true,
      autoplayTimeout: 10000,
      smartSpeed: 500
    });
  } // :: 4.0 Masonary Gallery Active Code


  if ($.fn.imagesLoaded) {
    $('.pixel-portfolio').imagesLoaded(function () {
      // filter items on button click
      $('.portfolio-menu').on('click', 'button', function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({
          filter: filterValue
        });
      }); // init Isotope

      var $grid = $('.pixel-portfolio').isotope({
        itemSelector: '.single_gallery_item',
        percentPosition: true,
        masonry: {
          columnWidth: '.single_gallery_item'
        }
      });
    });
  } // :: 5.0 Gallery Menu Style Active Code


  $('.portfolio-menu button.btn').on('click', function () {
    $('.portfolio-menu button.btn').removeClass('active');
    $(this).addClass('active');
  }); // :: 6.0 Magnific Popup Active Code

  if ($.fn.magnificPopup) {
    $('.zoom-img').magnificPopup({
      type: 'image'
    });
  } // :: 7.0 ScrollUp Active Code


  if ($.fn.scrollUp) {
    browserWindow.scrollUp({
      scrollSpeed: 1500,
      scrollText: '<i class="fa fa-angle-up"></i> Top'
    });
  } // :: 8.0 CounterUp Active Code


  if ($.fn.counterUp) {
    $('.counter').counterUp({
      delay: 10,
      time: 2000
    });
  } // :: 9.0 Progress Bar Active Code


  if ($.fn.circleProgress) {
    $('#c1').circleProgress({
      size: 200,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ff7902',
      thickness: '5',
      reverse: true
    });
  }

  if ($.fn.circleProgress) {
    $('#c2').circleProgress({
      size: 200,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ff7902',
      thickness: '5',
      reverse: true
    });
  }

  if ($.fn.circleProgress) {
    $('#c3').circleProgress({
      size: 200,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ff7902',
      thickness: '5',
      reverse: true
    });
  }

  if ($.fn.circleProgress) {
    $('#c4').circleProgress({
      size: 200,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ff7902',
      thickness: '5',
      reverse: true
    });
  } // :: 10.0 Tooltip Active Code


  if ($.fn.tooltip) {
    $('[data-toggle="tooltip"]').tooltip();
  } // :: 11.0 Prevent Default a Click


  $('a[href="#"]').on('click', function ($) {
    $.preventDefault();
  }); // :: 12.0 Jarallax Active Code

  if ($.fn.jarallax) {
    $('.jarallax').jarallax({
      speed: 0.2
    });
  } // :: 13.0 Sticky Active Code


  if ($.fn.sticky) {
    $("#sticker").sticky({
      topSpacing: 0
    });
  } // :: 14.0 Wow Active Code


  if (browserWindow.width() > 767) {
    new WOW().init();
  }
})(jQuery);

/***/ }),

/***/ 0:
/*!****************************!*\
  !*** multi ./js/active.js ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/shams/shams/shamsPathan/newPortfolio/js/active.js */"./js/active.js");


/***/ })

/******/ });