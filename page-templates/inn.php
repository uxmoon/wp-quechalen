<?php
/*
Template Name: Inn
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
          <div class="c-cabins">
            <div class="c-cabins__content">
              <?php the_content(); ?>
            </div>
            <div class="c-cabins__gallery">
              <?php
                $args = array (
                  'posts_per_page' => 1,
                  'post_type'      => 'q_inn',
                );

                query_posts( $args );

                if ( have_posts() ):
                  while ( have_posts() ) :
                    the_post();
                    echo "<div class=\"c-carousel\">";
                      $images = rwmb_meta( 'quechalen_imgadv', 'type=image&size=thumbnail-gallery' );
                      foreach ( $images as $image ) {
                        echo "\n<img src='{$image['url']}' alt='{$image['alt']}' />";
                      }
                  endwhile;
                    echo "\n</div>";
                else:
                // Insert any content or load a template for no posts found.
                endif;
                wp_reset_query();
              ?>
            </div>
          </div>
        </div><!-- .entry-content -->
      </article><!-- #post-## -->

      <?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
