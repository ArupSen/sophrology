<?php //put your array at the top first
//stuff to go into the head code for the English pages 
//goes at the top of each template page
$root = $_SERVER['DOCUMENT_ROOT'];
$headcode_en = array (
	"title" => ", about me page",
	"desc" => "I studied in 2002-2004 at the Acad&eacute;mie de Sophrologie de Paris and then trained with Prof Cayc&eacute;do in Andorra. I am Master Specialist in Caycedian Sophrology (2005) and a member of the Fondation A. Cayc&eacute;do. I have been teaching in London since 2004.",
	"keywords" => "Sophrology helped me, cope with my busy life, mother of three young children, Thanks to sophrology, I also became aware that, although I enjoyed being home looking after my children, professional activity, train as a sophrologist, Acad&eacute;mie de Sophrologie Cayc&eacute;dienne de Paris, Prof Alfonso Cayc&eacute;do, Master Specialist in Caycedian Sophrology, member of the Fondation Alfonso Cayc&eacute;do, practising sophrology in London since 2004, introducing the technique in English in the UK, both adults and children, in one-to-one sessions or classes, home and in two practices, Training, diploma, study, background",
	"body_id" => "about"	
);

// error handling - switch off (comment out) after testing
ini_set('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

include_once ($root."/sl_includes_en/sl_head_en.php"); //the <head></head> code
include_once ($root."/sl_includes_en/sl_heading_en.php"); //the heading <div> tag
include_once ($root."/sl_includes_en/sl_nav_en.php"); //the top nav bar
?>
<a name="content" id="content"></a>	<div id="column"><!--column container -->
		<h2>About Me &mdash; Brigitte Rinner</h2>
			<div id="pic"><!--picture-->
		<img src="/brigitte_2010_small.jpg" alt="photo of Brigitte Rinner" title="photo of Brigitte Rinner" />
	</div>

		<p>I discovered sophrology in 2000 thanks to a French sophrologist based in Richmond. It helped me to cope with my busy life as a mother of three young children. Thanks to sophrology, I also became aware that, although I enjoyed being home looking after my children, I needed a professional activity as well. 
Not willing to go back to business, my original field, I decided to train as a sophrologist.
		</p>
		<p>I studied in 2002-2004 at the Acad&eacute;mie de Sophrologie Cayc&eacute;dienne de Paris with Dr Patrick-Andr&eacute; Ch&eacute;n&eacute; and Dr Marie-Andr&eacute;e Auquier. I then trained with Prof Alfonso Cayc&eacute;do himself in Andorra for my Masters. I am Master Specialist in Caycedian Sophrology (2005) and a member of the Fondation Alfonso Cayc&eacute;do.
		</p>
		<p>I have been practising sophrology in London since 2004, introducing the technique in English in the UK. I work with both adults and children, in one-to-one sessions or classes.
		</p>
		<p>I work from home and in two practices:
		</p>
		<p>Home
			<br />21 Warriner Gardens
			<br />London SW11 4EA
			<br />020 7498 1566
			<br />www.sophrologylondon.com
		</p>
		<p>Physio for All &ndash; Chelsea
			<br /> 222 Old Brompton Road 
			<br />London SW5 0BB
			<br />020 7373 0050
			<br /><a href="http://www.physio4all.com">www.physio4all.com</a>			
		</p>
		<p>Body Logic &ndash; Battersea
			<br />292 Battersea Park Road
			<br />London SW11 3BT
			<br />020 7924 6068
			<br /><a href="http://www.body-logic.co.uk">www.body-logic.co.uk</a>
		</p>
	</div><!-- end of column container -->

<?php //put the main div above this include
include_once ($root."/sl_includes_en/sl_footer_en.php"); //the footer of course
?>
