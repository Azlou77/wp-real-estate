<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php wp_head(); ?>
        <style>
        .container{
            display: grid;
            grid-template-row: repeat(3, 1fr);
            grid-gap:10px;
            max-width:1000px;
        } 
        </style>
	</head>
	<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header>
	<nav class="navbar navbar-expand-md navbar-light bg-light color-header" role="navigation" style="background-color: <?= get_theme_mod('header_background'); ?>!important">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'header',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
	
        ?>
        <?php get_search_form(); ?>
    </div>
</nav>
	</header><!-- #masthead -->		
	