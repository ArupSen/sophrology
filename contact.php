<?php //put your array at the top first
//stuff to go into the head code for the English pages 
//goes at the top of each template page
$root = $_SERVER['DOCUMENT_ROOT'];
$headcode_en = array (
	"title" => ", Contact Me",
	"desc" => "Sophrology is a specific, dynamic relaxation technique, including physical and mental exercises. It helps to treat all stress related symptoms by developing a better awareness of our body and mind and reinforcing self confidence and motivation.",
	"keywords" => "Sophrology, relaxation, technique, concentration, physical and mental exercises, consciously, consciousness, body, mind, harmony, relax, stress, aware, awareness, inner resources, strengths, personal values, anxiety, stress related symptoms, insomnia, mild depression, phobia, improve, reinforce,  self confidence, motivation, exams, interviews, childbirth, surgery, recover, immune system, One to One sessions, classes, develop, skills",
	"body_id" => "contact"	
);

// error handling - switch off (comment out) after testing
ini_set('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

include_once ($root."/sl_includes_en/sl_head_en.php"); //the <head></head> code
include_once ($root."/sl_includes_en/sl_heading_en.php"); //the heading <div> tag
include_once ($root."/sl_includes_en/sl_nav_en.php"); //the top nav bar
?>
<a name="content" id="content"></a>	<div id="column"><!--column container -->
		<h2>Contact Me</h2>
		<p>21 Warriner Gardens
			<br />London SW11 4EA
			<br />020 7498 1566 / 077 6606 5691
		</p>
<?php include_once ($root."/sl_includes_en/dd-formmailer.php"); //the form script ?>
	<div id="pic">
	<img src="/map.jpg" alt="map of Warriner Gardens" title="Warriner Gardens just South of Battersea Park" height="260" width="360" />
	</div>
	<div class="clear"></div>
	<p>Warriner Gardens is just to the South of Battersea Park and only 5 minutes walk from Battersea Park and Queenstown Road train stations</p>
	<h3>Buses:</h3>
		<p>137, 452 &amp; 156, Battersea Park Station stop, 3 minute walk</p>
		<p>44, 344, Battersea Park Road &ndash; Westminster College or Library stop, 2
minute walk</p>
		<p>49, 345 &amp; 319, Battersea Latchmere stop, 8 minute walk</p>
	<h3>Trains:</h3>
		<p>Battersea Park &amp; Queenstown Road stations are both 6&ndash;8 minute walk</p>
	<h3>Car Parking:</h3>
		<p>Pay and display bays (&pound;2.50 / hour)</p>	
		
	</div><!-- end of column container -->
	<div class="clear">
	</div>
	
<?php //put the main div above this include
include_once ($root."/sl_includes_en/sl_footer_en.php"); //the footer of course
?>
