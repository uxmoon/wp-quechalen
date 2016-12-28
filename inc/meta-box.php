<?php

add_filter( 'rwmb_meta_boxes', 'quechalen_register_meta_boxes' );

function quechalen_register_meta_boxes( $meta_boxes )
{

	$prefix = 'quechalen_';

	$meta_boxes[] = array(
    'id'       => 'standard',
    'title'    => __( 'Galeria de Fotos', 'rwmb' ),
    'pages'    => array( 'q_cabin', 'q_inn', 'q_gallery' ),
    'context'  => 'normal',
    'priority' => 'high',
    'autosave' => true,
    'fields' => array(
      array(
        'name'             => __( 'Cargar fotos', 'rwmb' ),
        'id'               => "{$prefix}imgadv",
        'type'             => 'image_advanced',
        'max_file_uploads' => 60,
      )
    )
  );

  return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'q_text_rates' );
function q_text_rates( $meta_boxes ) {
  $meta_boxes[] = array(
    'title' => __( 'Detalles', 'quechalen' ),
    'pages' => 'page',
    'show'  => array(
      'relation' => 'OR',
      'template' => 'page-templates/rates.php',
    ),
    'fields' => array(
      array(
        'name'        => __( 'Precios actualizados', 'quechalen' ),
        'id'          => 'rates_updated_on',
        'type'        => 'text',
        'size'        => 30
      ),
      array(
        'name'        => __( 'Temporada Alta', 'quechalen' ),
        'id'          => 'rates_season_high',
        'type'        => 'text',
        'size'        => 50
      ),
      array(
        'name'        => __( 'Temporada Baja', 'quechalen' ),
        'id'          => 'rates_season_low',
        'type'        => 'text',
        'size'        => 50
      ),
      array(
        'type' => 'heading',
        'name' => esc_html__( 'Cabañas / Cabins', 'quechalen' ),
      ),
      array(
        'name'        => __( '2 Personas', 'quechalen' ),
        'id'          => 'rates_cabin_2_guests',
        'desc'        => __( 'Temporada Baja', 'quechalen' ),
        'type'        => 'text',
        'std'         => __( '', 'quechalen' ),
        'size'        => 15
      ),
      array(
        'name'        => __( '2 Personas', 'quechalen' ),
        'id'          => 'rates_cabin_2_guests_high',
        'desc'        => __( 'Temporada Alta', 'quechalen' ),
        'type'        => 'text',
        'std'         => __( '', 'quechalen' ),
        'size'        => 15
      ),
      array(
        'name'        => __( '3 Personas', 'quechalen' ),
        'id'          => 'rates_cabin_3_guests',
        'desc'        => __( 'Temporada Baja', 'quechalen' ),
        'type'        => 'text',
        'std'         => __( '', 'quechalen' ),
        'size'        => 15
      ),
      array(
        'name'        => __( '3 Personas', 'quechalen' ),
        'id'          => 'rates_cabin_3_guests_high',
        'desc'        => __( 'Temporada Alta', 'quechalen' ),
        'type'        => 'text',
        'std'         => __( '', 'quechalen' ),
        'size'        => 15
      ),
      array(
        'name'        => __( '4 Personas', 'quechalen' ),
        'id'          => 'rates_cabin_4_guests',
        'desc'        => __( 'Temporada Baja', 'quechalen' ),
        'type'        => 'text',
        'std'         => __( '', 'quechalen' ),
        'size'        => 15
      ),
      array(
        'name'        => __( '4 Personas', 'quechalen' ),
        'id'          => 'rates_cabin_4_guests_high',
        'desc'        => __( 'Temporada Alta', 'quechalen' ),
        'type'        => 'text',
        'std'         => __( '', 'quechalen' ),
        'size'        => 15
      ),
      array(
        'type' => 'heading',
        'name' => esc_html__( 'Posada / Inn', 'quechalen' ),
      ),
      array(
        'name'        => __( '2 personas', 'quechalen' ),
        'id'          => 'rates_inn_2',
        'desc'        => __( 'Temporada Baja, cama matrimonial', 'quechalen' ),
        'type'        => 'text',
        'std'         => __( '', 'quechalen' ),
        'size'        => 15
      ),
      array(
        'name'        => __( '2 personas', 'quechalen' ),
        'id'          => 'rates_inn_2_high',
        'desc'        => __( 'Temporada Alta, cama matrimonial', 'quechalen' ),
        'type'        => 'text',
        'std'         => __( '', 'quechalen' ),
        'size'        => 15
      ),
      array(
        'name'        => __( '2 personas', 'quechalen' ),
        'id'          => 'rates_inn_2_simple',
        'desc'        => __( 'Temporada Baja, camas simples', 'quechalen' ),
        'type'        => 'text',
        'std'         => __( '', 'quechalen' ),
        'size'        => 15
      ),
      array(
        'name'        => __( '2 personas', 'quechalen' ),
        'id'          => 'rates_inn_2_simple_high',
        'desc'        => __( 'Temporada Alta, camas simples', 'quechalen' ),
        'type'        => 'text',
        'std'         => __( '', 'quechalen' ),
        'size'        => 15
      ),
      array(
        'name'        => __( '3 personas', 'quechalen' ),
        'id'          => 'rates_inn_3',
        'desc'        => __( 'Temporada Baja', 'quechalen' ),
        'type'        => 'text',
        'std'         => __( '', 'quechalen' ),
        'size'        => 15
      ),
      array(
        'name'        => __( '3 personas', 'quechalen' ),
        'id'          => 'rates_inn_3_high',
        'desc'        => __( 'Temporada Alta', 'quechalen' ),
        'type'        => 'text',
        'std'         => __( '', 'quechalen' ),
        'size'        => 15
      ),
      array(
        'name'        => __( '4 personas', 'quechalen' ),
        'id'          => 'rates_inn_4',
        'desc'        => __( 'Temporada Baja', 'quechalen' ),
        'type'        => 'text',
        'std'         => __( '', 'quechalen' ),
        'size'        => 15
      ),
      array(
        'name'        => __( '4 personas', 'quechalen' ),
        'id'          => 'rates_inn_4_high',
        'desc'        => __( 'Temporada Alta', 'quechalen' ),
        'type'        => 'text',
        'std'         => __( '', 'quechalen' ),
        'size'        => 15
      ),
    ),
  );
  return $meta_boxes;
}
