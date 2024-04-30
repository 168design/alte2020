

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
      <source src="<?php echo get_template_directory_uri(); ?>/movie/hakkou.mp4">
    </video>
  </div>
  <a href="#" class="hero-movie__close-btn"></a>
</div>

	<section class="contents scroll-trg">
    <header class="content hero stby">
  <div class="hero-item be--butsudan_hakkou">
    <div class="hero-item__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/index/hero-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/index/hero.jpg" alt="デザイン仏壇白虹" />
      </picture>
      <a href="#" class="hero-item__play-btn">
        <i></i>
        <span>動画を再生</span>
      </a>
    </div>
    <div class="inner">
      <div class="hero-item__text">
        <h1 class="hero-item__title"><small>デザイン仏壇</small>白虹</h1>
        <p class="hero-item__lead">はっこう</p>
      </div>
    </div>
  </div>
</header>

		<article class="content lead">
  <div class="inner">
    <p class="lead__lead">
      <span>
        インテリアデザイナー<br>内田繁が描いた<br>現代の祈りのかたち
      </span>
    </p>
    <p class="lead__detail">
      <span>
        現代の空間に合う家具のように<br class="on-sp">シンプルな佇まいでありながら、<br>心の拠りどころとしての荘厳さを<br class="on-sp">大切にしたお仏壇です。
      </span>
    </p>

    <div class="lead__more-btns">
      <a href="#" class="lead__more-btn overlay-btn" data-trg="concept">
        <span>製品コンセプト</span><i></i>
      </a>
      <a href="#" class="lead__more-btn overlay-btn" data-trg="profile">
        <span>デザイナープロフィール</span><i></i>
      </a>
    </div>

  </div>
</article>

		<article class="content concept">
  <div class="for-overlay-content be--concept">
    <div class="for-overlay-content__src" data-id="concept">
      <div class="inner">
        <div class="concept__text">
          <p>
            古来より、神仏に関する造形表現は、各時代の一級の造形師である宮大工や工芸家、絵師などが係わり、それぞれの時代の祈りの文化を表徴してきました。クリエイターと呼ばれる現代のデザイナーや工芸家は、昔でいうなれば、宮大工や、絵師に当たるでしょうか。いずれも、まだ誰も目にしたことのない新しいものを描く創造者であり、時代の先駆者でありました。<br>
            <br>
            白虹をデザインした内田繁氏は、日本を代表するインテリアデザイナーで、生活スタイルや価値観が激しく変化し続ける時代の中、現代の空間における聖なる場として白虹を描き出しました。
          </p>
          <p>
            内田氏は、「本来、仏壇はこうでなくてはいけないといった形の決まりごとはないのです。その時代の建築や空間に合うように仏壇も変化してきたのです。現在、聖なる場というのはどんな場であるべきか。重厚さではなく、今日の生活空間に似合うように、そして仏壇を使う人にとって違和感がないようにと考えました。」と話されています。<br>
            <br>
            内田氏が生み出した白虹は、現代の生活空間に調和しながらも、荘厳さを感じさせる、新しい仏壇の方向性を指し示しました。
          </p>
        </div>
      </div>
    </div>
  </div>
</article>

		<article class="content profile">
  <div class="for-overlay-content be--profile">
    <div class="for-overlay-content__src" data-id="profile">
      <div class="inner">
        <figure class="profile__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/index/uchida-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/index/uchida.jpg" alt="インテリアデザイナー 内田　繁" />
          </picture>
        </figure>
        <div class="profile__text">
          <p class="profile__job">
            インテリアデザイナー
          </p>
          <h3 class="profile__name">
            内田　繁
          </h3>
          <p class="profile__en-name">
            Shigeru Uchida
          </p>
          <p class="profile__detail">
            日本を代表するデザイナーとして商・住空間のデザインにとどまらず、家具、工業デザインから地域開発に至る幅広い活動を国内外で展開。毎日デザイン賞、芸術選奨文部大臣賞等受賞。2007年紫綬褒章受章。専門学校桑沢デザイン研究所所長を務める。<br>
            代表作に、山本耀司のブティック、神戸ファッション美術館、茶室「受庵・想庵・行庵」、クレストタワー一連の内部空間、門司港ホテル、オリエンタルホテル広島、ザ・ゲートホテル雷門、メトロポリタン美術館、モントリオール美術館等に永久コレクション多数。<br>
            著書に『プライバシーの境界線』『日本のインテリア全4巻』『家具の本』『インテリアと日本人』『普通のデザイン』『戦後日本デザイン史』など。
          </p>
        </div>
      </div>
    </div>
  </div>
