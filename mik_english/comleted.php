<?php 
/*
Template Name: completed
*/
?>

<?php get_header(); ?>
<div id="content">

<div id="entry_content">
 <?php query_posts( array(
	'post_type'=> 'activities',
	'taxonomy' => 'typ',
	'typ' => 'completed',
	'order'    => 'ASC',
	'orderby'  => 'title',
	'posts_per_page' => '-1'
)); ?>
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <div class="entry">       
  <a href="<?php the_permalink() ?>"><?php { if ( function_exists('add_theme_support')) the_post_thumbnail( 'post-thumbnail' ); } ?></a>
<?php the_excerpt('<img src="' . get_bloginfo('template_directory'). '/images/arrow-menu.gif" alt="czytaj więcej" title="więcej" />'); ?>
   
 </div>     
<?php if( ($wp_query->current_post) < ($wp_query->post_count-1) ){ ?> 
 <div id="post-item-divider"><hr class="dotted"/></div> 
<?php } ?>
      
      
    <?php endwhile; ?>
  <?php else : ?>
  <?php endif; ?>
  </div> <!-- close entry_content -->

  

 <?php get_sidebar(); ?>
 <?php get_footer(); ?>
 
