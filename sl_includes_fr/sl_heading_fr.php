<?php
// function to print the required url of the page in the other language
function getEnglishName() {
// first find the current page
$pageName = basename($_SERVER['PHP_SELF'], ".php");
// switch case according to pageName value
switch ($pageName) {
	case(accueil):
	return "index";
	case(sophrologie):
	return "sophrology";
	case(consultation):
	return "onetoone";
	case(groupe):
	return "classes";
	case(temoignages):
	return "testimonials";
	case(presentation):
	return "aboutme";
	case(liens):
	return "resources";
	case(contactez):
	return "contact";
	case(actualites):
	return "news";
}
}
?>
<div id="main">
<div id="logo">
	<div id="headingtext">
		<h1>Sophrologie Londres</h1>
		<p>Brigitte Rinner</p>
		<p>Sophrologue Cayc&eacute;dienne</p>
		<a href="#content" title="skip to content" class="access">skip to content</a><!--accessibility-->
		<a href="http://sophrologylondon.com/<?php echo getEnglishName(); ?>.php" title="view this page in English" class="language">in english</a>
	</div>	
</div>
