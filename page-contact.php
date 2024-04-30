

<?php
/**
 * The template for displaying page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * Template Name: お問い合わせフォーム
 *
 * @package alte2020
 */

 global $pageType;
 $pageType="contact";

 global $post;
 $slug = $post->post_name;

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
      <h2 class="single-hero__title"><?php the_title(); ?></h2>
    </div>
  </div>
</header>

    <?php if($slug=='reserve' || $slug=='form'): ?>
      <article class="content block be--call">
  <div class="inner">
    <div class="block__announce">
      <h3>工場見学 休止のお知らせ</h3>
      <p>新型コロナウイルスの感染拡大防止のため、当面の間、工場見学を休止させていただきます。 再開時期につきましては、改めて当サイトにてご案内いたします。</p>
    </div>

    <h2 class="block__title"><span>お電話で</span></h2>

    <div class="call-info be--concierge">
      <div class="call-info__tel">
        <p class="call-info__num">
          <a class="tel-link" href="tel:0242274380"><span>0242-27-4380</span></a>
        </p>
      </div>
      <p class="call-info__note">
        【受付時間】 平日 9:00〜17:00
      </p>
    </div>
  </div>
</article>

    <?php else: ?>
      <article class="content block be--call">
  <div class="inner">
    <h2 class="block__title"><span>お電話で</span></h2>

    <div class="call-info">
      <div class="call-info__tel">
        <p class="call-info__label">
          アルテマイスターお客様相談窓口
        </p>
        <p class="call-info__num">
          <i><img src="<?php echo get_template_directory_uri(); ?>/img/common/freedial.svg" /></i>
          <a class="tel-link" href="tel:0120861900"><span>0120-861-900</span></a>
        </p>
      </div>
      <p class="call-info__note">
        【受付時間】 平日 9:00〜17:00<br>
        ※お客様からいただきましたお電話は、お申し出内容を正確にうけたまわるために、録音させていただいております。
      </p>
    </div>
  </div>
</article>

    <?php endif; ?>

		<article class="content block be--mail stby">
      <div class="inner">
        <h2 class="block__title stby"><span>メールで</span></h2>
        <ul class="mail-ctg">
          <li><a href="/contact/" class="mail-ctg__tab be--contact<?php if($slug=='contact') echo ' cur'; ?>">お問い合わせ</a></li>
          <li><a href="/catalog/" class="mail-ctg__tab be--catalog<?php if($slug=='catalog') echo ' cur'; ?>">カタログ<br class="on-sp">請求</a></li>
          <li><a href="/reserve/" class="mail-ctg__tab be--visit<?php if($slug=='reserve' || $slug=='form') echo ' cur'; ?>">工場見学<br class="on-sp">お申し込み</a></li>
        </ul>
      </div>
      <div class="mail-block">
        <div class="inner">
          <?php if($slug=='reserve' && $slug!='form'): ?>
          <article class="mail-form stby">
          <?php else: ?>
          <article class="mail-form stby h-adr">
          <?php endif; ?>
            <span class="p-country-name" style="display:none;">Japan</span>
            <?php
              the_content();
            ?>
          </article>
        </div>
      </div>
    </article>
    <?php
    endwhile; // End of the loop.
    ?>

<?php
get_footer();
