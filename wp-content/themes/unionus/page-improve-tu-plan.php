<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>




<section class="sec1 pt-const2">

    <div class="container">

        <div class="text-center">
            <h1 class="mx-auto gold">TU <br>
                (個人環聯信貸報告)改善方案</h1>
        </div>

        <div class="text-center mt-7">

            <div class="little-gold-bar mx-auto"></div>
            <h2 class="gold mt-5">信貸評分因素</h2>
        </div>







    </div>
</section>



<section class="sec2  pt-const2">


    <!-- <div class="container inner-container2"> -->

    <!-- <div class="row"> -->

    <ul class="row-ul">

        <li class=" text-center"><img class="big-icon"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/big-icon-1.png" alt=""></li>
        <li class="">
            <h2 class="gold">有限公司</h2>
            雖然大家可以親身到公司註冊處辦公室(政府合署14樓) 或郵寄遞交公司註冊申請。 <br>
            但以網上「註冊易」提交申請會更方便快捷及節省批核時間。 <br>
            詳請: <a class="normal" href="https://www.cr.gov.hk/tc/services/register-company.htm">
                https://www.cr.gov.hk/tc/services/register-company.htm</a> <br>
            註冊連結: <a class="normal"
                href="https://www.eregistry.gov.hk/icris-ext/apps/uam01?execution=e1s1&m=n">https://www.eregistry.gov.hk/icris-ext/apps/uam01?execution=e1s1&m=n</a>
            <br>


        </li>
    </ul>



    <ul class="row-ul mt-5">

        <li>
            <h2 class="gold">無限公司</h2>

            只需作商業登記 <br>
            詳請及申請示範: <br>

            <a class="normal"
                href="https://www.ird.gov.hk/chi/demo/br_online_demo/chi554/brr554/index.htm">https://www.ird.gov.hk/chi/demo/br_online_demo/chi554/brr554/index.htm</a>



        </li>

        <li><img class="big-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/big-icon-2.png" alt="">
        </li>
    </ul>



    <ul class="row-ul mt-5">

        <li class=" text-center"><img class="big-icon"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/big-icon-3.png" alt=""></li>
        <li class="">
            <h2 class="gold">公司綠盒</h2>

            雖然「綠盒」並不是法例規定的工具，但一般秘書公司都會提供，以確保客人有備存公司重要文件。公司綠盒包括: <br>

            <ul class="row-ul-ul">
                <li>必須備存的文件: 重要人控制人登記冊、公司章程、公司成立登記證書、商業登記證書、政府的文件副本 (例如NNC1和NNC3)、法定登記冊(可以電子方式紀錄)</li>
                <li>日常業務用: 公司簽名印、公司圓印</li>
                <li>不是必要但有機會用到: 公司鋼印、股票書</li>

            </ul>



        </li>
    </ul>



    <ul class="row-ul mt-5">

        <li>
            <h2 class="gold">登記地址</h2>

            沒有商業地址的公司(例如網店或Freelance)在做商業登記的時候可以用個人住址注冊(包括公屋)。但為保障私隱，還是建議大家購買虛擬辦公室(Virtual Office) 服務獲取一個公司地址。


        </li>

        <li><img class="big-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/big-icon-4.png" alt="">
        </li>
    </ul>




</section>






<!-- 



<nav>
    <ul>
        <li class="dot1 dot" id="ec1">
            <div class="dot-menu-page-txt">公司簡介</div>
        </li>
        <li class="dot2 dot" id="ec2">
            <div class="dot-menu-page-txt">人性化的服務承諾</div>

        </li>
        <li class="dot3 dot" id="ec3">
            <div class="dot-menu-page-txt">顧客服務</div>

        </li>
        <li class="dot4 dot" id="ec4">
            <div class="dot-menu-page-txt">服務承諾
            </div>

        </li>
        <li class="dot5 dot" id="ec5">
            <div class="dot-menu-page-txt">服務項目

            </div>
        </li>

    </ul>
</nav> -->



<script type="text/javascript">
const skrollrObj = skrollr.init();
</script>

<script type="text/javascript">
$(function() {





    // $('.home-banner-div').width($(window).width());
    // $('.home-banner-div').height($(window).height());


    // $('.company-intro-content-1').css({
    //     'top': $('.company-intro-row-div').height() / 2 - $('.company-intro-content-1').height() - 30 +
    //         'px'
    // })

    // $('.company-intro-content-2').css({
    //     'bottom': $('.company-intro-row-div').height() / 2 - $('.company-intro-content-2').height() -
    //         30 +
    //         'px'
    // })


    setTimeout(() => {

        $('.rolling-slogan').animate({
            'opacity': '1'
        }, 1000);

        $('.rolling-slogan').css({
            'margin-top': ($(window).height() - $('.rolling-slogan').height()) / 2 + 'px',
            'opacity': '1',
            'margin-left': ($(window).width() / 2 - $('.rolling-slogan').width()) / 2 + 'px',

        });

    }, 1000);


    function changeDot() {

        $('.top-menu-div').css({
            'background': 'rgb(33 34 45 / 70%)'
        })
        const scrollValue = $(window).scrollTop();
        const heightSec2 = $('.sec2').offset().top;
        const heightSec3 = $('.sec3').offset().top;
        const heightSec4 = $('.sec4').offset().top;
        const heightSec5 = $('.sec5').offset().top;


        if (scrollValue < heightSec2) {
            $('nav li').not('.dot1').removeClass('active');
            $('.dot1').addClass('active');
        } else if (scrollValue < heightSec3) {
            $('nav li').not('.dot2').removeClass('active');
            $('.dot2').addClass('active');
        } else if (scrollValue < heightSec4) {
            $('nav li').not('.dot3').removeClass('active');
            $('.dot3').addClass('active');
        } else if (scrollValue < heightSec5) {
            $('nav li').not('.dot4').removeClass('active');
            $('.dot4').addClass('active');
        } else {
            $('nav li').not('.dot5').removeClass('active');
            $('.dot5').addClass('active');
        }
    }

    $(window).on('scroll', changeDot);

    $('nav li').on('click', function() {
        const goToSection = '.s' + $(this).attr('id');

        // $(this).addClass('active')
        $('body, html').animate({
            scrollTop: $(goToSection).offset().top + 1,
        }, {
            duration: (browser == 'Apple Safari') ? 500 : 0, //0
            easing: "easeInOutQuart",
            complete: function() {}
        });
    });






    $(window).resize(function() {


        $('.home-banner-div').width($(window).width());
        $('.home-banner-div').height($(window).height());


        $('.company-intro-content-1').css({
            'top': $('.company-intro-row-div').height() / 2 - $('.company-intro-content-1')
                .height() - 30 +
                'px'
        })

        $('.company-intro-content-2').css({
            'bottom': $('.company-intro-row-div').height() / 2 - $(
                    '.company-intro-content-2')
                .height() -
                30 +
                'px'
        })

    });



});
</script>
<?php

get_footer();