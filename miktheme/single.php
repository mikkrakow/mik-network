<?php get_header(); ?>

<div id="content">
<?php
/*
 * Pull in a different sub-template, depending on the Post Format.
 * 
 * Make sure that there is a default '<tt>content.php</tt>' file to fall back to
 * as a default. Name templates '<tt>content-gallery.php</tt>', '<tt>content-video.php</tt>', etc.
 *
 * You should use this in the loop.
 */

$format = get_post_format();
get_template_part( 'content', $format );
?>
<?php
global $wp_query;
$postid = $wp_query->post->ID;
$sidebar = get_post_meta($postid, "sidebar", true);
get_sidebar($sidebar);
wp_reset_query();
?>
<?php get_footer(); ?>