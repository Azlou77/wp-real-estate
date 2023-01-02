<!-- Post types for sigle agents -->
<?php get_header() ?>
  <style>
      .bcontent {
          margin-top: 10px;
          margin-left: 0%;
      }
  </style>
<!-- Display details  for sigle agents-->
<?php
if (have_posts()) : 
    while (have_posts()) : the_post(); ?>
    <?php include 'template-parts/card-horizontale.php'; ?>
      <?php endwhile; 
    endif; ?>
<?php  comments_template(); ?>
<?php get_footer() ?>