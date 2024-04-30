

<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alte2020
 */

?>
  	<footer class="footer">
  <div class="inner">
    <h2 class="footer__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.png" alt="ALTE MEISTER"/></h2>
    <h3 class="footer__name">アルテマイスター<br>株式会社保志</h3>
    <div class="footer__info">
      <dl>
        <dt>本社・工場</dt>
        <dd>
          福島県会津若松市門田町一ノ堰村東40<br>
          <a class="tel-link" href="tel:0242274380">TEL.0242-27-4380</a>
        </dd>
      </dl>
    </div>
  </div>
  <div class="inner">
    <nav class="footer__br">
      <ul class="footer__nav">
        <li><a href="/sitemap/">サイトマップ</a></li>
        <li><a href="/terms/">ご利用にあたって</a></li>
        <li><a href="/privacy/">プライバシーポリシー</a></li>
      </ul>
      
    </nav>
    <div class="footer__bl">
      <p class="footer__cr">© ALTE MEISTER, Inc.</p>
    </div>

  </div>
</footer>

  </section><!-- /contents -->

</div><!-- /page-body -->
</div><!-- /wrap -->
<!--/core content-->

<div id="mqck" class="on-pc"></div>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lib/libs.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lib/HolidayChk.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/index.min.js?v=220106"></script>
<?php wp_footer(); ?>
</body>
</html>
