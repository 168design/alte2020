

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
 $pageType="contact";
 $bgcolor="lgrey";

 get_header();
?>
	<section class="contents scroll-trg">
		<header class="content single-hero stby">
  <div class="inner">
    <div class="single-hero__text">
      <h2 class="single-hero__title">お問い合わせ</h2>
    </div>
  </div>
</header>

		<article class="content block be--confirm stby">
  <div class="confirm-block">
    <div class="inner">
      
        <article class="mail-form stby">

  <form>
    <div class="mail-form-item be--lead">
      <p class="mail-form-item__note">
        以下の内容で間違いがなければ、「送信する」ボタンを押してください。
      </p>
    </div>

    <div class="mail-form-item be--name">
      <h3>お名前</h3>
      <p class="mail-form-item__confirm">保志　太郎</p>
    </div>

    <div class="mail-form-item be--kana">
      <h3>フリガナ</h3>
      <p class="mail-form-item__confirm">保志　太郎</p>
    </div>

    <div class="mail-form-item be--age">
      <h3>年代</h3>
      <p class="mail-form-item__confirm">保志　太郎</p>
    </div>

    <div class="mail-form-item be--postcode">
      <h3>郵便番号</h3>
      <p class="mail-form-item__confirm">保志　太郎</p>
    </div>

    <div class="mail-form-item be--address">
      <h3>ご住所</h3>
      <p class="mail-form-item__confirm">保志　太郎</p>
    </div>

    <div class="mail-form-item be--tel">
      <h3>お電話番号</h3>
      <p class="mail-form-item__confirm">保志　太郎</p>
    </div>

    <div class="mail-form-item be--mail">
      <h3>メールアドレス</h3>
      <p class="mail-form-item__confirm">保志　太郎</p>
    </div>

    <div class="mail-form-item be--ctg">
      <h3>お問い合わせ事項</h3>
      <p class="mail-form-item__confirm">保志　太郎</p>
    </div>

    <div class="mail-form-item be--message">
      <h3>お問い合わせ内容</h3>
      <p class="mail-form-item__confirm">保志　太郎</p>
    </div>

    <div class="mail-form-item be--file">
      <h3>添付資料</h3>
      <p class="mail-form-item__confirm">保志　太郎</p>
    </div>

    <ul class="mail-form-item be--btns">
      <li>
        <input id="back" type="submit" name="back" value="戻る"><label for="back"><span>戻る</span>
        <i></i></label>
      </li>
      <li>
        <input id="submit" type="submit" name="submit" value="送信する"><label for="submit"><span>送信する</span>
        <i></i></label>
      </li>
    </ul>


  </form>
</article>

      
    </div>
  </div>
</article>


		<?php
    get_template_part( '../common-parts/contents-footer' );
    ?>
	</section><!-- /contents -->
<?php
get_footer();
