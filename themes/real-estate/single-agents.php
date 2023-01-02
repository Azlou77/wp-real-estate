<!-- Post types for sigle agents -->
<?php get_header() ?>

  <style>
      .bcontent {
          margin-top: 10px;
          margin-left: 0%;
      }
  </style>
<!-- Display details  for single agents-->
<?php
if (have_posts()) : 
    while (have_posts()) : the_post(); ?>
    <?php include 'template-parts/card-horizontale.php'; ?>
      <?php endwhile; 
    endif; ?>






<!-- Ajax requests -->
<h2>Il y a <?php comments_number(); ?></h2>

<?php if( get_comments_number() ): ?>
        
    <form 
        action="<?php echo admin_url( 'admin-ajax.php' ); ?>" 
        method="post" 
        class="js-load-comments"
    >
        <input 
            type="hidden" 
            name="postid" 
            value="<?php echo get_the_ID(); ?>"
        >
        <input 
            type="hidden" 
            name="nonce" 
            value="<?php echo wp_create_nonce( 'capitaine_load_comments' ); ?>"
        > 
        <!-- ou : wp_nonce_field( 'capitaine_load_comments' ); -->
        <input
            type="hidden"
            name="action"   
            value="capitaine_load_comments"
        >

        <button class="comments-load-button">Charger les commentaires</button>
    </form>

    <ol class="comments">
        <!-- les commentaires apparaitront ici -->
    </ol>

<?php endif; ?>
<?php get_comments(); ?>
<?php wp_list_comments(); ?>

<?php get_footer() ?>