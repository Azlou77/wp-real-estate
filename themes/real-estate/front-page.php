<!-- Page home static  -->
<?php get_header(); ?>
<body>
    <h1 class="d-flex justify-content-center mt-5" style="font-family:Roboto;">Real Estate Thème</h1>
    <h2 class="d-flex justify-content-around"><?php bloginfo( 'description' ); ?></h2>				
        <main id="site-content">
            <div class="container" style="display:flex; flex-flow:row wrap; max-width:1000px">
                <div class="row d-flex justify-content-around">
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
                   
                    <?php include('template-parts/gallery-card.php'); ?>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </main>
    </body>

<?php get_footer() ?>