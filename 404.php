<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package alte2020
 */

  $url = $_SERVER["REQUEST_URI"];
  if(preg_match('/\.gif$|\.png$|\.jpg$|\.jpeg$|\.bmp$/i', $url)){
    header("HTTP/1.1 404 Not Found");
    exit;
  }else{
    header( "Location: /" ) ;
  }
?>
404
