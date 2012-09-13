<?php
/*
Template Name: forum-krakow
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
	<h2>Badania w kulturze</h2>
	<p>Blog Badania w kulturze opisuje i komentuje działania podejmowane przez różnorodnych aktorów kultury, których celem jest rozwój wiedzy o kulturze (praktyki kulturowe, uczestnictwo w kulturze, działania społeczne, przedsiębiorczość, itp.) oraz rozwój wiedzy o zarządzaniu politykami kultury w Polsce (partycypacja społeczna, finansowanie kultury, zarządzanie publiczne, itp.).</p>
	</div>
		<div style="margin:1em 0;">
		<span class="spacer">Gdzie jestem?&nbsp;</span><span>PRZEGLĄDASZ:</span><br />
		<span class="spacer2"><a href="<?php bloginfo('url'); ?>">&nbsp;<?php bloginfo('name'); ?></a></span><span class="spacer2">&nbsp;<a href="http://badania-w-kulturze.mik.krakow.pl/category/malopolskie-obserwatorium-kultury/forum-domow-kultury/">Forum Kraków</a></span><span class="spacer2">&nbsp;<?php the_title(); ?></span>
		</div>
	
		<img src="http://badania-w-kulturze.mik.krakow.pl/files/ForumKrakow_logo_.jpg" alt="Forum Kraków" />
		<p class="supplementary">Forum Kraków jest samorządnym, dobrowolnym i trwałym zrzeszeniem osób działających na rzecz animacji kultury. Udział w Forum ma charakter społeczny. Forum jest wspólną inicjatywą <a href="http://www.mik.krakow.pl/">Małopolskiego Instytutu Kultury</a>  oraz <a href="http://www.cal.org.pl/">Stowarzyszenia Centrum Aktywności Lokalnej</a>. Celami działania Forum są:<br />
		
- wymiana doświadczeń i informacji, a także integracja osób działających w sektorze animacji kultury;<br />
- promowanie dobrych praktyk związanych z sektorem animacji kultury;</br>
- reprezentowanie środowiska animatorów kultury wobec administracji rządowej i samorządowej.</br>


<p class="supplementary">Sekretariat Forum Kraków<br/>
Małopolski Instytut Kultury<br />
ul. Karmelicka 27<br /> 
31-131 Kraków <br />
tel: 012 422 18 84<br />
<a href="/forum-krakow-kontakt"><img class="colorbox-off" style="margin: 2px 5px 0px 0px;float:left;" src="http://muzeoblog.org/wp-content/plugins/wp-email/images/email_famfamfam.png" alt="kontakt" /></a></p>
		
		</div>
	</div>
	</div>
</div> <!-- close content -->
<?php get_footer(); ?>