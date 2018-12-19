<?php
// module 2: SERVICES
$services = get_field('home_services'); ?>

<div class="section section--services">
	<div class="container">
		<div class="row">

		<?php
		if ($services) :
			foreach ($services as $service) : ?>
			<div class="col-md-3 col-sm-6 col-xs-12 service-wrapper">
				<div class="service">
					<h3 class="service__heading"><?php echo $service['heading']; ?></h3>
					<div class="service__description">
						<p><?php echo $service['description']; ?></p>
					</div>
				</div>
			</div><!-- /.service-wrapper -->
		<?php
			endforeach;
		endif;
		?>

		</div>
	</div>
</div><!-- /.hero.hero--home -->
