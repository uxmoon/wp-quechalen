<?php
/*
Template Name: Promotions
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
          <?php
            $args = array (
            'posts_per_page' => -1,
            'post_type'      => 'q_promotions',
            );

            query_posts( $args );

          if ( have_posts() ):
            while ( have_posts() ) :
              the_post();
                echo "\n<div class=\"c-promotions__item\">";
                the_content();
                echo "</div>";
            endwhile;
          else:
          // Insert any content or load a template for no posts found.
          endif;
          wp_reset_query(); ?>
          <?php the_content() ?>
        </div><!-- .entry-content -->
      </article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
