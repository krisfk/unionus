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
            <h1 class="mx-auto gold fadeindown-ele"><?php echo get_the_title();?></h1>
        </div>

        <div class="sep mx-auto mt-3"> <img class="sep-flo"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/sep-flo.png" alt=""></div>

        <div class="inner-container mx-auto mt-5 text-center ">

            <h2 class="gold fadeinup-ele">
                <?php
                   if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
                    $lang_code = ICL_LANGUAGE_CODE;
                  }
                  
                  echo ($lang_code=='zh-hant') ? '最新文章':'Latest Articles';


                  
                ?>

            </h2>



            <!-- <div class="row"> -->

            <div class="news-container mt-lg-5 mt-md-4 mt-sm-4 mt-4  fadein-ele">


                <?php
            
            $args = array(
                'posts_per_page'   => 5,
                'post_type'        => 'post',
                'orderby' => 'publish_date',
                'order' => 'DESC',
            );
            $the_query = new WP_Query( $args );
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
?>
                <div class="news">
                    <a href="<?php echo get_permalink();?>">
                        <div class="post-image-div w-50 d-inline-block float-start px-3"><img class="w-100"
                                src="<?php echo get_the_post_thumbnail_url(null,'full');?>" alt="">
                        </div>
                        <div class="post-txt-div w-50 text-start  d-inline-block float-start  px-3">
                            <h3 class="article-title gold"><?php echo get_the_title();?></h3>

                            <div class="date gold mt-3"><?php echo get_the_date();?></div>


                            <div class="mt-3 content"><?php echo get_the_excerpt(); ?>
                            </div>

                            <a href="#" class="gold read-more-btn float-end mt-5">Read More</a>
                        </div>
                    </a>
                </div>
                <?php
            }
            ?>




            </div>




            <div class="row mt-6">
                <?php
                
                $cat_args=array(
                    'orderby' => 'name',
                    'order' => 'ASC'
                     );
                  $categories=get_categories($cat_args);
                    
                

                $idx=0;
                  foreach($categories as $category) { 
                   
                    


                    ?>

                <div class="col-lg-6 col-md-12 col-sm-12 col-12 
                <?php if($idx %2 ==0) {
                    echo 'fadeleft-ele';
                }
                else
                {
                    echo 'faderight-ele';
   
                } ?>
                ">


                    <div class="d-flex align-center gold">
                        <img class="news-flo-icon me-3"
                            src="<?php echo get_template_directory_uri();?>/assets/images/flo-icon.png" alt="">
                        <?php echo $category->name;?>
                    </div>

                    <div class="category-description mt-3">

                        <h2 class="gold text-start">
                            <!-- 成立公司，相關注意，創業社創方向 -->
                            <?php echo $category->description;?>

                        </h2>


                        <a class="gold-table-div-wrapper" href="<?php echo get_permalink();?>">

                            <img class="table-head-th-img"
                                src="https://unionus.com.hk/wp-content/themes/unionus/assets/images/table-head-th.png"
                                alt="">


                            <div class="gold-table-div gold">
                                <table class="gold-table">


                                    <tbody>

                                        <tr>
                                            <td class="p-0">

                                                <?php 
                                            $cat_id = $category->term_id;
                                            $args=array(
                                                // 'posts_per_page' => 1, 
                                                'cat' => $cat_id,
                                            );
                                            $wp_query = new WP_Query( $args );
                                        
                                               if($wp_query->have_posts())
                                               {
                                                   $wp_query->the_post();
                                                    
                                                   ?>

                                                <img class="w-100"
                                                    src="<?php echo get_the_post_thumbnail_url(null,'full');?>" alt="">
                                                <h3 class="article-title gold text-start mt-3 px-3">

                                                    <?php echo get_the_title();?></h3>

                                                <div class="date gold mt-5 mb-4 text-end px-3">
                                                    <?php echo get_the_date();?></div>
                                                <?php
                                               } 

                                            
                                        ?>


                                            </td>
                                        </tr>




                                    </tbody>

                                </table>
                            </div>

                            <img class="table-foot-th-img"
                                src="https://unionus.com.hk/wp-content/themes/unionus/assets/images/table-foot.png"
                                alt="">



                        </a>

                    </div>


                </div>
                <?php
                $idx++;
                    }
                    
                
                ?>

            </div>
        </div>


        <div class="text-center mt-7">

            <div class="little-gold-bar mx-auto"></div>
            <div class=" mt-5 fadeinup-ele">全部文章</div>
            <h2 class="gold mt-2 fadeinup-ele">文章列表</h2>
        </div>


        <div class="row all-articles-list mt-5">


            <?php
            $args = array(
                'posts_per_page'   => -1,
                'post_type'        => 'post',
            );
            $the_query = new WP_Query( $args );
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                ?>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-5  fadein-ele">
                <a class="news" href="<?php echo get_permalink();?>">
                    <div class="post-image-div w-50 d-inline-block float-start px-3">


                        <img class="w-100" src="<?php echo get_the_post_thumbnail_url(null,'full');?>" alt="">


                    </div>
                    <div class="post-txt-div w-50 text-start  d-inline-block float-start  px-3">
                        <h3 class="article-title gold">
                            <?php echo get_the_title();?>
                        </h3>

                        <div class="date gold mt-3"><?php echo get_the_date();?></div>


                        <div class="mt-3 content"><?php 
                            echo get_the_excerpt();
                            ?>
                        </div>

                        <a href="#" class="gold read-more-btn float-end mt-5">Read More</a>
                    </div>
                </a>
            </div>


            <?php


              }
            ?>

            <?php
            
            // for($i=0;$i<8;$i++)
            // {
                ?>
            <!-- <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-5  fadein-ele">
                    <div class="news">
                        <div class="post-image-div w-50 d-inline-block float-start px-3"><img class="w-100"
                                src="https://unionus.com.hk/wp-content/uploads/2021/06/newspaper.png" alt="">
                        </div>
                        <div class="post-txt-div w-50 text-start  d-inline-block float-start  px-3">
                            <h3 class="article-title gold">
                                【破產流程】申請個人破產 提交破產呈請 破產的4個影響</h3>

                            <div class="date gold mt-3">2021-06-15</div>


                            <div class="mt-3">申請破產無疑對個人信貸紀錄影響深遠，亦會使生活受到一定法律限制，一般而言的確是最壞選擇。可是，若果實在無能力償還債務，又
                            </div>

                            <a href="#" class="gold read-more-btn float-end mt-5">Read More</a>
                        </div>
                    </div>
                </div> -->


            <?php
            // }
            ?>





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
// const skrollrObj = skrollr.init();
</script>

<script type="text/javascript">
$(function() {



    $('.news-container').slick({
        dots: true,
        arrows: false,
        pauseOnFocus: false,
        infinite: true,
        adaptiveHeight: true,

        speed: 800,
        autoplaySpeed: 5000,
        autoplay: true,
        // fade: true,
        cssEase: 'ease-out',
        pauseOnHover: false
    });


    // news-container
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