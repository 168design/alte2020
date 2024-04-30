

<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package alte2020
 */

 global $pageType;
 $pageType="news";

 get_header();
?>

	<section class="contents scroll-trg">
		<header class="content single-hero">
  <div class="inner">
    <div class="single-hero__text">
      <h2 class="single-hero__title">NEWS</h2>
    </div>
  </div>
</header>

		<?php
while ( have_posts() ) :
  the_post();

  $category = get_the_category();
  $cat_id   = $category[0]->cat_ID;
  $cat_name = $category[0]->cat_name;
  $cat_slug = $category[0]->category_nicename;
?>
<article class="content news-header">
  <div class="inner">
    <p class="news-header__tag be--<?php echo $cat_slug ?>"><?php echo $cat_name ?></p>
    <p class="news-header__date"><?php echo get_the_date( 'Y/n/j' ); ?></p>
    <?php the_title( '<h1 class="news-header__title"><span>', '</span></h1>' ); ?>
  </div>
</article>

<article class="content news-body">
  <div class="inner">
    <?php
		the_content();
    ?>
  </div>
</article>

<article class="content news-footer">
  <div class="inner">
    <div class="news-footer__btns">
      <?php
        $prev_post = get_previous_post();
        if( !empty( $prev_post ) ) :
          $purl = get_permalink( $prev_post->ID );
      ?>
      <a href="<?php echo $purl; ?>" class="news-footer__btn be--prev"><span><　Back</span></a>
      <?php
        else:
      ?>
      <a class="news-footer__btn be--prev be--hide"><span><　Back</span></a>
      <?php
        endif;
      ?>

      <a href="/news/" class="news-footer__btn be--index"><span>一覧に戻る</span></a>

      <?php
        $next_post = get_next_post();
        if( !empty( $next_post ) ) :
          $nurl = get_permalink( $next_post->ID );
      ?>
      <a href="<?php echo $nurl; ?>" class="news-footer__btn be--next"><span>Next　></span></a>
      <?php
        else:
      ?>
      <a class="news-footer__btn be--next be--hide"><span>Next　></span></a>
      <?php
        endif;
      ?>

    </div>
  </div>

</article>
<?php
endwhile; // End of the loop.
?>


<?php
get_footer();
