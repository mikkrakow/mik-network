<div id="supplementary">
<div class="meta">
    <div>       
     <!--gdzie jestem -->
	<div style="margin:1em 0;">
	<span class="spacer">Gdzie jestem?&nbsp;</span><span>PRZEGLĄDASZ:</span><br />
	<span class="spacer2"><a href="<?php bloginfo('url'); ?>">&nbsp;<?php bloginfo('name'); ?></a></span><span class="spacer2">&nbsp;<a href="<?php bloginfo('url'); ?>/typ/dzialania">działania MIK</a></span><span class="spacer2">&nbsp;<?php the_title(); ?></span>
	</div> <!--close gdzie jestem -->	    
       
     <ul class="single_post_meta">
		<li> 
        <li><strong>Autor:</strong>
		<?php if (get_the_author_url()) { ?>
		
      <?php the_author_posts_link() ?>
      
      <?php } else { the_author_posts_link(); } ?></li>
	  	<li><?php include ('license.php'); ?></li>     
		<?php { if ( function_exists('add_theme_support')) the_post_thumbnail( 'post-thumbnail' ); } ?>
	
	</ul>
	
<p>więcej wpisów oznaczonych tagiem<br />
<a href="<?php bloginfo('url'); ?>/tag/malopolskie-dzwieki/page/2/"><img src="<?php bloginfo('template_directory'); ?>/images/arrow-menu.gif" alt="czytaj więcej" title="więcej" /> Małopolskie dźwięki</a></p> 
		
	</div>
	
</div> <!-- close meta -->
</div> <!-- close supplementary -->
<div id="entry_content">
<?php

// The Query
$the_query = new WP_Query( 'tag_id=51' );

// The Loop
while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<hr class="dotted">
<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
 <div class="entry">
 <a href="<?php the_permalink() ?>"><?php { if ( function_exists('add_theme_support')) the_post_thumbnail( 'post-thumbnail' ); } ?></a>
<?php the_excerpt('<img src="' . get_bloginfo('template_directory'). '/images/arrow-menu.gif" alt="czytaj więcej" title="więcej" />'); ?>
<p class="date"><?php the_time('d F Y') ?> <?php
$org_blog_id = get_post_meta ($post->ID, 'blogid', true);
if($org_blog_id) {
$blog_details = get_blog_details($org_blog_id);
echo ' via <a href="' . $blog_details->siteurl . '">' . $blog_details->blogname . '</a>';
}
?></p> 
</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

<div class="navigation">
<p class="alignleft"><a href="<?php bloginfo('url'); ?>/tag/malopolskie-dzwieki/page/2/">&laquo; Starsze wpisy</a></p>
</div>

</div>

</div> <!-- close content -->
