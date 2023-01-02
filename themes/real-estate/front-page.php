<!-- Page home static  -->
<?php get_header(); ?>
<body>
    <h1 class="d-flex justify-content-center" style="font-family:Roboto;">Real Estate Thème</h1>	
        <main id="site-content">
            <div class="grid-container">
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
                            'posts_per_page' => 3,
                            'cat' => 5,
                        );
                        $arr_posts = new WP_Query( $args ); 
                            if ( $arr_posts->have_posts() ) :
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();?>

                    <?php include('template-parts/card.php'); ?>
                        <?php endwhile;
                            endif;
                            wp_reset_postdata(); ?>
            </div>

            <h2 class="d-flex justify-content-center">Les derniers actualités</h2>
            <div class="grid-container">
                    <?php $args2 = array(
                            'posts_per_page' => 3,
                            'post_type' => 'post',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'post_status' => 'publish',
                            'suppress_filters' => true
                        );
                        $recent_posts = new WP_Query( $args2 );       
                            if ( $recent_posts->have_posts() ) :
                                while ( $recent_posts->have_posts() ) :
                                    $recent_posts->the_post();?>

                        <?php include('template-parts/card.php'); ?>
                            <?php endwhile;
                            endif; 
                            wp_reset_postdata(); ?>
            </div>
    </main>
</body>
<?php get_footer() ?>