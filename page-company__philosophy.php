

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
  <div class="hero-item be--philosophy">
    <div class="hero-item__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/philosophy/hero-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/company/philosophy/hero.jpg" alt="理念・沿革・会社概要" />
      </picture>
    </div>
    <div class="inner">
      <div class="hero-item__text">
        <h2 class="hero-item__title">理念・沿革<br>会社概要</h2>
        <p class="hero-item__lead">Company</p>
      </div>
    </div>
  </div>
</header>

<!--//-->
<article class="content single-block be--philosophy">
  <div class="inner">

    <div class="single-block__text">
      <h2 class="single-block__lead">
        社 是
      </h2>
      <p class="single-block__detail">
        我が社は豊かな心を創るをモットーに<br>限りなき企業努力を続け<br>世界の精神文化に貢献する
      </p>
    </div>
  </div>
</article>

<!--//-->
<article class="content single-block be--philosophy">
  <div class="inner">

    <div class="single-block__text">
      <h2 class="single-block__lead">
        社 訓
      </h2>
      <p class="single-block__detail">
        顧客のために存在し<br>社員とともに栄える
      </p>
    </div>
  </div>
</article>

<!--//-->
<article class="content single-block be--philosophy">
  <div class="inner">

    <div class="single-block__text">
      <h2 class="single-block__lead">
        沿 革
      </h2>
    </div>

    <table class="philosophy-history">
      <tr>
        <th>1900年</th>
        <td>創業</td>
      </tr>
      <tr>
        <th>1948年</th>
        <td>
          株式会社保志佛具店設立（現 株式会社保志）
          <div class="philosophy-history__images">
            <figure class="philosophy-history__image be--1955">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/philosophy/image-1955-pc.jpg" media="(min-width: 640px)">
                <img src="<?php echo get_template_directory_uri(); ?>/img/company/philosophy/image-1955.jpg" alt="昭和30年冬" />
              </picture>
              <figcaption>1955年冬</figcaption>
            </figure>
            <figure class="philosophy-history__image be--1958">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/philosophy/image-1958-pc.jpg" media="(min-width: 640px)">
                <img src="<?php echo get_template_directory_uri(); ?>/img/company/philosophy/image-1958.jpg" alt="昭和33年正月" />
              </picture>
              <figcaption>1958年正月</figcaption>
            </figure>
          </div>
        </td>
      </tr>
      <tr>
        <th>1963年</th>
        <td>本社屋落成（現 アルテマイスター保志）</td>
      </tr>
      <tr>
        <th>1969年</th>
        <td>第二工場落成　操業開始</td>
      </tr>
      <tr>
        <th>1972年</th>
        <td>研究所落成</td>
      </tr>
      <tr>
        <th>1973年</th>
        <td>資源不足に対処して会津若松黒森地区の山300町歩に<br class="on-pc">漆10万本計画の植樹開始</td>
      </tr>
      <tr>
        <th>1974年</th>
        <td>会津若松市門田地区に第4工場を設立</td>
      </tr>
      <tr>
        <th>1977年</th>
        <td>
          株式会社 保志　神戸支社開設<br>
          中小企業研究センター賞受賞　東北地方初・業界初の全国表彰<br>
          （現 グッドカンパニー大賞グランプリ）
        </td>
      </tr>
      <tr>
        <th>1979年</th>
        <td>福島県労働基準局長努力賞受賞</td>
      </tr>
      <tr>
        <th>1981年</th>
        <td>創業80周年を記念し岩浅松石「仏画展」を開催</td>
      </tr>
      <tr>
        <th>1984年</th>
        <td>福島県労働基準局長努力賞受賞</td>
      </tr>
      <tr>
        <th>2000年</th>
        <td>
          現門田敷地内に本社機能を統合<br>
          創業100周年記念本社ショールーム落成<br>
          「近代位牌」2000年グッドデザイン賞受賞
        </td>
      </tr>
      <tr>
        <th>2001年</th>
        <td>
          「パーソナル仏壇 ケント」2001年グッドデザイン賞受賞<br>
          「厨子 安壽」2001年グッドデザイン賞受賞
        </td>
      </tr>
      <tr>
        <th>2002年</th>
        <td>
          銀座ギャラリー厨子屋オープン
          <div class="philosophy-history__images">
            <figure class="philosophy-history__image be--2002">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/philosophy/image-2002-pc.jpg" media="(min-width: 640px)">
                <img src="<?php echo get_template_directory_uri(); ?>/img/company/philosophy/image-2002.jpg" alt="平成14年銀座ギャラリー 厨子屋オープン" />
              </picture>
              <figcaption>2002年<br>銀座ギャラリー厨子屋オープン</figcaption>
            </figure>
          </div>
        </td>
      </tr>
      <tr>
        <th>2004年</th>
        <td>スペース・アルテマイスター<br class="on-sp">オープン</td>
      </tr>
      <tr>
        <th>2008年</th>
        <td>
          会津若松市経営品質賞奨励賞受賞<br>
          こんな仏壇あったらいいなコンテスト2008金賞受賞（全宗協）<br>
          「ＷＡ－現代日本のデザインと調和の精神」展で<br class="on-pc">「デザイン厨子」がフランス、ハンガリー、ドイツほか欧州各国を巡回
        </td>
      </tr>
      <tr>
        <th>2010年</th>
        <td>
          アルテマイスター保志オープン
          <div class="philosophy-history__images">
            <figure class="philosophy-history__image be--2010">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/philosophy/image-2010-pc.jpg" media="(min-width: 640px)">
                <img src="<?php echo get_template_directory_uri(); ?>/img/company/philosophy/image-2010.jpg" alt="平成22年 アルテマイスター保志オープン" />
              </picture>
              <figcaption>2010年<br>アルテマイスター保志オープン</figcaption>
            </figure>
          </div>
        </td>
      </tr>
      <tr>
        <th>2011年</th>
        <td>会津本社にて展示会スタート、<br class="on-sp">以後毎年開催</td>
      </tr>
      <tr>
        <th>2012年</th>
        <td>
          グループ会社を株式会社保志に統合<br>
          東日本大震災復興祈念企画展　伊藤慶二「3.11 鎮魂」展を<br>スペース・アルテマイスターにて開催
          <div class="philosophy-history__images">
            <figure class="philosophy-history__image be--2012">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/philosophy/image-2012-pc.jpg" media="(min-width: 640px)">
                <img src="<?php echo get_template_directory_uri(); ?>/img/company/philosophy/image-2012.jpg" alt="平成24年 東日本大震災復興祈念企画展 伊藤慶二「3.11 鎮魂」展" />
              </picture>
              <figcaption>2012年<br>東日本大震災復興祈念企画展<br>伊藤慶二「3.11 鎮魂」展 </figcaption>
            </figure>
          </div>
        </td>
      </tr>
      <tr>
        <th>2014年</th>
        <td>会津若松市経営品質賞大賞受賞</td>
      </tr>
      <tr>
        <th>2015年</th>
        <td>神戸支社リニューアルオープン</td>
      </tr>
      <tr>
        <th>2018年</th>
        <td>神戸支社から西日本支社へ支社名変更</td>
      </tr>
      <tr>
        <th>2020年</th>
        <td>松屋銀座にショップオープン</td>
      </tr>

    </table>
  </div>
