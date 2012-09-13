<?php get_header(); ?>

<div id="content">

<div id="entry_content">
   <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <div class="entry">       
  
<?php the_content(); ?>
   
 </div>     
      
      
    <?php endwhile; ?>
  <?php else : ?>
  <?php endif; ?>
  </div> <!-- close entry_content -->

  

<?php
global $wp_query;
$postid = $wp_query->post->ID;
$sidebar = get_post_meta($postid, "sidebar", true);
get_sidebar($sidebar);
wp_reset_query();
?>

 <?php get_footer(); ?>
 
