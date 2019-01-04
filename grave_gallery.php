<?php

require_once('grave_blockBuilder.php');
require_once('dataArray/grave_screenArray.php');

$numberOfImageInArray=3;
$numberTotal=$numberOfImageInArray*2+1;

if(empty($_GET["number"])){
	$startNum = 0;
} else {
	$startNum = $_GET["number"];
}

$numberOfImages=count($imageName)-1;
$imageNumber=$startNum-$numberOfImageInArray;

if($imageNumber > $numberOfImages){
	$imageNumber = 0;
}

if($imageNumber < 0){
	$imageNumber = $numberOfImages-abs($imageNumber)+1;
}

$leftArrowNumber=$startNum-1;
if($leftArrowNumber < 0){
	$leftArrowNumber = $numberOfImages;
}

$rightArrowNumber=$startNum+1;
if($rightArrowNumber > $numberOfImages){
	$rightArrowNumber = 0;
}

echo $blockTopBar . 'Image Gallery' . $blockBody . '<br><br>'
	. '<table><tr><td>'
		. '<a href="screen/' . $imageName[$startNum][0] . '" target="_blank"><img class="galyImgMax" src="screen/' . $imageName[$startNum][0] . '"></a><br>'
		. $imageName[$startNum][1] . '<br>(Click image above for full size)'
	. '</td></tr></table>'
	. '<table class="smallTable"><tr><td><form action="index.php" method="get">'
	. '<input name="number" id="number" type="hidden" value="' . $leftArrowNumber . '"><input name="page" id="page" type="hidden" value="SCREEN">'
	. '<button class="galyArrow" type="submit" value="Submit">&lArr;</button></form></td><br><br><br><br><br><br>';

for($x=0;$x<$numberTotal;++$x){
	echo '<td><form  action="index.php" method="get">'
			. '<input name="number" id="number" type="hidden" value="' . $imageNumber . '">'
			. '<input name="page" id="page" type="hidden" value="SCREEN">'
			. '<button class="galyImgAry" type="submit" value="Submit">'
				.'<img class="galyImgAry" src="screen/mini/' . $imageName[$imageNumber][0] . '">'
			. '</button>'
		. '</form></td>';

	++$imageNumber;

	if($imageNumber > $numberOfImages){
		$imageNumber = 0;
	}
}

echo '<td><form  action="index.php" method="get"><input name="number" id="number" type="hidden" value="' . $rightArrowNumber . '">'
	. '<input name="page" id="page" type="hidden" value="SCREEN"><button class="galyArrow" type="submit" value="Submit">&rArr;</button>'
	. '</form></td></tr></table><br><br><br><br>' . $blockEnd . '<br><br>';

?>