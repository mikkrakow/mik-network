<?php get_header(); ?>

<div id="content">
<div id="entry_content">
   <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <div class="entry">       
 <?php { if ( function_exists('add_theme_support')) the_post_thumbnail( 'post-thumbnail' ); } ?>
<?php the_excerpt('<img src="' . get_bloginfo('template_directory'). '/images/arrow-menu.gif" alt="czytaj więcej" title="więcej" />'); ?>
   <p class="date"><?php the_time('d.m.Y') ?></p>
 </div>     
<?php if( ($wp_query->current_post) < ($wp_query->post_count-1) ){ ?> 
 <div id="post-item-divider"><hr class="dotted"/></div> 
 
  
<?php } ?>
         
    <?php endwhile; ?>
  <?php else : ?>
  <?php endif; ?>
  
  <div class="navigation">  
	<p class="alignleft">
	<?php next_posts_link('&laquo; Starsze wpisy') ?></p>   
	<p class="alignright"><?php previous_posts_link('Nowsze wpisy &raquo;') ?></p> 
 </div>   
  
  </div> <!-- close entry_content -->



<div id="supplementary">
<div class="meta">
<div class="post_nav_fx">
<!-- gdzie jestem -->
			<div style="margin:1em 0;">
		<span class="spacer">Gdzie jestem?&nbsp;</span><span>PRZEGLĄDASZ:</span><br />
		<span class="spacer2">&nbsp;<?php single_cat_title(''); ?></span>
			</div><!-- close gdzie jestem -->
        
        <p>Sortuj według lat:</p>  
     <ul> 
<li> <?php wp_get_archives('cat=367&type=yearly'); ?> </li>
	 </ul>
</div>
</div>
</div>

</div> <!-- close entry_content -->


<?php get_footer(); ?>
