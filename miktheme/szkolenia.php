<?php
/*
Template Name: szkolenia
*/
?>

<?php get_header(); ?>

<div id="content">
<div id="entry_content">

<h2 class="title"><?php the_title(); ?></h2>
<div class="entry">   
  <p>Zapraszamy do współpracy instytucje, organizacje i osoby prywatne pragnące podnosić swoje kwalifikacje dotyczące między innymi realizacji projektów kulturalnych, pracy w zespołach, wizerunku i sponsoringu. Szkolenia i warsztaty prowadzone przez pracowników i współpracowników MIK są efektem zarówno naszych doświadczeń w dziedzinie realizowania projektów kulturalnych jak i działań edukacyjnych i konsultacyjnych na terenie Małopolski i całego kraju. Proponujemy również konsultacje indywidualne oraz badania, raporty i rekomendacje realizowane na zamówienie. Swoją ofertę kierujemy do animatorów kultury, pracowników muzeów, nauczycieli, pracowników jednostek samorządu terytorialnego i regionalistów.</p> 
  <p>Szkolenia i warsztaty MIK proponuje w dwóch systemach:	kalendarz szkoleń oraz szkolenia organizowane na zamówienie zainteresowanych grup.
  </p>
  <ul>
  <li><a href="http://mik.krakow.pl/szkolenia-dla-instytucji-i-organizacji-kultury-w-ramach-cyklu-planowanie-wizerunek-partycypacja/">Szkolenia dla instytucji i organizacji kultury w ramach cyklu <i>planowanie, wizerunek, partycypacja</i></a></li>
  <li><a href="/oferta-szkoleniowa/szkolenia-i-warsztaty-na-zamowienie">Szkolenia i warsztaty na zamówienie zainteresowanych grup</a></li>
  <li><a href="/oferta-szkoleniowa/konsultacje-mik">Konsultacje</a></li>
  <li><a href="/oferta-szkoleniowa/badania-raporty-rekomendacje-mik">Badania, raporty, rekomendacje</a></li>
  <li><a href="/oferta-szkoleniowa/szkolenia-kontakt">Kontakt</a></li></ul>
<hr class="dotted">
</div>

	<?php query_posts( 'cat=126,252' ); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    
	<!-- info o trwających zapisach -->
	<?php 
	$currentdate = time();
	$data = get_post_meta ($post->ID, 'szkolenie-data', true);
	$zapisy = strtotime(get_post_meta ($post->ID, 'szkolenie-zapisy', true));
	?>
	
	<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <div class="entry">       
 <a href="<?php the_permalink() ?>"><?php { if ( function_exists('add_theme_support')) the_post_thumbnail( 'post-thumbnail' ); } ?></a>

	<!-- data szkolenia z custom fielda. Jeśli nie minęła data zapisów, to wyświetl też komunikat ZAPISY OTWARTE -->
	<p style="color:#03446D; margin-top:10px;">
	<?php if ($zapisy>$currentdate) { ?> <span class="zapisy">zapisy otwarte!</span> <?php } ?>
	<?php if ($data) { echo 'Data szkolenia: ' . '<strong>' . $data . '</strong>'; } ?>
	</p>
		
	
 <?php the_excerpt('<img src="' . get_bloginfo('template_directory'). '/images/arrow-menu.gif" alt="czytaj więcej" title="więcej" />'); ?>

 <p class="date"><?php the_time('j F Y') ?> <?php

$org_blog_id = get_post_meta ($post->ID, 'blogid', true);

if($org_blog_id) {

$blog_details = get_blog_details($org_blog_id);

echo ' via <a href="' . $blog_details->siteurl . '">' . $blog_details->blogname . '</a>';

}

?></p> 
   
 </div>     
<?php if( ($wp_query->current_post) < ($wp_query->post_count-1) ){ ?> 
 <div id="post-item-divider"><hr class="dotted"/></div> 
<?php } ?>
      
      
    <?php endwhile; ?>
	<div class="navigation">  

 <p class="alignleft">

 <?php next_posts_link('&laquo; Starsze wpisy') ?></p>   

 <p class="alignright"><?php previous_posts_link('Nowsze wpisy &raquo;') ?></p> 

 </div>   
  <?php else : ?>
  <?php endif; ?>
  </div> <!-- close entry_content -->
