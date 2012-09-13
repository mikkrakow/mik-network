<?php get_header(); ?>
<div id="content">
 <div id="entry_content">
     
     	<?php
// we add this, to show *all* posts sorted
// alphabetically by title
     $posts = query_posts($query_string . '&orderby=title&order=asc&posts_per_page=-1');
// here comes The Loop!
?>	
     
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
    <h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<div class="entry">       
		 <?php { if ( function_exists('add_theme_support')) the_post_thumbnail( 'post-thumbnail' ); } ?>
		 <?php the_excerpt('<img src="' . get_bloginfo('template_directory'). '/images/arrow-menu.gif" alt="czytaj więcej" title="więcej" />'); ?>
		</div>     
   	
	<?php if( ($wp_query->current_post) < ($wp_query->post_count-1) ){ ?> 
	<div id="post-item-divider"><hr class="dotted"/></div> 
	<?php } ?>
      
      
    <?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>
  </div> <!-- close entry_content -->

 <div id="supplementary">
   <div class="meta">
	 <div class="post_nav_fx">
		<!-- gdzie jestem -->
			<div style="margin:1em 0;">
			<span class="spacer">Gdzie jestem?&nbsp;</span><span>PRZEGLĄDASZ:</span><br />
			<span class="spacer2"><a href="<?php bloginfo('url'); ?>/category/wydawnictwa-mik">&nbsp;Wydawnictwa MIK</a></span><span class="spacer2">&nbsp;<?php single_cat_title(''); ?></span>
			</div><!-- close gdzie jestem -->
		
		<p>
			Sortuj według:
		</p>
		
		<ul>
		 <li><?php wp_list_categories('orderby=name&include=422,423,424&title li=linia wydawnicza'); ?></li>
		</ul>
		
			
		<ul>
		 <li><?php wp_list_categories('orderby=name&include=421,426,427,428,429,2239&title li=rodzaj wydawnictwa'); ?></li>
		</ul>
  		 
	 </div>
   </div>
 </div>

</div> <!-- close content -->
<?php get_footer(); ?>
