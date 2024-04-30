

<?php
/**
 * The template for displaying page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package alte2020
 */

header( "Location: ./about/" );

 global $pageType;
 $pageType="company";

 get_header();
?>
	<section class="contents scroll-trg">

<?php
get_footer();
