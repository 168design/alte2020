

<?php
/**
 * The template for displaying page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package alte2020
 */

 global $pageType;
 $pageType="access";

 get_header();
?>
	<section class="contents scroll-trg">
		<header class="content single-hero">
  <div class="inner">
    <div class="single-hero__text">
      <h2 class="single-hero__title">アクセス</h2>
    </div>
  </div>
</header>

		<div class="content blocks" >
<!--//-->
<article class="content block be--route">
  <div class="inner">

    <div class="block__text">
      <dl class="route-list">

        <dt>お車の場合</dt>
        <dd>
          <p>
            ・高速道路をご利用の場合<br>
            　磐越自動車道 会津若松ICを降りて、<br>
            　国道118号線を田島方面へ (約20分)
          </p>
          <p>
            ・会津若松駅からの場合<br>
            　国道118号線を田島方面へ (約15分)
          </p>
        </dd>

        <dt>列車の場合</dt>
        <dd>
          <p>
            JR会津鉄道線下り [会津若松駅] より<br>
            [南若松駅] 下車<br>
            [南若松駅] より徒歩約15分
          </p>
        </dd>

        <dt>バスの場合</dt>
        <dd>
          <p>
            芦ノ牧温泉線 [会津若松駅] より<br>
            [運動公園前] 下車<br>
            [運動公園前] より徒歩約5分
          </p>
        </dd>
      </dl>
    </div>

    <figure class="block__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/access/map-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/access/map.jpg" alt="" />
      </picture>
    </figure>

  </div>


</article>

<!--//-->
<article class="content block be--parking">
  <div class="inner">

    <div class="block__text">
      <h2 class="block__title"><span>駐車場のご案内</span></h2>

      <p class="block__detail">
        <span>
          駐車場は大きな木が目印の門から入ってすぐの<br>
          [お客様駐車場] をご利用ください。<br>
          ※敷地内は徐行いただきますようお願いいたします。
        </span>
      </p>
    </div>

    <figure class="block__image">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/access/parking-pc.jpg" media="(min-width: 640px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/access/parking.jpg" alt="" />
      </picture>
    </figure>

  </div>
</article>

<!--//-->
<article class="content block be--address">
  <div class="inner">
    <p class="block__detail">
      <span>
        ■アルテマイスター 株式会社保志 本社<br>
        〒965-0844 <br class="on-sp">
        福島県会津若松市門田町一ノ堰村東40<br>
        TEL 0242-27-4380<br>
        FAX 0242-27-2865
      </span>
    </p>
  </div>

  <div class="block__map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2414.053136043598!2d139.91959320691672!3d37.460351038954315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x95bb0fcdf6d0c6ee!2z44Ki44Or44OG44Oe44Kk44K544K_44O8IOOIseS_neW_lw!5e0!3m2!1sja!2sjp!4v1585375436611!5m2!1sja!2sjp" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>

</article>

</div>


<?php
get_footer();
