

<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package alte2020
 */

 global $pageType;
 $pageType="top";

 get_header();
?>

  <section class="contents scroll-trg">
    <article class="content hero size-full">
  <div class="hero-slide">
    <!--///-->
    <div class="hero-slide-item be--products be--black-bg">
      <a href="/products/" title="製品のご紹介">
        <div class="hero-slide-item__image">
          <picture class="size-cover" data-srcsize-sp="750/1120" data-srcsize-pc="1920/950">
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/top/hero/products-image-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/hero/products-image.jpg" alt="これからの祈りのかたち。製品のご紹介"/>
          </picture>
        </div>
      </a>
    </div>
    <!--///-->
    <div class="hero-slide-item be--quality be--black-bg">
      <a href="/quality/" title="つくるこころ">
        <div class="hero-slide-item__image">
          <picture class="size-cover" data-srcsize-sp="750/1120" data-srcsize-pc="1920/950">
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/top/hero/quality-image-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/hero/quality-image.jpg" alt="手と目で、見る。つくるこころ"/>
          </picture>
        </div>
      </a>
    </div>
    <!--///-->
    <div class="hero-slide-item be--company be--black-bg">
      <a href="/company/" title="アルテマイスターのこと" >
        <div class="hero-slide-item__image">
          <picture class="size-cover" data-srcsize-sp="750/1120" data-srcsize-pc="1920/950">
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/top/hero/company-image-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/hero/company-image.jpg" alt="豊かな心を創る。アルテマイスターのこと"/>
          </picture>
        </div>
      </a>
    </div>
  </div>
</article>

		<article class="content main-index">
  <!-- 祈りのかたち -->
<div class="main-item be--products stby">
  <div class="main-item__block">
    <a href="/products/" class="main-item__link">
      <div class="main-item__main-image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/top/contents/products-main-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/contents/products-main.jpg" alt="仏壇 白虹A型" />
        </picture>
      </div>
    </a>
    <div class="main-item__text">
      <a class="main-item__link">
        <h2 class="main-item__title">
          <span>祈り<br class="on-pc">の<br class="on-pc">かたち</span>
        </h2>
        <p class="main-item__lead">
          <span>製品のご紹介</span>
        </p>
      </a>
      <a href="/products/" class="main-item__link">
        <div class="main-item__more-btn">
          <span>詳しくみる</span>
        </div>
      </a>
    </div>
  </div>
</div>

  <!-- つくるこころ -->
<div class="main-item be--quality stby">
  <div class="main-item__block">
    <a href="/quality/" class="main-item__link">
      <div class="main-item__main-image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/top/contents/quality-main-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/contents/quality-main.jpg" alt="つくるこころ" />
        </picture>
      </div>
    </a>
    <div class="main-item__text">
      <a class="main-item__link">
        <h2 class="main-item__title">
          <span>つくる<br class="on-pc">こころ</span>
        </h2>
        <p class="main-item__lead">
          <span>ものづくりの特徴</span>
        </p>
      </a>
      <a href="/quality/" class="main-item__link">
        <div class="main-item__more-btn">
          <span>詳しくみる</span>
        </div>
      </a>
    </div>
  </div>
</div>

  <!-- アルテマイスターのこと -->
<div class="main-item be--company stby">
  <div class="main-item__block">
    <a href="/company/" class="main-item__link">
      <div class="main-item__main-image stby">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/top/contents/company-main-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/contents/company-main.jpg" alt="アルテマイスターのこと" />
        </picture>
      </div>
    </a>
    <div class="main-item__text">
      <a class="main-item__link">
        <h2 class="main-item__title">
          <span>ア</span><span>ル</span><span>テ</span><span>マ</span><span>イ</span><span>ス</span><span>タ</span><span>ー</span><br><span>の</span><span>こ</span><span>と</span>
        </h2>
        <p class="main-item__lead">
          <span>会社案内</span>
        </p>
      </a>
      <a href="/company/" class="main-item__link">
        <div class="main-item__more-btn">
          <span>詳しくみる</span>
        </div>
      </a>
    </div>
  </div>
</div>

