

<?php
/**
 * The template for displaying page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package alte2020
 */

 global $pageType;
 $pageType="recruit";

 get_header();
?>
	<section class="contents scroll-trg">
		<header class="content single-hero">
  <div class="inner">
    <div class="single-hero__text">
      <h2 class="single-hero__title">採用情報</h2>
    </div>
  </div>
</header>

		<div class="content blocks" >
<!--//-->
<article class="content block be--wish">
  <div class="inner">
    <div class="block__text">
      <p class="block__detail">
        <span>
          私たちが一緒に働きたいのは、<br class="on-sp">このような方です。
        </span>
      </p>
    </div>

    <ul class="wish-list">
      <li><p>チームワークを大切にできる方</p></li>
      <li><p>失敗を恐れず、新しいことにチャレンジできる方</p></li>
      <li><p>自ら進んで行動できる方</p></li>
      <li><p>人を喜ばせるのが好きな方</p></li>
      <li><p>感謝の気持ちを持っている方</p></li>
    </ul>

  </div>

</article>

<!--//-->
<article class="content block be--job">
  <div class="inner">
    <div class="block__text">
      <h2 class="block__title">
        <span>
          職種別仕事内容
        </span>
      </h2>
    </div>

    <dl class="job-list">
      <!--//-->
      <dt>
        <h3>製造職</h3>
      </dt>
      <dd>
        <p>
          仏壇、仏具、位牌および木工品の製造、生産工程の改善活動（生産性の検討・工程設計）、品質管理、製造技術、未来の為の技術開発（素材や新たな技法の研究、機械設計、自然環境を考えた塗料配合、金属特性研究）
        </p>
      </dd>

      <!--//-->
      <dt>
        <h3>営業職</h3>
      </dt>
      <dd>
        <p>
          販売店支援室 ・・・・ 全国の得意先（販売店）に対するルートセールス（販売支援活動）や新商品の紹介や販売店支援活動・販促物・パンフレットの作成<br>
          コールセンター ・・・電話応対・製品の発注から出荷の手配
        </p>
      </dd>

      <!--//-->
      <dt>
        <h3>事務職（製造・営業）</h3>
      </dt>
      <dd>
        <p>
          電話対応、来社応対、生産管理、各事業部の進捗確認、材料発注、在庫管理
        </p>
      </dd>

      <!--//-->
      <dt>
        <h3>グラフィック職</h3>
      </dt>
      <dd>
        <p>
          社内外へ向けたブランディングなどの販促ツール作成、製品カタログ作成や広告作成、WEBデザインなど
        </p>
      </dd>

      <!--//-->
      <dt>
        <h3>販売職</h3>
      </dt>
      <dd>
        <p>
          小売業務（接客・事務）<br>
          企画展の企画運営（企画の検討と運営、作家とのやりとり）、卸業務（製品の手配）
        </p>
      </dd>

      <!--//-->
      <dt>
        <h3>企画開発職</h3>
      </dt>
      <dd>
        <p>
          製品を生み出すまでの開発運営、マーケットリサーチ、企画、デザイン、設計、試作、特注品製造
        </p>
      </dd>


    </dl>

  </div>

</article>

<!--//-->
<article class="content block be--appli">
  <div class="inner">
    <div class="block__text">
      <h2 class="block__title">
        <span>
          応募方法
        </span>
      </h2>
      <p class="block__detail">
        <span>
          下記リンク先の「リクナビ」または「マイナビ」からエントリーしてください。エントリーして頂いた方には、追ってご連絡いたします。
        </span>
      </p>
    </div>
  </div>

</article>

<!--//-->
<article class="content block be--flow">
  <div class="inner">
    <div class="block__text">
      <h2 class="block__title">
        <span>
          採用までの流れ
        </span>
      </h2>
      <p class="block__detail">
        <span>
          アルテマイスターでは、お互いが理解し合える場になるよう面接を重視しています。<br>あなた自身を存分にアピールしてください。
        </span>
      </p>
    </div>

    <ol class="flow-list">

      <!--//-->
      <li>
        <div class="flow-list__text">
          <h3 class="flow-list__name">エントリー</h3>
          <p class="flow-list__detail">
            下記よりエントリーをお願いします。
          </p>
        </div>
        <div class="flow-list__arrow"></div>
      </li>

      <!--//-->
      <li>
        <div class="flow-list__text">
          <h3 class="flow-list__name">会社説明会</h3>
          <p class="flow-list__detail">
            人事担当者や現場で働く社員と直接話し、工場を見ることで、<br class="on-pc">仕事のイメージをつかんでください。
          </p>
        </div>
        <div class="flow-list__arrow"></div>
      </li>

      <!--//-->
      <li>
        <div class="flow-list__text">
          <h3 class="flow-list__name">1次選考</h3>
          <p class="flow-list__detail">
            現場役職者面接、筆記試験（一般常識・適性検査）、プレゼンテーション
          </p>
        </div>
        <div class="flow-list__arrow"></div>
      </li>

      <!--//-->
      <li>
        <div class="flow-list__text">
          <h3 class="flow-list__name">最終選考</h3>
          <p class="flow-list__detail">
            社長・役員面接、プレゼンテーション
          </p>
        </div>
        <div class="flow-list__arrow"></div>
      </li>

      <!--//-->
      <li>
        <div class="flow-list__text">
          <h3 class="flow-list__name">内　定</h3>
        </div>
      </li>

    </ol>

  </div>

</article>

<!--//-->
<article class="content block be--entry">
  <div class="inner">
    <div class="block__text">
      <p class="block__detail">
        <span>
          弊社へのエントリー及び会社説明会へのご予約は、こちらから受け付けております。皆さまからのエントリーを心よりお待ちしております。
        </span>
      </p>
    </div>
    <div class="block__btns">
      <a href="https://job.rikunabi.com/2023/company/r324200076/" target="_blank" class="block__link-btn be--bl">
        <span>リクナビはこちらから</span>
      </a>
      <a href="https://job.mynavi.jp/23/pc/search/corp88691/outline.html" target="_blank" class="block__link-btn be--bl">
        <span>マイナビはこちらから</span>
      </a>
    </div>
  </div>

</article>

</div>

    
<?php
get_footer();
