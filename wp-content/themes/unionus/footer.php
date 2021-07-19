<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>


<footer id="colophon" class="site-footer pt-const2" role="contentinfo">

    <?php
    echo $main_menu;
        // $main_menu = wp_get_menu_array('main menu');

// foreach ($main_menu as $menu_item) {
//     echo 1;
// }
        // $main_menu = wp_get_menu_array('main menu');
?>



    <div class="mt-5 text-center pb-5">
        Copyright © 2021 Unionus accounting (ASIA) limited
    </div>
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>