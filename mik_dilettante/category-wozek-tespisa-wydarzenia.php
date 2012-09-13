<?php get_header(); ?>
<div id="content">
	<div id="entry_content">
		<div class="entry">  
	<!--wstęp z odpowiedniej strony -->
	<?php $my_query = new WP_Query('page_id=372'); ?>
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
   
      <?php the_content(); ?>
        
<?php endwhile; 
// Reset Post Data
wp_reset_postdata();
?>
		</div>
		<hr class="dotted">
	
	
  <?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<?php if(is_home()) { if ( function_exists('wp_list_comments') ) { ?>
	<div <?php post_class(); ?>> <?php }} ?>
    <h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<div class="entry">       
		<a href="<?php the_permalink() ?>"><?php { if ( function_exists('add_theme_support')) the_post_thumbnail( 'post-thumbnail' ); } ?></a>
 <?php the_excerpt('<img src="' . get_bloginfo('template_directory'). '/images/arrow-menu.gif" alt="czytaj więcej" title="więcej" />'); ?>
 <p class="date"><?php the_time('d.m.Y') ?> <?php
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
 <div class="entry">   
 <span class="error">
 <img src="<?php bloginfo('template_directory'); ?>/images/mal.png" alt="error duck" /></span>     <p>Hmmm, seems like what you were looking for isn't here.  You might want to give it another try - the server might have hiccuped - or maybe you even spelled something wrong (though it's more likely <strong>I</strong> did).</p> 
 </div> 
 <?php endif; ?>
	</div> <!-- close entry_content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>