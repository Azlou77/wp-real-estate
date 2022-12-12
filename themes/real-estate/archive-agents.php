<!-- Templates for Agents  -->
<?php get_header(); ?>
<link rel="stylesheet" href="../real-estate/assets/css/properties.css">
<body>
    <h1 class="d-flex justify-content-center" style="font-family:Roboto;">Real Estate Thème</h1>	
    <div class="container-fluid">
    <aside id="sidebar">
        	<ul>
            	<?php dynamic_sidebar( 'blog-sidebar' ); ?>
            </ul>
        </aside>
        <main id="site-content" class="grid-container">
                <style>
                .grid-container{
                    display: grid;
                    grid-template-columns: repeat(3, 1fr);
                    grid-gap:20px;
                    width:765px;
                    margin-left: 27%;
                    margin-top:-62%;
                }
                </style>
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'cat' => ['5'],
                        'posts_per_page' => 6
                    );
               

                $arr_posts = new WP_Query( $args );
                
                        
                if ( $arr_posts->have_posts() ) :
                        while ( $arr_posts->have_posts() ) :
                            $arr_posts->the_post(); ?>
                    <?php include('template-parts/card.php'); ?>
                    <?php endwhile;
                    endif; ?>     
                    <?php  real_estate_recent_comments();?>   
        </main>
    </div> 
  
    </body>
<?php get_footer() ?>
