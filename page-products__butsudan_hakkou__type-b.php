

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

		<!-- entry -->
		<header class="content single-hero">
  <div class="inner">
    <figure class="single-hero__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/type-b/main-image-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/type-b/main-image.jpg" alt="デザイン仏壇　白虹B型" />
      </picture>
    </figure>
    <div class="single-hero__text">
      <h1 class="single-hero__title"><small>デザイン仏壇</small>白虹B型</h1>
      <p class="single-hero__lead">はっこうびーがた</p>
    </div>
  </div>
</header>

<!--//-->
<article class="content hakkou-lineup be--ab">
  <div class="inner">
    <div class="hakkou-lineup__text">
      <h2 class="hakkou-lineup__name">フロアタイプ</h2>
      <div class="hakkou-lineup__detail">
        <p class="hakkou-lineup__price-label">希望小売価格</p>
        <p class="hakkou-lineup__price">
        1,914,000<small>円（税込）</small>
        </p>
        <p class="hakkou-lineup__size">
          H125×W48×D42cm
        </p>
      </div>
    </div>
    <div class="hakkou-lineup__images">
      <figure class="hakkou-lineup__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/type-b/floor-1-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/type-b/floor-1.jpg" alt="白虹B型 フロアタイプ ウォーナット・内金仕上げ" />
        </picture>
        <figcaption>ウォールナット・内金仕上げ</figcaption>
      </figure>
      <figure class="hakkou-lineup__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/type-b/floor-2-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/type-b/floor-2.jpg" alt="白虹B型 フロアタイプ ウォーナット・内天然木仕上げ" />
        </picture>
        <figcaption>ウォールナット・内天然木仕上げ</figcaption>
      </figure>
      <figure class="hakkou-lineup__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/type-b/floor-3-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/type-b/floor-3.jpg" alt="白虹B型 フロアタイプ 扉を閉めた状態" />
        </picture>
        <figcaption>扉を閉めた状態</figcaption>
      </figure>
    </div>
  </div>
</article>

<!--//-->
<article class="content hakkou-lineup be--ab">
  <div class="inner">
    <div class="hakkou-lineup__text">
      <h2 class="hakkou-lineup__name">卓上タイプ</h2>
      <div class="hakkou-lineup__detail">
        <p class="hakkou-lineup__price-label">希望小売価格</p>
        <p class="hakkou-lineup__price">
        1,529,000<small>円（税込）</small>
        </p>
        <p class="hakkou-lineup__size">
          H75×W48×D42cm
        </p>
      </div>
    </div>
    <div class="hakkou-lineup__images">
      <figure class="hakkou-lineup__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/type-b/tabletop-1-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/type-b/tabletop-1.jpg" alt="白虹B型 卓上タイプ ウォーナット・内金仕上げ" />
        </picture>
        <figcaption>栓墨黒・内金仕上げ</figcaption>
      </figure>
      <figure class="hakkou-lineup__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/type-b/tabletop-2-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/type-b/tabletop-2.jpg" alt="白虹B型 卓上タイプ ウォーナット・内天然木仕上げ" />
        </picture>
        <figcaption>栓紫檀色・内金仕上げ</figcaption>
      </figure>
      <figure class="hakkou-lineup__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/type-b/tabletop-3-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/type-b/tabletop-3.jpg" alt="白虹B型 卓上タイプ 扉を閉めた状態" />
        </picture>
        <figcaption>扉を閉めた状態</figcaption>
      </figure>
    </div>
  </div>
</article>

<!--//-->
<article class="content hakkou-spec">
  <div class="inner">
    <h3 class="hakkou-spec__label">仕様</h3>

    <div class="hakkou-spec__block">

      <div class="hakkou-spec-item">
        <figure class="hakkou-spec-item__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/type-b/spec-1-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/type-b/spec-1.jpg" alt="LED照明" />
          </picture>
        </figure>
        <div class="hakkou-spec-item__text">
          <h4 class="hakkou-spec-item__title">LED照明・金箔仕上げ</h4>
          <p class="hakkou-spec-item__detail">内部に光が反射し、神々しくご本尊様を包みます。</p>
        </div>
      </div>

      <div class="hakkou-spec-item">
        <figure class="hakkou-spec-item__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/type-b/spec-2-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/type-b/spec-2.jpg" alt="膳引・引出" />
          </picture>
        </figure>
        <div class="hakkou-spec-item__text">
          <h4 class="hakkou-spec-item__title">膳引・引出</h4>
          <p class="hakkou-spec-item__detail">すっきりとしたフォルムでありながら、使いやすさを考えた膳引と引出がついています。（引出はフロアタイプのみ）</p>
        </div>
      </div>

      <div class="hakkou-spec-item">
        <figure class="hakkou-spec-item__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/type-b/spec-3-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/type-b/spec-3.jpg" alt="折りたためる扉" />
          </picture>
        </figure>
        <div class="hakkou-spec-item__text">
          <h4 class="hakkou-spec-item__title">折りたためる扉</h4>
          <p class="hakkou-spec-item__detail">お祀り時に場所をとらない、折りたためる扉。</p>
        </div>
      </div>

      <div class="hakkou-spec__more">
        <table>
          <tr>
            <td>■上台輪・台輪／ウォールナット厚板貼り</td>
            <td>■戸板／ウォールナット薄板貼り</td>
            <td>■主要な芯材／木質繊維板</td>
          </tr>
          <tr>
            <td>■表面仕上げ／ウレタン仕上げ・オープン塗装</td>
            <td>■原産国／日本</td>
            <td></td>
          </tr>
        </table>
      </div>

    </div>

  </div>
</article>

		<article class="content hakkou-footer">

  <div class="inner">

    <ul class="hakkou-footer__index">

      
      <!--///-->
      <li class="hakkou-footer-item">
        <a href="/products/butsudan_hakkou/type-a/" class="hakkou-footer-item__block">
          <div class="hakkou-footer-item__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/type-a/footer-thumb-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/type-a/footer-thumb.jpg" alt="デザイン仏壇 白虹A型" />
            </picture>
          </div>
        </a>
      </li>
      

      

      
      <!--///-->
      <li class="hakkou-footer-item">
        <a href="/products/butsudan_hakkou/type-c/" class="hakkou-footer-item__block">
          <div class="hakkou-footer-item__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/type-c/footer-thumb-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/type-c/footer-thumb.jpg" alt="デザイン仏壇 白虹C型" />
            </picture>
          </div>
        </a>
      </li>
      
    </ul>

    <a href="/products/butsudan_hakkou/" class="hakkou-footer__back-btn">
      <span>デザイン仏壇 白虹TOP</span>
      <i></i>
    </a>

    <article class="content catalog-btn">
  <div class="inner">
    
    <a href="/catalog/" class="catalog-btn__btn be--bl">
      <span>カタログ請求はこちら</span>
    </a>
    
    
    <a href="/webcatalog/" class="catalog-btn__btn be--wh">
      <span>WEBカタログはこちら</span>
    </a>
    
  </div>
</article>

    
  </div>
</article>

		<!-- /entry -->

<?php
get_footer();
