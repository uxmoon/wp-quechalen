<?php

// Contact form 7

add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

// Emojis

function disable_wp_emojicons() {

  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // filter to remove TinyMCE emojis
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );

function disable_emojicons_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}

add_filter( 'emoji_svg_url', '__return_false' );

// remove version from head
remove_action('wp_head', 'wp_generator');

// remove version from rss
add_filter('the_generator', '__return_empty_string');

// remove version from scripts and styles
function quechalen_remove_version_scripts_styles($src) {
  if (strpos($src, 'ver=')) {
    $src = remove_query_arg('ver', $src);
  }
  return $src;
}
add_filter('style_loader_src', 'quechalen_remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'quechalen_remove_version_scripts_styles', 9999);

// block proxy visits @ http://m0n.co/01
function quechalen_block_proxy_visits() {
  if (@fsockopen($_SERVER['REMOTE_ADDR'], 80, $errstr, $errno, 1)) {
    die('Proxy access not allowed');
  }
}
add_action('after_setup_theme', 'quechalen_block_proxy_visits');

