<?php
/*
Template Name: kontakt
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
      
    </div>
  <?php endwhile; ?>

    </div>
    <?php endif; ?>


<div id="supplementary">
<div class="post_nav_fx"><br />
   <?php echo do_shortcode('[osm_map lat="50.066" long="19.93" zoom="15" width="240" height="300" marker="50.066,19.93" marker_name="wpttemp-red.png" type="Mapnik"]'); ?>   
</div>
</div>

</div> <!-- close entry_content -->


<?php get_footer(); ?>
