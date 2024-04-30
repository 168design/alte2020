

<?php
/**
 * The template for displaying page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package alte2020
 */

 global $pageType;
 $pageType="life";

 get_header();
?>
	<section class="contents scroll-trg">
    <header class="content hero stby">
  <div class="hero-item">
    <div class="hero-item__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/life/index/hero-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/life/index/hero.jpg" />
      </picture>
    </div>
    <div class="inner">
      <div class="hero-item__text">
        <h2 class="hero-item__title">祈りのある生活</h2>
        <p class="hero-item__lead">想いに適う<br>祈りを得た人々</p>
      </div>
    </div>
  </div>
</header>

		<article class="content lead">

  <div class="inner">
    <p class="lead__text">
      <span>時代とともに住まいやライフスタイルは</span>
      <span>大きく変化してきました。</span>
      <span>祈りの場を必要としながら、</span>
      <span>それを如何に適えればよいのか。</span>
      <span>アルテマイスターでは</span>
      <span>それぞれの価値観や現代の空間に合う、</span>
      <span>新しい祈りのかたちをご提案しています。</span>
      <span>ご縁あって弊社製品と出会い、</span>
      <span>想いに適った祈りを得た方々を、</span>
      <span>ご紹介いたします。</span>
    </p>
  </div>

</article>

		<article class="content index">

  <ul class="index__list">

    <!--///-->
    <li class="index-item">
      <a href="/life/guest_01/" class="index-item__block">
        <div class="index-item__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/life/guest_01/index-thumb-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/life/guest_01/index-thumb.jpg" alt="本名 まり子さん" />
          </picture>
        </div>
        <div class="index-item__text">
          <h2 class="index-item__title">
            40年間かたときも離れず過ごした<br class="on-sp">夫と<br class="on-pc">「手のひらの厨子」。
          </h2>
          <p class="index-item__name">本名 まり子さん</p>
          <p class="index-item__num">stories.<b>1</b></p>
        </div>
      </a>
    </li>

    <!--///-->
    <li class="index-item">
      <a href="/life/guest_02/" class="index-item__block">
        <div class="index-item__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/life/guest_02/index-thumb-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/life/guest_02/index-thumb.jpg" alt="外山 恭子さん" />
          </picture>
        </div>
        <div class="index-item__text">
          <h2 class="index-item__title">
            求めていた“かたち”に<br>出会えました。
          </h2>
          <p class="index-item__name">外山 恭子さん</p>
          <p class="index-item__num">stories.<b>2</b></p>
        </div>
      </a>
    </li>

    <!--///-->
    <li class="index-item">
      <a href="/life/guest_03/" class="index-item__block">
        <div class="index-item__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/life/guest_03/index-thumb-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/life/guest_03/index-thumb.jpg" alt="ピコレ・フサエさん" />
          </picture>
        </div>
        <div class="index-item__text">
          <h2 class="index-item__title">
            パリのオフィスに似合う<br>シンプルな厨子。
          </h2>
          <p class="index-item__name">ピコレ・フサエさん</p>
          <p class="index-item__num">stories.<b>3</b></p>
        </div>
      </a>
    </li>

    <!--///-->
    <li class="index-item">
      <a href="/life/guest_04/" class="index-item__block">
        <div class="index-item__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/life/guest_04/index-thumb-pc.jpg" media="(min-width: 640px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/life/guest_04/index-thumb.jpg" alt="島津 太郎さん" />
          </picture>
        </div>
        <div class="index-item__text">
          <h2 class="index-item__title">
            「祈る」というより<br>「祈りたくなるような気分」です。
          </h2>
          <p class="index-item__name">島津 太郎さん</p>
          <p class="index-item__num">stories.<b>4</b></p>
        </div>
      </a>
    </li>

  </ul>

  <a href="/" class="toppage-btn">
  <span>TOPページ</span>
  <i></i>
</a>

</article>


<?php
get_footer();
