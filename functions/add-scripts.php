<?php
// add scripts
function premier_scripts() {
  // skip link focus fix
  wp_enqueue_script( 'premier-skip-link-focus-fix', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );

	$path = '/dist/main.js';

  // main script file
  $ver = filemtime( get_template_directory() . $path);
  wp_enqueue_script( 'premier-scripts', get_theme_file_uri($path), array('jquery'), $ver, true );

  // slick carousel
  wp_enqueue_script( 'slick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js', array('jquery'), '1.8.1', true );
}
add_action( 'wp_enqueue_scripts', 'premier_scripts' );

?>
