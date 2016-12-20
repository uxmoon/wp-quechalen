<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Quechalen
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

  <svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
      <symbol id="icon-arrow-right" viewBox="0 0 14 32">
        <title>arrow-right</title>
        <path class="path1" d="M4 6l-4 4 6 6-6 6 4 4 10-10-10-10z"></path>
      </symbol>
      <symbol id="icon-arrow-left" viewBox="0 0 14 32">
        <title>arrow-left</title>
        <path class="path1" d="M14 10l-4-4-10 10 10 10 4-4-6-6 6-6z"></path>
      </symbol>
      <symbol id="icon-chevron-right" viewBox="0 0 19 28">
        <title>chevron-right</title>
        <path class="path1" d="M17.297 13.703l-11.594 11.594c-0.391 0.391-1.016 0.391-1.406 0l-2.594-2.594c-0.391-0.391-0.391-1.016 0-1.406l8.297-8.297-8.297-8.297c-0.391-0.391-0.391-1.016 0-1.406l2.594-2.594c0.391-0.391 1.016-0.391 1.406 0l11.594 11.594c0.391 0.391 0.391 1.016 0 1.406z"></path>
      </symbol>
      <symbol id="icon-chevron-left" viewBox="0 0 21 28">
        <title>chevron-left</title>
        <path class="path1" d="M18.297 4.703l-8.297 8.297 8.297 8.297c0.391 0.391 0.391 1.016 0 1.406l-2.594 2.594c-0.391 0.391-1.016 0.391-1.406 0l-11.594-11.594c-0.391-0.391-0.391-1.016 0-1.406l11.594-11.594c0.391-0.391 1.016-0.391 1.406 0l2.594 2.594c0.391 0.391 0.391 1.016 0 1.406z"></path>
      </symbol>
      <symbol id="icon-angle-down" viewBox="0 0 18 28">
        <title>angle-down</title>
        <path class="path1" d="M16.797 11.5c0 0.125-0.063 0.266-0.156 0.359l-7.281 7.281c-0.094 0.094-0.234 0.156-0.359 0.156s-0.266-0.063-0.359-0.156l-7.281-7.281c-0.094-0.094-0.156-0.234-0.156-0.359s0.063-0.266 0.156-0.359l0.781-0.781c0.094-0.094 0.219-0.156 0.359-0.156 0.125 0 0.266 0.063 0.359 0.156l6.141 6.141 6.141-6.141c0.094-0.094 0.234-0.156 0.359-0.156s0.266 0.063 0.359 0.156l0.781 0.781c0.094 0.094 0.156 0.234 0.156 0.359z"></path>
      </symbol>
      <symbol id="icon-chevron-circle-right" viewBox="0 0 24 28">
        <title>chevron-circle-right</title>
        <path class="path1" d="M11.203 21.797l7.094-7.094c0.391-0.391 0.391-1.016 0-1.406l-7.094-7.094c-0.391-0.391-1.016-0.391-1.406 0l-1.594 1.594c-0.391 0.391-0.391 1.016 0 1.406l4.797 4.797-4.797 4.797c-0.391 0.391-0.391 1.016 0 1.406l1.594 1.594c0.391 0.391 1.016 0.391 1.406 0zM24 14c0 6.625-5.375 12-12 12s-12-5.375-12-12 5.375-12 12-12 12 5.375 12 12z"></path>
      </symbol>
      <symbol id="icon-chevron-circle-left" viewBox="0 0 24 28">
        <title>chevron-circle-left</title>
        <path class="path1" d="M14.203 21.797l1.594-1.594c0.391-0.391 0.391-1.016 0-1.406l-4.797-4.797 4.797-4.797c0.391-0.391 0.391-1.016 0-1.406l-1.594-1.594c-0.391-0.391-1.016-0.391-1.406 0l-7.094 7.094c-0.391 0.391-0.391 1.016 0 1.406l7.094 7.094c0.391 0.391 1.016 0.391 1.406 0zM24 14c0 6.625-5.375 12-12 12s-12-5.375-12-12 5.375-12 12-12 12 5.375 12 12z"></path>
      </symbol>
      <symbol id="icon-angle-right" viewBox="0 0 9 28">
        <title>angle-right</title>
        <path class="path1" d="M9.297 15c0 0.125-0.063 0.266-0.156 0.359l-7.281 7.281c-0.094 0.094-0.234 0.156-0.359 0.156s-0.266-0.063-0.359-0.156l-0.781-0.781c-0.094-0.094-0.156-0.219-0.156-0.359 0-0.125 0.063-0.266 0.156-0.359l6.141-6.141-6.141-6.141c-0.094-0.094-0.156-0.234-0.156-0.359s0.063-0.266 0.156-0.359l0.781-0.781c0.094-0.094 0.234-0.156 0.359-0.156s0.266 0.063 0.359 0.156l7.281 7.281c0.094 0.094 0.156 0.234 0.156 0.359z"></path>
      </symbol>
      <symbol id="icon-angle-left" viewBox="0 0 11 28">
        <title>angle-left</title>
        <path class="path1" d="M9.797 8.5c0 0.125-0.063 0.266-0.156 0.359l-6.141 6.141 6.141 6.141c0.094 0.094 0.156 0.234 0.156 0.359s-0.063 0.266-0.156 0.359l-0.781 0.781c-0.094 0.094-0.234 0.156-0.359 0.156s-0.266-0.063-0.359-0.156l-7.281-7.281c-0.094-0.094-0.156-0.234-0.156-0.359s0.063-0.266 0.156-0.359l7.281-7.281c0.094-0.094 0.234-0.156 0.359-0.156s0.266 0.063 0.359 0.156l0.781 0.781c0.094 0.094 0.156 0.219 0.156 0.359z"></path>
      </symbol>
      <symbol id="icon-facebook" viewBox="0 0 16 28">
        <title>facebook</title>
        <path class="path1" d="M14.984 0.187v4.125h-2.453c-1.922 0-2.281 0.922-2.281 2.25v2.953h4.578l-0.609 4.625h-3.969v11.859h-4.781v-11.859h-3.984v-4.625h3.984v-3.406c0-3.953 2.422-6.109 5.953-6.109 1.687 0 3.141 0.125 3.563 0.187z"></path>
      </symbol>
    </defs>
  </svg>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'quechalen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>

      <ul class="c-language">
        <?php pll_the_languages(); ?>
      </ul>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'quechalen' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
