<?php
function field_func($atts) {
global $post;
$name = $atts['name'];
if (empty($name)) return;
return get_post_meta($post->ID, $name, true); }

add_shortcode('field', 'field_func');
?>