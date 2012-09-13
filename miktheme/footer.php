<div id="footer">
	
 <!-- <div id="footer_contact">
    <p>Grafika: Agnieszka Buława-Orłowska</p>
    <p>Theme: <a href="http://krakoff.info">Marcin Wójcik</a>, Dominik Gawlik (praktyka)</p>
	<p>CMS: <a href="http://wordpress.org">WordPress</a></p>
</div>
-->

<div id="footer_partners">
	<div id="footer-partnerzy">
	<p style="color:#294659; font-weight: bold; float: right; font-size: 11px; letter-spacing:1px">PARTNERZY:</p>
	<img style="float:left;" src="http://mik.krakow.pl/wp-content/uploads/mik-stopka.gif" alt="MIK" />
	</div>
	
	
	
	
		<div style="float:left">
		<?php if (function_exists (Ihrss)) Ihrss(); ?> 
		</div>
	
	
		<div style="float:right;"><a href="http://www.malopolskie.pl/Kultura/JednostkiKultury/"><img style="width:50px;padding:10px;float:left;" src="http://mik.krakow.pl/wp-content/uploads/region-stopka.jpg"></a><p style="color: #294659;float:right;font-size:11px;width:85px;padding-top:11px;line-height:1.5">instytucja kultury Województwa Małopolskiego</p></div>
	
	

</div>	

<hr class="dotted"/>
<div id="mik_contact"><p>MAŁOPOLSKI INSTYTUT KULTURY, ul. Karmelicka 27, 31-131 Kraków, tel.: +48(12)422 18 84, faks: +48(12)422 55 62, NIP: 675 000 44 88, <a href="http://mik.krakow.pl/projekt-i-wykonanie">Projekt i wykonanie<span><strong>Grafika:</strong> Agnieszka Buława-Orłowska <br /><strong>Theme:</strong> Marcin Wójcik, Lech Dulian, Dominik Gawlik (praktyka)<br /><strong>CMS:</strong> WordPress</span></a></p>
</div>
</div>


</div> <!-- close wrapper -->
<?php if ( get_post_meta($post->ID, 'pokaz-ukryj', true) ) : ?>
<script language="JavaScript" type="text/JavaScript">  
<!--  
function toggle(id, id2 ) {  
          
    var toggle_block = document.getElementById(id);  
    var toggle_text = document.getElementById(id2);  
  
        if(toggle_block.style.display == 'block'){  
                toggle_block.style.display = 'none';  
            toggle_text.innerHTML = 'Pokaż:' ;  
        }else{  
            toggle_block.style.display = 'block';  
            toggle_text.innerHTML = 'Ukryj:';  
        }  
    }  

//-->  
</script>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
