<?php

$imageDir ='3dmodels/image/';
$modelDir ='3dmodels/3dmodel/';

require_once('grave_blockBuilder.php');

$threeDmodels = array(
	"Allied Weather Tower","GAWEATHER.png","Includes Textures<br>&nbsp;&nbsp;&nbsp;Includes Build-Up<br>&nbsp;&nbsp;&nbsp;Includes Active Animation","GAWEATHER.png","GAWEATHER.zip"
	,"Soviet Barracks","NABARX.png","Includes Textures<br>&nbsp;&nbsp;&nbsp;Includes Build-Up","NABARX.png","NABARX.zip"
	,"Yuri Puppet Master","YAPUPET.png","Includes Textures","YAPUPET.png","YAPUPET.zip"
	);

$infoChunk=5;
$numberOfModels=count($threeDmodels);

echo '<br><br>';

for($x=0;$x<$numberOfModels;$x+=$infoChunk){
	echo $blockTopBar
			. '3ds Max 2013: ' . $threeDmodels[$x]
		. $blockBody
			. $twoColumnTableOne
				. '<a href="' . $imageDir . $threeDmodels[$x+3] . '" target="_blank"><img class="mapimg" src="' . $imageDir . $threeDmodels[$x+1] . '"></a>'
				. '<br>Click Image To Enlarge' 
			. $twoColumnTableTwo
				. $threeDmodels[$x+2]
				. $downloadBarStart . $modelDir . $threeDmodels[$x+4] . $downloadBarMid . $threeDmodels[$x] . $downloadBarEnd
			. $twoColumnTableThree
		. $blockEnd;
}

?>