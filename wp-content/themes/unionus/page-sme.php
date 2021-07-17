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


        <div class="text-center fadeindown-ele">
            <h1 class="mx-auto gold">
                <?php echo get_field('content_part_0'); ?>

                <!-- 中小企融資擔保計劃 <br> 百分百擔保特惠貸款 -->
            </h1>
        </div>

        <div class="sep mx-auto mt-3">
            <img class="sep-flo" src="<?php echo get_template_directory_uri(); ?>/assets/images/sep-flo.png" alt="">
        </div>


        <div class="inner-container mx-auto mt-lg-5 mt-md-5 mt-sm-4 mt-4  text-center  fadeinup-ele">

            <?php echo get_field('content_part_1'); ?>


            <!-- <h2 class="gold">百分百擔保特惠貸款詳情</h2><br>

            作為中小企老闆，有新的創業或投資靈感，最需要就係資金的支持。 <br>
            面對經濟不景氣，中小企經常面對資金周轉問題。 <br> <br><br>
            有見及此，政府為舒緩中小企業的業務壓力，推出「中小企融資擔保計劃」（SFGS），先後推出了「八成」（八成信貸擔保產品SFGS 80）、「九成」（九成信貸擔保產品SFGS
            90）及「百分百」（百分百擔保特惠貸款SFGS 100）擔保產品，財政司司長更於二○二一至二二年度《財政預算案》公布推出優化措施，並延長申請期至二○二一年十二月三十一日。優化措施下，降低申請門檻，貸款金額大幅增加。
            <br> <br>
            合資格企業為二○二○年六月三十日前已最少營運三個月，並自去年二月份起任何一個單月營業額較該單月前於二○一九年初至二○二○年中的任何一個季度的平均每月營業額下跌三成或以上。每家企業最高貸款額提高至18個月僱員薪金及租金的總和，或600萬港元。以較低者為準。同時，特惠貸款的最長還款期增加至八年，而還息不還本的安排則增加至最多18個月。 -->

        </div>
        <div class="inner-container mx-auto mt-6  ">


            <div class="fadein-ele">
                <?php echo get_field('content_part_2'); ?>
            </div>
            <!-- <img class="w-100" src="https://unionus.com.hk/wp-content/uploads/2021/06/sem-graph.png" alt=""> -->


            <div class="mt-6">
                <img class="flo-icon fadeindown-ele"
                    src="<?php echo get_template_directory_uri();?>/assets/images/flo-icon.png" alt="">

                <h2 class="mt-3 gold text-center fadeinup-ele">
                    <?php echo get_field('content_part_3'); ?>

                    <!-- 「百分百擔保特惠貸款計劃」<br>
                    為我提供多少資金？ -->
                </h2>

                <div class="mt-lg-5 mt-md-5 mt-sm-4 mt-4  text-center fadein-ele">
                    <?php echo get_field('content_part_4'); ?>

                    <!-- 百分百擔保特惠貸款的申請最高金額為600萬港元，或者公司員工的每月薪金加每月租金乘以18的總和，以數值最低者為準。 -->

                    <div class="fadein-ele">
                        <?php echo get_field('content_part_5'); ?>
                    </div>
                    <!-- <h2 class="gold text-center mt-lg-5 mt-md-5 mt-sm-4 mt-4 ">例子一：</h2>

                    X公司是一間中小企業，員工有15人，平均月薪為$20,000港元；而每月租金為$30,000港元，A公司成功申請SFGS100時，能獲取的金額為
                    <br>
                    <span class="gold text-center"> 20,000*15*18+ 30,000*18= $5,940,000，少於六百萬上限，所以可獲全數貸款。</span>



                    <h2 class="gold text-center mt-lg-5 mt-md-5 mt-sm-4 mt-4 ">例子二：</h2>
                    Y公司也是一間中小企業，員工有20人，平均月薪為$20,000港元；而每月租金為$30,000港元，B公司成功申請SFGS100時，能獲取的金額為

                    <br>
                    <span class="gold text-center"> 20,000*20*18+ 30,000*18= $7,740,000, 超出上限六百萬，貸款金額為六百萬。</span>
 -->




                    <div class="gold-table-div-wrapper mt-lg-5 mt-md-5 mt-sm-4 mt-4  fadein-ele">

                        <img class="table-head-th-img"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/table-head-th.png" alt="">


                        <div class="gold-table-div gold">
                            <table class="gold-table">


                                <tbody>

                                    <tr>
                                        <td class="pt-5 pe-lg-5 pe-md-5 pe-sm-4 pe-4 ps-md-5 ps-sm-4 ps-4  pb-5">
                                            <h2 class="gold">
                                                <?php echo get_field('content_part_6'); ?>

                                                <!-- 甚麼企業符合申請資格 <br>
                                                申請「百分百擔保特惠貸款」？ -->
                                            </h2>

                                            <div class="mt-lg-5 mt-md-5 mt-sm-4 mt-4   text-start">
                                                <?php echo get_field('content_part_7'); ?>

                                                <!-- <ul>
                                                    <li>2020年6月30日前已最少營運3個月，並在香港營運及註冊</li>
                                                    <li>2020年2月份起，任何一個月的營業額較2019年任何一個季度的平均每月營業額，下跌3成或以上</li>
                                                    <li>非上市公司、貸款機構或貸款機構的聯繫公司</li>
                                                    <li>具有良好還款記錄</li>
                                                    <li>每宗申請的最高貸款額為有關企業的18個月僱員薪金及租金支出的總和或港幣600萬元，以較低者為準。如企業沒有僱員薪金及租金支出，可以2019年1月至2020年6月最高單月淨收入的50%乘以18替代計算。
                                                    </li>

                                                </ul> -->

                                            </div>
                                        </td>
                                    </tr>




                                </tbody>

                            </table>
                        </div>

                        <img class="table-foot-th-img"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/table-foot.png" alt="">

                    </div>



                    <div class="mt-6">
                        <img class="flo-icon"
                            src="<?php echo get_template_directory_uri();?>/assets/images/flo-icon.png" alt="">

                        <h2 class="mt-3 gold text-center fadeinup-ele">

                            <?php echo get_field('content_part_8'); ?>
                            <!-- 「百分百擔保特惠貸款」難唔難申請？ -->

                        </h2>
                        <br>


                        <div>
                            <?php echo get_field('content_part_9'); ?>

                            <!-- 由香港按證公司列出百分百擔保特惠貸款的主要統計數據，按證保險公司百分百擔保特惠貸款已批出28,000宗, 合供450億港元！ <br> <br>

                            此貸款申請需要經銀行審批，現時需求甚大，需時整合文件和等候批核。 <br>
                            銀行亦拒絕了不少文件不齊全的申請案例，令到老闆們擔心申請不易。近期經濟下行，銀行審批貸款的要求比以前更高，不少中小企老闆心中會存有問號「我是否真的可以成功申請銀行貸款？」 -->
                        </div>
                    </div>

                    <div class="mt-lg-5 mt-md-5 mt-sm-4 mt-4 ">
                        <?php echo get_field('content_part_10'); ?>

                        <!-- 事實上，香港有很多中小企業申請「百分百擔保特惠貸款」時，即使符合申請條件，他們還是很容易遇上各種困難，例如： -->
                    </div>

                    <?php echo get_field('content_part_11'); ?>
                    <!-- <ul class="mt-lg-5 mt-md-5 mt-sm-4 mt-4  gold p-0">

                        <li class="d-inline-block me-4">．不擅長處理文書工作</li>
                        <li class="d-inline-block me-4">．害怕申請失敗、怕麻煩 </li>
                        <li class="d-inline-block">．害怕自己公司的信貸記錄唔好等等</li>
                    </ul> -->







                </div>

                <div class="mt-6">

                    <img class="flo-icon " src="<?php echo get_template_directory_uri();?>/assets/images/flo-icon.png"
                        alt="">

                    <h2 class="mt-3 gold text-center">
                        <?php echo get_field('content_part_12'); ?>

                        <!-- 無人際關係，不懂財務知識及文書處理， <br>
                        又或者唔知點申請百分百擔保特惠貸款？ -->

                    </h2>

                    <div class="mt-lg-5 mt-md-5 mt-sm-4 mt-4 ">
                        <?php echo get_field('content_part_13'); ?>

                        <!-- 放心，我們和各大銀行合作，並在短短數月成功協助數百個中小企老闆的申請，立即預約我們的融資顧問，幫你立即解決生意上的煩惱！成為成功申請嘅一份子啦！ -->
                    </div>
                </div>


                <div class="mt-lg-5 mt-md-5 mt-sm-4 mt-4 ">
                    <h2 class="gold mt-lg-5 mt-md-5 mt-sm-4 mt-4  text-center">
                        <?php echo get_field('content_part_14'); ?>

                        <!-- 我們的服務 -->
                    </h2>

                    <div class="row mt-lg-5 mt-md-5 mt-sm-4 mt-4 ">
                        <div class="col-4 text-center">
                            <?php echo get_field('content_part_15'); ?>

                            <!-- <img class="sme-icon"
                                src="<?php echo get_template_directory_uri();?>/assets/images/sme-icon-1.png" alt="">
                            <div class="big-size mt-4">
                                協助客戶預備貸款文件
                            </div> -->
                        </div>
                        <div class="col-4 text-center">
                            <?php echo get_field('content_part_16'); ?>

                            <!-- <img class="sme-icon"
                                src="<?php echo get_template_directory_uri();?>/assets/images/sme-icon-2.png" alt="">
                            <div class="big-size mt-4">
                                加快文件處理速度

                            </div> -->
                        </div>
                        <div class="col-4 text-center">
                            <?php echo get_field('content_part_17'); ?>

                            <!-- <img class="sme-icon"
                                src="<?php echo get_template_directory_uri();?>/assets/images/sme-icon-3.png" alt="">
                            <div class="big-size mt-4">
                                增加成功申請的機會
                            </div> -->
                        </div>
                    </div>

                    <div class="mt-lg-5 mt-md-5 mt-sm-4 mt-4 ">
                        <?php echo get_field('content_part_18'); ?>
                        <!-- 我們會安排專人協助準備所需文件如商業登記、營運證明、營業數據等資料，並可快速為客戶配對合適銀行，提高申請成功率，加快整個申請過程，順利完成申請。 -->

                    </div>
                </div>


            </div>




        </div>














    </div>
