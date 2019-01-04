<?php

//CSS Used: newsheader,newsbody,shpCanvasLeft,description,shpCanvasRight,downloadbar

//require_once('grave_blockBuilder.php');

$divTopOpen='<div class="newsheader"';
$divTopClose='>';

$divBodyOpen='<div class="newsbody"';
$divBodyClose='>';

$divTagClose='</div>';

$blockTopBar=$divTopOpen . $divTopClose;
$blockBody=$divTagClose . $divBodyOpen . $divBodyClose;
$blockEnd=$divTagClose . '<br>';

$threeColumnTableOne='<table><tr><td class="shpCanvasLeft">';
$threeColumnTableTwo='</td><td class="description">';
$threeColumnTableThree='</td><td class="shpCanvasRight">';
$threeColumnTableFour='</td></tr></table>';

$twoColumnTableOne='<table><tr><td class="shpCanvasLeft">';
$twoColumnTableTwo='</td><td class="description">';
$twoColumnTableThree='</td></tr></table>';

$downloadBarStart='<br><br><div class="downloadbar"><a href="';
$downloadBarStartSml='<br><div class="downloadbar"><a href="';
$downloadBarMid='" download>Click Here To Download ';
$downloadBarMidSml='" download>Download ';
$downloadBarEnd='</a>' . $divTagClose;
$downloadBarEndSml=$downloadBarMidSml . $downloadBarEnd;

$layoutGridTitileStart='<div class="tileBlock">';
$layoutGridStart='<div class="tileHead">';
$bodyLableStart='<br><br><span class="goldColor">';
$bodyLableEnd='</span><br>';
?>