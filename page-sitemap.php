

<?php
/**
 * The template for displaying page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package alte2020
 */

 global $pageType;
 $pageType="sitemap";

 get_header();
?>
	<section class="contents scroll-trg">
    <?php
    while ( have_posts() ) :
      the_post();
    ?>
		<header class="content single-hero">
  <div class="inner">
    <div class="single-hero__text">
      <h2 class="single-hero__title">サイトマップ</h2>
    </div>
  </div>
</header>

		<div class="content link" >
  <div class="inner">

    <div class="link__block">
      <a href="/" class="be--main">TOP</a>
    </div>

    <div class="link__contents">

      <div class="link__block">
        <h2>製品紹介</h2>
        <ul class="link__list">
          <li>
            <a href="/products/" class="be--main">祈りのかたち TOP</a>
          </li>
          <li class="link__accordion">
            <a href="#" class="be--main be--opener">デザイン仏壇 白虹<i></i></a>
            <ul class="link__sub-list">
              <li>
                <a href="/products/butsudan_hakkou/" class="be--sub">TOP</a>
              </li>
              <li>
                <a href="/products/butsudan_hakkou/type-a/" class="be--sub">白虹A型</a>
              </li>
              <li>
                <a href="/products/butsudan_hakkou/type-b/" class="be--sub">白虹B型</a>
              </li>
              <li>
                <a href="/products/butsudan_hakkou/type-c/" class="be--sub">白虹C型</a>
              </li>
              <li>
                <a href="/products/butsudan_hakkou/type-c/" class="be--sub">白虹C型</a>
              </li>
              <li>
                <a href="/products/butsudan_hakkou/type-c/" class="be--sub">白虹C型</a>
              </li>
              <li>
                <a href="/products/butsudan_hakkou/type-c/" class="be--sub">白虹C型</a>
              </li>
              <li>
                <a href="/products/butsudan_hakkou/type-c/" class="be--sub">白虹C型</a>
              </li>
              <li>
                <a href="/products/butsudan_hakkou/type-c/" class="be--sub">白虹C型</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="/products/butsudan_jidai/" class="be--main">時代型仏壇</a>
          </li>
          <li>
            <a href="/products/zushi/" class="be--main">工房厨子</a>
          </li>
          <li>
            <a href="/products/ihai/" class="be--main">位牌</a>
          </li>
          <li>
            <a href="/products/butsugu/" class="be--main">仏具</a>
          </li>
          <li>
            <a href="/products/omamori/" class="be--main">おまもり</a>
          </li>
          <li>
            <a href="/products/hitotoki/" class="be--main">人と木</a>
          </li>
        </ul>
      </div>

      <div class="link__block">
        <h2>ものづくり</h2>
        <ul class="link__list">
          <li>
            <a href="/quality/" class="be--main">つくるこころ</a>
          </li>
          <li>
            <a href="/remake/" class="be--main">こころをつなぐ</a>
          </li>
        </ul>

        <h2>会社案内</h2>
        <ul class="link__list">
          <li>
            <a href="/company/" class="be--main">アルテマイスターのこと</a>
          </li>
          <li>
            <a href="/company/message/" class="be--main">代表メッセージ</a>
          </li>
          <li>
            <a href="/company/activity/" class="be--main">私たちの取り組み</a>
          </li>
          <li>
            <a href="/company/service/" class="be--main">事業のご紹介</a>
          </li>
          <li>
            <a href="/company/philosophy/" class="be--main">理念・沿革・会社概要</a>
          </li>
          <li>
            <a href="/company/healthpromotion/" class="be--main">健康経営の取り組み</a>
          </li>
          <li>
            <a href="/recruit/" class="be--main">採用情報</a>
          </li>
        </ul>
      </div>

      <div class="link__block">
        <h2>祈りのコンテンツ</h2>
        <ul class="link__list">
          <li>
            <a href="/life/" class="be--main">祈りのある生活</a>
          </li>
          <li>
            <a href="/pray/" class="be--main">祈りのかたちを創る</a>
          </li>
        </ul>

        <h2>施設のご案内</h2>
        <ul class="link__list">
          <li>
            <a href="/visit/" class="be--main">工場見学のご案内</a>
          </li>
          <li>
            <a href="/shop/" class="be--main">店舗のご案内</a>
          </li>
          <li>
            <a href="/showroom/" class="be--main">ショールームのご案内</a>
          </li>
        </ul>
      </div>

      <div class="link__block">
        <h2>お問い合わせ</h2>
        <ul class="link__list">
          <li>
            <a href="/contact/" class="be--main">お問い合わせ</a>
          </li>
          <li>
            <a href="/catalog/" class="be--main">カタログ請求</a>
          </li>
          <li>
            <a href="/reserve/" class="be--main">工場見学のお申し込み</a>
          </li>
        </ul>

        <ul class="link__list">
          <li>
            <a href="/news/" class="be--main">NEWS</a>
          </li>
          <li>
            <a href="/access/" class="be--main">アクセス</a>
          </li>
          <li>
            <a href="/dealer/" class="be--main">法人のみなさまへ</a>
          </li>
          <li>
            <a href="/webcatalog/" class="be--main">Webカタログ</a>
          </li>
          <li>
            <a href="/terms/" class="be--main">ご利用にあたって</a>
          </li>
          <li>
            <a href="/privacy/" class="be--main">プライバシーポリシー</a>
          </li>
        </ul>
      </div>

    </div>
  </div>
</div>

    <?php
    endwhile; // End of the loop.
    ?>
<?php
get_footer();
