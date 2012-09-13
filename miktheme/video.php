<?php
/*
Template Name: video
*/
?>

<?php get_header(); ?>

<div id="content">
<div id="media_content">

<script language="JavaScript" type="text/JavaScript">  
<!--  
function toggle(id, id2 ) {  
          
    var toggle_block = document.getElementById(id);  
    var toggle_text = document.getElementById(id2);  
  
        if(toggle_block.style.display == 'block'){  
                toggle_block.style.display = 'none';  
            toggle_text.innerHTML = 'Pokaż komentarze';  
        }else{  
            toggle_block.style.display = 'block';  
            toggle_text.innerHTML = 'Ukryj komentarze';  
        }  
    }  
//-->  
</script>  

  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
      
      
      
      <?php the_content(); ?>
        
		
		
  <?php endwhile; ?>
  
  <?php else : ?>
  
  <div class="entry">
    <span class="error"><img src="<?php bloginfo('template_directory'); ?>/images/mal.png" alt="error duck" /></span>
    <p>Hmmm, seems like what you were looking for isn't here.  You might want to give it another try - the server might have hiccuped - or maybe you even spelled something wrong (though it's more likely <strong>I</strong> did).</p>
  </div>

<?php endif; ?>

</div>
<?php
global $wp_query;
$postid = $wp_query->post->ID;
$sidebar = get_post_meta($postid, "sidebar", true);
get_sidebar($sidebar);
wp_reset_query();
?>
<?php get_footer(); ?>