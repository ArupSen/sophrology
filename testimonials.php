<?php //put your array at the top first
//stuff to go into the head code for the English pages 
//goes at the top of each template page
$root = $_SERVER['DOCUMENT_ROOT'];
$headcode_en = array (
	"title" => ", Testimonials page",
	"desc" => "Clients testify how sophrology helped them.
Benefits: managing stress better, releasing back pain, thoracic oppression and abdominal knots, improving sleep patterns, better sense of the future, stopping smoking, getting positive about future events.",
	"keywords" => "Clients testify how sophrology helped them, able to manage his stress better, He feels the benefits when he practises on his own, He got rid of back pain, thoracic oppression and abdominal knots, He has a better sense of his professional and personal future, easily stopped smoking, uses the techniques in her daily life, stopped having nightmares every night, became much more positive about his family move, stopped biting her fingers, She uses abdominal breathing when stressed before an exam, Sophrology, testimony, back pain, thoracic oppression, abdominal knots, abdominal breathing, concentration, sleep pattern, positive, future events, exams, stress-related symptoms, professional issues, personal issues",
	"body_id" => "test"	
);

// error handling - switch off (comment out) after testing
ini_set('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

include_once ($root."/sl_includes_en/sl_head_en.php"); //the <head></head> code
include_once ($root."/sl_includes_en/sl_heading_en.php"); //the heading <div> tag
include_once ($root."/sl_includes_en/sl_nav_en.php"); //the top nav bar
?>
<a name="content" id="content"></a>	<div id="column"><!--column container -->
		<h2>Testimonials and case studies</h2>
		<h3>M. A, 8 sessions over 6 months</h3>
		<p>M. A. is a 45-year-old bank manager. He has a history of stress-related symptoms: back pain and disturbed sleeping pattern. He is seeing his osteopath every month who successfully treats his back problem. However, the sleeping problem remains and other symptoms occur: abdominal pain, thoracic oppression when having to speak in public. He feels that he has professional and personal issues to solve.
		</p>
		<p>After two sessions, he finds that he benefits from the session for a few hours but then the stress comes back. After the third one, he can practise the techniques on his own everyday, the thoracic oppression does not occur anymore but the abdominal &quot;knots&quot; remain. The benefits of a session last a bit longer.
		</p>
		<p>After the seventh session, he feels a lot better, has a clearer sense of his professional future and gets promotion. Regarding his personal issues, he decides to start a couple therapy with his wife. After the eighth session, only the sleeping pattern remains unstable. 
		</p>
		<h3>Ms B.'s, 6 sessions over 4 months</h3>
		<p>Ms B took up sophrology in the hope that it would help her stop smoking. It was successful. She also says:</p><blockquote>"I came across sophrology a year ago as a technique to help me stop smoking. I am very satisfied by the results. The sophrologic techniques that I learnt at the time still help me to release my tensions for a better daily balance.&quot;</blockquote>
		
		<h3>C., 6 sessions over 2 months</h3>
		<p>C. is an 8-year-old boy who had had nightmares and had been wetting his bed every night since the brutal death of a relative. After three sessions, without talking about his nightmares and wetting, everything was back to normal! We did three more sessions to consolidate these achievements and prepare him for the coming family move that was worrying him.
		</p>
		<h3>D., 5 sessions over 6 weeks</h3>
		<p>D., a 12-year-old girl, was biting her nails and fingers. She had tried to stop this habit that was disturbing her with the help of homeopathy and then medicines, both without success. After the fourth session, there was a noticeable change:</p><blockquote>&quot;I still do it but now I am aware of it so I can stop it.&quot;</blockquote> <p>At the fifth session, she had completely stopped. Additionally, she found great help using the abdominal breathing when at school. She used to be very stressed by exams and not perform as she should. Using the abdominal breathing techniques just before the exam, helps her being more concentrated and having a clearer view of the subject.
		</p>
	<h3>F. 3 sessions over 3 weeks</h3>
<p>F. is a 17 year-old pupil. A week before she took exams, she felt really bad, as if she had 'flu although she had no fever. She thinks it was stress related. She had more exams to take and an oral exam in three weeks time, which was really important to her hopes of entering a business school.</p> 
<blockquote>&quot;Sophrology helps me feeling calmer. I like the technique when I project myself forward onto the day of the oral and experience that day in advance.&quot;</blockquote>
<p>She passed her exams with honours and got a place in the business school of her choice.</p>
<h2>How Sophrology has helped me</h2>
<p>At the beginning of each session, I ask the child how he/she feels, whether he/she has noticed any changes since starting sophrology. Here are a few answers I got. I received each of them as a precious gift:</p>
	<ul>
		<li>9-year-old C. &quot;I have got new friends at school.&quot;</li>
		<li>9-year-old A. &quot;I fall asleep more quickly.&quot;</li>
		<li>10-year- old E. &quot;If I cannot do my homework, I practice sophrology and I feel calmer.&quot;</li>
		<li>9-year-old J. &quot;Thanks to sophrology, I don't think that I am stupid anymore.&quot;</li>
		<li>13-year-old A. &quot;Now, I am in good spirits when I come back from school and I can start my homework easily.&quot;</li>
		<li>8-year-old M. &quot;Now I sleep better. I am not tired anymore so I can play with my friends during the breaks.&quot;</li>
		<li>9-year-old T. &quot;Now, I don't fear maths anymore.&quot;</li>
		<li>16-year-old H. &quot;I do not cry as much as I used to.  It helps me to fall asleep at night. I use the breathing exercises before my school tests. I don't feel &quot;blank&quot; anymore.&quot;</li>
		<li>11-year-old C. &quot;Mummy got angry at me the other day. I felt like crying but then realised than I did not need to.&quot;</li>
		<li>13-year-old C. &quot;I used the breathing exercises before a maths test. I felt a lot calmer. Before, I use to start very quickly and make a lot of mistakes in the first few questions. Now, I take my time, I breathe slowly and I have better grades.&quot;</li>
		<li>9-year-old A. &quot;Now, at school, I have three friends. At home, my brother does not bother me anymore. I mean, he still comes into my bedroom but it does not bother me anymore.&quot;</li>
		<li>10-year-old B.  &quot;I am not better at maths but I don't have tummy ache before maths tests as I used to and I get better grades.&quot;</li>
	</ul>


	</div><!-- end of column container -->

<?php //put the main div above this include
include_once ($root."/sl_includes_en/sl_footer_en.php"); //the footer of course
?>
