<?php
/*
Template Name: foto
*/
?>

<?php get_header(); ?>

<div id="content">
<div id="entry_content">

  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
           
      <div class="entry" style="margin-top:-19px;">
      <?php the_content(); ?>
	  </div>
	  </div>
	  <div id="foto_excerpt">
	  <h2>Najnowsze fotografie MIKu</h2>
	  <p>Przedstawiamy najnowsze zdjęcia nawiązujące do działalności MIK-u oraz wybrane kolekcje relacjonujące najważniejsze wydarzenia.</p>
<p>Pozostałe fotografie znaleźć można w serwisie <a href="http://www.flickr.com/photos/mik_krakow/">flickr.com</a>, gdzie udostępniane są na licencjach creative commons.</p>
	  </div>
	  <div style="clear:both;">
        
		</div>
  <?php endwhile; ?>
  
  <?php else : ?>
  
  
<?php endif; ?>


<?php
global $wp_query;
$postid = $wp_query->post->ID;
$sidebar = get_post_meta($postid, "sidebar", true);
get_sidebar($sidebar);
wp_reset_query();
?>
<?php get_footer(); ?>