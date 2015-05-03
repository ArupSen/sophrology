<?php //put your array at the top first
//stuff to go into the head code for the English pages 
//goes at the top of each template page
$root = $_SERVER['DOCUMENT_ROOT'];
$headcode_en = array (
	"title" => ", Classes page",
	"desc" => "Sophrology works very well in groups as everyone experience the session individually, in his/her own way. Classes themes are Stress Management, Antenatal and Self Development. They are held in groups of 3 to 12 people, by series of five 1h-classes.",
	"keywords" => "It includes physical and mental exercises, sophrology aims to help people live more consciously, body and mind in harmony, You learn how to relax, respond more selectively to stressful events, to be more aware of your inner resources, strengths and personal values, Sophrology helps treating anxiety, stress related symptoms, insomnia, mild depression, phobia, addiction. It helps to improve concentration, to reinforce self-confidence and motivation, to prepare for exams, interviews, childbirth, surgery, to recover after surgery, reinforce immune system",
	"body_id" => "classes"	
);

// error handling - switch off (comment out) after testing
ini_set('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

include_once ($root."/sl_includes_en/sl_head_en.php"); //the <head></head> code
include_once ($root."/sl_includes_en/sl_heading_en.php"); //the heading <div> tag
include_once ($root."/sl_includes_en/sl_nav_en.php"); //the top nav bar
?>
<a name="content" id="content"></a>	<div id="column"><!--column container -->
		<h2>Classes</h2>
		<p>Sophrology works very well in groups as everyone experience the session individually, responding to the techniques in his/her own way.
			<br />Classes are held on specific themes, usually by series of five one-hour classes, in groups of 3 to 12 people.
		</p>
		<ul id="pagenav">
		  <li><a href="#intro">Discover sophrology</a></li>
		  <li><a href="#stress">Stress management</a></li>
		  <li><a href="#exams">Exams</a></li>
		  <li><a href="#antenatal">Antenatal</a></li>
		  <li><a href="#self">Self development</a></li>
		</ul>
		<h3>Introduction to Sophrology:<a name="intro"></a></h3>
		<p>Five one-hour sessions to discover the key-techniques of Sophrology. Those interested to continue can join an intermediate group.</p>
		
		<blockquote>&quot;It helped me stop and relax. I was amazed to see the reactions of the body as early as the first session.&quot;</blockquote>
		<blockquote>&quot;Very positive. I was expecting something similar to relaxation. Sophrology has more to offer like identifying tensions the better to release them, reinforcing the positive in my life, better awareness of my body.&quot;</blockquote>
		<blockquote>&quot;A wonderful and enriching discovery. A I feel more able to cope with certain things.&quot;</blockquote>
		<h3>Stress Management:<a name="stress"></a></h3>
			<p>You will learn how to relax, to identify your tensions, release them and prevent them from coming back. By developing a better awareness of the factors that create stress for you and of your reaction to them at an early stage, you will be able to manage them better. You will not suppress stressful events but you will be able to respond to them more selectively.
			</p>
			<blockquote>&quot;I have realised that I am not self-confident enough. I should trust my first impression, as it is often right.&quot;</blockquote>
		<h3>Getting ready for exams:<a name="exams"></a></h3>
		<p>In three one-hour sessions, you will learn how to cope with stress, to improve concentration and increase self-confidence. You will practice easy-to-use exercises so you don&rsquo;t panic on D-Day or go blank when writing your paper and stay in control during an interview.<br /><br />
Classes are held on Friday afternoon, at Physio for All (SW5)
</p>
<blockquote>&quot;I don’t have cramps in my stomach anymore before exams.&quot;</blockquote>
<blockquote>&quot;Thanks to Sophrology, I know how to cope with stress before tests but also in my daily life!&quot;</blockquote>
<blockquote>&quot;I have just got my results: I got my baccalaureate with <em>mention tr&egrave;s bien</em> (equivalent of A*). Thank you as I would not have achieved this without Sophrology.&quot;</blockquote>
		<h3>Ante-natal:<a name="antenatal"></a></h3>
			<p>A mental, physical and emotional preparation for birth.<br />
			You will learn how to relax, to become more familiar with the changes in your body, more aware of what is going on in your body and to prepare for labour and delivery. Relaxation will help you bond with your unborn baby and be in tune with him/her.			
		</p>
		<p>A. discovered Sophrology when pregnant with her first child. At the time, she had to deal with an angry boss, her moving to a new country and the novelty of living with the future dad. She had had daily contractions as early as 3 months into pregnancy and a premature birth was feared. Sophrology and rest helped her relax and blossom. Contractions reduced dramatically and the baby was full term.</p>
		<blockquote>&quot;Sophrology helped me think about the delivery in a calm, positive way. On D Day, I was able to cope with the first 20 hours of labour at home. I arrived at the hospital only three hours before my baby was born. I managed with the pain although it was a posterior baby.<br />
Since then, I often use the Sophrology techniques whenever I need them, to reduce my anxiety or help me fall asleep.&quot;
</blockquote>
<blockquote>&quot;Thank you so much for your help in preparing for my baby’s birth. He eventually arrived a few days before the due date. Sophrology really helped me during the whole process of giving birth, which was quite something: 27 hours of labour ending with a vacuum extraction delivery (my baby was probably feeling very comfortable inside!). I am sure I will keep using the techniques in other circumstances in my daily life.&quot;</blockquote>
<blockquote>&quot;My sophrologist colleague, Marion, asked me to prepare her for the birth of her son. Look at her <a href="http://unepoigneedamour.com/preparing-for-the-birth-of-my-baby-using-sophrology/" target="_blank">blog</a> to find out what she says about pregnancy, motherhood and sophrology.&quot;</blockquote>
		
			<h3>Self Development with the CDR (Caycedian Dynamic Relaxation):<a name="self"></a></h3>
			<p>A serie of four progressive levels concentrating on different aspects.</p>
			<ul>
			<li>CDR 1: awareness of the body</li>
			<li>CDR 2: awareness of the mind</li>
			<li>CDR 3: awareness of both together</li>
			<li>CDR 4: values of life</li>
			</ul>
		<div class="drawing">
			<img src="/ante_natal.gif" alt="ante-natal active sitting posture" title="ante-natal active sitting posture" />
			<p>Ante-natal class: Active sitting posture</p>
		</div>
		<div class="drawing">
			<img src="/karate.gif" alt="karate movement CDR1 standing posture" title="karate movement CDR1 standing posture" />
			<p>karate movement CDR1 standing posture</p>
		</div>
		<div class="drawing">
			<img src="/virtual_walk.gif" alt="virtual walk CDR1 standing posture" title="virtual walk CDR1 standing posture" />
			<p>virtual walk CDR1 standing posture</p>
		</div>
		<div class="clear">
		<p>(Drawings from Dr P-A Ch&eacute;n&eacute;)</p>
		</div>

	</div><!-- end of column container -->

<?php //put the main div above this include
include_once ($root."/sl_includes_en/sl_footer_en.php"); //the footer of course
?>