</article>

<!--//-->
<article class="content single-block be--philosophy">
  <div class="inner">
    <div class="single-block__text">
      <h2 class="single-block__lead">
        会社概要
      </h2>
    </div>
    <table class="philosophy-profile">
      <tr>
        <th>社　名</th>
        <td>株式会社 保志</td>
      </tr>
      <tr>
        <th>本社所在地</th>
        <td>〒965-0844 福島県会津若松市門田町一ノ堰村東40</td>
      </tr>
      <tr>
        <th>TEL</th>
        <td>0242-27-4380</td>
      </tr>
      <tr>
        <th>FAX</th>
        <td>0242-27-2865</td>
      </tr>
      <tr>
        <th>代表者</th>
        <td>代表取締役社長 保志 康徳</td>
      </tr>
      <tr>
        <th>創　業</th>
        <td>1900年（明治33年）</td>
      </tr>
      <tr>
        <th>設　立</th>
        <td>1948年（昭和23年）</td>
      </tr>
      <tr>
        <th>主な事業内容</th>
        <td>仏壇・仏具・位牌製造販売</td>
      </tr>
      <tr>
        <th>資本金</th>
        <td>6,080万円</td>
      </tr>
      <tr>
        <th>従業員数</th>
        <td>333名（2022年12月1日現在）</td>
      </tr>
      <tr>
        <th>売上高</th>
        <td>35億9,900万円（2021年度）</td>
      </tr>
      <tr>
        <th>取引銀行</th>
        <td>
          東邦銀行会津支店<br>
          常陽銀行会津支店<br>
          みずほ銀行会津支店<br>
          第四北越銀行会津支店<br>
          商工組合中央金庫
        </td>
      </tr>
    </table>
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
