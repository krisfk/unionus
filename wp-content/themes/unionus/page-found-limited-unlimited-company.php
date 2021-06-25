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
            <h1 class="mx-auto gold">開立有限/無限公司</h1>
        </div>

        <div class="sep mx-auto mt-3"> <img class="sep-flo"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/sep-flo.png" alt=""></div>

        <div class="inner-container mx-auto mt-5">根據《商業登記條例》（第 310
            章），除特別豁免者外，所有在香港經營業務的人士均須辦理商業登記。代表無論規模是大是小、是實體店或是網店，只要是為了圖利而從事的生意或活動，都要在開始經營後一個月內成立有限/無限公司。
            <br> <br>
            最簡單可以記住兩者之分別便是加上「責任」2字了。當公司有財務責任或訴訟時，有限公司股東所負責任有限，
            而無限公司股東則需要負上全部責任(無上限)。在決定是開設有限還是無限公司時，可以考慮業務規模及自己對此生意之投入程度。假如是涉及較多資產和債款的生意，申請有限公司可以保障個人財產;
            假如是小生意，開設無限公司的金錢及時間成本會較低。
        </div>

        <div class="gold-table-div-wrapper">
            <img class="table-head-th-img"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/table-head-th.png" alt="">

            <div class="gold-table-div">
                <table class=" gold-table">


                    <tbody>

                        <tr>
                            <td class="column-1"></td>
                            <td class="column-2 gold big-size text-center">有限公司</td>
                            <td class="column-3 gold big-size text-center">無限公司</td>
                        </tr>
                        <tr>
                            <td class="gold big-size text-center">法律地位</td>
                            <td>屬法人團體，有獨立的法律地位，可以以公司名義擁有資產並簽訂合同</td>
                            <td>無獨立法律地位，可以以公司名義簽訂合同，但最終負責人仍是股東自己</td>
                        </tr>
                        <tr>
                            <td class="gold big-size text-center">債務責任</td>
                            <td>以公司名義訂立合約及負債。若公司最終資不抵債可選擇清盤，股東只會損失對公司之投資金額，並不影響其私人財產</td>
                            <td>公司股東有無限責任。若公司最終資不抵債，股東必須用其私人財產償還公司之債務</td>
                        </tr>
                        <tr>
                            <td class="gold big-size text-center">「生命」延續</td>
                            <td>除非清盤，否則會永久存在</td>
                            <td>如沒有另外協議，只要其中一名股東破產或過身，就必須要清盤或解散公司</td>
                        </tr>
                        <tr>
                            <td class="gold big-size text-center">成本</td>
                            <td>較高
                                註冊後每年必須:
                                <ul>
                                    <li>更新商業登記</li>
                                    <li>提交周年申報表及繳付相關的存檔費</li>
                                    <li>聘請會計師審計核數</li>
                                    <li>申報稅務</li>
                                </ul>

                                另外亦要向公司註冊處披露公司詳情及變更
                            </td>
                            <td>較低
                                註冊後每年只需更新商業登記和在個人報稅表報稅，毋須做審計
                            </td>
                        </tr>
                        <tr>
                            <td class="gold big-size text-center">好處</td>
                            <td>
                                <ul>
                                    <li>有限債務責任</li>
                                    <li>通常較獨資或合夥公司籌得更多資本</li>
                                    <li>可以出售股份籌集資金</li>
                                    <li>股東改變不影響公司的存在</li>
                                    <li>可以利用浮動抵押取得融資</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>較容易開設</li>
                                    <li>成本較低</li>
                                    <li>稅率較低</li>
                                    <li>運作較有彈性，不用公開公司資料</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="gold big-size text-center">弊處</td>
                            <td>
                                <ul>
                                    <li>開設手續及所需文件較繁複</li>
                                    <li>成本較高</li>
                                    <li>每年需要由持牌核數師核數才能向政府報稅</li>
                                    <li>稅率較高</li>
                                    <li>較多法律限制</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>無限債務責任</li>
                                    <li>較難開公司名義的銀行戶口</li>
                                    <li>轉讓業務後的債務責任未必能夠完全轉移</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="gold big-size text-center">申請所需文件</td>
                            <td>
                                <ul>
                                    <li>法團成立表格(NNC1) <br>
                                        (需要委任董事及公司秘書)</li>
                                    <li>公司組織章程細則(AoA)</li>
                                    <li>致商業登記署通知書(IRBR1)</li>
                                </ul>

                            </td>
                            <td>
                                <ul>
                                    <li>商業登記申請表格</li>
                                    <li>公司持有人或所有合夥人之身份證明文件</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>


    </div>
