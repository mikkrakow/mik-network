<?php
global $wp_query;
$postid = $wp_query->post->ID;
$licencja = get_post_meta($postid, 'licencja', true);


if ( $licencja == 'BY' ) {
	echo '<span style="float:left;font-weight:bold;">Licencja:&nbsp;</span><a rel="license" href="http://creativecommons.org/licenses/by/3.0/pl/"><img style="display:block; float:left; margin:0px 3px 3px 0px;" alt="Creative Commons License" src="http://i.creativecommons.org/l/by/3.0/80x15.png" /></a><span style="display:block;clear:both;font-weight:normal;"><a rel="license" href=" http://creativecommons.org/licenses/by/3.0/pl/">Uznanie autorstwa 3.0 Polska (CC BY 3.0)</a>';
}

elseif ($licencja == 'BY-NC' ) {
	echo '<span style="float:left;font-weight:bold;">Licencja:&nbsp;</span><a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/pl/"><img style="display:block; float:left; margin:0px 3px 3px 0px;" alt="Creative Commons License" src="http://i.creativecommons.org/l/by-nc/3.0/80x15.png" /></a><span style="display:block;clear:both;font-weight:normal;"><a rel="license" href=" http://creativecommons.org/licenses/by-nc/3.0/pl/">Uznanie autorstwa-Użycie niekomercyjne 3.0 Polska (CC BY-NC 3.0)</a>';
}

elseif ($licencja == 'BY-ND' ) {
	echo '<span style="float:left;font-weight:bold;">Licencja:&nbsp;</span><a rel="license" href="http://creativecommons.org/licenses/by-nd/3.0/pl/"><img style="display:block; float:left; margin:0px 3px 3px 0px;" alt="Creative Commons License" src="http://i.creativecommons.org/l/by-nd/3.0/80x15.png" /></a><span style="display:block;clear:both;font-weight:normal;"><a rel="license" href=" http://creativecommons.org/licenses/by-nd/3.0/pl/">Uznanie autorstwa-Bez utworów zależnych 3.0 Polska (CC BY-ND 3.0)</a>';
}

elseif ($licencja == 'BY-NC-ND' ) {
	echo '<span style="float:left;font-weight:bold;">Licencja:&nbsp;</span><a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/pl/"><img style="display:block; float:left; margin:0px 3px 3px 0px;" alt="Creative Commons License" src="http://i.creativecommons.org/l/by-nc-nd/3.0/80x15.png" /></a><span style="display:block;clear:both;font-weight:normal;"><a rel="license" href=" http://creativecommons.org/licenses/by-nc-nd/3.0/pl/">Uznanie autorstwa-Użycie niekomercyjne-Bez utworów zależnych 3.0 Polska (CC BY-NC-ND 3.0)</a>';
}

elseif ($licencja == 'BY-NC-SA' ) {
	echo '<span style="float:left;font-weight:bold;">Licencja:&nbsp;</span><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/pl/"><img style="display:block; float:left; margin:0px 3px 3px 0px;" alt="Creative Commons License" src="http://i.creativecommons.org/l/by-nc-sa/3.0/80x15.png" /></a><span style="display:block;clear:both;font-weight:normal;"><a rel="license" href=" http://creativecommons.org/licenses/by-nc-sa/3.0/pl/">Uznanie autorstwa-Użycie niekomercyjne-Na tych samych warunkach 3.0 Polska (CC BY-NC-SA 3.0)</a>';
}

else echo'<span style="float:left;font-weight:bold;">Licencja:&nbsp;</span><a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/pl/"><img style="display:block; float:left; margin:0px 3px 3px 0px;" alt="Creative Commons License" src="http://i.creativecommons.org/l/by-sa/3.0/80x15.png" /></a><span style="display:block;clear:both;font-weight:normal;"><a rel="license" href=" http://creativecommons.org/licenses/by-sa/3.0/pl/">Uznanie autorstwa-Na tych samych warunkach 3.0 Polska (CC BY-SA 3.0)</a>';

?>
