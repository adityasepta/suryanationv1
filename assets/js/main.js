(function($) {
    "use strict";

    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    }

    function backgroundImage() {
        var databackground = $('[data-background]');
        databackground.each(function() {
            if ($(this).attr('data-background')) {
                var image_path = $(this).attr('data-background');
                $(this).css({
                    'background': 'url(' + image_path + ')'
                });
            }
        });
    }

    function parallax() {
        $('.bg--parallax').each(function() {
            var el = $(this),
                xpos = "50%",
                windowHeight = $(window).height();
            if (isMobile.any()) {
                $(this).css('background-attachment', 'scroll');
            } else {
                $(window).scroll(function() {
                    var current = $(window).scrollTop(),
                        top = el.offset().top,
                        height = el.outerHeight();
                    if (top + height < current || top > current + windowHeight) {
                        return;
                    }
                    el.css('backgroundPosition', xpos + " " + Math.round((top - current) * 0.15) + "px");
                });
            }
        });
    }

    function menuBtnToggle() {
        var toggleBtn = $('.menu-toggle'),
            sidebar = $('.header--sidebar'),
            menu = $('.menu');
        toggleBtn.on('click', function() {
            $(this).toggleClass('active');
            if ($(this).hasClass('active')) {
                $(this).closest('.header').find('.menu--mobile').find('.sub-menu').slideUp();
            }
            $(this).closest('.header').find('.menu--mobile').slideToggle();

        });
    }

    function subMenuToggle() {
        $('body').on('click', '.header .menu--mobile .menu-item-has-children > a', function(event) {
            event.preventDefault();
            var current = $(this).parent('.menu-item-has-children')
            current.children('.sub-menu').slideToggle(350);
            current.children('.mega-menu').slideToggle(350);
            current.siblings().find('.sub-menu').slideUp(350);
            current.siblings().find('.mega-menu').slideUp(350);
        });
    }

    function resizeHeader() {
        var header = $('.header'),
            headerSidebar = $('.header--sidebar'),
            menu = $('.header .menu'),
            checkPoint = 1200,
            windowWidth = $(window).innerWidth();
        // mobile
        if (checkPoint > windowWidth) {
            menu.addClass('menu--mobile');
        }
        else {
            menu.find('.sub-menu').show();
            menu.removeClass('menu--mobile');
            $('.menu-toggle').removeClass('active');
        }
    }

    function headerSidebar() {
        var sidebar = $('.header--sidebar'),
            toggleBtn = $('.menu-toggle');

        if (sidebar.length > 0) {
            toggleBtn.on('click', function(e) {
                e.preventDefault();
                sidebar.addClass('active');
            });
            var closeBtn = sidebar.find('.header__close');
            closeBtn.on('click', function(e) {
                e.preventDefault();
                sidebar.removeClass('active');
                toggleBtn.removeClass('active');
            });
            $('body').on('click', '.header--sidebar .menu .menu-item-has-children > a', function(event) {
                event.preventDefault();
                var current = $(this).parent('.menu-item-has-children');
                current.children('.sub-menu').slideToggle(350);
                current.siblings().find('.sub-menu').slideUp(350);
            });
        }
    }

    function owlCarousel() {
        var target = $('.owl-slider');
        if (target.length > 0) {
            target.each(function() {
                var el = $(this),
                    dataAuto = el.data('owl-auto'),
                    dataLoop = el.data('owl-loop'),
                    dataSpeed = el.data('owl-speed'),
                    dataGap = el.data('owl-gap'),
                    dataNav = el.data('owl-nav'),
                    dataDots = el.data('owl-dots'),
                    dataAnimateIn = (el.data('owl-animate-in')) ? el.data('owl-animate-in') : '',
                    dataAnimateOut = (el.data('owl-animate-out')) ? el.data('owl-animate-out') : '',
                    dataDefaultItem = el.data('owl-item'),
                    dataItemXS = el.data('owl-item-xs'),
                    dataItemSM = el.data('owl-item-sm'),
                    dataItemMD = el.data('owl-item-md'),
                    dataItemLG = el.data('owl-item-lg'),
                    dataNavLeft = (el.data('owl-nav-left')) ? el.data('owl-nav-left') : "<i class='fa fa-angle-left'></i>",
                    dataNavRight = (el.data('owl-nav-right')) ? el.data('owl-nav-right') : "<i class='fa fa-angle-right'></i>",
                    duration = el.data('owl-duration'),
                    datamouseDrag = (el.data('owl-mousedrag') === 'on') ? true : false;
                el.owlCarousel({
                    animateIn: dataAnimateIn,
                    animateOut: dataAnimateOut,
                    margin: dataGap,
                    autoplay: dataAuto,
                    autoplayTimeout: dataSpeed,
                    autoplayHoverPause: true,
                    loop: dataLoop,
                    nav: dataNav,
                    mouseDrag: datamouseDrag,
                    touchDrag: true,
                    autoplaySpeed: duration,
                    navSpeed: duration,
                    dotsSpeed: duration,
                    dragEndSpeed: duration,
                    navText: [dataNavLeft, dataNavRight],
                    dots: dataDots,
                    items: dataDefaultItem,
                    responsive: {
                        0: {
                            items: dataItemXS
                        },
                        480: {
                            items: dataItemSM
                        },
                        768: {
                            items: dataItemMD
                        },
                        992: {
                            items: dataItemLG
                        },
                        1200: {
                            items: dataDefaultItem
                        }
                    }
                });
            });
        }
    }

    function masonry() {
        var masonryTrigger = $('.ps-masonry');
        if (masonryTrigger.length > 0) {
            masonryTrigger.imagesLoaded(function() {
                masonryTrigger.masonry({
                    columnWidth: '.grid-sizer',
                    itemSelector: '.grid-item'
                });
            });
            var filters = masonryTrigger.closest('.masonry-root').find('.ps-masonry__filter > li > a');
            filters.on('click', function() {
                var selector = $(this).attr('data-filter');
                filters.find('a').removeClass('current');
                $(this).parent('li').addClass('current');
                $(this).parent('li').siblings('li').removeClass('current');
                $(this).closest('.masonry-root').find('.ps-masonry').isotope({
                    itemSelector: '.grid-item',
                    isotope: {
                        columnWidth: '.grid-sizer'
                    },
                    filter: selector
                });
                return false;
            });
        }
    }

    function countDown() {
        var time = $(".ps-countdown");
        time.each(function() {
            var el = $(this),
                value = $(this).data('time');
            var countDownDate = new Date(value).getTime();
            var timeout = setInterval(function() {
                var now = new Date().getTime(),
                    distance = countDownDate - now;
                var days = Math.floor(distance / (1000 * 60 * 60 * 24)),
                    hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)),
                    minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)),
                    seconds = Math.floor((distance % (1000 * 60)) / 1000);
                // el.find('.days').html(days);
                if (el.find('.days').length > 0) {
                    el.find('.days').html(days);
                    if (hours < 10) {
                        el.find('.hours').html("0" + hours);
                    }
                    else {
                        el.find('.hours').html(hours);
                    }
                }
                else {
                    el.find('.hours').html(days * 24 + hours);
                }
                if (minutes < 10) {
                    el.find('.minutes').html("0" + minutes);
                }
                else {
                    el.find('.minutes').html(minutes);
                }
                if (seconds < 10) {
                    el.find('.seconds').html("0" + seconds);
                }
                else {
                    el.find('.seconds').html(seconds);
                }

                if (distance < 0) {
                    clearInterval(timeout);
                }
            }, 1000);
        });
    }

    function rating() {
        $('select.ps-rating').barrating({
            theme: 'fontawesome-stars'
        });
    }

    function mapConfig() {
        $.gmap3({
            key: 'AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg'
        });
        var map = $('#contact-map');
        if (map.length > 0) {
            map.gmap3({
                address: map.data('address'),
                zoom: map.data('zoom'),
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scrollwheel: false,
                styles: [
                    {
                        "featureType": "administrative",
                        "elementType": "all",
                        "stylers": [
                            {
                                "saturation": "-100"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.province",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": 65
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": "50"
                            },
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [
                            {
                                "saturation": "-100"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "all",
                        "stylers": [
                            {
                                "lightness": "30"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "all",
                        "stylers": [
                            {
                                "lightness": "40"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [
                            {
                                "saturation": -100
                            },
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "hue": "#ffff00"
                            },
                            {
                                "lightness": -25
                            },
                            {
                                "saturation": -97
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels",
                        "stylers": [
                            {
                                "lightness": -25
                            },
                            {
                                "saturation": -100
                            }
                        ]
                    }
                ]
            }).marker(function(map) {
                return {
                    position: map.getCenter(),
                    icon: 'images/marker.png',
                    animation: google.maps.Animation.BOUNCE
                };
            }).infowindow({
                content: map.data('address')
            }).then(function(infowindow) {
                var map = this.get(0);
                var marker = this.get(1);
                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
            });
        }
        else {
            console.log("Notice: Don't have map on this page!!!");
        }
    }

    function bootstrapSelect() {
        $('select.ps-select').selectpicker();
    }

    function search() {
        var searchOpen = $('.ps-btn--search-open'),
            searchClose = $('.ps-btn--search-close'),
            searchbox = $('.ps-search');
        searchOpen.on('click', function(e) {
            e.preventDefault();
            searchbox.addClass('open');
        });
        searchClose.on('click', function(e) {
            e.preventDefault();
            searchbox.removeClass('open');
        });
    }

    function slickConfig() {
        var primary = $('.ps-product__images-large'),
            second = $('.ps-product__nav'),
            vertical;
        if (second.closest('.ps-product--detail').hasClass('bottom')) {
            vertical = false;
        }
        else {
            vertical = true;
        }
        primary.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: '.ps-product__nav',
            dots: false,
            arrows: false,
        });
        second.slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            arrow: false,
            focusOnSelect: true,
            asNavFor: '.ps-product__images-large',
            vertical: vertical,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        arrows: false,
                        slidesToShow: 4,
                        vertical: false
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        vertical: false
                    }
                },
            ]
        });
    }

    function backToTop() {
        var scrollPos = 0;
        var element = $('#back2top');
        $(window).scroll(function() {
            var scrollCur = $(window).scrollTop();
            if (scrollCur > scrollPos) {
                // scroll down
                if (scrollCur > 500) {
                    element.addClass('active');
                } else {
                    element.removeClass('active');
                }
            } else {
                // scroll up
                element.removeClass('active');
            }

            scrollPos = scrollCur;
        });

        element.on('click', function() {
            $('html, body').animate({
                scrollTop: '0px'
            }, 800);
        })
    }

    function popupConfig() {
        $('.single-image-popup').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            mainClass: 'mfp-img-mobile',
            image: {
                verticalFit: true,

            },
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1]
            },
        });
        $('.video-popup').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
    }

    function accordion() {
        var accordion = $('.ps-accordion__header');
        $('.ps-accordion__content').hide();
        $('.ps-accordion.active .ps-accordion__content').show();
        accordion.on('click', function(e) {
                e.preventDefault();
                var el = $(this),
                    parent = el.closest('.ps-accordion');
                if (parent.hasClass('active')) {
                    parent.removeClass('active');
                    parent.find('.ps-accordion__content').slideUp(300);
                }
                else {
                    parent.addClass('active');
                    parent.find('.ps-accordion__content').slideDown(300);
                }
                parent.siblings('.ps-accordion').removeClass('active');
                parent.siblings('.ps-accordion').find('.ps-accordion__content').slideUp(300);
            }
        );
        if ($('.widget_shop_categories').length > 0) {
            var shop_categories = $('.widget_shop_categories ul li.has-sub a');
            shop_categories.on('click', function(e) {
                e.preventDefault();
                var parent = $(this).closest('.has-sub');
                if (parent.hasClass('current')) {
                    parent.removeClass('current');
                    parent.find('ul').slideUp(500);
                }
                else {
                    parent.addClass('current');
                    parent.find('ul').slideDown(500);
                }
                parent.siblings('.has-sub').removeClass('current');
                parent.siblings('.has-sub').find('ul').slideUp(500);
            });
        }
    }

    function filterSlider() {
        var el = $('.ps-slider');
        var min = el.siblings().find('.ps-slider__min');
        var max = el.siblings().find('.ps-slider__max');
        var defaultMinValue = el.data('default-min');
        var defaultMaxValue = el.data('default-max');
        var maxValue = el.data('max');
        var step = el.data('step');
        if (el.length > 0) {
            el.slider({
                min: 0,
                max: maxValue,
                step: step,
                range: true,
                values: [defaultMinValue, defaultMaxValue],
                slide: function(event, ui) {
                    var values = ui.values;
                    min.text('$' + values[0]);
                    max.text('$' + values[1]);
                }
            });
            var values = el.slider("option", "values");
            console.log(values[1]);
            min.text('$' + values[0]);
            max.text('$' + values[1]);
        }
        else {
            // return false;
        }
    }

    function modal() {
        $('.ps-modal-trigger').on('click', function(e) {
            e.preventDefault();
            var target = $(this).attr("href");
            console.log(target);
            $(target).addClass('active');
        })
        $('.ps-modal__remove').on('click', function(e) {
            e.preventDefault();
            $(this).closest('.ps-modal').removeClass('active');
        });
    }

    function sticky() {
        var checkPoint = 1200,
            windowWidth = $(window).innerWidth();
        // mobile
        if (checkPoint > windowWidth) {
            var stickySidebar = new StickySidebar('.ps-sticky .ps-sticky__target');
            stickySidebar.destroy();
        }
        else {
            var sticky = $('.ps-sticky');
            if (sticky.length > 0) {
                var sticky_init = new StickySidebar('.ps-sticky .ps-sticky__target', {
                    topSpacing: 20,
                    bottomSpacing: 20,
                    containerSelector: '.ps-sticky'
                });
            }
            else {
                return false;
            }
        }
    }

    function search() {
        var searchOpen = $('.ps-search-btn'),
            searchClose = $('.ps-search__close'),
            searchbox = $('.ps-search');
        searchOpen.on('click', function(e) {
            e.preventDefault();
            searchbox.addClass('open');
        });
        searchClose.on('click', function(e) {
            e.preventDefault();
            searchbox.removeClass('open');
        });
    }

    function stickyHeader() {
        var header = $('.header'),
            isSticky = (header.data('sticky')),
            scrollPosition = 0,
            headerTopHeight = $('.header .header__top').outerHeight(),
            checkpoint = 300;
        if (isSticky === true) {
            $(window).scroll(function() {
                var currentPosition = $(this).scrollTop();
                if (currentPosition < scrollPosition) {
                    // On top
                    if (currentPosition === 0) {
                        header.removeClass('navigation--sticky navigation--unpin navigation--pin');
                        header.css("margin-top", 0);
                    }
                    // on scrollUp
                    else if (currentPosition > checkpoint) {
                        header.removeClass('navigation--unpin').addClass('navigation--sticky navigation--pin');
                    }
                }
                // On scollDown
                else {
                    if (currentPosition > checkpoint) {
                        header.addClass('navigation--unpin').removeClass('navigation--pin');
                    }
                }
                scrollPosition = currentPosition;
            });
        }
        else {
            return false;
        }

    }

    function customTab() {
        var el = $('.ps-tab-filter li > a');
        el.on('click', function(e) {
            e.preventDefault();
            var target = $(this).attr('href');
            if (target.length > 0) {
                $(this).closest('li').addClass('current');
                $(this).closest('li').siblings('li').removeClass('current');
                $(target).addClass('active');
                $(target).siblings('.ps-tab').removeClass('active');
            }
            else {
                console.log('Not found #taget, please check carefully!');
            }
        });
    }

    $(document).ready(function() {
        backgroundImage();
        parallax();
        owlCarousel();
        bootstrapSelect();
        menuBtnToggle();
        subMenuToggle();
        masonry();
        stickyHeader();
        mapConfig();
        rating();
        countDown();
        slickConfig();
        popupConfig();
        accordion();
        backToTop();
        headerSidebar();
        filterSlider();
        modal();
        search();
        customTab();
        new WOW().init();
    });

    $(window).on('load', function() {
        $('.ps-loading').addClass('loaded');
        stickyHeader();
    });

    $(window).on('load resize', function() {
        resizeHeader();
        // sticky();
    });
})(jQuery);
