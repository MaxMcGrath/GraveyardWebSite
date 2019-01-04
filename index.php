<?php

require_once('grave_counterControl.php');
require_once('grave_header.php');

$cookie_menuName = "GraveLayoutMenuMadHQ";
$navigationCookie=Left;
if(isset($_COOKIE[$cookie_menuName])) {
	$navigationCookie= $_COOKIE[$cookie_menuName];
}

$navigationSelection=true;
if($navigationCookie=='Top'){
	$navigationSelection=false;
}

if($navigationSelection){
	echo '<br><table><tr><td class="lefttd">';
	require_once('grave_leftbar.php');
	echo '</td><td class="righttd">';
} else {
	require_once('grave_menuBar.php');
}

require_once('grave_pageSelected.php');

if($navigationSelection){
	echo '</td></tr></table>';
}

require_once('grave_footer.php');

?>