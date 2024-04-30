

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
  <div class="hero-item be--hitotoki">
    <div class="hero-item__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/hitotoki/hero-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/products/hitotoki/hero.jpg" alt="人と木" />
      </picture>
    </div>
    <div class="inner">
      <div class="hero-item__text">
        <h2 class="hero-item__title">人と木</h2>
        <p class="hero-item__lead">ひととき</p>
      </div>
    </div>
  </div>
</header>

		<article class="content lead be--hitotoki">
  <div class="inner">
    <p class="lead__lead">
      木から生まれた宝物。
    </p>
    <p class="lead__detail">
      <span>
        「人と木」は限りある自然を大切にしたいという思いから仏壇を作るときに出る余材や長年使われずに眠っていた木材をできるだけ使用したオリジナルブランドです。使うほどに味わいが深まる道具や、季節の節目を感じる飾りものなど、日々の暮らしに潤いを与える品々です。
      </span>
    </p>
  </div>
</article>

		<!--///-->
<article class="content lineup be--hitotoki-makiekobako">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">蒔絵小箱</h2>
        <p class="lineup__detail">
          大切な思い出の品を納められるよう<br class="on-pc">手作りで仕上げた小箱です。<br>1月から12月までの季節の絵柄や<br class="on-pc">会津の民芸品を蒔絵で描きました。
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/hitotoki/image-makiekobako-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/hitotoki/image-makiekobako.jpg" alt="人と木 蒔絵小箱" />
          </picture>
        </figure>
      </div>
    </div>
  </div>
</article>

<!--///-->
<article class="content lineup be--hitotoki-sekku">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">節句飾り<br>吊り雛 / 鯉のぼり</h2>
        <p class="lineup__detail">
          子の健やかな成長の願いを込めた、<br class="on-pc">ふわりと揺れる吊り飾りです。
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/hitotoki/image-sekku-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/hitotoki/image-sekku.jpg" alt="人と木 節句飾り 吊り雛 / 鯉のぼり" />
          </picture>
        </figure>
      </div>
    </div>
  </div>
</article>

<!--///-->
<article class="content lineup be--hitotoki-bungu">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">木の文具<br>定木セット</h2>
        <p class="lineup__detail">
          定木、三角定木、分度器を<br class="on-pc">ひとつひとつ手作りで仕上げ、<br class="on-pc">木の表情をそのまま活かした<br class="on-pc">定木セットです。
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/hitotoki/image-bungu-1-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/hitotoki/image-bungu-1.jpg" alt="人と木 木の文具" />
          </picture>
        </figure>
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/hitotoki/image-bungu-2-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/hitotoki/image-bungu-2.jpg" alt="人と木 木の文具" />
          </picture>
        </figure>
      </div>
    </div>
  </div>
</article>

<!--///-->
<article class="content lineup be--hitotoki-mobile">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">この葉<br>モビール</h2>
        <p class="lineup__detail">
          紙のように薄く削った木材を<br class="on-pc">この葉の形に切り抜いた<br class="on-pc">モビールです。
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/hitotoki/image-mobile-1-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/hitotoki/image-mobile-1.jpg" alt="人と木 この葉モビール" />
          </picture>
        </figure>
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/hitotoki/image-mobile-2-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/hitotoki/image-mobile-2.jpg" alt="人と木 この葉モビール" />
          </picture>
        </figure>
      </div>
    </div>
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
        <a href="/products/omamori/" class="single-footer-item__block">
          <div class="single-footer-item__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/omamori/footer-thumb-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/products/omamori/footer-thumb.jpg" alt="おまもり" />
            </picture>
          </div>
        </a>
      </li>
      

      


    </ul>

  </div>
</article>


<?php
get_footer();
