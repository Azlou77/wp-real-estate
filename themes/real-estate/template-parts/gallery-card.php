 <!-- //Gallery images
<div class="gallery" id="sell">      
        <div class="image">
            <img class="image__img" alt="Brics" src=""   />
            <div class="image__overlay image__overlay--primary">
            <div class="image__description">
                <p class="image__title">Night House</p>
                <p class="image__details">Londres</p>
                </div>
            </div>
        </div>

        <div class="image">
            <img class="image__img" src="http://localhost/wordpress/wordpress/wp-content/uploads/2022/10/modern-house.jpg" alt="Bricks">
            <div class="image__overlay image__overlay--primary">
            <div class="image__description">
                <p class="image__title">Modern House</p>
                <p class="image__details">New York</p>
                </div>
            </div>
        </div>


        <div class="image">
            <img class="image__img" src="http://localhost/wordpress/wordpress/wp-content/uploads/2022/10/medellin-house.jpg">
            <div class="image__overlay image__overlay--primary">
            <div class="image__description">
                <p class="image__title">Medellin House</p>
                <p class="image__details">Paris</p>
                </div>
            </div>
        </div>
    </div> -->
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="gallery" id="sell">      
            <div class="image">
                    <img class="image__img" alt="Brics" src="<?php the_post_thumbnail(); ?>" />
                        <div class="image__overlay image__overlay--primary">
                            <div class="image__description">
                                <p class="image__title"><?php the_title ?></p>
                                <p class="image__details"><?php the_content ?></p>
                            </div>
                        </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php else: ?>
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
<?php endif; ?>
