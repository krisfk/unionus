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

if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
    $lang_code = ICL_LANGUAGE_CODE;
  }
  
?>




<section class="sec1 pt-const2">

    <div class="container">

        <div class="text-center">
            <h1 class="mx-auto gold fadeindown-ele">
                <?php
                              echo ($lang_code=='zh-hant') ? '專欄':'Column';

            ?>
            </h1>
        </div>

        <div class="sep mx-auto mt-3"> <img class="sep-flo"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/sep-flo.png" alt=""></div>

        <div class="inner-container mx-auto mt-5 text-center ">

            <h2 class="gold fadeinup-ele"><?php echo get_the_title();?></h2>


            <div class="inner-container2 mt-5 mx-auto fadein-ele">
                <img class="w-100" src="<?php echo get_the_post_thumbnail_url(null,'full');?>" alt="">

            </div>


            <div class="inner-container2 mt-5 mx-auto text-start fadein-ele">

                <?php echo get_the_content();?>
            </div>










        </div>































    </div>
</section>


<!-- </div> -->


<style type="text/css">
.bg-shape-1 {
    display: none;

}

.bg-shape-2 {
    display: none;

}
</style>


<script type="text/javascript">
// const skrollrObj = skrollr.init();
</script>

<script type="text/javascript">
$(function() {



    $('.news-container').slick({
        dots: true,
        arrows: false,
        pauseOnFocus: false,
        infinite: true,
        adaptiveHeight: true,

        speed: 800,
        autoplaySpeed: 5000,
        autoplay: true,
        // fade: true,
        cssEase: 'ease-out',
        pauseOnHover: false
    });


    // news-container
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