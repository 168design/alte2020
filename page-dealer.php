

<?php
/**
 * The template for displaying page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package alte2020
 */

 global $pageType;
 global $bgcolor;
 $pageType="dealer";

 get_header();
?>
	<section class="contents scroll-trg">
		<header class="content single-hero">
  <div class="inner">
    <div class="single-hero__text">
      <h2 class="single-hero__title">法人のみなさまへ</h2>
    </div>
  </div>
</header>

		<article class="content block be--login">
  <div class="inner">

    <div class="dealer-login">
      <p class="dealer-login__lead">
        法人のみなさま専用のマイページです。こちらからお入りください。
      </p>
      <a href="http://www.hoshi-os.com/login.php" target="_blank" class="dealer-login__login-btn"><span>ログイン</span></a>
    </div>

  </div>
</article>

<article class="content block be--new">
  <div class="inner">

    <h2 class="block__title">新規取引をご希望の方</h2>

    <p class="block__detail">
      弊社製品にご興味をおもちいただき、誠にありがとうございます。<br>
お取引に関するご案内をさせていただきますので、お電話にてお問合せください。
    </p>

    <div class="contact-info">
      <p>
        株式会社保志　本社営業部
      </p>

      <h2 class="contact-info__tel"><a class="tel-link" href="tel:0242270267">TEL:0242-27-0267</a></h2>

      <p>
        【受付時間】平日9：00～17：00
      </p>
    </div>

  </div>
</article>


<?php
get_footer();
