<?php
// module 1: HERO
$home_hero_heading = get_field('home_hero_heading');
$home_hero_subheading = get_field('home_hero_subheading');
$home_hero_button = get_field('home_hero_button');
?>
<div class="hero hero--home" style="background-size: cover; background-image: url(<?php echo get_template_directory_uri() . '/assets/img/hero-home.png'; ?>)">
  <div class="hero__inner">
    <div class="container">
			<h2 class="hero__heading"><?php echo $home_hero_heading; ?></h2>
			<div class="hero__subheading">
				<p><?php echo $home_hero_subheading; ?></p>
			</div>
			<div class="hero__btn-wrapper">
				<a href="<?php echo $home_hero_button['url']; ?>" class="btn hero__btn"><?php echo $home_hero_button['title']; ?></a>
      </div>
    </div>
  </div>
</div><!-- /.hero.hero--home -->
