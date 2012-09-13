<div id="audio_content">
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



<div id="sliderwide">
<div id="jFlow">

<?php $image = get_post_meta($post->ID, 'audio_image', true); ?>
<?php $image2 = get_post_meta($post->ID, 'audio_image2', true); ?>
<?php $image3 = get_post_meta($post->ID, 'audio_image3', true); ?>
<?php $image4 = get_post_meta($post->ID, 'audio_image4', true); ?>
<?php $image5 = get_post_meta($post->ID, 'audio_image5', true); ?>
<?php $image6 = get_post_meta($post->ID, 'audio_image6', true); ?>
<?php $image7 = get_post_meta($post->ID, 'audio_image7', true); ?>
<?php $image8 = get_post_meta($post->ID, 'audio_image8', true); ?>
<?php $image9 = get_post_meta($post->ID, 'audio_image9', true); ?>
<?php $image10 = get_post_meta($post->ID, 'audio_image10', true); ?>
<?php $audio = get_post_meta($post->ID, 'audio', true); ?>
<?php $audio2 = get_post_meta($post->ID, 'audio2', true); ?>
<?php $audio3 = get_post_meta($post->ID, 'audio3', true); ?>
<?php $audio4 = get_post_meta($post->ID, 'audio4', true); ?>
<?php $audio5 = get_post_meta($post->ID, 'audio5', true); ?>
<?php $audio6 = get_post_meta($post->ID, 'audio6', true); ?>
<?php $audio7 = get_post_meta($post->ID, 'audio7', true); ?>
<?php $audio8 = get_post_meta($post->ID, 'audio8', true); ?>
<?php $audio9 = get_post_meta($post->ID, 'audio9', true); ?>
<?php $audio10 = get_post_meta($post->ID, 'audio10', true); ?>
<?php $controler = get_post_meta($post->ID, 'controler', true); ?>
        
		<div id="slide1">
        <div class="audio_image"><img src="<?php echo $image; ?>" alt="<?php the_title(); ?>" /></div>
        <span><h3><?php the_title(); ?></h3>
		<p> <?php the_excerpt (); ?></p>
		</span>
		<div id="audio_player"><?php if (function_exists("insert_audio_player")) {  
  insert_audio_player('['.$audio.']');  
} ?> </div>
	</div>

<div id="slide2">
        <div class="audio_image"><img src="<?php echo $image2; ?>" alt="<?php the_title(); ?>" /></div>
        <span><h3><?php the_title(); ?></h3>
		<p> <?php the_excerpt (); ?></p>
		</span>
		<div id="audio_player"><?php if (function_exists("insert_audio_player")) {  
  insert_audio_player('['.$audio2.']');  
} ?> </div>
    </div>
	
	<div id="slide3">
        <div class="audio_image"><img src="<?php echo $image3; ?>" alt="<?php the_title(); ?>" /></div>
        <span><h3><?php the_title(); ?></h3>
		<p> <?php the_excerpt (); ?></p>
		</span>
		<div id="audio_player"><?php if (function_exists("insert_audio_player")) {  
  insert_audio_player('['.$audio3.']');  
} ?> </div>
    </div>
	
	<div id="slide4">
        <div class="audio_image"><img src="<?php echo $image4; ?>" alt="<?php the_title(); ?>" /></div>
        <span><h3><?php the_title(); ?></h3>
		<p> <?php the_excerpt (); ?></p>
		</span>
		<div id="audio_player"><?php if (function_exists("insert_audio_player")) {  
  insert_audio_player('['.$audio4.']');  
} ?> </div>
    </div>
	
	<div id="slide5">
        <div class="audio_image"><img src="<?php echo $image5; ?>" alt="<?php the_title(); ?>" /></div>
        <span><h3><?php the_title(); ?></h3>
		<p> <?php the_excerpt (); ?></p>
		</span>
		<div id="audio_player"><?php if (function_exists("insert_audio_player")) {  
  insert_audio_player('['.$audio5.']');  
} ?> </div>
    </div>
		
		<div id="slide6">
        <div class="audio_image"><img src="<?php echo $image6; ?>" alt="<?php the_title(); ?>" /></div>
        <span><h3><?php the_title(); ?></h3>
		<p> <?php the_excerpt (); ?></p>
		</span>
		<div id="audio_player"><?php if (function_exists("insert_audio_player")) {  
  insert_audio_player('['.$audio6.']');  
} ?> </div>
    </div>
		
		<div id="slide7">
        <div class="audio_image"><img src="<?php echo $image7; ?>" alt="<?php the_title(); ?>" /></div>
        <span><h3><?php the_title(); ?></h3>
		<p> <?php the_excerpt (); ?></p>
		</span>
		<div id="audio_player"><?php if (function_exists("insert_audio_player")) {  
  insert_audio_player('['.$audio7.']');  
} ?> </div>
    </div>
		
		<div id="slide8">
        <div class="audio_image"><img src="<?php echo $image8; ?>" alt="<?php the_title(); ?>" /></div>
        <span><h3><?php the_title(); ?></h3>
		<p> <?php the_excerpt (); ?></p>
		</span>
		<div id="audio_player"><?php if (function_exists("insert_audio_player")) {  
  insert_audio_player('['.$audio8.']');  
} ?> </div>
    </div>
		
		<div id="slide9">
        <div class="audio_image"><img src="<?php echo $image9; ?>" alt="<?php the_title(); ?>" /></div>
        <span><h3><?php the_title(); ?></h3>
		<p> <?php the_excerpt (); ?></p>
		</span>
		<div id="audio_player"><?php if (function_exists("insert_audio_player")) {  
  insert_audio_player('['.$audio9.']');  
} ?> </div>
    </div>
	
		<div id="slide10">
        <div class="audio_image"><img src="<?php echo $image10; ?>" alt="<?php the_title(); ?>" /></div>
        <span><h3><?php the_title(); ?></h3>
		<p> <?php the_excerpt (); ?></p>
		</span>
		<div id="audio_player"><?php if (function_exists("insert_audio_player")) {  
  insert_audio_player('['.$audio10.']');  
} ?> </div>
    </div>
		
		
	
</div> 

</div> <!--close sliderwide-->

<div id="playlist">
<div id="jFlowController">
   
<?php echo $controler; ?>

</div>
</div>

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
