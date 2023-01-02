<?php get_header() ?>
<style>
    .bcontent {
        margin-top: 10px;
        margin-left: 0%;
    }
</style>
<!-- Cette page affiche de détail d'un bien -->
<?php
if (have_posts()) : 
    while (have_posts()) : the_post(); ?>
    <?php include 'template-parts/card-horizontale.php'; ?>
    <?php endwhile; 
endif; ?>
        
<?php  comments_template(); ?>
<?php get_footer() ?>