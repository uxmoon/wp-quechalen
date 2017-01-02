<?php
/*
Template Name: Home
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="entry-content">
          <?php the_content(); ?>

<!-- <div class="modal" id="modal">
  <button class="close-button" id="close-button">Obvious Close Button</button>
  <div class="modal-guts">


  </div>
</div> -->

        </div><!-- .entry-content -->

      </article><!-- #post-## -->
      <?php endwhile;	?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
