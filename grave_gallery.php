<?php
require('grave_screen.php');

if(empty($_GET["number"])){
	$startNum = 0;
} else {
	$startNum = $_GET["number"];
}

$numberOfImages=count($imageName)-1;
$imageNumber=$startNum-2;

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

echo '<table width=100% style="font-size:10px;"><tr><td align="center">'
	.'<a href="screen/' . $imageName[$startNum][0] . '" target="_blank">'
		.'<img src="screen/' . $imageName[$startNum][0] . '" style="max-width:700px;max-height:700px;">'
	.'</a><br>'
	.'<font size="3">' . $imageName[$startNum][1] . '</font><br>'
	.'(Click image above for full size)'
	.'</td></tr></table>';

echo '<table style="max-width:800px;max-height:800px;" align="center"><tr><td style="background-color: #545454;">'
	.'<form  action="index.php" method="get">'
		.'<input name="number" id="number" type="hidden" value="' . $leftArrowNumber . '">'
		.'<input name="page" id="page" type="hidden" value="SCREEN">'
		.'<button type="submit" value="Submit" style="height:100px;padding:0px;border:0px;background-color: #545454;font-size:25px;">'
			.'&lArr;'
		.'</button></form></td>';

for($x=0;$x!=5;++$x){
	echo '<td><form  action="index.php" method="get">'
			.'<input name="number" id="number" type="hidden" value="' . $imageNumber . '">'
			.'<input name="page" id="page" type="hidden" value="SCREEN">'
			.'<button type="submit" value="Submit" style="max-width:125px;max-height:125px;padding:0px;border:0px;background-color: #292929;">'
				.'<img src="screen/mini/' . $imageName[$imageNumber][0] . '" style="max-width:125px;max-height:125px;">'
			.'</button>'
		.'</form></td>';

	$imageNumber=$imageNumber + 1;

	if($imageNumber > $numberOfImages){
		$imageNumber = 0;
	}
}

echo '<td style="background-color: #545454;">'
		.'<form  action="index.php" method="get">'
		.'<input name="number" id="number" type="hidden" value="' . $rightArrowNumber . '">'
		.'<input name="page" id="page" type="hidden" value="SCREEN">'
		.'<button type="submit" value="Submit" style="height:100px;padding:0px;border:0px;background-color: #545454;font-size:25px;">'
			.'&rArr;'
		.'</button></form></td></tr></table>';
?>