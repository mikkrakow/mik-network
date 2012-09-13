<?php
/*
Template Name: csb
*/
?>

<?php get_header(); ?>

<div id="content">
<div id="entry_content">
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <h2 class="title"><?php the_title(); ?></h2>
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
      <p>Looks like what you were looking for isn't here.  You might want to give it another try, perhaps the server hiccuped, or perhaps you spelled something wrong (or maybe I did).</p>
    </div>
  <?php endif; ?>
  
  </div> <!-- close entry_content -->
  
 <div id="supplementary">
<div class="meta">
<div class="post_nav">

<!--gdzie jestem -->
	<div style="margin:1em 0;">
	<span class="spacer">Gdzie jestem?&nbsp;</span><span>PRZEGLĄDASZ:</span><br />
	<span class="spacer2"><a href="<?php bloginfo('url'); ?>">&nbsp;<?php bloginfo('name'); ?></a></span><span class="spacer2"><a href="<?php bloginfo('url'); ?>/typ/dzialania/">&nbsp;działania MIK</a></span><span class="spacer2"><a href="<?php bloginfo('url'); ?>/?dzialania=chlopska-szkola-biznesu">&nbsp;Chłopska Szkoła Biznesu</a></span>
	</div> 
	<!--close gdzie jestem -->	

			
			<ul>
		 <li><a href="http://mik.krakow.pl/o-projekcie-csb">O projekcie CSB</a></li>
		<li><a href="http://mik.krakow.pl/gra">Instrukcja gry i FAQ</a></li>
		<li><a href="http://mik.krakow.pl/historyczna-inspiracja">Historyczna inspiracja</a></li>
		<li><a href="http://mik.krakow.pl/rekomendacje-csb">Rekomendacje</a></li>
		<li><a href="/edukacja-ekonomiczna">Edukacja ekonomiczna</a></li>
		</ul>
		 
</div>
</div>
</div>
</div>

  
  



<?php get_footer(); ?>
