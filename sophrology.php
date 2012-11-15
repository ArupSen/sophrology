<?php //put your array at the top first
//stuff to go into the head code for the English pages 
//goes at the top of each template page
$root = $_SERVER['DOCUMENT_ROOT'];
$headcode_en = array (
	"title" => " - What is Sophrology?",
	"desc" => "Sophrology helps you to relax, to be more aware of your body and your mind and the way they both function. If practised regularly, it relieves most stress-related symptoms and helps you live a happier life. It is very effective with children as well.",
	"keywords" => "Caycedo, sophrology, relaxation, concentration, awareness, consciousness, stress, confidence, motivation, body, mind, harmony, stress-management, inner-resources, strengths, personal values, anxiety, insomnia, depression, phobia, improve, reinforce, motivation, prepare for exams, energy, self-development, childbirth, serenity, breathing exercises, simple and easy to learn, dynamic relaxation technique, based on relaxation and concentration, It includes physical and mental exercises, sophrology aims to help people live more consciously, body and mind in harmony, You learn how to relax, respond more selectively to stressful events, to be more aware of your inner resources, strengths and personal values, Sophrology helps treating anxiety, stress related symptoms, insomnia, mild depression, phobia, addiction. It helps to improve concentration, to reinforce self-confidence and motivation, to prepare for exams, interviews, childbirth, surgery, to recover after surgery, reinforce immune system",
	"body_id" => "soph"	
);

// error handling - switch off (comment out) after testing
ini_set('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

include_once ($root."/sl_includes_en/sl_head_en.php"); //the <head></head> code
include_once ($root."/sl_includes_en/sl_heading_en.php"); //the heading <div> tag
include_once ($root."/sl_includes_en/sl_nav_en.php"); //the top nav bar
?>
<a name="content" id="content"></a>	<div id="column"><!--column container -->
		<h2>What is Sophrology?</h2>
		<p>Sophrology was developed by a Columbian neuro-psychiatrist of Spanish origins, Prof. Alfonso Caycedo, in the 1960s. It is a technique that is simple and easy to learn. Based on relaxation and concentration it helps people to become more aware of their body and mind and the way they both function. It includes both physical and mental exercises which are done in a state of dynamic relaxation (relaxation in movement), Sophrology aims to help people live more consciously with their body and mind in harmony. They learn how to relax, to respond more selectively to stressful events, to be more aware of their inner resources, strengths and personal values.
		</p>
		<p>Its name derived from the Greek words SOS (harmony, serenity), PHREN (consciousness) and LOGOS (science, study). It is based on a combination of Oriental techniques (Yoga, Zen and Buddhist meditation), and Western psychology, phenomenology and hypnosis. Prof. Caycedo adapted all these techniques to create a structured method that can be easily used in our daily life. 
		</p>
		<p>Guided by the sophrologist, you learn how to relax your entire body and reach a state of deep relaxation. From that state of consciousness, specific techniques are chosen to address your specific needs. 
		</p>
		<h2>What Sophrology may help with?</h2>
		<h3>Stress related symptoms (anxiety, sleep disorder, back pain&hellip;):</h3><p>Learn how to relax, to identify and release tensions, to develop a better awareness of the factors that create stress in you and of your reactions to them at an early stage to enable you to manage them better.
		</p>
		<h3>Anxiety, phobia:</h3><p>Learn how to manage crisis, gradually controlling the source of fear.
		</p>
		<h3>Addiction:</h3><p>Specific techniques to help you quit smoking.</p>
		<h3>Preparation for a forthcoming event:</h3><p>Become more confident and positive for exams, interviews, childbirth, surgery.
		</p>
		<h3>Self-development:</h3><p>Be more aware of inner resources, strengths and personal values and learn how to develop them.
		</p>
		<h3>Children:</h3><p>Sophrology may also be effective with children helping them to manage anxiety, lack of concentration, improving confidence and motivation.
		</p>
		<div class="drawing">
			<img src="/active_sitting.gif" alt="active sitting posture" title="active sitting posture" />
			<p>Active sitting posture</p>
		</div>
		<div class="drawing">
			<img src="/pumping.gif" alt="pumping movement CDR1 standing posture" title="pumping movement CDR1 standing posture" />
			<p>pumping movement CDR1 standing posture</p>
		</div>
		<div class="drawing">
			<img src="/rotations.gif" alt="rotations CDR1 standing posture" title="rotations CDR1 standing posture" />
			<p>rotations CDR1 standing posture</p>
		</div>
		<div class="clear">
		<p>(Drawings from Dr P-A Ch&#233;n&#233;)</p>
		</div>

	</div><!-- end of column container -->

<?php //put the main div above this include
include_once ($root."/sl_includes_en/sl_footer_en.php"); //the footer of course
?>
