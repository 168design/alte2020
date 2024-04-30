

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
  <div class="hero-item be--activity">
    <div class="hero-item__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/activity/hero-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/company/activity/hero.jpg" alt="私たちの取り組み" />
      </picture>
    </div>
    <div class="inner">
      <div class="hero-item__text">
        <h2 class="hero-item__title">私たちの<br>取り組み</h2>
        <p class="hero-item__lead">Action</p>
      </div>
    </div>
  </div>
</header>

<!--//-->
<article class="content single-block be--activity">
  <div class="inner">
    <div class="single-block__text">
      <h2 class="single-block__lead">
        いのちある木を<br class="on-sp">余すことなく
      </h2>
      <p class="single-block__detail">
        私たちのものづくりは原木の買い付けから始まり、木地加工や組み立てまでの全てを自社工場で行っています。必要な寸法に合わせて部材を切り出す「木取り」と呼ばれる工程では、どうしても使いきれない「余材（よざい）」が出てしまいます。また、長年使われずに倉庫で眠っている木は時間が経つほどに朽ちていき、どちらも「もったいない」と感じていました。そこから、いのちある木を余すことなく使いたいという思いで勉強会を始め、オリジナルブランド「人と木」が生まれました。日々のものづくりで感じている木目の美しさ、香りや温もりなど、木の魅力が伝わるように創意工夫を重ねています。
      </p>
    </div>
    <div class="single-block__images">
      <figure class="single-block__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-1-1-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-1-1.jpg" alt="人と木" />
        </picture>
        <figcaption>人と木製品シリーズ</figcaption>
      </figure>
      <figure class="single-block__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-1-2-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-1-2.jpg" alt="木取り" />
        </picture>
        <figcaption>部材を切り出す工程「木取り」</figcaption>
      </figure>
      <figure class="single-block__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-1-3-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-1-3.jpg" alt="余材" />
        </picture>
        <figcaption>工程で出る「余材（よざい）」</figcaption>
      </figure>
    </div>
  </div>
</article>

<!--//-->
<article class="content single-block be--activity">
  <div class="inner">
    <div class="single-block__text">
      <h2 class="single-block__lead">
        漆の森を守る
      </h2>
      <p class="single-block__detail">
        「このまま使い続けるだけでは漆不足になる。<br>　今から自分たちで始めてみよう。」<br>
        当時、弊社は、漆を基幹産業としてきた会津の資源と未来を思い、会津若松市黒森地区の方へ漆の木の植栽を依頼しました。木が育ち、漆が採れるようになるには最低でも10～15年はかかり、その間、下草刈りや追肥、見回りなど、人手と手間がかかります。試行錯誤を重ねて約半世紀、今では漆が採れるまでに育ち、大きな森になりました。先人たちの夢の結晶を、今も大切に守っています。
      </p>
    </div>
    <div class="single-block__images">
      <figure class="single-block__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-2-1-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-2-1.jpg" alt="漆植栽記念碑" />
        </picture>
        <figcaption>漆植栽を記念した石碑</figcaption>
      </figure>
      <figure class="single-block__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-2-2-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-2-2.jpg" alt="漆の森" />
        </picture>
        <figcaption>漆搔きの様子</figcaption>
      </figure>
    </div>
  </div>
</article>

<!--//-->
<article class="content single-block be--activity">
  <div class="inner">
    <div class="single-block__text">
      <h2 class="single-block__lead">
        木を育てる
      </h2>
      <p class="single-block__detail">
        木は限りある資源です。その貴重な木でものづくりをするメーカーとして、未来へ向けて出来ることを考え、2006年から岩手県の森に木を植え始めました。寒さが厳しい北東北の木はゆっくりと成長するため木目が詰まって美しく、耐久性にも優れ、私たちのものづくりには欠かせません。地元林業業者と協力し、ケヤキ、エンジュ、クリなど350本以上の木々が無事に育つよう、毎年草刈りを行い、成長を見守っています。自分たちが使う素材への愛着と、自然に感謝する心を育む社員教育の機会としても、大切に取り組んでいます。
      </p>
    </div>
    <div class="single-block__images">
      <figure class="single-block__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-3-1-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-3-1.jpg" alt="植樹" />
        </picture>
        <figcaption>倒れないよう若い木を支柱に結ぶ</figcaption>
      </figure>
      <figure class="single-block__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-3-2-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-3-2.jpg" alt="植樹" />
        </picture>
        <figcaption>下草刈りの様子</figcaption>
      </figure>
    </div>
  </div>
