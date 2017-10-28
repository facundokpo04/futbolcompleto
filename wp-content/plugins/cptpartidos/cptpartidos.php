<?php
/*
Plugin Name: CPTPartidos
Plugin URI: 
Description: 
Version: 
Author: 
Author URI: 
License: 
License URI: 
*/
if ( ! function_exists('wpn_partidos') ) {

// Register Custom Post Type
function wpn_partidos() {

	$labels = array(
		'name'                  => 'Partidos',
		'singular_name'         => 'Partido',
		'menu_name'             => 'Partidos',
		'name_admin_bar'        => 'Partidos',
		'archives'              => 'Archivo de Partidos',
		'attributes'            => 'Atributos de Partidos',
		'parent_item_colon'     => 'Partido Padre',
		'all_items'             => 'Todos lo Partidos',
		'add_new_item'          => 'Añadir nuevo Partido',
		'add_new'               => 'Añadir Nuevo Partido',
		'new_item'              => 'Nuevo Partido',
		'edit_item'             => 'Editar Partido',
		'update_item'           => 'Actualizar Partido',
		'view_item'             => 'Ver Partido',
		'view_items'            => 'Ver Partidos',
		'search_items'          => 'Buscar Partido',
		'not_found'             => 'No Encontrado',
		'not_found_in_trash'    => 'No Encontrado en la Papelera',
		'featured_image'        => 'Imagen Destacada',
		'set_featured_image'    => 'Cnfigurar Imagen Destacada',
		'remove_featured_image' => 'Remover Imagen Destacada',
		'use_featured_image'    => 'Usar como Imagen Destacada',
		'insert_into_item'      => 'Insertar en el Partido',
		'uploaded_to_this_item' => 'Actualizar en este partido',
		'items_list'            => 'Listado de Partidos',
		'items_list_navigation' => 'Lista navegable de Partido',
		'filter_items_list'     => 'Filtro de lista de Partido',
	);
	$args = array(
		'label'                 => 'Partido',
		'description'           => 'Post Type Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'taxonomies'            => array( 'category', 'post_tag','Competiciones'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-tickets-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Partidos', $args );

}
add_action( 'init', 'wpn_partidos', 0 );

}