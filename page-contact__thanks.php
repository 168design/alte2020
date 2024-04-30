

<?php
/**
 * The template for displaying page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * Template Name: お問い合わせ完了
 *
 * @package alte2020
 */

 global $pageType;
 $pageType="contact";

 get_header();
?>
	<section class="contents scroll-trg">
		<header class="content single-hero">
  <div class="inner">
    <div class="single-hero__text">
      <h2 class="single-hero__title"><?php the_title(); ?></h2>
    </div>
  </div>
</header>


    <article class="content block be--thanks stby">
      <div class="thanks-block">
        <div class="inner">
          <article class="mail-form">
            <div class="mail-form-item be--lead">
              <p class="mail-form-item__note">
                この度はホームページを<br class="on-sp">ご利用いただきまして、<br class="on-sp">誠にありがとうございます。<br>
                お問い合わせいただきました内容を確認後、<br>担当者より改めてご連絡いたします。
              </p>
            </div>

            <?php
            while ( have_posts() ) :
              the_post();

              the_content();

            endwhile; // End of the loop.
            ?>

            <a href="/" class="thanks-block__top-btn">
              <i></i>
              <span>TOPページ</span>
            </a>
          </article>
        </div>
      </div>
    </article>

<?php
get_footer();
