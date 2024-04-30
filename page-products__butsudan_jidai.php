

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
      <source src="<?php echo get_template_directory_uri(); ?>/movie/jidai.mp4">
    </video>
  </div>
  <a href="#" class="hero-movie__close-btn"></a>
</div>

	<section class="contents scroll-trg">
    <header class="content hero stby">
  <div class="hero-item be--butsudan_jidai">
    <div class="hero-item__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_jidai/hero-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_jidai/hero.jpg" alt="時代型仏壇"/>
      </picture>
      <a href="#" class="hero-item__play-btn">
        <i></i>
        <span>動画を再生</span>
      </a>
    </div>
    <div class="inner">
      <div class="hero-item__text">
        <h1 class="hero-item__title">時代型仏壇</h1>
        <p class="hero-item__lead">じだいがたぶつだん</p>
      </div>
    </div>
  </div>
</header>

		<article class="content lead">
  <div class="inner">
    <p class="lead__lead">
      <span>
        この国の祈りのかたち
      </span>
    </p>
    <p class="lead__detail">
      <span>
        平安・鎌倉・桃山・江戸、時代ごとに<br class="on-sp">
        生まれた文化・美意識。<br>
        その時代を表徴する建築様式を<br class="on-sp">
        取り入れた時代型仏壇。<br>
        伝統の美を活かし現代に調和した、<br class="on-sp">
        この国の祈りのかたちです。
      </span>
    </p>

    <div class="lead__more-btns">
      <a href="#" class="lead__more-btn overlay-btn stby" data-trg="concept">
        <span>製品コンセプト</span><i></i>
      </a>
      <a href="#" class="lead__more-btn overlay-btn stby" data-trg="profile">
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
            時代型仏壇はコーディネーターである山田節子氏プロデュースのもと、弊社の職人が各時代々々を表徴する建造物から学び生まれた仏壇です。<br>
            山田氏は「伝統を現代に」をキーワードに、日本人の心・技・生活観を現代の生活に生かすため、未来の扉をたたくべく、様々な取り組みを続けています。その山田氏は、弊社に修理依頼された、東日本大震災で傷ついた仏壇の中で、江戸時代に作られた仏壇に、今に適う見事な祈りのかたちを見いだし、時代型仏壇の姿を思い描きました。
          </p>
          <p>
            日本の各時代を表徴する建造物には、歴史のうねりの中で生まれた、様々な建築様式や装飾が見て取れます。弊社の設計職人たちは、様々な書物や実際のものを見に行き、わずかな曲線や表現手法などを学びながら、現代に似合う仏壇としての様式を思考錯誤し描き上げました。<br>時代型仏壇は「過去に学び　未来に繋ぐ」をテーマに、各時代の日本の美意識から学び、現代の生活空間に調和する仏壇として、ご提案いたしております。
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
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_jidai/yamada-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_jidai/yamada.jpg" alt="コーディネーター 山田　節子" />
          </picture>
        </figure>
        <div class="profile__text">
          <p class="profile__job">
            コーディネーター
          </p>
          <h3 class="profile__name">
            山田　節子
          </h3>
          <p class="profile__en-name">
            Setsuko Yamada
          </p>
          <p class="profile__detail">
            1966年多摩美術大学卒業。商品企画・店舗企画・展覧会企画を通じ、生活提案として、人・もの・場のプロデュースを数多く手掛けている。その活動は百貨店をはじめとして、専門店・ギャラリー、さらに地場産業の未来化戦略や教育にも積極的にかかわり、とりわけ、次の時代を背負う若手クリエーターの発掘やサポートには力を注いでいる。<br>
            現在、東京生活研究所・アルテマイスターの顧問を務め、生活文化の未来がより豊かであることを願い、活動を続けている。
          </p>
        </div>
      </div>
    </div>
  </div>
</article>

		<!--///-->
<article class="content lineup be--jidai-heian">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">平 安</h2>
        <p class="lineup__detail">
          平安時代に作られた、<br class="on-pc">平等院鳳凰堂の水面に映る姿を扉に取り入れ、<br class="on-pc">内部は精巧に作られた天蓋を施した中堂を再現しました。<br>
          <br>
          <small>
            平安卓上／H55×W35×D33cm
          </small>
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_jidai/image-heian-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_jidai/image-heian.jpg" alt="仏壇 平安" />
          </picture>
        </figure>
      </div>
    </div>
  </div>
</article>

<!--///-->
<article class="content lineup be--jidai-kamakura">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">鎌 倉</h2>
        <p class="lineup__detail">
          質実剛健を美徳とした鎌倉時代の<br class="on-pc">素朴な力強さを表すため、<br class="on-pc">東大寺の建築様式を<br class="on-pc">取り入れました。<br>
          <br>
          <small>
            鎌倉床置／H125×W48×D44cm
          </small>
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_jidai/image-kamakura-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_jidai/image-kamakura.jpg" alt="仏壇 鎌倉" />
          </picture>
        </figure>
      </div>
    </div>
  </div>
</article>

<!--///-->
<article class="content lineup be--jidai-momoyama">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">桃 山</h2>
        <p class="lineup__detail">
          豪華で壮大な文化が<br class="on-pc">花開いた桃山時代。<br class="on-pc">その時代の漆工芸美術の粋を集めた<br class="on-pc">高台寺霊屋の高台寺蒔絵を<br class="on-pc">随所に施した仏壇です。<br>
          <br>
          <small>
            桃山床置／H125×W48×D44cm
          </small>
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_jidai/image-momoyama-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_jidai/image-momoyama.jpg" alt="仏壇 桃山" />
          </picture>
        </figure>
      </div>
    </div>
  </div>
</article>

<!--///-->
<article class="content lineup be--jidai-edo">
  <div class="inner">
    <div class="lineup__block">
      <div class="lineup__text">
        <h2 class="lineup__name">江 戸</h2>
        <p class="lineup__detail">
          町人文化が栄えた江戸時代。<br class="on-pc">庶民信仰が厚かった善光寺の<br class="on-pc">前立本尊を安置した内陣の意匠を<br class="on-pc">取り入れた仏壇です。<br>
          <br>
          <small>
            江戸卓上／H55×W35×D32cm
          </small>
        </p>
      </div>
      <div class="lineup__images">
        <figure class="lineup__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_jidai/image-edo-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/butsudan_jidai/image-edo.jpg" alt="仏壇 江戸" />
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
