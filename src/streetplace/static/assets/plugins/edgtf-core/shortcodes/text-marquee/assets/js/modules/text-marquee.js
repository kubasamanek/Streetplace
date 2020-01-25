(function ($) {
    'use strict';

    var textMarquee = {};
    edgtf.modules.textMarquee = textMarquee;

    textMarquee.edgtfInitTextMarquee = edgtfInitTextMarquee;

    textMarquee.edgtfOnDocumentReady = edgtfOnDocumentReady;

    $(document).ready(edgtfOnDocumentReady);

    /*
     All functions to be called on $(document).ready() should be in this function
     */
    function edgtfOnDocumentReady() {
        edgtfInitTextMarquee();
    }

    /**
     * Init Text Marquee effect
     */
    function edgtfInitTextMarquee() {
        var textMarqueeShortcodes = $('.edgtf-text-marquee');

        if (textMarqueeShortcodes.length) {
            textMarqueeShortcodes.each(function () {
                var textMarqueeShortcode = $(this),
                    marqueeElements = textMarqueeShortcode.find('.edgtf-marquee-element'),
                    originalText = marqueeElements.filter('.edgtf-original-text'),
                    auxText = marqueeElements.filter('.edgtf-aux-text');

                var calcWidth = function (element) {
                    var width;

                    if (textMarqueeShortcode.outerWidth() > element.outerWidth()) {
                        width = textMarqueeShortcode.outerWidth();
                    } else {
                        width = element.outerWidth();
                    }

                    return width;
                };

                var marqueeEffect = function () {
                    edgtfRequestAnimationFrame();

                    var delta = 1, //pixel movement
                        speedCoeff = 0.8, // below 1 to slow down, above 1 to speed up
                        marqueeWidth = calcWidth(originalText);

                    marqueeElements.css({'width': marqueeWidth}); // set the same width to both elements
                    auxText.css('left', marqueeWidth); //set to the right of the initial marquee element

                    //movement loop
                    marqueeElements.each(function (i) {
                        var marqueeElement = $(this),
                            currentPos = 0;

                        var edgtfInfiniteScrollEffect = function () {
                            currentPos -= delta;

                            //move marquee element
                            if (marqueeElement.position().left <= -marqueeWidth) {
                                marqueeElement.css('left', parseInt(marqueeWidth - delta));
                                currentPos = 0;
                            }

                            marqueeElement.css('transform', 'translate3d(' + speedCoeff * currentPos + 'px,0,0)');

                            requestNextAnimationFrame(edgtfInfiniteScrollEffect);

                            $(window).resize(function () {
                                marqueeWidth = calcWidth(originalText);
                                currentPos = 0;
                                originalText.css('left', 0);
                                auxText.css('left', marqueeWidth); //set to the right of the inital marquee element
                            });
                        };

                        edgtfInfiniteScrollEffect();
                    });
                };

                marqueeEffect();
            });
        }
    }

    /*
     * Request Animation Frame shim
     */
    function edgtfRequestAnimationFrame() {
        window.requestNextAnimationFrame =
            (function () {
                    var originalWebkitRequestAnimationFrame = undefined,
                        wrapper = undefined,
                        callback = undefined,
                        geckoVersion = 0,
                        userAgent = navigator.userAgent,
                        index = 0,
                        self = this;

                    // Workaround for Chrome 10 bug where Chrome
                    // does not pass the time to the animation function

                    if (window.webkitRequestAnimationFrame) {
                        // Define the wrapper

                        wrapper = function (time) {
                            if (time === undefined) {
                                time = +new Date();
                            }

                            self.callback(time);
                        };

                        // Make the switch

                        originalWebkitRequestAnimationFrame = window.webkitRequestAnimationFrame;

                        window.webkitRequestAnimationFrame = function (callback, element) {
                            self.callback = callback;

                            // Browser calls the wrapper and wrapper calls the callback
                            originalWebkitRequestAnimationFrame(wrapper, element);
                        };
                    }

                    // Workaround for Gecko 2.0, which has a bug in
                    // mozRequestAnimationFrame() that restricts animations
                    // to 30-40 fps.

                    if (window.mozRequestAnimationFrame) {
                        // Check the Gecko version. Gecko is used by browsers
                        // other than Firefox. Gecko 2.0 corresponds to
                        // Firefox 4.0.

                        index = userAgent.indexOf('rv:');

                        if (userAgent.indexOf('Gecko') !== -1) {
                            geckoVersion = userAgent.substr(index + 3, 3);

                            if (geckoVersion === '2.0') {
                                // Forces the return statement to fall through
                                // to the setTimeout() function.

                                window.mozRequestAnimationFrame = undefined;
                            }
                        }
                    }

                    return window.requestAnimationFrame ||
                        window.webkitRequestAnimationFrame ||
                        window.mozRequestAnimationFrame ||
                        window.oRequestAnimationFrame ||
                        window.msRequestAnimationFrame ||

                        function (callback, element) {
                            var start,
                                finish;

                            window.setTimeout(function () {
                                start = +new Date();
                                callback(start);
                                finish = +new Date();

                                self.timeout = 1000 / 60 - (finish - start);

                            }, self.timeout);
                        };
                })();
    }

})(jQuery);