<?php get_header(); ?>

<main id="site-content">
	<div class="container">
		<?php include('template-parts/identity-card.php'); ?>
	</div>
</main>
<body>
    <h1><?php bloginfo( 'name' ); ?></h1>
    <h2><?php bloginfo( 'description' ); ?></h2>				
    <?php include('template-parts/gallery-card.php'); 
    ?>
				
 
		<?php wp_footer(); ?>
	</body>
</html>
<?php get_footer(); ?>

	
	