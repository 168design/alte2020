

<?php
/**
 * The template for displaying page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package alte2020
 */

 global $pageType;
 $pageType="products";

 get_header();
?>
	<section class="contents scroll-trg">
    <header class="content hero stby">
  <div class="hero-item be--products-top">
    <div class="hero-item__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/index/hero-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/products/index/hero.jpg" alt="祈りのかたち" />
      </picture>
    </div>
    <div class="inner">
      <div class="hero-item__text">
        <h2 class="hero-item__title">祈りのかたち</h2>
        <p class="hero-item__lead">製品のご紹介</p>
      </div>
    </div>
  </div>
</header>

    <article class="content lead">

  <div class="inner be--l">

    <p class="lead__lead">
      <span>
        時代が求める<br>｢祈りのかたち｣を<br>創り出す。
      </span>
    </p>
    <p class="lead__detail">
      <span>
        私たちアルテマイスターは、1900年（明治33年）に創業。<br>
        会津若松の地場産業の一つとして、<br class="on-sp">
        仏壇・仏具・位牌を主とした<br>
        製品の製造・販売を手掛けています。<br>
        核家族化や洋風化が進み、昔からの供養や祈りの習慣が様変わりする中で、<br>
        現代の住環境に合い、人の心に寄り添う祈りのかたちを提供できるよう、<br>
        ものづくりを続けています。
      </span>
    </p>

  </div>
</article>

		<article class="content index">

  <div class="inner">

    <ul class="index__list">

      <!--///-->
      <li class="index-item">
        <a href="/products/butsudan_hakkou/" class="index-item__block">
          <div class="index-item__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/index-thumb-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/index-thumb.jpg" alt="デザイン仏壇白虹" />
            </picture>
          </div>
        </a>
      </li>

      <!--///-->
      <li class="index-item">
        <a href="/products/butsudan_jidai/" class="index-item__block">
          <div class="index-item__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_jidai/index-thumb-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_jidai/index-thumb.jpg" alt="時代型仏壇" />
            </picture>
          </div>
        </a>
      </li>

      <!--///-->
      <li class="index-item">
        <a href="/products/zushi/" class="index-item__block">
          <div class="index-item__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/zushi/index-thumb-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/products/zushi/index-thumb.jpg" alt="工房厨子" />
            </picture>
          </div>
        </a>
      </li>

      <!--///-->
      <li class="index-item">
        <a href="/products/ihai/" class="index-item__block">
          <div class="index-item__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/ihai/index-thumb-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/products/ihai/index-thumb.jpg" alt="位牌" />
            </picture>
          </div>
        </a>
      </li>

      <!--///-->
      <li class="index-item">
        <a href="/products/butsugu/" class="index-item__block">
          <div class="index-item__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsugu/index-thumb-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsugu/index-thumb.jpg" alt="仏具" />
            </picture>
          </div>
        </a>
      </li>

      <!--///-->
      <li class="index-item">
        <a href="/products/omamori/" class="index-item__block">
          <div class="index-item__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/omamori/index-thumb-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/products/omamori/index-thumb.jpg" alt="おまもり" />
            </picture>
          </div>
        </a>
      </li>

      <!--///-->
      <li class="index-item">
        <a href="/products/hitotoki/" class="index-item__block">
          <div class="index-item__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/hitotoki/index-thumb-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/products/hitotoki/index-thumb.jpg" alt="人と木" />
            </picture>
          </div>
        </a>
      </li>

    </ul>

  </div>
</article>

		<article class="content catalog-btn">
  <div class="inner">
    
    <a href="/catalog/" class="catalog-btn__btn be--bl">
      <span>カタログ請求はこちら</span>
    </a>
    
    
  </div>
</article>

		<article class="content footer-banner-a">
  <a href="/remake/" class="footer-banner-a__link">
    <div class="footer-banner-a__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/index/remake-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/products/index/remake.jpg" alt="こころをつなぐ" />
      </picture>
    </div>
    <div class="footer-banner-a__text">
      <h2 class="footer-banner-a__lead">
        祈りを<br>受け継いでいく
      </h2>
      <p class="footer-banner-a__btn">
        <span>こころをつなぐ</span>
      </p>
    </div>
  </a>
</article>


<?php
get_footer();
