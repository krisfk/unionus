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

        <div class="text-center fadeindown-ele">
            <h1 class="mx-auto gold">
                <?php echo get_field('content_part_0'); ?>
                <!-- 藝人與合作伙伴 -->
            </h1>
        </div>

        <div class="sep mx-auto mt-3"> <img class="sep-flo"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/sep-flo.png" alt=""></div>

        <div class="inner-container mx-auto mt-5   text-center ">

            <h2 class="gold fadeinup-ele">
                <?php echo get_field('content_part_1'); ?>

                <!-- Master Mic -->
            </h2>

            <div class="row mt-5 gx-5">

                <div class="col-lg-6 col-md-12 col-sm-12 col-12 fadeleft-ele ">

                    <?php echo get_field('content_part_2'); ?>


                    <!-- <img class="w-100"
                        src="https://unionus.com.hk/wp-content/uploads/2021/06/1602677248_classify_img-e1624905361304.jpeg"
                        alt=""> -->
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 text-start  faderight-ele">

                    <?php echo get_field('content_part_3'); ?>


                    <!-- <div>
                        <h3 class="gold">2005</h3>
                        自從2005年MASTAMIC開始了他的HIP HOP生涯後，他便一直是城中HIP HOP界的焦點，
                        作為香港HIP HOP界的先鋒，他擅長將富有社會性的歌詞和獨特的街頭色彩相互融合，
                        MASTAMIC一直都為香港的樂迷帶來各種新類型的聲音，他的奉獻和努力，慢慢地終於得到大家的認同，
                    </div>

                    <div class="mt-3">
                        <h3 class="gold">2008-2009</h3>
                        在2008至2009年他曾與CLOT MEDIA DIVISION簽約。 <br>
                        MASTAMIC多次與本地及海外藝人和團體合作。<br>
                        包括本地RAPPER LO.J及多個HIP HOP藝人如農夫、歐陽靖、廿四味、DJ TOMMY、DJ GALAXY、INK、CRITICAL (瑞典)、<br>
                        C.O.U (北京)、DUMDUE (廣洲)。
                    </div> -->


                </div>


                <div class="col-lg-6 col-md-12 col-sm-12 col-12 text-start mt-lg-5 mt-md-0 mt-sm-0 mt-0 fadeleft-ele">

                    <?php echo get_field('content_part_4'); ?>


                    <!-- <div class="mt-3">
                        除此之外，更如不同界別的歌手合作製作音樂，<br>
                        如流行歌手容祖兒、方皓玟、張繼聰、關楚耀、鍾達茵R&B歌手J.J LIN，獨立樂隊TONICK及獨立歌手萱寧。<br>
                        其中和關楚耀合作單曲《佔領》最高更獲吒叱903專業推介冠軍位置。
                    </div>
                    <div class="mt-3">
                        MASTAMIC仍有多次大型演出的經驗，<br>
                        如側田紅館演唱會，CONCERT YY黃偉文作品展演唱會和鄭秀文合唱及本地樂隊野仔九展演唱會嘉賓。<br>
                        其他包括陳冠希、 MC HOTDOG、RUBBERBAND、太極樂隊、及梁漢文，更獲邀到馬來西亞與台灣著名歌手曹格一同演出。
                    </div> -->
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-12 position-relative mt-5 faderight-ele">

                    <?php echo get_field('content_part_5'); ?>

                    <!-- <iframe class="w-100 start-0 position-relative" src="https://www.youtube.com/embed/L_9JELdtjDQ"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe> -->

                </div>
            </div>

            <div class="text-center mt-7 fadein-ele">

                <div class="little-gold-bar mx-auto"></div>

                <?php echo get_field('content_part_6'); ?>


                <!-- <h2 class="gold mt-5">合作伙伴
                </h2>

                <div class="mt-5">
                    <a href="#" class="partner-logo-a"> <img
                            src="https://unionus.com.hk/wp-content/themes/unionus/assets/images/logo.png" alt=""></a>
                    <a href="#" class="partner-logo-a"><img
                            src="https://unionus.com.hk/wp-content/themes/unionus/assets/images/logo.png" alt=""></a>
                </div> -->
            </div>




        </div>

        test


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


    var filmwidth = $('iframe').width();
    var filmheight = filmwidth / 16 * 9;
    $('iframe').height(filmheight);


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