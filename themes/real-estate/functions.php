<?php 
// Logique du thème

//Tous les supports
function real_estate_supports(){
    // Support de logo custom
    add_theme_support('custom-logo');
    // Support des images des posts
    add_theme_support('post-thumbnails');
    //Support des menus
    add_theme_support('menus');
}

//Enrengistre  les styles et scripts
function real_estate_register_assets() {
    // style file
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    // script file
    wp_enqueue_script("main", get_template_directory_uri() ."./assets/js/main.js");

    //boostrap assets
        wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
        wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
        wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', [], false, true);
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.1.min.js', [], false, true);
        wp_enqueue_style('bootstrap');
        wp_enqueue_script('bootstrap');
}

// enregistrer un emplacement de menu
function registerMenus(){
	register_nav_menus( array(
	    'primary_menu' => __( 'Primary Menu', 'text_domain' ),
	    'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
	) );
}

add_action( 'after_setup_theme', 'real_estate_supports' );
add_action('wp_enqueue_scripts', 'real_estate_register_assets');

//Templates pour les articles seuls
//Templates pour les articles seuls des Agents
function agents_custom_post_type() {
	register_post_type('agents_product',
		array(
			'labels'      => array(
				'name'          => __('Agents', 'textdomain'),
				'singular_name' => __('Agents', 'textdomain'),
			),
                'menu_position'=> 4,
				'public'       => true,
				'has_archive'  => true,
                'menu_icon'    => 'dashicons-admin-users',
                'supports'=>
                [
                    'title',
                    'editor',
                    'thumbnail',
                    'comments',
                ]
		)
	);
}
add_action('init', 'agents_custom_post_type');


//Templates pour les articles seuls des Properties
function properties_custom_post_type() {
	register_post_type('properties_product',
		array(
			'labels'      => array(
				'name'          => __('Properties', 'textdomain'),
				'singular_name' => __('Properties', 'textdomain'),
			),
                'menu_position'=> 5,
				'public'      => true,
				'has_archive' => true,
                'menu_icon'    => 'dashicons-building',
                'taxonomies'  => array( 'Houses', 'Apartments', 'Rent', 'Buy'),
                'supports'=>
                [
                    'title',
                    'editor',
                    'thumbnail',
                    'comments',
                ]
		)
	);
}
//Taxonomies pour les articles seuls des Properties
add_action('init', 'properties_custom_post_type');
register_taxonomy('book_genre', ['book'], [
    'label' => __('Genres', 'txtdomain'),
    'hierarchical' => true,
    'rewrite' => ['slug' => 'book-genre'],
    'show_admin_column' => true,
    'show_in_rest' => true,
    'labels' => [
        'singular_name' => __('Genre', 'txtdomain'),
        'all_items' => __('All Genres', 'txtdomain'),
        'edit_item' => __('Edit Genre', 'txtdomain'),
        'view_item' => __('View Genre', 'txtdomain'),
        'update_item' => __('Update Genre', 'txtdomain'),
        'add_new_item' => __('Add New Genre', 'txtdomain'),
        'new_item_name' => __('New Genre Name', 'txtdomain'),
        'search_items' => __('Search Genres', 'txtdomain'),
        'parent_item' => __('Parent Genre', 'txtdomain'),
        'parent_item_colon' => __('Parent Genre:', 'txtdomain'),
        'not_found' => __('No Genres found', 'txtdomain'),
    ]
]);
