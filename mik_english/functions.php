<?php 
add_action('init', 'codex_custom_init');
function codex_custom_init() 
{
  $labels = array(
    'name' => _x('activities', 'post type general name'),
    'singular_name' => _x('activity', 'post type singular name'),
    'add_new' => _x('Add activity', 'activity'),
    'add_new_item' => __('Add New activity'),
    'edit_item' => __('Edit activity'),
    'new_item' => __('New activity'),
    'all_items' => __('All post'),
    'view_item' => __('View activities'),
    'search_items' => __('Search activities'),
    'not_found' =>  __('brak activities'),
    'not_found_in_trash' => __('No activities found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'activities'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => false,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title','editor','author','thumbnail','excerpt', 'custom-fields', 'post-format'),
	'taxonomies' => array('typ')
  ); 
  register_post_type('activities',$args);
}

//add filter to ensure the text Book, or book, is displayed when user updates a book 
add_filter('post_updated_messages', 'codex_book_updated_messages');
function codex_book_updated_messages( $messages ) {
  global $post, $post_ID;

  $messages['book'] = array(
    0 => '', // Unused. Messages start at index 1.
    1 => sprintf( __('Book updated. <a href="%s">View book</a>'), esc_url( get_permalink($post_ID) ) ),
    2 => __('Custom field updated.'),
    3 => __('Custom field deleted.'),
    4 => __('Book updated.'),
    /* translators: %s: date and time of the revision */
    5 => isset($_GET['revision']) ? sprintf( __('Book restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('Book published. <a href="%s">View book</a>'), esc_url( get_permalink($post_ID) ) ),
    7 => __('Book saved.'),
    8 => sprintf( __('Book submitted. <a target="_blank" href="%s">Preview book</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    9 => sprintf( __('Book scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview book</a>'),
      // translators: Publish box date format, see http://php.net/date
      date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
    10 => sprintf( __('Book draft updated. <a target="_blank" href="%s">Preview book</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
  );

return $messages;
}


register_taxonomy('typ', 'post', array(
'hierarchical' => true,  'label' => 'typ',
'query_var' => true, 'rewrite' => true));

register_taxonomy ('mediatag', 'post', array(
'label' => 'mediatag',
'query_var' => true, 'rewrite' => true));

function field_func($atts) {
global $post;
$name = $atts['name'];
if (empty($name)) return;
return get_post_meta($post->ID, $name, true); }

add_shortcode('field', 'field_func');
?>