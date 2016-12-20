<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Quechalen
 */

?>

  </div><!-- #content -->

  <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info-contact">
      Los Mandarinos S/Nº. Carpintería. San Luis  Teléfono comercial (02656) 49-0117 / Particular (02656) 47.7288  <a href="mailto:info@quechalen.com.ar">info@quechalen.com.ar</a>
    </div>
    <div class="site-info">
      <p>&copy; <?php echo date(Y); ?> <?php bloginfo( 'name' ); ?>. Todos los derechos reservados.</p>
      <a href="https://www.facebook.com/cabanas.quechalen">facebook.com/cabanas.quechalen</a>
    </div><!-- .site-info -->
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
