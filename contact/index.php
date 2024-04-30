

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

		<article class="content block be--call stby">
  <div class="inner">
    <h2 class="block__title">お電話で</h2>

    <div class="call-info">
      <div class="call-info__tel">
        <p class="call-info__label">
          アルテマイスターお客様相談窓口
        </p>
        <p class="call-info__num">
          <i><img src="<?php echo get_template_directory_uri(); ?>/img/common/freedial.svg" /></i>
          <span>0120-861-900</span>
        </p>
      </div>
      <p class="call-info__note">
        【受付時間】 平日 9:00〜17:00<br>
        ※お客様からいただきましたお電話は、お申し出内容を正確にうけたまわるために、録音させていただいております。
      </p>
    </div>
  </div>
</article>

		<article class="content block be--mail stby">
  <div class="inner">
    <h2 class="block__title">メールで</h2>
    <ul class="mail-ctg">
      <li><a href="#" class="mail-ctg__tab be--contact cur">お問い合わせ</a></li>
      <li><a href="#" class="mail-ctg__tab be--catalog">カタログ<br class="on-sp">請求</a></li>
      <li><a href="#" class="mail-ctg__tab be--visit">工場見学<br class="on-sp">お申し込み</a></li>
    </ul>
  </div>

  <div class="mail-block">
    <div class="inner">
     
       <article class="mail-form be--contact stby">
  <div class="mail-form-item be--lead">
    <p class="mail-form-item__note">
      以下のフォームに必要事項をご記入の上、送信してください。<br class="on-pc">7営業日ほどで担当営業よりご連絡します。<br>
      <small>
        ※土・日・祝日等にメールをいただいた場合や、ご質問内容によっては、回答までに日数をいただく場合がございますので、ご了承ください。<br>
        <br>
        ※セールスを目的としたメッセージは固くお断りいたします。
      </small>
    </p>
    <p class="mail-form-item__err">入力内容に漏れがあるか、内容が間違っています。</p>
  </div>

  <form>

    <div class="mail-form-item be--name">
      <p class="mail-form-item__tag be--required">必須</p>
      <h3>お名前</h3>
      <div class="mail-form-item__input-area">
        <label class="on-pc">姓　</label>
        <input type="text" name="lname" placeholder="姓">
        <label class="on-pc">名　</label>
        <input type="text" name="fname" placeholder="名">
        <p class="mail-form-item__err">お名前をご入力ください。</p>
      </div>
    </div>

    <div class="mail-form-item be--kana">
      <p class="mail-form-item__tag be--required">必須</p>
      <h3>フリガナ</h3>
      <div class="mail-form-item__input-area">
        <label class="on-pc">セイ</label>
        <input type="text" name="lkana" placeholder="セイ">
        <label class="on-pc">メイ</label>
        <input type="text" name="fkana" placeholder="メイ">
        <p class="mail-form-item__err">フリガナをご入力ください。</p>
      </div>
    </div>

    <div class="mail-form-item be--age">
      <p class="mail-form-item__tag be--required">必須</p>
      <h3>年代</h3>
      <div class="mail-form-item__input-area">
        <div class="mail-form-item__radio-list">
          <p class="mwform-radio-field">
            <label>
        			<input type="radio" name="age" value="10代">
        			<span class="mwform-radio-field-text">10代</span>
        		</label>
          </p>
          <p class="mwform-radio-field">
            <label>
        			<input type="radio" name="age" value="20代">
        			<span class="mwform-radio-field-text">20代</span>
        		</label>
          </p>
          <p class="mwform-radio-field">
            <label>
        			<input type="radio" name="age" value="30代">
        			<span class="mwform-radio-field-text">30代</span>
        		</label>
          </p>
          <p class="mwform-radio-field">
            <label>
        			<input type="radio" name="age" value="40代">
        			<span class="mwform-radio-field-text">40代</span>
        		</label>
          </p>
          <p class="mwform-radio-field">
            <label>
        			<input type="radio" name="age" value="50代">
        			<span class="mwform-radio-field-text">50代</span>
        		</label>
          </p>
          <p class="mwform-radio-field">
            <label>
        			<input type="radio" name="age" value="60代">
        			<span class="mwform-radio-field-text">60代</span>
        		</label>
          </p>
          <p class="mwform-radio-field">
            <label>
        			<input type="radio" name="age" value="70代〜">
        			<span class="mwform-radio-field-text">70代〜</span>
        		</label>
          </p>
        </div>
        <p class="mail-form-item__err">年代を選択してください。</p>
      </div>
    </div>

    <div class="mail-form-item be--postcode">
      <p class="mail-form-item__tag be--optional">任意</p>
      <h3>郵便番号<span class="on-pc"><br><small>(ハイフンなし)</small></span></h3>
      <div class="mail-form-item__input-area">
        <input type="text" name="postcode" maxlength='7' placeholder="例）9650844（ハイフンなし）">
      </div>
    </div>

    <div class="mail-form-item be--address">
      <p class="mail-form-item__tag be--optional">任意</p>
      <h3>ご住所</h3>
      <div class="mail-form-item__input-area">
        <input type="text" name="address" placeholder="例）福島県会津若松市門田町一ノ堰村東40">
      </div>
    </div>

    <div class="mail-form-item be--tel">
      <p class="mail-form-item__tag be--optional">任意</p>
      <h3>お電話番号</h3>
      <div class="mail-form-item__input-area">
        <input type="text" name="tel" placeholder="例）0242274380（ハイフンなし）">
      </div>
    </div>

    <div class="mail-form-item be--mail">
      <p class="mail-form-item__tag be--required">必須</p>
      <h3>メールアドレス</h3>
      <div class="mail-form-item__input-area">
        <input type="text" name="email" placeholder="例）abc123@abc.co.jp">
        <p class="mail-form-item__err">正しいメールアドレスを入力してください。</p>
      </div>
    </div>
    <div class="mail-form-item be--mail2">
      <p class="mail-form-item__tag be--required on-pc">必須</p>
      <h3 class="on-pc">メールアドレス確認</h3>
      <div class="mail-form-item__input-area">
        <input type="text" name="email2" placeholder="もう一度ご入力ください。">
        <p class="mail-form-item__err">正しいメールアドレスを入力してください。</p>
      </div>
    </div>

    <div class="mail-form-item be--ctg">
      <p class="mail-form-item__tag be--required">必須</p>
      <h3>お問い合わせ事項</h3>
      <div class="mail-form-item__input-area">
        <select name="ctg">
          <option value="">選択してください</option>
          <option value="製品について知りたい">製品について知りたい</option>
          <option value="最寄りの取扱店を知りたい">最寄りの取扱店を知りたい</option>
          <option value="その他">その他</option>
        </select>
        <p class="mail-form-item__err">お問い合わせ事項を選択してください。</p>
      </div>
    </div>

    <div class="mail-form-item be--message">
      <p class="mail-form-item__tag be--required">必須</p>
      <h3>お問い合わせ内容</h3>
      <div class="mail-form-item__input-area">
        <textarea name="message" rows="10" cols="60" placeholder="例）製品の実物を確認したいのですが、販売店など売っているお店を教えていただけないでしょうか。"></textarea>
        <p class="mail-form-item__err">お問い合わせ内容をご入力ください。</p>
      </div>
    </div>

    <div class="mail-form-item be--file">
      <p class="mail-form-item__tag be--optional">任意</p>
      <h3>添付資料</h3>
      <div class="mail-form-item__input-area">
        <input type="file" name="file" id="file">
        <span data-mwform-file-delete="file" class="mwform-file-delete" style="visibility: visible;">×</span>
        <label for="file">ファイルを選択</label>
        <p class="mail-form-item__note">※上限◯MBまで　※拡張子：◯◯データのみ</p>
      </div>
    </div>

    <div class="mail-form-item be--policy">
      <p class="mail-form-item__tag be--required">必須</p>
      <h3>個人情報の取り扱いについて</h3>
      <div class="mail-form-item__input-area">
        <p class="mail-form-item__note">弊社事業に対するお問い合わせの対応をするために個人情報をいただいておりますが、その他の目的で外部に流出するようなことは一切ございません。<br>
  弊社の個人情報保護については下記の内容をご覧ください。情報を正しくご提出いただけない場合はお問い合わせに対するご回答を受けられない場合があります。</p>
        <div class="mail-form-item__scroll-text">
          <p>
            個人情報の取得目的について<br>
            当社では、次の目的のために必要な範囲内で、お客様に個人情報の提供お願いすることがあります。<br>
            1.　お問合せいただいた内容へのご回答のため<br>
            2.　商品・サービスのカタログ発送や関連情報提供のため<br>
            <br>
            個人情報の第三者提供について<br>
            お客様の個人情報を、お客様ご自身の同意なしに業務委託先以外の第三者に開示・提供することはありません。ただし、法令により開示を求められた場合、又は裁判所、警察等の公的機関から開示を求められた場合には、お客様ご自身の同意なく個人情報を開示・提供することがあります。<br>
            <br>
            個人情報の管理について<br>
            お客様がご提供された個人情報は、厳重な管理体制のもとで保持し、合理的な範囲内でセキュリティの強化に努めます。<br>
            <br>
            個人情報の開示・訂正・削除について<br>
            お客様がご自身の個人情報の開示、訂正、削除をご希望される場合は、合理的な範囲内で速やかに対応いたします。<br>
            <br>
            プライバシーポリシーの改訂について<br>
            当社は本プライバシーポリシーの内容を改訂する場合がこざいます。この場合、速やかに当Webサイトに掲載いたします。
          </p>
        </div>
        <label>
    			<input type="checkbox" name="policy[data][]" value="上記のプライバシーポリシーを読んだ上で同意します。">
    			<span class="mwform-checkbox-field-text">上記のプライバシーポリシーを読んだ上で同意します。</span>
    		</label>
        <p class="mail-form-item__err">「同意する」にチェックを入れてください。</p>
      </div>
    </div>

    <ul class="mail-form-item be--btns">
      <li>
        <input type="submit" name="submitConfirm" value="お問い合わせ内容の確認"><i></i>
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
