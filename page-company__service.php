

<?php
/**
 * The template for displaying page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package alte2020
 */

 global $pageType;
 $pageType="company";

 get_header();
?>
	<section class="contents scroll-trg">
		<header class="content hero stby">
  <div class="hero-item be--service">
    <div class="hero-item__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/service/hero-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/company/service/hero.jpg" alt="事業のご紹介" />
      </picture>
    </div>
    <div class="inner">
      <div class="hero-item__text">
        <h2 class="hero-item__title">事業の<br class="on-pc">ご紹介</h2>
        <p class="hero-item__lead">Business</p>
      </div>
    </div>
  </div>
</header>

<!--//-->
<article class="content single-block be--service">
  <div class="inner">

    <h2 class="single-block__lead">
      仏壇・仏具・位牌<br class="on-sp">製造販売事業
    </h2>

    <div class="single-block__section">
      <div class="single-block__text">
        <h3 class="single-block__section-name">
          製造部門
        </h3>
        <p class="single-block__detail">
          百年以上に渡り会津の地場産業として、仏壇・仏具・位牌を製造しています。厳重な品質管理のもと、原木の買い付けから組立まで一貫した生産体制の中、長年培われた職人の技によって製品ひとつひとつ心を込め作り上げています。
        </p>
      </div>
      <div class="single-block__images">
        <figure class="single-block__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/service/image-1-1-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/company/service/image-1-1.jpg" alt="製造部門" />
          </picture>
        </figure>
      </div>
    </div>

    <div class="single-block__section">
      <div class="single-block__text">
        <h3 class="single-block__section-name">
          卸売部門
        </h3>
        <p class="single-block__detail">
          弊社で製造された商品を中心に全国の販売店の皆様へ安心できる商品のご提供と販売促進につながる提案をしています。さらに販売店の皆様から得た貴重な情報をもとに、より良い製品づくりに繋げます。
        </p>
      </div>
      <div class="single-block__images">
        <figure class="single-block__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/service/image-1-2-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/company/service/image-1-2.jpg" alt="卸売部門" />
          </picture>
        </figure>
      </div>
    </div>

    <div class="single-block__section">
      <div class="single-block__text">
        <h3 class="single-block__section-name">
          小売部門
        </h3>
        <p class="single-block__detail">
          弊社で製造された祈りの商品をはじめ、ものづくりの楽しさが感じられる品々など、弊社が提案する暮らしに潤いを与える商品を取り扱っています。
        </p>
      </div>
      <div class="single-block__images">
        <figure class="single-block__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/service/image-1-3-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/company/service/image-1-3.jpg" alt="小売部門" />
          </picture>
        </figure>
      </div>
    </div>
  </div>
</article>

<!--//-->
<article class="content single-block be--service">
  <div class="inner">

    <div class="single-block__text">
      <h2 class="single-block__lead">
        仏壇リフォーム事業
      </h2>

      <p class="single-block__detail">
        大きなお仏壇をお住まいに合わせた大きさへ作り替えたり、経年変化で傷んでしまったお仏壇をクリーニングすることで、ご先祖様から継承してきた大切なお仏壇を安心してお使いただけるお手伝いをしています。
      </p>
    </div>
    <div class="single-block__images">
      <figure class="single-block__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/service/image-2-1-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/service/image-2-1.jpg" alt="仏壇リメイク事業" />
        </picture>
      </figure>
    </div>

    <div class="koubou-link">
  <a class="koubou-link__btn" href="https://obutsudan-reform.com/" target="_blank"><span>お仏壇リフォーム工房</span><i><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon-link.svg" alt="" /></i></a>
</div>

  </div>
</article>

		<article class="content single-footer">

  <div class="inner">

    <ul class="single-footer__index">

      
      <!--///-->
      <li class="single-footer-item be--about">
        <a href="/company/about/" class="single-footer-item__block">
          <div class="single-footer-item__text">
            <h2 class="single-footer-item__title">
              アルテマイスター<br>のこと
            </h2>
          </div>
          <div class="single-footer-item__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/about/footer-thumb-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/company/about/footer-thumb.jpg" alt="アルテマイスターとは" />
            </picture>
          </div>
        </a>
      </li>
      

      
      <!--///-->
      <li class="single-footer-item be--message">
        <a href="/company/message/" class="single-footer-item__block">
          <div class="single-footer-item__text">
            <h2 class="single-footer-item__title">
              代表<br class="on-pc">メッセージ
            </h2>
          </div>
          <div class="single-footer-item__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/message/footer-thumb-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/company/message/footer-thumb.jpg" alt="代表メッセージ" />
            </picture>
          </div>
        </a>
      </li>
      

      
      <!--///-->
      <li class="single-footer-item be--activity">
        <a href="/company/activity/" class="single-footer-item__block">
          <div class="single-footer-item__text">
            <h2 class="single-footer-item__title">
              私たちの<br>取り組み
            </h2>
          </div>
          <div class="single-footer-item__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/activity/footer-thumb-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/company/activity/footer-thumb.jpg" alt="私たちの取り組み" />
            </picture>
          </div>
        </a>
      </li>
      

      

      
      <!--///-->
      <li class="single-footer-item be--philosophy">
        <a href="/company/philosophy/" class="single-footer-item__block">
          <div class="single-footer-item__text">
            <h2 class="single-footer-item__title">
              理念・沿革<br>会社概要
            </h2>
          </div>
          <div class="single-footer-item__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/philosophy/footer-thumb-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/company/philosophy/footer-thumb.jpg" alt="理念・沿革・会社概要" />
            </picture>
          </div>
        </a>
      </li>
      

      
      <!--///-->
      <li class="single-footer-item be--healthpromotion">
        <a href="/company/healthpromotion/" class="single-footer-item__block">
          <div class="single-footer-item__text">
            <h2 class="single-footer-item__title">
              健康経営の<br>取り組み
            </h2>
          </div>
          <div class="single-footer-item__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/healthpromotion/footer-thumb-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/company/healthpromotion/footer-thumb.jpg" alt="健康経営の取り組み" />
            </picture>
          </div>
        </a>
      </li>
      

      <!--///-->
      <li class="single-footer-item be--recruit">
        <a href="/recruit/" class="single-footer-item__block">
          <div class="single-footer-item__text">
            <h2 class="single-footer-item__title">
              採用情報
            </h2>
          </div>
          <div class="single-footer-item__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/recruit/footer-thumb-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit/footer-thumb.jpg" alt="採用情報" />
            </picture>
          </div>
        </a>
      </li>

    </ul>

  </div>
</article>


<?php
get_footer();
