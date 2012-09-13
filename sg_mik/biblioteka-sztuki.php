<?php
/*
Template Name: Biblioteka Sztuki
*/
?>

<?php get_header(); ?>

<div id="content">
<div id="entry_content">
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <div class="entry">
      
      <?php the_content('Read the rest of this entry &raquo;'); ?>
      <?php comments_template(); ?>
    </div>

  	
	<?php query_posts( 'cat=126' ); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <div class="entry">       
 <a href="<?php the_permalink() ?>"><?php { if ( function_exists('add_theme_support')) the_post_thumbnail( 'post-thumbnail' ); } ?></a>

 <?php the_excerpt('<img src="' . get_bloginfo('template_directory'). '/images/arrow-menu.gif" alt="czytaj wiêcej" title="wiêcej" />'); ?>

 <p class="date"><?php the_time('j F Y') ?> <?php

$org_blog_id = get_post_meta ($post->ID, 'blogid', true);

if($org_blog_id) {

$blog_details = get_blog_details($org_blog_id);

echo ' via <a href="' . $blog_details->siteurl . '">' . $blog_details->blogname . '</a>';

}

?></p> 
   
 </div>     
<?php if( ($wp_query->current_post) < ($wp_query->post_count-1) ){ ?> 
 <div id="post-item-divider"><hr class="dotted"/></div> 
<?php } ?>
      
      
    <?php endwhile; ?>
	<div class="navigation">  

 <p class="alignleft">

 <?php next_posts_link('&laquo; Starsze wpisy') ?></p>   

 <p class="alignright"><?php previous_posts_link('Nowsze wpisy &raquo;') ?></p> 

 </div>   
  <?php else : ?>
  <?php endif; ?>
  </div> <!-- close entry_content -->
<div id="supplementary">
<div class="meta">
<div class="post_nav">
	<h3 class="spacer">Gdzie jestem?</h3>
			<p>Przegl¹sz <strong>ofertê szkoleniow¹ i badawcz¹ MIK</strong></p>
			  

		 
</div>
</div>

<?php ();?>
</div> <!-- close content -->
<?php get_footer(); ?>