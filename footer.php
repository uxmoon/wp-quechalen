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
    <ul class="site-info-contact">
      <li>Los Mandarinos S/Nº. Carpintería. San Luis</li><li>Teléfono comercial (02656) 49-0117 / Particular (02656) 47.7288</li><li><a href="mailto:info@quechalen.com.ar">info@quechalen.com.ar</a></li>
    </ul>
    <div class="site-footer__content">
      <div class="site-info">
        <span>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. Todos los derechos reservados.</span>
        <a href="https://www.facebook.com/cabanas.quechalen"><svg class="icon icon-facebook"><use xlink:href="#icon-facebook"></use></svg> facebook.com/cabanas.quechalen</a>
      </div><!-- .site-info -->
    </div>
  </footer><!-- #colophon -->
</div><!-- #page -->

<div class="modal-overlay" id="modal-overlay"></div>

<?php wp_footer(); ?>

</body>
</html>
