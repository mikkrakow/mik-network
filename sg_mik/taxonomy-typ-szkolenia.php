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
	<h3 class="spacer">Gdzie jestem?</h3>
			<p>Przeglądasz: <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> <br />
			&nbsp; >&nbsp; <a href="<?php bloginfo('url'); ?>/typ/dzialania/">działania</a><br /> 
			&nbsp;&nbsp;&nbsp;&nbsp; >&nbsp; <strong><?php single_cat_title(''); ?></strong></p>
			  
			  <p>Sortuj według:</p>
		

<ul>
<li><?php wp_list_categories('taxonomy=typ&orderby=name&include=382,91,92,778,389&title_li=obszary działań' ); ?></li>
</ul>
	

		<ul> 
	<li><?php wp_list_categories('taxonomy=typ&orderby=name&include=170,388,82,385,386,387&title_li=metody działań'); ?></li>
		<li></li>
		</ul>
		
			
	<p>Przejdź do <a href="<?php bloginfo('url'); ?>/typ/dzialania-archiwalne">działań archiwalnych</a></p>
		
</div>
</div>
</div>

</div> <!-- close content -->
<?php get_footer(); ?>
