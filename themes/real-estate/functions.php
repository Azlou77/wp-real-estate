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
add_action('init', 'properties_custom_post_type');



function getIcon($icon){

    $user= '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 448 512">
    <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>';
    $twitter = '<svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M18 1.6875C17.325 2.025 16.65 2.1375 15.8625 2.25C16.65 1.8 17.2125 1.125 17.4375 0.225C16.7625 0.675 15.975 0.9 15.075 1.125C14.4 0.45 13.3875 0 12.375 0C10.4625 0 8.775 1.6875 8.775 3.7125C8.775 4.05 8.775 4.275 8.8875 4.5C5.85 4.3875 3.0375 2.925 1.2375 0.675C0.9 1.2375 0.7875 1.8 0.7875 2.5875C0.7875 3.825 1.4625 4.95 2.475 5.625C1.9125 5.625 1.35 5.4 0.7875 5.175C0.7875 6.975 2.025 8.4375 3.7125 8.775C3.375 8.8875 3.0375 8.8875 2.7 8.8875C2.475 8.8875 2.25 8.8875 2.025 8.775C2.475 10.2375 3.825 11.3625 5.5125 11.3625C4.275 12.375 2.7 12.9375 0.9 12.9375C0.5625 12.9375 0.3375 12.9375 0 12.9375C1.6875 13.95 3.6 14.625 5.625 14.625C12.375 14.625 16.0875 9 16.0875 4.1625C16.0875 4.05 16.0875 3.825 16.0875 3.7125C16.875 3.15 17.55 2.475 18 1.6875Z" fill="#1A1A1A"/>;
</svg>';

	$facebook = '<svg width="12" height="18" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.4008 18L3.375 10.125H0V6.75H3.375V4.5C3.375 1.4634 5.25545 0 7.9643 0C9.26187 0 10.3771 0.0966038 10.7021 0.139781V3.3132L8.82333 3.31406C7.35011 3.31406 7.06485 4.01411 7.06485 5.04139V6.75H11.25L10.125 10.125H7.06484V18H3.4008Z" fill="#1A1A1A"/>
</svg>';


	return $$icon;

}
