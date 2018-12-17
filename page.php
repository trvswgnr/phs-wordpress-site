<?php get_header(); ?>

<div class="container content">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) :
	?>
	<h1><?php the_title(); ?></h1>
  <?php
			the_post();
			the_content();
  ?>
  <?php endwhile; else : ?>

  <?php endif; ?>
</div>

<?php get_footer(); ?>
