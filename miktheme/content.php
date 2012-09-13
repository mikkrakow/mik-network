<div id="entry_content">
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <?php if(is_home()) { if ( function_exists('wp_list_comments') ) { ?> <div <?php post_class(); ?>> <?php }} ?>
	
	<?php if (has_tag('biblioteka-sztuki')) { ?>
	<div style="width:96%; padding:10px; margin: 0 auto; background:rgba(188, 206, 216, 0.75); font-size:12px;line-height:1.2; color:#03446D;">
	<span style="color:#03446D;font-weight:bold;text-align:center;margin-bottom:10px;display:block;font-size:15px;">Uwaga! Biblioteka Sztuki zmienia siedzibę.</span>
	<p>Przy ul. Karmelickiej 27 będzie funkcjonować <strong>do 31 sierpnia 2012 r.</strong>
	Po tym terminie zwroty książek będą przyjmowane w sekretariacie Małopolskiego Instytutu Kultury, w godzinach pracy MIK.</p>
	<p>Nowa siedziba Biblioteki Sztuki – Małopolski Ogród Sztuki, ul. Rajska 12.<br />
	Planowany termin otwarcia: 2013 r.</p>
	<p>Przepraszamy za utrudnienia związane z przeprowadzką.</p></div>
	<?php } ?>
	
      <h2 class="title"><?php the_title(); ?></h2>
<div class="entry">
<?php the_content(); ?>
<div class="pagination">
          <?php wp_link_pages(array('before' => '<p><span>Strona</span>', 'after' => '</p>', 'next_or_number' => 'number')); ?>
        </div>
<div style="border-top:1px solid#eee; font-size:.9em; padding: 10px; float:left; background:#eee; width:480px;">
<div style="display:inline; float:left; margin:-10px 15px 0 5px;"><?php echo userphoto_the_author_thumbnail() ; ?></div>
		<div style="display:inline; float:right; width: 78%;"><strong><?php printf( esc_attr__( '%s'), get_the_author() ); ?></strong>
		<?php the_author_meta('yim'); ?><br />
			<?php the_author_meta('aim'); ?>
			<p><?php the_author_meta( 'description' ); ?></p>
			<a href="<?php bloginfo('url'); ?>/kontakt/">Formularz kontaktowy</a>
		</div>
		</div>
	<!-- społecznościówki -->
		<div style="float:left; margin:2px 5px 0 0;"><?php if(function_exists('wp_email')) { email_link(); } ?></div>
		<div style="float:left; margin:0 5px 0 0;"><?php if(function_exists('wp_print')) { print_link(); } ?></div>
		<div style="float:left; margin:19px 5px 0 0;"><?php echo do_shortcode('[google1]'); ?></div>
		<div style="float:left; margin:15px 0 0 0"><?php echo do_shortcode('[like]'); ?></div>
		
<?php comments_template(); ?>
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