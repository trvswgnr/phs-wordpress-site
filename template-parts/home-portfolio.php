<?php
$recent_work = get_field('recent_work');
$home_about_button = get_field('home_about_button');
?>
<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6">
				<h4>Recent Work</h4>
				<div class="portfolio-sample">
					<?php
					if ($recent_work) :
						foreach ($recent_work as $image) :
					?>
					<div class="portfolio-sample__item-wrapper">
						<div class="portfolio-sample__item" style="background-image: url(<?php echo $image['sizes']['medium']; ?>)"></div>
					</div>
					<?php
						endforeach;
					endif;
					?>
				</div>
				<div class="portfolio-sample__more">
					<a href="#">View All Work</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<h4>About Premier Home Solutions</h4>
				<p><?php the_field('home_about'); ?></p>
				<a href="<?php echo $home_about_button['url']; ?>" class="btn"><?php echo $home_about_button['title']; ?></a>
			</div>
		</div>
	</div>
</section>
