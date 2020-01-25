(function ($) {
    "use strict";

    var blog = {};
    edgtf.modules.blog = blog;

    blog.edgtfOnDocumentReady = edgtfOnDocumentReady;
    blog.edgtfOnWindowLoad = edgtfOnWindowLoad;
    blog.edgtfOnWindowResize = edgtfOnWindowResize;
    blog.edgtfOnWindowScroll = edgtfOnWindowScroll;

    $(document).ready(edgtfOnDocumentReady);
    $(window).load(edgtfOnWindowLoad);
    $(window).resize(edgtfOnWindowResize);
    $(window).scroll(edgtfOnWindowScroll);

    /* 
     All functions to be called on $(document).ready() should be in this function
     */
    function edgtfOnDocumentReady() {
        edgtfInitAudioPlayer();
        edgtfInitBlogMasonry();
    }

    /* 
     All functions to be called on $(window).load() should be in this function
     */
    function edgtfOnWindowLoad() {
        edgtfInitBlogPagination().init();
    }

    /* 
     All functions to be called on $(window).resize() should be in this function
     */
    function edgtfOnWindowResize() {
        edgtfInitBlogMasonry();
    }

    /* 
     All functions to be called on $(window).scroll() should be in this function
     */
    function edgtfOnWindowScroll() {
        edgtfInitBlogPagination().scroll();
    }

    /**
     * Init audio player for Blog list and single pages
     */
    function edgtfInitAudioPlayer() {
        var players = $('audio.edgtf-blog-audio');

        if (players.length) {
            players.mediaelementplayer({
                audioWidth: '100%'
            });
        }
    }

    /**
     * Init Resize Blog Items
     */
    function edgtfResizeBlogItems(size, container) {

        if (container.hasClass('edgtf-masonry-images-fixed')) {
            var padding = parseInt(container.find('article').css('padding-left')),
                defaultMasonryItem = container.find('.edgtf-post-size-default'),
                largeWidthMasonryItem = container.find('.edgtf-post-size-large-width'),
                largeHeightMasonryItem = container.find('.edgtf-post-size-large-height'),
                largeWidthHeightMasonryItem = container.find('.edgtf-post-size-large-width-height');

            if (edgtf.windowWidth > 680) {
                defaultMasonryItem.css('height', size - 2 * padding);
                largeHeightMasonryItem.css('height', Math.round(2 * size) - 2 * padding);
                largeWidthHeightMasonryItem.css('height', Math.round(2 * size) - 2 * padding);
                largeWidthMasonryItem.css('height', size - 2 * padding);
            } else {
                defaultMasonryItem.css('height', size);
                largeHeightMasonryItem.css('height', size);
                largeWidthHeightMasonryItem.css('height', size);
                largeWidthMasonryItem.css('height', Math.round(size / 2));
            }
        }
    }

    /**
     * Init Blog Masonry Layout
     */
    function edgtfInitBlogMasonry() {
        var holder = $('.edgtf-blog-holder.edgtf-blog-type-masonry');

        if (holder.length) {
            holder.each(function () {
                var thisHolder = $(this),
                    masonry = thisHolder.children('.edgtf-blog-holder-inner'),
                    size = thisHolder.find('.edgtf-blog-masonry-grid-sizer').width();

                masonry.waitForImages(function () {
                    masonry.isotope({
                        layoutMode: 'packery',
                        itemSelector: 'article',
                        percentPosition: true,
                        packery: {
                            gutter: '.edgtf-blog-masonry-grid-gutter',
                            columnWidth: '.edgtf-blog-masonry-grid-sizer'
                        }
                    });

                    edgtfResizeBlogItems(size, thisHolder);

                    masonry.css('opacity', '1');

                    setTimeout(function () {
                        masonry.isotope('layout');
                    }, 800);
                });
            });
        }
    }

    /**
     * Initializes blog pagination functions
     */
    function edgtfInitBlogPagination() {
        var holder = $('.edgtf-blog-holder');

        var initLoadMorePagination = function (thisHolder) {
            var loadMoreButton = thisHolder.find('.edgtf-blog-pag-load-more a');

            loadMoreButton.on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();

                initMainPagFunctionality(thisHolder);
            });
        };

        var initInifiteScrollPagination = function (thisHolder) {
            var blogListHeight = thisHolder.outerHeight(),
                blogListTopOffest = thisHolder.offset().top,
                blogListPosition = blogListHeight + blogListTopOffest - edgtfGlobalVars.vars.edgtfAddForAdminBar;

            if (!thisHolder.hasClass('edgtf-blog-pagination-infinite-scroll-started') && edgtf.scroll + edgtf.windowHeight > blogListPosition) {
                initMainPagFunctionality(thisHolder);
            }
        };

        var initMainPagFunctionality = function (thisHolder) {
            var thisHolderInner = thisHolder.children('.edgtf-blog-holder-inner'),
                nextPage,
                maxNumPages;

            if (typeof thisHolder.data('max-num-pages') !== 'undefined' && thisHolder.data('max-num-pages') !== false) {
                maxNumPages = thisHolder.data('max-num-pages');
            }

            if (thisHolder.hasClass('edgtf-blog-pagination-infinite-scroll')) {
                thisHolder.addClass('edgtf-blog-pagination-infinite-scroll-started');
            }

            var loadMoreDatta = edgtf.modules.common.getLoadMoreData(thisHolder),
                loadingItem = thisHolder.find('.edgtf-blog-pag-loading');

            nextPage = loadMoreDatta.nextPage;

            var nonceHolder = thisHolder.find('input[name*="edgtf_blog_load_more_nonce_"]');

            loadMoreDatta.blog_load_more_id = nonceHolder.attr('name').substring(nonceHolder.attr('name').length - 4, nonceHolder.attr('name').length);
            loadMoreDatta.blog_load_more_nonce = nonceHolder.val();

            if (nextPage <= maxNumPages) {
                loadingItem.addClass('edgtf-showing');

                var ajaxData = edgtf.modules.common.setLoadMoreAjaxData(loadMoreDatta, 'hyperon_edgtf_blog_load_more');

                $.ajax({
                    type: 'POST',
                    data: ajaxData,
                    url: edgtfGlobalVars.vars.edgtfAjaxUrl,
                    success: function (data) {
                        nextPage++;

                        thisHolder.data('next-page', nextPage);

                        var response = $.parseJSON(data),
                            responseHtml = response.html;

                        thisHolder.waitForImages(function () {
                            if (thisHolder.hasClass('edgtf-blog-type-masonry')) {
                                edgtfInitAppendIsotopeNewContent(thisHolderInner, loadingItem, responseHtml);
                                edgtfResizeBlogItems(thisHolderInner.find('.edgtf-blog-masonry-grid-sizer').width(), thisHolder);
                            } else {
                                edgtfInitAppendGalleryNewContent(thisHolderInner, loadingItem, responseHtml);
                            }

                            setTimeout(function () {
                                edgtfInitAudioPlayer();
                                edgtf.modules.common.edgtfOwlSlider();
                                edgtf.modules.common.edgtfFluidVideo();
                                edgtf.modules.common.edgtfInitSelfHostedVideoPlayer();
                                edgtf.modules.common.edgtfSelfHostedVideoSize();

                                if (typeof edgtf.modules.common.edgtfStickySidebarWidget === 'function') {
                                    edgtf.modules.common.edgtfStickySidebarWidget().reInit();
                                }

                                // Trigger event.
                                $(document.body).trigger('blog_list_load_more_trigger');

                            }, 400);
                        });

                        if (thisHolder.hasClass('edgtf-blog-pagination-infinite-scroll-started')) {
                            thisHolder.removeClass('edgtf-blog-pagination-infinite-scroll-started');
                        }
                    }
                });
            }

            if (nextPage === maxNumPages) {
                thisHolder.find('.edgtf-blog-pag-load-more').hide();
            }
        };

        var edgtfInitAppendIsotopeNewContent = function (thisHolderInner, loadingItem, responseHtml) {
            thisHolderInner.append(responseHtml).isotope('reloadItems').isotope({sortBy: 'original-order'});
            loadingItem.removeClass('edgtf-showing');

            setTimeout(function () {
                thisHolderInner.isotope('layout');
            }, 600);
        };

        var edgtfInitAppendGalleryNewContent = function (thisHolderInner, loadingItem, responseHtml) {
            loadingItem.removeClass('edgtf-showing');
            thisHolderInner.append(responseHtml);
        };

        return {
            init: function () {
                if (holder.length) {
                    holder.each(function () {
                        var thisHolder = $(this);

                        if (thisHolder.hasClass('edgtf-blog-pagination-load-more')) {
                            initLoadMorePagination(thisHolder);
                        }

                        if (thisHolder.hasClass('edgtf-blog-pagination-infinite-scroll')) {
                            initInifiteScrollPagination(thisHolder);
                        }
                    });
                }
            },
            scroll: function () {
                if (holder.length) {
                    holder.each(function () {
                        var thisHolder = $(this);

                        if (thisHolder.hasClass('edgtf-blog-pagination-infinite-scroll')) {
                            initInifiteScrollPagination(thisHolder);
                        }
                    });
                }
            }
        };
    }

})(jQuery);
(function ($) {
    "use strict";

    var header = {};
    edgtf.modules.header = header;

    header.edgtfSetDropDownMenuPosition = edgtfSetDropDownMenuPosition;
    header.edgtfSetDropDownWideMenuPosition = edgtfSetDropDownWideMenuPosition;

    header.edgtfOnDocumentReady = edgtfOnDocumentReady;
    header.edgtfOnWindowLoad = edgtfOnWindowLoad;

    $(document).ready(edgtfOnDocumentReady);
    $(window).load(edgtfOnWindowLoad);

    /*
     All functions to be called on $(document).ready() should be in this function
     */
    function edgtfOnDocumentReady() {
        edgtfSetDropDownMenuPosition();
        edgtfDropDownMenu();
    }

    /*
     All functions to be called on $(window).load() should be in this function
     */
    function edgtfOnWindowLoad() {
        edgtfSetDropDownWideMenuPosition();
    }

    /**
     * Set dropdown position
     */
    function edgtfSetDropDownMenuPosition() {
        var menuItems = $('.edgtf-drop-down > ul > li.narrow.menu-item-has-children');

        if (menuItems.length) {
            menuItems.each(function (i) {
                var thisItem = $(this),
                    menuItemPosition = thisItem.offset().left,
                    dropdownHolder = thisItem.find('.second'),
                    dropdownMenuItem = dropdownHolder.find('.inner ul'),
                    dropdownMenuWidth = dropdownMenuItem.outerWidth(),
                    menuItemFromLeft = edgtf.windowWidth - menuItemPosition;

                if (edgtf.body.hasClass('edgtf-boxed')) {
                    menuItemFromLeft = edgtf.boxedLayoutWidth - (menuItemPosition - (edgtf.windowWidth - edgtf.boxedLayoutWidth ) / 2);
                }

                var dropDownMenuFromLeft; //has to stay undefined because 'dropDownMenuFromLeft < dropdownMenuWidth' conditional will be true

                if (thisItem.find('li.sub').length > 0) {
                    dropDownMenuFromLeft = menuItemFromLeft - dropdownMenuWidth;
                }

                dropdownHolder.removeClass('right');
                dropdownMenuItem.removeClass('right');
                if (menuItemFromLeft < dropdownMenuWidth || dropDownMenuFromLeft < dropdownMenuWidth) {
                    dropdownHolder.addClass('right');
                    dropdownMenuItem.addClass('right');
                }
            });
        }
    }

    /**
     * Set dropdown wide position
     */
    function edgtfSetDropDownWideMenuPosition() {
        var menuItems = $(".edgtf-drop-down > ul > li.wide");

        if (menuItems.length) {
            menuItems.each(function (i) {
                var menuItemSubMenu = $(menuItems[i]).find('.second');

                if (menuItemSubMenu.length && !menuItemSubMenu.hasClass('left_position') && !menuItemSubMenu.hasClass('right_position')) {
                    menuItemSubMenu.css('left', 0);

                    var left_position = menuItemSubMenu.offset().left;

                    if (edgtf.body.hasClass('edgtf-boxed')) {
                        var boxedWidth = $('.edgtf-boxed .edgtf-wrapper .edgtf-wrapper-inner').outerWidth();
                        left_position = left_position - (edgtf.windowWidth - boxedWidth) / 2;

                        menuItemSubMenu.css({'left': -left_position, 'width': boxedWidth});
                    } else {
                        menuItemSubMenu.css({'left': -left_position, 'width': edgtf.windowWidth});
                    }
                }
            });
        }
    }

    function edgtfDropDownMenu() {
        var menu_items = $('.edgtf-drop-down > ul > li');

        menu_items.each(function (i) {
            if ($(menu_items[i]).find('.second').length > 0) {
                var thisItem = $(menu_items[i]),
                    dropDownSecondDiv = thisItem.find('.second');

                if (thisItem.hasClass('wide')) {
                    //set columns to be same height - start
                    var tallest = 0,
                        dropDownSecondItem = $(this).find('.second > .inner > ul > li');

                    dropDownSecondItem.each(function () {
                        var thisHeight = $(this).height();
                        if (thisHeight > tallest) {
                            tallest = thisHeight;
                        }
                    });

                    dropDownSecondItem.css('height', ''); // delete old inline css - via resize
                    dropDownSecondItem.height(tallest);
                    //set columns to be same height - end
                }

                if (!edgtf.menuDropdownHeightSet) {
                    thisItem.data('original_height', dropDownSecondDiv.height() + 'px');
                    dropDownSecondDiv.height(0);
                }

                if (navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
                    thisItem.on("touchstart mouseenter", function () {
                        dropDownSecondDiv.css({
                            'height': thisItem.data('original_height'),
                            'overflow': 'visible',
                            'visibility': 'visible',
                            'opacity': '1'
                        });
                    }).on("mouseleave", function () {
                        dropDownSecondDiv.css({
                            'height': '0px',
                            'overflow': 'hidden',
                            'visibility': 'hidden',
                            'opacity': '0'
                        });
                    });
                } else {
                    if (edgtf.body.hasClass('edgtf-dropdown-animate-height')) {
                        var animateConfig = {
                            interval: 0,
                            over: function () {
                                setTimeout(function () {
                                    dropDownSecondDiv.addClass('edgtf-drop-down-start').css({
                                        'visibility': 'visible',
                                        'height': '0px',
                                        'opacity': '1'
                                    });
                                    dropDownSecondDiv.stop().animate({
                                        'height': thisItem.data('original_height')
                                    }, 400, 'easeInOutQuint', function () {
                                        dropDownSecondDiv.css('overflow', 'visible');
                                    });
                                }, 100);
                            },
                            timeout: 100,
                            out: function () {
                                dropDownSecondDiv.stop().animate({
                                    'height': '0px',
                                    'opacity': 0
                                }, 100, function () {
                                    dropDownSecondDiv.css({
                                        'overflow': 'hidden',
                                        'visibility': 'hidden'
                                    });
                                });

                                dropDownSecondDiv.removeClass('edgtf-drop-down-start');
                            }
                        };

                        thisItem.hoverIntent(animateConfig);
                    } else {
                        var config = {
                            interval: 0,
                            over: function () {
                                setTimeout(function () {
                                    dropDownSecondDiv.addClass('edgtf-drop-down-start').stop().css({'height': thisItem.data('original_height')});
                                }, 150);
                            },
                            timeout: 150,
                            out: function () {
                                dropDownSecondDiv.stop().css({'height': '0px'}).removeClass('edgtf-drop-down-start');
                            }
                        };

                        thisItem.hoverIntent(config);
                    }
                }
            }
        });

        $('.edgtf-drop-down ul li.wide ul li a').on('click', function (e) {
            if (e.which === 1) {
                var $this = $(this);

                setTimeout(function () {
                    $this.mouseleave();
                }, 500);
            }
        });

        edgtf.menuDropdownHeightSet = true;
    }

})(jQuery);
(function ($) {
    "use strict";

    var sidearea = {};
    edgtf.modules.sidearea = sidearea;

    sidearea.edgtfOnDocumentReady = edgtfOnDocumentReady;

    $(document).ready(edgtfOnDocumentReady);

    /* 
     All functions to be called on $(document).ready() should be in this function
     */
    function edgtfOnDocumentReady() {
        edgtfSideArea();
        edgtfSideAreaScroll();
    }

    /**
     * Show/hide side area
     */
    function edgtfSideArea() {
        var wrapper = $('.edgtf-wrapper'),
            sideMenuButtonOpen = $('a.edgtf-side-menu-button-opener'),
            cssClass = 'edgtf-right-side-menu-opened';

        wrapper.prepend('<div class="edgtf-cover"/>');

        $('a.edgtf-side-menu-button-opener, a.edgtf-close-side-menu').on('click', (function (e) {
            e.preventDefault();

            if (!sideMenuButtonOpen.hasClass('opened')) {
                sideMenuButtonOpen.addClass('opened');
                edgtf.body.addClass(cssClass);

                $('.edgtf-wrapper .edgtf-cover').on('click', (function () {
                    edgtf.body.removeClass('edgtf-right-side-menu-opened');
                    sideMenuButtonOpen.removeClass('opened');
                }));

                var currentScroll = $(window).scrollTop();
                $(window).scroll(function () {
                    if (Math.abs(edgtf.scroll - currentScroll) > 400) {
                        edgtf.body.removeClass(cssClass);
                        sideMenuButtonOpen.removeClass('opened');
                    }
                });
            } else {
                sideMenuButtonOpen.removeClass('opened');
                edgtf.body.removeClass(cssClass);
            }
        }));
    }

    /*
     **  Smooth scroll functionality for Side Area
     */
    function edgtfSideAreaScroll() {
        var sideMenu = $('.edgtf-side-menu');

        if (sideMenu.length) {
            sideMenu.perfectScrollbar({
                wheelSpeed: 0.6,
                suppressScrollX: true
            });
        }
    }

})(jQuery);

