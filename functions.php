<?php
/**
 * alte2020 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package alte2020
 */

if ( ! function_exists( 'alte2020_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function alte2020_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on alte2020, use a find and replace
		 * to change 'alte2020' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'alte2020', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'alte2020' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'alte2020_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'alte2020_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function alte2020_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'alte2020_content_width', 640 );
}
add_action( 'after_setup_theme', 'alte2020_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function alte2020_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'alte2020' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'alte2020' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'alte2020_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function alte2020_scripts() {
	wp_enqueue_style( 'alte2020-style', get_stylesheet_uri() );

	wp_enqueue_script( 'alte2020-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'alte2020-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
//add_action( 'wp_enqueue_scripts', 'alte2020_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}





/*
** custom
*/


/*
* 親子関係のある固定ページで子ページに使用するテンプレートを親名も入ったものにする
* https://macoblog.com/wp-koteipage-kaisou/
*/
add_filter('page_template_hierarchy', 'my_page_templates');
function my_page_templates($templates) {
    global $wp_query;

    $template = get_page_template_slug();
    $pagename = $wp_query->query['pagename'];

    if ($pagename && ! $template) {
        $pagename = str_replace('/', '__', $pagename);
        $decoded = urldecode($pagename);

        if ($decoded == $pagename) {
            array_unshift($templates, "page-{$pagename}.php");
        }
    }

    return $templates;
}


/** 投稿フォームの<p><br>などの自動整形をしない **/
//remove_filter('the_content', 'wpautop');// 記事の自動整形を無効にする
//remove_filter('the_excerpt', 'wpautop');// 抜粋の自動整形を無効にする

/**
 * MW WP FORMだけ。
 * @param bool $has_wpautop wpautop が有効かどうか
 * @return string $view_flg どの画面かを識別するフラグ input|confirm|complete
 */
function my_mwform_content_wpautop( $has_wpautop, $view_flg ) {
    // 入力画面では自動改行をしない例
    if ( $view_flg === 'input' ) {
        return false;
    }
    return $has_wpautop;
}
add_filter( 'mwform_content_wpautop_mw-wp-form-138', 'my_mwform_content_wpautop', 10, 2 );

/**
 * Delete tag with wp_head().
 */
//remove_action('wp_head', '_wp_render_title_tag', 1);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
//remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'wp_generator');
//remove_action('wp_head', 'rel_canonical');
//remove_action('wp_head', 'index_rel_link');
//remove_action('wp_head', 'parent_post_rel_link', 10, 0);
//remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_print_styles',8);
remove_action('wp_head', 'wp_print_head_scripts',9);
remove_action('wp_head', 'wp_print_footer_scripts',20);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');



/**
 * Delete tag with wp_footer().
 */
remove_action('wp_footer','wp_oembed_add_host_js');
remove_action('wp_footer','wp_print_styles',8);
function register_javascript() {
	wp_deregister_script('wp-embed');
	wp_deregister_script('comment-reply');
}
add_action('wp_enqueue_scripts', 'register_javascript');
/**
* ↑133行目
* add_action( 'wp_enqueue_scripts', '**_scripts' );
* をコメントアウト
*/


// Customize admin menu
function remove_admin_menus() {
  //if (!current_user_can('level_10')) {
    global $menu;
    //unset($menu[2]);        // ダッシュボード
    //unset($menu[5]);        // 投稿
    //unset($menu[10]);       // メディア
    //unset($menu[20]);       // 固定ページ
    //unset($menu[25]);       // コメント
    //unset($menu[60]);       // 外観
    //unset($menu[65]);       // プラグイン
    //unset($menu[70]);       // ユーザー
    //unset($menu[75]);       // ツール
    //unset($menu[80]);       // 設定
  //}
}
//add_action('admin_menu', 'remove_admin_menus');


/**
 * taxonomies and terms
 */
// （タクソノミーと）タームのリンクを取得する
// https://wpdocs.osdn.jp/関数リファレンス/get_the_terms
function custom_taxonomies_terms_links(){
  // 投稿 ID から投稿オブジェクトを取得
  $post = get_post( $post->ID );

  // その投稿から投稿タイプを取得
  $post_type = $post->post_type;

  // その投稿タイプからタクソノミーを取得
  $taxonomies = get_object_taxonomies( $post_type, 'objects' );

  $out = array();
  foreach ( $taxonomies as $taxonomy_slug => $taxonomy ){

    // 投稿に付けられたタームを取得
    $terms = get_the_terms( $post->ID, $taxonomy_slug );

    if ( !empty( $terms ) ) {
      $out[] = "<h2>" . $taxonomy->label . "</h2>\n<ul>";
      foreach ( $terms as $term ) {
        $out[] =
          '  <li><a href="'
        .    get_term_link( $term->slug, $taxonomy_slug ) .'">'
        .    $term->name
        . "</a></li>\n";
      }
      $out[] = "</ul>\n";
    }
  }
  return implode('', $out );
}

/**
* ログイン画面
**/
function custom_login() {
	$files = '<link rel="stylesheet" href="'.get_template_directory_uri().'/css/login-style.min.css" />';
	echo $files;
}
add_action( 'login_enqueue_scripts', 'custom_login' );


/**
* 購読者をログイン後に特定ページに飛ばす
**/
/*
function subscriber_go_to_home( $user_id ) {
	$user = get_userdata( $user_id );
	if ( !$user->has_cap( 'edit_posts' ) ) {
			wp_redirect( get_home_url() );
			exit();
	}
}
//add_action( 'auth_redirect', 'subscriber_go_to_home' );
*/

/**
* ログイン中のみ表示する箇所のショートコード
**/
function login_read_more($atts, $content = null) {
    if (is_user_logged_in() && !is_null( $content ) && !is_feed()) {
			//$contentのなかにあるショートコードを「do_shortcode」で実行
    	$str = do_shortcode($content);
      return $str;
    } else {
      return '';
    }
}
//add_shortcode('login', 'login_read_more');

/**
* ログアウト中のみ表示する箇所のショートコード
**/
function logout_read_only($atts, $content = null) {
    if (!is_user_logged_in() && !is_null( $content )) {
			//$contentのなかにあるショートコードを「do_shortcode」で実行
    	$str = do_shortcode($content);
      return $str;
    } else {
      return '';
    }
}
//add_shortcode('logout', 'logout_read_only');

/**
* 特定の投稿タイプでビジュアルエディタを表示しない
* https://ku-su.com/2216/
*/
function disable_visual_editor_in_page(){
  global $typenow;
  if( $typenow == 'mw-wp-form' ){
    add_filter('user_can_richedit', 'disable_visual_editor_filter');
  }
}
function disable_visual_editor_filter(){
  return false;
}
//add_action( 'load-post.php', 'disable_visual_editor_in_page' );
//add_action( 'load-post-new.php', 'disable_visual_editor_in_page' );
/**
 *ビジュアルエディタにCSS適用
 *https://www.nxworld.net/wordpress/wp-custom-visual-editor.html
 **/
function custom_tiny_mce_body_class( $settings ){
  $settings['body_class'] = 'content';
  return $settings;
}
//add_filter( 'tiny_mce_before_init', 'custom_tiny_mce_body_class' );
//add_editor_style( home_url().'/css/editor-style.css' );

/**
* Gutenberg
* https://www.nxworld.net/wordpress/wp-gutenberg-css-settings.html
*/
//add_action( 'after_setup_theme', 'nxw_setup_theme' );
function nxw_setup_theme() {
  add_theme_support( 'editor-styles' );
  add_editor_style( get_template_directory_uri().'/css/editor-style.css' );
}
//正式には↑だけど、これだと勝手に整形してくれる（上記リンク参照）ので、
//簡易的には↓でcss読む。

//cssやjsを読みこむ
function wp_custom_admin_css() {
	echo "\n" . '<link href="'.get_template_directory_uri().'/css/admin-style.min.css' . '" rel="stylesheet" type="text/css" />' . "\n";
	echo "\n" . '<link href="'.get_template_directory_uri().'/css/editor-style.min.css' . '" rel="stylesheet" type="text/css" />' . "\n";
}
add_action('admin_head', 'wp_custom_admin_css', 100);


/**
 *ビジュアルエディタの「段落」プルダウン
 *http://xov.jp/e/343/
 **/
function my_tiny_mce_before_init( $ar ) {
	$ar['block_formats'] = '段落=p;大見出し=h3;中見出し=h4;小見出し=h5;タイトル=h2';
	return $ar;
}
//add_filter( 'tiny_mce_before_init', 'my_tiny_mce_before_init' );

/**
* 投稿画面のクイックタグボタンを追加＆削除
**/
/*
function default_quicktags($qtInit) {
$qtInit['buttons'] = 'link,img,close';//表示するボタンのIDを羅列
return $qtInit;
}
//add_filter('quicktags_settings', 'default_quicktags', 10, 1);

function add_my_quicktag() {
?>
<script type="text/javascript">
//QTags.addButton('ID', 'ボタンのラベル', '開始タグ', '終了タグ');
QTags.addButton('figure','figure','<figure>\n','\n</figure>\n');
QTags.addButton('figcaption','figcaption','<figcaption>\n','\n</figcaption>\n');
QTags.addButton('login','ログイン時のみ','[login]\n','\n[/login]\n');
QTags.addButton('logout','ログアウト時のみ','[logout]\n','\n[/logout]\n');
</script>
<?php
}
//add_action('admin_print_footer_scripts','add_my_quicktag');
*/

/**
* カテゴリー一覧をラジオボタンに
* http://cly7796.net/wp/cms/change-category-to-radio-button-on-posting-screen/
* https://webkodo.com/create-web/wp-2/
*/
function change_category_to_radio() {
?>
<script>
jQuery(function($) {
    // カテゴリーをラジオボタンに変更
    $('#categorychecklist input[type=checkbox]').each(function() {
        $(this).replaceWith($(this).clone().attr('type', 'radio'));
    });
    // 「新規カテゴリーを追加」を非表示
    $('#category-adder').hide();
    // 「よく使うもの」を非表示
    $('#category-tabs').hide();

    // カスタム投稿画面のカテゴリー選択を制限
    $('#news_ctgchecklist input[type=checkbox]').each(function() {
        $(this).replaceWith($(this).clone().attr('type', 'radio'));
    });
    $('#work_ctg-adder,#news_ctg-adder').hide();
    $('#work_ctg-tabs,#news_ctg-tabs').hide();
/*
		// クイック編集のカテゴリー選択を制限
		qcl = $('fieldset.inline-edit-categories input[type=checkbox]');
		qcl.click( function() {
			$(this).parents('fieldset.inline-edit-categories').find('input[type=checkbox]').attr('checked', false);
			$(this).attr('checked', true);
		});
*/
});
</script>
<?php
}
add_action( 'admin_head-post-new.php', 'change_category_to_radio' );
add_action( 'admin_head-post.php', 'change_category_to_radio' );

function category_single_select() {
?>
<script type="text/javascript">
	jQuery(function($) {
		// 投稿画面のカテゴリー選択を制限
		var cl = $('#category-all input[type=checkbox]');
		cl.click( function() {
			$(this).parents('#category-all').find('input[type=checkbox]').attr('checked', false);
			$(this).attr('checked', true);
		});

		// カスタム投稿画面のカテゴリー選択を制限
		var cl = $('#タクソノミー名-all input[type=checkbox]');
		cl.click( function() {
			$(this).parents('#タクソノミー名-all').find('input[type=checkbox]').attr('checked', false);
			$(this).attr('checked', true);
		});

		// クイック編集のカテゴリー選択を制限
		qcl = $('fieldset.inline-edit-categories input[type=checkbox]');
		qcl.click( function() {
			$(this).parents('fieldset.inline-edit-categories').find('input[type=checkbox]').attr('checked', false);
			$(this).attr('checked', true);
		});

		$('.categorychecklist>li:first-child, .cat-checklist>li:first-child').before('<p style="padding-top:5px;">1つ選んでください</p>');
	});
</script>
<?php
}
add_action('admin_print_footer_scripts', 'category_single_select');

//一覧画面の並び順
function set_post_order_in_admin($wp_query)
{
		global $pagenow;
		if (is_admin() && 'edit.php' == $pagenow && !isset($_GET['orderby'])) {
				$wp_query->set('orderby', 'DATE');//並び順を設定します。
				$wp_query->set('order', 'DESC');//昇順降順を設定します。
		}
}
//add_filter('pre_get_posts', 'set_post_order_in_admin');


/*
** 画像アップロード
** https://www.websuccess.jp/blog/archives/2134/
*/
//アップロード画像を自動リサイズ
function image_resize_at_upload( $file ) {
	if ( $file['type'] == 'image/jpeg' OR $file['type'] == 'image/gif' OR $file['type'] == 'image/png') {
		$w = 1600;
		$h = 1200;
		$image = wp_get_image_editor( $file['file'] );
		if ( ! is_wp_error( $image ) ){
			$size = getimagesize( $file['file'] );
			if ( $size[0] > $w || $size[1] > $h ){
				$image->resize( $w, $h, false );
				$final_image = $image->save( $file['file'] );
			}
		}
	}
	return $file;
}
add_action( 'wp_handle_upload', 'image_resize_at_upload' );

//サイズ自働生成停止
function my_intermediate_image_sizes($sizes) {
	$delete = array(/*'thumbnail',*/'medium','large');
	return array_diff($sizes, $delete);
}
add_filter('intermediate_image_sizes', 'my_intermediate_image_sizes');
update_option( 'medium_large_size_w', 0 );

/**
* 記事内の最初の画像をアイキャッチ代わりに使う
* https://idotdesign.net/blog/web/wordpress/first-image-for-eyecatch/
*/
function get_first_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $cnt = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];//$matches[1][0];
    if(empty($first_img)){
        // 記事内で画像がなかったときのためのデフォルト画像を指定
        $first_img = "/img/common/default.jpg";
    }
    return $first_img;
}

/**
* MW WP FORM 送信日時
* https://kosaeru.net/memo/mw-wp-form_send-datetime/
*
*/
function send_date_time( $value, $key, $insert_contact_data_id ) {
  if ( $key === 'send_datetime' ) {
      //return date_i18n( 'Y年m月d日 H時i分' );
      date_default_timezone_set('Asia/Tokyo');
      return date( 'Y年m月d日 H:i:s' );
  }
  return $value;
}
add_filter( 'mwform_custom_mail_tag_mw-wp-form-138', 'send_date_time', 10, 3 );
add_filter( 'mwform_custom_mail_tag_mw-wp-form-128', 'send_date_time', 10, 3 );
add_filter( 'mwform_custom_mail_tag_mw-wp-form-106', 'send_date_time', 10, 3 );

/**
* MW WP FORM バリデーションエラー
* https://www.nxworld.net/wordpress/wp-plugin-mw-wp-form-error-customize.html
*
*/
/*
add_filter( 'mwform_error_message_mw-wp-form-26', 'custom_mwform_error_message', 10, 3 );
function custom_mwform_error_message( $error, $key, $rule ) {

	switch ($key) {
		case 'name':
			if ( $rule === 'noempty' ) {
				return 'お名前を入力して下さい';
			}
			break;

		case 'kana':
			if ( $rule === 'noempty' ) {
				return 'お名前を入力して下さい';
			}
			break;

		case 'name':
			if ( $rule === 'noempty' ) {
				return 'お名前（フリガナ）を入力して下さい';
			}else if( $rule === 'kana'){
				return '平仮名またはカタカナで入力して下さい';
			}
			break;

		case 'email':
			if ( $rule === 'noempty' ) {
				return 'メールアドレスを入力して下さい';
			}else if( $rule === 'mail'){
				return 'メールアドレスが正しくありあません';
			}
			break;

		case 'email-confirm':
			if ( $rule === 'noempty' ) {
				return 'メールアドレスを入力して下さい';
			}else if( $rule === 'eq'){
				return 'メールアドレスが一致しません';
			}
			break;

		case 'message':
			if ( $rule === 'noempty' ) {
				return 'お問い合わせ内容を入力して下さい';
			}
			break;

		default:
			break;
	}

  return $error;
}
*/


/**
* YARPP のCSSを削除
* https://kagoblo.net/remove-yarpp-css/
*/
// YARPPのwidget.cssを削除
add_action('wp_print_styles','crunchify_dequeue_header_styles');
function crunchify_dequeue_header_styles()
{
  wp_dequeue_style('yarppWidgetCss');
}

// YARPPのrelated.cssを削除
add_action('get_footer','crunchify_dequeue_footer_styles');
function crunchify_dequeue_footer_styles()
{
  wp_dequeue_style('yarppRelatedCss');
}

/**
* アーカイブページの表示件数を投稿タイプ毎に指定
* https://www.kopjapan.com/blog/web/wordpress%E3%81%A7%E3%82%AB%E3%82%B9%E3%82%BF%E3%83%A0%E6%8A%95%E7%A8%BF%E3%81%AE%E3%82%A2%E3%83%BC%E3%82%AB%E3%82%A4%E3%83%96%E3%81%A7%E3%81%AE%E8%A1%A8%E7%A4%BA%E4%BB%B6%E6%95%B0%E3%82%92%E6%8C%87
*/
function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
    if ( $query->is_archive('news') ) { //カスタム投稿タイプを指定
        $query->set( 'posts_per_page', '12' ); //表示件数を指定
    }else if( $query->is_archive('work') ) {
        $query->set( 'posts_per_page', '16' );
    }
}
//add_action( 'pre_get_posts', 'change_posts_per_page' );



