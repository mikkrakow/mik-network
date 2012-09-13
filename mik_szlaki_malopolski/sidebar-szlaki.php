﻿	<div id="supplementary">
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
<span class="spacer2"><a href="<?php bloginfo('url'); ?>">&nbsp;<?php bloginfo('name'); ?></a></span><span class="spacer2"><a href="<?php bloginfo('url'); ?>/turystyka-kulturowa/">&nbsp;opisy szlaków</a></span><span class="spacer2">&nbsp;<?php the_title(); ?></span>
</div> <!-- close gdzie jestem -->
					<p>Sortuj według kategorii:</p>
			<ul>
				<li><a href="http://www.szlakimalopolski.mik.krakow.pl/szlaki-kulturowe-opisane-na-www-szlakimalopolski-mik-krakow-pl/">szlaki kulturowe</a>
				</li>
				<li><a href="http://www.szlakimalopolski.mik.krakow.pl/turystyczne-trasy-miejskie-opisane-na-www-szlakimalopolski-mik-krakow-pl/">turystyczne trasy miejskie</a>
				</li>
				<li><a href="http://szlakimalopolski.mik.krakow.pl/spacery-tematyczne">spacery tematyczne</a></li>
				<li><a href="http://szlakimalopolski.mik.krakow.pl/szlaki-turystyczne">szlaki turystyczne</a></li>
				<li><a href="http://szlakimalopolski.mik.krakow.pl/wydarzenia">wydarzenia</a></li>
				<li><a href="http://szlakimalopolski.mik.krakow.pl/konferencje">konferencje</a></li>
				<li><a href="http://szlakimalopolski.mik.krakow.pl/category/zagadnienia-teoretyczne/">zagadnienia teoretyczne</a></li>
			</ul>
			
			<h2 class="widgettitle">Partnerzy Szlaków Małopolski</h2>
	 <?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow( "szlaki-promo", "" ); } ?>
		</div>
	</div>
</div> <!-- close supplementary -->
<div id="entry_content">
		<!-- The Query -->
	<?php if (is_page( 3007 )) 
		{
	$the_query = new WP_Query( array('tag_id' => 231, 'posts_per_page' => -1));
		}
	elseif (is_page ( 2582 ))
		{
	$the_query = new WP_Query( array('tag_id' => 279, 'posts_per_page' => -1));
		}
	elseif (is_page ( 3458 ))
		{
	$the_query = new WP_Query( array('tag_id' => 199, 'posts_per_page' => -1));
		}
	elseif (is_page ( 3013 ))
		{
	$the_query = new WP_Query( array('tag_id' => 197, 'posts_per_page' => -1));
		}
	elseif (is_page ( 3009 ))
		{
	$the_query = new WP_Query( array('tag_id' => 178, 'posts_per_page' => -1));
		}
	elseif (is_page ( 4133 ))
		{
	$the_query = new WP_Query( array('tag_id' => 317, 'posts_per_page' => -1));
		}
	elseif (is_page ( 5543 ))
		{
	$the_query = new WP_Query( array('tag_id' => 87, 'posts_per_page' => -1));
		}
	elseif (is_page ( 5533 ))
		{
	$the_query = new WP_Query( array('tag_id' => 194, 'posts_per_page' => -1));
		}
	elseif (is_page ( 5535 ))
		{
	$the_query = new WP_Query( array('tag_id' => 196, 'posts_per_page' => -1));
		}
	elseif (is_page ( 5537 ))
		{
	$the_query = new WP_Query( array('tag_id' => 252, 'posts_per_page' => -1));
		}
	elseif (is_page ( 5539 ))
		{
	$the_query = new WP_Query( array('tag_id' => 296, 'posts_per_page' => -1));
		}
	elseif (is_page ( 5541 ))
		{
	$the_query = new WP_Query( array('tag_id' => 105, 'posts_per_page' => -1));
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
