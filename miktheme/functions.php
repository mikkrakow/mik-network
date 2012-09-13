<?php
if ( function_exists( 'add_theme_support' )) {
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size( 160, 120, true );
  add_custom_background();
  add_theme_support( 'automatic-feed-links' );
  add_editor_style();

  
  define('HEADER_TEXTCOLOR', '000000');
  define('HEADER_IMAGE', '%s/images/default_header.jpg'); // %s is the template dir uri
  define('HEADER_IMAGE_WIDTH', 133); // use width and height appropriate for your theme
  define('HEADER_IMAGE_HEIGHT', 45);

function mik_header_style() { ?>
    <style type="text/css">
        span.header_image { background: url(<?php header_image(); ?>) no-repeat;
                  width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
                  height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
                  display: block;
                  
                 }
        #main_nav h1.masthead a { color:#<?php header_textcolor();?>; }
    </style><?php }
    
  function mik_admin_header_style() { ?>
    <style type="text/css">
            #headimg { 
                      }
    </style><?php }
    
    function mik_admin_header_image() { ?>
       <div id="headimg">
         <style type="text/css">
            h1.masthead, p.description { font-family: "Hoefler Text","Cambria",Georgia,"Times New Roman",Times,serif; width: 160px; }
            p.description { color: #666666; font-size: 13px; }
            h1.masthead a { font-size: 24px; font-weight: normal; font-variant: small-caps; text-decoration: none; }
            h1.masthead { margin: 30px 0 0 0;}
         </style>
           <?php
           if ( 'blank' == get_theme_mod( 'header_textcolor',
    HEADER_TEXTCOLOR ) || '' == get_theme_mod( 'header_textcolor',
    HEADER_TEXTCOLOR ) )
               $style = ' style="display:none;"';
           else
               $style = ' style="color:#' . get_theme_mod(
    'header_textcolor', HEADER_TEXTCOLOR ) . ';"';
           ?>
           <img src="<?php esc_url ( header_image() ); ?>" alt="" />
           
           <h1 class="masthead"><a <?php echo $style; ?> onclick="return false;"
    href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' );
    ?></a></h1>
           <p class="description"><?php bloginfo(
    'description' ); ?></div>
           
       </div>
    <?php }   
  add_custom_image_header('mik_header_style','mik_admin_header_style', 'mik_admin_header_image');
  
  add_action( 'init', 'register_mik_menus' );
  function register_mik_menus() {
    register_nav_menus(
      array(
        'main-menu' => __( 'Main Navigation Menu' ),
	'side_nav' => __( 'Side network navigation' ),
    'site-menu' => __( 'site navigation menu' ),
    'side_nav2' => __( 'Side network navigation 2' ),
        ));
  }
}
if ( function_exists('register_sidebar') )
    register_sidebar();
$content_width = 500;

add_filter( 'comments_template', 'legacy_comments' );
function legacy_comments( $file ) {
  if ( !function_exists('wp_list_comments') )
  $file = TEMPLATEPATH . '/legacy.comments.php';
  return $file;
}

function custom_sidebars_init()
{
	register_sidebar( array(
			'name' => 'Panel dla Single',
			'id' => 'sidebar-10',
			'description' => 'Dodatkowy panel widoczny tylko z poziomu posta',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => "</aside>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
		
}
add_action('widgets_init','custom_sidebars_init');




function mik_excerpt_length( $length ) {
	return 50;
}
add_filter( 'excerpt_length', 'mik_excerpt_length' );

function continue_reading_link() {
	return ' <a id="excerpt-link" href="'. get_permalink() . '">' . __( '<img src="' . get_bloginfo('template_directory'). '/images/arrow-menu.gif" alt="czytaj więcej" title="więcej" />' ) . '</a>';
}
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with continue_reading_link().
 */
function auto_excerpt_more( $more ) {
	return continue_reading_link();
}
add_filter( 'excerpt_more', 'auto_excerpt_more' );

/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 */
function custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'custom_excerpt_more' );

add_filter( 'the_author', 'guest_author_name' );
add_filter( 'get_the_author_display_name', 'guest_author_name' );

function guest_author_name( $name ) {
global $post;

$author = get_post_meta( $post->ID, 'gosc-autor', true );

if ( $author )
$name = $author;

return $name;
}
add_theme_support( 'post-formats', array( 'video', 'gallery', 'audio' ) );
?>