(function ($) {
    "use strict";

    var title = {};
    edgtf.modules.title = title;

    title.edgtfOnDocumentReady = edgtfOnDocumentReady;

    $(document).ready(edgtfOnDocumentReady);

    /* 
     All functions to be called on $(document).ready() should be in this function
     */
    function edgtfOnDocumentReady() {
        edgtfParallaxTitle();
    }

    /*
     **	Title image with parallax effect
     */
    function edgtfParallaxTitle() {
        var parallaxBackground = $('.edgtf-title-holder.edgtf-bg-parallax');

        if (parallaxBackground.length > 0 && edgtf.windowWidth > 1024) {
            var parallaxBackgroundWithZoomOut = parallaxBackground.hasClass('edgtf-bg-parallax-zoom-out'),
                titleHeight = parseInt(parallaxBackground.data('height')),
                imageWidth = parseInt(parallaxBackground.data('background-width')),
                parallaxRate = titleHeight / 10000 * 7,
                parallaxYPos = -(edgtf.scroll * parallaxRate),
                adminBarHeight = edgtfGlobalVars.vars.edgtfAddForAdminBar;

            parallaxBackground.css({'background-position': 'center ' + (parallaxYPos + adminBarHeight) + 'px'});

            if (parallaxBackgroundWithZoomOut) {
                parallaxBackgroundWithZoomOut.css({'background-size': imageWidth - edgtf.scroll + 'px auto'});
            }

            //set position of background on window scroll
            $(window).scroll(function () {
                parallaxYPos = -(edgtf.scroll * parallaxRate);
                parallaxBackground.css({'background-position': 'center ' + (parallaxYPos + adminBarHeight) + 'px'});

                if (parallaxBackgroundWithZoomOut) {
                    parallaxBackgroundWithZoomOut.css({'background-size': imageWidth - edgtf.scroll + 'px auto'});
                }
            });
        }
    }

})(jQuery);

