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

            <h2 class="gold">最新文章</h2>



            <!-- <div class="row"> -->

            <div class="news-container">

                <div class="news">
                    <div class="w-50 d-inline-block float-start"><img class="w-100"
                            src="https://unionus.com.hk/wp-content/uploads/2021/06/newspaper.png" alt="">
                    </div>
                    <div class="w-50 text-start  d-inline-block float-start">
                        <h3 class="title gold">
                            【破產流程】申請個人破產｜提交破產呈請｜破產的4個影響</h3>

                        <div class="date gold">2021-06-15</div>

                        <div>申請破產無疑對個人信貸紀錄影響深遠，亦會使生活受到一定法律限制，一般而言的確是最壞選擇。可是，若果實在無能力償還債務，又
                        </div>

                        <a href="#" class="gold">Read More</a>
                    </div>
                </div>


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