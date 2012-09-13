
<div id="supplementary">
<div class="meta">
    <div class="post_nav">       
	<div class="blog_desc">
	<h2>Dilettante</h2>
	<p>„Dilettante – teatr w ruchu” to działania Małopolskiego Instytutu Kultury, których celem jest wspieranie amatorskiego ruchu teatralnego. Wsparcie to polega na szkoleniu i podnoszeniu kompetencji animatorów grup teatralnych w ramach warsztatów z pedagogiki teatru, prowadzonych przez aktorów, pedagogów, teatrologów, a także na udostępnianiu materiałów dydaktycznych, udzielaniu konsultacji oraz informowaniu o wydarzeniach teatralnych w regionie.</p>
	</div>
    <div style="margin:1em 0;">
<span class="spacer">Gdzie jestem?&nbsp;</span><span>PRZEGLĄDASZ:</span><br />
<span class="spacer2"><a href="<?php bloginfo('url'); ?>">&nbsp;<?php bloginfo('name'); ?></a></span><span class="spacer2"><a href="<?php bloginfo('url'); ?>//category/warsztaty/">&nbsp;warsztaty</a></span><span class="spacer2">&nbsp;<?php the_title(); ?></span>
</div>
		
		
		<ul>
		<li>
		<h2 class="widgettitle">Tagi</h2>
		<ul>
		<?php wp_tag_cloud(); ?>
		</ul>
		</li>
		</ul>
		
		  <ul>
		<li>
	<a href="http://www.flickr.com/photos/mik_krakow/collections/72157615475811897/"><h2 class="widgettitle">Dilettante na zdjęciach</h2></a>
		<ul>
		<?php echo do_shortcode('[flickrpress type="photostream" api_key="2b41099518917cb8ebb7eb0d056ac5b1" account="33122810@N02" tags="dilettanteteatrwruchu" view="squares" count="15" random="true" lightbox="true"]'); ?>
		</ul>
		</li>
		</ul>    
  
   </div> 
</div> <!-- close meta -->
</div> <!-- close supplementary -->
<div id="entry_content">


<?php

// The Query
$the_query = new WP_Query( 'cat=122' );

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

</div>

</div> <!-- close content -->