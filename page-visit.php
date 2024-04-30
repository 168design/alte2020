

<?php
/**
 * The template for displaying page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package alte2020
 */

 global $pageType;
 $pageType="visit";

 get_header();
?>
	<section class="contents scroll-trg">
		<header class="content single-hero">
  <div class="inner">
    <div class="single-hero__text">
      <h2 class="single-hero__title">工場見学の<br class="on-sp">ご案内</h2>
    </div>
    <div class="single-hero__images">
      <div class="single-hero__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/visit/hero-1-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/visit/hero-1.jpg" alt="アルテマイスター工場" />
        </picture>
      </div>
      <div class="single-hero__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/visit/hero-2-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/visit/hero-2.jpg" alt="アルテマイスターショールーム" />
        </picture>
      </div>
    </div>
  </div>
</header>

		<article class="content lead">
  <div class="inner">
    <p class="lead__text">
      <span>
        アルテマイスターは、創業以来、<br class="2">仏壇・仏具・位牌の製造販売を一貫して手がけてきました。長年受け継がれてきた伝統の技術を活かした製品づくりや、木を大切にしたものづくりをご覧いただけます。<br class="2">また、現代のライフスタイルに合う祈りのかたちとしてデザイン仏壇などご提案しています。<br class="2">ぜひ、アルテマイスターへお越しください。
      </span>
    </p>

    <div class="lead__anchors">
      <a href="#facility" class="lead__anchor-btn">
        <span>見学施設のご紹介</span>
      </a>
      <a href="#outline" class="lead__anchor-btn">
        <span>見学コース・概要</span>
      </a>
    </div>
  </div>
</article>

		<div class="content blocks" >
<article class="content block be--facility" id="facility">
  <div class="inner">
    <h2 class="block__title">
      <span>
        見学施設のご紹介
      </span>
    </h2>

    <ol class="facility-list">

      <!--//-->
      <li>
        <div class="facility-list__text">
          <h3 class="facility-list__name">ショールーム</h3>
          <p class="facility-list__time">見学所要時間：15〜30分</p>
          <p class="facility-list__detail">
            弊社がご提案する現代に合う祈りのかたちや、弊社のルーツ、ものづくりの特徴などをご紹介いたします。
          </p>
          <p class="facility-list__note">
            ※弊社の都合により、4・5・6 月の 3ヶ月間は、ショールーム見学をお休みさせていただきます。詳しくはお問い合せください。
          </p>
        </div>
        <div class="facility-list__images">
          <figure class="facility-list__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/visit/showroom-1-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/visit/showroom-1.jpg" alt="ショールーム" />
            </picture>
          </figure>
          <figure class="facility-list__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/visit/showroom-2-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/visit/showroom-2.jpg" alt="ショールーム" />
            </picture>
          </figure>
        </div>
        <div class="facility-list__arrow"></div>
      </li>


      <!--//-->
      <li>
        <div class="facility-list__text">
          <h3 class="facility-list__name">資 材 工 場</h3>
          <p class="facility-list__time">見学所要時間：20〜30分</p>
          <p class="facility-list__detail">
            製品の材料となる丸太の製材などの作業をご覧いただけます。
          </p>
          <p class="facility-list__note">
            ※丸太の製材作業は、生産スケジュールにより不定期に行っております。予めご了承ください。
          </p>
        </div>
        <div class="facility-list__images">
          <figure class="facility-list__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/visit/material-1-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/visit/material-1.jpg" alt="資材工場" />
            </picture>
          </figure>
          <figure class="facility-list__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/visit/material-2-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/visit/material-2.jpg" alt="資材工場" />
            </picture>
          </figure>
        </div>
        <div class="facility-list__arrow"></div>
      </li>


      <!--//-->
      <li>
        <div class="facility-list__text">
          <h3 class="facility-list__name">製 造 工 場</h3>
          <p class="facility-list__time">見学所要時間：30〜45分</p>
          <p class="facility-list__detail">
            仏壇や位牌に使われる木材の加工や塗装、蒔絵や組立など、製品ができあがるまでの各工程をご覧いただけます。
          </p>
          <p class="facility-list__note">
            ※一部作業による騒音や塗料の臭いが強い場所があります。予めご了承ください。
          </p>
        </div>
        <div class="facility-list__images">
          <figure class="facility-list__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/visit/factory-1-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/visit/factory-1.jpg" alt="製造工場" />
            </picture>
          </figure>
          <figure class="facility-list__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/visit/factory-2-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/visit/factory-2.jpg" alt="製造工場" />
            </picture>
          </figure>
        </div>
        <div class="facility-list__arrow"></div>
      </li>


      <!--//-->
      <li>
        <div class="facility-list__text">
          <h3 class="facility-list__name">ショップ</h3>
          <p class="facility-list__time">見学所要時間：15〜30分</p>
          <p class="facility-list__detail">
            伝統の祈りのかたちから現代に合う祈りのかたちまで弊社の商品がご覧いただけます。<br class="on-pc">また、余材を活かしたオリジナルブランド「人と木」もご紹介しています。
          </p>
        </div>
        <div class="facility-list__images">
          <figure class="facility-list__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/visit/shop-1-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/visit/shop-1.jpg" alt="ショップ" />
            </picture>
          </figure>
          <figure class="facility-list__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/visit/shop-2-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/visit/shop-2.jpg" alt="人と木" />
            </picture>
          </figure>
        </div>
      </li>
    </ol>


  </div>
