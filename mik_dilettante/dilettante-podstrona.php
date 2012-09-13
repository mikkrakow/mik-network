<?php
/*
Template Name: dilettante-podstrona
*/
?>

<?php get_header(); ?>
<div id="content">
	<div id="entry_content">
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
		<h2 class="title"></h2>
		<div class="entry">
      <?php { if ( function_exists('add_theme_support')) the_post_thumbnail( 'post-thumbnail' ); } ?>
      <?php the_content('Read the rest of this entry &raquo;'); ?>
      <?php comments_template(); ?>
		</div>
  <?php endwhile; ?>
  
		</div> <!-- close entry_content -->
  <?php endif; ?>
	
	<div id="supplementary">
	<div class="meta">
		<div class="post_nav">
			<div class="blog_desc">
	<h2>Dilettante</h2>
	<p>Dilettante to długofalowe działania artystyczno-edukacyjne, których zasadniczym celem jest wsparcie i pomoc edukacyjna dla nauczycieli i instruktorów pracujących z amatorskimi, dziecięcymi i młodzieżowymi grupami teatralnymi. Zajęcia teoretyczne i warsztatowe, prowadzone przez aktorów, pedagogów, teatrologów, dostarczają wiadomości z zakresu historii i teorii dramatu oraz teatru oraz szerokiej wiedzy na temat m.in.: metod pracy z grupą, technik aktorskich, reżyserii.</p>
	</div>
	<div style="margin:1em 0;">
	<span class="spacer">Gdzie jestem?&nbsp;</span><span>PRZEGLĄDASZ:</span><br />
	<span class="spacer2"><a href="<?php bloginfo('url'); ?>">&nbsp;<?php bloginfo('name'); ?></a></span><span class="spacer2"><a href="<?php bloginfo('url'); ?>/dilettante-–-teatr-w-ruchu/">&nbsp;teatr w ruchu</a></span><span class="spacer2">&nbsp;<?php the_title(); ?></span>
	</div>
			
		
		<h2 class="widgettitle">Tagi</h2>
		<ul>
		<?php wp_tag_cloud(); ?>
		</ul>
		
		</div>
	</div>
	</div>
</div> <!-- close content -->
<?php get_footer(); ?>