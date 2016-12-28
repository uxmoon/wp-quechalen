<?php
/*
Template Name: Facilities
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <ul class="c-nav-inner">
              <li><a href="#tab1"><?php esc_html_e( 'The complex', 'quechalen' ); ?></a></li>
              <li><a href="#tab2"><?php esc_html_e( 'Our mission', 'quechalen' ); ?></a></li>
            </ul>
          </header><!-- .entry-header -->
          <div class="entry-content">
            <div class="c-facilities">
              <div class="c-facilities__content">
                <?php the_content(); ?>
              </div>
              <div class="c-facilities__gallery">
                <p>gallery</p>
              </div>
            </div>
          </div><!-- .entry-content -->
        </article><!-- #post-## -->

      <?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
