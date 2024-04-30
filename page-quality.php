

<?php
/**
 * The template for displaying page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package alte2020
 */

 global $pageType;
 $pageType="quality";

 get_header();
?>
<div class="content hero-movie">
  <div class="hero-movie__bg"></div>
  <div class="hero-movie__area size-contain" data-srcsize-sp="1280/720" data-srcsize-pc="1280/720">
    <video class="hero-movie__video" data-id="default" muted playsinline controls>
      <source src="<?php echo get_template_directory_uri(); ?>/movie/quality.mp4">
    </video>
  </div>
  <a href="#" class="hero-movie__close-btn"></a>
</div>

	<section class="contents scroll-trg">
    <header class="content hero stby">
  <div class="hero-item">
    <div class="hero-item__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/quality/hero-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/quality/hero.jpg" alt="つくるこころ" />
      </picture>
      <a href="#" class="hero-item__play-btn">
        <i></i>
        <span>動画を再生</span>
      </a>
    </div>
    <div class="inner">
      <div class="hero-item__text">
        <h2 class="hero-item__title">つくるこころ</h2>
        <p class="hero-item__lead">ものづくりの特徴</p>
      </div>
    </div>

  </div>
</header>

		<article class="content lead">
  <div class="inner">
    <h2 class="lead__copy">
      <span>私たちが<br class="on-sp">お届けするものは、<br>祈りの心を納めるもの。</span>
    </h2>
    <p class="lead__text">
      1900年（明治33年）に創業。会津若松の地場産業の一つとして、<br class="on-pc">
      仏壇・仏具・位牌を主とした製品の製造・販売を手掛けています。<br>
      会津の地で仏壇・仏具・位牌をつくり続けて120年。<br class="on-pc">
      「私たちがお届けするものは、祈りの心を納めるもの。」それを心に留め、 <br class="on-pc">
      各工程の職人が技を尽くし、ひとつひとつ大切につくっています。
    </p>
  </div>

</article>

		<!--//-->
<article class="content block be--01">
  <div class="inner">

    <div class="block__header">
      <h3 class="block__copy">
        <span>先ず、<br>木の個性を<br>見極める。</span>
      </h3>

      <figure class="block__image be--1">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/quality/image-1-1-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/quality/image-1-1.jpg" alt="木材選定" />
        </picture>
      </figure>
    </div>

    <div class="block__body">
      <p class="block__detail">
        <span>
          私たちのものづくりは、製品に適した木材選びから始まります。外からは見えない木目などの特徴を、小口や木肌で見極め、原木を買付けます。木それぞれが持つ美しい木目が活かされるよう考慮しながら、丸太を切り出します。<br>
          この最初の仕事が製品の善し悪しに大きく影響します。
        </span>
      </p>

      <figure class="block__image be--2">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/quality/image-1-2-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/quality/image-1-2.jpg" alt="木材加工" />
        </picture>
      </figure>
    </div>

  </div>
</article>

<!--//-->
<article class="content block be--02">
  <div class="inner">

    <div class="block__header">
      <h3 class="block__copy">
        <span>手と目で<br>見る。</span>
      </h3>

      <figure class="block__image be--1">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/quality/image-2-1-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/quality/image-2-1.jpg" alt="木材加工" />
        </picture>
      </figure>
    </div>

    <div class="block__body">
      <p class="block__detail">
        <span>
          木は生きています。温度や湿度で伸縮し、同じ木材でも部位によって堅さや色味が異なります。職人たちはその微妙な差を、経験に裏打ちされた目と指先で感じ取り、完成時を考え、木材と対話をしながら加工と研磨をしていきます。
        </span>
      </p>

      <figure class="block__image be--2">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/quality/image-2-2-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/quality/image-2-2.jpg" alt="木材加工" />
        </picture>
      </figure>
      <figure class="block__image be--3">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/quality/image-2-3-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/quality/image-2-3.jpg" alt="木材加工" />
        </picture>
      </figure>
    </div>

  </div>
</article>

<!--//-->
<article class="content block be--03">
  <div class="inner">

    <div class="block__header">
      <h3 class="block__copy">
        <span>繊細な指遣いで、<br>より美しく彩る。</span>
      </h3>

      <figure class="block__image be--1">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/quality/image-3-1-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/quality/image-3-1.jpg" alt="会津蒔絵" />
        </picture>
      </figure>
    </div>

    <div class="block__body">
      <p class="block__detail">
        <span>
          描いた模様が乾ききらないうちに、金粉・色粉などを華やかに施す会津消粉蒔絵は、美しいグラデーションの「ぼかし」が特徴です。約400年前から受け継がれる伝統の技。筆の運び色の重ねなど、些細な指遣いが求められる仕事です。
        </span>
      </p>

      <figure class="block__image be--2">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/quality/image-3-2-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/quality/image-3-2.jpg" alt="会津蒔絵" />
        </picture>
      </figure>
      <figure class="block__image be--3">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/quality/image-3-3-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/quality/image-3-3.jpg" alt="会津蒔絵" />
        </picture>
      </figure>
    </div>

  </div>
</article>

<!--//-->
<article class="content block be--04">
  <div class="inner">

    <div class="block__header">
      <h3 class="block__copy">
        <span>伝統技術を<br>活かして。</span>
      </h3>

      <figure class="block__image be--1">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/quality/image-4-1-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/quality/image-4-1.jpg" alt="金箔技法" />
        </picture>
      </figure>
    </div>

    <div class="block__body">
      <p class="block__detail">
        <span>
          戦国時代より受け継がれてきた会津の工芸技術。江戸時代には京都より職人を招き、蒔絵技法とともに金箔の製造法が伝わりました。1万分の1ミリという、光が透けて見えるほど薄く繊細な金箔を扱うには、熟練を要します。
        </span>
      </p>

      <figure class="block__image be--2">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/quality/image-4-2-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/quality/image-4-2.jpg" alt="金箔技法" />
        </picture>
      </figure>
    </div>

  </div>
</article>

		<article class="content footer-banner-b">
  <a href="/visit/" class="footer-banner-b__block">
    <h2 class="footer-banner-b__title">
      <span>工場見学の</span><br class="on-pc"><span>ご案内</span>
    </h2>
    <div class="footer-banner-b__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/quality/visit-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/quality/visit.jpg" alt="工場見学のご案内" />
        </picture>
      </div>
  </a>
</article>


<?php
get_footer();
