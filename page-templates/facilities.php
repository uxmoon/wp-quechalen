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
              <li class="current" data-tab="tab-1"><?php esc_html_e( 'The complex', 'quechalen' ); ?></li>
              <li data-tab="tab-2"><?php esc_html_e( 'Our mission', 'quechalen' ); ?></li>
            </ul>

          </header><!-- .entry-header -->
          <div class="entry-content">

            <div id="tab-1" class="tab-content  current">
              <div class="c-facilities">
                <div class="c-facilities__content">
                  <?php the_content(); ?>
                </div>
                <div class="c-facilities__gallery">
                  <p>gallery</p>
                </div>
              </div>
            </div>

            <div id="tab-2" class="tab-content">
              <?php echo rwmb_meta( 'facilities_intro' ); ?>

              <h3><?php esc_html_e( 'Our mission', 'quechalen' ); ?></h3>
              <?php echo rwmb_meta( 'facilities_mission' ); ?>

              <h3><?php esc_html_e( 'Our Vision', 'quechalen' ); ?></h3>
              <?php echo rwmb_meta( 'facilities_vision' ); ?>
            </div>

          </div><!-- .entry-content -->
        </article><!-- #post-## -->

      <?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
