

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
  <div class="hero-item be--omamori">
    <div class="hero-item__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/omamori/hero-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/products/omamori/hero.jpg" alt="おまもり" />
      </picture>
    </div>
    <div class="inner">
      <div class="hero-item__text">
        <h2 class="hero-item__title">おまもり</h2>
        <p class="hero-item__lead">おまもり</p>
      </div>
    </div>
  </div>
</header>

		<article class="content lead be--omamori">
  <div class="inner">
    <p class="lead__lead">
      手のひらに納まる<br>
      可愛らしいおまもり。
    </p>
    <p class="lead__detail">
      <span>
        家族の幸せや子の成長を願う。人のやさしさや自然の恵みに感謝する。日々の祈りとともに心穏やかに暮らす。そんな祈りのある暮らしを私たちは提案しております。
      </span>
    </p>
  </div>
</article>

		<!--///-->
<article class="content lineup be--omamori-shichifukujin">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name"><small>手のひらの<br class="on-pc">おまもり</small>七福神</h2>
        <p class="lineup__detail">
          七福神は、福をもたらす神として信仰されている7人の神さまです。身近に置ける、手のひらサイズのおまもりにしました。
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/omamori/image-shichifukujin-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/omamori/image-shichifukujin.jpg" alt="手のひらのおまもり 七福神" />
          </picture>
        </figure>
      </div>
    </div>
  </div>
</article>

<!--///-->
<article class="content lineup be--omamori-eto">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name"><small>手のひらの<br class="on-pc">おまもり</small>十二支</h2>
        <p class="lineup__detail">
          古くから縁起物として大切にされてきた十二支。それぞれに謂われのある動物をおまもりにしました。
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/omamori/image-eto-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/omamori/image-eto.jpg" alt="手のひらのおまもり 十二支" />
          </picture>
        </figure>
      </div>
    </div>
  </div>
</article>

    <article class="content catalog-btn">
  <div class="inner">
    
    <a href="/catalog/" class="catalog-btn__btn be--bl">
      <span>カタログ請求はこちら</span>
    </a>
    
    
  </div>
</article>

		<article class="content single-footer">

  <div class="inner">

    <ul class="single-footer__index">

      
      <!--///-->
      <li class="single-footer-item">
        <a href="/products/butsudan_hakkou/" class="single-footer-item__block">
          <div class="single-footer-item__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/footer-thumb-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/footer-thumb.jpg" alt="デザイン仏壇 白虹" />
            </picture>
          </div>
        </a>
      </li>
      

      
      <!--///-->
      <li class="single-footer-item">
        <a href="/products/butsudan_jidai/" class="single-footer-item__block">
          <div class="single-footer-item__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_jidai/footer-thumb-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_jidai/footer-thumb.jpg" alt="時代型仏壇" />
            </picture>
          </div>
        </a>
      </li>
      

      
      <!--///-->
      <li class="single-footer-item">
        <a href="/products/zushi/" class="single-footer-item__block">
          <div class="single-footer-item__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/zushi/footer-thumb-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/products/zushi/footer-thumb.jpg" alt="工房厨子" />
            </picture>
          </div>
        </a>
      </li>
      

      
      <!--///-->
      <li class="single-footer-item">
        <a href="/products/ihai/" class="single-footer-item__block">
          <div class="single-footer-item__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/ihai/footer-thumb-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/products/ihai/footer-thumb.jpg" alt="位牌" />
            </picture>
          </div>
        </a>
      </li>
      

      
      <!--///-->
      <li class="single-footer-item">
        <a href="/products/butsugu/" class="single-footer-item__block">
          <div class="single-footer-item__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsugu/footer-thumb-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsugu/footer-thumb.jpg" alt="仏具" />
            </picture>
          </div>
        </a>
      </li>
      

      

      
      <!--///-->
      <li class="single-footer-item">
        <a href="/products/hitotoki/" class="single-footer-item__block">
          <div class="single-footer-item__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/hitotoki/footer-thumb-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/products/hitotoki/footer-thumb.jpg" alt="人と木" />
            </picture>
          </div>
        </a>
      </li>
      


    </ul>

  </div>
</article>


<?php
get_footer();
