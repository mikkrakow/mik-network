<?php get_header(); ?>
<div id="content">
 <div id="media_content">
   <h2 class="title">Multimedia</h2>
     <div id="media_description">   
	 <p>Poniżej udostępnione zostały posty zawierające multimedia, tzn. zdjęcia, prezentacje,materiały edukacyjne, filmy i pliki audio.<br />
		Wśród nich znajdują się zarówno te przygotowane przez MIK, jak i pochodzące ze źródeł zewnętrznych, które zostały wykorzystane lub skomentowane przy okazji prowadzonych przez MIK działań.</p>
	 </div>

	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<?php if(is_home()) { if ( function_exists('wp_list_comments') ) { ?>
	<div <?php post_class(); ?>> <?php }} ?>
		<div class="entry">
		 <div id="media_excerpt"><a href="<?php the_permalink() ?>"><?php { if ( function_exists('add_theme_support')) the_post_thumbnail( 'post-thumbnail' ); } ?></a>
		 <div class="excerpt2"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
		 </div>
  		</div>
		
			
		
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


 </div> <!-- close media_content -->
</div> <!-- close content -->
<?php get_footer(); ?>