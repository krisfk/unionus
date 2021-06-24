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
            <h1 class="mx-auto gold">大額清數方案</h1>
        </div>

        <div class="sep mx-auto mt-3"> <img class="sep-flo"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/sep-flo.png" alt=""></div>

        <div class="inner-container mx-auto mt-5 text-center">
            同時有一線及二線財務私人貸款，又需要清卡數及其他貸款等，不難想像加起來的利息有多可怕。雖然很多人都明白集中還款能夠節省利息及時間，但銀行又不能免TU申請大額清數，網上易批免TU清數的貸款額又不大，再向二三線財務借又只會令利息倍增。這個情況可以選擇我們的大額清數方案，真正協助你解決難題。
        </div>




        <div class="row gx-5">

            <div class="col-1 position-relative gold-table-div-wrapper-col">
                <div class="gold-table-div-wrapper">

                    <img class="table-head-th-img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/table-head-th.png" alt="">


                    <div class="gold-table-div gold">
                        <table class="gold-table">


                            <tbody>

                                <tr>
                                    <td class="p-5">
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





                                        </div>
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




        <div class="text-center mt-5">由於會計的最終責任在於董事身上，作為董事最好學習一下基本會計知識，這樣才能於公司賬目有失誤時及早察覺並更正。</div>











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