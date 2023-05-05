<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package emd
 */

?>

	</div><!-- #content -->

	<?php get_template_part( 'template-parts/layout/footer', 'content' ); ?>

</div><!-- #page -->
<?php wp_footer(); ?>
<script>
jQuery(document).ready(function($) {
  var s;
  if( !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    s = skrollr.init({
      smoothScrolling: true,
      forceHeight: false
    });
  }
  else {
    s = skrollr.init().destroy();
  }
});
</script>

</body>
</html>
