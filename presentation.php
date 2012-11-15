<?php //put your array at the top first
//stuff to go into the head code for the English pages 
//goes at the top of each template page
$root = $_SERVER['DOCUMENT_ROOT'];
$headcode_en = array (
	"title" => ", Pr&eacute;sentation",
	"desc" => "Form&eacute;e en 2002-2004 &agrave; l'Acad&eacute;mie de Sophrologie Cayc&eacute;dienne de Paris puis en Andorre, Pr Alfonso Cayc&eacute;do. 2005 Dipl&ocirc;me Master Specialiste. J'enseigne la sophrologie &agrave; Londres depuis 2004, pour adultes/enfants, en fran&ccedil;ais/anglais, individuel/groupes.",
	"keywords" => "La sophrologie m'a aid&eacute;e &agrave; faire face &agrave; ma vie bien remplie de m&egrave;re de trois jeunes enfants. J'ai aussi pris conscience que j'appr&eacute;ciais d'&ecirc;tre &agrave; la maison mais que j'avais besoin de reprendre une activit&eacute; professionnelle. J'ai choisi de me reconvertir et de me former pour &ecirc;tre sophrologue. Je me suis form&eacute;e en 2002-2004 &agrave; l'Acad&eacute;mie de Sophrologie Cayc&eacute;dienne de Paris avec les Dr Patrick-Andr&eacute; Ch&eacute;n&eacute; et Marie-Andr&eacute;e Auquier. Puis j'ai suivi le cursus des Masters, enseign&eacute; par le Professeur Alfonso Cayc&eacute;do lui-m&ecirc;me, en Andorre. Je suis dipl&ocirc;m&eacute;e Master Specialiste en  Sophrologie Cayc&eacute;dienne, branche socio-prophylactique (2005) et je suis membre de la Fondation Alfonso Cayc&eacute;do. J'enseigne la sophrologie &agrave; Londres depuis 2004. Je travaille &agrave; la fois avec des adultes et des enfants, en fran&ccedil;ais et en anglais, en individuel et en groupes. Je re&ccedil;ois chez moi ainsi que dans deux cabinets. Cursus, dipl&ocirc;me, &eacute;tudes",
	"body_id" => "about"	
);

// error handling - switch off (comment out) after testing
ini_set('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

include_once ($root."/sl_includes_fr/sl_head_fr.php"); //the <head></head> code
include_once ($root."/sl_includes_fr/sl_heading_fr.php"); //the heading <div> tag
include_once ($root."/sl_includes_fr/sl_nav_fr.php"); //the top nav bar
?>
<a name="content" id="content"></a><div id="column"><!--column container -->
		<h2>Brigitte Rinner</h2>
			<div id="pic"><!--picture-->
		<img src="/brigitte_2010_small.jpg" alt="photo of Brigitte Rinner" title="Brigitte Rinner" />
	</div>

		<p>J'ai d&eacute;couvert la sophrologie il y a quelques ann&eacute;es gr&acirc;ce &agrave; une sophrologue fran&ccedil;aise qui habite a Richmond. Les techniques, pratiqu&eacute;es r&eacute;guli&egrave;rement, m'ont aid&eacute;e &agrave; faire face &agrave; ma vie bien remplie de m&egrave;re de trois jeunes enfants. Gr&acirc;ce &agrave; la sophrologie, j'ai aussi pris conscience que j'appr&eacute;ciais d'&ecirc;tre &agrave; la maison mais que cela ne suffisait pas &agrave; mon &eacute;quilibre. J'avais besoin de reprendre une activit&eacute; professionnelle. Ne souhaitant pas retourner dans le monde de l'entreprise, ma formation initiale en &eacute;cole de commerce, j'ai choisi de me reconvertir et de me former pour &ecirc;tre sophrologue.
		</p>
		<p>Je me suis form&eacute;e en 2002-2004 &agrave; l'Acad&eacute;mie de Sophrologie Cayc&eacute;dienne de Paris avec les Dr Patrick-Andr&eacute; Ch&eacute;n&eacute; et Marie-Andr&eacute;e Auquier. Puis j'ai suivi le cursus des Masters, enseign&eacute; par le Professeur Alfonso Cayc&eacute;do lui-m&ecirc;me, en Andorre. Je suis dipl&ocirc;m&eacute;e Master Specialiste en  Sophrologie Cayc&eacute;dienne, branche socio-prophylactique (2005) et je suis membre de la Fondation Alfonso Cayc&eacute;do.
		</p>
		<p>J'enseigne la sophrologie &agrave; Londres depuis 2004. Je travaille &agrave; la fois avec des adultes et des enfants, en fran&ccedil;ais et en anglais, en individuel et en groupes.
		</p>
		<p>Je re&ccedil;ois chez moi ainsi que dans deux cabinets :
		</p>
		<p>Home
			<br />21 Warriner Gardens
			<br />London SW11 4EA
			<br />020 7498 1566
			<br />www.sophrologylondon.com
		</p>
		<p>Physio for All &ndash; Chelsea
			<br /> 222 Old Brompton Road 
			<br />London SW5 0BB
			<br />020 7373 0050
			<br /><a href="http://www.physio4all.com">www.physio4all.com</a>			
		</p>
		<p>Body Logic &ndash; Battersea
			<br />292 Battersea Park Road
			<br />London SW11 3BT
			<br />020 7924 6068
			<br /><a href="http://www.body-logic.co.uk">www.body-logic.co.uk</a>
		</p>
	</div><!-- end of column container -->

<?php //put the main div above this include
include_once ($root."/sl_includes_fr/sl_footer_fr.php"); //the footer of course
?>
