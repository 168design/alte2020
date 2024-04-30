

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
  <div class="hero-item be--butsugu">
    <div class="hero-item__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsugu/hero-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsugu/hero.jpg" alt="仏具"/>
      </picture>
    </div>
    <div class="inner">
      <div class="hero-item__text">
        <h2 class="hero-item__title">仏 具</h2>
        <p class="hero-item__lead">ぶつぐ</p>
      </div>
    </div>
  </div>
</header>

		<article class="content lead be--butsugu">
  <div class="inner">
    <p class="lead__lead">
      仏具は仏壇と共に<br class="on-sp">祈りの心を伝える<br>
      大切な荘厳具です。
    </p>
    <p class="lead__detail">
      <span>
        宗派に合わせた本格的な仏具から、伝統技法に現代の意匠を融合させたモダンな仏具など数多く取り揃えております。荘厳具に欠かかせない品格は、細部まで丁寧に仕上げる職人の技から生み出されています。
      </span>
    </p>
  </div>
</article>

		<!--///-->
<article class="content lineup be--butsugu-makoto">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">makoto</h2>
        <p class="lineup__detail">
          生活用品から家具、空間、建築まで、生活に関わる全てのデザインを手がけるデザイナー小泉誠が描いた祈りの調度です。
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsugu/image-makoto-1-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsugu/image-makoto-1.jpg" alt="仏具 makoto" />
          </picture>
        </figure>
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsugu/image-makoto-2-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsugu/image-makoto-2.jpg" alt="仏具 makoto" />
          </picture>
        </figure>
      </div>
    </div>
  </div>
</article>

<!--///-->
<article class="content lineup be--butsugu-jikon">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">磁今 回</h2>
        <p class="lineup__detail">
          デザイナー大治将典と今村製陶・今村肇とのコラボレーションから生まれた祈りの調度です。
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsugu/image-jikon-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsugu/image-jikon.jpg" alt="仏具 磁今 回" />
          </picture>
        </figure>
      </div>
    </div>
  </div>
</article>

<!--///-->
<article class="content lineup be--butsugu-seisui">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">精 粋</h2>
        <p class="lineup__detail">
          老舗のガラスメーカーとのコラボレーションで生まれたガラス素材の仏具。祈りの空間に清らかな印象を与えます。
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsugu/image-seisui-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsugu/image-seisui.jpg" alt="仏具 精粋" />
          </picture>
        </figure>
      </div>
    </div>
  </div>
</article>

<!--///-->
<article class="content lineup be--butsugu-hitoe">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">ひとえ</h2>
        <p class="lineup__detail">
          斜めの意匠は着物の衿をイメージ。<br class="on-pc">鋳物の産地、高岡の鋳造技法により重厚感ある風合いに仕上げた仏具です。
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsugu/image-hitoe-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsugu/image-hitoe.jpg" alt="仏具 ひとえ" />
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
