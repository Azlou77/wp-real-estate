<!-- Card with pictures verticales -->
<div class="card" style="width: 18rem;padding:initial;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
        if ( has_post_thumbnail() ) :
            the_post_thumbnail(['thumbnail', 'houses', 'agents'] ,['class'=> 'card-img-top', 'style'=>'object-fit:cover;']) ;
        endif;?>

    <div class="card-body">
        <h5 class="card-title"><?php the_title() ?></h5>
            <p class="card-text"><?php the_excerpt() ?></p>
                <a href="<?php the_permalink() ?>" class="btn btn-outline-secondary">Voir le détail du bien</a>
    </div>
</div>
