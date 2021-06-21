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
            <h1 class="mx-auto gold">中小企融資擔保計劃 <br> 百分百擔保特惠貸款
            </h1>
        </div>

        <div class="sep mx-auto mt-3"> <img class="sep-flo"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/sep-flo.png" alt=""></div>


        <div class="inner-container mx-auto mt-5 text-center">

            <h2 class="gold">百分百擔保特惠貸款詳情</h2><br>

            作為中小企老闆，有新的創業或投資靈感，最需要就係資金的支持。 <br>
            面對經濟不景氣，中小企經常面對資金周轉問題。 <br> <br><br>
            有見及此，政府為舒緩中小企業的業務壓力，推出「中小企融資擔保計劃」（SFGS），最先後推出了「八成」（八成信貸擔保產品SFGS 80）、「九成」（九成信貸擔保產品SFGS
            90）及「百分百」（百分百擔保特惠貸款SFGS 100）擔保產品，財政司司長更二○二一至二二年度《財政預算案》公布推出優化措施，並延長申請期至二○二一年十二月三十一日。優化措施下，降低申請門檻，貸款金額大幅增加。
            <br> <br>
            合資格企業為二○二○年六月三十日前已最少營運三個月，並自去年二月份起任何一個單月營業額較該單月前於二○一九年初至二○二○年中的任何一個季度的平均每月營業額下跌三成或以上。每家企業最高貸款額提高至18個月僱員薪金及租金的總和，或600萬港元。以較低者為準。同時，特惠貸款的最長還款期增加至八年，而還息不還本的安排則增加至最多18個月。

        </div>
        <div class="inner-container2 mx-auto mt-6">


            <img class="w-100" src="https://unionus.com.hk/wp-content/uploads/2021/06/sem-graph.png" alt="">


            <div>
                <img class="flo-icon" src="<?php echo get_template_directory_uri();?>/assets/images/flo-icon.png"
                    alt="">
            </div>
            <div class="mt-4">
                首次報稅： <br>
                公司開業1.5年後會收到第一份報稅表(BIR51)，並且有較長報稅期限，可以於三個月內遞交。<br>
                •檔案號碼:23/xxxxxxxx(公司商業登記號碼)<br>
                •報那一個期間的數？<br>
                假設報稅表年份是2021年:<br>
                1) 由開業至31/3/2021 或<br>
                2) 由開業至自訂結帳日<br>
                例如1/7/2020 至31/12/2020 或 1/7/2020 至31/1/2021<br>
                (即以上例子下年度稅期為 1/1/2021至31/12/2021 或 1/2/2021-31/1/2022)
            </div>


            <h2 class="gold mt-5 text-end">其後報稅</h2>

            <div class="mt-4 text-end">

                通常於四至五月會收到，需要發出日一個月內遞交。 <br>
                但我們作為稅務代表可以為客戶提交延期申請，根據公司結帳日期有以下分別:

            </div>

        </div>



        <div class="text-center">
            <div class="gold-table-div-wrapper">

                <img class="table-head-th-img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/table-head-th.png" alt="">


                <div class="gold-table-div">
                    <table class="gold-table">


                        <tbody>

                            <tr>
                                <td class="column-1 gold big-size text-center">類別</td>
                                <td class="column-2 gold big-size text-center">結帳日期</td>
                                <td class="column-3 gold big-size text-center">提交日期可延展至*</td>
                            </tr>
                            <tr>
                                <td class="gold big-size text-center">N code</td>
                                <td>4月1日至11月30日</td>
                                <td>5月31日</td>
                            </tr>
                            <tr>
                                <td class="gold big-size text-center">D code</td>
                                <td>12月1日至12月31日</td>
                                <td>8月16日</td>
                            </tr>
                            <tr>
                                <td class="gold big-size text-center">M code</td>
                                <td>1月1日至3月31日</td>
                                <td>11月15日</td>
                            </tr>
                            <tr>
                                <td class="gold big-size text-center">M code</td>
                                <td>1月1日至3月31日
                                </td>
                                <td>1月31日 </td>
                            </tr>



                        </tbody>

                    </table>
                </div>

            </div>

            <div class="text-start mt-4 inner-container2 mx-auto">*此日期參考2020/21年度，每年安排或會有不同，須以稅務局刊登為準 <br>

                另外首年檔案號碼中字首的”23”亦會更改為相應行業類別的編號，例如05(進出口)、13(印刷)、22 (覆查個案) 等等

            </div>
        </div>

        <div class="text-center mt-7">

            <div class="little-gold-bar mx-auto"></div>
            <h2 class="gold mt-5">報稅需要提交什麼？</h2>
        </div>


        <div class="row mt-6 gx-5">

            <div class="col-4 text-center">
                <img class="tax-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/tax-icon-1.png"
                    alt="">

                <h3 class="gold mt-3">完全沒有營運</h3>

                <div class="mt-4">收入為0或宣布公司處於不活動狀態
                    仍需要填寫報稅表，但可豁免審計。除了填寫相應的日期及股本外，稅表上只需要全填零。
                </div>


            </div>
            <div class="col-4 text-center"> <img class="tax-icon"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/tax-icon-2.png" alt="">

                <h3 class="gold mt-3">營業額 HK$1 - $2,000,000 <br>
                    加其他小型法團定義*</h3>
                <div class="mt-4">不需要連同審計報告及利得稅計算表交上，但根據法律規定須要核數。稅表上要填寫核數師名稱及審計報告的簽署日期。
                    <br><br>
                    *請參考#5: <br>
                    <a class="normal" href="https://www.ird.gov.hk/chi/tax/taxrep_ptr.htm"
                        target="_blank">https://www.ird.gov.hk/chi/tax/taxrep_ptr.htm</a>

                </div>

            </div>
            <div class="col-4 text-center"> <img class="tax-icon"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/tax-icon-3.png" alt="">
                <h3 class="gold mt-3">營業額二百萬以上</h3>
                <div class="mt-4">需要將稅表連同簽署後的審計報告及利得稅計算表遞交。

                </div>

            </div>
        </div>

        <div class="inner-container3 mx-auto mt-5">*如遺失了稅表，可以寫信給稅局補領，會寄至公司註冊地址 <br>
            **因為審計及會計必須是一年帶一年的做，如遺失了以前的報稅及會計記錄，可去信稅局要求寄回先前的文件遞交記錄(需支付相關費用)
        </div>

        <div class="text-center mt-7">

            <div class="little-gold-bar mx-auto"></div>
            <h2 class="gold mt-5">報稅後</h2>
            <div class="mt-3">如果公司於稅務調整後財政為:</div>
        </div>


        <div class="row gx-5">

            <div class="col-6 position-relative gold-table-div-wrapper-col">
                <div class="gold-table-div-wrapper">

                    <img class="table-head-th-img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/table-head-th.png" alt="">


                    <div class="gold-table-div silver">
                        <table class="gold-table">


                            <tbody>

                                <tr>
                                    <td class="p-5">
                                        <h2 class="gold">虧損 <br>
                                            Loss Case</h2>

                                        <div class="mt-5  text-start">
                                            稅局未必會每年都給公司稅表，有可能兩至三年才發出一次。但即使沒有收到報稅表，若企業有應評稅利潤，仍有責任通知稅務局。
                                            <br><br>

                                            會計上的虧損不等於稅務上是虧損，因為稅務有自己一套計算方法。例如資產的初期免稅額為60%再每年20%/30%折舊，建造成本初期免稅20%後每年4%。
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


                    <div class="gold-table-div silver">
                        <table class="gold-table">


                            <tbody>

                                <tr>
                                    <td class="p-5">
                                        <h2 class="gold">盈餘 <br>
                                            Loss Case</h2>

                                        <div class="mt-5 text-start">
                                            首二百萬稅務調整的利潤可享有大概半價稅率8.25%計算出來的數再享有稅款寬減*。
                                            每位合夥人只可以享用8.25%優惠稅率一次，請參照:
                                            <a class="normal" href="https://www.ird.gov.hk/chi/faq/2trexample.htm">
                                                https://www.ird.gov.hk/chi/faq/2trexample.htm</a>


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


        <div class="inner-container2 text-center mx-auto">
            除本年度稅項外，大家每年也需要支付「暫繳稅」(即預付下一年的稅)。 <br>
            暫繳稅也可享用8.25%優惠稅率，但<span class="gold">不可</span>享用稅款寬減。 <br>
            例如2020/21年度寬減稅款為100%及<span class="gold">上限</span>HK$10,000:
        </div>



        <div class="text-center mt-5">
            <div class="gold-table-div-wrapper w-100">

                <img class="table-head-th-img"
                    src="http://localhost:8888/unionus/wp-content/themes/unionus/assets/images/table-head-th.png"
                    alt="">


                <div class="gold-table-div w-100">
                    <table class="gold-table w-100">


                        <tbody>

                            <tr>
                                <td class="column gold big-size text-center"></td>


                                <td class="column gold big-size text-center">例子A</td>
                                <td class="column gold big-size text-center">例子B</td>
                                <td class="column gold big-size text-center">例子C</td>
                            </tr>
                            <tr>
                                <td class="big-size text-center">(1)<span class="gold">本年度稅項</span></td>
                                <td>HK$12,000</td>
                                <td>HK$10,000</td>
                                <td>HK$7,000</td>

                            </tr>
                            <tr>
                                <td class=" big-size text-center">(2)<span class="gold">寬減稅款</span></td>
                                <td>HK$10,000</td>
                                <td>HK$10,000</td>
                                <td>HK$7,000</td>

                            </tr>
                            <tr>
                                <td class=" big-size text-center">(3)<span class="gold">暫繳稅</span></td>
                                <td>HK$12,000</td>
                                <td>HK$10,000</td>
                                <td>HK$7,000</td>

                            </tr>
                            <tr>
                                <td class=" big-size text-center">(1)-(2)+(3)= <br><span class="gold">寬減後應繳稅項</span>
                                </td>
                                <td>HK$14,000
                                </td>
                                <td>HK$10,000</td>

                                <td>HK$7,000 </td>
                            </tr>



                        </tbody>

                    </table>
                </div>

            </div>

            <div class="mt-4">下年如果寬免稅務後不需要交稅的話，稅局會退回款項。如果仍需要交稅的話亦會退回/補回 <br>

                *每年稅款寬減資料: <a class="normal"
                    href="https://www.gov.hk/tc/residents/taxes/taxfiling/taxrates/salariesrates.htm" target="_blank">
                    https://www.gov.hk/tc/residents/taxes/taxfiling/taxrates/salariesrates.htm</a>
            </div>
        </div>

    </div>
</section>


<!-- </div> -->



<section class="sec5 pt-const">



    <div class="sep mx-auto mt-const"> <img class="sep-flo"
            src="http://localhost:8888/unionus/wp-content/themes/unionus/assets/images/sep-flo.png" alt=""></div>


    <table class="me-auto ms-auto mt-5">
        <tbody>
            <tr>
                <td class="align-top gold-border-right pe-3">
                    <h2 class="gold text-end">有限公司利得稅 <br>
                        申報服務</h2>
                </td>
                <td class=" ps-3">
                    <ul class="service-points">
                        <li>D審計核數服務</li>
                        <li>編制財務年報</li>
                        <li>委任為稅務代表</li>
                        <li>填妥利得稅報稅表</li>
                        <li>遞交報稅表</li>
                        <li>稅務建議</li>



                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="sep2 mx-auto mt-5">
    </div>



</section>



<script type="text/javascript">
const skrollrObj = skrollr.init();
</script>

<script type="text/javascript">
$(function() {



    // .gold-table-div.silver
    $('.gold-table-div.silver').height($('.gold-table-div-wrapper-col').height() - 100);
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