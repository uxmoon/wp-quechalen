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

          <p><?php _e('Rates updated on', 'quechalen') ?>
          <?php echo rwmb_meta('rates_updated_on'); ?></p>

          <!-- Low Occupancy -->
          <p><?php esc_html_e('Low occupancy', 'quechalen') ?>
          <?php echo rwmb_meta('rates_season_low'); ?></p>

          <h2><?php esc_html_e('Cabins', 'quechalen') ?></h2>

          <p><?php esc_html_e('2 guests', 'quechalen') ?>
          <?php echo rwmb_meta('rates_cabin_2_guests'); ?></p>

          <p><?php esc_html_e('3 guests', 'quechalen') ?>
          <?php echo rwmb_meta('rates_cabin_3_guests'); ?></p>

          <p><?php esc_html_e('4 guests', 'quechalen') ?>
          <?php echo rwmb_meta('rates_cabin_4_guests'); ?></p>

          <h2><?php esc_html_e('Inn', 'quechalen') ?></h2>

          <p><?php esc_html_e('Low occupancy', 'quechalen') ?></p>

          <p><?php esc_html_e('2 guests', 'quechalen') ?> (<?php echo rwmb_meta('rates_room_2_bed'); ?>)
          <?php echo rwmb_meta('rates_inn_2'); ?></p>

          <p><?php esc_html_e('2 guests', 'quechalen') ?> (<?php echo rwmb_meta('rates_room_2_bed_single'); ?>)
          <?php echo rwmb_meta('rates_inn_2_simple'); ?></p>

          <p><?php esc_html_e('3 guests', 'quechalen') ?> (<?php echo rwmb_meta('rates_room_3_bed'); ?>)
          <?php echo rwmb_meta('rates_inn_3'); ?></p>

          <p><?php esc_html_e('4 guests', 'quechalen') ?> (<?php echo rwmb_meta('rates_room_4_bed'); ?>)
          <?php echo rwmb_meta('rates_inn_4'); ?></p>

          <hr>

          <!-- High Occupancy -->
          <p><?php esc_html_e('High occupancy', 'quechalen') ?>
          <?php echo rwmb_meta('rates_season_high'); ?></p>

          <h2><?php esc_html_e('Cabins', 'quechalen') ?></h2>

          <p><?php esc_html_e('2 guests', 'quechalen') ?>
          <?php echo rwmb_meta('rates_cabin_2_guests_high'); ?></p>

          <p><?php esc_html_e('3 guests', 'quechalen') ?>
          <?php echo rwmb_meta('rates_cabin_3_guests_high'); ?></p>

          <p><?php esc_html_e('4 guests', 'quechalen') ?>
          <?php echo rwmb_meta('rates_cabin_4_guests_high'); ?></p>

          <h2><?php esc_html_e('Inn', 'quechalen') ?></h2>

          <p><?php esc_html_e('2 guests', 'quechalen') ?> (<?php echo rwmb_meta('rates_room_2_bed'); ?>)
          <?php echo rwmb_meta('rates_inn_2_high'); ?></p>

          <p><?php esc_html_e('2 guests', 'quechalen') ?> (<?php echo rwmb_meta('rates_room_2_bed_single'); ?>)
          <?php echo rwmb_meta('rates_inn_2_simple_high'); ?></p>

          <p><?php esc_html_e('3 guests', 'quechalen') ?> (<?php echo rwmb_meta('rates_room_3_bed'); ?>)
          <?php echo rwmb_meta('rates_inn_3_high'); ?></p>

          <p><?php esc_html_e('4 guests', 'quechalen') ?> (<?php echo rwmb_meta('rates_room_4_bed'); ?>)
          <?php echo rwmb_meta('rates_inn_4_high'); ?></p>

        </div><!-- .entry-content -->
      </article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
