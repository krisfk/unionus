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
            <h1 class="mx-auto gold">藝人與合作伙伴</h1>
        </div>

        <div class="sep mx-auto mt-3"> <img class="sep-flo"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/sep-flo.png" alt=""></div>

        <div class="inner-container mx-auto mt-5 text-center">

            <h2 class="gold">Master Mic</h2>

            <div class="row">

                <div class="col-6">
                    <img class="w-100"
                        src="https://unionus.com.hk/wp-content/uploads/2021/06/1602677248_classify_img.jpeg" alt="">
                </div>
                <div class="col-6"></div>

            </div>

        </div>

    </div>
    </div>
</section>




<!-- </div> -->




<style type="text/css">
/* .top-menu-div {
    display: none;
}

.top-menu-logo-a {
    display: none;
} */
.bg-shape-2,
.bg-shape-1 {

    display: none
}
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