<?php

// Inns

add_action('init', 'cptui_register_my_cpt_q_inn');
function cptui_register_my_cpt_q_inn() {
register_post_type('q_inn', array(
'label'           => 'Posadas',
'description'     => '',
'public'          => true,
'show_ui'         => true,
'show_in_menu'    => true,
'capability_type' => 'post',
'map_meta_cap'    => true,
'hierarchical'    => false,
'rewrite'         => array('slug' => 'posadas', 'with_front' => 1),
'query_var'       => true,
'supports'        => array('title','editor'),
'labels'          => array (
  'name'               => 'Posadas',
  'singular_name'      => 'Posada',
  'menu_name'          => 'Posadas',
  'add_new'            => 'Agregar nueva',
  'add_new_item'       => 'Agregar nueva',
  'edit'               => 'Editar',
  'edit_item'          => 'Editar',
  'new_item'           => 'Posada nueva',
  'view'               => 'Ver',
  'view_item'          => 'Ver posada',
  'search_items'       => 'Buscar posada',
  'not_found'          => 'No hay posadas',
  'not_found_in_trash' => 'No hay posadas en la papelera',
  'parent'             => 'Posada principal',
)
) ); }





// Promotions

add_action('init', 'cptui_register_my_cpt_q_promotions');
function cptui_register_my_cpt_q_promotions() {
register_post_type('q_promotions', array(
'label'           => 'Promociones',
'description'     => '',
'public'          => true,
'show_ui'         => true,
'show_in_menu'    => true,
'capability_type' => 'post',
'map_meta_cap'    => true,
'hierarchical'    => false,
'rewrite'         => array('slug' => 'promociones', 'with_front' => 1),
'query_var'       => true,
'supports'        => array('title','editor'),
'labels'          => array (
  'name'               => 'Promociones',
  'singular_name'      => 'Promoción',
  'menu_name'          => 'Promociones',
  'add_new'            => 'Agregar nueva',
  'add_new_item'       => 'Agregar nueva promoción',
  'edit'               => 'Editar',
  'edit_item'          => 'Editar promoción',
  'new_item'           => 'Nueva promoción',
  'view'               => 'Ver',
  'view_item'          => 'Ver promoción',
  'search_items'       => 'Buscar promoción',
  'not_found'          => 'No hay promociones',
  'not_found_in_trash' => 'No hay promociones en la papelera',
  'parent'             => 'Promoción principal',
)
) ); }





// Cabins
add_action('init', 'cptui_register_my_cpt_q_cabin');
function cptui_register_my_cpt_q_cabin() {
register_post_type('q_cabin', array(
'label'           => 'Cabañas',
'description'     => '',
'public'          => true,
'show_ui'         => true,
'show_in_menu'    => true,
'capability_type' => 'post',
'map_meta_cap'    => true,
'hierarchical'    => false,
'rewrite'         => array('slug' => 'cabana', 'with_front' => 1),
'query_var'       => true,
'supports'        => array('title','editor'),
'labels'          => array (
  'name'               => 'Cabañas',
  'singular_name'      => 'Cabaña',
  'menu_name'          => 'Cabañas',
  'add_new'            => 'Agregar nueva',
  'add_new_item'       => 'Agregar nueva',
  'edit'               => 'Editar',
  'edit_item'          => 'Editar',
  'new_item'           => 'Cabaña nueva',
  'view'               => 'Ver',
  'view_item'          => 'Ver cabaña',
  'search_items'       => 'Buscar cabaña',
  'not_found'          => 'No hay cabañas',
  'not_found_in_trash' => 'No hay cabañas en la papelera',
  'parent'             => 'Cabaña principal',
)
) ); }





// Galleries

add_action('init', 'cptui_register_my_cpt_q_gallery');
function cptui_register_my_cpt_q_gallery() {
register_post_type('q_gallery', array(
'label'               => 'Galerías',
'description'         => '',
'public'              => true,
'show_ui'             => true,
'show_in_menu'        => true,
'capability_type'     => 'post',
'map_meta_cap'        => true,
'hierarchical'        => false,
'rewrite'             => array('slug' => 'galerias', 'with_front' => 1),
'query_var'           => true,
'exclude_from_search' => true,
'supports'            => array('title'),
'labels'              => array (
  'name'               => 'Galerías',
  'singular_name'      => 'Galería',
  'menu_name'          => 'Galerías',
  'add_new'            => 'Agregar nueva',
  'add_new_item'       => 'Agregar nueva galeria',
  'edit'               => 'Editar',
  'edit_item'          => 'Editar galería',
  'new_item'           => 'Nueva galería',
  'view'               => 'Ver',
  'view_item'          => 'Ver galería',
  'search_items'       => 'Buscar',
  'not_found'          => 'No hay resultados',
  'not_found_in_trash' => 'No hay resultados en la papelera',
  'parent'             => 'Galería principal',
)
) ); }