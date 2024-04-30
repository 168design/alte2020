

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
  <div class="hero-item be--about">
    <div class="hero-item__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/about/hero-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/company/about/hero.jpg" alt="アルテマイスターのこと" />
      </picture>
    </div>
    <div class="inner">
      <div class="hero-item__text">
        <h2 class="hero-item__title">アルテマイスター<br>のこと</h2>
        <p class="hero-item__lead">About</p>
      </div>
    </div>
  </div>
</header>

<!--//-->
<article class="content single-block be--about">
  <div class="inner">
    <div class="single-block__text">
      <h2 class="single-block__lead">
        会津の地で<br>仏壇・仏具・位牌を<br>つくり続けて120年。
      </h2>
      <p class="single-block__detail">
        当社は1900年（明治33年）に創業。会津若松の地場産業の一つとして、仏壇・仏具・位牌を主とした製品の製造・販売を手掛けています。製造から販売までを一貫して行うことで、お客様のニーズに合わせた柔軟且つ素早い対応を目指しています。
      </p>
    </div>

    <div class="single-block__images">
      <figure class="single-block__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/about/image-1-1-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/about/image-1-1.jpg" alt="木材" />
        </picture>
      </figure>
      <figure class="single-block__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/about/image-1-2-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/about/image-1-2.jpg" alt="塗装" />
        </picture>
      </figure>
      <figure class="single-block__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/about/image-1-3-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/about/image-1-3.jpg" alt="木材加工" />
        </picture>
      </figure>
      <figure class="single-block__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/about/image-1-4-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/about/image-1-4.jpg" alt="会津蒔絵" />
        </picture>
      </figure>
    </div>
  </div>
</article>

<!--//-->
<article class="content single-block be--about">
  <div class="inner">
    <div class="single-block__text">
      <h2 class="single-block__lead">
        時代が求める<br>｢祈りのかたち｣を<br>創り出す。
      </h2>
      <p class="single-block__detail">
        核家族化や洋風化がさらに進んだ1990年代。昔からの供養や祈りの習慣が様変わりする中、私たちはこれからの時代に向けて何をすべきか模索しました。見つけた答えは、現代の住環境に合い、人の心に寄り添える祈りのかたちを創り出すこと。一線で活躍するクリエイターと共に、新しいものづくりに取り組んでいます。
      </p>
    </div>

    <div class="single-block__images">
      <figure class="single-block__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/about/image-2-1-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/about/image-2-1.jpg" alt="厨子「タイプE」" />
        </picture>
      </figure>
      <figure class="single-block__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/about/image-2-2-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/about/image-2-2.jpg" alt="厨子「泰壽」" />
        </picture>
      </figure>
      <figure class="single-block__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/about/image-2-3-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/about/image-2-3.jpg" alt="厨子「うてな厨子 樽型」" />
        </picture>
      </figure>
      <figure class="single-block__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/about/image-2-4-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/about/image-2-4.jpg" alt="厨子「蓬莱紋彫り古文字厨子」" />
        </picture>
      </figure>
    </div>
    <p class="single-block__note">
      <span>
        1：デザイン厨子／TYPE E-1-R<br>
        2：工房厨子／泰壽<br>
        3：デザイン厨子／うてな厨子 樽型<br>
        4：蓮の上の仏さま
      </span>
    </p>
  </div>
</article>

		<article class="content single-footer">

  <div class="inner">

    <ul class="single-footer__index">

      

      
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
      <li class="single-footer-item be--service">
        <a href="/company/service/" class="single-footer-item__block">
          <div class="single-footer-item__text">
            <h2 class="single-footer-item__title">
              事業のご紹介
            </h2>
          </div>
          <div class="single-footer-item__image">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/service/footer-thumb-pc.jpg" media="(min-width: 640px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/company/service/footer-thumb.jpg" alt="事業のご紹介" />
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

		<article class="content footer-banner-a">
  <a href="/pray/" class="footer-banner-a__link">
    <div class="footer-banner-a__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/pray-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/company/pray.jpg" alt="こころをつなぐ" />
      </picture>
    </div>
    <div class="footer-banner-a__text">
      <h2 class="footer-banner-a__lead">
        アルテマイスターと共に<br>祈りのかたちを<br class="on-sp">創り出す人々
      </h2>
      <p class="footer-banner-a__btn">
        <span>祈りのかたちを創る</span>
      </p>
    </div>
  </a>
</article>


<?php
get_footer();
