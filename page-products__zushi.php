

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
<div class="content hero-movie">
  <div class="hero-movie__bg"></div>
  <div class="hero-movie__area size-contain" data-srcsize-sp="1280/720" data-srcsize-pc="1280/720">
    <video class="hero-movie__video" data-id="default" muted playsinline controls>
      <source src="<?php echo get_template_directory_uri(); ?>/movie/zushi-nagatoko.mp4">
    </video>
    <video class="hero-movie__video" data-id="nagatoko-movie" muted playsinline controls>
      <source src="<?php echo get_template_directory_uri(); ?>/movie/zushi-nagatoko.mp4">
    </video>
    <video class="hero-movie__video" data-id="shoujou-movie" muted playsinline controls>
      <source src="<?php echo get_template_directory_uri(); ?>/movie/zushi-shoujou.mp4">
    </video>
  </div>
  <a href="#" class="hero-movie__close-btn"></a>
</div>

	<section class="contents scroll-trg">
    <header class="content hero stby">
  <div class="hero-item be--zushi">
    <div class="hero-item__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/zushi/hero-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/products/zushi/hero.jpg" alt="工房厨子"/>
      </picture>
    </div>
    <div class="inner">
      <div class="hero-item__text">
        <h2 class="hero-item__title">工房厨子</h2>
        <p class="hero-item__lead">こうぼうずし</p>
      </div>
    </div>
  </div>
</header>

		<article class="content lead be--zushi">
  <div class="inner">
    <p class="lead__lead">
      厨子とは大切なもの・ことを<br class="on-sp">
      納める箱のこと。<br>
      魂を委ねられるほどの<br>
      霊性ある格別な箱のことです。
    </p>
    <p class="lead__detail">
      <span>
        ６世紀、日本に仏教が伝来。７世紀（飛鳥時代）に入ると、仏教文化として大変革がおこり、仏像・仏舎利・経典・位牌など大切なものを納める箱として厨子が広まりました。その時代に作られた玉虫厨子は古代の日本建築様式を知る上でも貴重な遺産として、奈良の法隆寺に安置されています。<br>
        工房厨子は、現代を代表する工芸家やデザイナーが描いた時代が求める祈りのかたちや、日本の美意識ある建造物から、ものの在り方や普遍的な意匠を学び生まれた厨子です。
      </span>
    </p>
  </div>
</article>

		<!--///-->
<article class="content lineup be--zushi-shoujou be--pickup">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">勝 常</h2>
        <p class="lineup__detail">
          長い歴史の中で、信仰の対象として崇められてきた神社仏閣の意匠。<br class="on-pc">その悠然とした姿を写した、神聖さを感じさせる厨子です。<br>
          <br>
          <small>
            勝常横型／H28×W39×D19cm
          </small>
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/zushi/image-shoujou-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/zushi/image-shoujou.jpg" alt="厨子 勝常" />
          </picture>
        </figure>
        <a href="#" class="hero-item__play-btn" data-id="shoujou-movie">
          <i></i>
          <span>動画を再生</span>
        </a>
      </div>
    </div>
    <div class="lineup__info">
      <figure class="lineup__info-image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/zushi/image-shoujou-info-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/products/zushi/image-shoujou-info.jpg" alt="勝常寺" />
        </picture>
      </figure>
      <div class="lineup__info-text">
        <h3 class="lineup__info-title">勝常寺</h3>
        <p class="lineup__info-detail">
          福島県、会津地方の湯川村に平安時代に開かれたといわれている寺院。薬師堂に祀られている薬師如来・日光・月光菩薩像は国宝に指定されている。
        </p>
      </div>
    </div>
  </div>
</article>

<!--///-->
<article class="content lineup be--zushi-ankei">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">安 憬</h2>
        <p class="lineup__detail">
          灯籠など寺社仏閣の意匠に習った祈りのかたち。存在感確かで、和洋の生活空間に似合うシンプルなデザインの厨子です。<br>
          <br>
          <small>
            安憬Ｌ／H35×W23×D19cm
          </small>
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/zushi/image-ankei-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/zushi/image-ankei.jpg" alt="厨子 安憬" />
          </picture>
        </figure>
      </div>
    </div>
  </div>
</article>

<!--///-->
<article class="content lineup be--zushi-kyouzutsu">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">経筒写し</h2>
        <p class="lineup__detail">
          古来、大切なものを納める箱として使われていた経筒を現代の祈りの箱に見立てました。<br>暮らしの中に厳かな祈りの場・時を演出します。<br>
          <br>
          <small>
            経筒写しⅢ型／H31×W20×D20cm
          </small>
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/zushi/image-kyouzutsu-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/zushi/image-kyouzutsu.jpg" alt="厨子 経筒写し" />
          </picture>
        </figure>
      </div>
    </div>
  </div>
</article>

<!--///-->
<article class="content lineup be--zushi-u">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">U型</h2>
        <p class="lineup__detail">
          現代の暮らしに合うシンプルな佇まいの祈りの箱。扉を開くと金箔に包まれた荘厳な空間が現れます。大切なもの・想いを納めるに適う祈りのかたちです。<br>
          <br>
          <small>
            Ｕ型／H36×W29×D21cm
          </small>
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/zushi/image-u-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/zushi/image-u.jpg" alt="厨子 U型" />
          </picture>
        </figure>
      </div>
    </div>
  </div>
</article>

<!--///-->
<article class="content lineup be--zushi-nagatoko">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">長 床</h2>
        <p class="lineup__detail">
          福島県喜多方市にある熊野神社の拝殿として建立された長床。<br>神聖感ある象徴的な柱と、雄大に広がる屋根の存在感が心を穏やかにさせる厨子です。<br>
          <br>
          <small>
            H27×W43×D21cm
          </small>
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/zushi/image-nagatoko-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/zushi/image-nagatoko.jpg" alt="厨子 長床" />
          </picture>
        </figure>
        <a href="#" class="hero-item__play-btn" id="nagatoko-movie">
          <i></i>
          <span>動画を再生</span>
        </a>
      </div>
    </div>
    <div class="lineup__info">
      <figure class="lineup__info-image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/zushi/image-nagatoko-info-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/products/zushi/image-nagatoko-info.jpg" alt="新宮熊野神社 長床" />
        </picture>
      </figure>
      <div class="lineup__info-text">
        <h3 class="lineup__info-title">新宮熊野神社 長床</h3>
        <p class="lineup__info-detail">
          福島県喜多方市にある熊野神社の拝殿として平安時代に建立された寝殿造の建物。44本の柱からなる吹き抜けが特徴。長床の側に立つ、銀杏の黄葉の時期には全国から多くの人々が訪れる。
        </p>
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
