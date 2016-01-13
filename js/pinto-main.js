/**
 * @file
 * Pinto Image Formatter integration javascript.
 */

(function ($) {
  'use strict';
  $(window).load(function () {
    $('.field-pinto *:not([class^="pinto-"])').contents().unwrap();
  });
})(window.jQuery);
