<?php

require_once('dataArray/grave_menuObject.php');

$menuTotal=count($menuObj);

$menuString = '<div class="centerMenu"><a href="http://zombapro.ppmsite.com">Home</a>';

for($menuLoop=1;$menuLoop<$menuTotal;++$menuLoop){
	$numberOfSubLinks = count($menuObj[$menuLoop]);
	$menuString .= '<div class="dropdown">'
		. '<button class="dropbtn">' . $menuObj[$menuLoop][0] . '</button>'
		. '<div class="dropdown-content">';

	for($buttonLoop=2;$buttonLoop<$numberOfSubLinks;$buttonLoop+=2){
		if($menuList==5){
			$menuString .= '<a class="menulink" href="' .  $menuObj[$menuLoop][$buttonLoop+1] . '" target="_blank">' . $menuObj[$menuLoop][$buttonLoop] . '</a>';
		} else {
			$menuString .= '<a class="menulink" href="?page=' .  $menuObj[$menuLoop][$buttonLoop+1] . '">' . $menuObj[$menuLoop][$buttonLoop] . '</a>';
		}
	}

	$menuString .= '</div></div>';
}

echo $menuString . '</div><br>';

?>