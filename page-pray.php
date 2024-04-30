

<?php
/**
 * The template for displaying page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package alte2020
 */

 global $pageType;
 $pageType="pray";

 get_header();
?>
	<section class="contents scroll-trg">
    <header class="content hero stby">
  <div class="hero-item">
    <div class="hero-item__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/pray/index/hero-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/pray/index/hero.jpg" />
      </picture>
    </div>
    <div class="inner">
      <div class="hero-item__text">
        <h2 class="hero-item__title">祈りの<br>かたちを創る</h2>
        <p class="hero-item__lead">アルテマイスターと共に<br>祈りのかたちを<br class="on-pc">創り出す人々</p>
      </div>
    </div>
  </div>
</header>

		<article class="content lead">

  <div class="inner">
    <p class="lead__text">
      <span>自然も人の心もバランスを失い、</span>
      <span>未来への不安が募る時代ですが、</span>
      <span>そのような日々を、よりよく生きるために、</span>
      <span>私たちはどうあるべきなのか。</span>
      <span>　</span>
      <span>その答えを見いだすために、</span>
      <span>アルテマイスターと共に、</span>
      <span>祈りのかたちを創り出す方々に、</span>
      <span>お話しを伺います。</span>
    </p>
  </div>

</article>

		<article class="content index">

  <ul class="index__list">

    <!--///-->
    <li class="index-item">
      <a href="/pray/guest_01/" class="index-item__block">
        <div class="index-item__image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/pray/guest_01/index-thumb.jpg" alt="vol.1 祈りの心を未来へ繋ぐ　山田　節子" />
        </div>
      </a>
    </li>

    <!--///-->
    <li class="index-item">
      <a href="/pray/guest_02/" class="index-item__block">
        <div class="index-item__image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/pray/guest_02/index-thumb.jpg" alt="vol.2 今日の祈りのかたちとは　内田 繁" />
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
