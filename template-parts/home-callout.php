<?php
$callout = get_field('home_callout');
?>

<div class="callout section section--image" style="background-image: url(<?php if ($callout['image']) { echo $callout['image']; } else { echo get_template_directory_uri() . '/assets/img/bg-home-callout.png'; } ?>)">
	<div class="container">
		<h3 class="callout__heading"><?php echo $callout['text']; ?></h3>
	</div>
</div>
