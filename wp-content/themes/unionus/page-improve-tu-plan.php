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
            <h1 class="mx-auto gold">
                <!-- content_part_0 -->
                <?php echo get_field('content_part_0');?>
                <!-- TU <br>
                (個人環聯信貸報告)改善方案 -->

            </h1>
        </div>
        <div class="sep mx-auto mt-3"> <img class="sep-flo"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/sep-flo.png" alt=""></div>

        <div class="mt-3 inner-container2 mx-auto">
            <?php echo get_field('content_part_01');?>

            <!-- 個人信貸報告記錄了每人的信貸紀錄，包括貸款機構、信貸限額、貸款額及還款紀錄。亦會紀錄拖欠債項、破產、與追討債務相關的法律行動等。因此香港大部分銀行與財務機構於審批貸款申請時都會參考客人的個人信貸報告，以評估客人是否可靠的借貸人，從而擬定該次借貸金額及利息比率。所以一個良好的信貸評級是很重要，一般信貸評級愈好，實際年利率會愈低。 -->
        </div>



        <div class="text-center mt-7">

            <div class="little-gold-bar mx-auto"></div>
            <h2 class="gold mt-5">
                <?php echo get_field('content_part_1');?>
                <!-- 信貸評分因素 -->
            </h2>
        </div>


        <div class="row tu-pts-row gx-5 mt-5">

            <div class="col-6 tu-pts-col">

                <?php echo get_field('content_part_2');?>

                <!-- 
                <img class="tu-icon" src="<?php echo get_template_directory_uri();?>/assets/images/tu-icon-1.png"
                    alt="">
                <h2 class="gold">還款紀錄</h2>
                <div>這是最影響評分的一項，一旦逾期還款(即使只是遲還卡數一天)，相關紀錄即會被保留5年，因此準時還款對維持正面信貸評分十分重要。</div> -->


            </div>
            <div class="col-6 tu-pts-col">

                <?php echo get_field('content_part_3');?>

                <!-- <img class="tu-icon" src="<?php echo get_template_directory_uri();?>/assets/images/tu-icon-2.png"
                    alt="">

                <h2 class="gold">
                    <div> 總結餘 <br> <span class="smaller">(可使用信貸額)</span></div>

                </h2>
                <div>這綜合所有信用卡的信用額，對比其已用而未償還的總結餘，餘額愈高愈好。信貸使用率高於50%有機會影響信貸評分。</div> -->
            </div>

            <div class="col-4 tu-pts-col">

                <?php echo get_field('content_part_4');?>


                <!-- <img class="tu-icon" src="<?php echo get_template_directory_uri();?>/assets/images/tu-icon-3.png"
                    alt="">

                <h2 class="gold">信貸紀錄長短</h2>
                <div>如果沒有信貸報告(沒有任何信用卡及借貸紀錄)或信貸紀錄太短，都會令財務機構難以參考及評估申請人的信貸狀況。因此年期短有機會影響申請或所批出的利率。</div> -->
            </div>
            <div class="col-4 tu-pts-col">

                <?php echo get_field('content_part_5');?>


                <!-- <img class="tu-icon" src="<?php echo get_template_directory_uri();?>/assets/images/tu-icon-4.png"
                    alt="">

                <h2 class="gold">信貸組合</h2>
                <div>擁有信貸帳戶的種類及數目，包括不同類型的信貸如信用卡及按揭。</div> -->

            </div>
            <div class="col-4 tu-pts-col">

                <?php echo get_field('content_part_6');?>


                <!-- <img class="tu-icon" src="<?php echo get_template_directory_uri();?>/assets/images/tu-icon-5.png"
                    alt="">

                <h2 class="gold">新開立的信貸帳戶</h2>
                <div>
                    每逢開立新的信貸帳戶(申請樓按、信用卡、汽車貸款等)，申請人都會授權財務機構查詢個人信貸報告，而不論申請是否成功，其查詢紀錄亦會在信貸報告中保留兩年。如短期內有多次查詢紀錄會令財務機構認為用戶有周轉困難，而拒絕批核信用卡或貸款申請。
                </div> -->
            </div>




        </div>



        <div class="inner-container2 mx-auto">
            <div class="text-center mt-7">

                <div class="little-gold-bar mx-auto"></div>
                <h2 class="gold mt-5">
                    <?php echo get_field('content_part_7');?>

                    <!-- 改善方案 - 減債供款 -->
                </h2>

                <div class="mt-4">
                    <?php echo get_field('content_part_8');?>

                    <!-- TU環聯信貸評分低會令人難以成功申請銀行或大型財務機構的平息貸款，需要周轉的申請人繼而轉為向二線財務借高息貸款，導致每月還款額超出自己實際可以承受的金額並出現債務危機。要避免這情況，可以選擇減債供款方案: -->
                </div>
            </div>
        </div>


        <div class="mt-5">
            <div class="breadcrumb-ui">

                <?php echo get_field('content_part_9');?>


                <!-- <span>代申請人整合所有債務再一次還清</span>
                <img class="white-arrow" src="<?php echo get_template_directory_uri();?>/assets/images/white-arrow.png"
                    alt="">
                <span>大大減低利息支出</span>
                <img class="white-arrow" src="<?php echo get_template_directory_uri();?>/assets/images/white-arrow.png"
                    alt="">
                <span>每月集中還款</span>
                <img class="white-arrow" src="<?php echo get_template_directory_uri();?>/assets/images/white-arrow.png"
                    alt="">
                <span>提升信貸評分</span> -->

            </div>

            <div class="breadcrumb-ui">

                <?php echo get_field('content_part_10');?>


                <!-- <span>較容易借到銀行或大型財務機構的平息貸款</span>
                <img class="white-arrow" src="<?php echo get_template_directory_uri();?>/assets/images/white-arrow.png"
                    alt="">
                <span>毋須再「捱貴息」</span> -->


            </div>
        </div>



    </div>
</section>
<style type="text/css">
.bg-shape-2 {
    display: none;
}
</style>

<script type="text/javascript">
const skrollrObj = skrollr.init();
</script>

<script type="text/javascript">
$(function()


});
</script>
<?php

get_footer();