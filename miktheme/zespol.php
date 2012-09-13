<?php
/*
Template Name: zespol
*/
?>

<?php get_header(); ?>
<div id="content">
<div id="entry_content">
    <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="entry">
      <?php { if ( function_exists('add_theme_support')) the_post_thumbnail( 'post-thumbnail' ); } ?>
      <?php the_content('Read the rest of this entry &raquo;'); ?>
      
    </div>
  <?php endwhile; ?>
    </div>
  <?php endif; ?>

<div id="supplementary">
<div class="meta">
<div class="post_nav_fx">
<!--gdzie jestem -->
	<div style="margin:1em 0;">
	<span class="spacer">Gdzie jestem?&nbsp;</span><span>PRZEGLĄDASZ:</span><br />
	<span class="spacer2">&nbsp;<?php the_title(); ?></span>
	</div> <!--close gdzie jestem -->	
         <p>Przejdź do działu:</p> 
     <ul> 
<li><a href="<?php bloginfo('url'); ?>/zespol/#dyrekcja">dyrekcja</a></li>
<li><a href="<?php bloginfo('url'); ?>/zespol/#sekretariat">sekretariat</a></li>
<li><a href="<?php bloginfo('url'); ?>/zespol/#programy">działania</a></li>
<li><a href="<?php bloginfo('url'); ?>/zespol/#wydawnictwo">wydawnictwo</a></li>
<li><a href="<?php bloginfo('url'); ?>/zespol/#biblioteka">biblioteka</a></li>
<li><a href="<?php bloginfo('url'); ?>/zespol/#promocja">promocja</a></li>
<li><a href="<?php bloginfo('url'); ?>/zespol/#IT">IT</a></li>
<li><a href="<?php bloginfo('url'); ?>/zespol/#finanse">sekcja finansowo-księgowa</a></li>
<li><a href="<?php bloginfo('url'); ?>/zespol/#publiczne">zamówienia publiczne</a></li>
<li><a href="<?php bloginfo('url'); ?>/zespol/#estetyka">porządek i estetyka</a></li>
<li><a href="<?php bloginfo('url'); ?>/zespol/#praktyka">wolontariusze, praktykanci, stażyści</a></li>
</ul>
</div>
</div>
</div>

</div> <!-- close entry_content -->


<?php get_footer(); ?>
