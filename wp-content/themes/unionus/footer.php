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


    <div class="container">
        <?php
   if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
    $lang_code = ICL_LANGUAGE_CODE;
  }

  if($lang_code=='zh-hant')
  {
        ?>
        <select name="" class="footer-pulldown-menu wpcf7-form-control wpcf7-select form-control" aria-invalid="false">
            <option value="">其他頁面</option>
            <option value="https://unionus.com.hk/our-team/">Unionus團隊</option>
            <option value="https://unionus.com.hk/advantage/">優勢</option>
            <option value="https://unionus.com.hk/sme/">中小企融資擔保計劃 百分百擔保特惠貸款</option>
            <option value="https://unionus.com.hk/drp/">DRP債務重組</option>
            <option value="https://unionus.com.hk/iva/">IVA 個人自願安排</option>
            <option value="https://unionus.com.hk/idrp/">IDRP 牽頭式債務舒緩</option>
            <option value="https://unionus.com.hk/bankrupt/">破產</option>
            <option value="https://unionus.com.hk/improve-tu-plan/">TU（個人環聯信貸報告）改善方案</option>
            <option value="https://unionus.com.hk/found-limited-unlimited-company/">大額清數方案</option>
            <option value="https://unionus.com.hk/found-limited-unlimited-company/">開立有限/無限公司</option>
            <option value="https://unionus.com.hk/company-private-tax/">公司/私人報稅</option>
            <option value="https://unionus.com.hk/account-audit/">會計審核</option>
            <option value="https://unionus.com.hk/column/">專欄</option>
            <option value="https://unionus.com.hk/artists-and-partners/">藝人與合作伙伴</option>
            <option value="https://unionus.com.hk/contact-us/">聯絡我們</option>

        </select>

        <ul class="footer-menu">

            <li><a class="level-1 our-team " href="https://unionus.com.hk/our-team/">Unionus團隊</a></li>
            <li><a class="level-1 advantage " href="https://unionus.com.hk/advantage/">優勢</a></li>
            <li><a class="sme" href="https://unionus.com.hk/sme/">中小企融資擔保計劃 百分百擔保特惠貸款</a></li>
            <li><a class="drp" href="https://unionus.com.hk/drp/">DRP債務重組</a></li>
            <li><a class="iva" href="https://unionus.com.hk/iva/">IVA 個人自願安排</a></li>
            <li><a class="idrp" href="https://unionus.com.hk/idrp/">IDRP 牽頭式債務舒緩</a></li>
            <li><a class="bankrupt" href="https://unionus.com.hk/bankrupt/">破產</a></li>
            <li><a class="improve-tu-plan" href="https://unionus.com.hk/improve-tu-plan/">TU（個人環聯信貸報告）改善方案</a></li>
            <li><a class="large-clearing-scheme" href="https://unionus.com.hk/large-clearing-scheme/">大額清數方案</a>
            </li>
            <li><a class="found-limited-unlimited-company"
                    href="https://unionus.com.hk/found-limited-unlimited-company/">開立有限/無限公司</a></li>
            <li><a class="company-private-tax" href="https://unionus.com.hk/company-private-tax/">公司/私人報稅</a></li>
            <li><a class="account-audit" href="https://unionus.com.hk/account-audit/">會計審核</a></li>
            <li><a class="level-1 column " href="https://unionus.com.hk/column/">專欄</a></li>
            <li><a class="level-1 artists-and-partners " href="https://unionus.com.hk/artists-and-partners/">藝人與合作伙伴</a>
            </li>
            <li><a class="level-1 contact-us " href="https://unionus.com.hk/contact-us/">聯絡我們</a></li>

        </ul>
        <?php
  }
  else
  {
      ?>
        <ul class="footer-menu">

            <li><a class="level-1 our-team " href="https://unionus.com.hk/en/our-team/">About Us</a></li>
            <li><a class="level-1 advantage " href="https://unionus.com.hk/en/advantage/">Our Advantages</a></li>
            <li><a class="sme" href="https://unionus.com.hk/en/sme/">SME Financing Guaranteed Scheme 100 Per cent
                    Guaranteed Preferential loans</a></li>
            <li><a class="drp" href="https://unionus.com.hk/en/drp/">Debt relief program (DRP)</a></li>
            <li><a class="iva" href="https://unionus.com.hk/en/iva/">Individual voluntary arrangement (IVA)</a></li>
            <li><a class="idrp" href="https://unionus.com.hk/en/idrp/">Interbank Debt Relief Plan（IDRP）</a></li>
            <li><a class="bankrupt" href="https://unionus.com.hk/en/bankrupt/">Bankruptcy</a></li>
            <li><a class="improve-tu-plan" href="https://unionus.com.hk/en/improve-tu-plan/">TU ( Personal Trans-union
                    credit report) Improvement scenario</a></li>
            <li><a class="large-clearing-scheme" href="https://unionus.com.hk/en/large-clearing-scheme/">Big amount
                    clearance program</a>
            </li>
            <li><a class="found-limited-unlimited-company"
                    href="https://unionus.com.hk/en/found-limited-unlimited-company/">Setting up a limited/unlimited
                    company</a></li>
            <li><a class="company-private-tax" href="https://unionus.com.hk/en/company-private-tax/">Company / Personal
                    taxation declaration</a></li>
            <li><a class="account-audit" href="https://unionus.com.hk/en/account-audit/">Accounting and auditing</a>
            </li>
            <li><a class="level-1 column " href="https://unionus.com.hk/en/column/">Column</a></li>
            <li><a class="level-1 artists-and-partners " href="https://unionus.com.hk/en/artists-and-partners/">Artist
                    Cooperation and Partnership</a>
            </li>
            <li><a class="level-1 contact-us " href="https://unionus.com.hk/en/contact-us/">Contact Us</a></li>

        </ul>
        <?php
  }

?>

    </div>





    <div class="mt-5 text-center pb-6">
        Copyright © 2021 Unionus accounting (ASIA) limited
    </div>
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>