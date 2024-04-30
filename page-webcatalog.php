

<?php
/**
 * The template for displaying page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package alte2020
 */

 global $pageType;
 $pageType="webcatalog";

 get_header();
?>
	<section class="contents scroll-trg">
    <?php
    while ( have_posts() ) :
      the_post();
    ?>
		<header class="content single-hero">
  <div class="inner">
    <div class="single-hero__text">
      <h2 class="single-hero__title">Webカタログ</h2>
    </div>
  </div>
</header>

		<div class="content blocks" >
<!--//-->
<article class="content catalog-block">
  <div class="inner">
    <?php
		the_content();
    ?>
  </div>

</article>

<!--//-->
<article class="content block">
  <div class="inner">
    <p class="block__note">
      ※当カタログに掲載した写真等を無断で<br class="on-sp">複製・転載することを禁じます。
    </p>
    <a href="/catalog/" class="block__catalog-btn">
      <span>カタログ請求はこちら</span>
    </a>
  </div>

</article>

</div>

    <?php
    endwhile; // End of the loop.
    ?>
<?php
get_footer();
