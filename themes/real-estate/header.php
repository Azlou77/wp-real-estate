<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header id="site-header">
		<?php include('template-parts/navbar.php') ?>
			<div class="container">
				<div class="banner" style="background-image:url('http://localhost/wordpress/wp-content/uploads/2022/11/house2-3.jpg');">
				<?php get_search_form(); ?>
				</div>
			</div>
		
	</header><!-- #masthead -->		