<div id="supplementary">
<div class="meta">
<div class="post_nav">
	<!--gdzie jestem -->
	<div style="margin:1em 0;">
	<span class="spacer">Gdzie jestem?&nbsp;</span><span>PRZEGLĄDASZ:</span><br />
	<span class="spacer2">&nbsp;oferta szkoleniowa MIK</span>
	</div> <!--close gdzie jestem -->	
			  

<p><strong>Słowniczek</strong></p>
	
<p><strong>Warsztaty</strong><br />
Warsztaty stanowią formę edukacyjną opartą o takie metody przekazywania wiedzy jak: wykład/prezentacja, ćwiczenia indywidualne i w grupach, prezentacja efektów wypracowanych przez uczestników, burze mózgu, symulacje i in. 
W przypadku warsztatów wiedza przekazywana jest zarówno w relacji: prowadzący – uczestnicy jak i w relacji między uczestnikami. Istotny jest tu efekt synergii grupy.
</p>

<p><strong>Szkolenia</strong><br />
Szkoleniami nazywamy formę edukacyjną nastawioną na przekazywanie wiedzy przez prowadzącego grupie uczestników oraz indywidualnie. Stosowane podczas szkoleń metody to: wykład (wraz z prezentacją), praca indywidualna, pytania do prowadzącego.
</p>

<p><strong>Konsultacje</strong><br />
Konsultacje polegają na rozmowie z pracownikiem lub współpracownikiem MIK (lista tematów w załączeniu). Zachęcamy też do wizyt w naszej instytucji wszystkich, których interesuje praca MIK (szczegóły na naszej stronie WWW). Prosimy o umawianie się na spotkania bezpośrednio z osobami udzielającymi konsultacji. Można to zrobić telefonicznie lub mailowo. Spotkania poświęcone na konsultacje trwają zwykle do 2 godzin i są bezpłatne.
</p>

<p><strong>Badania, raporty, rekomendacje</strong><br />
Badania, raporty i rekomendacje są realizowane na konkretne zamówienie. Zarówno ich zakres, jak i cena wymagają szczegółowych ustaleń, uwzględniających potrzebny czas i zaangażowanie specjalistów. 
</p>

<p><strong>Zgłaszanie udziału</strong><br />
Na warsztaty/szkolenia ujęte w kalendarzu należy zgłaszać się, wypełniając formularz zgłoszeniowy i wysyłając go drogą elektroniczną lub faxem, nie później niż na 3 dni przed planowanymi zajęciami. Jeśli nie zbierze się wymagane minimum uczestników, organizatorzy powiadamiają zapisane osoby o odwołaniu szkolenia, najpóźniej na 3 dni przed planowanymi zajęciami.
</p>

<p><strong>Opłaty za uczestnictwo w warsztatach/szkoleniach</strong><br />
Opłaty za uczestnictwo można uiszczać przelewem na konto MIK (z podaniem tytułu warsztatu) przed zajęciami lub po – na podstawie wystawianej przez organizatora faktury. W przypadku rezygnacji z udziału w szkoleniu po uiszczeniu opłaty, można zgłosić organizatorom chęć udziału w innym szkoleniu (w ramach tego samego programu i w cenie tego, z którego zrezygnowaliśmy) lub, jeżeli rezygnacja zostanie zgłoszona co najmniej na 5 dni roboczych przez terminem szkolenia, odzyskać 50% wpłaconej kwoty. Nieobecność zgłoszona później nie jest podstawą do odzyskania opłaty za szkolenie.
</p>

<p><strong>Materiały powarsztatowe/poszkoleniowe</strong><br />
W przypadku niektórych szkoleń i warsztatów przewidziane jest dostarczenie, zwykle drogą mailową, materiałów uzupełniających zawartość merytoryczną zajęć. Poza materiałami przygotowanymi przez prowadzącego są to także (zwłaszcza w przypadku warsztatów) efekty wypracowane podczas zajęć przez uczestników (np. pomysły, spisy cech i funkcji itp.).
</p>

<p><strong>Zaświadczenia</strong><br />
Małopolski Instytut Kultury wystawia uczestnikom wybranych zajęć zaświadczenia o odbytych szkoleniach/warsztatach. Dokumenty te mają funkcję wyłącznie informacyjną.
</p>


<p>
	<br />
	<strong>do pobrania</strong><br />
	<a href="/wp-content/uploads/dokumenty/1145_formularz-zgloszeniowy.doc">Formularz zgłoszeniowy</a>
</p>
		 
</div>
</div>
</div>

</div> <!-- close content -->
<?php get_footer(); ?>