<?php get_header(); ?>

<?php
$page_title = get_field('page_heading');
$default_title = get_the_title();
?>

<div class="container container--sm content u-text-center">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) :
	?>
	<h1><?php if ($page_title) { echo $page_title; } else { echo $default_title; } ?></h1>
  <?php
			the_post();
			the_content();
  ?>
  <?php endwhile; else : ?>

  <?php endif; ?>
</div>

<?php get_footer(); ?>