</article>

<article class="content block be--outline" id="outline">
  <div class="inner">
    <h2 class="block__title">
      <span>
        見学コース・概要
      </span>
    </h2>

    <dl class="outline-list">

      <!--//-->
      <dt>
        <h3 class="outline-list__title">コース</h3>
      </dt>
      <dd>
        <ul class="outline-courses">
          <li class="outline-course">
            <div class="outline-course__title">
              <p class="outline-course__num">A</p>
              <h3 class="outline-course__name">ゆったりコース</h3>
              <p class="outline-course__time">見学所要時間：約120分</p>
            </div>
            <div class="outline-course__order">
              ショールーム　 →　資材工場　→　<br class="on-sp">製造工場　→　ショップ
            </div>
          </li>
          <li class="outline-course">
            <div class="outline-course__title">
              <p class="outline-course__num">B</p>
              <h3 class="outline-course__name">標　準コース</h3>
              <p class="outline-course__time">見学所要時間：約100分</p>
            </div>
            <div class="outline-course__order">
              ショールーム　→　製造工場　→　<br class="on-sp">ショップ
            </div>
          </li>
          <li class="outline-course">
            <div class="outline-course__title">
              <p class="outline-course__num">C</p>
              <h3 class="outline-course__name">かんたんコース</h3>
              <p class="outline-course__time">見学所要時間：約75分</p>
            </div>
            <div class="outline-course__order">
              ショールーム　→　ショップ
            </div>
          </li>
        </ul>
        <p class="outline-list__note">
          ※移動時間は含まれません。<br>
          ※上記はモデルコースです。ご希望に応じて調整も可能ですのでご相談ください。
        </p>
      </dd>

      <!--//-->
      <dt>
        <h3 class="outline-list__title">開催日と<br class="on-pc">開催時間</h3>
      </dt>
      <dd>
        <p class="outline-list__detail be--time">
          弊社営業日<br>
          〈午前の部〉10：00～<br>
          〈午後の部〉13：30～
        </p>
        <p class="outline-list__note">
          ※土・日・祝日・夏期休業・年末年始・弊社指定休日は休業となります。<br>
          ※弊社の都合により、3・4・5・6 月の 4ヶ月間は、 ショールーム見学をお休みさせていただきます。詳しくはお問い合せください。<br>
          ※ショップの定休日は火曜日となっております。曜日をご確認の上お申し込みください。<br>
          ※午前・午後の部をまたいでのご見学はご遠慮ください。
        </p>
      </dd>

      <!--//-->
      <dt>
        <h3 class="outline-list__title">予約申込み日</h3>
      </dt>
      <dd>
        <p class="outline-list__note">
          ご見学日の1週間前までにご予約ください。
        </p>
      </dd>

      <!--//-->
      <dt>
        <h3 class="outline-list__title">予約方法</h3>
      </dt>
      <dd>
        <p class="outline-list__note">
          <a href="https://alte-meister.co.jp/reserve/" target="_brank">お問い合わせフォーム</a>よりご予約ください。
        </p>
      </dd>

      <!--//-->
      <dt>
        <h3 class="outline-list__title">見学可能人数</h3>
      </dt>
      <dd>
        <p class="outline-list__detail">
          1名～10名
        </p>
        <p class="outline-list__note">
          ※10名以上での見学をご希望される場合は電話にてお問い合せください。<br>
          ※中学生以下の方のご見学は成人の保護者の同伴が必要です。
        </p>
      </dd>

      <!--//-->
      <dt>
        <h3 class="outline-list__title">見学料金</h3>
      </dt>
      <dd>
        <p class="outline-list__detail">
          無　料
        </p>
      </dd>

      <!--//-->
      <dt>
        <h3 class="outline-list__title">お問い合わせ</h3>
      </dt>
      <dd>
        <p class="outline-list__detail be--tel">
          <a href="tel:0242274380">
            <span class="on-sp">tel.</span>0242-27-4380
          </a>
          <span class="on-pc">〈受付時間／平日9：00～17：00〉</span>
        </p>
        <p class="outline-list__note">
          <span class="on-sp">〈受付時間／平日9：00～17：00〉<br></span>
          工場見学担当者（コンシェルジュ）まで
        </p>
      </dd>

    </dl>

    <div class="block__btns">
      <a href="/reserve/" class="block__link-btn be--bl">
        <span>工場見学のお申し込み</span>
      </a>
      <a href="/access/" class="block__link-btn be--wh">
        <span>アクセス</span>
      </a>
    </div>


  </div>
</article>

</div>

    
<?php
get_footer();
