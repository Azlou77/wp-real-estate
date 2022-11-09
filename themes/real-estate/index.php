<?php get_header(); ?>
<body>
    <h1><?php bloginfo( 'name' ); ?></h1>
    <h2><?php bloginfo( 'description' ); ?></h2>				
    <main id="site-content">
        <div class="container">
             <?php include('template-parts/gallery-card.php'); ?> 
        </div>
    </main>
</body>
<?php get_footer(); ?>

	
	