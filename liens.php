<?php //put your array at the top first

//stuff to go into the head code for the French pages 
//goes at the top of each template page
$root = $_SERVER['DOCUMENT_ROOT'];
$headcode_en = array (
	"title" => ", Liens utiles et bibiographie",
	"desc" => "Liste de sites internet sur la sophrologie cayc&eacute;dienne en France et en Suisse. Liste de livres sur la sophrologie. Gestion du stress, pr&eacute;paration &agrave; l'accouchement, anti-stress, sport, enfants, CD audio.",
	"keywords" => "Liste de sites internet sur la sophrologie cayc&eacute;dienne en France et en Suisse. Liste de livres sur la sophrologie. Gestion du stress, pr&eacute;paration &agrave; l'accouchement, anti-stress, sport, enfants, CD audio. Site officiel de la Sophrologie Cayc&eacute;dienne, Acad&eacute;mie de Sophrologie de Paris XV, Acad&eacute;mie de Sophrologie Suisse, Initiation &agrave; la Sophrologie Cayc&eacute;dienne, Sophrologie : fondements et m&eacute;thodologie, champs d'application, m&eacute;thode pour g&eacute;rer votre stress, Maternit&eacute; et Sophrologie, L'enfant et la sophrologie, gestion du stress, pr&eacute;paration &agrave; l'accouchement, post-natal, remise en forme apr&egrave;s l'accouchement, sport et sophrologie",
	"body_id" => "links"	
);

