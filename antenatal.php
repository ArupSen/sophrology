<?php //put your array at the top first
//stuff to go into the head code for the English pages 
//goes at the top of each template page
$root = $_SERVER['DOCUMENT_ROOT'];
$headcode_en = array (
	"title" => ", Antenatal page",
	"desc" => "Sophrology works very well in groups as everyone experience the session individually, in his/her own way. Classes themes are Stress Management, Antenatal and Self Development. They are held in groups of 3 to 12 people, by series of five 1h-classes.",
	"keywords" => "It includes physical and mental exercises, sophrology aims to help people live more consciously, body and mind in harmony, You learn how to relax, respond more selectively to stressful events, to be more aware of your inner resources, strengths and personal values, Sophrology helps treating anxiety, stress related symptoms, insomnia, mild depression, phobia, addiction. It helps to improve concentration, to reinforce self-confidence and motivation, to prepare for exams, interviews, childbirth, surgery, to recover after surgery, reinforce immune system",
	"body_id" => "Antenatal"	
);

// error handling - switch off (comment out) after testing
ini_set('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

include_once ($root."/sl_includes_en/sl_head_en.php"); //the <head></head> code
include_once ($root."/sl_includes_en/sl_heading_en.php"); //the heading <div> tag
include_once ($root."/sl_includes_en/sl_nav_en.php"); //the top nav bar
?>
<a name="content" id="content"></a>	<div id="column"><!--column container -->
		<h2>Antenatal</h2>
			<p>A mental, physical and emotional preparation for birth.<br />
			You will learn how to relax, to become more familiar with the changes in your body, more aware of what is going on in your body and to prepare for labour and delivery. Relaxation will help you bond with your unborn baby and be in tune with him/her.			
		</p>
		<p>A. discovered Sophrology when pregnant with her first child. At the time, she had to deal with an angry boss, her moving to a new country and the novelty of living with the future dad. She had had daily contractions as early as 3 months into pregnancy and a premature birth was feared. Sophrology and rest helped her relax and blossom. Contractions reduced dramatically and the baby was full term.</p>
		<blockquote>&quot;Sophrology helped me think about the delivery in a calm, positive way. On D Day, I was able to cope with the first 20 hours of labour at home. I arrived at the hospital only three hours before my baby was born. I managed with the pain although it was a posterior baby.<br />
Since then, I often use the Sophrology techniques whenever I need them, to reduce my anxiety or help me fall asleep.&quot;
</blockquote>
<blockquote>&quot;Thank you so much for your help in preparing for my baby’s birth. He eventually arrived a few days before the due date. Sophrology really helped me during the whole process of giving birth, which was quite something: 27 hours of labour ending with a vacuum extraction delivery (my baby was probably feeling very comfortable inside!). I am sure I will keep using the techniques in other circumstances in my daily life.&quot;</blockquote>
<p>My sophrologist colleague, Marion, asked me to prepare her for the birth of her son. Look at her <a href="http://unepoigneedamour.com/preparing-for-the-birth-of-my-baby-using-sophrology/" target="_blank">blog</a> to find out what she says about pregnancy, motherhood and sophrology.</p>
		
<div class="antenatal">
  <a href="http://unepoigneedamour.com/preparing-for-the-birth-of-my-baby-using-sophrology/" target="_blank"><img src="Preparing-for-Babous-birth.png" alt="Preparing for birth"></a>
<img src="Motherhood.png" alt="Motherhood">
</div>
	</div><!-- end of column container -->

<?php //put the main div above this include
include_once ($root."/sl_includes_en/sl_footer_en.php"); //the footer of course
?>
