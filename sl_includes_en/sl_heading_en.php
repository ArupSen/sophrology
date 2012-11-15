<?php
// function to print the required url of the page in the other language
function getFrenchName() {
// first find the current page
$pageName = basename($_SERVER['PHP_SELF'], ".php");
// switch case according to pageName value
switch ($pageName) {
	case(index):
	return "accueil";
	case(sophrology):
	return "sophrologie";
	case(onetoone):
	return "consultation";
	case(classes):
	return "groupe";
	case(testimonials):
	return "temoignages";
	case(aboutme):
	return "presentation";
	case(resources):
	return "liens";
	case(contact):
	return "contactez";
	case(news):
	return "actualites";
}
}
?>
<div id="main">
<div id="logo">
	<div id="headingtext">
		<h1>Sophrology London</h1>
		<p>Brigitte Rinner</p>
		<p>Caycedian Sophrologist</p>
		<a href="#content" title="skip to content" class="access">skip to content</a><!--accessibility-->
		<a href="http://www.sophrologylondon.com/<?php echo getFrenchName(); ?>.php" title="voyez cette page en fran&ccedil;ais" class="language">en fran&ccedil;ais</a>
	</div>	
</div>
