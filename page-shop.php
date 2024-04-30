

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
      <h2 class="single-hero__title">店舗のご案内</h2>
    </div>
  </div>
</header>

		<div class="content blocks" >
<!--//-->
<article class="content block be--hoshi">
  <div class="block__header">
    <figure class="block__main-image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/shop/hoshi/main-image-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/shop/hoshi/main-image.jpg" alt="アルテマイスター保志" />
      </picture>
    </figure>
  </div>

  <div class="inner">
    <div class="block__body">

      <div class="block__text">
        <h2 class="block__name">
          アルテマイスター保志
        </h2>
        <p class="block__lead">
          現代の暮らしに合う<br>祈りを提案するショップ
        </p>
        <p class="block__detail">
          伝統的なお仏壇をはじめ、今の暮らしに合ったモダンなお仏壇や仏具を取り揃えています。<br>また、自由なお祀りをご希望の方には厨子を、今あるお仏壇を引き継ぐことでお困りの方にはお仏壇のリフォームをご提案しています。
        </p>
      </div>


      <div class="block__images">
        <figure class="block__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/shop/hoshi/image-1-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shop/hoshi/image-1.jpg" alt="アルテマイスター保志 水盤ゆらぎ" />
          </picture>
          <figcaption>【水盤／ゆらぎ】<br class="on-pc">インテリアデザイナー内田繁氏の作品</figcaption>
        </figure>

        <figure class="block__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/shop/hoshi/image-2-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shop/hoshi/image-2.jpg" alt="アルテマイスター保志 天蓋の間" />
          </picture>
          <figcaption>2Fにはお位牌が並ぶ</figcaption>
        </figure>

        <figure class="block__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/shop/hoshi/image-3-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shop/hoshi/image-3.jpg" alt="アルテマイスター保志 伝統型仏壇" />
          </picture>
          <figcaption>店舗外観</figcaption>
        </figure>
      </div>


      <div class="shop-info">
        <table class="shop-info__table">
          <tr>
            <th>住所</th>
            <td>〒965-0861 <br class="on-sp">福島県会津若松市日新町3-9</td>
          </tr>
          <tr>
            <th>TEL</th>
            <td><a class="tel-link" href="tel:0242264622">0242-26-4622</a></td>
          </tr>
          <tr>
            <th>FAX</th>
            <td><a class="fax-link" href="tel:0242365933">0242-36-5933</a></td>
          </tr>
          <tr>
            <th>URL</th>
            <td><a href="https://www.alte-meister-hoshi.jp/" target="_blank">https://www.alte-meister-hoshi.jp/</a></td>
          </tr>
          <tr>
            <th>営業時間</th>
            <td>10:00〜18:00</td>
          </tr>
          <tr>
            <th>定休日</th>
            <td>火曜日</td>
          </tr>
          <tr>
            <th>駐車場</th>
            <td>20台（スペース・アルテマイスターを含む）</td>
          </tr>
        </table>
      </div>

    </div>

  </div>

  <div class="block__map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1828.6590399548127!2d139.91928530768695!3d37.49511983712542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff55361b43c57bd%3A0xe4104ab58293c6a4!2z44Ki44Or44OG44Oe44Kk44K544K_44O85L-d5b-X!5e0!3m2!1sja!2sjp!4v1587457182022!5m2!1sja!2sjp" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>

</article>

