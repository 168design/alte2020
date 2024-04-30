

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
		<header class="content simple-hero">
  <div class="inner">
    <div class="simple-hero__text">
      <h2 class="simple-hero__title">健康経営の取り組み</h2>
    </div>
  </div>
</header>

<!--//-->
<article class="content simple-block">
  <div class="inner">
    <div class="simple-block__text">
      <div class="simple-block__detail">
        <p>
          持続的に成長するためには、<br class="on-sp">
          心身の健康を保つことが大切です。<br>
          当社は「健康宣言」のもと、<br class="on-sp">
          社員の働く喜びと社会の発展を目指し、<br>
          各種取り組みを実施しています。<br>
        </p>
        <div class="healthpromotion-declaration">
          <h3 class="healthpromotion-declaration__title">健康宣言</h3>
          <p class="healthpromotion-declaration__text">
            経営理念を実践して、お客様の健康に貢献し、健康増進をサポートするには、社員自身が健康であることが不可欠であり、健康でなければお客様の信頼を得ることはできません。<br>
            会社の成長を支える社員と家族の心身の健康を重要な経営資源の一つと捉え、健康維持・増進活動に対する積極的な支援と組織的な健康づくりを推進することで、社員がいきいきと活躍し、豊かで快適・健康な社会生活と経済の発展に貢献する会社を目指します。
          </p>
          <h5 class="healthpromotion-declaration__sign">
            アルテマイスター　株式会社保志<br>
            代表取締役社長 保志康徳
          </h5>
        </div>
      </div>
    </div>
  </div>
</article>

<!--//-->
<article class="content simple-block">
  <div class="inner">
    <div class="simple-block__text">
      <h2 class="simple-block__title">
        <span>
          目的
        </span>
      </h2>
      <p class="simple-block__detail">
        <span>
          健康宣言に基づき、社員及び家族の心身の健康維持・増進と健康で快適な職場環境の形成を目的として、健康管理についての方針を定めます。
        </span>
      </p>
    </div>
  </div>
</article>

<!--//-->
<article class="content simple-block">
  <div class="inner">
    <div class="simple-block__text">
      <h2 class="simple-block__title">
        <span>
          組織
        </span>
      </h2>
      <div class="simple-block__detail">
        <ul class="simple-block__indent-list">
          <li>
            1. 健康管理を推進・実施するため、代表取締役社長を責任者とする健康推進チームを結成します。
          </li>
          <li>
            2. 健康推進チームは健康管理に関して年間あるいは中期的な実施計画を定め、衛生委員会等ともに連携し、実施計画を推進します。
          </li>
          <li>
            3. 健康推進チームは健康管理の実施状況について、定期的に経営会議に報告します。
          </li>
        </ul>
      </div>
    </div>
  </div>
</article>

<!--//-->
<article class="content simple-block">
  <div class="inner">
    <div class="simple-block__text">
      <h2 class="simple-block__title">
        <span>
          内容
        </span>
      </h2>
      <div class="simple-block__detail">
        <p>
          社員一人一人が心身の健康保持増進に自立的に取組めるように健康づくりを支援します。
        </p>
        <br>
        <h3>＜主な取組み＞</h3>
        <p>
          生活習慣病予防に向けた取組み<br>
          ・毎朝のラジオ体操の実施<br>
          ・社内スポーツ活動の実施（フットサル・バスケットボール・ダンス教室など）<br>
          ・毎年の健康診断、保健指導の実施　等<br>
          職場環境向上に向けた取組み<br>
          ・誕生日休暇制度<br>
          ・ノー残業デーの実施　等
        </p>
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