</article>

<!--//-->
<article class="content single-block be--activity">
  <div class="inner">
    <div class="single-block__text">
      <h2 class="single-block__lead">
        手仕事の未来に向けて
      </h2>
      <p class="single-block__detail">
        技術継承や人材確保は産地の大きな課題であり、私たちも例外ではありません。経験に裏打ちされたベテラン職人の技術を次の世代へ繋ぐべく、地元の研究機関らと協力し、数年前からデジタル製造技術の研究開発に取り組んでいます。効率化や安定性ということだけでなく、手仕事とデジタル技術の良いところを組合せ、工芸と工業の新しい可能性を模索したいという、ものづくりへの純粋な好奇心でもあります。工芸の基本にある「人の手が生み出す美しさ」を胸に、更なる発展に向け、挑戦を続けています。
      </p>
    </div>
    <div class="single-block__images">
      <figure class="single-block__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-4-1-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-4-1.jpg" alt="木材加工" />
        </picture>
        <figcaption>彫刻機械を用いた実験</figcaption>
      </figure>
      <figure class="single-block__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-4-2-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-4-2.jpg" alt="木材加工" />
        </picture>
        <figcaption>プログラム制御による木材加工の様子</figcaption>
      </figure>
    </div>
  </div>
</article>

<!--//-->
<article class="content single-block be--activity">
  <div class="inner">
    <div class="single-block__text">
      <h2 class="single-block__lead">
        会津塗を<br>発展させるために
      </h2>
      <p class="single-block__detail">
        会津若松市で漆を使ったものづくりを行う「ユーアイヅ」「三義漆器店」「アルテマイスター」が手を取り合い、新しい可能性を探るべく、2017年に「会津UV漆グループ」を立ち上げました。約2週間かかる漆の乾燥時間が、紫外線（UV）で硬くなる漆を含む「紫外線硬化型漆塗料（UV漆塗料）」ではわずか約1分で済むことから、生産性の大幅な向上が期待できます。また、塗膜が硬いため傷が付きにくく、金属やガラスなど多様な素材と相性が良いという特徴があります。三社がこれまでに培ってきた知恵や工夫、技術を持ち寄り、お互いに学びながら、新たな商品開発を目指し、活動を続けています。
      </p>
    </div>
    <div class="single-block__images">
      <figure class="single-block__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-5-1-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-5-1.jpg" alt="会津塗" />
        </picture>
        <figcaption>UV漆塗装を施したオートバイのオイルタンク</figcaption>
      </figure>
      <figure class="single-block__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-5-2-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-5-2.jpg" alt="会津塗" />
        </picture>
        <figcaption>会津若松城・廊下橋の補修に伴い、擬宝珠の塗装に採用される</figcaption>
      </figure>
    </div>
  </div>
</article>

<!--//-->
<article class="content single-block be--activity">
  <div class="inner">
    <div class="single-block__text">
      <h2 class="single-block__lead">
        祈りを身近なものに
      </h2>
      <p class="single-block__detail">
        「がんばってね」「ありがとう」「いってらっしゃい」など、誰かを想うことは祈りに通じています。暮らしの中に溢れている「小さな祈り」は決まった信仰に限ったものではなく、すべての人に中にあるポジティブな思いです。その「小さな祈り」が多くの人に広まり、身近な「行為」となって優しい社会がつくられることを願い、供養業界の有志が手を取り合い、2015年3月3日に「PRAY  for（ONE）」プロジェクトを発足しました。願い事を書いた紙で鶴を折り、息を吹き込む「祈り鶴」ワークショップやイベントを各地で開催し、新しい祈りの文化づくりに取り組んでいます。
      </p>
    </div>
    <div class="single-block__images">
      <figure class="single-block__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-6-1-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-6-1.jpg" alt="PRAY for (ONE)" />
        </picture>
        <figcaption>祈り鶴を折る参加者</figcaption>
      </figure>
      <figure class="single-block__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-6-2-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/activity/image-6-2.jpg" alt="PRAY for (ONE)" />
        </picture>
        <figcaption>ホテル日航新潟での祈り鶴ワークショップ</figcaption>
      </figure>
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
