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

<section class="sec1 pt-5">

    <div class="container">


        <img class="sme-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">


        <div class="text-center">
            <h1 class="mx-auto gold">我們的優勢
            </h1>
        </div>

        <div class="sep mx-auto mt-3">
            <img class="sep-flo" src="<?php echo get_template_directory_uri(); ?>/assets/images/sep-flo.png" alt="">
        </div>


        <div class="inner-container mx-auto mt-lg-5 mt-md-5 mt-sm-4 mt-4  text-center">

            <h2 class="gold">童叟無欺
            </h2>

            <div class="mt-4">爾聯 Unionus 由創辦人成立至今保持一貫公開且透明的服務,良好的信譽是我們的宗旨。
                多年的專業經驗令我們可以完善解決閣下目前面對的煩惱。
            </div>

        </div>


        <div class="inner-container mx-auto mt-lg-5 mt-md-5 mt-sm-4 mt-4  text-center">

            <h2 class="gold">我們承諾:
            </h2>

            <ul class="d-inline-block text-start p-0">
                <li>不成功不收費</li>
                <li>以客為本</li>
                <li>高性價比</li>
                <li>獨立跟進個案</li>
                <li>實質重於形式</li>

            </ul>



        </div>

        <div class="mt-6 text-center">
            <img class="flo-icon" src="https://unionus.com.hk/wp-content/themes/unionus/assets/images/flo-icon.png"
                alt="">

            <h2 class="mt-3 gold text-center">效率性
            </h2>


            <div class="mt-4">您的信息/問題將會是我們首要處理的工作,客戶關係主任在收到閣下的指示後將會直接把相關問題遞交,務求在最短的時間內解決您的困難.

            </div>
        </div>

        <div class="mt-6 text-center">
            <img class="flo-icon" src="https://unionus.com.hk/wp-content/themes/unionus/assets/images/flo-icon.png"
                alt="">

            <h2 class="mt-3 gold text-center">專業認可

            </h2>


            <div class="mt-4">爾聯Unuonus 提供服務皆由專業持牌人士作出建議,確保所有服務得以清晰可靠,不需要透過任何中介,過程更為公開,簡單,直接,透明.


                <div class="mt-4">
                    <ul class="d-inline-block text-start">
                        <li>註冊會計師</li>
                        <li>註冊律師/大律師</li>
                        <li>註冊持牌執業人員</li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="mt-6 text-center">
            <img class="flo-icon" src="https://unionus.com.hk/wp-content/themes/unionus/assets/images/flo-icon.png"
                alt="">

            <h2 class="mt-3 gold text-center">分期付款


            </h2>


            <div class="mt-4">所有服務項目爾聯Unionus盡可能為您的生活/工作減輕壓力,我們希望可以為閣下提供分期形式付費，以此達成雙方共識.


            </div>
        </div>


















    </div>
</section>






<!-- </div> -->




<style type="text/css">
.top-menu-div {
    display: none;
}

.top-menu-logo-a {
    display: none;
}

/* 
.bg-shape-1 {
    display: none;
} */
/* 
.bg-shape-2 {
    display: none;
} */
</style>


<script type="text/javascript">
// const skrollrObj = skrollr.init();
</script>

<script type="text/javascript">
$(function() {



    // .gold-table-div.silver
    // $('.gold-table-div.silver').height($('.gold-table-div-wrapper-col').height() - 100);
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




});
</script>
<?php

get_footer();