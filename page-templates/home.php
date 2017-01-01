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
        </div><!-- .entry-content -->

      </article><!-- #post-## -->
      <?php endwhile;	?>

		</main><!-- #main -->
	</div><!-- #primary -->
<!--
<div class="modal-overlay" id="modal-overlay"></div>

<div class="modal" id="modal">
  <button class="close-button" id="close-button">close</button>
  <div class="modal-guts">
    <h1>Modal Example</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae expedita corrupti laudantium aperiam, doloremque explicabo ipsum earum dicta saepe delectus totam vitae ipsam doloribus et obcaecati facilis eius assumenda, cumque.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae expedita corrupti laudantium aperiam, doloremque explicabo ipsum earum dicta saepe delectus totam vitae ipsam doloribus et obcaecati facilis eius assumenda, cumque.</p>
  </div>
</div>

<button id="open-button" class="open-button">Open Button</button> -->

<?php
get_footer();
