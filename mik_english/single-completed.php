<div id="side_nav">
<?php 
  query_posts( array(
	'post_type'=> 'activities',
	'taxonomy' => 'typ',
	'typ' => 'completed',
	'order'    => 'ASC',
	'orderby'  => 'title',
	'posts_per_page' => '-1'
)); ?>
<ul class="menu">
<li>
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
      
      
    <?php endwhile; ?>
  <?php else : ?>
  <?php endif; ?>
</li>
</ul>
</div>