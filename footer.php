<?php
function formatPhoneNUmber( $number ){
  $txt = preg_replace('/[\s\-|\.|\(|\)]/','',$number);
  $format = '[$1?$1 :][$2?($2):x][$3: ]$4[$5: ]$6[$7? $7:]';
  if( preg_match('/^(.*)(\d{3})([^\d]*)(\d{3})([^\d]*)(\d{4})([^\d]{0,1}.*)$/', $txt, $matches) ){
    $result = $format;
    foreach( $matches AS $k => $v ){
      $str = preg_match('/\[\$'.$k.'\?(.*?)\:(.*?)\]|\[\$'.$k.'\:(.*?)\]|(\$'.$k.'){1}/', $format, $filterMatch);
      if( $filterMatch ){
        $result = str_replace( $filterMatch[0], (!isset($filterMatch[3]) ? (strlen($v) ? str_replace( '$'.$k, $v, $filterMatch[1] ) : $filterMatch[2]) : (strlen($v) ? $v : (isset($filterMatch[4]) ? '' : (isset($filterMatch[3]) ? $filterMatch[3] : '')))), $result );
      }
    }
    return $result;
  }
  return $number;
}
?>

<?php
$phone = get_field('info_phone','options');
?>

<section class="footer">
 <div class="container">
  <div class="footer__logo">
    <img src="<?php echo get_template_directory_uri() . '/assets/img/logo-color.png'; ?>" alt="">
   </div>
    <div class="footer__images">
    <?php
    $footer_images = get_field('footer_images', 'options');
    if ($footer_images) :
      foreach ($footer_images as $images) :
    ?>
      <div class="footer-image">
        <img src="<?php echo $images['image']['url']; ?>" alt="<?php echo $images['image']['title']; ?>">
      </div>
    <?php
      endforeach;
    endif;
    ?>
    </div>
	<div class="footer__info"><span><a href="/privacy-policy/" class="u-color-secondary">Privacy</a></span><span class="u-hidden-sm">&nbsp;&nbsp;|&nbsp;&nbsp;</span><span><a href="mailto:<?php the_field('info_email','options'); ?>" class="u-color-link">Email Us</a></span><span class="u-hidden-sm">&nbsp;&nbsp;|&nbsp;&nbsp;</span><span><a href="tel:<?php the_field('info_phone','options'); ?>" class="u-color-link"><?php echo formatPhoneNumber($phone); ?></a></span></div>
    <div class="footer__info"><span>© 2018 Premier Home Solutions</span><span class="u-hidden-sm">&nbsp;&nbsp;|&nbsp;&nbsp;</span><span class="website-credit">Website by <a href="http://travisawagner.com" target="_blank" rel="noopener noreferrer">TAW Digital</a></span></div>
  </div>
</section>

 <?php wp_footer(); ?>
  </div>
</body>
</html>
