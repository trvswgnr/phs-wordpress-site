<?php get_header(); ?>

<div class="container content">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) :
      the_post();
      the_content();
  ?>
  <?php endwhile; else : ?>

  <?php endif; ?>
</div>

<?php get_footer(); ?>
