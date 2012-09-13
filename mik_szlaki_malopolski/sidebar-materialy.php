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
<span class="spacer2"><a href="<?php bloginfo('url'); ?>">&nbsp;<?php bloginfo('name'); ?></a></span><span class="spacer2"><a href="<?php bloginfo('url'); ?>/materialy/">&nbsp;materiały</a></span><span class="spacer2">&nbsp;<?php the_title(); ?></span>
</div> <!-- close gdzie jestem -->
					<p>Sortuj według kategorii:</p>
			<ul>
				<li><a href="http://www.szlakimalopolski.mik.krakow.pl/www-szlaku/">www szlaku</a>
				</li>
				<li><a href="http://www.szlakimalopolski.mik.krakow.pl/gra-terenowa-na-szlaku/">gra terenowa na szlaku</a>
				</li>
				<li><a href="http://www.szlakimalopolski.mik.krakow.pl/mapa-szlaku/">mapa szlaku</a>
				</li>
				<li><a href="http://www.szlakimalopolski.mik.krakow.pl/oferta-szlaku/">oferta szlaku</a></li>
				<li><a href="http://www.szlakimalopolski.mik.krakow.pl/przewodnik-po-szlaku/">przewodnik po szlaku</a></li>
				

			</ul>
			<h2 class="widgettitle">Partnerzy Szlaków Małopolski</h2>
	 <?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow( "szlaki-promo", "" ); } ?>
		</div>
	</div>
</div> <!-- close supplementary -->
<div id="entry_content">
		<!-- The Query -->
	<?php if (is_page( 5663 )) 
		{
	$the_query = new WP_Query( array('cat' => 410, 'posts_per_page' => -1));
		}
	elseif (is_page ( 5668 ))
		{
	$the_query = new WP_Query( array('cat' => 411, 'posts_per_page' => -1));
		}
	elseif (is_page ( 5671 ))
		{
	$the_query = new WP_Query( array('cat' => 407, 'posts_per_page' => -1));
		}
	elseif (is_page ( 5673 ))
		{
	$the_query = new WP_Query( array('cat' => 409, 'posts_per_page' => -1));
		}
	elseif (is_page ( 5675 ))
		{
	$the_query = new WP_Query( array('cat' => 408, 'posts_per_page' => -1));
		}
	?>

	
	<!-- The Loop -->
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	</div> <!-- close entry_content -->
</div> <!-- close content -->
