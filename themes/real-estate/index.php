<?php get_header(); ?>
<body>

    <h2 class="d-flex justify-content-around"><?php bloginfo( 'description' ); ?></h2>				
    <main id="site-content">
        <div class="container" style="display:flex; flex-flow:row wrap; max-width:1000px">
        <div class="row d-flex justify-content-around">
             <?php include('template-parts/gallery-card.php'); ?>
             <?php include('template-parts/gallery-card2.php'); ?> 
             <?php include('template-parts/gallery-card3.php'); ?>
             <?php include('template-parts/test.php'); ?>    
        </div>
    </main>
</body>
<?php get_footer(); ?>

	
	