<?php

add_filter( 'rwmb_meta_boxes', 'quechalen_register_meta_boxes' );

function quechalen_register_meta_boxes( $meta_boxes )
{

	$prefix = 'quechalen_';

	// 1st meta box
	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id' => 'standard',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title' => __( 'Galeria de Fotos', 'rwmb' ),

		// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
		'pages' => array( 'q_cabin', 'q_inn', 'q_gallery' ),

		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context' => 'normal',

		// Order of meta box: high (default), low. Optional.
		'priority' => 'high',

		// Auto save: true, false (default). Optional.
		'autosave' => true,

		// List of meta fields
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

