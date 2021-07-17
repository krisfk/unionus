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
                <?php echo get_field('content_part_0');?>
                <!-- 破產 -->

            </h1>
        </div>

        <div class="sep mx-auto mt-3"> <img class="sep-flo"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/sep-flo.png" alt=""></div>

        <div class="inner-container mx-auto mt-5 fadeinup-ele">
            <?php echo get_field('content_part_1');?>

            <!-- 因為破產對個人信貸紀錄影響深遠及會為生活帶來一定限制，一般來說的確是最壞打算。但若果真的無力償還債務，又未能符合到申請債務舒緩(DRP)或個人自願安排(IVA)的條件，迫不得已下還是只好向法院提交破產呈請。申請人可以自行提交破產呈請或由專業人士代辦。

            <h2 class="gold mt-5">由我們代辦的好處</h2>
            <div class="mt-4">
                不用出庭面對繁瑣程序 <br>
                帶齊文件到律師樓辦理即可，不用到破產管理署及高等法院各處輪候<br>
                申請破產有大量文件手續，由有經驗人士代辦可避免因填錯文件而延遲破產令的頒發<br>
                提供法律意見，指導如何會見署方指定受託人
            </div> -->

        </div>


        <div class="text-center mt-7 fadein-ele">

            <div class="little-gold-bar mx-auto"></div>
            <h2 class="gold mt-5">
                <?php echo get_field('content_part_2');?>
                <!-- 自行提交破產呈請的程序 -->
            </h2>
        </div>

        <div class="bankrupt-steps mt-6">


            <ul class="bankrupt-steps-ul fadeinup-ele">
                <li>

                    <div class="small-gold-circle"></div>

                    <div class="bar-bg"></div>
                </li>
                <li class="center-point">

                    <div class="step-txt">
                        <?php echo get_field('content_part_3');?>

                        <!-- STEP <br>
                        01 -->
                    </div>

                </li>
                <li></li>
            </ul>


            <ul class="bankrupt-steps-ul  fadeinup-ele">
                <li class="text-end">
                    <?php echo get_field('content_part_4');?>

                    <!-- <h3 class="gold mb-3">填妥《破產(表格)規則》的表格: </h3>
                    <div>「債務人破產呈請書」及「資產負債狀況說明書」</div> -->
                </li>
                <li class="center-point-empty">

                </li>
                <li></li>
            </ul>

            <ul class="bankrupt-steps-ul reverse fadeinup-ele">
                <li>

                    <div class="small-gold-circle"></div>

                    <div class="bar-bg"></div>
                </li>
                <li class="center-point">

                    <div class="step-txt">
                        <?php echo get_field('content_part_5');?>

                        <!-- STEP <br>
                        02 -->
                    </div>

                </li>
                <li></li>
            </ul>

            <ul class="bankrupt-steps-ul reverse fadeinup-ele">
                <li>
                    <?php echo get_field('content_part_6');?>


                    <!-- <h3 class="gold mb-3">

                        繳交款項:
                    </h3>
                    <div>前往破產管理署，帶同填妥之表格繳交 $8000以支付破產程序中各項費用及開支 <br>
                        (星期一至五，上午9時至下午4時30分)
                    </div> -->
                </li>
                <li class="center-point-empty">


                </li>
                <li></li>
            </ul>

            <ul class="bankrupt-steps-ul ">
                <li>

                    <div class="small-gold-circle"></div>

                    <div class="bar-bg"></div>
                </li>
                <li class="center-point">

                    <div class="step-txt">
                        <?php echo get_field('content_part_7');?>
                        <!-- STEP <br>
                        03 -->
                    </div>

                </li>
                <li></li>
            </ul>

            <ul class="bankrupt-steps-ul  fadeinup-ele">
                <li class="text-end">
                    <?php echo get_field('content_part_8');?>

                    <!-- <h3 class="gold mb-3">

                        進行見證: </h3>
                    <div>就呈請書在律師、高等法院司法常務官或獲授權的破產管理署職員面前進行見證，
                        並就「資產負債狀況說明書」作出宣誓。
                        請留意破產管理署的見證服務每天只有上下午各25個，共50個名額，並不設預約，先到先得。

                    </div> -->
                </li>
                <li class="center-point-empty">


                </li>
                <li></li>
            </ul>


            <ul class="bankrupt-steps-ul reverse fadeinup-ele">
                <li>

                    <div class="small-gold-circle"></div>

                    <div class="bar-bg"></div>
                </li>
                <li class="center-point">

                    <div class="step-txt">
                        <?php echo get_field('content_part_9');?>
                        <!-- STEP <br>
                        04 -->
                    </div>

                </li>
                <li></li>
            </ul>

            <ul class="bankrupt-steps-ul reverse fadeinup-ele">
                <li>
                    <?php echo get_field('content_part_10');?>


                    <!-- <h3 class="gold mb-3">前往高等法院: </h3>
                    <div>
                        A) 帶同上述文件及破產管理署發出的按金收據，於會計部繳款處繳付法庭費用$1045 <br>
                        B) 在登記處櫃位取得破產案編號<br>
                        C) 就呈請取得聆訊的日期及時間<br>
                        D) 把登記處發出的粘膠標簽貼在呈請書上，並於表格相關位置填上存檔日期<br>
                        E) 於登記處影印(收費)蓋印呈請書和資產負債狀況說明書各2份副本<br>
                        F) 提交2份文件的正本並待登記處為呈請書的2份副本蓋印

                    </div> -->
                </li>
                <li class="center-point-empty">


                </li>
                <li></li>
            </ul>

            <ul class="bankrupt-steps-ul  fadeinup-ele">
                <li>

                    <div class="small-gold-circle"></div>

                    <div class="bar-bg"></div>
                </li>
                <li class="center-point">

                    <div class="step-txt">
                        <?php echo get_field('content_part_11');?>


                        <!-- STEP <br>
                        05 -->
                    </div>

                </li>
                <li></li>
            </ul>

            <ul class="bankrupt-steps-ul  fadeinup-ele">
                <li class="text-end">

                    <?php echo get_field('content_part_12');?>

                    <!-- 
                    <h3 class="gold mb-3">前往破產管理署: </h3>
                    <div>提交呈請書的蓋印副本和資產負債狀況說明書的副本各一份，並取得「初步訊問問卷 」
                        和「每月收入及開支評估表格」
                    </div> -->
                </li>
                <li class="center-point-empty">


                </li>
                <li></li>
            </ul>

            <ul class="bankrupt-steps-ul reverse fadeinup-ele">
                <li>

                    <div class="small-gold-circle"></div>

                    <div class="bar-bg"></div>
                </li>
                <li class="center-point">

                    <div class="step-txt">
                        <?php echo get_field('content_part_13');?>


                        <!-- STEP <br>
                        06 -->
                    </div>

                </li>
                <li></li>
            </ul>

            <ul class="bankrupt-steps-ul reverse fadeinup-ele">
                <li>
                    <?php echo get_field('content_part_14');?>

                    <!-- 
                    <h3 class="gold mb-3">再次前往高等法院:</h3>
                    <div>
                        在指定日期和時間出席聆訊，待法庭頒布破產令


                    </div> -->
                </li>
                <li class="center-point-empty">


                </li>
                <li></li>
            </ul>

            <ul class="bankrupt-steps-ul  fadeinup-ele">
                <li>

                    <div class="small-gold-circle"></div>

                    <div class="bar-bg"></div>
                </li>
                <li class="center-point">

                    <div class="step-txt">
                        <?php echo get_field('content_part_15');?>

                        <!-- STEP <br>
                        07 -->
                    </div>

                </li>
                <li></li>
            </ul>


            <ul class="bankrupt-steps-ul  fadeinup-ele">
                <li class="text-end">
                    <?php echo get_field('content_part_16');?>

                    <!-- <h3 class="gold mb-3">聯絡破產管理署或署方指定受託人: </h3>
                    <div>預約初次會面和安排移交資產。於會面時提交填妥的初步訊問問卷和每月收入及開支評估表格
                    </div> -->
                </li>
                <li class="center-point-empty">


                </li>
                <li></li>
            </ul>
            <ul class="bankrupt-steps-ul reverse fadeinup-ele">
                <li>

                    <div class="small-gold-circle"></div>

                    <div class="bar-bg"></div>
                </li>
                <li class="center-point">

                    <div class="step-txt">
                        <?php echo get_field('content_part_17');?>

                        <!-- STEP <br>
                        08 -->
                    </div>

                </li>
                <li></li>
            </ul>

            <ul class="bankrupt-steps-ul reverse fadeinup-ele">
                <li>
                    <?php echo get_field('content_part_18');?>

                    <!-- <h3 class="gold mb-3">擬備破產令:</h3>
                    <div>
                        向高等法院登記處的聆案官書記提交破產令初稿。收到處方寄出的批准的初稿後再向高等法院登記處提交全數三份的破產令連同批准的初稿以供審核。

                    </div> -->
                </li>
                <li class="center-point-empty">


                </li>
                <li></li>
            </ul>
            <ul class="bankrupt-steps-ul  fadeinup-ele">
                <li>

                    <div class="small-gold-circle"></div>

                    <div class="bar-bg"></div>
                </li>
                <li class="center-point">

                    <div class="step-txt">
                        <?php echo get_field('content_part_19');?>

                        <!-- STEP <br>
                        09 -->
                    </div>

                </li>
                <li></li>
            </ul>


            <ul class="bankrupt-steps-ul  fadeinup-ele">
                <li class="text-end">
                    <?php echo get_field('content_part_20');?>

                    <!-- <h3 class="gold mb-3">破產令存檔: </h3>
                    <div>取回全數三份破產令後交到高等法院登記處的高級司法書記進行相關手續，再向破產管理署或暫行受託人提交兩份蓋印本
                    </div> -->
                </li>
                <li class="center-point-empty">


                </li>
                <li></li>
            </ul>



        </div>








    </div>
</section>


<!-- </div> -->










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
<style type="text/css">
/* .bg-shape-1 {
    display: none;

} */

.bg-shape-2 {
    display: none;

}
</style>
<?php

get_footer();