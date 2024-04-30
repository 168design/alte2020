

<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

		<article class="content tag-selector">
  <?php
    $term = get_queried_object();
    $term_sug = $term->slug;
    //echo "!".$term_sug;
  ?>
  <div class="inner">
    <div class="tag-selector__list">
      <a href="/news/"<?php if($term_sug=='news') echo ' class="cur"'; ?>><span>すべて</span></a>
      <a href="/news/alte/"<?php if($term_sug=='alte') echo ' class="cur"'; ?>><span>アルテマイスター</span></a>
      <a href="/news/press/"<?php if($term_sug=='press') echo ' class="cur"'; ?>><span>プレスリリース</span></a><br class="on-pc"><a href="/news/hoshi/"<?php if($term_sug=='hoshi') echo ' class="cur"'; ?>><span>アルテマイスター保志</span></a>
      <a href="/news/space/"<?php if($term_sug=='space') echo ' class="cur"'; ?>><span>スペース・アルテマイスター</span></a>
      <a href="/news/zushiya/"<?php if($term_sug=='zushiya') echo ' class="cur"'; ?>><span>ギャラリー厨子屋</span></a>
    </div>
  </div>


</article>

		<article class="content index">

  <div class="inner">

    <ul class="index__list">

		<?php
    if ( have_posts() ) :

    /* Start the Loop */
  	while ( have_posts() ) :
  		the_post();
      $category = get_the_category();
      $cat_id   = $category[0]->cat_ID;
      $cat_name = $category[0]->cat_name;
      $cat_slug = $category[0]->category_nicename;
    ?>
      <!--///-->
      <li class="index-item">
        <a href="<?php echo esc_url( get_permalink() ) ?>" class="index-item__btn">
          <p class="index-item__date"><?php echo get_the_date( 'Y/n/j' ); ?></p>
          <p class="index-item__tag be--<?php echo $cat_slug ?>"><?php echo $cat_name ?></p>
          <?php the_title( '<h2 class="index-item__title">', '</h2>' ); ?>
        </a>
      </li>

		<?php
    endwhile;
		?>

    </ul>

    <div class="pagination">
      <?php

      $now = get_query_var('paged');
      $total = $wp_query->max_num_pages;

      //2ページ目以降なら最初へのリンク
      if($now>=2):
        echo '<a href="', get_pagenum_link(1) ,'" class="page-first"></a>';
      endif;

      //ページネーション
      $big = 999999999; // need an unlikely integer
      echo paginate_links( array(
      	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
      	'format' => '/page/%#%',
      	'current' => max( 1, $now ),
      	'total' => $total,
        'prev_text' => '',
        'next_text' => '',
        'mid_size' => 1
      ) );


      //最後から2ページ目以降まで最後へのリンク
      if($total - $now>=2):
        echo '<a href="', get_pagenum_link( $total ) ,'" class="page-last"></a>';
      endif;

      ?>
    </div>

    <?php
    endif;
    ?>
  </div>


</article>


<?php
get_footer();