/*
* bogo
*/

/**
* bogoにカスタム投稿タイプを登録
* https://kimoba.com/kasegu/bogo-for-custom-type.html
*/
function add_localizable_post_types($localizable) {
    $localizable[] = 'news';
    $localizable[] = 'work';
    //$localizable[] = 'people';
    return $localizable;
}
//add_filter('bogo_localizable_post_types', 'add_localizable_post_types', 10, 1);

/**
* bogoの翻訳をYoastにも適用
* https://liginc.co.jp/486679#04
*/
function localize_title($title) {
  ob_start();
  bloginfo('name');
  $localizedName = ob_get_clean();
  $originalName = get_bloginfo('name');
  return str_replace($originalName, $localizedName, $title);
}
//add_filter( 'wpseo_title', 'localize_title', 10, 1 );

function localize_description($description) {
  ob_start();
  bloginfo('description');
  $localizedDescription = ob_get_clean();
  $originalDescription = get_bloginfo('description');
  return str_replace($originalDescription, $localizedDescription, $description);
}
//add_filter( 'wpseo_metadesc', 'localize_description', 10, 1 );

/**
* og:site_nameも
* https://liginc.co.jp/web/wp/plug-in/135609
*/
function lig_custom_opengraph_site_name( $site_name ) {
  ob_start();
  bloginfo('name');
  $localizedName = ob_get_clean();
  $originalName = get_bloginfo('name');
  return str_replace($originalName, $localizedName, $site_name);
}
//add_filter( 'wpseo_opengraph_site_name', 'lig_custom_opengraph_site_name');


// 投稿ページのパーマリンクをカスタマイズ
function add_article_post_permalink( $permalink ) {
    $permalink = '/news' . $permalink;
    return $permalink;
}
add_filter( 'pre_post_link', 'add_article_post_permalink' );
 
function add_article_post_rewrite_rules( $post_rewrite ) {
    $return_rule = array();
    foreach ( $post_rewrite as $regex => $rewrite ) {
        $return_rule['news/' . $regex] = $rewrite;
    }
    return $return_rule;
}
add_filter( 'post_rewrite_rules', 'add_article_post_rewrite_rules' );


