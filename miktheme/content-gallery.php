<div id="entry_content" style="margin-top:-0.9em;">
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
  
 <div class="entry"> 
<?php the_content(); ?>
      


<!-- społecznościówki -->
			<div style="float:left; margin:-18px 5px 0 0;"><?php if(function_exists('wp_email')) { email_link(); } ?></div>
			<div style="float:left; margin:0px 5px 0 0;"><?php echo do_shortcode('[google1 size="medium"]'); ?></div>
			<div style="float:left; margin:0px 5px 0 0;"><?php echo do_shortcode('[like]'); ?></div>
			
			<!-- komentarze -->
			<a href="javascript:function Z(){Z=''}Z()" id="toggleSwitch" onclick="toggle('komentarz', 'toggleSwitch');">Pokaż komentarze</a>
			
			<div id="komentarz" style="display:none; padding: 10px;"><?php comments_template(); ?></div>
		</div>


<?php endwhile; ?>

<?php else : ?>
			
			<div class="entry">
    <span class="error"><img src="<?php bloginfo('template_directory'); ?>/images/mal.png" /></span>
<p><?php _e( 'Prawdopodobnie najlpeszym wyjściem z tej sytuacji jest skorzystanie z wyszukiwarki' ); ?></p>
						<?php get_search_form(); ?>  
  </div>
			

<?php endif; ?>
</div>
<div id="foto_excerpt">
<h2><?php the_title (); ?></h2>
<?php the_excerpt (); ?>
</div>