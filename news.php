<?php //put your array at the top first
//stuff to go into the head code for the English pages 
//goes at the top of each template page
$root = $_SERVER['DOCUMENT_ROOT'];
$headcode_en = array (
	"title" => ", News",
	"desc" => "Sophrology is a specific, dynamic relaxation technique, including physical and mental exercises. It helps to treat all stress related symptoms by developing a better awareness of our body and mind and reinforcing self confidence and motivation.",
	"keywords" => "Sophrology, relaxation, technique, concentration, physical and mental exercises, consciously, consciousness, body, mind, harmony, relax, stress, aware, awareness, inner resources, strengths, personal values, anxiety, stress related symptoms, insomnia, mild depression, phobia, improve, reinforce,  self confidence, motivation, exams, interviews, childbirth, surgery, recover, immune system, One to One sessions, classes, develop, skills",
	"body_id" => "news"	
);

// error handling - switch off (comment out) after testing
ini_set('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

include_once ($root."/sl_includes_en/sl_head_en.php"); //the <head></head> code
include_once ($root."/sl_includes_en/sl_heading_en.php"); //the heading <div> tag
include_once ($root."/sl_includes_en/sl_nav_en.php"); //the top nav bar
?>
<a name="content" id="content"></a>	<div id="column"><!--column container -->
		<h2>News</h2>
		<h3>What’s new?</h3>
		<p>
I have recently teamed up with four sophrologist colleagues to create the Sophrology Network.
		</p>
<img src="soph-network.jpg" alt="the sophrology network logo" title="the sophrology network" />
<p>Our aim is to promote Sophrology and to make it available through workshops and classes throughout London. You will find all the information on the website: <a href="http://www.thesophrologynetwork.co.uk" target="_blank">www.thesophrologynetwork.co.uk</a></p>
<p>The next workshop I organize will be &ldquo;Discover Sophrology&rdquo; on Tuesday 4th of December, 7pm at Body Logic near Battersea Park. More info:<br />
<a href="http://thesophrologynetwork.co.uk/workshops" target="_blank">http://thesophrologynetwork.co.uk/workshops/</a></p>
		<div class="book_chene">
		<img src="/book_chene.jpg" alt="An Introduction to Sophrology" title="An Introduction to Sophrology" height="360" width="247" />
		<p>NEW: the first book in English about Sophrology has just been published "An Introduction to Sophrology" by Dr. P-A Ch&eacute;n&eacute;<br /><a href="contact.php">To order a copy, please contact me.</a>
		</p>
		</div>
		<div class="clear">
		</div>
<br />
<img src="soph-institute.jpg" alt="the sophrology institute logo" title="the sophrology institute" />
<p>Coming soon to London, the first accredited school of Caycedian Sophrology, The London Sophrology Institute<br /> More info:
<a href="http://london-sophrology-institute.co.uk" target="_blank"> http://london-sophrology-institute.co.uk/</a></p><br />
<p>L'Echo Magazine, the magazine for the French speaking families living in London, talks about us in its October issue. For those of you who can read French, here it is: <a href="Sophro_L'Echo_Oct_12.pdf" target="_blank">Sophro_L'Echo_Oct_12.pdf</a></p>
	</div><!-- end of column container -->
	<div class="clear">
	</div>
	
<?php //put the main div above this include
include_once ($root."/sl_includes_en/sl_footer_en.php"); //the footer of course
?>
