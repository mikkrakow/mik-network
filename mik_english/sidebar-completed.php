<div id="side_nav">

<ul class="menu">

<?php 
  query_posts( array(
	'post_type'=> 'activities',
	'taxonomy' => 'typ',
	'typ' => 'completed',
	'order'    => 'ASC',
	'orderby'  => 'title',
	'posts_per_page' => '-1'
)); ?>



  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>     
      
    <?php endwhile; ?>
  <?php else : ?>
  <?php endif; ?>

</ul>

</div>
</div>

<div id="supplementary">
<div class="meta">
  

<ul>
    <?php if ( !function_exists('dynamic_sidebar')
      || !dynamic_sidebar() ) : ?>
    <li>
      <h3>Archives</h3>
      
    </li>
  <?php endif; ?>
  </ul>

  </div> <!-- close meta -->
</div> <!-- close supplementary -->