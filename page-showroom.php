

<?php
/**
 * The template for displaying page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package alte2020
 */

 global $pageType;
 $pageType="shop";

 get_header();
?>
	<section class="contents scroll-trg">
		<header class="content single-hero">
  <div class="inner">
    <div class="single-hero__text">
      <h2 class="single-hero__title">ショールームの<br class="on-sp">ご案内</h2>
    </div>
  </div>
</header>

		<div class="content blocks" >
<!--//-->
<article class="content block be--aizu">
  <div class="block__header">
    <figure class="block__main-image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/showroom/aizu/main-image-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/showroom/aizu/main-image.jpg" alt="本社ショールーム" />
      </picture>
    </figure>
  </div>

  <div class="inner">
    <div class="block__body">

      <div class="block__text">
        <h2 class="block__name">
          本社ショールーム
        </h2>
        <p class="block__detail">
          現代の祈りのかたちとして、弊社が提案している厨子や仏壇を展示しています。また、仏都会津や伝統工芸の歴史、弊社のものづくり・取り組みもご紹介しています。
        </p>
      </div>


      <div class="block__images">
        <figure class="block__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/showroom/aizu/image-1-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/showroom/aizu/image-1.jpg" alt="本店ショールーム 展示スペース" />
          </picture>
          <figcaption>現代の祈りのかたち展示スペース</figcaption>
        </figure>

        <figure class="block__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/showroom/aizu/image-2-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/showroom/aizu/image-2.jpg" alt="本店ショールーム 厨子展示スペース" />
          </picture>
          <figcaption>厨子展示スペース</figcaption>
        </figure>

        <figure class="block__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/showroom/aizu/image-3-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/showroom/aizu/image-3.jpg" alt="本店ショールーム 大型仏壇" />
          </picture>
          <figcaption>希少材を使用した大型仏壇</figcaption>
        </figure>
      </div>


      <div class="shop-info">
        <table class="shop-info__table">
          <tr>
            <th>住所</th>
            <td>〒965-0844 福島県会津若松市門田町一ノ堰村東40</td>
          </tr>
          <tr>
            <th>TEL</th>
            <td><a class="tel-link" href="tel:0242274380">0242-27-4380</a></td>
          </tr>
          <tr>
            <th>FAX</th>
            <td><a class="fax-link" href="tel:0242272865">0242-27-2865</a></td>
          </tr>
          <tr>
            <th>営業時間</th>
            <td>平日 10：00～17：00</td>
          </tr>
        </table>

        <p class="shop-info__note">
          ※ ショールームでの販売はしておりません。<br>
          ※ ご来社の際は必ず事前にご連絡ください。
        </p>
      </div>

    </div>

  </div>

  <div class="block__map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2414.053136043598!2d139.91959320691672!3d37.460351038954315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x95bb0fcdf6d0c6ee!2z44Ki44Or44OG44Oe44Kk44K544K_44O8IOOIseS_neW_lw!5e0!3m2!1sja!2sjp!4v1585375436611!5m2!1sja!2sjp" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>

</article>

<!--//-->
<article class="content block be--west">
  <div class="block__header">
    <figure class="block__main-image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/showroom/west/main-image-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/showroom/west/main-image.jpg" alt="西日本ショールーム" />
      </picture>
    </figure>
  </div>

  <div class="inner">
    <div class="block__body">

      <div class="block__text">
        <h2 class="block__name">
          西日本ショールーム
        </h2>
        <p class="block__detail">
          1階では厨子を中心に現代の祈りのかたちをご覧いただけます。2階では、伝統型や都市型仏壇と併せて、現代の祈りをトータルコーディネイトできる仏具・位牌も展示しています。
        </p>
      </div>


      <div class="block__images">
        <figure class="block__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/showroom/west/image-1-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/showroom/west/image-1.jpg" alt="西日本ショールーム 展示スペース" />
          </picture>
          <figcaption>現代の祈りのかたち展示スペース</figcaption>
        </figure>

        <figure class="block__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/showroom/west/image-2-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/showroom/west/image-2.jpg" alt="西日本ショールーム 厨子スペース" />
          </picture>
          <figcaption>厨子展示スペース</figcaption>
        </figure>

        <figure class="block__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/showroom/west/image-3-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/showroom/west/image-3.jpg" alt="西日本ショールーム 展示スペース" />
          </picture>
          <figcaption>仏壇・仏具展示スペース</figcaption>
        </figure>
      </div>

      <div class="shop-info">
        <table class="shop-info__table">
          <tr>
            <th>住所</th>
            <td>〒651-1431 <br class="on-sp">兵庫県西宮市山口町阪神流通センター1-32</td>
          </tr>
          <tr>
            <th>TEL</th>
            <td><a class="tel-link" href="tel:0789041771">078-904-1771</a></td>
          </tr>
          <tr>
            <th>FAX</th>
            <td><a class="fax-link" href="tel:0789041777">078-904-1777</a></td>
          </tr>
          <tr>
            <th>営業時間</th>
            <td>平日 10：00～17：00</td>
          </tr>
        </table>

        <p class="shop-info__note">
          ※ ショールームでの販売はしておりません。<br>
          ※ ご来社の際は必ず事前にご連絡ください。
        </p>
      </div>

    </div>

  </div>

  <div class="block__map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3246.9766576777083!2d135.23001928566484!3d34.825264792572874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600061f2c4074d91%3A0x614cdd03f6573868!2z44CSNjUxLTE0MzEg5YW15bqr55yM6KW_5a6u5biC5bGx5Y-j55S66Ziq56We5rWB6YCa44K744Oz44K_44O877yR5LiB55uu77yT77ySIOS_neW_l-elnuaIuOaUr-ekvg!5e0!3m2!1sja!2sjp!4v1584511269883!5m2!1sja!2sjp" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>

</article>

</div>

<a href="/" class="toppage-btn">
  <span>TOPページ</span>
  <i></i>
</a>


		<article class="content footer-banner-b">
  <a href="/shop/" class="footer-banner-b__block">
    <h2 class="footer-banner-b__title">
      <span>店舗の<br class="on-pc">ご案内</span>
    </h2>
    <div class="footer-banner-b__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/showroom/shop-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/showroom/shop.jpg" alt="店舗のご案内" />
      </picture>
    </div>
  </a>
</article>


<?php
get_footer();
