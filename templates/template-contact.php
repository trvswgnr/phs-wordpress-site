<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<?php
$page_title = get_field('page_heading');
$default_title = get_the_title();
?>

<div class="container content u-text-center">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) :
	?>
	<h1><?php if ($page_title) { echo $page_title; } else { echo $default_title; } ?></h1>
	<div class="container u-text-muted">
		<?php
		the_post();
		the_content();
		?>
	</div>
	<div class="contact-form-wrapper">
  <?php echo do_shortcode('[contact-form-7 id="26" title="Contact"]'); ?>
  </div>
  <?php endwhile; else : ?>

  <?php endif; ?>
</div>

<?php get_footer(); ?>
