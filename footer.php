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

<?php if( is_page( array(5,393)) ) { ?>

<div class="modal-overlay  closed" id="modal-overlay"></div>

<div class="modal  closed" id="modal">
<button class="close-button" id="close-button"></button>
<div class="modal-guts">
<div class="c-message">
<div class="c-message__title">
<div class="c-message__title-image"><img class="alignnone size-full wp-image-439" src="http://localhost:8888/quechalen/wp-content/uploads/2013/12/logo-compromiso.png" alt="Compromiso de Calidad Turistica" width="250" height="87" /></div>
<div class="c-message__title-copy">Obtuvimos la distinción "Buenas Prácticas en Destinos" del Programa del Ministerio de Turismo de Nación.</div>
</div>
<div class="c-message__content">
<div class="c-message__image"><img class="alignnone size-medium wp-image-438" src="http://localhost:8888/quechalen/wp-content/uploads/2013/12/buenas-practicas-foto-267x300.png" alt="Buenas practicas" width="267" height="300" /></div>
<div class="c-message__copy">

El Programa Buenas Prácticas en Destinos del Ministerio de Turismo, Presidencia de la Nación, reúne estándares de gestión y estándares de servicio al cliente, similares a las normas ISO 9000/2000, permitiendo a las empresas turísticas iniciar el camino de la calidad.

A su vez el Programa Buenas Prácticas en Destinos es una metodología que está basada en buenas prácticas de gestión del espacio físico y de la prestación del servicio para organizaciones tanto turísticas como vinculadas a esta actividad y tiene por finalidad provocar un aumento de la competitividad del destino en el que se localizan, a través de la mejora de la calidad de los componentes del producto turístico frecuentemente consumidos por los turistas y visitantes.

Buscando la optimización de nuestro Lugar, nos embarcamos en este Programa de Calidad Turística, logrando obtener el Reconocimiento a través de una Distinción en Calidad en el marco del Sistema Argentino de Calidad Turística.

Avanzamos en el camino de la calidad de la mano de todos los que formaron parte de este proyecto, Gracias a nuestros visitantes, huéspedes, consultantes, amigos y familiares.
<div class="u-text-cursive">Nuestro compromiso es con Uds.</div>
<div class="u-text-cursive">Cristian Capurro</div>
</div>
</div>
</div>
</div>
</div>
<?php } ?>

<?php wp_footer(); ?>

</body>
</html>
