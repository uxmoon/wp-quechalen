<?php
/*
Template Name: Cabins
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <?php
      while ( have_posts() ) : the_post();
      ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

          <?php
            $c = 0;
            $args = array (
              'posts_per_page' => -1,
              'post_type'      => 'q_cabin',
            );

            query_posts( $args );
            if ( have_posts() ):

              echo "<ul class=\"c-nav-inner\">";

              while ( have_posts() ) :
                the_post();
                  $c++;
                  $classCurrent = ($c == 1) ? 'current' : '';
                  echo "<li class=\"" . $classCurrent . "\" data-tab=\"tab-" . $c . "\">";
                  the_title();
                  echo "</li>";
              endwhile;

              echo "</ul>";

            else:
            // Insert any content or load a template for no posts found.
            endif;
            wp_reset_query();
          ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
          <div class="c-cabins">
            <div class="c-cabins__content">
              <?php the_content(); ?>
            </div>
            <div class="c-cabins__gallery">
          <?php
            $c = 0;
            $args = array (
            'posts_per_page' => -1,
            'post_type'      => 'q_cabin',
            );

            query_posts( $args );

            if ( have_posts() ):
              while ( have_posts() ) :
                the_post();

                  $c++;
                  $classCurrent = ($c == 1) ? 'current' : '';

                  echo "\n<div id=\"tab-";
                  echo $c;
                  echo '" class="tab-content  ';
                  echo $classCurrent;
                  echo "\">";
                  echo "<div class=\"c-carousel\">";

                  $images = rwmb_meta( 'quechalen_imgadv', 'type=image&size=thumbnail-gallery' );

                  foreach ( $images as $image ) {
                    echo "\n<a href=\"{$image['full_url']}\" data-lightbox=\"";
                    echo "gallery";
                    echo "{$c}\"><img src=\"{$image['url']}\" alt=\"{$image['alt']}\" /></a>";
                  }

                  echo "\n</div>";
                  echo "\n</div>";

              endwhile;
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
