<?php 
/*
* Plugin Name: META Information Generator
* Description: You can easily add your post meta information into header using this plugin.
* Plugin URI: http://www.marufrion.com
* Author: Maruf Abdullah Rion
* Author URI: http://www.marufrion.com
* Version: 1.0
*/
?>
<?php
add_action('wp_head','metafb');

function metafb ()
{ 
	if (is_single())
	{
	?>
	<meta property="og:title" content="<?php the_title(); ?>"/>
	<meta property="og:url" content="<?php the_permalink(); ?>"/>
	<meta property="og:description" content="<?php the_excerpt(); ?>" />
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
	<?php 
		if (has_post_thumbnail()) {
			$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
	?>
	<meta property="og:image" content="<?php echo $image ?>"/>
	<?php } ?>
<?php 
	} 
} 
?>



