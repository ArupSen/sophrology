<?php //put your array at the top first
//stuff to go into the head code for the French pages 
//goes at the top of each template page
$root = $_SERVER['DOCUMENT_ROOT'];
$headcode_en = array (
	"title" => ", Sessions individuelles",
	"desc" => "Les sessions individuelles s'adressent aux personnes qui souhaitent g&eacute;rer un probl&egrave;me personnel sp&eacute;cifique. Une session comprend un dialogue pr&eacute;alable, 15 &agrave; 20 minutes d'exercices de sophrologie et la description, par le patient, de ce qu'il a v&eacute;cu pendant la s&eacute;ance.",
	"keywords" => "Probl&egrave;me personnel, sophrologue, ph&eacute;nodescription, les trois techniques-cl&eacute;s, relaxation physique et mentale, identification puis rel&circ;chement des tensions physiques et/ou mentales, activation des &eacute;nergies, individuel, conscience, adaptation, sp&eacute;cifique, entra&icirc;nement, Cayc&eacute;do, sophrologie, relaxation, concentration, conscience, stress, confiance, image de soi, ph&eacute;nom&egrave;ne, corps, esprit, harmonie, gestion du stress, anxi&eacute;t&eacute;, insomnie, d&eacute;pression, phobie, am&eacute;liorer, renforcer, motivation, pr&eacute;paration aux examens, d&eacute;veloppement personnel, accouchement, s&eacute;r&eacute;nit&eacute;, respiration, hospitalisation, respiration vivre plus en conscience, se d&eacute;tendre, mieux r&eacute;agir au stress, de d&eacute;velopper nos ressources int&eacute;rieures, nos valeurs. Efficace pour les enfants, maladies psychosomatiques, post-op&eacute;ratoire, renforcer le syst&egrave;me immunitaire.",
	"body_id" => "one"	
);

// error handling - switch off (comment out) after testing
ini_set('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

include_once ($root."/sl_includes_fr/sl_head_fr.php"); //the <head></head> code
include_once ($root."/sl_includes_fr/sl_heading_fr.php"); //the heading <div> tag
include_once ($root."/sl_includes_fr/sl_nav_fr.php"); //the top nav bar
?>
<a name="content" id="content"></a><div id="column"><!--column container -->
		<h2>Consultation</h2>
		<p>Une consultation, ou session individuelle, s'adresse &agrave; une personne qui souhaite g&eacute;rer un probl&egrave;me sp&eacute;cifique.
		</p>
		<p>Une session dure environ 1 heure. Elle commence par un questionnaire qui permet au sophrologue de bien cerner la situation lors de la premi&egrave;re  rencontre. Lors des rendez-vous suivants, les questions s'orienteront vers l'entra&icirc;nement pratiqu&eacute;, les changements observ&eacute;s, les progr&egrave;s &eacute;ventuels.  
		</p>
		<p>Vient ensuite la s&eacute;ance de sophrologie proprement dite qui dure 15 &agrave; 20 minutes. En posture assise ou debout, le patient est guid&eacute; par la voix du sophrologue qui lui apprend &agrave; se d&eacute;tendre compl&egrave;tement, &agrave; identifier ses tensions et les &eacute;vacuer, &agrave; activer ses &eacute;nergies, &agrave; se projeter dans diff&eacute;rentes situations. 
		</p>
		<p>Le patient est ensuite invit&eacute; &agrave; exprimer oralement ce qu'il a ressenti tout au long de la s&eacute;ance : C'est la &laquo; ph&eacute;nodescription &raquo;, description des sensations physiques, des images mentales, etc. Les enfants s'expriment g&eacute;n&eacute;ralement par le dessin.
		</p>
		<p>La plupart des s&eacute;ances sont enregistr&eacute;es sur cassette ou CD, permettant au patient de s'entra&icirc;ner chez lui entre deux sessions. Il faut en moyenne 4 &agrave; 5 s&eacute;ances pour acqu&eacute;rir les techniques de base qui, pratiqu&eacute;es r&eacute;guli&egrave;rement, deviennent plus efficaces et utilisables facilement par le patient dans sa vie quotidienne.
		</p>
		<p>Les trois premi&egrave;res sessions sont g&eacute;n&eacute;ralement les m&ecirc;mes pour tous. Ce sont les trois &laquo; techniques-cl&eacute;s &raquo; de la sophrologie :</p>
			<ol>
				<li>la sophronisation de base (SBV) : relaxation &agrave; la fois physique et mentale</li>
				<li>Le sophro-d&eacute;placement du n&eacute;gatif (SDN) : identification puis rel&acirc;chement des tensions, physiques et/ou mentales</li>
				<li>La sophro-activation-vitale (SAV) : activation des &eacute;nergies</li>
			</ol>
		
		<p>Ensuite, des techniques et des exercices plus sp&eacute;cifiques seront introduits en fonction des besoins du patient.
		</p>
		<div class="drawing">
			<img src="/active_sitting.gif" alt="active sitting posture" title="Posture assise dynamique" />
			<p>Posture assise dynamique</p>
		</div>
		<div class="drawing">
			<img src="/rotations.gif" alt="mouvement de rotation en posture debout" title="mouvement de rotation en posture debout" />
			<p>mouvement de rotation en posture debout</p>
		</div>
		<div class="drawing">
			<img src="/extension.gif" alt="Extension en posture debout" title="Extension en posture debout" />
			<p>Extension en posture debout</p>
		</div>
		<div class="clear">
		<p>(Dessins du Dr P-A Ch&eacute;n&eacute;)</p>
		</div>

	</div><!-- end of column container -->
<?php //put the main div above this include
include_once ($root."/sl_includes_fr/sl_footer_fr.php"); //the footer of course
?>