</article>

		<!--///-->
<article class="content lineup be--hakkou-a">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">白虹A型</h2>
        <p class="lineup__detail">
          現代のくらしから、<br class="on-pc">改めて仏壇の意匠を構築。<br class="on-pc">暮らしに溶け込む<br class="on-pc">デザインながら、<br class="on-pc">荘厳さを感じさせる仏壇です。<br>
          <br>
          <small>
            フロアタイプ／H125×W47×D42cm<br>
            卓上タイプ／H75×W47×D42cm
          </small>
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/index/image-a-1-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/index/image-a-1.jpg" alt="白虹A型 フロアタイプ" />
          </picture>
          <figcaption>フロアタイプ</figcaption>
        </figure>
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/index/image-a-2-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/index/image-a-2.jpg" alt="白虹A型 卓上タイプ" />
          </picture>
          <figcaption>卓上タイプ</figcaption>
        </figure>
      </div>
      <a href="/products/butsudan_hakkou/type-a/" class="lineup__more-btn">
        <span>製品詳細ページへ</span>
        <i></i>
      </a>
    </div>
  </div>
</article>

<!--///-->
<article class="content lineup be--hakkou-b">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">白虹B型</h2>
        <p class="lineup__detail">
          ウォールナットや扉の形状など<br class="on-pc">現代の家具を意識したデザイン。<br class="on-pc">内部の広がりをもつ空間では、<br class="on-pc">厳かな光がご本尊を包みます。<br>
          <br>
          <small>
            フロアタイプ／H125×W48×D42cm<br>
            卓上タイプ／H75×W48×D42cm
          </small>
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/index/image-b-1-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/index/image-b-1.jpg" alt="白虹B型 フロアタイプ" />
          </picture>
          <figcaption>フロアタイプ</figcaption>
        </figure>
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/index/image-b-2-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/index/image-b-2.jpg" alt="白虹B型 約定タイプ" />
          </picture>
          <figcaption>卓上タイプ</figcaption>
        </figure>
      </div>
      <a href="/products/butsudan_hakkou/type-b/" class="lineup__more-btn">
        <span>製品詳細ページへ</span>
        <i></i>
      </a>
    </div>
  </div>
</article>

<!--///-->
<article class="content lineup be--hakkou-c">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">白虹C型</h2>
        <p class="lineup__detail">
          内部デザインはA・B型を引き継ぎ、<br class="on-pc">サイズはコンパクトに。<br class="on-pc">暮らしの中に、祈りの空間を感じさせる<br class="on-pc">日本の伝統色を施した仏壇です。<br>
          <br>
          <small>
            H55×W34×D32cm
          </small>
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/index/image-c-1-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/index/image-c-1.jpg" alt="白虹C型" />
          </picture>
          <figcaption>鉄紺 内金仕上げ</figcaption>
        </figure>
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/index/image-c-2-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_hakkou/index/image-c-2.jpg" alt="白虹C型" />
          </picture>
          <figcaption>松緑 内天然木仕上げ</figcaption>
        </figure>
      </div>
      <a href="/products/butsudan_hakkou/type-c/" class="lineup__more-btn">
        <span>製品詳細ページへ</span>
        <i></i>
      </a>
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
