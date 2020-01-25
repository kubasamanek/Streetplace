(function ($) {
    'use strict';

    var iconWithText = {};
    edgtf.modules.iconWithText = iconWithText;

    iconWithText.edgtfInitIconWithText = edgtfInitIconWithText;


    iconWithText.edgtfOnDocumentReady = edgtfOnDocumentReady;

    $(document).ready(edgtfOnDocumentReady);

    /*
     All functions to be called on $(document).ready() should be in this function
     */
    function edgtfOnDocumentReady() {
        edgtfInitIconWithText();
    }

    /*
     **	Init Icon w/ Text shortcode
     */
    function edgtfInitIconWithText() {
        var holder = $('.edgtf-iwt-svg-path');

        if (holder.length) {
            holder.each(function () {
                var type = $(this).data('animation-type'),
                    duration = $(this).data('animation-duration'),
                    durationDelay = '',
                    reverse = '',
                    strokeWidth = '',
                    strokeColor = '',
                    selector = '',
                    customStyle = '',
                    style = '';

                if (typeof $(this).data('animation-duration-delay') !== 'undefined') {
                    durationDelay = $(this).data('animation-duration-delay');
                }

                if (typeof $(this).data('animation-reverse') !== 'undefined') {
                    reverse = $(this).data('animation-reverse');
                }

                if (typeof $(this).data('stroke-width') !== 'undefined') {
                    strokeWidth = $(this).data('stroke-width');
                }

                if (typeof $(this).data('stroke-color') !== 'undefined') {
                    strokeColor = $(this).data('stroke-color');
                }

                new Vivus($(this).find('.edgtf-animated-svg').attr('id'), {
                    type: type,
                    duration: duration,
                    delay: durationDelay,
                    reverseStack: reverse,
                });

                if (strokeWidth > 0 || strokeColor.length) {
                    selector = '#' + $(this).find('.edgtf-animated-svg').attr('id') + ' path';

                    if (strokeWidth > 0) {
                        customStyle += 'stroke-width:' + strokeWidth + 'px;';
                    }

                    if (strokeColor.length) {
                        customStyle += 'stroke:' + strokeColor + ';';
                    }
                }

                if (customStyle.length) {
                    style = '<style type="text/css">' + selector + '{' + customStyle + '}</style>';
                }

                if (style.length) {
                    $('head').append(style);
                }
            });
        }
    }

})(jQuery);