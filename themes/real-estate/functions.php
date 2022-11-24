<?php 
// Logique du thème

//Tous les supports
function real_estate_supports(){
    // Support de logo custom
    add_theme_support('custom-logo');
    //Support des menus
    add_theme_support('menus');
  
}

function real_estate_img_sizes(){
    if ( in_category( '9' )) {
        // different size for one category
        set_post_thumbnail_size( 100, 150, true ); 
    } elseif ( in_category( array( '5', '7' ) )) {
        // different size for multiple categories
        set_post_thumbnail_size( 150, 200, true ); 
    } else {
        // default size
        set_post_thumbnail_size( 328, 228, true ); 
    }
}


//Enrengistre  les styles et scripts
function real_estate_register_assets() {
    // style file
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style('home', get_template_directory_uri() . './assets/css/home.css');
    // script file
    wp_enqueue_script('main', get_template_directory_uri() . './assets/js/main.js');

    //boostrap assets
        wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
        wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
        wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', [], false, true);
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.1.min.js', [], false, true);
        wp_enqueue_style('bootstrap');
        wp_enqueue_script('bootstrap');
}

//Enregistrer un emplacement de menu
function registerMenus(){
	register_nav_menus( array(
	    'primary_menu' => __( 'Primary Menu', 'text_domain' ),
	    'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
	) );
}

add_action( 'after_setup_theme', 'real_estate_supports' );
add_action('wp_enqueue_scripts', 'real_estate_register_assets');
