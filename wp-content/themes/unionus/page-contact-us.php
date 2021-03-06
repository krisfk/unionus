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
                <!-- 聯絡我們 -->
            </h1>
        </div>

        <div class="sep mx-auto mt-3"> <img class="sep-flo"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/sep-flo.png" alt=""></div>

        <div class="inner-container mx-auto mt-lg-5 mt-md-5 mt-sm-5 mt-4 text-center fadeinup-ele">

            <?php echo get_field('content_part_1');?>


            <!-- <h2 class="gold">與我們聯繫</h2>

            <div class="mt-3">
                如果您有任何我們想回答的疑問，或者可以致電我們，我們的專家將為您提供指導。
            </div>

            <div class="mt-4">
                <h3 class="gold"> 我們的地址</h3>
                <div> 21st Floor, CMA Building, 64 Connaught Road, Central, Hong Kong</div>
            </div>

            <div class="mt-4">
                <h3 class="gold"> 客戶服務Whatsapp</h3>
                <div> 24小時專人WhatsApp熱線+852 9888 8135</div>
            </div>



            <div class="mt-4">
                <h3 class="gold"> 我們的電話</h3>
                <div> 24小時專人WhatsApp熱線+852 9888 8135</div>
            </div>
 -->





        </div>

    </div>
    </div>
</section>

<section class="sec5 mt-6">


    <div class="inner-container2 mx-auto">
        <div class="sep mx-auto"> <img class="sep-flo"
                src="https://unionus.com.hk/wp-content/themes/unionus/assets/images/sep-flo.png" alt=""></div>


        <h2 class="gold text-center mt-lg-5 mt-md-5 mt-sm-4 mt-4 fadeinup-ele">
            <?php echo get_field('content_part_2');?>

            <!-- 聯絡我們 -->
        </h2>


        <div class="contact-form-div container fadein-ele">



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
  


// [contact-form-7 id="478" title="sme contact us en"]


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