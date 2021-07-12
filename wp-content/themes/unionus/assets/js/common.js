var $ = jQuery;
$.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();

    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
};

$(function() {
    $(
        '.fadeleft-ele , .faderight-ele, .fadein-ele,.fadeinup-ele,.fadeindown-ele,.fadeinup-ele2,.sep-flo,.circular-info,.little-gold-bar'
    ).css({
        opacity: 0,
    });

    $('.sep').css({ width: '10%', opacity: 0 });
    $('.sep2').css({ width: '10%', opacity: 0 });

    $('.little-gold-bar').css({ width: '1px', opacity: 0 });
    // console.log(/1);
    // alert(3);
    window.onload = function() {
        checkvisible();
    };
    // checkvisible();
    // });

    // console.log(2);

    $(window).on('scroll', function() {
        // console.log(1);

        $('.top-menu-div').css({
            background: 'rgb(33 34 45 / 92%)',
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
        // console.log(888);
        // }
        checkvisible();
    });

    function checkvisible() {
        for (i = 0; i < $('.fadeleft-ele').length; i++) {
            if (
                $('.fadeleft-ele').eq(i).isInViewport() &&
                !$('.fadeleft-ele').eq(i).hasClass('animate__animated')
            ) {
                $('.fadeleft-ele').eq(i).addClass('animate__animated');
                $('.fadeleft-ele').eq(i).addClass('fadeInLeft2');
                $('.fadeleft-ele').eq(i).addClass('delay-3');
            }
        }
        for (i = 0; i < $('.faderight-ele').length; i++) {
            if (
                $('.faderight-ele').eq(i).isInViewport() &&
                !$('.faderight-ele').eq(i).hasClass('animate__animated')
            ) {
                $('.faderight-ele').eq(i).addClass('animate__animated');
                $('.faderight-ele').eq(i).addClass('fadeInRight2');
                $('.faderight-ele').eq(i).addClass('delay-3');
            }
        }
        for (i = 0; i < $('.fadein-ele').length; i++) {
            if (
                $('.fadein-ele').eq(i).isInViewport() &&
                !$('.fadein-ele').eq(i).hasClass('animate__animated')
            ) {
                $('.fadein-ele').eq(i).addClass('animate__animated');
                $('.fadein-ele').eq(i).addClass('animate__fadeIn');
                $('.fadein-ele').eq(i).addClass('delay-2');
            }
        }

        for (i = 0; i < $('.sep-flo').length; i++) {
            if (
                $('.sep-flo').eq(i).isInViewport() &&
                !$('.sep-flo').eq(i).hasClass('animate__animated')
            ) {
                $('.sep-flo').eq(i).addClass('animate__animated');
                $('.sep-flo').eq(i).addClass('animate__fadeIn');
                $('.sep-flo').eq(i).addClass('delay-2');
            }
        }

        for (i = 0; i < $('.sep').length; i++) {
            if (
                $('.sep').eq(i).isInViewport() &&
                !$('.sep').eq(i).hasClass('animate__animated')
            ) {
                $('.sep').eq(i).addClass('animate__animated');
                $('.sep')
                    .eq(i)
                    .delay(500)
                    .animate({ width: '100%', opacity: 1 }, 500, 'swing');
            }
        }

        for (i = 0; i < $('.sep2').length; i++) {
            if (
                $('.sep2').eq(i).isInViewport() &&
                !$('.sep2').eq(i).hasClass('animate__animated')
            ) {
                $('.sep2').eq(i).addClass('animate__animated');
                $('.sep2')
                    .eq(i)
                    .delay(500)
                    .animate({ width: '100%', opacity: 1 }, 500, 'swing');
            }
        }

        for (i = 0; i < $('.little-gold-bar').length; i++) {
            if (
                $('.little-gold-bar').eq(i).isInViewport() &&
                !$('.little-gold-bar').eq(i).hasClass('animate__animated')
            ) {
                $('.little-gold-bar').eq(i).addClass('animate__animated');
                $('.little-gold-bar')
                    .eq(i)
                    .delay(500)
                    .animate({ width: '100px', opacity: 1 }, 500, 'swing');
            }
        }

        //

        //
        for (i = 0; i < $('.fadeinup-ele').length; i++) {
            if (
                $('.fadeinup-ele').eq(i).isInViewport() &&
                !$('.fadeinup-ele').eq(i).hasClass('animate__animated')
            ) {
                $('.fadeinup-ele').eq(i).addClass('animate__animated');
                $('.fadeinup-ele').eq(i).addClass('animate__fadeInUp');
                $('.fadeinup-ele').eq(i).addClass('delay-4');
            }
        }
        for (i = 0; i < $('.fadeindown-ele').length; i++) {
            if (
                $('.fadeindown-ele').eq(i).isInViewport() &&
                !$('.fadeindown-ele').eq(i).hasClass('animate__animated')
            ) {
                $('.fadeindown-ele').eq(i).addClass('animate__animated');
                $('.fadeindown-ele').eq(i).addClass('animate__fadeInDown');
                $('.fadeindown-ele').eq(i).addClass('delay-4');
            }
        }

        for (i = 0; i < $('.fadeinup-ele2').length; i++) {
            if (
                $('.fadeinup-ele2').eq(i).isInViewport() &&
                !$('.fadeinup-ele2').eq(i).hasClass('animate__animated')
            ) {
                $('.fadeinup-ele2').eq(i).addClass('animate__animated');
                $('.fadeinup-ele2').eq(i).addClass('fadeInUp2');
                $('.fadeinup-ele2').eq(i).addClass('delay-3');
            }
        }

        if (
            $('.circular-info').isInViewport() &&
            !$('.circular-info').hasClass('animate__animated')
        ) {
            $('.circular-info').addClass('animate__animated');
            $('.circular-info').addClass('animate__rotateIn');
            $('.circular-info').addClass('delay-3');
        }
    }

    $('.mobile-menu-btn').click(function() {
        // var menu_h = $('.menu-ul').height();

        if ($(this).hasClass('opened')) {
            // $('.top-menu-div').fadeIn(200);
            $('.top-menu-div').css({ height: '100%' });
            $('.top-menu-div .top-menu li').fadeIn(200);
        } else {
            $('.top-menu-div').css({ height: 'auto' });
            $('.top-menu-div .top-menu li').fadeOut(0);
            $('.top-menu-div .top-menu li:first-child').fadeIn(0);
        }
    });

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

    $('.top-menu-div').mouseenter(function() {
        $(this).css({ background: 'rgba(33, 34, 45, 0.7)' });
    });
    $('.mobile-menu-submenu').mouseleave(function() {
        if ($(window).width() > 1280) {
            $(this).fadeOut(0);
        }
    });

    $('.back-to-top').click(function() {
        var body = $('html, body');
        body.stop().animate({ scrollTop: 0 }, 200, function() {
            // alert('Finished animating');
        });
    });

    $(window).resize(function() {
        if ($(window).width() > 1280) {
            $('.top-menu-div .top-menu li').css({ display: 'inline-block' });
            $('.mobile-menu-btn').removeClass('opened');
            $('.service-btn').removeClass('open');
        }

        if ($(window).width() <= 1280) {
            $('.service-btn').removeClass('open');
            $('.mobile-menu-btn').removeClass('opened');
            // if ($(this).hasClass('open')) {
            // $(this).next('.mobile-menu-submenu').slideDown(500);
            // } else {
            // $('.service-btn').next('.mobile-menu-submenu').fadeOut(0);

            $('.top-menu-div').css({ height: 'auto' });
            $('.top-menu-div .top-menu li').fadeOut(0);
            $('.top-menu-div .top-menu li:first-child').fadeIn(0);
        }
    });
});