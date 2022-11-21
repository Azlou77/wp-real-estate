<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'cat' => ['4','5','6'],
);
$arr_posts = new WP_Query( $args );


if ( $arr_posts->have_posts() ) :
  
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>

        <div class="card" style="width: 18rem;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>      
            <?php
            if ( has_post_thumbnail() ) :
                the_post_thumbnail('post-thumbnail', ['class'=> 'card-img-top', 'style'=>'object-fit:cover;']) ;
            endif;
            ?>
            
        <div class="card-body">
            <h5 class="card-title"><?php the_title() ?></h5>
            <p class="card-text"><?php the_content()?></p>
        </div>
        </div>
        
      
        <?php
    endwhile;
endif;

