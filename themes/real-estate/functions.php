<?php 
// Theme logic

//All supports
function real_estate_supports(){
    // Support logo custom
    add_theme_support('custom-logo');
    // Support register menu
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
    //Support menus
    add_theme_support('menus');
    add_theme_support( 'post-thumbnails', array( 'post', 'page', 'agents', 'properties' ) );
  
}

//Add image size, can crop in admin if don't have the same size
function real_estate_img_sizes(){
    set_post_thumbnail_size( 100, 150, true );
    add_image_size('houses', 150, 200, true );
    add_image_size( 'agents', 328, 228, true );

    
}

//Filter excerpt
function wpdocs_custom_excerpt_length( $length ) {
	return 10;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

//Register styles, scripts, fonts
function real_estate_register_assets() {
    // style files
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style('home', get_template_directory_uri() . './assets/css/home.css');
    wp_enqueue_style('properties', get_template_directory_uri() . './assets/css/properties.css');
    wp_enqueue_style('single', get_template_directory_uri() . './assets/css/single.css');
    wp_enqueue_style('footer', get_template_directory_uri() . './assets/css/footer.css');
    wp_enqueue_style('form', get_template_directory_uri() . './assets/css/form.css');
    // script files
    wp_enqueue_script('main', get_template_directory_uri() . './assets/js/main.js');

    //boostrap assets
    //bootstrap css
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');

    //bootstrap js
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', [], false, true);
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.1.min.js', [], false, true);


    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');

}
//Display recent comments
function real_estate_recent_comments(){
    $args = array(
        'number' => 3,
        'status' => 'approve',
        'post_status' => 'publish',
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC',
        'post_status' => 'publish',
        'suppress_filters' => true
    );
    $recent_comments = get_comments($args);
    foreach($recent_comments as $recent){
        echo '<li><a href="' . get_permalink($recent->comment_post_ID) . '">' . $recent->comment_author . '</a></li>';
    }
}

//Filter by category posts
function real_estate_filter_posts_by_category() {
  if (is_category('Agents')) : 
    $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => 9,
      'cat' => 5,
    );
    elseif (is_category('Houses')) :
      $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 9,
        'cat' => 4,
      ); 
    else: 
      echo 'No  category found';
    endif;
      $arr_posts = new WP_Query( $args );                            
      if ( $arr_posts->have_posts() ) :
              while ( $arr_posts->have_posts() ) :
                  $arr_posts->the_post();
      ?>     
     
      <?php include('template-parts/card.php'); ?>
      <?php endwhile;
      endif;
  }



//Register sidebar
register_sidebar( array(
	'id' => 'blog-sidebar',
	'name' => 'Blog',
  'before_widget'  => '<div class="site__sidebar__widget %2$s">',
  'after_widget'  => '</div>',
  'before_title' => '<p class="site__sidebar__widget__title">',
  'after_title' => '</p>',
) );
 
//Register pagination
the_posts_pagination( array(
  'mid_size' => 2,
  'prev_text' => __( 'Previous Page', 'textdomain' ),
  'next_text' => __( 'Next Page', 'textdomain' ),
  ) );

// Add themes parameters
add_action('customize_register','real_estate_customize_register');
function real_estate_customize_register($wp_customize) {
	// Ajouter une section
	$wp_customize->add_section( 'custom_real_estate', array(
	  'title' => __( 'Personnalisation du thème real_estate' ),
	  'description' => __( 'Quelques réglages bien utiles :)' ),
	  'priority' => 1,
	) );

	// Add setting main-color
	$wp_customize->add_setting( 'header_background', array(
    'type' => 'theme_mod',
	  'transport' => 'postMessage', // or postMessage
	  'sanitize_callback' => 'sanitize_hex_color',
	  'default' => '#3F51B5'
	) );

	// Add control
	$wp_customize->add_control(
	  new WP_Customize_Color_Control(
	    $wp_customize, // WP_Customize_Manager
	    'header_background', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Couleur header' ),
	      'section' => 'custom_real_estate',
	    )));
    add_action('customize_preview_init', function () {
      wp_enqueue_script( 'custom_real_estate', get_template_directory_uri() . '/assets/js/colors.js', ['jquery', 'customize-preview'], '', true );

  });

}

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

add_action( 'after_setup_theme', 'register_navwalker' );
add_action( 'after_setup_theme', 'real_estate_supports' );
add_action('wp_enqueue_scripts', 'real_estate_register_assets');
