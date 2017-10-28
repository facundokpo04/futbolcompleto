 if ( ! function_exists('equipos_post_type') ) {

// Register Custom Post Type
function equipos_post_type() {

	$labels = array(
		'name'                  => _x( 'Equipos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Equipo', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Equipos', 'text_domain' ),
		'name_admin_bar'        => __( 'Equipos', 'text_domain' ),
		'archives'              => __( 'Archivo de Equipo', 'text_domain' ),
		'attributes'            => __( 'Atributos de Equipo', 'text_domain' ),
		'parent_item_colon'     => __( 'Equipo padre', 'text_domain' ),
		'all_items'             => __( 'Todos los Equipos', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nuevo equipo', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo equipo', 'text_domain' ),
		'edit_item'             => __( 'Editar equipo', 'text_domain' ),
		'update_item'           => __( 'Actualizar equipo', 'text_domain' ),
		'view_item'             => __( 'Ver equipo', 'text_domain' ),
		'view_items'            => __( 'Ver equipos', 'text_domain' ),
		'search_items'          => __( 'Buscar Equipo', 'text_domain' ),
		'not_found'             => __( 'No encontrada', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Configurar imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Remover Imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Intertar en el equipo', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar este equipo', 'text_domain' ),
		'items_list'            => __( 'Lista de Equipos', 'text_domain' ),
		'items_list_navigation' => __( 'Lista navegable de Equipos', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de lista de equipos', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Equipo', 'text_domain' ),
		'description'           => __( 'Equipos de futbol', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'excerpt', 'thumbnail', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-shield',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Equipos', $args );

}
add_action( 'init', 'equipos_post_type', 0 );

}