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
<div id="supplementary">
<div class="meta">
<div class="post_nav_fx">
	<div style="margin:1em 0;">	 
	 <span class="spacer">Gdzie jestem?&nbsp;</span><span>PRZEGLĄDASZ:</span><br />
<span class="spacer2"><a href="<?php bloginfo('url'); ?>">&nbsp;<?php bloginfo('name'); ?></a></span><span class="spacer2">&nbsp;<a href="<?php bloginfo('url'); ?>/typ/dzialania-archiwalne/">działania archiwalne</a></span><span class="spacer2">&nbsp;<?php single_cat_title(''); ?></span>	    </div>			  
			  <p>Sortuj według:</p>	

<ul>
<li><?php wp_list_categories('taxonomy=typ&orderby=name&include=870,788,789&title_li=obszary działań' ); ?></li>
</ul>
	

		<ul> 
	<li><?php wp_list_categories('taxonomy=typ&orderby=name&include=400,871,406,2141,2142,2144,403,2147,409&title_li=metody działań'); ?></li>
		</ul>
		
			
	<p>Przejdź do <a href="<?php bloginfo('url'); ?>/typ/dzialania">działań MIK</a></p>
		
</div>
</div>
</div>

</div> <!-- close content -->
<?php get_footer(); ?>
