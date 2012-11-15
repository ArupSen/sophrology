<?php //put your array at the top first
//stuff to go into the head code for the French pages 
//goes at the top of each template page
$root = $_SERVER['DOCUMENT_ROOT'];
$headcode_en = array (
	"title" => "",
	"desc" => "La sophrologie est une technique de relaxation dynamique faite d'exercices physiques et mentaux. Elle aide &agrave; traiter les sympt&ocirc;mes li&eacute;s au stress en d&eacute;veloppant une meilleure conscience du corps et de l'esprit et en renfor&ccedil;ant la confiance en soi.",
	"keywords" => "Sophrologie, technique de relaxation, concentration, conscience, corps, esprit, harmonie, relaxer, gestion du stress, respiration, anxi&eacute;t&eacute;, insomnie, d&eacute;pression, phobie, renforcer, confiance en soi, motivation, examen, s&eacute;r&eacute;nit&eacute;, d&eacute;veloppement personnel, maladies psychosomatiques, La sophrologie est une technique de relaxation dynamique simple et facile &agrave; apprendre, bas&eacute;e sur la respiration et la concentration. Elle aide &agrave; vivre plus en conscience &agrave; chaque instant avec notre corps et notre esprit en harmonie. Elle permet de se d&eacute;tendre, de mieux r&eacute;agir au stress, de d&eacute;velopper nos ressources int&eacute;rieures, nos valeurs. Elle est efficace dans le traitement de l'anxi&eacute;t&eacute;, des sympt&ocirc;mes li&eacute;s au stress, des maladies psychosomatiques, des insomnies, phobies, d&eacute;pression l&eacute;g&egrave;re. Elle permet d'am&eacute;liorer la concentration, la confiance en soi, de se pr&eacute;parer &agrave; des &eacute;v&egrave;nements anxiog&egrave;nes (examen, entretien d'embauche, op&eacute;ration chirurgicale, accouchement), de mieux r&eacute;cup&eacute;rer apr&egrave;s une op&eacute;ration, de renforcer le syst&egrave;me immunitaire.
",
	"body_id" => "home"	
);

// error handling - switch off (comment out) after testing
ini_set('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

include_once ($root."/sl_includes_fr/sl_head_fr.php"); //the <head></head> code
include_once ($root."/sl_includes_fr/sl_heading_fr.php"); //the heading <div> tag
include_once ($root."/sl_includes_fr/sl_nav_fr.php"); //the top nav bar
?>
<a name="content" id="content"></a><div id="column">
<h2>La Sophrologie / Accueil</h2>
<p>La sophrologie, cr&eacute;&eacute;e dans les ann&eacute;es 1960, est une technique de relaxation dynamique tr&egrave;s simple et facile &agrave; apprendre. Bas&eacute;e sur la respiration et la concentration, la sophrologie est un ensemble d'exercices physiques et mentaux r&eacute;alis&eacute;s dans un &eacute;tat de relaxation &agrave; la fois profond et dynamique (en mouvement). Son but est de nous aider &agrave; vivre plus &laquo; en conscience &raquo; &agrave; chaque instant de notre vie avec notre corps et notre esprit en harmonie.</p>
<p>Avec la sophrologie, nous apprenons &agrave; savoir nous d&eacute;tendre, &agrave; mieux r&eacute;agir au stress et aux diff&eacute;rents &eacute;v&eacute;nements de notre vie, &agrave; d&eacute;velopper nos ressources int&eacute;rieures, nos forces et nos valeurs.</p>
<p>La sophrologie offre de bons r&eacute;sultats dans les cas suivants:</p>
<ul>
	<li>Anxi&eacute;t&eacute;</li>
	<li>Tous les sympt&ocirc;mes li&eacute;s au stress et aux maladies psychosomatiques</li>
	<li>Insomnies</li>
	<li>Phobies</li>
</ul>
<p>Elle est aussi tr&egrave;s efficace pour:</p>
<ul>
	<li>am&eacute;liorer la concentration</li>
	<li>renforcer la confiance en soi</li>
	<li>se pr&eacute;parer &agrave; des &eacute;v&egrave;nements anxiog&egrave;nes comme un examen, un entretien d'embauche, une op&eacute;ration chirurgicale, un accouchement&hellip;</li>
	<li>r&eacute;cup&eacute;rer apr&egrave;s une intervention chirurgicale, renforcer le syst&egrave;me immunitaire</li>
</ul>
<p>La sophrologie peut &ecirc;tre pratiqu&eacute;e en sessions individuelles ou en groupe. Il faut en moyenne 4 &agrave; 5 s&eacute;ances pour acqu&eacute;rir les techniques de base qui, pratiqu&eacute;es r&eacute;guli&egrave;rement, deviennent plus efficaces et utilisables facilement par le patient dans sa vie quotidienne.</p>
</div>
<?php //put the main div above this include
include_once ($root."/sl_includes_fr/sl_footer_fr.php"); //the footer of course
?>
