

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alte2020
 */

 global $pageType;
 global $bgcolor;

?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, viewport-fit=cover">
	<link rel="profile" href="https://gmpg.org/xfn/11">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.min.css?v=220210">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $pageType; ?>.min.css?v=220210">
  <?php if($pageType=='contact'): ?>
  <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
  <?php endif; ?>
	<?php wp_head(); ?>

  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/icon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/icon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/icon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/icon/safari-pinned-tab.svg" color="#0860a2">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/icon/favicon.ico">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/img/icon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <!-- adobe font -->
  <script>
  (function(d) {
    var config = {
      kitId: 'ayz2tbk',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162010189-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-162010189-1');
  </script>
</head>

<body class="page-<?php echo $pageType; if($bgcolor)echo ' be--'.$bgcolor; ?>" <?php body_class(); ?>>
  <div class="fade-cover"></div>
  <!--core content-->
  <div class="wrap">
  	<div class="loader">
  <div class="loader__item">
    <div class="loader__label">
      <img src="<?php echo get_template_directory_uri(); ?>/img/common/loading-lbl.svg" alt="LOADING">
    </div>
    <i></i>
  </div>
</div>

  	<div class="page-body">
    <div class="overlay">

  <div class="overlay__mask">
    <div class="overlay__loader">
      <a href="#" class="overlay__close-btn">
        <i></i><span>CLOSE</span>
      </a>
    </div>
  </div>

</div>

  	<?php
/**
 * @package alte2020
 */

 global $pageType;
?>

<div class="fix">
  <header class="fix__header"></header>
  <?php if($pageType == 'top'): ?>
  <h1 class="fix__logo" title="ALTE MEISTER">
    <span>
      <svg class="svg-logo" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" viewBox="0 0 501.5 40" width="501.5" height="40" style="enable-background:new 0 0 501.5 40;" xml:space="preserve">
<style type="text/css">
	.logo-svg__path{fill:#3E8AC9;}
</style>
<g>
  <title>ALTE MEISTER</title>
  <path class="logo-svg__path" d="M238.72,0l-14.88,27.57L208.98,0l-14.25,37.87h6.25l8.93-24.28
  	L223.86,38l13.88-24.41l8.99,24.28h6.28L238.72,0 M466.34,17.08V7.36h21.34c2.73-0.02,4.98,2.13,5.09,4.86
  	c-0.07,2.71-2.3,4.87-5.02,4.86H466.34 M14.86,25.29l8.97-14.84l9.02,14.84H14.86 M169.43,17.05h-22.38v5.38h22.38L169.43,17.05
  	 M294.37,17.05h-22.38v5.38h22.38L294.37,17.05 M450.14,17.05h-22.39v5.38h22.39L450.14,17.05 M62.57,2h-6.3v36L89.26,38v-5.4H62.57
  	V2 M127.49,1.99H86.83v5.4h17.24V38h6.27V7.39h17.15V1.99 M408.19,1.99h-40.66v5.4h17.24V38h6.27V7.39h17.15L408.19,1.99
  	 M488.68,1.98l-28.62,0.01V38h6.28V22.46h16.6L494.28,38h7.22l-11.41-15.65c5.6-0.73,9.55-5.87,8.82-11.47
  	C498.23,5.76,493.84,1.94,488.68,1.98 M169.99,1.97h-35.15V38h35.15v-5.36h-28.87V7.36h28.87L169.99,1.97 M294.93,1.97h-35.14V38
  	h35.14v-5.36h-28.86V7.36h28.86L294.93,1.97 M314.02,1.97h-6.27V38h6.27V1.97 M358.24,1.97h-25.11
  	c-5.65-0.07-10.29,4.46-10.36,10.12c-0.07,5.65,4.46,10.29,10.12,10.36c0.07,0,0.13,0,0.2,0h17.82c2.8,0.04,5.04,2.35,5,5.15
  	c-0.04,2.73-2.23,4.93-4.95,5l-25.71-0.01V38L351.81,38c5.78-0.1,10.39-4.86,10.29-10.64c-0.09-5.67-4.69-10.24-10.36-10.3h-17.7
  	c-2.68-0.01-4.84-2.18-4.84-4.86s2.18-4.84,4.86-4.84h24.17L358.24,1.97 M450.7,1.97h-35.14V38h35.14v-5.36h-28.87V7.36h28.87
  	L450.7,1.97 M23.81,0.13L0,38h6.88c1.3-2.09,2.91-4.64,4.6-7.34h24.76c1.71,2.69,3.3,5.23,4.63,7.34h6.91L23.81,0.13"/>
  </g>
</svg>

    </span>
  </h1>
  <?php else: ?>
  <h2 class="fix__logo" title="ALTE MEISTER">
    <a href="/">
    <svg class="svg-logo" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" viewBox="0 0 501.5 40" width="501.5" height="40" style="enable-background:new 0 0 501.5 40;" xml:space="preserve">
<style type="text/css">
	.logo-svg__path{fill:#3E8AC9;}
</style>
<g>
  <title>ALTE MEISTER</title>
  <path class="logo-svg__path" d="M238.72,0l-14.88,27.57L208.98,0l-14.25,37.87h6.25l8.93-24.28
  	L223.86,38l13.88-24.41l8.99,24.28h6.28L238.72,0 M466.34,17.08V7.36h21.34c2.73-0.02,4.98,2.13,5.09,4.86
  	c-0.07,2.71-2.3,4.87-5.02,4.86H466.34 M14.86,25.29l8.97-14.84l9.02,14.84H14.86 M169.43,17.05h-22.38v5.38h22.38L169.43,17.05
  	 M294.37,17.05h-22.38v5.38h22.38L294.37,17.05 M450.14,17.05h-22.39v5.38h22.39L450.14,17.05 M62.57,2h-6.3v36L89.26,38v-5.4H62.57
  	V2 M127.49,1.99H86.83v5.4h17.24V38h6.27V7.39h17.15V1.99 M408.19,1.99h-40.66v5.4h17.24V38h6.27V7.39h17.15L408.19,1.99
  	 M488.68,1.98l-28.62,0.01V38h6.28V22.46h16.6L494.28,38h7.22l-11.41-15.65c5.6-0.73,9.55-5.87,8.82-11.47
  	C498.23,5.76,493.84,1.94,488.68,1.98 M169.99,1.97h-35.15V38h35.15v-5.36h-28.87V7.36h28.87L169.99,1.97 M294.93,1.97h-35.14V38
  	h35.14v-5.36h-28.86V7.36h28.86L294.93,1.97 M314.02,1.97h-6.27V38h6.27V1.97 M358.24,1.97h-25.11
  	c-5.65-0.07-10.29,4.46-10.36,10.12c-0.07,5.65,4.46,10.29,10.12,10.36c0.07,0,0.13,0,0.2,0h17.82c2.8,0.04,5.04,2.35,5,5.15
  	c-0.04,2.73-2.23,4.93-4.95,5l-25.71-0.01V38L351.81,38c5.78-0.1,10.39-4.86,10.29-10.64c-0.09-5.67-4.69-10.24-10.36-10.3h-17.7
  	c-2.68-0.01-4.84-2.18-4.84-4.86s2.18-4.84,4.86-4.84h24.17L358.24,1.97 M450.7,1.97h-35.14V38h35.14v-5.36h-28.87V7.36h28.87
  	L450.7,1.97 M23.81,0.13L0,38h6.88c1.3-2.09,2.91-4.64,4.6-7.34h24.76c1.71,2.69,3.3,5.23,4.63,7.34h6.91L23.81,0.13"/>
  </g>
</svg>

    </a>
  </h2>
  <?php endif; ?>

  <?php if($pageType == 'top'): ?>
  <a href="#" class="fix__scroll-attention"><span>SCROLL</span><i></i></a>
  <?php endif; ?>

  <a href="#" class="fix__pagetop-btn"><span><svg version="1.1" id="pagetop-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" viewBox="0 0 15.1 86.9" width="15.1" height="86.9" style="enable-background:new 0 0 15.1 86.9;" xml:space="preserve">
<style type="text/css">
	.pagetop-svg__path{fill:#575757;}
</style>
<g id="page_top-2">
	<path id="p_105" class="pagetop-svg__path" d="M10.4,12.6c-1.6-0.1-3.2-0.7-4.3-1.9c-1.2-1-1.8-2.5-1.9-4.1c0-0.7,0.2-1.3,0.7-1.8
		C4.1,4.6,3.4,4.4,2.7,4.2C2.3,4.1,1.9,4,1.6,3.9c-0.7,0-0.8,0.6-0.8,1c0,0.4,0,0.8-0.3,0.8c-0.2,0-0.3-0.3-0.3-0.5
		c0-0.3,0-0.7,0.1-1.1c0-0.4,0-0.8,0-1.2s0-0.9-0.1-1.5c0-0.6-0.1-1-0.1-1.2C0.1,0.1,0.1,0,0.3,0c0.3,0,0.4,0.4,0.4,0.9
		c0.1,1,0.6,1.1,2.1,1.5l8.9,2.7c0.1,0,0.1,0,0.1-0.1c-0.2-0.5-0.4-1-0.5-1.5c0-0.1,0.1-0.2,0.2-0.2h0c0.2,0,0.4,0.3,0.5,0.5
		c0.2,0.4,0.3,0.9,0.5,1.4c0.1,0.2,0.1,0.2,0.2,0.2l1.5,0.5C14.6,6,14.8,6,14.9,6.3c0,0.2,0.1,0.5,0,0.7v0.5c0,0.2-0.1,0.3-0.2,0.3
		c-0.1,0-0.2-0.1-0.4-0.1c-0.4-0.1-0.9-0.3-1.4-0.4c0.1,0.3,0.1,0.7,0.1,1c0,0.3,0,0.7,0,1C13.1,10.9,12.5,12.6,10.4,12.6L10.4,12.6
		z M12.4,8.6c0-0.5-0.1-1-0.2-1.6l-1.1-0.3c-1.3-0.4-2.7-0.8-4-1.2C6.7,5.4,6.2,5.3,5.8,5.2c-0.7,0-1,0.8-1,1.4c0,1.3,1,2.2,2.2,2.9
		c1.1,0.7,2.3,1.1,3.6,1.2C11.9,10.7,12.5,9.9,12.4,8.6L12.4,8.6z"/>
	<path id="p_106" class="pagetop-svg__path" d="M6.2,15c1.8,0.2,3.4,0.9,4.6,2.2c1.3,1.2,2.2,2.8,2.3,4.6c0,0.6-0.2,1.1-0.6,1.5
		c0,0.1,0.3,0.1,0.6,0.3c0.1,0.1,0.2,0.2,0.2,0.4c0,0.3,0,0.7,0,1c0,0.2-0.1,0.4-0.2,0.4c-0.2,0-0.3-0.1-0.5-0.1
		c-1.9-0.6-3.9-1.2-5.9-1.8c-0.2-0.1-0.5-0.1-0.7-0.2c-0.2,0-0.3,0.1-0.3,0.2c0,0.4,1.1,1.2,1.4,1.5c0.2,0.1,0.4,0.3,0.4,0.4
		c0,0.1-0.1,0.2-0.2,0.2l0,0c-0.7-0.2-1.2-0.6-1.7-1.1c-0.8-0.7-1.2-1.5-1.4-2.5c0-0.3,0.3-0.6,0.6-0.6c0,0,0.1,0,0.1,0
		c0.4,0,0.7,0.1,1.1,0.2C7,21.6,8.1,22,9.3,22.4v0c-1.8-1.1-5.2-3.6-5.2-5.8C4.1,15.6,5,15,6.2,15L6.2,15z M11.7,23
		c0.6,0,0.9-0.5,0.9-1.1c0-1.2-1.2-2.5-2.2-3.2C9.3,17.8,8,17.2,6.6,17c-0.5,0-1,0.2-1,0.8c0,1,1.8,2.6,2.6,3.2
		C8.9,21.6,10.9,23,11.7,23L11.7,23z"/>
	<path id="p_107" class="pagetop-svg__path" d="M9.9,29c1.8,0,3.2,1.8,3.2,3.9c0,0.5-0.1,1-0.2,1.4c-0.1,0.2-0.1,0.4-0.2,0.6v2.1
		c0,0.4,0,0.5-0.1,0.5c-0.2,0-0.3-0.1-0.5-0.1C12,37.4,12,37.3,12,37v-1.3c-0.5,0.5-1.2,0.8-1.9,0.8c-1.8,0-3.2-1.8-3.2-3.9
		c0-0.7,0.2-1.5,0.6-2.1C7.3,30.2,7.1,30,6.8,30c-0.7,0-1,1.5-1.2,2.4c-0.4,1.4-1.1,3.5-2.6,3.5c-1.5,0-2.9-1.8-2.9-4.7
		c0-2.1,1-4.6,2.5-4.6c1.6,0,1.9,2.2,2.2,3.3c0.3-0.6,0.7-1.3,1.4-1.3c0.8,0,1.3,0.8,1.6,1.4C8.3,29.5,9.1,29.1,9.9,29L9.9,29z
		 M0.5,31.6c0,1.1,0.5,2.6,1.7,2.6c0.9,0,1.2-0.9,1.5-1.6c0.2-0.6,0.4-1.4,0.7-2c-0.3-0.9-0.7-2.3-1.8-2.3
		C1.1,28.3,0.5,30.2,0.5,31.6L0.5,31.6z M11,34.7c0.8,0.1,1.5-0.5,1.6-1.3c0-0.1,0-0.1,0-0.2c0-1.5-2.2-2.5-3.5-2.5
		c-0.8-0.1-1.6,0.5-1.7,1.3c0,0,0,0.1,0,0.1C7.4,33.7,9.6,34.7,11,34.7L11,34.7z"/>
	<path id="p_108" class="pagetop-svg__path" d="M11.3,48.1c-2.6,0-3-4-3.3-6c0-0.1,0-0.2-0.1-0.3c-0.2,0-0.5,0-0.7,0c-1-0.1-1.9,0.5-2,1.5
		c0,0.1,0,0.2,0,0.3c0.1,1.1,0.7,2.2,1.6,2.8c0.2,0.1,0.2,0.2,0.2,0.3c0,0.1-0.1,0.2-0.2,0.2c0,0,0,0,0,0c-0.2,0-0.6-0.4-0.8-0.5
		c-1.2-0.9-1.9-2.3-2-3.8c0-1.5,1.2-2.8,2.8-2.8c0.1,0,0.2,0,0.2,0c3.2,0.2,5.8,2.7,6,5.9C13.1,46.7,12.6,48.1,11.3,48.1L11.3,48.1z
		 M12.6,45.5c0-1.7-2.2-3.1-4.2-3.6c0.2,1.4,0.6,3.3,1.6,4c0.5,0.3,1,0.5,1.6,0.6c0.5,0,0.9-0.3,1-0.8
		C12.6,45.6,12.6,45.6,12.6,45.5L12.6,45.5z"/>
	<path id="p_109" class="pagetop-svg__path" d="M5.2,58c0.6,0.1,1.2,0.2,1.8,0.4c1.7,0.5,3.5,1.1,5.2,1.6v-1c0-0.2,0-0.4,0.1-0.4
		c0.1,0,0.3,0,0.4,0.1c0.1,0.1,0.1,0.2,0.1,0.4v1.1l2,0.6c0.2,0,0.3,0.2,0.3,0.3c0,0.2,0,0.5,0,0.7s0,0.4,0,0.5c0,0.1,0,0.2-0.2,0.2
		c-0.2,0-0.3,0-0.5-0.1c-0.5-0.2-1.1-0.3-1.7-0.5v1.5c0,0.3,0,0.4-0.1,0.4c-0.1,0-0.2,0-0.4-0.1c-0.2-0.1-0.2-0.2-0.2-0.5v-1.5
		c-1.7-0.5-3.5-1-5.2-1.6c-0.3-0.1-0.7-0.2-1-0.2c-0.2,0-0.4,0.1-0.4,0.3c0,0.4,0.9,1.1,1.2,1.4c0.3,0.2,0.7,0.4,0.7,0.6
		c0,0.1-0.1,0.2-0.2,0.2c-0.4-0.1-0.7-0.3-1.1-0.6c-0.7-0.5-2.1-1.9-2.1-3C4.2,58.3,4.6,57.9,5.2,58L5.2,58L5.2,58z"/>
	<path id="p_110" class="pagetop-svg__path" d="M9.4,74.5c-1.3,0-2.6-0.6-3.5-1.6c-1-1-1.6-2.3-1.7-3.8c0-2,1.7-3.5,3.6-3.5c0,0,0.1,0,0.1,0
		c2.8,0.1,5.1,2.4,5.2,5.2c0,2-1.7,3.6-3.7,3.6C9.4,74.5,9.4,74.5,9.4,74.5L9.4,74.5z M10.4,72.7c1.1,0,2.1-0.4,2.1-1.7
		c-0.1-1-0.7-1.9-1.6-2.4c-1.2-0.8-2.6-1.2-4-1.2c-1.1,0-2.3,0.4-2.3,1.7c0.1,1,0.7,1.9,1.7,2.4C7.6,72.2,9,72.6,10.4,72.7
		L10.4,72.7z"/>
	<path id="p_111" class="pagetop-svg__path" d="M10.4,86.9c-1.6-0.1-3.2-0.7-4.3-1.9c-1.2-1.1-1.8-2.5-1.9-4.1c0-0.7,0.2-1.3,0.7-1.8
		c-0.7-0.2-1.5-0.4-2.2-0.7c-0.4-0.1-0.7-0.2-1.1-0.2c-0.7,0-0.8,0.6-0.8,1.1c0,0.4,0,0.8-0.3,0.8c-0.2,0-0.3-0.3-0.3-0.5
		c0-0.3,0-0.7,0.1-1.1c0-0.4,0-0.8,0-1.2s0-0.9-0.1-1.5c0-0.6-0.1-1-0.1-1.2c0-0.2,0.1-0.3,0.3-0.3c0.3,0,0.4,0.4,0.4,0.9
		c0.1,1,0.6,1.1,2.1,1.5l8.9,2.7c0.1,0,0.1,0,0.1-0.1c-0.2-0.5-0.4-1-0.5-1.5c0-0.1,0.1-0.2,0.2-0.2h0c0.2,0,0.4,0.3,0.5,0.5
		c0.2,0.4,0.3,0.9,0.5,1.4c0.1,0.2,0.1,0.2,0.2,0.2l1.5,0.5c0.4,0.1,0.6,0.2,0.6,0.4c0,0.2,0.1,0.5,0,0.7v0.5c0,0.2-0.1,0.3-0.2,0.3
		c-0.1,0-0.2-0.1-0.4-0.1c-0.4-0.1-0.9-0.3-1.4-0.4c0.1,0.3,0.1,0.7,0.1,1c0,0.3,0,0.7,0,1C13.1,85.2,12.5,86.9,10.4,86.9L10.4,86.9
		z M12.4,82.9c0-0.5-0.1-1-0.2-1.5L11.1,81c-1.3-0.4-2.7-0.8-4-1.2c-0.4-0.1-0.9-0.2-1.3-0.3c-0.7,0-1,0.8-1,1.4
		c0,1.3,1,2.2,2.2,2.9c1.1,0.7,2.3,1.1,3.6,1.2C11.9,85,12.4,84.2,12.4,82.9L12.4,82.9z"/>
</g>
</svg>
</span><i></i></a>
</div>

  	<?php get_sidebar(); ?>
