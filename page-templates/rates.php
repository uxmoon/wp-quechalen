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

          <p class="u-text-center"><?php esc_html_e('Rates updated on', 'quechalen') ?>
          <?php echo rwmb_meta('rates_updated_on'); ?></p>

          <!-- Low Occupancy -->
          <div class="c-rates">
            <div class="c-rates__column">
              <h2><?php esc_html_e('Low occupancy', 'quechalen') ?></h2>
              <p><?php echo rwmb_meta('rates_season_low'); ?></p>
            </div>

            <div class="c-rates__column">
              <h2><?php esc_html_e('Cabins', 'quechalen') ?></h2>

              <p><?php esc_html_e('2 guests', 'quechalen') ?>
              <?php echo rwmb_meta('rates_cabin_2_guests'); ?></p>

              <p><?php esc_html_e('3 guests', 'quechalen') ?>
              <?php echo rwmb_meta('rates_cabin_3_guests'); ?></p>

              <p><?php esc_html_e('4 guests', 'quechalen') ?>
              <?php echo rwmb_meta('rates_cabin_4_guests'); ?></p>
            </div>
            <div class="c-rates__column">
              <h2><?php esc_html_e('Inn', 'quechalen') ?></h2>

              <p><?php esc_html_e('2 guests', 'quechalen') ?> (<?php echo rwmb_meta('rates_room_2_bed'); ?>)
              <?php echo rwmb_meta('rates_inn_2'); ?></p>

              <p><?php esc_html_e('2 guests', 'quechalen') ?> (<?php echo rwmb_meta('rates_room_2_bed_single'); ?>)
              <?php echo rwmb_meta('rates_inn_2_simple'); ?></p>

              <p><?php esc_html_e('3 guests', 'quechalen') ?> (<?php echo rwmb_meta('rates_room_3_bed'); ?>)
              <?php echo rwmb_meta('rates_inn_3'); ?></p>

              <p><?php esc_html_e('4 guests', 'quechalen') ?> (<?php echo rwmb_meta('rates_room_4_bed'); ?>)
              <?php echo rwmb_meta('rates_inn_4'); ?></p>
            </div>
          </div>

          <!-- High Occupancy -->


          <div class="c-rates">

            <div class="c-rates__column">

              <h2><?php esc_html_e('High occupancy', 'quechalen') ?></h2>
              <p><?php echo rwmb_meta('rates_season_high'); ?></p>

            </div>

            <div class="c-rates__column">

              <h2><?php esc_html_e('Cabins', 'quechalen') ?></h2>

              <p><?php esc_html_e('2 guests', 'quechalen') ?>
              <?php echo rwmb_meta('rates_cabin_2_guests_high'); ?></p>

              <p><?php esc_html_e('3 guests', 'quechalen') ?>
              <?php echo rwmb_meta('rates_cabin_3_guests_high'); ?></p>

              <p><?php esc_html_e('4 guests', 'quechalen') ?>
              <?php echo rwmb_meta('rates_cabin_4_guests_high'); ?></p>

            </div>
            <div class="c-rates__column">
              <h2><?php esc_html_e('Inn', 'quechalen') ?></h2>

              <p><?php esc_html_e('2 guests', 'quechalen') ?> (<?php echo rwmb_meta('rates_room_2_bed'); ?>)
              <?php echo rwmb_meta('rates_inn_2_high'); ?></p>

              <p><?php esc_html_e('2 guests', 'quechalen') ?> (<?php echo rwmb_meta('rates_room_2_bed_single'); ?>)
              <?php echo rwmb_meta('rates_inn_2_simple_high'); ?></p>

              <p><?php esc_html_e('3 guests', 'quechalen') ?> (<?php echo rwmb_meta('rates_room_3_bed'); ?>)
              <?php echo rwmb_meta('rates_inn_3_high'); ?></p>

              <p><?php esc_html_e('4 guests', 'quechalen') ?> (<?php echo rwmb_meta('rates_room_4_bed'); ?>)
              <?php echo rwmb_meta('rates_inn_4_high'); ?></p>
            </div>

          </div>

          <?php the_content(); ?>

        </div><!-- .entry-content -->
      </article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
