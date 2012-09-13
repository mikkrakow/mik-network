<div id="supplementary">
<div class="meta">
  <?php if (is_home()) {?>

<ul>
    <?php if ( !function_exists('dynamic_sidebar')
      || !dynamic_sidebar() ) : ?>
    <li>
      <h3>Archives</h3>
      <ul id="archives">
        <?php wp_get_archives('format=html'); ?>
      </ul>
    </li>
  <?php endif; ?>
  </ul>
  
  <?php } elseif (is_page()) { ?>
  <div class="post_nav">
	<div class="blog_desc">
	<h2>Dilettante</h2>
	<p>„Dilettante – teatr w ruchu” to działania Małopolskiego Instytutu Kultury, których celem jest wspieranie amatorskiego ruchu teatralnego. Wsparcie to polega na szkoleniu i podnoszeniu kompetencji animatorów grup teatralnych w ramach warsztatów z pedagogiki teatru, prowadzonych przez aktorów, pedagogów, teatrologów, a także na udostępnianiu materiałów dydaktycznych, udzielaniu konsultacji oraz informowaniu o wydarzeniach teatralnych w regionie.</p>
	</div>
	
	<div style="margin:1em 0;">
<span class="spacer">Gdzie jestem?&nbsp;</span><span>PRZEGLĄDASZ:</span><br />
<span class="spacer2"><a href="<?php bloginfo('url'); ?>">&nbsp;<?php bloginfo('name'); ?></a></span><span class="spacer2">&nbsp;<?php the_title(); ?></span>
</div>
	
	</div>
	
	<ul>
    <?php if ( !function_exists('dynamic_sidebar')
      || !dynamic_sidebar() ) : ?>
    <li>
      <h3>Archives</h3>
      <ul id="archives">
        <?php wp_get_archives('format=html'); ?>
      </ul>
    </li>
  <?php endif; ?>
  </ul>
  

  <?php } elseif (is_single()) { ?>
    <div class="post_nav">
	<div class="blog_desc">
	<h2>Dilettante</h2>
	<p>„Dilettante – teatr w ruchu” to działania Małopolskiego Instytutu Kultury, których celem jest wspieranie amatorskiego ruchu teatralnego. Wsparcie to polega na szkoleniu i podnoszeniu kompetencji animatorów grup teatralnych w ramach warsztatów z pedagogiki teatru, prowadzonych przez aktorów, pedagogów, teatrologów, a także na udostępnianiu materiałów dydaktycznych, udzielaniu konsultacji oraz informowaniu o wydarzeniach teatralnych w regionie.</p>
	</div>
	
<div style="margin:1em 0;">
<span class="spacer">Gdzie jestem?&nbsp;</span><span>PRZEGLĄDASZ:</span><br />
<span class="spacer2"><a href="<?php bloginfo('url'); ?>">&nbsp;<?php bloginfo('name'); ?></a></span><span class="spacer2">&nbsp;<?php the_title(); ?></span>
</div>	
			
     <ul class="single_post_meta">
		<li> 
        <li><strong>Autor:</strong>
		<?php if (get_the_author_url()) { ?>
		
      <?php the_author_posts_link() ?>
      
      <?php } else { the_author_posts_link(); } ?></li>
		<li><strong>Data publikacji:</strong> <?php echo get_the_date(); ?></li>
	  	<li><?php include ('license.php'); ?></li>
      	<li><?php the_tags('<span><strong>Tagi: </strong></span> ', ', ', ''); ?></li>       
		<li><strong>Kategorie:</strong> <?php the_category(', ') ?></li>
		
<li> <?php dynamic_sidebar('sidebar-10'); ?> </li>
<li style="margin-top:-15px;"><?php
if ( get_post_meta($post->ID, 'osmshortcode', true) )
echo do_shortcode(get_post_meta($post->ID, 'osmshortcode', $single = true));
?></li>

			
	</ul>
	
    </div>
    
      
    
    <?php } elseif (is_category()) { ?>
      <div class="post_nav">
		<div class="blog_desc">
	<h2>Dilettante</h2>
	<p>„Dilettante – teatr w ruchu” to działania Małopolskiego Instytutu Kultury, których celem jest wspieranie amatorskiego ruchu teatralnego. Wsparcie to polega na szkoleniu i podnoszeniu kompetencji animatorów grup teatralnych w ramach warsztatów z pedagogiki teatru, prowadzonych przez aktorów, pedagogów, teatrologów, a także na udostępnianiu materiałów dydaktycznych, udzielaniu konsultacji oraz informowaniu o wydarzeniach teatralnych w regionie.</p>
	</div>
			<div style="margin:1em 0;">
		<span class="spacer">Gdzie jestem?&nbsp;</span><span>PRZEGLĄDASZ:</span><br />
		<span class="spacer2"><a href="<?php bloginfo('url'); ?>">&nbsp;<?php bloginfo('name'); ?></a></span><span class="spacer2">&nbsp;<?php single_cat_title(''); ?></span>
			</div>

<p><?php echo category_description( $category_id ); ?></p>
					</div>
      
          
	
    <?php } elseif (is_tag()) { ?>
      <div class="post_nav">
	  <div class="blog_desc">
	<h2>Dilettante</h2>
	<p>„Dilettante – teatr w ruchu” to działania Małopolskiego Instytutu Kultury, których celem jest wspieranie amatorskiego ruchu teatralnego. Wsparcie to polega na szkoleniu i podnoszeniu kompetencji animatorów grup teatralnych w ramach warsztatów z pedagogiki teatru, prowadzonych przez aktorów, pedagogów, teatrologów, a także na udostępnianiu materiałów dydaktycznych, udzielaniu konsultacji oraz informowaniu o wydarzeniach teatralnych w regionie.</p>
	</div>
	
	
        <div style="margin:1em 0;">
		<span class="spacer">Gdzie jestem?&nbsp;</span><span>Przeglądasz archiwa oznaczone tagiem&nbsp;</span><span class="spacer2">&nbsp;<?php single_tag_title(); ?></span>
		</div>

      <p><?php echo tag_description( $tag_id ); ?></p>
      <h2 class="widgettitle">Tagi</h2>
      <ul>
        <li><?php wp_tag_cloud('smallest=8&largest=16'); ?></li>
      </ul>
    </div>
    <?php } elseif (is_month()) { ?>
      <div class="post_nav">
        <div style="margin:1em 0;">
		<span class="spacer">Gdzie jestem?&nbsp;</span><span>Przeglądasz archiwa dla daty&nbsp;</span><span class="spacer2">&nbsp;<?php the_time('F, Y'); ?></span>
			</div>
      </div>
      
      <ul>
        <?php if ( !function_exists('dynamic_sidebar')
          || !dynamic_sidebar() ) : ?>
         <?php endif; ?>
      </ul>

    <?php } elseif (is_year ()) { ?>
      <div class="post_nav">
	  <div class="blog_desc">
	<h2>Dilettante</h2>
	<p>„Dilettante – teatr w ruchu” to działania Małopolskiego Instytutu Kultury, których celem jest wspieranie amatorskiego ruchu teatralnego. Wsparcie to polega na szkoleniu i podnoszeniu kompetencji animatorów grup teatralnych w ramach warsztatów z pedagogiki teatru, prowadzonych przez aktorów, pedagogów, teatrologów, a także na udostępnianiu materiałów dydaktycznych, udzielaniu konsultacji oraz informowaniu o wydarzeniach teatralnych w regionie.</p>
	</div>
        <h3>Where am I?</h3>
        <p>You are currently viewing the archives for <strong><?php the_time('Y'); ?></strong> at <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>.</p>
        <div class="spacer"></div>
      </div>
      
      <ul>
        <?php if ( !function_exists('dynamic_sidebar')
          || !dynamic_sidebar() ) : ?>
         <?php endif; ?>
      </ul>

    <?php } elseif (is_day()) { ?>
      <div class="post_nav">
        <h3>Where am I?</h3>
        <p>You are currently viewing the archives for <strong><?php the_time('l, F jS, Y'); ?></strong> at <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>.</p>
        <div class="spacer"></div>
      </div>
      
      <ul>
        <?php if ( !function_exists('dynamic_sidebar')
          || !dynamic_sidebar() ) : ?>
         <?php endif; ?>
      </ul>

    <?php } elseif (is_search()) {?>
	      <div class="post_nav">
	  
        <div style="margin:1em 0;">
		<span class="spacer">Gdzie jestem?&nbsp;</span><span>Przeglądasz wyniki wyszukiwania dla hasła&nbsp;</span><span class="spacer2">&nbsp;<?php the_search_query(); ?></span>
		</div>
      </div>
      
      <ul>
        <?php if ( !function_exists('dynamic_sidebar')
          || !dynamic_sidebar() ) : ?>
         <?php endif; ?>
      </ul>

    <?php } elseif (is_page('about')) {?>
      <div class="post_nav">
        <h3>Blogroll</h3>
        <ul>
          <?php wp_list_bookmarks('categorize=0&title_li=0&title_after=&title_before=');?>
        </ul>
      </div>
      
      <ul>
        <?php if ( !function_exists('dynamic_sidebar')
          || !dynamic_sidebar() ) : ?>
         <?php endif; ?>
      </ul>


<?php } elseif (is_author()) {?>
	<div class="post_nav">
	<div class="blog_desc">
	<h2>Dilettante</h2>
	<p>„Dilettante – teatr w ruchu” to działania Małopolskiego Instytutu Kultury, których celem jest wspieranie amatorskiego ruchu teatralnego. Wsparcie to polega na szkoleniu i podnoszeniu kompetencji animatorów grup teatralnych w ramach warsztatów z pedagogiki teatru, prowadzonych przez aktorów, pedagogów, teatrologów, a także na udostępnianiu materiałów dydaktycznych, udzielaniu konsultacji oraz informowaniu o wydarzeniach teatralnych w regionie.</p>
	</div>
		<ul>
			<li><?php echo get_userdata($author)->display_name; ?></li>
			<li><?php echo userphoto_the_author_thumbnail() ; ?></li>
			<li><?php the_author_meta('yim'); ?></li>
			<li>tel. +<?php the_author_meta('aim'); ?></li>
			<li><p><?php echo get_userdata($author)->description; ?></p></li>
			<li><a href="<?php bloginfo('url'); ?>/kontakt/">Formularz kontaktowy</a></li>
		</ul>
	</div>
<?php } ?>
</div> <!-- close meta -->
</div> <!-- close supplementary -->

</div> <!-- close content -->
