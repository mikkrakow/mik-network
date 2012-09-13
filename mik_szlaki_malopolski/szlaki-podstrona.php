﻿<?php
/*
Template Name: szlaki podstrona
*/
?>

<?php get_header(); ?>
<div id="content">
	<div id="entry_content">
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
		<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</h2>
		<div class="entry">
      <?php { if ( function_exists('add_theme_support')) the_post_thumbnail( 'post-thumbnail' ); } ?>
      <?php the_content('Read the rest of this entry &raquo;'); ?>
      <?php comments_template(); ?>
		</div>
  <?php endwhile; ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

  <?php else : ?>
		<div class="entry">
			<p>Looks like what you were looking for isn't here.  You might want to give it another try, perhaps the server hiccuped, or perhaps you spelled something wrong (or maybe I did).
			</p>
		</div>
  <?php endif; ?>
	</div> <!-- close entry_content -->
	<div id="supplementary">
	<div class="meta">
		<div class="post_nav">
			<div class="blog_desc">
	<h2>Szlaki Małopolski</h2>
	<p>Celem „Szlaków Małopolski” jest stworzenie platformy informacyjno-promocyjnej dotyczącej turystyki kulturowej, ze szczególnym uwzględnieniem szlaków kulturowych, czyli tematycznych tras zwiedzania.
	Aktualnie cel ten jest realizowany przez blogową stronę internetową, kierowaną zarówno do turystów, jak i do operatorów szlaków kulturowych. Serwis Szlaki Małopolski prezentuje w sposób przystępny i ciekawy trasy regionu. </p>
			</div>		
		
		<!-- gdzie jestem -->	
<div style="margin:1em 0;">
<span class="spacer">Gdzie jestem?&nbsp;</span><span>PRZEGLĄDASZ:</span><br />
<span class="spacer2"><a href="<?php bloginfo('url'); ?>">&nbsp;<?php bloginfo('name'); ?></a></span><span class="spacer2">&nbsp;<?php the_title(); ?></span>
</div> <!-- close gdzie jestem -->
						
		<ul>
    <?php if ( !function_exists('dynamic_sidebar')
      || !dynamic_sidebar() ) : ?>
    <li>
      <h3>Archives</h3>
      <ul id="archives">
        <?php wp_get_archives('format=html'); ?>
      </ul>
    </li>
	<?php endif; ?>
		</ul> 
				
		</div>
	</div>
	</div>
</div> <!-- close content -->
<?php get_footer(); ?>