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
            <h1 class="mx-auto gold">會計審核</h1>
        </div>

        <div class="sep mx-auto mt-3"> <img class="sep-flo"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/sep-flo.png" alt=""></div>

        <div class="inner-container mx-auto mt-5 text-center">根據香港法例第622
            章《公司條例》第373條，公司董事須備存符合規格的會計紀錄或帳目。而第112章《稅務條例》第51C條亦規定，每名在香港經營某行業、專業或業務的人，須就其入息及開支備存足夠的紀錄。但會計並不只為履行法律責任，更是公司發展不可或缺的一環。

        </div>

        <div class="text-center mt-7">

            <div class="little-gold-bar mx-auto"></div>
            <h2 class="gold mt-5">會計帳目用處</h2>
        </div>


        <div class="row gx-5">

            <div class="col-6 position-relative gold-table-div-wrapper-col">
                <div class="gold-table-div-wrapper">

                    <img class="table-head-th-img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/table-head-th.png" alt="">


                    <div class="gold-table-div gold">
                        <table class="gold-table">


                            <tbody>

                                <tr>
                                    <td class="p-5">
                                        <h2 class="gold text-center">公司內部之財務交流</h2>

                                        <div class="mt-5   text-center">

                                            <ul class="d-inline-block mx-auto">
                                                <li>有助老闆及股東了解及監察各部門營運成本或產品之製造成本</li>

                                                <li>有助管理層作未來財務預測、預算及分配</li>

                                                <li>展示公司財政狀況</li>

                                                <li>找出隱藏的營運危機，儘早採取對策</li>

                                                <li>清晰整理的出入賬紀錄，令公司運作更為系統化</li>

                                                <li>降低公司資產或金錢被盜用的機會</li>

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
            <div class="col-6  position-relative">
                <div class="gold-table-div-wrapper">

                    <img class="table-head-th-img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/table-head-th.png" alt="">


                    <div class="gold-table-div gold">
                        <table class="gold-table">


                            <tbody>

                                <tr>
                                    <td class="p-5">
                                        <h2 class="gold text-center">與外部持份者(例如銀行、債權人、投資者等)之財務交流</h2>

                                        <div class="mt-5 text-center">

                                            <ul class="d-inline-block mx-auto">
                                                <li>上市公司每年透過財務年報發布公司狀況</li>

                                                <li>向銀行借貸</li>

                                                <li>邀請新投資者入股</li>

                                                <li>與其他公司業務合作</li>

                                                <li>好帳目有助增加各商業行動的成功機會</li>



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