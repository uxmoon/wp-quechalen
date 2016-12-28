<?php
/*
Template Name: Rates
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
          <?php the_content(); ?>
          <p><?php esc_html_e('Rates updated on:', 'quechalen') ?>
            <?php echo rwmb_meta('rates_updated_on'); ?></p>

          <p><?php esc_html_e('High occupancy:', 'quechalen') ?>
            <?php echo rwmb_meta('rates_season_high'); ?></p>

          <p><?php esc_html_e('Low occupancy:', 'quechalen') ?>
            <?php echo rwmb_meta('rates_season_low'); ?></p>
        </div><!-- .entry-content -->
      </article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
