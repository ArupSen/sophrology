<?php //put your array at the top first
//stuff to go into the head code for the English pages 
//goes at the top of each template page
$root = $_SERVER['DOCUMENT_ROOT'];
$headcode_en = array (
	"title" => ", One to one sessions",
	"desc" => "One to one sessions will benefit clients with a specific issue. It includes a dialogue to assess the client's needs and progresses, 15 to 20 minutes of mental and physical exercises and the description of the experienced sensations and feelings.",
	"keywords" => "Personal issue, typical session, sophrologist, phenodescription, practise, the three key-techniques of sophrology, mental and physical relaxation,identification, release of tensions, activation of energies, one to one sophrology session, Caycedo, awareness, consciousness, body, mind, harmony, stress-management, inner-resources, self-esteem, personal values, breathing exercises, a technique based on relaxation and concentration, includes physical and mental exercises, help people live more consciously, body and mind in harmony, learn how to relax, to respond more selectively to stressful events, aware of your inner resources, strengths and personal values. Sophrology helps treating anxiety, stress related symptoms, insomnia, mild depression, phobia, addiction, improve concentration, to reinforce self-confidence and motivation, to prepare for exams, interviews, childbirth, surgery, to recover after surgery, to reinforce immune system.",
	"body_id" => "one"	
);

// error handling - switch off (comment out) after testing
ini_set('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

include_once ($root."/sl_includes_en/sl_head_en.php"); //the <head></head> code
include_once ($root."/sl_includes_en/sl_heading_en.php"); //the heading <div> tag
include_once ($root."/sl_includes_en/sl_nav_en.php"); //the top nav bar
?>
<a name="content" id="content"></a>	<div id="column"><!--column container -->
		<h2>One-to-one sessions</h2>
		<p>One to one sessions will benefit clients who would like to deal with a specific personal issue, as the sophrologist  will tailor the techniques.
		</p>
		<p>A typical session lasts about one hour: it starts with a dialogue with the sophrologist to assess your specific needs and thus tailor the session to them. 
		</p>
		<p>Then 15 to 20 minutes of mental and physical exercises. While you are sitting or standing, the sophrologist invites you to relax completely. With his/her voice, he/she guides you throughout the session to help you identify and then eliminate your tensions, to activate your energies, to project yourself in various situations etc.
		</p>
		<p>Finally, the sophrologist asks you to share the feelings and the physical sensations you may have experienced during the session. This is called the phenodescription: description of the phenomenons experienced during the session. Children will often express themselves drawing rather than talking.
		</p>
		<p>The session is audio taped so that you can practise at home on your own. Four to five sessions are needed to master the basic techniques. The more you practise, the more efficient the techniques become. The ultimate aim is to develop your skills so that you can use these techniques on your own whenever needed in your daily life.
		</p>
		<p>The first three sessions are usually the same for everyone as they are the introduction to the three key-techniques of sophrology:</p>
			<ol>
				<li>mental and physical relaxation</li>
				<li>identification of and release of tensions</li>
				<li>activation of energies</li>
			</ol>
		
		<p>Thereafter, more specific techniques and exercises will be introduced, tailored to the client's needs.
		</p>
		<div class="drawing">
			<img src="/active_sitting.gif" alt="active sitting posture" title="active sitting posture" />
			<p>Active sitting posture</p>
		</div>
		<div class="drawing">
			<img src="/rotations.gif" alt="rotations movement CDR1 standing posture" title="rotations movement CDR1 standing posture" />
			<p>rotation movement CDR1 standing posture</p>
		</div>
		<div class="drawing">
			<img src="/extension.gif" alt="extensions CDR1 standing posture" title="extensions CDR1 standing posture" />
			<p>extensions CDR1 standing posture</p>
		</div>
		<div class="clear">
		<p>(Drawings from Dr P-A Ch&eacute;n&eacute;)</p>
		</div>

	</div><!-- end of column container -->

<?php //put the main div above this include
include_once ($root."/sl_includes_en/sl_footer_en.php"); //the footer of course
?>
