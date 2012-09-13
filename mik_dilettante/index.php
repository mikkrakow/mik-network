<?php get_header(); ?>
<div id="content">
<div id="sliderstripes">
<div id="sliderwide">
<div id="jFlow">
           
        
		<div id="slide1">
        <img src="http://mik.krakow.pl/wp-content/themes/mik_dilettante/images/dilettante.jpg" alt="Dilettante" />
        <span><h3>Dilettante</h3>
		<p>„Dilettante – teatr w ruchu” to działania Małopolskiego Instytutu Kultury, których celem jest wspieranie amatorskiego ruchu teatralnego. Wsparcie to polega na szkoleniu i podnoszeniu kompetencji animatorów grup teatralnych w ramach warsztatów z pedagogiki teatru, prowadzonych przez aktorów, pedagogów, teatrologów, a także na udostępnianiu materiałów dydaktycznych, udzielaniu konsultacji oraz informowaniu o wydarzeniach teatralnych w regionie.</p>
		</span>
    </div>
		
		
		
	
</div> 


</div> <!--close sliderwide-->

<div id="jFlowController">
    <span class="jFlowControl"></span>

</div>
</div><!--close sliderstripes-->

<div id="entry_content">
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <?php if(is_home()) { if ( function_exists('wp_list_comments') ) { ?> <div <?php post_class(); ?>> <?php }} ?>
      <h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    
      
      <?php if(is_search()) : ?>
        <div class="entry">        
 <a href="<?php the_permalink() ?>"><?php { if ( function_exists('add_theme_support')) the_post_thumbnail( 'post-thumbnail' ); } ?></a>
<?php the_excerpt('<img src="' . get_bloginfo('template_directory'). '/images/arrow-menu.gif" alt="czytaj więcej" title="więcej" />'); ?>
<p class="date"><?php the_time('j F Y') ?></p>   
 </div>     
<?php if( ($wp_query->current_post) < ($wp_query->post_count-1) ){ ?> 
 <div id="post-item-divider"><hr class="dotted"/></div> 
<?php } ?>
      <?php else : ?>
        <div class="entry">
          <a href="<?php the_permalink() ?>"><?php { if ( function_exists('add_theme_support')) the_post_thumbnail( 'post-thumbnail' ); } ?></a>
          <?php the_excerpt('&raquo; Read the rest of this entry &laquo;'); ?>
		  <p class="date"><?php the_time('j F Y') ?></p> 
        </div>
		<?php if( ($wp_query->current_post) < ($wp_query->post_count-1) ){ ?> 
 <div id="post-item-divider"><hr class="dotted"/></div> 
 <?php } ?> 
        <?php if(is_home()) { if ( function_exists('wp_list_comments') ) { ?></div><!-- close post_class --><?php }} ?>
      <?php endif; ?>
  <?php endwhile; ?>

  <div class="navigation">
    <p class="alignleft"><?php next_posts_link('&laquo; Starsze wpisy') ?></p>
    <p class="alignright"><?php previous_posts_link('Nowsze wpisy &raquo;') ?></p>
  </div>
  
  <?php else : ?>
  
  <div class="entry">
    <span class="error"><img src="<?php bloginfo('template_directory'); ?>/images/mal.png" alt="error duck" /></span> 
    <p>Hmmm, seems like what you were looking for isn't here.  You might want to give it another try - the server might have hiccuped - or maybe you even spelled something wrong (though it's more likely <strong>I</strong> did).</p>
  </div>

  <?php endif; ?>
</div> <!-- close entry_content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>