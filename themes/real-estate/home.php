<!-- Page blog posts -->
<?php get_header(); ?>
<body>
    <h1 class="d-flex justify-content-center" style="font-family:Roboto;">Real Estate Thème</h1>
    <h2 class="d-flex justify-content-around"><?php bloginfo( 'description' ); ?></h2>				
        <main id="site-content">
            <div class="grid-container" style="max-width:1000px;">
             <!-- <aside class="site__sidebar">
                            <ul>
                                <?php dynamic_sidebar( 'blog-sidebar' ); ?>
                            </ul>
                        </aside> -->
            <style>
                .grid-container{
                    display: grid;
                    grid-template-columns: repeat(3, 1fr);
                    grid-gap:20px;
                    max-width:1000px;
                    margin-left: 15%;
                }
                </style>
                    <?php
                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'cat' => ['4'],
                            );
                            $arr_posts = new WP_Query( $args );
                            
                    if ( $arr_posts->have_posts() ) :
                            while ( $arr_posts->have_posts() ) :
                                $arr_posts->the_post();
                    ?>     
                   
                    <?php include('template-parts/card.php'); ?>    
                    <?php endwhile;
                    endif; ?>   
                </div>
            </div>
        </main>
    </body>
<?php get_footer() ?>