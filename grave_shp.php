<?php

//CSS Used: txtCenter,vxlimg

require_once('dataArray/grave_shapeArray.php');
require_once('grave_blockBuilder.php');

$imagedir ='shp/imgjpg/';
$shpdir ='shp/shp/';

for($x=0,$numberOfShape=count($shp);$x<$numberOfShape;$x+=8){
	echo $blockTopBar
		. '<div class="txtCenter">' . $shp[$x] . '</div>'
	. $blockBody
		. $threeColumnTableOne
			. '<img class="vxlimg" src="' . $imagedir . $shp[$x+1] . '" alt="E">'
			. '<br>Hover cursor over image to enlarge'
		. $threeColumnTableTwo
			. $shp[$x+2] . ' includes:'
			. '<br><img src="image/' . (($shp[$x+4]=="0")?'no':'yes') . '.png" alt="E">SHP'
			. '<br><img src="image/' . (($shp[$x+5]=="0")?'no':'yes') . '.png" alt="E">Cameo'
			. '<br><img src="image/' . (($shp[$x+6]=="0")?'no':'yes') . '.png" alt="E">Code'
			. $downloadBarStart . $shpdir . $shp[$x+3] . $downloadBarMid . $shp[$x] . $downloadBarEnd
		. $threeColumnTableThree;

	if($shp[$x+7]=="0"){
		echo '<a href="#" onclick="window.open(\'shapedraw/shpveiw.html?zipName=' . $shp[$x+3] . '\', \'newwindow\', \'width=500, height=575\'); return false;">'
				. '<img src="image/canvas2.png" alt="E"><br>(Opens in new pop-up window)'
			.' </a>';
	}

	echo $threeColumnTableFour . $blockEnd;
}

?>