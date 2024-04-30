

<?php
/**
 * The template for displaying page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package alte2020
 */

 global $pageType;
 $pageType="remake";

 get_header();
?>
	<section class="contents scroll-trg">
    <header class="content hero stby">
  <div class="hero-item">
    <div class="hero-item__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/remake/hero-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/remake/hero.jpg" alt="こころをつなぐ"/>
      </picture>
    </div>
    <div class="inner">
      <div class="hero-item__text">
        <h2 class="hero-item__title">こころをつなぐ</h2>
        <p class="hero-item__lead">仏壇のリメイク</p>
      </div>
    </div>
  </div>
</header>

		<article class="content lead">
  <div class="inner">
    <h2 class="lead__copy">
      <span>祈りを<br>受け継いでいく。</span>
    </h2>
    <p class="lead__text">
      <span>
        昔から使ってきた仏壇のかたちや大きさが、<br class="on-pc">これから使う人の生活や住まいに<br class="on-pc">必ずしも合うとは限りません。<br>
      </span>
      <br>
      <span>
        「綺麗にして子供に引き継ぎたい」<br class="on-pc">「マンションへの引越しに合わせ、小さなものにしたい」<br>
      </span>
      <br>
      <span>
        大切な人への想いがこもった仏壇を<br class="on-pc">次の世代へつなぐために、<br class="on-pc">お使いの仏壇を活かし、生まれ変わらせる<br class="on-pc">「仏壇のリメイク」という方法があります。<br class="on-pc">加工・塗装・組立など<br class="on-pc">仏壇製造で技を磨いた職人だからこそできる、<br class="on-pc">新しい祈りのスタイルです。
      </span>
    </p>
  </div>

</article>

		<article class="content about">
  <div class="inner">
    <div class="about__text">
      <h2 class="about__title">
        <span>
          「仏壇のリメイク」<br class="on-sp">とは
        </span>
      </h2>
      <p class="about__detail">
        愛着をもってお使いいただいた仏壇の材料を活かしながら、<br class="on-pc">お客様のご要望に合わせてデザインやサイズを変更することができます。
      </p>
    </div>
    <div class="about__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/remake/about-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/remake/about.jpg" alt="仏壇のリメイク" />
        </picture>
      </div>
  </div>

</article>

		<!--//-->
<article class="content block be--01">
  <div class="inner">

    <div class="block__header">
      <div class="block__text">
        <h3 class="block__copy">
          想いをかたちに
        </h3>
        <p class="block__detail">
          お住まいに合わせ小さくしたい、リビングに置けるモダンなデザインにしたいなど、お客様のご要望をお聞きし、図面を作成いたします。
        </p>
      </div>

      <figure class="block__image be--1">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/remake/image-1-1-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/remake/image-1-1.jpg" alt="デザイン" />
        </picture>
        <figcaption>ご要望に合わせ、デザインやサイズを図面に表します。</figcaption>
      </figure>
    </div>

  </div>
</article>

<!--//-->
<article class="content block be--02">
  <div class="inner">

    <div class="block__header">
      <div class="block__text">
        <h3 class="block__copy">
          想いを引き継ぐ
        </h3>
        <p class="block__detail">
          これまでお使いの仏壇を解体し、お客様が残したい部分や、再利用が可能な部分を見極めていきます。
        </p>
      </div>

      <figure class="block__image be--1">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/remake/image-2-1-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/remake/image-2-1.jpg" alt="解体" />
        </picture>
        <figcaption>仏壇をお預かりし、解体します。</figcaption>
      </figure>

    </div>

    <div class="block__body">

      <figure class="block__image be--2">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/remake/image-2-2-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/remake/image-2-2.jpg" alt="部品づくり" />
        </picture>
        <figcaption>解体したパーツを再利用できるか確認します。</figcaption>
      </figure>

    </div>

  </div>
</article>

<!--//-->
<article class="content block be--03">
  <div class="inner">

    <div class="block__header">
      <div class="block__text">
        <h3 class="block__copy">
          新しく生まれ変わる
        </h3>
        <p class="block__detail">
          長年使われてきた仏壇のため、素地の木の状態を確かめながら、足りないパーツは新たに作成し、再利用する部分にも補修や塗装を施し、同じ仕上りになるよう調整します。
        </p>
      </div>

      <figure class="block__image be--1">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/remake/image-3-1-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/remake/image-3-1.jpg" alt="木取り" />
        </picture>
        <figcaption>足りないパーツを新たに作成します。</figcaption>
      </figure>
    </div>

    <div class="block__body">

      <figure class="block__image be--2">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/remake/image-3-2-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/remake/image-3-2.jpg" alt="研磨作業" />
        </picture>
        <figcaption>古い塗装を剥がす<br class="on-sp">ため研磨をします。</figcaption>
      </figure>
      <figure class="block__image be--3">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/remake/image-3-3-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/remake/image-3-3.jpg" alt="塗装" />
        </picture>
        <figcaption>古い材料と新しい材料の色が合うように調整します。</figcaption>
      </figure>
      <figure class="block__image be--4">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/remake/image-3-4-pc.jpg" media="(min-width: 640px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/remake/image-3-4.jpg" alt="組み立て" />
        </picture>
        <figcaption>様々な職人の手によって、新しく生まれ変わったパーツを組立て完成です。</figcaption>
      </figure>
    </div>

  </div>
</article>

		<!--//-->
<article class="content koubou">
  <div class="koubou-link">
  <a class="koubou-link__btn" href="https://obutsudan-reform.com/" target="_blank"><span>お仏壇リフォーム工房</span><i><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon-link.svg" alt="" /></i></a>
</div>

</article>


<?php
get_footer();
