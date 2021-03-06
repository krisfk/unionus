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
            <h1 class="mx-auto gold fadeindown-ele">
                <?php echo get_field('content_part_0');?>
                <!-- 大額清數方案 -->
            </h1>
        </div>

        <div class="sep mx-auto mt-3"> <img class="sep-flo"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/sep-flo.png" alt=""></div>

        <div class="inner-container mx-auto mt-5 text-center fadeinup-ele">
            <?php echo get_field('content_part_1');?>

            <!-- 同時有一線及二線財務私人貸款，又需要清卡數及其他貸款等，不難想像加起來的利息有多可怕。雖然很多人都明白集中還款能夠節省利息及時間，但銀行又不能免TU申請大額清數，網上易批免TU清數的貸款額又不大，再向二三線財務借又只會令利息倍增。這個情況可以選擇我們的大額清數方案，真正協助你解決難題。 -->
        </div>




        <div class="row gx-5 justify-content-center mt-6 fadein-ele">

            <div class="col-lg-12 col-md-12 col-sm-12 col-12 position-relative gold-table-div-wrapper-col">
                <div class="gold-table-div-wrapper">

                    <img class="table-head-th-img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/table-head-th.png" alt="">


                    <div class="gold-table-div gold">
                        <table class="gold-table">


                            <tbody>

                                <tr>
                                    <td class="p-5">

                                        <?php echo get_field('content_part_2');?>

                                        <!-- 
                                        <h2 class="gold text-center">大額清數適合以下客戶</h2>

                                        <div class="mt-5   text-center">

                                            <ul>

                                                <li>外債超過月薪15倍以上</li>
                                                <li>經常拖欠卡數或只供最低還款</li>
                                                <li>每月供款佔入息60%以上</li>
                                                <li>Tu評分I</li>
                                                <li>供款期數較短</li>
                                                <li>外債以財務公司為主的錢被盜用的機會</li>

                                            </ul>





                                        </div> -->
                                    </td>
                                </tr>




                            </tbody>

                        </table>
                    </div>

                    <img class="table-foot-th-img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/table-foot.png" alt="">



                </div>
            </div>

        </div>


        <div class="row text-center mt-6">

            <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-5 fadeleft-ele">

                <?php echo get_field('content_part_3');?>

                <!-- 
                <img class="clearing-icon"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/clearing-icon-1.png" alt="">
                <h2 class="gold mt-3 mb-3">
                    二線財務救星方案</h2>
                <div>審批手續簡單快捷，成功申請後會整合所有二線財務供款及外債，再透過信譽良好的合作財務公司助客戶一次過還清二線債務。</div> -->

            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-5 fadein-ele">

                <?php echo get_field('content_part_4');?>

                <!-- <img class="clearing-icon"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/clearing-icon-2.png" alt="">
                <h2 class="gold mt-3 mb-3">
                    減債重組方案</h2>

                <div>評估客戶現時債務狀況並重新整合債務供款方案，集中還款的方案令利息支出大大降低至8-15%。</div> -->
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 faderight-ele">

                <?php echo get_field('content_part_5');?>


                <!-- <img class="clearing-icon"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/clearing-icon-3.png" alt="">
                <h2 class="gold mt-3 mb-3">
                    物業套現方案</h2>
                <div>為不同物業情況擬定不同的套現方案，不論物業是否已完成按揭供款，是否需要補地價，均可用以套現貸款，最高可達物業估價80%。更毋需抵押未補地價的居屋樓契。</div> -->
            </div>
        </div>


        <div class="text-center mt-7">

            <div class="little-gold-bar mx-auto"></div>
            <h2 class="gold mt-5 fadeinup-ele">
                <?php echo get_field('content_part_6');?>


                <!-- 專業清數方案的好處 -->
            </h2>
        </div>


        <div class="breadcrumb-ui fadeleft-ele">

            <?php echo get_field('content_part_7');?>


            <!-- <span>一筆過大額清數</span>
            <img class="white-arrow"
                src="https://unionus.com.hk/wp-content/themes/unionus/assets/images/white-arrow.png" alt="">
            <span>提升個人信用評級</span>
            <img class="white-arrow"
                src="https://unionus.com.hk/wp-content/themes/unionus/assets/images/white-arrow.png" alt="">
            <span>重回一個可以低息借貸等級</span> -->


        </div>

        <div class="text-center mt-4 fadein-ele">

            <?php echo get_field('content_part_8');?>

            <!-- 
            <ul class="d-inline-block p-0 mx-auto text-start">

                <li>無客戶限制，我們會分析各人的卡數債務最慳息方案給不同情況的人士</li>
                <li>審批手續簡單快捷</li>
                <li>綜合所有債務，集中還款</li>
                <li>免TU評級清數，短期內提升TU信貸評分</li>
                <li>大大減低利息開支及債務，輕鬆還款同時提升信貸評分</li>
                <li>提供長達36個月的特長還款期</li>
                <li>定息定額收費，務求爭取最優惠利率，不設額外手續費之餘更設有利息優惠</li>



            </ul>

            <div class="gold ">我們致力為客戶提供合適方案渡過難關，避免破產並謀劃更好的未來。</div> -->
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


    // $('.gold-table-div').height($('.gold-table-div-wrapper-col').height() - 100);

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