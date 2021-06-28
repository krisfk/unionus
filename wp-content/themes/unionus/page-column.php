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
            <h1 class="mx-auto gold">專欄</h1>
        </div>

        <div class="sep mx-auto mt-3"> <img class="sep-flo"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/sep-flo.png" alt=""></div>

        <div class="inner-container mx-auto mt-5 text-center">

            <h3 class="gold">最新文章</h3>
        </div>











        <div class="text-center mt-7">

            <div class="little-gold-bar mx-auto"></div>
            <h2 class="gold mt-5">專業清數方案的好處</h2>
        </div>


        <div class="breadcrumb-ui">

            <span>一筆過大額清數</span>
            <img class="white-arrow"
                src="https://unionus.com.hk/wp-content/themes/unionus/assets/images/white-arrow.png" alt="">
            <span>提升個人信用評級</span>
            <img class="white-arrow"
                src="https://unionus.com.hk/wp-content/themes/unionus/assets/images/white-arrow.png" alt="">
            <span>重回一個可以低息借貸等級</span>


        </div>

        <div class="text-center mt-4">

            <ul class="d-inline-block p-0 mx-auto text-start">

                <li>無客戶限制，我們會分析各人的卡數債務最慳息方案給不同情況的人士</li>
                <li>審批手續簡單快捷</li>
                <li>綜合所有債務，集中還款</li>
                <li>免TU評級清數，短期內提升TU信貸評分</li>
                <li>大大減低利息開支及債務，輕鬆還款同時提升信貸評分</li>
                <li>提供長達36個月的特長還款期</li>
                <li>定息定額收費，務求爭取最優惠利率，不設額外手續費之餘更設有利息優惠</li>



            </ul>

            <div class="gold ">我們致力為客戶提供合適方案渡過難關，避免破產並謀劃更好的未來。</div>
        </div>















    </div>
</section>


<!-- </div> -->


<style type="text/css">
/* .bg-shape-1 {
    display: none;

} */

.bg-shape-2 {
    display: none;

}
</style>


<script type="text/javascript">
const skrollrObj = skrollr.init();
</script>

<script type="text/javascript">
$(function() {


    $('.gold-table-div').height($('.gold-table-div-wrapper-col').height() - 100);

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