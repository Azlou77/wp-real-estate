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
                          real_estate_filter_posts_by_category();
                    ?>
                </div>
            </div>
            <h2>Les derniers actualités</h2>
            <?php  real_estate_recent_posts();?>
        </main>
    </body>
<?php get_footer() ?>