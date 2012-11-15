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

include_once ($root."/sl_includes_en/sl_head_en.php"); //the <head></head> code
include_once ($root."/sl_includes_en/sl_heading_en.php"); //the heading <div> tag
include_once ($root."/sl_includes_en/sl_nav_en.php"); //the top nav bar
?>
<a name="content" id="content"></a>	<div id="column"><!--column container -->
		<h2>Error 404 Document Not Found</h2>
			<div id="pic"><!--picture-->
		<img src="/brigitte.jpg" alt="photo of Brigitte Rinner" title="photo of Brigitte Rinner" />
	</div>

		<p>Sorry, something isn't working. Please let me know if the problem persists.
		</p>
	</div><!-- end of column container -->
	<div class="clear"></div>
<?php //put the main div above this include
include_once ($root."/sl_includes_en/sl_footer_en.php"); //the footer of course
?>
