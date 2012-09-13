<div id="supplementary">
<div class="meta">
  <?php if (is_home() || is_page()) {?>

<ul>
    <?php if ( !function_exists('dynamic_sidebar')
      || !dynamic_sidebar() ) : ?>
        
    <li>
      <h3>Categories</h3>	
      <ul id="categories">
        <?php wp_list_categories('orderby=name&title_li='); ?>
      </ul>
    </li>
    
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
     <!--gdzie jestem -->
	<div style="margin:1em 0;">
	<span class="spacer">Gdzie jestem?&nbsp;</span><span>PRZEGLĄDASZ:</span><br />
	<span class="spacer2"><a href="<?php bloginfo('url'); ?>">&nbsp;<?php bloginfo('name'); ?></a></span><span class="spacer2">&nbsp;<a href="<?php bloginfo('url'); ?>/typ/dzialania">działania MIK</a></span><span class="spacer2">&nbsp;<?php the_title(); ?></span>
	</div> <!--close gdzie jestem -->	    
       
     <ul class="single_post_meta">
		<li> 
        <li><strong>Autor:</strong>
		<?php if (get_the_author_url()) { ?>
		
      <?php the_author_posts_link() ?>
      
      <?php } else { the_author_posts_link(); } ?></li>
	  	<li><?php include ('license.php'); ?></li>     
		<?php { if ( function_exists('add_theme_support')) the_post_thumbnail( 'post-thumbnail' ); } ?>
		

			
	</ul>

    </div>
    
      
    
    <?php } elseif (is_category()) { ?>
      <div class="post_nav">
		
			<h3 class="spacer">Gdzie jestem?</h3>
			<p>Przeglądasz archiwa kategorii <strong><?php single_cat_title(''); ?></strong></p>
					</div>
      
      
      <ul>
        <p>lista kategorii</p>
      </ul>
    
	<?php } elseif (is_page('zespol')) { ?>
      <div class="post_nav_fx">
<h3 class="spacer">Gdzie jestem?</h3>

           
      <ul>
        <p>aktywna lista podzialu zespolu mik programy sekcja it wolontariusze </p>
      </ul>
  </div>
    <?php } elseif (is_tag()) { ?>
      <div class="post_nav">
        <h3 class="spacer">Gdzie jestem?</h3>
        <p>Przegląsz archiwa otagowane <strong><?php single_tag_title(); ?></strong></p>
          <div class="spacer"></div>
      </div>
      
      <ul>
        <li><?php wp_tag_cloud('smallest=8&largest=22'); ?></li>
      </ul>
    
    <?php } elseif (is_month()) { ?>
      <div class="post_nav">
        <h3 class="spacer">Gdzie jestem?</h3>
        <p>Przeglądasz archiwa dla daty <strong><?php the_time('F, Y'); ?></strong> at <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>.</p>
        <div class="spacer"></div>
      </div>
      
      <ul>
        <?php if ( !function_exists('dynamic_sidebar')
          || !dynamic_sidebar() ) : ?>
         <?php endif; ?>
      </ul>

    <?php } elseif (is_year ()) { ?>
      <div class="post_nav">
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
        <h3 class="spacer">Gdzie jestem?</h3>
        <p>Przeglasza wyniki wyszukiwania dla hasła <strong><?php the_search_query(); ?></strong>.</p>
        <div class="spacer"></div>
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

<?php } elseif (is_page('contact')) {?>

<?php } elseif (is_author()) {?>
	<div class="post_nav_fx">
		<ul>
			<li><?php echo get_userdata($author)->display_name; ?></li>
			<li><?php echo userphoto_the_author_thumbnail() ; ?></li>
			<li><?php the_author_meta('yim'); ?></li>
			<li>tel. +<?php the_author_meta('aim'); ?></li>
			<li><p><?php echo get_userdata($author)->description; ?></p></li>
			<li><?php echo safe_contact_form_redirect_link('Formularz kontaktowy'); ?></li>
		</ul>
	</div>
<?php } ?>
</div> <!-- close meta -->
</div> <!-- close supplementary -->

</div> <!-- close content -->
