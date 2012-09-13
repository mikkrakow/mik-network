<?php
/*
Template Name: szkolenia-strony
*/
?>

<?php get_header(); ?>

<div id="content">
<div id="entry_content">
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <h2 class="title"><?php the_title(); ?></h2>
    <div class="entry">
      <?php { if ( function_exists('add_theme_support')) the_post_thumbnail( 'post-thumbnail' ); } ?>
      <?php the_content('Read the rest of this entry &raquo;'); ?>
      <?php comments_template(); ?>
    </div>
  <?php endwhile; ?>

  <div class="navigation">
    <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
    <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
  </div>

  <?php else : ?>
    <div class="entry">
      <p>Looks like what you were looking for isn't here.  You might want to give it another try, perhaps the server hiccuped, or perhaps you spelled something wrong (or maybe I did).</p>
    </div>
  <?php endif; ?>
  
  </div> <!-- close entry_content -->
  
 <div id="supplementary">
<div class="meta">
<div class="post_nav">
	<!--gdzie jestem -->
	<div style="margin:1em 0;">
	<span class="spacer">Gdzie jestem?&nbsp;</span><span>PRZEGLĄDASZ:</span><br />
	<span class="spacer2">&nbsp;<a href="http://mik.krakow.pl/oferta-szkoleniowa/">Oferta Szkoleniowa MIK</a></span><span class="spacer2">&nbsp;<?php the_title(); ?></span>
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
	
	<strong>do pobrania</strong><br />
	<a href="/wp-content/uploads/dokumenty/1145_formularz-zgloszeniowy.doc">Formularz zgłoszeniowy</a>
</p>
		 
</div>
</div>
</div>
</div>

  
  



<?php get_footer(); ?>