</section>


<!-- </div> -->

<section class="mt-7">
    <div class="container">

        <h2 class="gold">申請方法</h2>
        <img class="w-100 mt-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/steps-img.png" alt="">

        <div class="row">

            <div class="col-3 step-col step-col-1">

                <div class="step-name">
                    STEP 1</div>
                <div>
                    <ul>
                        <li class="line"></li>
                        <li>決定有限公司或無限公司</li>
                        <li>擬訂公司名稱</li>
                        <li>到公司註冊處的網上查冊中心*查看名稱有否已被登記</li>

                    </ul>

                </div>
            </div>


            <div class="col-3 step-col step-col-2">

                <div class="step-name">
                    STEP 2</div>
                <div>
                    <ul>
                        <li class="line"></li>
                        <li>
                            遞交公司申請文件及繳費(網上申請、親身遞交或郵寄)
                        </li>


                    </ul>

                </div>
            </div>


            <div class="col-3 step-col step-col-3">

                <div class="step-name">
                    STEP 3</div>
                <div>

                    <ul>
                        <li class="line"></li>

                        <li>領取商業登記證</li>
                        <li>領取公司註冊證明 (有限公司適用)</li>



                    </ul>


                </div>
            </div>


            <div class="col-3 step-col step-col-4">

                <div class="step-name">
                    STEP 4</div>
                <div>
                    <ul>
                        <li class="line"></li>

                        <li>視乎業務需要，領取其他所需牌照、許可證、證書或批准書** </li>

                    </ul>

                </div>
            </div>


        </div>

        <div class="row">
            <div class="col-12 gold">

                *網上查冊中心網址: <a class="normal"
                    href="https://www.icris.cr.gov.hk/csci/">https://www.icris.cr.gov.hk/csci/</a> <br>
                **詳情請參考工業貿易署網站: <a class="normal" href="https://www.tid.gov.hk/tc_chi/aboutus/form/publicform/others/allforms.html
">https://www.tid.gov.hk/tc_chi/aboutus/form/publicform/others/allforms.html
                </a>


            </div>
        </div>
    </div>
</section>


<section class="sec2  pt-const2">


    <!-- <div class="container inner-container2"> -->

    <!-- <div class="row"> -->

    <ul class="row-ul">

        <li class=" text-center"><img class="big-icon"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/big-icon-1.png" alt=""></li>
        <li class="">
            <h2 class="gold">有限公司</h2>
            雖然大家可以親身到公司註冊處辦公室(政府合署14樓) 或郵寄遞交公司註冊申請。 <br>
            但以網上「註冊易」提交申請會更方便快捷及節省批核時間。 <br>
            詳請: <a class="normal" href="https://www.cr.gov.hk/tc/services/register-company.htm">
                https://www.cr.gov.hk/tc/services/register-company.htm</a> <br>
            註冊連結: <a class="normal"
                href="https://www.eregistry.gov.hk/icris-ext/apps/uam01?execution=e1s1&m=n">https://www.eregistry.gov.hk/icris-ext/apps/uam01?execution=e1s1&m=n</a>
            <br>


        </li>
    </ul>



    <ul class="row-ul mt-5">

        <li>
            <h2 class="gold">無限公司</h2>

            只需作商業登記 <br>
            詳請及申請示範: <br>

            <a class="normal"
                href="https://www.ird.gov.hk/chi/demo/br_online_demo/chi554/brr554/index.htm">https://www.ird.gov.hk/chi/demo/br_online_demo/chi554/brr554/index.htm</a>



        </li>

        <li><img class="big-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/big-icon-2.png" alt="">
        </li>
    </ul>



    <ul class="row-ul mt-5">

        <li class=" text-center"><img class="big-icon"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/big-icon-3.png" alt=""></li>
        <li class="">
            <h2 class="gold">公司綠盒</h2>

            雖然「綠盒」並不是法例規定的工具，但一般秘書公司都會提供，以確保客人有備存公司重要文件。公司綠盒包括: <br>

            <ul class="row-ul-ul">
                <li>必須備存的文件: 重要人控制人登記冊、公司章程、公司成立登記證書、商業登記證書、政府的文件副本 (例如NNC1和NNC3)、法定登記冊(可以電子方式紀錄)</li>
                <li>日常業務用: 公司簽名印、公司圓印</li>
                <li>不是必要但有機會用到: 公司鋼印、股票書</li>

            </ul>



        </li>
    </ul>



    <ul class="row-ul mt-5">

        <li>
            <h2 class="gold">登記地址</h2>

            沒有商業地址的公司(例如網店或Freelance)在做商業登記的時候可以用個人住址注冊(包括公屋)。但為保障私隱，還是建議大家購買虛擬辦公室(Virtual Office) 服務獲取一個公司地址。


        </li>

        <li><img class="big-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/big-icon-4.png" alt="">
        </li>
    </ul>




