<?php
/*
Plugin Name: TaxonomiasGenerator
Plugin URI: 
Description: 
Version: 
Author: 
Author URI: 
License: 
License URI: 
*/
// Register Custom Taxonomy
function tax_ligas() {

	$labels = array(
		'name'                       => _x( 'Competiciones', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Competición', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Competiciones', 'text_domain' ),
		'all_items'                  => __( 'Todas las Competiciones', 'text_domain' ),
		'parent_item'                => __( 'Competición Padre', 'text_domain' ),
		'parent_item_colon'          => __( 'Competición Padre:', 'text_domain' ),
		'new_item_name'              => __( 'Nueva Competición', 'text_domain' ),
		'add_new_item'               => __( 'Agregar Nueva Competición', 'text_domain' ),
		'edit_item'                  => __( 'Editar Competición', 'text_domain' ),
		'update_item'                => __( 'Actualizar Competición', 'text_domain' ),
		'view_item'                  => __( 'Ver Competición', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Agregar o remover Competiciones', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Competiciones Populares', 'text_domain' ),
		'search_items'               => __( 'Buscar Competiciones', 'text_domain' ),
		'not_found'                  => __( 'No encontrada', 'text_domain' ),
		'no_terms'                   => __( 'No Competiciones', 'text_domain' ),
		'items_list'                 => __( 'Lista de Competiciones', 'text_domain' ),
		'items_list_navigation'      => __( 'Lista Navegable de Competiciones', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'Competiciones', array( 'partidos', 'equipos' ), $args );

}
add_action( 'init', 'tax_ligas', 0 );
