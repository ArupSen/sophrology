<?php //put your array at the top first
//stuff to go into the head code for the French pages 
//goes at the top of each template page
$root = $_SERVER['DOCUMENT_ROOT'];
$headcode_en = array (
	"title" => ", Accouchement",
	"desc" => "La sophrologie fonctionne tr&egrave;s bien en groupe (3-12 personnes). Chaque personne vit la technique selon son fonctionnement personnel, son histoire. Les th&egrave;mes sont gestion du stress, pr&eacute;paration &agrave; l'accouchement, d&eacute;veloppement personnel.  ",
	"keywords" => "La sophrologie fonctionne tr&egrave;s bien en groupe (3-12 personnes). Chaque personne vit la technique selon son fonctionnement personnel, son histoire. Les th&egrave;mes sont gestion du stress, pr&eacute;paration &agrave; l'accouchement, d&eacute;veloppement personnel, se d&eacute;tendre, &eacute;vacuer vos tensions physiques et/ou mentales, meilleure connaissance de vos facteurs de stress, vos r&eacute;actions, pr&eacute;paration &agrave; l'accouchement, grossesse, conscience des organes, ut&eacute;rus, col, vagin, changements de votre corps, travail, entrer en contact avec votre b&eacute;b&eacute;, &eacute;nergie, amour, tendresse, RDC, peau, muscles, os, organes",
	"body_id" => "Accouchement"	
);

// error handling - switch off (comment out) after testing
ini_set('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);


include_once ($root."/sl_includes_fr/sl_head_fr.php"); //the <head></head> code
include_once ($root."/sl_includes_fr/sl_heading_fr.php"); //the heading <div> tag
include_once ($root."/sl_includes_fr/sl_nav_fr.php"); //the top nav bar
?>
<a name="content" id="content"></a><div id="column"><!--column container -->
		<h2>Pr&eacute;paration &agrave; l'accouchement</h2>
			<p>C'est une pr&eacute;paration &agrave; la fois physique, mentale et &eacute;motionnelle &agrave; la grossesse et &agrave; l'accouchement. Vous apprendrez &agrave; vous d&eacute;tendre, &agrave; d&eacute;velopper la conscience de vos diff&eacute;rents organes (ut&eacute;rus, col, vagin), &agrave; vous familiariser avec les changements de votre corps et &agrave; vous pr&eacute;parer pour le travail et l'accouchement. Tout au long de la grossesse, vous apprendrez &agrave; entrer en contact avec votre b&eacute;b&eacute;, &agrave; lui envoyer de l'&eacute;nergie, de l'amour, de la tendresse. 		
		</p>
		<p>A. a d&eacute;couvert la sophrologie &agrave; 32 ans pendant sa grossesse, dans le cadre d'une pr&eacute;paration &agrave; l'accouchement au sein d'un petit groupe de femmes enceintes. Elle devait alors g&eacute;rer la col&egrave;re de son patron, son d&eacute;m&eacute;nagement dans un autre pays et la nouvelle vie commune avec le futur papa. Elle souffrait de nombreuses contractions quotidiennes depuis ses 3 mois de grossesse et un accouchement pr&eacute;matur&eacute; &eacute;tait &agrave; craindre.<br />
La sophrologie et le repos lui ont permis de se d&eacute;tendre et de s'&eacute;panouir. La fr&eacute;quence des contractions a brutalement diminu&eacute; et son b&eacute;b&eacute; est arriv&eacute; &agrave; terme.
</p>
<blockquote>&laquo; Cette pr&eacute;paration m'a aid&eacute;e &agrave; envisager mon accouchement sereinement. Le jour venu, elle m'a permis de g&eacute;rer les 20 premi&egrave;res heures du travail &agrave; la maison et je suis arriv&eacute;e &agrave; la maternit&eacute; &agrave; peine 3 heures avant la naissance de mon b&eacute;b&eacute;. J'ai pourtant accouch&eacute; par les reins, ce qui est r&eacute;put&eacute; être particuli&egrave;rement p&eacute;nible.<br /><br />
Depuis, je recours aux techniques de sophrologie par moi-m&ecirc;me d&egrave;s que j'y pense et que j'en ressens le besoin, pour calmer mon anxi&eacute;t&eacute; ou m'aider &agrave; trouver le sommeil par exemple. &raquo;
</blockquote>
<blockquote>&laquo; Merci ENOOOOOORMEMENT pour votre aide soutenue en pr&eacute;vision de la naissance de mon b&eacute;b&eacute;! Il est finalement n&eacute; un peu en avance. J'ai beaucoup pratiqu&eacute; la sophrologie les quelques jours avant sa naissance. Cela m'a vraiment aid&eacute;e le jour de l accouchement qui fut finalement folklorique...27 heures de travail et mon b&eacute;b&eacute; n&eacute; grâce a la ventouse (il devait se sentir bien &agrave; l int&eacute;rieur! ;-) ). <br /><br />
Je ne manquerai pas d'encore utiliser cette m&eacute;thode dans d'autres circonstances que la grossesse... &raquo;
</blockquote>
<p>Marion, une de mes collègues sophrologues, m’a demandé de l’accompagner pendant sa grossesse et de la préparer pour l’accouchement de son premier bébé. Regardez sur son <a href="http://unepoigneedamour.com/preparing-for-the-birth-of-my-baby-using-sophrology/" target="_blank">blog</a> ce qu’elle écrit sur l’apport de la sophrologie en préparation à la naissance et la parentalité.</p>
<div class="antenatal">
  <a href="http://unepoigneedamour.com/preparing-for-the-birth-of-my-baby-using-sophrology/" target="_blank"><img src="Preparing-for-Babous-birth.png" alt="Preparing for birth"></a>
<img src="Motherhood.png" alt="Motherhood">
</div>

  </div><!-- end of column container -->

<?php //put the main div above this include
include_once ($root."/sl_includes_fr/sl_footer_fr.php"); //the footer of course
?>
