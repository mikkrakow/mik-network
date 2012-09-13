<?php
/*
Template Name: o muzeoblogu
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
	<h2>Muzeoblog</h2>
	<p>Serwis redagowany przez zespół Dynamiki Ekspozycji, poświęcony jest zjawiskom muzealnym. Prezentowane tu treści dotyczą innowacji w muzeach (o digitalizacji zbiorów czytaj na blogu „Wejdź Między Muzea”) i ich nowej roli wobec globalnych przemian społeczno gospodarczych. Jakie jest miejsce muzeum w gospodarce wiedzy? Przed jakimi szansami i zagrożeniami stają współcześnie muzea? Jak muzeum może stać się ważnym aktorem w społeczności lokalnej i przysłużyć się do jej rozwoju? Zapraszamy do wspólnego poszukiwania odpowiedzi na te pytania!</p>
	</div>
		<!--gdzie jestem -->
	<div style="margin:1em 0;">
	<span class="spacer">Gdzie jestem?&nbsp;</span><span>PRZEGLĄDASZ:</span><br />
	<span class="spacer2"><a href="<?php bloginfo('url'); ?>">&nbsp;<?php bloginfo('name'); ?></a></span><span class="spacer2">&nbsp;O Muzeoblogu</span>
	</div> <!--close gdzie jestem -->
		
		<ul>
        <li>
      <h2 class="widgettitle">Kategorie</h2>
      <ul>
        <?php wp_list_categories('hierarchical=0&show_count=1&title_li=&exclude=249,483,481,482,480'); ?>
      </ul>
    </li>
    </ul>
		
		<ul>
        <li>
      <h2 class="widgettitle">Archiwum</h2>
      <ul>
        <select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
  <option value=""><?php echo esc_attr( __( 'Wybierz miesiąc' ) ); ?></option> 
  <?php wp_get_archives( 'type=monthly&format=option&show_post_count=1' ); ?>
</select>
      </ul>
    </li>
    </ul>
		
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