</article>

		<article class="content others-index">

  <ul class="others-index__list">

    <!--///-->
    <li class="others-item be-visit">
      <a href="/visit/" class="others-item__block">
        <h2 class="others-item__title">
          工場見学のご案内
        </h2>
        <div class="others-item__image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/contents/visit-thumb.jpg" alt="工場見学のご案内" />
        </div>
      </a>
    </li>

    <!--///-->
    <li class="others-item be-shop">
      <a href="/shop/" class="others-item__block">
        <h2 class="others-item__title">
          店舗のご案内
        </h2>
        <div class="others-item__image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/contents/shop-thumb.jpg" alt="店舗のご案内" />
        </div>
      </a>
    </li>

    <!--///-->
    <li class="others-item be-showroom">
      <a href="/showroom/" class="others-item__block">
        <h2 class="others-item__title">
          ショールームのご案内
        </h2>
        <div class="others-item__image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/contents/showroom-thumb.jpg" alt="ショールームのご案内" />
        </div>
      </a>
    </li>

    <!--///-->
    <li class="others-item be-remake">
      <a href="/remake/" class="others-item__block">
        <h2 class="others-item__title">
          こころをつなぐ
        </h2>
        <div class="others-item__image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/contents/remake-thumb.jpg" alt="こころをつなぐ" />
        </div>
      </a>
    </li>

    <!--///-->
    <li class="others-item be-life">
      <a href="/life/" class="others-item__block">
        <h2 class="others-item__title">
          祈りのある生活
        </h2>
        <div class="others-item__image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/contents/life-thumb.jpg" alt="祈りのある生活" />
        </div>
      </a>
    </li>

    <!--///-->
    <li class="others-item be-pray">
      <a href="/pray/" class="others-item__block">
        <h2 class="others-item__title">
          祈りのかたちを創る
        </h2>
        <div class="others-item__image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/contents/pray-thumb.jpg" alt="祈りのかたちを創る" />
        </div>
      </a>
    </li>


  </ul>

</article>

		<article class="content news">
  <div class="inner">

    <h2 class="news__title"><span>NEWS</span></h2>

    <ul class="news__list">

      <?php
      $args = array(
                'numberposts' => 5,
                'category' => 'news'
              );
      $posts = get_posts( $args );
      if( $posts ) :
        foreach( $posts as $post ) :
        setup_postdata( $post );

        $category = get_the_category();
        $cat_id   = $category[0]->cat_ID;
        $cat_name = $category[0]->cat_name;
        $cat_slug = $category[0]->category_nicename;
      ?>
      <!--///-->
      <li class="news-item">
        <a href="<?php echo esc_url( get_permalink() ) ?>" class="news-item__btn">
          <p class="news-item__date"><?php echo get_the_date( 'Y.n.j' ); ?></p>
          <p class="news-item__tag be--<?php echo $cat_slug ?>"><?php echo $cat_name ?></p>
          <?php the_title( '<h2 class="news-item__title">', '</h2>' ); ?>
        </a>
      </li>

      <?php
        endforeach;
      endif;
      wp_reset_postdata();
      ?>

    </ul>

    <a href="/news/" class="news__index-btn">
      <span>一覧をみる</span>
      <i></i>
    </a>
  </div>
</article>

		<article class="content sub-nav">
  <div class="inner">
    <div class="sub-nav__list">
      <a href="/access/" class="sub-nav__btn">
        <span>アクセス</span>
      </a>
      <a href="/recruit/" class="sub-nav__btn">
        <span>採用情報</span>
      </a>
      <a href="/dealer/" class="sub-nav__btn">
        <span>法人の</span><span>みなさまへ</span>
      </a>
    </div>
    <a href="/contact/" class="sub-nav__contact-btn">
      <span>お問い合わせ・カタログ請求</span>
    </a>
  </div>
</article>

		<article class="content banner">
  <div class="inner">
    <ul class="banner__list">
      <li>
        <a href="https://prayforone.jp/" target="_blank" title="PRAY for (ONE)" class="banner-item be--pray">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/banner/pray_for_one.jpg" alt="PRAY for (ONE)" />
        </a>
      </li>
      <li>
        <a href="https://komera.shop/" target="_blank" title="こめら online shop" class="banner-item be--komera">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/banner/komera.jpg" alt="こめら online shop" />
        </a>
      </li>
    </ul>
  </div>
</article>


<?php
get_footer();
