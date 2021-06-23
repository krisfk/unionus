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


        <div class="row tu-pts-row">

            <div class="col-6">
                <img class="tu-icon" src="<?php echo get_template_directory_uri();?>/assets/images/tu-icon-1.png"
                    alt="">
                <h2 class="gold">還款紀錄</h2>
                <div>這是最影響評分的一項，一旦逾期還款(即使只是遲還卡數一天)，相關紀錄即會被保留5年，因此準時還款對維持正面信貸評分十分重要。</div>
            </div>
            <div class="col-6">
                <img class="tu-icon" src="<?php echo get_template_directory_uri();?>/assets/images/tu-icon-2.png"
                    alt="">

                <h2 class="gold">總結餘 <br>
                    <span class="smaller">(可使用信貸額)</span>
                </h2>
                <div>這綜合所有信用卡的信用額，對比其已用而未償還的總結餘，餘額愈高愈好。信貸使用率高於50%有機會影響信貸評分。</div>
            </div>

            <div class="col-4">
                <img class="tu-icon" src="<?php echo get_template_directory_uri();?>/assets/images/tu-icon-3.png"
                    alt="">

                <h2 class="gold">信貸紀錄長短</h2>
                <div>如果沒有信貸報告(沒有任何信用卡及借貸紀錄)或信貸紀錄太短，都會令財務機構難以參考及評估申請人的信貸狀況。因此年期短有機會影響申請或所批出的利率。</div>
            </div>
            <div class="col-4">
                <img class="tu-icon" src="<?php echo get_template_directory_uri();?>/assets/images/tu-icon-4.png"
                    alt="">

                <h2 class="gold">信貸組合</h2>
                <div>擁有信貸帳戶的種類及數目，包括不同類型的信貸如信用卡及按揭。</div>
            </div>
            <div class="col-4">
                <img class="tu-icon" src="<?php echo get_template_directory_uri();?>/assets/images/tu-icon-5.png"
                    alt="">

                <h2 class="gold">新開立的信貸帳戶</h2>
                <div>
                    每逢開立新的信貸帳戶(申請樓按、信用卡、汽車貸款等)，申請人都會授權財務機構查詢個人信貸報告，而不論申請是否成功，其查詢紀錄亦會在信貸報告中保留兩年。如短期內有多次查詢紀錄會令財務機構認為用戶有周轉困難，而拒絕批核信用卡或貸款申請。
                </div>
            </div>


        </div>







    </div>
</section>



<section class="sec2  pt-const2">





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