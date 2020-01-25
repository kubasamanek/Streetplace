(function ($) {
    'use strict';

    var separator = {};
    edgtf.modules.separator = separator;

    separator.edgtfInitSeparators = edgtfInitSeparators;
    separator.edgtfOnDocumentReady = edgtfOnDocumentReady;

    $(document).ready(edgtfOnDocumentReady);

    /*
     All functions to be called on $(document).ready() should be in this function
     */
    function edgtfOnDocumentReady(){
        edgtfInitSeparators();
    }
    
    function edgtfInitSeparators() {
        var separator = $('.edgtf-separator-holder');

        if (separator.length){
            separator.each(function (){
                var thisSeparator = $(this);

                thisSeparator.appear(function () {
                    thisSeparator.addClass('edgtf-separator-appeared');
                }, {accX: 0, accY: edgtfGlobalVars.vars.edgtfElementAppearAmount});
            });
        }
    }

})(jQuery);