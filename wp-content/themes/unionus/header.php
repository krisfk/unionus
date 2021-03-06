<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->


    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.easing.1.3.js">
    </script>

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/locomotive-scroll.css" />
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/locomotive-scroll.min.js">
    </script> -->
    <!-- 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/ScrollTrigger.min.js">
    </script>
 -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js">
    </script>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <script type="text/javascript">
    // alert(6);
    var browser = (function() {
        var test = function(regexp) {
            return regexp.test(window.navigator.userAgent);
        };
        switch (true) {
            case test(/edg/i):
                return 'Microsoft Edge';
            case test(/trident/i):
                return 'Microsoft Internet Explorer';
            case test(/firefox|fxios/i):
                return 'Mozilla Firefox';
            case test(/opr\//i):
                return 'Opera';
            case test(/ucbrowser/i):
                return 'UC Browser';
            case test(/samsungbrowser/i):
                return 'Samsung Browser';
            case test(/chrome|chromium|crios/i):
                return 'Google Chrome';
            case test(/safari/i):
                return 'Apple Safari';
            default:
                return 'Other';
        }
    })();



    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '298813945528508');
    fbq('track', 'PageView');
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js">
    </script> -->


</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php
     if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
        $lang_code = ICL_LANGUAGE_CODE;
      }

    ?>
    <div id="wptime-plugin-preloader"></div>

    <table class="bottom-fix-nav">
        <tr>
            <td>
                <a href="https://api.whatsapp.com/send?phone=85295888032" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wts-icon.png" alt="">
                    <div>
                        <?php echo ($lang_code == 'zh-hant') ? 'WhatsApp':'WhatsApp'; ?>
                    </div>
                </a>
            </td>
            <td>
                <a href="tel:26613222" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bottom-icon-1.png" alt="">
                    <div>
                        <?php echo ($lang_code == 'zh-hant') ? '???????????????':'Contact'; ?>

                    </div>
                </a>
            </td>
            <td>

                <a href="mailto:unionusgroup@gmail.com" target="_blank"> <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/bottom-icon-2.png" alt="">
                    <div>
                        <?php echo ($lang_code == 'zh-hant') ? '??????':'Email'; ?>


                    </div>
                </a>
            </td>
            <td>
                <a href="javascript:void(0);" class="back-to-top"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/bottom-icon-3.png" alt="">
                    <div>TOP</div>
                </a>
            </td>
        </tr>
    </table>


    <img class="bg-shape-1" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-shape-1.png" alt="">
    <img class="bg-shape-2" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-shape-2.png" alt="">

    <!-- 
    <a href="https://api.whatsapp.com/send?phone=85298888135" target="_blank" class="wts-icon-a"><img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/wts-icon.png" alt=""></a> -->

    <!-- <button class="mobile-menu-btn"
        onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))"
        aria-label="Main Menu" aria-expanded="false">
        <svg width="50" height="50" viewBox="0 0 100 100">
            <path class="line line1"
                d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058">
            </path>
            <path class="line line2" d="M 20,50 H 80"></path>
            <path class="line line3"
                d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942">
            </path>
        </svg>
    </button> -->


    <a href="<?php echo get_site_url();?>" class="top-menu-logo-a">
        <img class="top-menu-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
    </a>

    <div class="top-menu-div">



        <?php
//         echo 999;
// $lang_code='zh-hant';
// switch ($lang_code)
// {
    // case 'zh-hant':
        $main_menu = wp_get_menu_array('main menu');

//         break;
//         case 'cn':
//             $main_menu = wp_get_menu_array('main menu cn');


//         break;
//             case 'en':
//                 $main_menu = wp_get_menu_array('main menu en');

//         break;
// }
?>


        <ul class="top-menu">

            <li>
                <a href="<?php echo get_site_url();?>" class="mobile-menu-logo-a position-relative">
                    <img class="mobile-menu-logo"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-2.png" alt="">
                </a>
                <button class="mobile-menu-btn"
                    onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))"
                    aria-label="Main Menu" aria-expanded="false">
                    <svg width="50" height="50" viewBox="0 0 100 100">
                        <path class="line line1"
                            d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058">
                        </path>
                        <path class="line line2" d="M 20,50 H 80"></path>
                        <path class="line line3"
                            d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942">
                        </path>
                    </svg>
                </button>

            </li>

            <?php


foreach ($main_menu as $menu_item) {

    $url = $menu_item['url'];
    $title = $menu_item['title'];
    $class = $menu_item['class'];

    $temp_arr=explode(get_site_url(),$url);
    $slug=str_replace('/en/','',$temp_arr[1]);
    $slug=str_replace('/cn/','',$slug);
    $slug=str_replace('/','',$slug);
    
    
    if(count($menu_item['children']))
    {
      
        echo '<li><a class="level-1 parent '.$class.'" href="'.$url.'">'.$title.'</a>';
    
     
        echo '<ul class="mobile-menu-submenu">';
?>

            <?php
        
        foreach ($menu_item['children'] as $sub_menu_item) 
        {
            $sub_url = $sub_menu_item['url'];
            $sub_title = $sub_menu_item['title'];
            
            $sub_temp_arr=explode(get_site_url(),$sub_url);
            $sub_slug=str_replace('/en/','',$sub_temp_arr[1]);
            $sub_slug=str_replace('/cn/','',$sub_slug);
            $sub_slug=str_replace('/','',$sub_slug);
            echo'<li><a class="'.$sub_slug.'" href="'.$sub_url.'">'.$sub_title.'</a></li>';
        }
        echo '</ul>';
    
    }
    else
    {
    echo '<li><a class="level-1 '.$slug.' '.$class.'" href="'.$url.'">'.$title.'</a>';
    
    }
    echo'</li>';
    
    
    }
    
    $langs= icl_get_languages('skip_missing=0&orderby=custom&order=asc&link_empty_to=');

    ?>

            <li>

                <div class="lang-div">
                    <a href="<?php echo $langs['zh-hant']['url'];?>">???</a><span class="sep">|</span>
                    <a href="<?php echo $langs['en']['url'];?>">Eng</a>

                </div>
            </li>


            <li class="sm-icon-li">
                <a href="https://www.facebook.com/hkunionus" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sm-icon-1.png" alt="">
                </a>

                <a href="https://instagram.com/unionus.hk?utm_medium=copy_link" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sm-icon-2.png" alt="">
                </a>

                <a href="https://www.youtube.com/channel/UCvVmJKAFmRaYFsaE58FkhIg" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sm-icon-3.png" alt="">
                </a>


            </li>



        </ul>



    </div>
    <div class="menu-div">

        <div class="menu-middle">

            <div class="menu-white-line"></div>
            <ul class="menu-ul">

                <li><a href="#" class="active"> ??????</a></li>
                <li><a href="#">UNIONUS?????????</a></li>
                <li><a href="#">??????</a></li>
                <li><a href="#">??????</a></li>
                <li><a href="#">??????</a></li>
                <li><a href="#">????????????</a></li>
            </ul>
            <div class="menu-white-line"></div>


            <div class="menu-bottom-el">
                <div class="mt-5">
                    ???????????????UNIONUS??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????Human
                    nature?????????????????????</div>


                <div class="mt-5 text-center"> <a href="#" class="unionus-btn">???????????? ></a>
                </div>

                <ul class="social-icon">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-1.png" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-2.png" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-3.png" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-4.png" alt=""></li>
                </ul>
            </div>
        </div>

    </div>

    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

        <?php //get_template_part( 'template-parts/header/site-header' ); ?>

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">