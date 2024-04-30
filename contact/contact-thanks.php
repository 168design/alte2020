

<?php
/**
 * The template for displaying page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package alte2020
 */

 global $pageType;
 global $bgcolor;
 $pageType="contact";
 $bgcolor="lgrey";

 get_header();
?>
	<section class="contents scroll-trg">
		<header class="content single-hero stby">
  <div class="inner">
    <div class="single-hero__text">
      <h2 class="single-hero__title">お問い合わせを<br>受け付けました。</h2>
    </div>
  </div>
</header>

		<article class="content block be--thanks stby">
  <div class="inner">
    <p>
      この度はホームページを<br>ご利用いただきまして、<br>誠にありがとうございます。<br>
      お問い合わせいただきました内容を確認後、<br>担当者より改めてご連絡いたします。
    </p>
  </div>
</article>


		<?php
    get_template_part( '../common-parts/contents-footer' );
    ?>
	</section><!-- /contents -->
<?php
get_footer();
