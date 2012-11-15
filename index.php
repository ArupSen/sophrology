<?php //put your array at the top first
//stuff to go into the head code for the English pages 
//goes at the top of each template page
$root = $_SERVER['DOCUMENT_ROOT'];
$headcode_en = array (
	"title" => " ",
	"desc" => "Sophrology is a specific, dynamic relaxation technique, including physical and mental exercises. It helps to treat all stress related symptoms by developing a better awareness of our body and mind and reinforcing self confidence and motivation.",
	"keywords" => "Sophrology, relaxation, technique, concentration, physical and mental exercises, consciously, consciousness, body, mind, harmony, relax, stress, aware, awareness, inner resources, strengths, personal values, anxiety, stress related symptoms, insomnia, mild depression, phobia, improve, reinforce,  self confidence, motivation, exams, interviews, childbirth, surgery, recover, immune system, One to One sessions, classes, develop, skills",
	"body_id" => "home"	
);
// error handling - switch off (comment out) after testing
//ini_set('display_errors', 1);
//error_reporting (E_ALL & ~E_NOTICE);

include_once ($root."/sl_includes_en/sl_head_en.php"); //the <head></head> code
include_once ($root."/sl_includes_en/sl_heading_en.php"); //the heading <div> tag
include_once ($root."/sl_includes_en/sl_nav_en.php"); //the top nav bar
?>
	<div id="column"><!--column container -->
	<a name="content" id="content"></a><h2>Sophrology Overview</h2>
		<p>Sophrology, a simple and easy to learn alternative technique, originated in Spain in the 1960s. It is a structured method based on breathing, relaxation and concentration exercises. It includes simple movements as well. Sophrology aims to help people live more consciously with their body and mind in harmony. They learn how to relax, to respond more selectively to stressful events, to be more aware of their inner resources, strengths and personal values.
		</p>
		<p>Many conditions may be relieved by Sophrology such as:
		</p>
		<ul>
			<li>Anxiety</li>
			<li>Stress related symptoms</li>
			<li>Sleep disorders</li>
			<li>Phobia</li>
		</ul>
		<p>It is also helpful to:
		</p>
		<ul>
			<li>Improve concentration</li>
			<li>Reinforce self&ndash;confidence and motivation</li>
			<li>Prepare for future events like exams, interviews, childbirth, surgery</li>
			<li>Recover after surgery</li>
		</ul>
		<p>Sophrology can be done in One to One sessions (45 to 60 minutes) or Group classes (1 hour). Four to five sessions/classes are needed to master the basic techniques. Clients are asked to practice with the techniques every day for 10 to 20 minutes. The more practice, the more efficient the techniques become. The ultimate aim is to develop the skills so that people can use the techniques on their own whenever needed in their daily life.
		</p>
	</div><!-- end of column container -->

<?php //put the main div above this include
include_once ($root."/sl_includes_en/sl_footer_en.php"); //the footer of course
?>
