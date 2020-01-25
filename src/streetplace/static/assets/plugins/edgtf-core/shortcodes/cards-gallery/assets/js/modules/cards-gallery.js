/**
 * Cards Gallery shortcode
 */

function edgtfBundleAnimation(item, holder) {
    if (holder.hasClass('edgtf-bundle-animation')) {
        var stop = false;
        var card_inner = item.find('.edgtf-bundle-item');
        card_inner.css('left', card_inner.data('bundle-move-left'));

        var update = function () {
            var percentage = ((edgtf.windowHeight - item[0].getBoundingClientRect().left) * 100) / (edgtf.windowHeight / 2);
            if (!stop && item[0].getBoundingClientRect().left <= edgtf.windowHeight && item[0].getBoundingClientRect().left >= edgtf.windowHeight / 2) {
                card_inner.css('left', (100 - percentage) / 100 * card_inner.data('bundle-move-left'));
            } else if (item[0].getBoundingClientRect().left < edgtf.windowHeight / 2) {
                card_inner.css('left', 0);
                stop = true;
                holder.removeClass('edgtf-no-events');
            }
        };

        edgtf.window.on('scroll', update).resize(update);
        update();
    }
}

(function ($) {
    'use strict';

    $(window).load(function () {
        edgtfCardsGallery();
    });

    /**
     * Cards Gallery shortcode
     */
    function edgtfCardsGallery() {
        var cardGalleries = $('.edgtf-cards-gallery-holder');

        if (cardGalleries.length) {

            cardGalleries.each(function () {
                var gallery = $(this);
                var galleryHeight = gallery.height();
                gallery.children('.edgtf-cards-gallery').css('height', galleryHeight);
                $(window).resize(function () {
                    galleryHeight = gallery.find('.edgtf-card:last-child').height();
                    gallery.children('.edgtf-cards-gallery').css('height', galleryHeight);
                });

                var cards = gallery.find('.edgtf-card');
                var fake_card = gallery.find('.fake-card');
                fake_card.css('display', 'none');

                cards.each(function () {
                    var card = $(this);
                    edgtfBundleAnimation(card, gallery);
                    card.on('click', (function () {

                        if (!cards.last().is(card)) {
                            card.fadeOut(0, function () {
                                card.addClass('edgtf-transform-x');
                                card.insertAfter(cards.last()).fadeIn(200, 'easeInOutQuint',
                                    function () {
                                        card.removeClass('edgtf-transform-x');
                                    });
                                cards = gallery.find('.edgtf-card');
                            });
                            return false;
                        }
                    }));
                });
            });

        }
    }

})(jQuery);