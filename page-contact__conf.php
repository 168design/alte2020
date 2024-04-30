

<?php
/**
 * The template for displaying page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * Template Name: お問い合わせ確認
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


    <article class="content block be--confirm stby">
      <div class="confirm-block">
        <div class="inner">
          <article class="mail-form">

            <div class="mail-form-item be--lead">
              <p class="mail-form-item__note">
                以下の内容で間違いがなければ、「送信する」ボタンを押してください。
              </p>
            </div>

            <?php
            while ( have_posts() ) :
              the_post();

              the_content();

            endwhile; // End of the loop.
            ?>

          </article>
        </div>
      </div>
    </article>

<?php
get_footer();
