

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
  <div class="hero-item be--ihai">
    <div class="hero-item__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/ihai/hero-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/products/ihai/hero.jpg" alt="位牌" />
      </picture>
    </div>
    <div class="inner">
      <div class="hero-item__text">
        <h2 class="hero-item__title">位 牌</h2>
        <p class="hero-item__lead">いはい</p>
      </div>
    </div>
  </div>
</header>

		<article class="content lead be--ihai">
  <div class="inner">
    <p class="lead__lead">
      お位牌は亡くなられた方を<br>
      表徴する大切なものです。
    </p>
    <p class="lead__detail">
      <span>
        400年の伝統を誇る会津塗りの技法を活かし、新たな装飾を施した位牌や厳選した木材を活かした位牌。荘厳な伝統型からモダンな位牌まで、熟練した職人の手技による高品位な製品を数多く取り揃えております。
      </span>
    </p>
  </div>
</article>

		<!--///-->
<article class="content lineup be--ihai-honkoumaru">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">本甲丸</h2>
        <p class="lineup__detail">
          伝統位牌の荘厳さはそのままに美しい細身のプロポーションに様々な漆芸を施したお位牌です。
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/ihai/image-honkoumaru-1-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/ihai/image-honkoumaru-1.jpg" alt="位牌 本甲丸" />
          </picture>
        </figure>
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/ihai/image-honkoumaru-2-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/ihai/image-honkoumaru-2.jpg" alt="位牌 本甲丸" />
          </picture>
        </figure>
      </div>
    </div>
  </div>
</article>

<!--///-->
<article class="content lineup be--ihai-tsubaki">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">極 椿</h2>
        <p class="lineup__detail">
          お位牌単体でも美しく見えるよう裏表がない意匠に、浮かび上がる椿の蒔絵が美しい品格あるお位牌です。
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/ihai/image-tsubaki-1-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/ihai/image-tsubaki-1.jpg" alt="位牌 極椿" />
          </picture>
        </figure>
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/ihai/image-tsubaki-2-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/ihai/image-tsubaki-2.jpg" alt="位牌 極椿" />
          </picture>
        </figure>
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/ihai/image-tsubaki-3-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/ihai/image-tsubaki-3.jpg" alt="位牌 極椿" />
          </picture>
        </figure>
      </div>
    </div>
  </div>
</article>

<!--///-->
<article class="content lineup be--ihai-youju">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">陽 樹</h2>
        <p class="lineup__detail">
          時を経ても変わらぬ美しさを宿す<br>オーガニックな宝石・琥珀を<br>贅沢に用いた高品位なお位牌です。
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/ihai/image-youju-1.jpg" alt="位牌 陽樹" />
          </picture>
        </figure>
        <figure class="lineup__image">
          <picture>
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/ihai/image-youju-2.jpg" alt="位牌 陽樹" />
          </picture>
        </figure>
      </div>
    </div>
  </div>
</article>

<!--///-->
<article class="content lineup be--ihai-modern">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">モダン</h2>
        <p class="lineup__detail">
          温かみのあるシンプルな意匠に深みのある色を漆芸技法で表現したモダンなお位牌です。
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/ihai/image-modern-1-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/ihai/image-modern-1.jpg" alt="位牌 モダン" />
          </picture>
        </figure>
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/ihai/image-modern-2-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/ihai/image-modern-2.jpg" alt="位牌 モダン" />
          </picture>
        </figure>
      </div>
    </div>
  </div>
</article>

<!--///-->
<article class="content lineup be--ihai-kyounoka">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">京の香</h2>
        <p class="lineup__detail">
          会津に伝わる漆芸技法<br class="on-pc">「消粉蒔絵」を施したお位牌。<br class="on-pc">祈りの空間に華やかさを<br class="on-pc">宿します。
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/ihai/image-kyounoka-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/ihai/image-kyounoka.jpg" alt="位牌 京の香" />
          </picture>
        </figure>
      </div>
    </div>
  </div>
</article>

<!--///-->
<article class="content lineup be--ihai-kyoukasumi">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">京 霞</h2>
        <p class="lineup__detail">
          貴重な木材、<br class="on-pc">黒檀・紫檀に漆を施し、<br class="on-pc">光沢がありながらも<br class="on-pc">木目が美しいお位牌です。
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/ihai/image-kyoukasumi-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/ihai/image-kyoukasumi.jpg" alt="位牌 京霞" />
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
    
    
    <a href="/webcatalog/" class="catalog-btn__btn be--wh">
      <span>WEBカタログはこちら</span>
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
        <a href="/products/omamori/" class="single-footer-item__block">
          <div class="single-footer-item__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/omamori/footer-thumb-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/products/omamori/footer-thumb.jpg" alt="おまもり" />
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