</section>

<section class="sec5 mt-6">

    <div class="inner-container2 mx-auto">

        <div class="sep mx-auto"> <img class="sep-flo"
                src="https://unionus.com.hk/wp-content/themes/unionus/assets/images/sep-flo.png" alt=""></div>


        <h2 class="gold text-center mt-lg-5 mt-md-5 mt-sm-4 mt-4 ">
            <!-- content part 19 -->

            <?php

if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
    $lang_code = ICL_LANGUAGE_CODE;

    if($lang_code=='en')
    {
        echo 'Contact Us';

    }
    
    if($lang_code=='zh-hant')
    {
echo '聯絡我們';
    }
    
}
?>


        </h2>


        <div class="contact-form-div container">



            <?php
            if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
                $lang_code = ICL_LANGUAGE_CODE;

                if($lang_code=='en')
                {
                    echo do_shortcode('[contact-form-7 id="478" title="sme contact us en"]');
                }
                if($lang_code=='zh-hant')
                {
                    echo do_shortcode('[contact-form-7 id="68" title="sme contact us"]');
                }

              }
              


        ?>


            <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                姓名：<input type="text" class="form-control" placeholder=""></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                聯絡電話：<input type="text" class="form-control" placeholder=""></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                電郵：<input type="text" class="form-control" placeholder=""></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                是否支援whatsapp？
                <select class="form-select" aria-label="是否支援whatsapp">
                    <option value="" disabled selected></option>
                    <option value="是" selected="selected">是</option>
                    <option value="否">否</option>
                </select>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                查詢項目：
                <select class="form-select" aria-label="查詢項目：">
                    <option value=""></option>

                    <option value="DRP債務重組">DRP債務重組</option>
                    <option value="IDRP 牽頭式債務舒緩">IDRP 牽頭式債務舒緩</option>
                    <option value="破產">破產</option>
                    <option value="TU（個人環聯信貸報告）改善方案">TU（個人環聯信貸報告）改善方案</option>
                    <option value="大額清數方案">大額清數方案</option>

                    <option value="開立有限/無限公司">開立有限/無限公司</option>

                    <option value="公司/私人報稅">公司/私人報稅</option>

                    <option value="會計審核">會計審核</option>






                </select>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                職員聯絡閣下的時間:
                <select class="form-select" aria-label="是否支援whatsapp">
                    <option value=""></option>
                    <option value="1:00pm-2:00pm">1:00pm-2:00pm</option>
                    <option value="2:00pm-3:00pm">2:00pm-3:00pm</option>
                    <option value="3:00pm-4:00pm">3:00pm-4:00pm</option>
                    <option value="4:00pm-5:00pm">4:00pm-5:00pm</option>
                    <option value="5:00pm-6:00pm">5:00pm-6:00pm</option>
                    <option value="6:00pm-7:00pm">6:00pm-7:00pm</option>
                    <option value="7:00pm-8:00pm">7:00pm-8:00pm</option>
                    <option value="8:00pm-9:00pm">8:00pm-9:00pm</option>
                    <option value="9:00pm-10:00pm">9:00pm-10:00pm</option>
                    <option value="10:00pm-11:00pm">10:00pm-11:00pm</option>
                    <option value="11:00pm-12:00pm">11:00pm-12:00pm</option>
                    <option value="12:00pm-1:00am">12:00pm-1:00am</option>
                    <option value="1:00am-2:00am">1:00am-2:00am</option>
                    <option value="2:00am-3:00am">2:00am-3:00am</option>
                    <option value="3:00am-4:00am">3:00am-4:00am</option>
                    <option value="4:00am-5:00am">4:00am-5:00am</option>
                    <option value="5:00am-6:00am">5:00am-6:00am</option>
                    <option value="6:00am-7:00am">6:00am-7:00am</option>
                    <option value="7:00am-8:00am">7:00am-8:00am</option>
                    <option value="8:00am-9:00am">8:00am-9:00am</option>
                    <option value="9:00am-10:00am">9:00am-10:00am</option>
                    <option value="10:00am-11:00am">10:00am-11:00am</option>
                    <option value="11:00am-12:00am">11:00am-12:00am</option>
                    <option value="12:00am-1:00pm">12:00am-1:00pm</option>
                </select>
            </div>
            <div class="col-12 mb-0">
                <button type="button" class="btn submit-btn float-end mt-4">確定</button>


            </div> -->






        </div>


        <div class="sep2 mx-auto mt-lg-5 mt-md-5 mt-sm-4 mt-4 ">
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