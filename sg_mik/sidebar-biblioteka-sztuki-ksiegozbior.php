
<div id="supplementary">
<div class="meta">
    <div class="post_nav">
<ul>
    <?php if ( !function_exists('dynamic_sidebar')
      || !dynamic_sidebar() ) : ?>
</ul>	  
     <?php endif; ?>
    </div>
</div> <!-- close meta -->
</div> <!-- close supplementary -->
<div id="entry_content">
<?php

// The Query
$the_query = new WP_Query( 'tag_id=261' );

// The Loop
while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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

</div>
<script language="JavaScript" type="text/JavaScript">  
<!--  
function toggle(id, id2 ) {  
          
    var toggle_block = document.getElementById(id);  
    var toggle_text = document.getElementById(id2);  
  
        if(toggle_block.style.display == 'block'){  
                toggle_block.style.display = 'none';  
            toggle_text.innerHTML = '<img class="colorbox-off" style="margin: 2px 5px 0px 0px;float:left;" src="http://muzeoblog.org/wp-content/plugins/wp-email/images/email_famfamfam.png" alt="kontakt" />Kontakt:';  
        }else{  
            toggle_block.style.display = 'block';  
            toggle_text.innerHTML = 'Ukryj kontakt:';  
        }  
    }  
//-->  
</script>  
</div> <!-- close content -->
