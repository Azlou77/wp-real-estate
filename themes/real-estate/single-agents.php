<?php get_header() ?>
<!-- Cette page affiche de détail d'un bien -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="card border shadow mb-4">
      <div class="card-header bg-light">
        <h1><?php the_title() ?></h1>
      </div>
      <div class="card-body">
        
        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="card-img-top" style="width:100%; height:auto;">
      </div>
      <div class="card-footer bg-light">
        <?php the_content() ?>
      </div>
      <?php  comments_template(); ?>
    </div>  
    </div>
<?php endwhile;
endif; ?>

<?php get_footer() ?>