(function ($) {
    'use strict';

    var woocommerce = {};
    edgtf.modules.woocommerce = woocommerce;

    woocommerce.edgtfOnDocumentReady = edgtfOnDocumentReady;
    woocommerce.edgtfOnWindowLoad = edgtfOnWindowLoad;
    woocommerce.edgtfOnWindowResize = edgtfOnWindowResize;

    $(document).ready(edgtfOnDocumentReady);
    $(window).load(edgtfOnWindowLoad);
    $(window).resize(edgtfOnWindowResize);

    /*
     All functions to be called on $(document).ready() should be in this function
     */
    function edgtfOnDocumentReady() {
        edgtfInitQuantityButtons();
        edgtfInitSelect2();
        edgtfInitSingleProductLightbox();

        edgtfInitProductListFilter().init();
        edgtfWishlistRefresh().init();
        edgtfQuickViewGallery().init();
        edgtfQuickViewSelect2();
        edgtfAddingToCart();
        edgtfAddingToWishlist();
        edgtfSetCartHeight();
        edgtfSetCartHeightShippingButton();
    }

    /*
     All functions to be called on $(window).load() should be in this function
     */
    function edgtfOnWindowLoad() {
        edgtfInitProductListMasonryShortcode();
    }

    /*
     All functions to be called on $(window).resize() should be in this function
     */
    function edgtfOnWindowResize() {
        edgtfInitProductListMasonryShortcode();
    }

    /*
     ** Init quantity buttons to increase/decrease products for cart
     */
    function edgtfInitQuantityButtons() {
        $(document).on('click', '.edgtf-quantity-minus, .edgtf-quantity-plus', function (e) {
            e.stopPropagation();

            var button = $(this),
                inputField = button.siblings('.edgtf-quantity-input'),
                step = parseFloat(inputField.data('step')),
                max = parseFloat(inputField.data('max')),
                minus = false,
                inputValue = parseFloat(inputField.val()),
                newInputValue;

            if (button.hasClass('edgtf-quantity-minus')) {
                minus = true;
            }

            if (minus) {
                newInputValue = inputValue - step;
                if (newInputValue >= 1) {
                    inputField.val(newInputValue);
                } else {
                    inputField.val(0);
                }
            } else {
                newInputValue = inputValue + step;
                if (max === undefined) {
                    inputField.val(newInputValue);
                } else {
                    if (newInputValue >= max) {
                        inputField.val(max);
                    } else {
                        inputField.val(newInputValue);
                    }
                }
            }

            inputField.trigger('change');
        });
    }

    /*
     ** Init select2 script for select html dropdowns
     */


        var variableProducts = $('.edgtf-woocommerce-page .edgtf-content .variations td.value select');
        if (variableProducts.length) {
            variableProducts.select2();
        }

        var shippingCountryCalc = $('#calc_shipping_country');
        if (shippingCountryCalc.length) {
            shippingCountryCalc.select2();
        }

        var shippingStateCalc = $('.cart-collaterals .shipping select#calc_shipping_state');
        if (shippingStateCalc.length) {
            shippingStateCalc.select2();
        }
    }

    /*
     ** Init Product Single Pretty Photo attributes
     */
    function edgtfInitSingleProductLightbox() {
        var item = $('.edgtf-woo-single-page.edgtf-woo-single-has-pretty-photo .images .woocommerce-product-gallery__image');

        if (item.length) {
            item.children('a').attr('data-rel', 'prettyPhoto[woo_single_pretty_photo]');

            if (typeof edgtf.modules.common.edgtfPrettyPhoto === "function") {
                edgtf.modules.common.edgtfPrettyPhoto();
            }
        }
    }

    /*
     ** Init Product List Masonry Shortcode Layout
     */
    function edgtfInitProductListMasonryShortcode() {
        var container = $('.edgtf-pl-holder.edgtf-masonry-layout .edgtf-pl-outer');

        if (container.length) {
            container.each(function () {
                var thisContainer = $(this),
                    size = thisContainer.find('.edgtf-pl-sizer').width();

                //edgtfResizeWooCommerceMasonryLayoutItems(size, thisContainer);

                thisContainer.waitForImages(function () {
                    thisContainer.isotope({
                        itemSelector: '.edgtf-pli',
                        resizable: false,
                        masonry: {
                            columnWidth: '.edgtf-pl-sizer',
                            gutter: '.edgtf-pl-gutter'
                        }
                    });

                    edgtfResizeWooCommerceMasonryLayoutItems(size, thisContainer);

                    thisContainer.isotope('layout').css('opacity', 1);
                });
            });
        }
    }

    function edgtfResizeWooCommerceMasonryLayoutItems(size, container) {
        var newSize = size,
            defaultMasonryItem = container.find('.edgtf-woo-image-small'),
            largeWidthMasonryItem = container.find('.edgtf-woo-image-large-width'),
            largeHeightMasonryItem = container.find('.edgtf-woo-image-large-height'),
            largeWidthHeightMasonryItem = container.find('.edgtf-woo-image-large-width-height');

        if (edgtf.windowWidth > 680) {
            defaultMasonryItem.css('height', newSize);
            largeHeightMasonryItem.css('height', Math.round(2 * newSize));
            largeWidthHeightMasonryItem.css('height', Math.round(2 * newSize));
            largeWidthMasonryItem.css('height', newSize);
        } else {
            defaultMasonryItem.css('height', newSize);
            largeHeightMasonryItem.css('height', Math.round(2 * newSize));
            largeWidthHeightMasonryItem.css('height', newSize);
            largeWidthMasonryItem.css('height', Math.round(newSize / 2));
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function edgtfInitProductListFilter() {
        var productList = $('.edgtf-pl-holder');
        var queryParams = {};
        var size = productList.find('.edgtf-pl-sizer').width();
        var noPosts = productList.find('.edgtf-no-posts');

        var initFilterClick = function (thisProductList) {
            var links = thisProductList.find('.edgtf-pl-categories a, .edgtf-pl-ordering a');

            links.on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();

                var clickedLink = $(this);
                if (!clickedLink.hasClass('active')) {
                    initMainPagFunctionality(thisProductList, clickedLink);
                }
            });
        }

        //used for replacing content after ajax call
        var edgtfReplaceStandardContent = function (thisProductListInner, loader, responseHtml) {
            noPosts.fadeOut();
            thisProductListInner.html(responseHtml);
            loader.fadeOut();
        };

        //used for replacing content after ajax call
        var edgtfReplaceMasonryContent = function (thisProductListInner, loader, responseHtml) {
            thisProductListInner.find('.edgtf-pli').remove();

            thisProductListInner.append(responseHtml).isotope('reloadItems').isotope({sortBy: 'original-order'});
            edgtfResizeWooCommerceMasonryLayoutItems(productList.find('.edgtf-pl-sizer').width(), thisProductListInner);
            setTimeout(function () {
                noPosts.fadeOut();
                thisProductListInner.isotope('layout');
                loader.fadeOut();
            }, 400);
        };

        //used for storing parameters in global object
        var edgtfReturnOrderingParemeters = function (queryParams, data) {

            for (var key in data) {
                queryParams[key] = data[key];
            }



        var initMainPagFunctionality = function (thisProductList, clickedLink) {
            var thisProductListInner = thisProductList.find('.edgtf-pl-outer');

            var loadData = edgtf.modules.common.getLoadMoreData(thisProductList),
                loader = thisProductList.find('.edgtf-prl-loading');

            //store parameters in global object
            edgtfReturnOrderingParemeters(queryParams, clickedLink.data());

            //set paremeters for new query passed through ajax
            loadData.category = queryParams.category !== undefined ? queryParams.category : '';
            loadData.metaKey = queryParams.metaKey !== undefined ? queryParams.metaKey : '';
            loadData.order = queryParams.order !== undefined ? queryParams.order : '';
            loadData.minPrice = queryParams.minprice !== undefined ? queryParams.minprice : '';
            loadData.maxPrice = queryParams.maxprice !== undefined ? queryParams.maxprice : '';

            loader.fadeIn();

            var ajaxData = edgtf.modules.common.setLoadMoreAjaxData(loadData, 'hyperon_edgtf_product_ajax_load_category');

            $.ajax({
                type: 'POST',
                data: ajaxData,
                url: edgtfGlobalVars.vars.edgtfAjaxUrl,
                success: function (data) {
                    var response = $.parseJSON(data),
                        responseHtml = response.html;

                    thisProductList.waitForImages(function () {
                        clickedLink.parent().siblings().find('a').removeClass('active');
                        clickedLink.addClass('active');
                        if (thisProductList.hasClass('edgtf-masonry-layout')) {
                            edgtfReplaceMasonryContent(thisProductListInner, loader, responseHtml);
                        } else {
                            edgtfReplaceStandardContent(thisProductListInner, loader, responseHtml);
                        }
                        edgtfAddingToCart();
                        edgtfAddingToWishlist();
                    });

                }
            });
        }

        var initMobileFilterClick = function (cliked, holder) {
            cliked.on('click', function () {
                if (edgtf.windowWidth <= 768) {
                    if (!cliked.hasClass('opened')) {
                        cliked.addClass('opened');
                        holder.slideDown();
                    } else {
                        cliked.removeClass('opened');
                        holder.slideUp();
                    }
                }
            });
        }

        return {
            init: function () {
                if (productList.length) {
                    productList.each(function () {
                        var thisProductList = $(this);
                        initFilterClick(thisProductList);

                        initMobileFilterClick(thisProductList.find('.edgtf-pl-ordering-outer h6'), thisProductList.find('.edgtf-pl-ordering'));
                        initMobileFilterClick(thisProductList.find('.edgtf-pl-categories-label'), thisProductList.find('.edgtf-pl-categories-label').next('ul'));
                    });
                }
            },

        }
    }

    function edgtfWishlistRefresh() {

        var initRefreshWishlist = function () {
            $.ajax({
                url: edgtfGlobalVars.vars.edgtfAjaxUrl,
                type: "POST",
                data: {
                    'action': 'edgtf_product_ajax_wishlist'
                },
                success: function (data) {


                    $('.edgtf-wishlist-widget-holder .edgtf-wishlist-items-number span').html(data['wishlist_count_products']);
                }
            });
        }

        return {
            init: function () {
                //trigger defined in jquery.yith-wcwl.js, after product is added to wishlist
                $('body').on('added_to_wishlist', function () {
                    initRefreshWishlist();
                });

                //after product is removed from wishlist list
                $('#yith-wcwl-form').on('click', '.product-remove a, .product-add-to-cart a', function () {
                    setTimeout(function () {
                        initRefreshWishlist();
                    }, 2000);
                });
            }

        }

    }

    function edgtfQuickViewGallery() {

        var initGallery = function () {
            var sliders = $('.edgtf-quick-view-gallery.edgtf-owl-slider');

            if (sliders.length) {
                sliders.each(function () {
                    var slider = $(this);
                    slider.owlCarousel({
                        items: 1,
                        loop: true,
                        autoplay: false,
                        smartSpeed: 600,
                        margin: 0,
                        center: false,
                        autoWidth: false,
                        animateIn: false,
                        animateOut: false,
                        dots: false,
                        nav: true,
                        navText: [
                            '<span class="edgtf-prev-icon ion-arrow-left-b"></span>',
                            '<span class="edgtf-next-icon ion-arrow-right-b"></span>'
                        ],
                        onInitialize: function () {
                            slider.css('visibility', 'visible');
                        }
                    });
                });
            }
        }

        return {
            init: function () {
                //trigger defined in yith-woocommerce-quick-view\assets\js\frontend.js, after quick view is returned
                $(document).on('qv_loader_stop', function () {
                    initGallery();

                    $('.yith-wcqv-wrapper').css('top', edgtf.scroll + 20); //positioning popup on screens smaller than ipad portrait
                });
            }
        }
    }

    function edgtfQuickViewSelect2() {
        $(document).on('qv_loader_stop', function () {
            $('#yith-quick-view-modal select').select2();
        });
    }

    function edgtfAddingToCart() {
        var addToCartButtons = $('.add_to_cart_button, .single_add_to_cart_button');

        if (addToCartButtons.length) {
            addToCartButtons.on('click', (function () {
                $(this).text(edgtfGlobalVars.vars.edgtfAddingToCartLabel);
            }));
        }
    }

    function edgtfAddingToWishlist() {
        var wishlistButtons = $('.add_to_wishlist');

        if (wishlistButtons.length) {
            wishlistButtons.on('click', (function () {
                var wishlistButton = $(this),
                    wishlistItem,
                    wishlistItemOffset,
                    heightAdj,
                    widthAdj;

                //absolute centering over added item
                if (wishlistButton.closest('.edgtf-pli').length) {
                    wishlistItem = wishlistButton.closest('.edgtf-pli');            // product list shortcode
                } else if (wishlistButton.closest('.edgtf-plc-item').length) {
                    wishlistItem = wishlistButton.closest('.edgtf-plc-item');       // product carousel shortcode
                } else if (wishlistButton.closest('.product').length) {
                    wishlistItem = wishlistButton.closest('.product');              // WooCommerce template
                }

                wishlistItemOffset = wishlistItem.find('img').offset();
                heightAdj = wishlistItem.find('img').height() / 2;
                widthAdj = wishlistItem.find('img').width() / 2;

                $('#yith-wcwl-popup-message').css({
                    'top': wishlistItemOffset.top + heightAdj,
                    'left': wishlistItemOffset.left + widthAdj,
                });

                wishlistButton.addClass('edgtf-adding-to-wishlist');

                $(document).on('added_to_wishlist', function () {
                    wishlistButton.removeClass('edgtf-adding-to-wishlist');

                    setTimeout(function () {
                        var wishlistMsg = $('#yith-wcwl-popup-message');

                        wishlistMsg.stop().addClass('edgtf-wishlist-vanish-out');
                        wishlistMsg.one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function () {
                            wishlistMsg.removeClass('edgtf-wishlist-vanish-out');
                        });
                    }, 1000);
                });
            }));
        }
    }

    function edgtfSetCartHeight() {
        var cartPage = $('body.woocommerce-cart');

        if (cartPage.length) {
            var cartTotals = cartPage.find('.cart_totals'),
                cartForm = cartPage.find('.woocommerce-cart-form');

            if (cartTotals.length) {
                cartForm.height(cartTotals.height());
            }
        }
    }

    function edgtfSetCartHeightShippingButton() {
        var shippingButton = $('.shipping-calculator-button');

        if (shippingButton.length) {
            shippingButton.on('click', function () {
                setTimeout(function () {
                    edgtfSetCartHeight();
                }, 500);
            });
        }
    }

})(jQuery);
(function ($) {
    "use strict";

    var blogListSC = {};
    edgtf.modules.blogListSC = blogListSC;

    blogListSC.edgtfOnDocumentReady = edgtfOnDocumentReady;
    blogListSC.edgtfOnWindowLoad = edgtfOnWindowLoad;
    blogListSC.edgtfOnWindowScroll = edgtfOnWindowScroll;

    $(document).ready(edgtfOnDocumentReady);
    $(window).load(edgtfOnWindowLoad);
    $(window).scroll(edgtfOnWindowScroll);

    /*
     All functions to be called on $(document).ready() should be in this function
     */
    function edgtfOnDocumentReady() {
        edgtfInitBlogListMasonry();
    }

    /*
     All functions to be called on $(window).load() should be in this function
     */
    function edgtfOnWindowLoad() {
        edgtfInitBlogListShortcodePagination().init();
    }

    /*
     All functions to be called on $(window).scroll() should be in this function
     */
    function edgtfOnWindowScroll() {
        edgtfInitBlogListShortcodePagination().scroll();
    }

    /**
     * Init blog list shortcode masonry layout
     */
    function edgtfInitBlogListMasonry() {
        var holder = $('.edgtf-blog-list-holder.edgtf-bl-masonry');

        if (holder.length) {
            holder.each(function () {
                var thisHolder = $(this),
                    masonry = thisHolder.find('.edgtf-blog-list');

                masonry.waitForImages(function () {
                    masonry.isotope({
                        layoutMode: 'packery',
                        itemSelector: '.edgtf-bl-item',
                        percentPosition: true,
                        packery: {
                            gutter: '.edgtf-bl-grid-gutter',
                            columnWidth: '.edgtf-bl-grid-sizer'
                        }
                    });

                    masonry.css('opacity', '1');
                });
            });
        }
    }

    /**
     * Init blog list shortcode pagination functions
     */
    function edgtfInitBlogListShortcodePagination() {
        var holder = $('.edgtf-blog-list-holder');

        var initStandardPagination = function (thisHolder) {
            var standardLink = thisHolder.find('.edgtf-bl-standard-pagination li');

            if (standardLink.length) {
                standardLink.each(function () {
                    var thisLink = $(this).children('a'),
                        pagedLink = 1;

                    thisLink.on('click', function (e) {
                        e.preventDefault();
                        e.stopPropagation();

                        if (typeof thisLink.data('paged') !== 'undefined' && thisLink.data('paged') !== false) {
                            pagedLink = thisLink.data('paged');
                        }

                        initMainPagFunctionality(thisHolder, pagedLink);
                    });
                });
            }
        };

        var initLoadMorePagination = function (thisHolder) {
            var loadMoreButton = thisHolder.find('.edgtf-blog-pag-load-more a');

            loadMoreButton.on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();

                initMainPagFunctionality(thisHolder);
            });
        };

        var initInifiteScrollPagination = function (thisHolder) {
            var blogListHeight = thisHolder.outerHeight(),
                blogListTopOffest = thisHolder.offset().top,
                blogListPosition = blogListHeight + blogListTopOffest - edgtfGlobalVars.vars.edgtfAddForAdminBar;

            if (!thisHolder.hasClass('edgtf-bl-pag-infinite-scroll-started') && edgtf.scroll + edgtf.windowHeight > blogListPosition) {
                initMainPagFunctionality(thisHolder);
            }
        };

        var initMainPagFunctionality = function (thisHolder, pagedLink) {
            var thisHolderInner = thisHolder.find('.edgtf-blog-list'),
                nextPage,
                maxNumPages;

            if (typeof thisHolder.data('max-num-pages') !== 'undefined' && thisHolder.data('max-num-pages') !== false) {
                maxNumPages = thisHolder.data('max-num-pages');
            }

            if (thisHolder.hasClass('edgtf-bl-pag-standard-shortcodes')) {
                thisHolder.data('next-page', pagedLink);
            }

            if (thisHolder.hasClass('edgtf-bl-pag-infinite-scroll')) {
                thisHolder.addClass('edgtf-bl-pag-infinite-scroll-started');
            }

            var loadMoreDatta = edgtf.modules.common.getLoadMoreData(thisHolder),
                loadingItem = thisHolder.find('.edgtf-blog-pag-loading');

            nextPage = loadMoreDatta.nextPage;

            var nonceHolder = thisHolder.find('input[name*="edgtf_blog_load_more_nonce_"]');

            loadMoreDatta.blog_load_more_id = nonceHolder.attr('name').substring(nonceHolder.attr('name').length - 4, nonceHolder.attr('name').length);
            loadMoreDatta.blog_load_more_nonce = nonceHolder.val();

            if (nextPage <= maxNumPages) {
                if (thisHolder.hasClass('edgtf-bl-pag-standard-shortcodes')) {
                    loadingItem.addClass('edgtf-showing edgtf-standard-pag-trigger');
                    thisHolder.addClass('edgtf-bl-pag-standard-shortcodes-animate');
                } else {
                    loadingItem.addClass('edgtf-showing');
                }

                var ajaxData = edgtf.modules.common.setLoadMoreAjaxData(loadMoreDatta, 'hyperon_edgtf_blog_shortcode_load_more');

                $.ajax({
                    type: 'POST',
                    data: ajaxData,
                    url: edgtfGlobalVars.vars.edgtfAjaxUrl,
                    success: function (data) {
                        if (!thisHolder.hasClass('edgtf-bl-pag-standard-shortcodes')) {
                            nextPage++;
                        }

                        thisHolder.data('next-page', nextPage);

                        var response = $.parseJSON(data),
                            responseHtml = response.html;

                        if (thisHolder.hasClass('edgtf-bl-pag-standard-shortcodes')) {
                            edgtfInitStandardPaginationLinkChanges(thisHolder, maxNumPages, nextPage);

                            thisHolder.waitForImages(function () {
                                if (thisHolder.hasClass('edgtf-bl-masonry')) {
                                    edgtfInitHtmlIsotopeNewContent(thisHolder, thisHolderInner, loadingItem, responseHtml);
                                } else {
                                    edgtfInitHtmlGalleryNewContent(thisHolder, thisHolderInner, loadingItem, responseHtml);

                                    if (typeof edgtf.modules.common.edgtfStickySidebarWidget === 'function') {
                                        edgtf.modules.common.edgtfStickySidebarWidget().reInit();
                                    }
                                }
                            });
                        } else {
                            thisHolder.waitForImages(function () {
                                if (thisHolder.hasClass('edgtf-bl-masonry')) {
                                    edgtfInitAppendIsotopeNewContent(thisHolderInner, loadingItem, responseHtml);
                                } else {
                                    edgtfInitAppendGalleryNewContent(thisHolderInner, loadingItem, responseHtml);

                                    if (typeof edgtf.modules.common.edgtfStickySidebarWidget === 'function') {
                                        edgtf.modules.common.edgtfStickySidebarWidget().reInit();
                                    }
                                }
                            });
                        }

                        if (thisHolder.hasClass('edgtf-bl-pag-infinite-scroll-started')) {
                            thisHolder.removeClass('edgtf-bl-pag-infinite-scroll-started');
                        }
                    }
                });
            }

            if (nextPage === maxNumPages) {
                thisHolder.find('.edgtf-blog-pag-load-more').hide();
            }
        };

        var edgtfInitStandardPaginationLinkChanges = function (thisHolder, maxNumPages, nextPage) {
            var standardPagHolder = thisHolder.find('.edgtf-bl-standard-pagination'),
                standardPagNumericItem = standardPagHolder.find('li.edgtf-bl-pag-number'),
                standardPagPrevItem = standardPagHolder.find('li.edgtf-bl-pag-prev a'),
                standardPagNextItem = standardPagHolder.find('li.edgtf-bl-pag-next a');

            standardPagNumericItem.removeClass('edgtf-bl-pag-active');
            standardPagNumericItem.eq(nextPage - 1).addClass('edgtf-bl-pag-active');

            standardPagPrevItem.data('paged', nextPage - 1);
            standardPagNextItem.data('paged', nextPage + 1);

            if (nextPage > 1) {
                standardPagPrevItem.css({'opacity': '1'});
            } else {
                standardPagPrevItem.css({'opacity': '0'});
            }

            if (nextPage === maxNumPages) {
                standardPagNextItem.css({'opacity': '0'});
            } else {
                standardPagNextItem.css({'opacity': '1'});
            }
        };

        var edgtfInitHtmlIsotopeNewContent = function (thisHolder, thisHolderInner, loadingItem, responseHtml) {
            thisHolderInner.html(responseHtml).isotope('reloadItems').isotope({sortBy: 'original-order'});
            loadingItem.removeClass('edgtf-showing edgtf-standard-pag-trigger');
            thisHolder.removeClass('edgtf-bl-pag-standard-shortcodes-animate');

            setTimeout(function () {
                thisHolderInner.isotope('layout');

                if (typeof edgtf.modules.common.edgtfStickySidebarWidget === 'function') {
                    edgtf.modules.common.edgtfStickySidebarWidget().reInit();
                }
            }, 600);
        };

        var edgtfInitHtmlGalleryNewContent = function (thisHolder, thisHolderInner, loadingItem, responseHtml) {
            loadingItem.removeClass('edgtf-showing edgtf-standard-pag-trigger');
            thisHolder.removeClass('edgtf-bl-pag-standard-shortcodes-animate');
            thisHolderInner.html(responseHtml);
        };

        var edgtfInitAppendIsotopeNewContent = function (thisHolderInner, loadingItem, responseHtml) {
            thisHolderInner.append(responseHtml).isotope('reloadItems').isotope({sortBy: 'original-order'});
            loadingItem.removeClass('edgtf-showing');

            setTimeout(function () {
                thisHolderInner.isotope('layout');

                if (typeof edgtf.modules.common.edgtfStickySidebarWidget === 'function') {
                    edgtf.modules.common.edgtfStickySidebarWidget().reInit();
                }
            }, 600);
        };

        var edgtfInitAppendGalleryNewContent = function (thisHolderInner, loadingItem, responseHtml) {
            loadingItem.removeClass('edgtf-showing');
            thisHolderInner.append(responseHtml);
        };

        return {
            init: function () {
                if (holder.length) {
                    holder.each(function () {
                        var thisHolder = $(this);

                        if (thisHolder.hasClass('edgtf-bl-pag-standard-shortcodes')) {
                            initStandardPagination(thisHolder);
                        }

                        if (thisHolder.hasClass('edgtf-bl-pag-load-more')) {
                            initLoadMorePagination(thisHolder);
                        }

                        if (thisHolder.hasClass('edgtf-bl-pag-infinite-scroll')) {
                            initInifiteScrollPagination(thisHolder);
                        }
                    });
                }
            },
            scroll: function () {
                if (holder.length) {
                    holder.each(function () {
                        var thisHolder = $(this);

                        if (thisHolder.hasClass('edgtf-bl-pag-infinite-scroll')) {
                            initInifiteScrollPagination(thisHolder);
                        }
                    });
                }
            }
        };
    }

})(jQuery);
(function ($) {
    "use strict";

    var headerMinimal = {};
    edgtf.modules.headerMinimal = headerMinimal;

    headerMinimal.edgtfOnDocumentReady = edgtfOnDocumentReady;

    $(document).ready(edgtfOnDocumentReady);

    /* 
     All functions to be called on $(document).ready() should be in this function
     */
    function edgtfOnDocumentReady() {
        edgtfFullscreenMenu();
    }

    /**
     * Init Fullscreen Menu
     */
    function edgtfFullscreenMenu() {
        var popupMenuOpener = $('a.edgtf-fullscreen-menu-opener');

        if (popupMenuOpener.length) {
            var popupMenuHolderOuter = $(".edgtf-fullscreen-menu-holder-outer"),
                cssClass,
            //Flags for type of animation
                fadeRight = false,
                fadeTop = false,
            //Widgets
                widgetAboveNav = $('.edgtf-fullscreen-above-menu-widget-holder'),
                widgetBelowNav = $('.edgtf-fullscreen-below-menu-widget-holder'),
            //Menu
                menuItems = $('.edgtf-fullscreen-menu-holder-outer nav > ul > li > a'),
                menuItemWithChild = $('.edgtf-fullscreen-menu > ul li.has_sub > a'),
                menuItemWithoutChild = $('.edgtf-fullscreen-menu ul li:not(.has_sub) a');

            //set height of popup holder and initialize perfectScrollbar
            popupMenuHolderOuter.perfectScrollbar({
                wheelSpeed: 0.6,
                suppressScrollX: true
            });

            //set height of popup holder on resize
            $(window).resize(function () {
                popupMenuHolderOuter.height(edgtf.windowHeight);
            });

            if (edgtf.body.hasClass('edgtf-fade-push-text-right')) {
                cssClass = 'edgtf-push-nav-right';
                fadeRight = true;
            } else if (edgtf.body.hasClass('edgtf-fade-push-text-top')) {
                cssClass = 'edgtf-push-text-top';
                fadeTop = true;
            }

            //Appearing animation
            if (fadeRight || fadeTop) {
                if (widgetAboveNav.length) {
                    widgetAboveNav.children().css({
                        '-webkit-animation-delay': 0 + 'ms',
                        '-moz-animation-delay': 0 + 'ms',
                        'animation-delay': 0 + 'ms'
                    });
                }
                menuItems.each(function (i) {
                    $(this).css({
                        '-webkit-animation-delay': (i + 1) * 70 + 'ms',
                        '-moz-animation-delay': (i + 1) * 70 + 'ms',
                        'animation-delay': (i + 1) * 70 + 'ms'
                    });
                });
                if (widgetBelowNav.length) {
                    widgetBelowNav.children().css({
                        '-webkit-animation-delay': (menuItems.length + 1) * 70 + 'ms',
                        '-moz-animation-delay': (menuItems.length + 1) * 70 + 'ms',
                        'animation-delay': (menuItems.length + 1) * 70 + 'ms'
                    });
                }
            }

            // Open popup menu
            popupMenuOpener.on('click', function (e) {
                e.preventDefault();

                if (!popupMenuOpener.hasClass('edgtf-fm-opened')) {
                    popupMenuOpener.addClass('edgtf-fm-opened');
                    edgtf.body.removeClass('edgtf-fullscreen-fade-out').addClass('edgtf-fullscreen-menu-opened edgtf-fullscreen-fade-in');
                    edgtf.body.removeClass(cssClass);
                    edgtf.modules.common.edgtfDisableScroll();

                    $(document).keyup(function (e) {
                        if (e.keyCode === 27) {
                            popupMenuOpener.removeClass('edgtf-fm-opened');
                            edgtf.body.removeClass('edgtf-fullscreen-menu-opened edgtf-fullscreen-fade-in').addClass('edgtf-fullscreen-fade-out');
                            edgtf.body.addClass(cssClass);
                            edgtf.modules.common.edgtfEnableScroll();

                            $("nav.edgtf-fullscreen-menu ul.sub_menu").slideUp(200);
                        }
                    });
                } else {
                    popupMenuOpener.removeClass('edgtf-fm-opened');
                    edgtf.body.removeClass('edgtf-fullscreen-menu-opened edgtf-fullscreen-fade-in').addClass('edgtf-fullscreen-fade-out');
                    edgtf.body.addClass(cssClass);
                    edgtf.modules.common.edgtfEnableScroll();

                    $("nav.edgtf-fullscreen-menu ul.sub_menu").slideUp(200);
                }
            });

            //logic for open sub menus in popup menu
            menuItemWithChild.on('tap click', function (e) {
                e.preventDefault();

                var thisItem = $(this),
                    thisItemParent = thisItem.parent(),
                    thisItemParentSiblingsWithDrop = thisItemParent.siblings('.menu-item-has-children');

                if (thisItemParent.hasClass('has_sub')) {
                    var submenu = thisItemParent.find('> ul.sub_menu');

                    if (submenu.is(':visible')) {
                        submenu.slideUp(450, 'easeInOutQuint');
                        thisItemParent.removeClass('open_sub');
                    } else {
                        thisItemParent.addClass('open_sub');

                        if (thisItemParentSiblingsWithDrop.length === 0) {
                            submenu.slideDown(400, 'easeInOutQuint');
                        } else {
                            thisItemParent.closest('li.menu-item').siblings().find('.menu-item').removeClass('open_sub');
                            thisItemParent.siblings().removeClass('open_sub').find('.sub_menu').slideUp(400, 'easeInOutQuint', function () {
                                submenu.slideDown(400, 'easeInOutQuint');
                            });
                        }
                    }
                }

                return false;
            });

            //if link has no submenu and if it's not dead, than open that link
            menuItemWithoutChild.on('click',(function (e) {
                if (($(this).attr('href') !== "http://#") && ($(this).attr('href') !== "#")) {
                    if (e.which === 1) {
                        popupMenuOpener.removeClass('edgtf-fm-opened');
                        edgtf.body.removeClass('edgtf-fullscreen-menu-opened');
                        edgtf.body.removeClass('edgtf-fullscreen-fade-in').addClass('edgtf-fullscreen-fade-out');
                        edgtf.body.addClass(cssClass);
                        $("nav.edgtf-fullscreen-menu ul.sub_menu").slideUp(200);
                        edgtf.modules.common.edgtfEnableScroll();
                    }
                } else {
                    return false;
                }
            }));
        }
    }

})(jQuery);
(function ($) {
    "use strict";

    var mobileHeader = {};
    edgtf.modules.mobileHeader = mobileHeader;

    mobileHeader.edgtfOnDocumentReady = edgtfOnDocumentReady;

    $(document).ready(edgtfOnDocumentReady);

    /*
     All functions to be called on $(document).ready() should be in this function
     */
    function edgtfOnDocumentReady() {
        edgtfInitMobileNavigation();
        edgtfMobileHeaderBehavior();
    }

    function edgtfInitMobileNavigation() {
        var mobileHeader = $('.edgtf-mobile-header'),
            navigationOpener = $('.edgtf-mobile-header .edgtf-mobile-menu-opener'),
            navigationHolder = $('.edgtf-mobile-header .edgtf-mobile-nav'),
            dropdownOpener = $('.edgtf-mobile-nav .mobile_arrow, .edgtf-mobile-nav h6, .edgtf-mobile-nav a.edgtf-mobile-no-link'),
            mobileHeaderHeight = mobileHeader.length ? mobileHeader.height() : 0;

        //whole mobile menu opening / closing
        if (navigationOpener.length && navigationHolder.length) {
            navigationOpener.on('tap click', function (e) {
                e.stopPropagation();
                e.preventDefault();

                if (navigationHolder.is(':visible')) {
                    navigationHolder.slideUp(450, 'easeInOutQuint');
                    navigationOpener.removeClass('edgtf-mobile-menu-opened');
                } else {
                    navigationHolder.slideDown(450, 'easeInOutQuint');
                    navigationOpener.addClass('edgtf-mobile-menu-opened');
                }
            });
        }

        //init scrollable menu
        var scrollHeight = navigationHolder.outerHeight() + mobileHeaderHeight > edgtf.windowHeight - 100 ? edgtf.windowHeight - mobileHeaderHeight - 100 : navigationHolder.height();
        navigationHolder.height(scrollHeight);
        navigationHolder.perfectScrollbar({
            wheelSpeed: 0.6,
            suppressScrollX: true
        });

        //set height of popup holder on resize
        $(window).resize(function () {
            var scrollHeight = navigationHolder.outerHeight() + mobileHeaderHeight > edgtf.windowHeight - 100 ? edgtf.windowHeight - mobileHeaderHeight - 100 : navigationHolder.height();
            navigationHolder.height(scrollHeight);
        });


         //dropdown opening / closing
        if (dropdownOpener.length) {
            dropdownOpener.each(function () {
                var thisItem = $(this);

                thisItem.on('tap click', function (e) {
                    var thisItemParent = thisItem.parent('li'),
                        thisItemParentSiblingsWithDrop = thisItemParent.siblings('.menu-item-has-children');

                    if (thisItemParent.hasClass('has_sub')) {
                        var submenu = thisItemParent.find('> ul.sub_menu');

                        if (submenu.is(':visible')) {
                            submenu.slideUp(450, 'easeInOutQuint');
                            thisItemParent.removeClass('edgtf-opened');
                        } else {
                            thisItemParent.addClass('edgtf-opened');

                            if (thisItemParentSiblingsWithDrop.length === 0) {
                                thisItemParent.find('.sub_menu').slideUp(400, 'easeInOutQuint', function () {
                                    submenu.slideDown(400, 'easeInOutQuint');
                                });
                            } else {
                                thisItemParent.siblings().removeClass('edgtf-opened').find('.sub_menu').slideUp(400, 'easeInOutQuint', function () {
                                    submenu.slideDown(400, 'easeInOutQuint');
                                });
                            }
                        }
                    }
                });
            });
        }

        $('.edgtf-mobile-nav a, .edgtf-mobile-logo-wrapper a').on('click tap', function (e) {
            if ($(this).attr('href') !== 'http://#' && $(this).attr('href') !== '#') {
                navigationHolder.slideUp(450, 'easeInOutQuint');
                navigationOpener.removeClass("edgtf-mobile-menu-opened");
            }
        });
    }

    function edgtfMobileHeaderBehavior() {
        var mobileHeader = $('.edgtf-mobile-header'),
            mobileMenuOpener = mobileHeader.find('.edgtf-mobile-menu-opener'),
            mobileHeaderHeight = mobileHeader.length ? mobileHeader.outerHeight() : 0;

        if (edgtf.body.hasClass('edgtf-content-is-behind-header') && mobileHeaderHeight > 0 && edgtf.windowWidth <= 1024) {
            $('.edgtf-content').css('marginTop', -mobileHeaderHeight);
        }

        if (edgtf.body.hasClass('edgtf-sticky-up-mobile-header')) {
            var stickyAppearAmount,
                adminBar = $('#wpadminbar');

            var docYScroll1 = $(document).scrollTop();
            stickyAppearAmount = mobileHeaderHeight + edgtfGlobalVars.vars.edgtfAddForAdminBar;

            $(window).scroll(function () {
                var docYScroll2 = $(document).scrollTop();

                if (docYScroll2 > stickyAppearAmount) {
                    mobileHeader.addClass('edgtf-animate-mobile-header');
                } else {
                    mobileHeader.removeClass('edgtf-animate-mobile-header');
                }

                if ((docYScroll2 > docYScroll1 && docYScroll2 > stickyAppearAmount && !mobileMenuOpener.hasClass('edgtf-mobile-menu-opened')) || (docYScroll2 < stickyAppearAmount)) {
                    mobileHeader.removeClass('mobile-header-appear');
                    mobileHeader.css('margin-bottom', 0);

                    if (adminBar.length) {
                        mobileHeader.find('.edgtf-mobile-header-inner').css('top', 0);
                    }
                } else {
                    mobileHeader.addClass('mobile-header-appear');
                    mobileHeader.css('margin-bottom', stickyAppearAmount);
                }

                docYScroll1 = $(document).scrollTop();
            });
        }
    }

})(jQuery);
(function ($) {
    "use strict";

    var headerVertical = {};
    edgtf.modules.headerVertical = headerVertical;

    headerVertical.edgtfOnDocumentReady = edgtfOnDocumentReady;

    $(document).ready(edgtfOnDocumentReady);

    /* 
     All functions to be called on $(document).ready() should be in this function
     */
    function edgtfOnDocumentReady() {
        edgtfVerticalMenu().init();
    }

    /**
     * Function object that represents vertical menu area.
     * @returns {{init: Function}}
     */
    var edgtfVerticalMenu = function () {
        var verticalMenuObject = $('.edgtf-vertical-menu-area');

        /**
         * Checks if vertical area is scrollable (if it has edgtf-with-scroll class)
         *
         * @returns {bool}
         */
        var verticalAreaScrollable = function () {
            return verticalMenuObject.hasClass('edgtf-with-scroll');
        };

        /**
         * Initialzes navigation functionality. It checks navigation type data attribute and calls proper functions
         */
        var initNavigation = function () {
            var verticalNavObject = verticalMenuObject.find('.edgtf-vertical-menu');

            dropdownClickToggle();

            /**
             * Initializes click toggle navigation type. Works the same for touch and no-touch devices
             */
            function dropdownClickToggle() {
                var menuItems = verticalNavObject.find('ul li.menu-item-has-children');

                menuItems.each(function () {
                    var elementToExpand = $(this).find(' > .second, > ul');
                    var menuItem = this;
                    var dropdownOpener = $(this).find('> a');
                    var slideUpSpeed = 'fast';
                    var slideDownSpeed = 'slow';

                    dropdownOpener.on('click tap', function (e) {
                        e.preventDefault();
                        e.stopPropagation();

                        if (elementToExpand.is(':visible')) {
                            $(menuItem).removeClass('open');
                            elementToExpand.slideUp(slideUpSpeed);
                        } else if (dropdownOpener.parent().parent().children().hasClass('open') && dropdownOpener.parent().parent().parent().hasClass('edgtf-vertical-menu')) {
                            $(this).parent().parent().children().removeClass('open');
                            $(this).parent().parent().children().find(' > .second').slideUp(slideUpSpeed);

                            $(menuItem).addClass('open');
                            elementToExpand.slideDown(slideDownSpeed);
                        } else {

                            if (!$(this).parents('li').hasClass('open')) {
                                menuItems.removeClass('open');
                                menuItems.find(' > .second, > ul').slideUp(slideUpSpeed);
                            }

                            if ($(this).parent().parent().children().hasClass('open')) {
                                $(this).parent().parent().children().removeClass('open');
                                $(this).parent().parent().children().find(' > .second, > ul').slideUp(slideUpSpeed);
                            }

                            $(menuItem).addClass('open');
                            elementToExpand.slideDown(slideDownSpeed);
                        }
                    });
                });
            }
        };

        /**
         * Initializes scrolling in vertical area. It checks if vertical area is scrollable before doing so
         */
        var initVerticalAreaScroll = function () {
            if (verticalAreaScrollable()) {
                verticalMenuObject.perfectScrollbar({
                    wheelSpeed: 0.6,
                    suppressScrollX: true
                });
            }
        };

        var initHiddenVerticalArea = function () {
            var verticalLogo = $('.edgtf-vertical-area-bottom-logo');
            var verticalMenuOpener = verticalMenuObject.find('.edgtf-vertical-area-opener');
            var scrollPosition = 0;

            verticalMenuOpener.on('click tap', function () {
                if (isVerticalAreaOpen()) {
                    closeVerticalArea();
                } else {
                    openVerticalArea();
                }
            });

            $(window).scroll(function () {
                if (Math.abs($(window).scrollTop() - scrollPosition) > 400) {
                    closeVerticalArea();
                }
            });

            /**
             * Closes vertical menu area by removing 'active' class on that element
             */
            function closeVerticalArea() {
                verticalMenuObject.removeClass('active');

                if (verticalLogo.length) {
                    verticalLogo.removeClass('active');
                }
            }

            /**
             * Opens vertical menu area by adding 'active' class on that element
             */
            function openVerticalArea() {
                verticalMenuObject.addClass('active');

                if (verticalLogo.length) {
                    verticalLogo.addClass('active');
                }
                scrollPosition = $(window).scrollTop();
            }

            function isVerticalAreaOpen() {
                return verticalMenuObject.hasClass('active');
            }
        };

        return {
            /**
             * Calls all necessary functionality for vertical menu area if vertical area object is valid
             */
            init: function () {
                if (verticalMenuObject.length) {
                    initNavigation();
                    initVerticalAreaScroll();

                    if (edgtf.body.hasClass('edgtf-header-vertical-closed')) {
                        initHiddenVerticalArea();
                    }
                }
            }
        };
    };

})(jQuery);
(function ($) {
    "use strict";

    var searchFullscreen = {};
    edgtf.modules.searchFullscreen = searchFullscreen;

    searchFullscreen.edgtfOnDocumentReady = edgtfOnDocumentReady;

    $(document).ready(edgtfOnDocumentReady);

    /* 
     All functions to be called on $(document).ready() should be in this function
     */
    function edgtfOnDocumentReady() {
        edgtfSearchFullscreen();
    }

    /**
     * Init Search Types
     */
    function edgtfSearchFullscreen() {
        if (edgtf.body.hasClass('edgtf-fullscreen-search')) {

            var searchOpener = $('a.edgtf-search-opener');

            if (searchOpener.length > 0) {

                var searchHolder = $('.edgtf-fullscreen-search-holder'),
                    searchClose = $('.edgtf-search-close');

                searchOpener.on('click', (function (e) {
                    e.preventDefault();

                    if (searchHolder.hasClass('edgtf-animate')) {
                        edgtf.body.removeClass('edgtf-fullscreen-search-opened edgtf-search-fade-out');
                        edgtf.body.removeClass('edgtf-search-fade-in');
                        searchHolder.removeClass('edgtf-animate');

                        setTimeout(function () {
                            searchHolder.find('.edgtf-search-field').val('');
                            searchHolder.find('.edgtf-search-field').blur();
                        }, 300);

                        edgtf.modules.common.edgtfEnableScroll();
                    } else {
                        edgtf.body.addClass('edgtf-fullscreen-search-opened edgtf-search-fade-in');
                        edgtf.body.removeClass('edgtf-search-fade-out');
                        searchHolder.addClass('edgtf-animate');

                        setTimeout(function () {
                            searchHolder.find('.edgtf-search-field').focus();
                        }, 900);

                        edgtf.modules.common.edgtfDisableScroll();
                    }

                    searchClose.on('click', (function (e) {
                        e.preventDefault();
                        edgtf.body.removeClass('edgtf-fullscreen-search-opened edgtf-search-fade-in');
                        edgtf.body.addClass('edgtf-search-fade-out');
                        searchHolder.removeClass('edgtf-animate');

                        setTimeout(function () {
                            searchHolder.find('.edgtf-search-field').val('');
                            searchHolder.find('.edgtf-search-field').blur();
                        }, 300);

                        edgtf.modules.common.edgtfEnableScroll();
                    }));

                    //Close on click away
                    $(document).mouseup(function (e) {
                        var container = $(".edgtf-form-holder-inner");

                        if (!container.is(e.target) && container.has(e.target).length === 0) {
                            e.preventDefault();
                            edgtf.body.removeClass('edgtf-fullscreen-search-opened edgtf-search-fade-in');
                            edgtf.body.addClass('edgtf-search-fade-out');
                            searchHolder.removeClass('edgtf-animate');

                            setTimeout(function () {
                                searchHolder.find('.edgtf-search-field').val('');
                                searchHolder.find('.edgtf-search-field').blur();
                            }, 300);

                            edgtf.modules.common.edgtfEnableScroll();
                        }
                    });

                    //Close on escape
                    $(document).keyup(function (e) {
                        if (e.keyCode === 27) { //KeyCode for ESC button is 27
                            edgtf.body.removeClass('edgtf-fullscreen-search-opened edgtf-search-fade-in');
                            edgtf.body.addClass('edgtf-search-fade-out');
                            searchHolder.removeClass('edgtf-animate');

                            setTimeout(function () {
                                searchHolder.find('.edgtf-search-field').val('');
                                searchHolder.find('.edgtf-search-field').blur();
                            }, 300);

                            edgtf.modules.common.edgtfEnableScroll();
                        }
                    });
                }));

                //Text input focus change
                var inputSearchField = $('.edgtf-fullscreen-search-holder .edgtf-search-field'),
                    inputSearchLine = $('.edgtf-fullscreen-search-holder .edgtf-field-holder .edgtf-line');

                inputSearchField.focus(function () {
                    inputSearchLine.css('width', '100%');
                });

                inputSearchField.blur(function () {
                    inputSearchLine.css('width', '0');
                });
            }
        }
    }

})(jQuery);

