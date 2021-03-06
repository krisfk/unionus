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

<div class="home-banner-div">

    <!-- <div class="position-absolute w-100 h-100"> -->
    <div class="rolling-slogan">

        <a href="<?php echo get_site_url();?>" class="logo-a"> <img class="logo"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
        </a>
        <div class="mt-3">爾汝相聯，同生共濟</div>

        <div> <a href="javascript:void(0)" class="know-more-btn">了解更多</a> </div>
    </div>
    <!-- </div> -->


    <iframe allowtransparency="true" class="iframe" src="http://localhost:8888/unionus/particle-effect/" style="">
    </iframe>
</div>



<section class="sec1 pt-const-half">

    <div class="container">


        <div class="sep mx-auto mt-const"> <img class="sep-flo"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/sep-flo.png" alt=""></div>


        <div class="company-intro-row-div pt-const-half">
            <div class="row justify-content-center ">

                <div class="col-4 position-relative company-intro-content-col-1 ">

                    <div class="company-intro-content-1">
                        （爾聯UNIONUS）會計師事務所是根據香港《專業會計師條例》（第50章） 註冊的香港會計師事務所(“Audit
                        Firm”)。(爾聯UNIONUS)會計師事務是根據香港會計師公會的認可，並提供債務重組、會計、核數、公司/私人報稅、審計核數等服務 (“Debt
                        Restructuring”“Accounting
                        Service”,“Tax Service” and “Audit Service”）。</div>
                </div>
                <div class="col-1 company-intro-txt-col">


                    <div class="company-intro-txt">
                        公<br>司<br>簡<br>介
                    </div>
                </div>
                <div class="col-4 position-relative company-intro-content-col-2">
                    <div class="company-intro-content-2  ">

                        憑籍（爾聯UNIONUS）數位創辦人多年專注於會計業和銀行業的持續發展，每年成功為數以千位顧客和大型企業提供意見和服務，並由具備執業資格的專員和客戶關＝係主任獨立處理，務求可以提供完善、專業、具備參考價值和人性化（Human
                        nature）的處理方案。
                    </div>

                </div>




            </div>
        </div>
    </div>
</section>


<!-- </div> -->


<section class="sec2  pt-const2">


    <div class="position-relative ">
        <ul class="promise-pt-ul">
            <li class="promise-pt promise-pt-1 ps-5">
                <table class="h-100 w-100">
                    <tr>
                        <td class="position-relative">不成功不收費
                            <div class="position-absolute small-shape">
                                <div class="pt-icon"></div>
                                <img class="small-shape-img"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/small-shape-bg.png"
                                    alt="">
                            </div>
                        </td>
                    </tr>
                </table>

            </li>

            <li class="promise-pt promise-pt-2 ps-5">
                <table class="h-100 w-100">
                    <tr>
                        <td class="position-relative">先服務後收費
                            <div class="position-absolute small-shape">
                                <div class="pt-icon"></div>
                                <img class="small-shape-img"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/small-shape-bg.png"
                                    alt="">
                            </div>
                        </td>
                    </tr>
                </table>

            </li>

            <li class="promise-pt promise-pt-3 ps-5">
                <table class="h-100 w-100">
                    <tr>
                        <td class="position-relative">同理你的處境
                            <div class="position-absolute small-shape">
                                <div class="pt-icon"></div>
                                <img class="small-shape-img"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/small-shape-bg.png"
                                    alt="">
                            </div>
                        </td>
                    </tr>
                </table>

            </li>


            <li class="promise-pt promise-pt-4 pe-5">
                <table class="h-100 w-100">
                    <tr>
                        <td class="position-relative text-end">高私隱度保障
                            <div class="position-absolute small-shape">
                                <div class="pt-icon"></div>
                                <img class="small-shape-img"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/small-shape-bg.png"
                                    alt="">
                            </div>
                        </td>
                    </tr>
                </table>

            </li>

            <li class="promise-pt promise-pt-5 pe-5">
                <table class="h-100 w-100">
                    <tr>
                        <td class="position-relative text-end" style="padding-right: 55px;">耐心聆聽 <br>
                            你的故事
                            <div class="position-absolute small-shape">
                                <div class="pt-icon"></div>
                                <img class="small-shape-img"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/small-shape-bg.png"
                                    alt="">
                            </div>
                        </td>
                    </tr>
                </table>

            </li>




        </ul>

        <div class="promise-center-pt text-center position-relative">



            <div class="promise-center-pt-div">
                <div class="gold title">人性化的 <br> 服務承諾</div>
                <div class="subtitle mt-2">想你所想，憂你所憂</div>
            </div>
        </div>
    </div>

</section>




<div class="position-relative mt-6-5">
    <img class="home-tran-bg-1" src="<?php echo get_template_directory_uri(); ?>/assets/images/home-tran-bg-1.png"
        alt="">
    <img class="home-tran-bg-2" src="<?php echo get_template_directory_uri(); ?>/assets/images/home-tran-bg-2.png"
        alt="">


    <section class="sec3 pt-6">


        <img class="circular-info" src="<?php echo get_template_directory_uri(); ?>/assets/images/circular.png" alt="">
    </section>
</div>

<section class="sec4  pt-const2">

    <div class="container">

        <h2 class="gold">服務承諾
        </h2>

        <ul class="service-promise-ul mt-2">

            <li> 個人私隱權</li>
            <li>不進行非合理強行銷售</li>
            <li>免費專員詳細說明及分析</li>
            <li>保持一貫高透明度，絕無隱藏式收費。</li>
            <li>不分職業，語言，國家，階級，任何身分或地位</li>
            <li>前期規劃到後期跟進，透過專才負責客製化方案。</li>
            <li>來自各界的資深組別代表，包括：會計部，銀行部，法律部，談判組別，輔導員等等。</li>


        </ul>
    </div>
</section>


<section class="sec5 pt-const">



    <div class="sep mx-auto mt-const"> <img class="sep-flo"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/sep-flo.png" alt=""></div>


    <table class="me-auto ms-auto mt-5">
        <tr>
            <td class="align-top gold-border-right pe-3">
                <h2 class="gold">服務項目</h2>
            </td>
            <td class=" ps-3">
                <ul class="service-points">
                    <li>DRP債務重組(Debt Restructuring)</li>
                    <li>IVA 個人自願安排(Individual Voluntary Arrangement)</li>
                    <li>IDRP 牽頭式債務舒緩(Interbank Debt Relief Plan)</li>
                    <li>破產 (Bankruptcy)</li>
                    <li>TU（個人環聯信貸報告）改善方案</li>
                    <li>大額清數方案</li>
                    <li>開立有限/無限公司</li>
                    <li>公司/私人報稅</li>
                    <li>會計審核</li>


                </ul>
            </td>
        </tr>
    </table>
    <div class="sep2 mx-auto mt-5">
    </div>



</section>





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
</nav>



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
            'background': 'rgb(33 34 45 / 90%)'
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