
<?php get_header(); ?>
<div id="content">
	<div id="entry_content">
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
	<div id="supplementary">
	<div class="meta">
		<div class="post_nav">
		<div class="blog_desc">
	<h2>Dilettante</h2>
	<p>Dilettante to długofalowe działania artystyczno-edukacyjne, których zasadniczym celem jest wsparcie i pomoc edukacyjna dla nauczycieli i instruktorów pracujących z amatorskimi, dziecięcymi i młodzieżowymi grupami teatralnymi. Zajęcia teoretyczne i warsztatowe, prowadzone przez aktorów, pedagogów, teatrologów, dostarczają wiadomości z zakresu historii i teorii dramatu oraz teatru oraz szerokiej wiedzy na temat m.in.: metod pracy z grupą, technik aktorskich, reżyserii.</p>
	</div>
			
		<div style="margin:1em 0;">
		<span class="spacer">Gdzie jestem?&nbsp;</span><span>PRZEGLĄDASZ:</span><br />
		<span class="spacer2"><a href="<?php bloginfo('url'); ?>">&nbsp;<?php bloginfo('name'); ?></a></span><span class="spacer2">&nbsp;<?php single_cat_title(''); ?></span>
			</div>
		
		<ul>
		<li>
		<h2 class="widgettitle">Tagi</h2>
		<ul>
		<?php wp_tag_cloud(); ?>
		</ul>
		</li>
		</ul>
				
		</div>
	</div>
	</div>
</div> <!-- close content -->
<?php get_footer(); ?>