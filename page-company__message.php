

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
  <div class="hero-item be--message">
    <div class="hero-item__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/message/hero-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/company/message/hero.jpg" alt="代表取締役 保志康徳" />
      </picture>
    </div>
    <div class="inner">
      <div class="hero-item__text">
        <h2 class="hero-item__title">代表<br class="on-sp">メッセージ</h2>
        <p class="hero-item__lead">Message</p>
      </div>
    </div>
  </div>
</header>

<!--//-->
<article class="content single-block be--message">
  <div class="inner">
    <div class="single-block__text">
      <p class="single-block__lead">
        「豊かな心を創る」<br>明るい未来のために。
      </p>
      <p class="single-block__detail">
        我が社は「豊かな心を創る」を信条に、明治33年の創業以来、一貫したものづくりに取り組み、その時代に合う祈りの文化を創造してまいりました。<br>
        祈りとは幸せを願うこと。その願いは自分を中心としながらも、自分以外の人々に向ける温かな心であって欲しい。家族へ、友人へ、職場へ、社会へ、時には遠い国の人々へ、愛他の祈りを紡ぐこともあるでしょう。<br class="on-pc">また、受け入れ難い現実が目の前に現れた時、その現実を肥やしとして乗り越えていける強さも、祈りにはあると考えます。時代を築いてきた先人達に敬意を払い、供養の心を手向ける祈りも大切なことです。<br>
        人間社会を中心とした考えだけではなく、同じ地球に暮らす動植物への感謝。地球環境に配慮した考え方や行動が大切な時代です。<br>
        経済的発展は勿論のこと、より良き未来を創るため、心の文化、祈りの文化を広め、人々が豊かな心で暮らす社会づくりに貢献してまいります。
      </p>
      <div class="single-block__message-sign">
        <p>代表取締役社長</p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/company/message/sign.jpg" alt="保志 康徳" />
      </div>
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


<?php
get_footer();
