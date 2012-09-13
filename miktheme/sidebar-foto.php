<div id="content">
<div id="media_content">

<hr class="dotted">

<div class="entry"><h2 class="title">Kolekcje zdjęć</h2></div>

<?php

// The Query
$the_query = new WP_Query( array( 'mediatag' => 'foto', 'posts_per_page' => -1));

// The Loop
while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


 <div class="entry">
 <div id="media_excerpt"><a href="<?php the_permalink() ?>"><?php { if ( function_exists('add_theme_support')) the_post_thumbnail( 'post-thumbnail' ); } ?></a>
		 <div class="excerpt2"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
		 </div>
</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>


	
		<div class="navigation">
<p class="alignleft">
 <?php next_posts_link('&laquo; Starsze wpisy') ?></p>   
 <p class="alignright"><?php previous_posts_link('Nowsze wpisy &raquo;') ?></p> 
		</div> 


</div>
</div> <!-- close media content -->
</div> <!-- close content -->