<!--//-->
<article class="content block be--space">
  <div class="block__header">
    <figure class="block__main-image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/shop/space/main-image-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/shop/space/main-image.jpg" alt="スペース・アルテマイスター" />
      </picture>
    </figure>
  </div>

  <div class="inner">
    <div class="block__body">

      <div class="block__text">
        <h2 class="block__name">
          スペース・アルテマイスター
        </h2>
        <p class="block__lead">
          心潤うモノ・コトを<br class="on-sp">提案する<br class="on-pc">スペース
        </p>
        <p class="block__detail">
          木のぬくもりや輝きが伝わるアルテマイスターオリジナル商品「人と木」を中心に、伝統の技術を活かした現代の生活に適う品々を取り揃えています。さらに、デザイナーや工芸家などの多彩な企画展やものづくりの楽しさを体感できるイベントも開催しています。
        </p>
      </div>


      <div class="block__images">
        <figure class="block__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/shop/space/image-1-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shop/space/image-1.jpg" alt="スペース・アルテマイスター イベントスペース" />
          </picture>
          <figcaption>大正時代の酒蔵を活かしたイベントスペース</figcaption>
        </figure>

        <figure class="block__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/shop/space/image-2-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shop/space/image-2.jpg" alt="人と木「木の文具 定木セット」" />
          </picture>
          <figcaption>人と木「木の文具 定木セット」</figcaption>
        </figure>

        <figure class="block__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/shop/space/image-3-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shop/space/image-3.jpg" alt="スペース・アルテマイスター ワークショップ" />
          </picture>
          <figcaption>木を使ったワークショップなど多彩なイベントを開催</figcaption>
        </figure>
      </div>


      <div class="shop-info">
        <table class="shop-info__table">
          <tr>
            <th>住所</th>
            <td>〒965-0862 <br class="on-sp">福島県会津若松市本町9-23</td>
          </tr>
          <tr>
            <th>TEL</th>
            <td><a class="tel-link" href="tel:0242264621">0242-26-4621</a></td>
          </tr>
          <tr>
            <th>FAX</th>
            <td><a class="fax-link" href="tel:0242264625">0242-26-4625</a></td>
          </tr>
          <tr>
            <th>URL</th>
            <td><a href="https://www.space-alte-meister.jp/" target="_blank">https://www.space-alte-meister.jp/</a></td>
          </tr>
          <tr>
            <th>instagram</th>
            <td><a href="https://www.instagram.com/space.alte/" target="_blank">https://www.instagram.com/<br class="on-sp">space.alte/</a></td>
          </tr>
          <tr>
            <th>営業時間</th>
            <td>10:00〜18:00</td>
          </tr>
          <tr>
            <th>定休日</th>
            <td>火曜日</td>
          </tr>
          <tr>
            <th>駐車場</th>
            <td>20台（アルテマイスター保志を含む）</td>
          </tr>
        </table>
      </div>

    </div>

  </div>

  <div class="block__map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1371.9359843730972!2d139.9202447523262!3d37.49458369845832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff55361cec5945b%3A0x326efe41096a7ef2!2z44K544Oa44O844K544O744Ki44Or44OG44Oe44Kk44K544K_44O8!5e0!3m2!1sja!2sjp!4v1585376013211!5m2!1sja!2sjp" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>

</article>

<!--//-->
<article class="content block be--zushiya">
  <div class="block__header">
    <figure class="block__main-image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/shop/zushiya/main-image-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/shop/zushiya/main-image.jpg" alt="ギャラリー厨子屋" />
      </picture>
    </figure>
  </div>

  <div class="inner">
    <div class="block__body">

      <div class="block__text">
        <h2 class="block__name">
          ギャラリー厨子屋
        </h2>
        <p class="block__lead">
          一人ひとりの心に寄り添う<br>祈りのギャラリー
        </p>
        <p class="block__detail">
          一線で活躍するデザイナーや工芸家などのクリエイターの作品や、弊社職人とのコラボレーションから生まれる、しきたりにとらわれない、一人ひとりの想いや生き方に適う祈りのかたちを提案しています。
        </p>
      </div>


      <div class="block__images">
        <figure class="block__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/shop/zushiya/image-1-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shop/zushiya/image-1.jpg" alt="ギャラリー厨子屋 店内" />
          </picture>
          <figcaption>インテリアデザイナー内田繁氏デザインの店内</figcaption>
        </figure>

        <figure class="block__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/shop/zushiya/image-2-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shop/zushiya/image-2.jpg" alt="工房厨子 虹壽" />
          </picture>
          <figcaption>グッドデザイン賞を受賞した厨子 安壽</figcaption>
        </figure>

        <figure class="block__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/shop/zushiya/image-3-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shop/zushiya/image-3.jpg" alt="手のひらサイズのおまもり お地蔵様うふふ" />
          </picture>
          <figcaption>手のひらサイズのおまもり　お地蔵様 うふふ</figcaption>
        </figure>
      </div>


      <div class="shop-info">
        <table class="shop-info__table">
          <tr>
            <th>住所</th>
            <td>〒104-0061 東京都中央区銀座1-4-4<br class="on-sp">ギンザ105ビルB1F</td>
          </tr>
          <tr>
            <th>TEL</th>
            <td><a class="tel-link" href="tel:0335385118">03-3538-5118</a></td>
          </tr>
          <tr>
            <th>FAX</th>
            <td><a class="fax-link" href="tel:0335385332">03-3538-5332</a></td>
          </tr>
          <tr>
            <th>URL</th>
            <td><a href="http://www.zushiya.com/" target="_blank">https://www.zushiya.com/</a></td>
          </tr>
          <tr>
            <th>instagram</th>
            <td><a href="https://www.instagram.com/gallery_zushiya/" target="_blank">https://www.instagram.com/<br class="on-sp">gallery_zushiya/</a></td>
          </tr>
          <tr>
            <th>営業時間</th>
            <td>11:00〜19:00</td>
          </tr>
          <tr>
            <th>定休日</th>
            <td>毎週火曜日、第2・第4水曜日</td>
          </tr>
          <tr>
            <th>アクセス</th>
            <td>
              <ul class="indent-list">
                <li>・JR「有楽町駅」京橋口より徒歩3分</li>
                <li>・東京メトロ有楽町線 「銀座1丁目駅」3番出口より徒歩2分</li>
                <li>・東京メトロ銀座線 「京橋駅」3番出口より徒歩3分</li>
              </ul>
            </td>
          </tr>
        </table>
      </div>

    </div>

  </div>

  <div class="block__map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12964.305803704923!2d139.7668982!3d35.6751195!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaee74f3230fd718a!2z44Ku44Oj44Op44Oq44O85Y6o5a2Q5bGL!5e0!3m2!1sja!2sjp!4v1585376055345!5m2!1sja!2sjp" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>