(function ($) {
    "use strict";

    var stickyHeader = {};
    edgtf.modules.stickyHeader = stickyHeader;

    stickyHeader.isStickyVisible = false;
    stickyHeader.stickyAppearAmount = 0;
    stickyHeader.behaviour = '';

    stickyHeader.edgtfOnDocumentReady = edgtfOnDocumentReady;

    $(document).ready(edgtfOnDocumentReady);

    /* 
     All functions to be called on $(document).ready() should be in this function
     */
    function edgtfOnDocumentReady() {
        if (edgtf.windowWidth > 1024) {
            edgtfHeaderBehaviour();
        }
    }

    /*
     **	Show/Hide sticky header on window scroll
     */
    function edgtfHeaderBehaviour() {
        var header = $('.edgtf-page-header'),
            stickyHeader = $('.edgtf-sticky-header'),
            fixedHeaderWrapper = $('.edgtf-fixed-wrapper'),
            fixedMenuArea = fixedHeaderWrapper.children('.edgtf-menu-area'),
            fixedMenuAreaHeight = fixedMenuArea.outerHeight(),
            sliderHolder = $('.edgtf-slider'),
            revSliderHeight = sliderHolder.length ? sliderHolder.outerHeight() : 0,
            stickyAppearAmount,
            headerAppear;

        var headerMenuAreaOffset = fixedHeaderWrapper.length ? fixedHeaderWrapper.offset().top - edgtfGlobalVars.vars.edgtfAddForAdminBar : 0;

        switch (true) {
            // sticky header that will be shown when user scrolls up
            case edgtf.body.hasClass('edgtf-sticky-header-on-scroll-up'):
                edgtf.modules.stickyHeader.behaviour = 'edgtf-sticky-header-on-scroll-up';
                var docYScroll1 = $(document).scrollTop();
                stickyAppearAmount = parseInt(edgtfGlobalVars.vars.edgtfTopBarHeight) + parseInt(edgtfGlobalVars.vars.edgtfLogoAreaHeight) + parseInt(edgtfGlobalVars.vars.edgtfMenuAreaHeight) + parseInt(edgtfGlobalVars.vars.edgtfStickyHeaderHeight);

                headerAppear = function () {
                    var docYScroll2 = $(document).scrollTop();

                    if ((docYScroll2 > docYScroll1 && docYScroll2 > stickyAppearAmount) || (docYScroll2 < stickyAppearAmount)) {
                        edgtf.modules.stickyHeader.isStickyVisible = false;
                        stickyHeader.removeClass('header-appear').find('.edgtf-main-menu .second').removeClass('edgtf-drop-down-start');
                        edgtf.body.removeClass('edgtf-sticky-header-appear');
                    } else {
                        edgtf.modules.stickyHeader.isStickyVisible = true;
                        stickyHeader.addClass('header-appear');
                        edgtf.body.addClass('edgtf-sticky-header-appear');
                    }

                    docYScroll1 = $(document).scrollTop();
                };
                headerAppear();

                $(window).scroll(function () {
                    headerAppear();
                });

                break;

            // sticky header that will be shown when user scrolls both up and down
            case edgtf.body.hasClass('edgtf-sticky-header-on-scroll-down-up'):
                edgtf.modules.stickyHeader.behaviour = 'edgtf-sticky-header-on-scroll-down-up';

                if (edgtfPerPageVars.vars.edgtfStickyScrollAmount !== 0) {
                    edgtf.modules.stickyHeader.stickyAppearAmount = parseInt(edgtfPerPageVars.vars.edgtfStickyScrollAmount);
                } else {
                    edgtf.modules.stickyHeader.stickyAppearAmount = parseInt(edgtfGlobalVars.vars.edgtfTopBarHeight) + parseInt(edgtfGlobalVars.vars.edgtfLogoAreaHeight) + parseInt(edgtfGlobalVars.vars.edgtfMenuAreaHeight) + parseInt(revSliderHeight);
                }

                headerAppear = function () {
                    if (edgtf.scroll < edgtf.modules.stickyHeader.stickyAppearAmount) {
                        edgtf.modules.stickyHeader.isStickyVisible = false;
                        stickyHeader.removeClass('header-appear').find('.edgtf-main-menu .second').removeClass('edgtf-drop-down-start');
                        edgtf.body.removeClass('edgtf-sticky-header-appear');
                    } else {
                        edgtf.modules.stickyHeader.isStickyVisible = true;
                        stickyHeader.addClass('header-appear');
                        edgtf.body.addClass('edgtf-sticky-header-appear');
                    }
                };

                headerAppear();

                $(window).scroll(function () {
                    headerAppear();
                });

                break;

            // on scroll down, part of header will be sticky
            case edgtf.body.hasClass('edgtf-fixed-on-scroll'):
                edgtf.modules.stickyHeader.behaviour = 'edgtf-fixed-on-scroll';
                var headerFixed = function () {

                    if (edgtf.scroll <= headerMenuAreaOffset) {
                        fixedHeaderWrapper.removeClass('fixed');
                        edgtf.body.removeClass('edgtf-fixed-header-appear');
                        header.css('margin-bottom', '0');
                    } else {
                        fixedHeaderWrapper.addClass('fixed');
                        edgtf.body.addClass('edgtf-fixed-header-appear');
                        header.css('margin-bottom', fixedMenuAreaHeight + 'px');
                    }
                };

                headerFixed();

                $(window).scroll(function () {
                    headerFixed();
                });

                break;
        }
    }

})(jQuery);
(function ($) {
    'use strict';

    var productListAnimated = {};
    edgtf.modules.productListAnimated = productListAnimated;

    productListAnimated.edgtfInitProductListAnimated = edgtfInitProductListAnimated;


    productListAnimated.edgtfOnDocumentReady = edgtfOnDocumentReady;

    $(document).ready(edgtfOnDocumentReady);

    /*
     All functions to be called on $(document).ready() should be in this function
     */
    function edgtfOnDocumentReady() {
        edgtfInitProductListAnimated();
    }

    /*
     *	Init animation holder shortcode
     */
    function edgtfInitProductListAnimated() {

        var productListAnimatedHolder = $('.edgtf-pl-holder.edgtf-animated-list');

        if (productListAnimatedHolder.length) {
            productListAnimatedHolder.each(function () {
                var thisProductList = $(this).find('.edgtf-pli');

                thisProductList.each(function () {
                    var thisItem = $(this);
                    //thisItemHeight = $(this).outerHeight(),
                    //thisItemOffset = $(this).offset().top;

                    //if(thisItemOffset + thisItemHeight - edgtf.windowHeight - edgtf.scroll < thisItemHeight * 0.9 && edgtf.windowWidth > 1024){
                    if (edgtf.windowWidth > 1024) {
                        thisItem.addClass('edgtf-pli-animated');
                    } else {
                        thisItem.removeClass('edgtf-pli-animated');
                    }
                });
            });
        }
    }

})(jQuery);
(function ($) {
    'use strict';

    var productPair = {};
    edgtf.modules.productPair = productPair;

    productPair.edgtfInitProductPair = edgtfInitProductPair;


    productPair.edgtfOnDocumentReady = edgtfOnDocumentReady;

    $(document).ready(edgtfOnDocumentReady);

    /*
     All functions to be called on $(document).ready() should be in this function
     */
    function edgtfOnDocumentReady() {
        edgtfInitProductPair();
    }

    /*
     *	Init animation holder shortcode
     */
    function edgtfInitProductPair() {

        var productProductPair = $('.edgtf-pp-holder');

        if (productProductPair.length) {
            ParallaxScroll.init();
        }
    }

})(jQuery);