</section>






<!-- 



<nav>
    <ul>
        <li class="dot1 dot" id="ec1">
            <div class="dot-menu-page-txt">公司簡介</div>
        </li>
        <li class="dot2 dot" id="ec2">
            <div class="dot-menu-page-txt">人性化的服務承諾</div>

        </li>
        <li class="dot3 dot" id="ec3">
            <div class="dot-menu-page-txt">顧客服務</div>

        </li>
        <li class="dot4 dot" id="ec4">
            <div class="dot-menu-page-txt">服務承諾
            </div>

        </li>
        <li class="dot5 dot" id="ec5">
            <div class="dot-menu-page-txt">服務項目

            </div>
        </li>

    </ul>
</nav> -->



<script type="text/javascript">
const skrollrObj = skrollr.init();
</script>

<script type="text/javascript">
$(function() {





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


    setTimeout(() => {

        $('.rolling-slogan').animate({
            'opacity': '1'
        }, 1000);

        $('.rolling-slogan').css({
            'margin-top': ($(window).height() - $('.rolling-slogan').height()) / 2 + 'px',
            'opacity': '1',
            'margin-left': ($(window).width() / 2 - $('.rolling-slogan').width()) / 2 + 'px',

        });

    }, 1000);


    function changeDot() {

        $('.top-menu-div').css({
            'background': 'rgb(33 34 45 / 70%)'
        })
        const scrollValue = $(window).scrollTop();
        const heightSec2 = $('.sec2').offset().top;
        const heightSec3 = $('.sec3').offset().top;
        const heightSec4 = $('.sec4').offset().top;
        const heightSec5 = $('.sec5').offset().top;


        if (scrollValue < heightSec2) {
            $('nav li').not('.dot1').removeClass('active');
            $('.dot1').addClass('active');
        } else if (scrollValue < heightSec3) {
            $('nav li').not('.dot2').removeClass('active');
            $('.dot2').addClass('active');
        } else if (scrollValue < heightSec4) {
            $('nav li').not('.dot3').removeClass('active');
            $('.dot3').addClass('active');
        } else if (scrollValue < heightSec5) {
            $('nav li').not('.dot4').removeClass('active');
            $('.dot4').addClass('active');
        } else {
            $('nav li').not('.dot5').removeClass('active');
            $('.dot5').addClass('active');
        }
    }

    $(window).on('scroll', changeDot);

    $('nav li').on('click', function() {
        const goToSection = '.s' + $(this).attr('id');

        // $(this).addClass('active')
        $('body, html').animate({
            scrollTop: $(goToSection).offset().top + 1,
        }, {
            duration: (browser == 'Apple Safari') ? 500 : 0, //0
            easing: "easeInOutQuart",
            complete: function() {}
        });
    });






    $(window).resize(function() {


        $('.home-banner-div').width($(window).width());
        $('.home-banner-div').height($(window).height());


        $('.company-intro-content-1').css({
            'top': $('.company-intro-row-div').height() / 2 - $('.company-intro-content-1')
                .height() - 30 +
                'px'
        })

        $('.company-intro-content-2').css({
            'bottom': $('.company-intro-row-div').height() / 2 - $(
                    '.company-intro-content-2')
                .height() -
                30 +
                'px'
        })

    });



});
</script>
<?php

get_footer();