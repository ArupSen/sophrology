<?php //put your array at the top first
//stuff to go into the head code for the French pages 
//goes at the top of each template page
$root = $_SERVER['DOCUMENT_ROOT'];
$headcode_en = array (
	"title" => ", Contact",
	"desc" => "Sophrology helps you to relax, ",
	"keywords" => "It includes physical and mental exercises, sophrology aims to help people live more consciously, body and mind in harmony, You learn how to relax, respond more selectively to stressful events, to be more aware of your inner resources, strengths and personal values, Sophrology helps treating anxiety, stress related symptoms, insomnia, mild depression, phobia, addiction. It helps to improve concentration, to reinforce self-confidence and motivation, to prepare for exams, interviews, childbirth, surgery, to recover after surgery, reinforce immune system",
	"body_id" => "contact"	
);

// error handling - switch off (comment out) after testing
ini_set('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

include_once ($root."/sl_includes_fr/sl_head_fr.php"); //the <head></head> code
include_once ($root."/sl_includes_fr/sl_heading_fr.php"); //the heading <div> tag
include_once ($root."/sl_includes_fr/sl_nav_fr.php"); //the top nav bar
?>
<a name="content" id="content"></a><div id="column"><!--column container -->
		<h2>Contact</h2>
		<p>21 Warriner Gardens
			<br />London SW11 4EA
			<br />020 7498 1566
			<br /><a href="mailto:Brigitterinner@sophrologylondon.com" title="e&ndash;mail">Brigitterinner@sophrologylondon.com</a>
		</p>
	<div id="pic">
	<img src="/map.jpg" alt="map of Warriner Gardens" title="Warriner Gardens se trouve au Sud de Battersea Park" height="260" width="360" />
	</div>
	<div class="clear"></div>
	<p>Warriner Gardens se trouve au Sud de Battersea Park (SW11)</p>
	<h3>Bus:</h3>
		<p>N&deg; 137, 452 et 156, arr&ecirc;t Battersea Park Station, 3 minutes &agrave; pied</p>
		<p>N&deg; 44, 344, arr&ecirc;t Battersea Park Road &ndash; Westminster College or Library, 1 minute &agrave; pied</p>
		<p>N&deg; 49, 345 et 319, arr&ecirc;t Battersea Latchmere, 8 minutes &agrave; pied</p>
	<h3>Train:</h3>
		<p>Les stations Battersea Park (Victoria) et Queenstown Road (Waterloo) sont &agrave; 6-8 minutes &agrave; pied.</p>
	<h3>Parking:</h3>
		<p>Des espaces &laquo; pay and display &raquo; sont disponibles sur le c&ocirc;t&eacute; pair de la rue. &pound;1.20 par heure.</p>	
		
	</div><!-- end of column container -->
	<div class="clear">
	</div>
<?php //put the main div above this include
include_once ($root."/sl_includes_fr/sl_footer_fr.php"); //the footer of course
?>