// error handling - switch off (comment out) after testing
ini_set('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);
include_once ($root."/sl_includes_fr/sl_head_fr.php"); //the <head></head> code
include_once ($root."/sl_includes_fr/sl_heading_fr.php"); //the heading <div> tag
include_once ($root."/sl_includes_fr/sl_nav_fr.php"); //the top nav bar
?>
<a name="content" id="content"></a><div id="column"><!--column container -->
		<h2>Liens utiles et bibliographie</h2>
		<h3>LIENS UTILES</h3>
		<h4>En fran&ccedil;ais</h4>
		<ul>
		<li>Site officiel de la Sophrologie Cayc&eacute;dienne: <a href="http://www.sophrologie-caycedienne.com" target="_blank">www.sophrologie-caycedienne.com</a></li>
			<li>Site de l'Acad&eacute;mie de Sophrologie de Paris XV: <a href="http://www.academie-sophrologie.fr" target="_blank">www.academie-sophrologie.fr</a></li>
			<li>Site de l'Acad&eacute;mie de Sophrologie Suisse: <a href="http://www.sophro.ch" target="_blank">www.sophro.ch</a></li>
		</ul>

		<h4>En anglais</h4>
		<ul class="logos">
		<li><img src="official-logo.png" alt="Caycedian Sophrology Logo" />Association de sophrologues caycédiens à Londres: <a href="http://www.thesophrologynetwork.co.uk/" target="_blank">www.thesophrologynetwork.co.uk</a></li>
				<li><img src="network-logo.jpg" alt="Logo" />Ecole de sophrologie Caycédienne à Londres: <a href="http://www.london-sophrology-institute.co.uk/" target="_blank">www.london-sophrology-institute.co.uk</a></li>
		<li><img src="institute-logo.jpg" alt="Logo" />Official Caycedian Sophrology website: <a href="http://www.caycedian-sophrology.com" target="_blank">www.caycedian-sophrology.com</a></li>
			<li><img src="physio-logo.jpg" alt="Logo" />Physio for All practice: <a href="http://www.physio4all.com" target="_blank">www.physio4all.com</a></li>
			<li><img src="bodylogic-logo.jpg" alt="Logo" />Body Logic practice: <a href="http://www.body-logic.co.uk" target="_blank">www.body-logic.co.uk</a></li>
		</ul>
		<h3>BIBLIOGRAPHIE</h3>
		<h4>Livres:</h4>
		<div id="pic">
		<img src="/books.jpg" alt="books" title="books" width="360" height="260" />
		</div>
		<ul>
		<li>Initiation &agrave; la Sophrologie Cayc&eacute;dienne, Dr Patrick-Andr&eacute; Ch&eacute;n&eacute;, Editions Ell&eacute;bore (<a href="http://www.ellebore.com" target="_blank">www.ellebore.com</a>)
		</li>
	
		<li>Sophrologie : fondements et m&eacute;thodologie (Tome 1), Dr Patrick-Andr&eacute; Ch&eacute;n&eacute;, Editions Ell&eacute;bore 
		</li>
		<li>Sophrologie : champs d'application (Tome 2), Dr Patrick-Andr&eacute; Ch&eacute;n&eacute;, Editions Ell&eacute;bore
		</li>
		<li>La sophrologie : une m&eacute;thode pour g&eacute;rer votre stress, Dr Patrick-Andr&eacute; Ch&eacute;n&eacute; et Dr Marie-Andr&eacute;e Auquier, Editions Ell&eacute;bore
		</li>
		<li>Maternit&eacute; et Sophrologie, Dr Patrick-Andr&eacute; Ch&eacute;n&eacute;, Editions Ell&eacute;bore
		</li>
		<li>La sophrologie, Luc Audouin, Editions Milan
		</li>
		<li>L'enfant et la sophrologie, Monique Gilet, La M&eacute;ridienne &eacute;dition
		</li>
		<li>Tout sur la sophrologie, Dr Raymond Abrezol, Ed Favre, Lausanne</li>
		<li>R&eacute;ussir, vaincre par la sophrologie, Tome 1 et 2, Dr Raymond Abrezol, Ed Lanor/Vivez Soleil</li>
		</ul>
		<div class="photo">
		<img src="/revue_suisse.jpg" alt="revue suisse sophrology magazine" title="revue suisse" height="360" width="260" />
		<p>Revue suisse pour le d&eacute;veloppement international de la Sophrologie Cayc&eacute;dienne (par abonnement aupr&egrave;s de l'Acad&eacute;mie Suisse)
		</p>
		</div>
		<div class="photo">
		<img src="/revue_fac2.jpg" alt="revue foundation Alfonso Caycedo sophrology magazine" title="revue FAC" height="360" width="255" />		
		<p>Sophrologie Caycedienne : Revue officielle de la Fondation Alfonso Caycedo (r&eacute;serv&eacute;e aux membres de la FAC)
		</p>
		</div>
		<div class="clear">
		</div>
		<h4>CD audio:</h4>
	<ul>	
		<li>Sophrologie Techniques de base : les cinq techniques indispensables pour d&eacute;marrer la Sophrologie. 
		</li>
		<li>Sophrologie Relaxation dynamique I, II, III, IV : quatre CD d'environ 50' pour suivre les s&eacute;ances compl&egrave;tes tranquillement 
		</li>
		<li>Sophrologie Gestion du stress : cinq s&eacute;ances anti-stress progressives. 
		</li>
		<li>Sophrologie Gestion du poids : cinq s&eacute;ances pour retrouvez son poids de forme 
		</li>
		<li>Sport et Sophrologie : coffret 2 CD pour l'entra&icirc;nement du sportif 
		</li>
		<li>Sophro-Accouchement : la pr&eacute;paration &agrave; l'accouchement par Sophrologie, 4 s&eacute;ances progressives &agrave; faire au quotidien 
		</li>
		<li>Sophrologie Post-Natale : remise en forme de la maman apr&egrave;s la naissance
		</li>
		<li>Tous aux &eacute;ditions Ell&eacute;bore (<a href="http://www.ellebore.com" target="_blank">www.ellebore.com</a>)
		</li>
	</ul>	
	</div><!-- end of column container -->

<?php //put the main div above this include
include_once ($root."/sl_includes_fr/sl_footer_fr.php"); //the footer of course
?>
