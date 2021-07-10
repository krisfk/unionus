var $ = jQuery;
$.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();

    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
};

$(function() {
    $('.top-menu-div .top-menu li a.level-1').mouseenter(function() {
        if ($(window).width() > 1280) {
            if ($(this).hasClass('service-btn')) {
                $(this).next('.mobile-menu-submenu').fadeIn(200);
            } else {
                $('.mobile-menu-submenu').fadeOut(0);
            }
        }
    });

    $('.service-btn').click(function(e) {
        e.preventDefault();
        if ($(window).width() <= 1280) {
            $('.service-btn').toggleClass('open');
            if ($(this).hasClass('open')) {
                $(this).next('.mobile-menu-submenu').slideDown(200);
            } else {
                $(this).next('.mobile-menu-submenu').fadeOut(0);
            }
        }
    });

    $('.top-menu-div .top-menu li a.level-1').mouseleave(function() {
        if ($(window).width() > 1280) {
            $('.mobile-menu-submenu').delay(100).fadeOut(0);
        }
    });

    $('.mobile-menu-submenu').mouseenter(function() {
        $('.mobile-menu-submenu').clearQueue().stop(); //.fadeIn(0);
        $(this).fadeIn(0);
    });
    $('.mobile-menu-submenu').mouseleave(function() {
        if ($(window).width() > 1280) {
            $(this).fadeOut(0);
        }
    });

    $(window).scroll(function(event) {
        $('.top-menu-div').css({
            background: 'rgb(33 34 45 / 70%)',
        });
        var scroll = $(window).scrollTop();
        if ($('body').hasClass('home')) {
            if (scroll > 100) {
                $('.top-menu-logo-a').fadeIn(500);
            } else {
                $('.top-menu-logo-a').fadeOut(500);
            }
        }

        // if (scroll > 100) {
        if ($(window).width() < 991 && scroll > 100) {
            $('.bottom-fix-nav').fadeIn(0);
        } else {
            $('.bottom-fix-nav').fadeOut(0);
        }
        // }
    });

    $('.back-to-top').click(function() {
        var body = $('html, body');
        body.stop().animate({ scrollTop: 0 }, 200, function() {
            // alert('Finished animating');
        });
    });
});