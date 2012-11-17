<?php //put your array at the top first
//stuff to go into the head code for the English pages 
//goes at the top of each template page
$root = $_SERVER['DOCUMENT_ROOT'];
$headcode_en = array (
	"title" => ", Actualit&eacute;s",
	"desc" => "Form&eacute;e en 2002-2004 &agrave; l'Acad&eacute;mie de Sophrologie Cayc&eacute;dienne de Paris puis en Andorre, Pr Alfonso Cayc&eacute;do. 2005 Dipl&ocirc;me Master Specialiste. J'enseigne la sophrologie &agrave; Londres depuis 2004, pour adultes/enfants, en fran&ccedil;ais/anglais, individuel/groupes.",
	"keywords" => "La sophrologie m'a aid&eacute;e &agrave; faire face &agrave; ma vie bien remplie de m&egrave;re de trois jeunes enfants. J'ai aussi pris conscience que j'appr&eacute;ciais d'&ecirc;tre &agrave; la maison mais que j'avais besoin de reprendre une activit&eacute; professionnelle. J'ai choisi de me reconvertir et de me former pour &ecirc;tre sophrologue. Je me suis form&eacute;e en 2002-2004 &agrave; l'Acad&eacute;mie de Sophrologie Cayc&eacute;dienne de Paris avec les Dr Patrick-Andr&eacute; Ch&eacute;n&eacute; et Marie-Andr&eacute;e Auquier. Puis j'ai suivi le cursus des Masters, enseign&eacute; par le Professeur Alfonso Cayc&eacute;do lui-m&ecirc;me, en Andorre. Je suis dipl&ocirc;m&eacute;e Master Specialiste en  Sophrologie Cayc&eacute;dienne, branche socio-prophylactique (2005) et je suis membre de la Fondation Alfonso Cayc&eacute;do. J'enseigne la sophrologie &agrave; Londres depuis 2004. Je travaille &agrave; la fois avec des adultes et des enfants, en fran&ccedil;ais et en anglais, en individuel et en groupes. Je re&ccedil;ois chez moi ainsi que dans deux cabinets. Cursus, dipl&ocirc;me, &eacute;tudes",
	"body_id" => "actualites"	
);

// error handling - switch off (comment out) after testing
ini_set('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

include_once ($root."/sl_includes_fr/sl_head_fr.php"); //the <head></head> code
include_once ($root."/sl_includes_fr/sl_heading_fr.php"); //the heading <div> tag
include_once ($root."/sl_includes_fr/sl_nav_fr.php"); //the top nav bar
?>
<a name="content" id="content"></a><div id="column"><!--column container -->
<h2>Actualit&eacute;s</h2>
<h3>Quoi de neuf ?</h3>
<p>Je me suis r&eacute;cemment associ&eacute;e &agrave; 4 sophrologues londoniennes pour former &laquo;&nbsp;The Sophrology Network&nbsp;&raquo;.</p>
<img src="soph-network.jpg" alt="the sophrology network logo" />
<p>Notre but est de d&eacute;velopper la sophrologie en Grande Bretagne où elle reste peu connue aujourd’hui. Nous proposons des cours de groupes et des ateliers dans diff&eacute;rents quartiers de Londres. Vous trouverez toutes les informations sur notre site internet : <a href="http://thesophrologynetwork.co.uk/" target="_blank">www.thesophrologynetwork.co.uk</a></p>
<p>Le prochain atelier que j’anime &laquo;&nbsp;Discover Sophrology&nbsp;&raquo; aura lieu le Mardi 4 d&eacute;cembre 2012 &agrave; 19h au cabinet Body Logic pr&egrave;s de Battersea Park. Plus d’info sur <a href="http://thesophrologynetwork.co.uk/workshops/" target="_blank">http://thesophrologynetwork.co.uk/workshops/</a></p>
<br />
		<div class="book_chene">
		<img src="/book_chene.jpg" alt="An Introduction to Sophrology" title="An Introduction to Sophrology" height="360" width="247" />
		<p>Vient de sortir: le premier livre en anglais sur le sophrologie ! <br />"An Introduction to Sophrology" by Dr. P-A Ch&eacute;n&eacute;<br /><a href="contact.php">Pour le commander, merci de me contacter.</a>
		</p>
		</div>
		<div class="clear">
		</div>
<img src="soph-institute.jpg" alt="the sophrology institute logo" />
<p>Bient&ocirc;t &agrave; Londres, la premi&egrave;re &eacute;cole reconnue de sophrologie Cayc&eacute;dienne, The London Sophrology Institute.
Plus d’info sur le site <a href="http://london-sophrology-institute.co.uk/" target="_blank">http://london-sophrology-institute.co.uk/</a></p><br />
<p>Un article vient de para&icirc;tre dans le num&eacute;ro de L'Echo, le magazine des familles francophones de Londres: <a href="Sophro_L'Echo_Oct_12.pdf" target="_blank">Sophro_L'Echo_Oct_12.pdf</a></p>
	</div><!-- end of column container -->
	<div class="clear">
	</div>
<?php //put the main div above this include
include_once ($root."/sl_includes_fr/sl_footer_fr.php"); //the footer of course
?>
