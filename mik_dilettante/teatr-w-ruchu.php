<?php
/*
Template Name: teatr w ruchu
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
	<h2>Dilettante</h2>
	<p>Dilettante to długofalowe działania artystyczno-edukacyjne, których zasadniczym celem jest wsparcie i pomoc edukacyjna dla nauczycieli i instruktorów pracujących z amatorskimi, dziecięcymi i młodzieżowymi grupami teatralnymi. Zajęcia teoretyczne i warsztatowe, prowadzone przez aktorów, pedagogów, teatrologów, dostarczają wiadomości z zakresu historii i teorii dramatu oraz teatru oraz szerokiej wiedzy na temat m.in.: metod pracy z grupą, technik aktorskich, reżyserii.</p>
	</div>
		<div style="margin:1em 0;">
<span class="spacer">Gdzie jestem?&nbsp;</span><span>PRZEGLĄDASZ:</span><br />
<span class="spacer2"><a href="<?php bloginfo('url'); ?>">&nbsp;<?php bloginfo('name'); ?></a></span><span class="spacer2">&nbsp;<?php the_title(); ?></span>
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
	</div>
	</div>
</div> <!-- close content -->
<?php get_footer(); ?>