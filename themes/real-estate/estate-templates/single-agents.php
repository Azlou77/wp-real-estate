<?php get_header(); ?>
<?php
$args = array(
    'post_type' => 'agents',
    'post_status' => 'publish',
    'category_name' => 'Agents',
    'posts_per_page' => 1,
);
$arr_posts = new WP_Query( $args );
  
if ( $arr_posts->have_posts() ) :
  
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
        <div class="row" style="margin-bottom:107px;">
            <div class="col-8 justify-content-start">
                <h1 class="d-flex justify-content-start"><?php the_title() ?></h1>
                    <h2 class="d-flex justify-content-start">About</h2>
                        <p><?php the_content()?></p>
            </div>
            <div class="col-4 d-flex justify-content-center" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>      
            <?php
            if ( has_post_thumbnail() ) :
                the_post_thumbnail('medium', ['class'=> 'card-img-top ', 'style'=>'object-fit:cover; height:261px; width:230px']) ;
            endif;
            ?>
            </div>
        </div>

        <div class="row mt-5 d-flex justify-content-end ">
                    <!-- Grid column -->
        <div class="col-4 ">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 ">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->
        
            </div>
           

            
      
        <?php
    endwhile;
endif; ?>


<?php get_footer(); ?>