</article>

<!--//-->
<article class="content block be--zushiya-matsuya">
  <div class="block__header">
    <figure class="block__main-image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/shop/zushiya-matsuya/main-image-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/shop/zushiya-matsuya/main-image.jpg" alt="ギャラリー厨子屋" />
      </picture>
    </figure>
  </div>

  <div class="inner">
    <div class="block__body">

      <div class="block__text">
        <h2 class="block__name">
          厨子屋　松屋銀座店
        </h2>
      </div>


      <div class="block__images">
        <figure class="block__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/shop/zushiya-matsuya/image-1-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shop/zushiya-matsuya/image-1.jpg" alt="工房厨子　勝常　横型　黒褐色" />
          </picture>
          <figcaption>工房厨子　勝常　横型　黒褐色</figcaption>
        </figure>

        <figure class="block__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/shop/zushiya-matsuya/image-2-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shop/zushiya-matsuya/image-2.jpg" alt="工房厨子　安憬　L 洗朱" />
          </picture>
          <figcaption>工房厨子　安憬　L 洗朱</figcaption>
        </figure>
      </div>


      <div class="shop-info">
        <table class="shop-info__table">
          <tr>
            <th>住所</th>
            <td>〒104-8130 東京都中央区銀座3-6-1 <br class="on-sp">松屋銀座7F</td>
          </tr>
          <tr>
            <th>TEL</th>
            <td><a class="tel-link" href="tel:0335671211">03-3567-1211（代表）</a></td>
          </tr>
          <tr>
            <th>URL</th>
            <td><a href="https://www.matsuya.com/ginza/" target="_blank">https://www.matsuya.com/ginza/</a></td>
          </tr>
          <tr>
            <th>営業時間</th>
            <td>10:00〜20:00<br>休業日、営業時間は松屋銀座に準じます。</td>
          </tr>
          <tr>
            <th>アクセス</th>
            <td>
              <ul class="indent-list">
                <li>・東京メトロ銀座線、丸ノ内線、日比谷線「銀座駅」A12番出口直結</li>
                <li>・東京メトロ有楽町線「銀座一丁目駅」9番出口より徒歩3分</li>
                <li>・都営地下鉄浅草線「東銀座駅」A8番出口より徒歩3分</li>
                <li>・JR「有楽町駅」より徒歩8分</li>
              </ul>
            </td>
          </tr>
          <tr>
            <th>駐車場</th>
            <td>松屋銀座専用駐車場有り</td>
          </tr>
        </table>
      </div>

    </div>

  </div>

  <div class="block__map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1620.6046095075017!2d139.76441067594084!3d35.67185007397246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188be6a11b4be5%3A0x527322ddc6836357!2z5p2-5bGL6YqA5bqn!5e0!3m2!1sja!2sjp!4v1640076853163!5m2!1sja!2sjp" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>

</article>

</div>

<a href="/" class="toppage-btn">
  <span>TOPページ</span>
  <i></i>
</a>


		<article class="content footer-banner-b">
  <a href="/showroom/" class="footer-banner-b__block">
    <h2 class="footer-banner-b__title">
      <span>ショールームの</span><br class="on-pc"><span>ご案内</span>
    </h2>
    <div class="footer-banner-b__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/shop/showroom-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/shop/showroom.jpg" alt="ショールームのご案内" />
      </picture>
    </div>
  </a>
</article>


<?php
get_footer();
