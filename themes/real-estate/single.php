<?php get_header(); ?>
<div class="row">
    <div class="col-sm-12">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_header(); ?>

<div class="row">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="col-sm-8 col-sm-offset-2">
        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <?php   if(has_post_thumbnail()){
                the_post_thumbnail('large');
            };
            ?>

            <h1 class="single-entry-title"><?php the_title(); ?></h1>
            

            <div class="entry-content">
                <?php the_content(); ?>
            </div>

        </article>

    <?php endwhile; endif; ?>

    </div>

</div>



<?php get_footer(); ?>
