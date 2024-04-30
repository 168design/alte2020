<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alte2020
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	//return;
}
?>

<div class="nav">
  <ul class="nav__main-menu on-pc">
    <li><a href="/">TOP</a></li>
    <li><a href="/products/">製品紹介</a></li>
    <li><a href="/quality/">ものづくり</a></li>
    <li><a href="/company/">会社案内</a></li>
    <li><a href="/contact/">お問い合わせ</a></li>
  </ul>
  <div class="nav__fix">
    <a href="#" class="nav-hbg">
      <div class="nav-hbg__hbg"><svg version="1.1" id="hbg-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" width="67" height="36" viewBox="0 0 67 36" style="enable-background:new 0 0 67 36;" xml:space="preserve">
<style type="text/css">
	.hbg-svg__path{fill:#FFFFFF;}
</style>
<g id="sp_menu_3本" transform="translate(-633 -60)">
	<rect id="長方形_1440" x="633" y="60" class="hbg-svg__path" width="67" height="3"/>
	<rect id="長方形_1441" x="633" y="77" class="hbg-svg__path" width="67" height="3"/>
	<rect id="長方形_1442" x="633" y="93" class="hbg-svg__path" width="67" height="3"/>
</g>
</svg>
<span class="nav-hbg__lbl">MENU</span></div>
      <div class="nav-hbg__close"><svg version="1.1" id="close-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" width="67px" height="38px" viewBox="0 0 67 38" style="enable-background:new 0 0 67 38;" xml:space="preserve">
<style type="text/css">
	.close-svg__path{fill:#575757;}
</style>
<polygon class="close-svg__path" points="1.4,0.07 67,35.28 65.6,37.93 0,2.72 "/>
<polygon class="close-svg__path" points="67,2.72 1.39,37.89 0,35.25 65.61,0.07 "/>
</svg>
<span class="nav-hbg__lbl">CLOSE</span></div>
    </a>
    <div class="lang-selector">
  <ul class="lang-selector__list">
    <li><a href="#" class="cur">JP</a></li>
    <li><a href="#">EN</a></li>
    <li><a href="#">CN</a></li>
    <li><a href="#">TW</a></li>
  </ul>
</div>

  </div>

  <div class="nav__cover"></div>

  <div class="nav__box">
    <div class="nav__header">
      <div class="lang-selector">
  <ul class="lang-selector__list">
    <li><a href="#" class="cur">JP</a></li>
    <li><a href="#">EN</a></li>
    <li><a href="#">CN</a></li>
    <li><a href="#">TW</a></li>
  </ul>
</div>

    </div>

    <div class="nav__block">
      <!-- main nav -->
      <nav class="nav__list be--main">
        <div class="nav__mask">
          <div class="nav__inner">
            <a href="/" class="nav-item be--main">
              <h2>TOP</h2>
            </a>
            <hr>
            <a href="/products/" class="nav-item be--main">
              <h3>製品紹介</h3>
            </a>
            <hr>
            <a href="/quality/" class="nav-item be--main">
              <h3>ものづくり</h3>
            </a>
            <hr>
            <a href="/company/" class="nav-item be--main">
              <h3>会社案内</h3>
            </a>
            <hr>
            <a href="/visit/" class="nav-item be--sub">
              <h4>工場見学のご案内</h4>
            </a>
            <a href="/shop/" class="nav-item be--sub">
              <h4>店舗のご案内</h4>
            </a>
            <a href="/showroom/" class="nav-item be--sub">
              <h4>ショールームのご案内</h4>
            </a>
            <a href="/news/" class="nav-item be--sub">
              <h4>NEWS</h4>
            </a>
            <a href="/access/" class="nav-item be--sub">
              <h4>アクセス</h4>
            </a>
            <a href="/recruit/" class="nav-item be--sub">
              <h4>採用情報</h4>
            </a>
            <a href="/dealer/" class="nav-item be--sub">
              <h4>法人のみなさまへ</h4>
            </a>
            <a href="/sitemap/" class="nav-item be--sub">
              <h4>サイトマップ</h4>
            </a>
            <hr class="be--hide">
            <a href="/contact/" class="nav-item be--contact be--banner">
              <h3>お問い合わせ・カタログ請求</h3>
            </a>
            <a href="/webcatalog/" class="nav-item be--catalog be--banner">
              <i><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon-catalog.svg" /></i>
              <h3>Webカタログ</h3>
            </a>


            
          </div>
        </div>
      </nav>
    </div>
  </div>


</div>

