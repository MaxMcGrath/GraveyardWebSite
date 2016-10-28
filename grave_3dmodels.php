<?php

$imageDir ='3dmodels/image/';
$modelDir ='3dmodels/3dmodel/';

$threeDmodels = array(
	"Allied Weather Tower","GAWEATHER.png","Includes Textures<br>&nbsp;&nbsp;&nbsp;Includes Build-Up<br>&nbsp;&nbsp;&nbsp;Includes Active Animation","GAWEATHER.png","GAWEATHER.zip"
	,"Soviet Barracks","NABARX.png","Includes Textures<br>&nbsp;&nbsp;&nbsp;Includes Build-Up","NABARX.png","NABARX.zip"
	,"Yuri Puppet Master","YAPUPET.png","Includes Textures","YAPUPET.png","YAPUPET.zip"
	);

$infoChunk=5;

for($x=0;$x!=count($threeDmodels);$x+=$infoChunk){
	//if(checkType($threeDmodels[$x+5])=="true"){
		if($x>0){
			echo '<br>';
		}
		echo '<table class="newsblockheader" align="center">'
				. '<tr>'
					. '<td class="newsheader">'
						. '3ds Max 2013: ' . $threeDmodels[$x]
					. '</td>'
				. '</tr>'
			. '</table>'
			. '<table class="newsblockbody" align="center" style="height: 125px;">'
				. '<tr>'
					. '<td class="newsbody">'
						. '<table>'
							. '<tr>'
								. '<td class="imagearea" rowspan="2" style="width: 320px;">'//background-color: #3D3D3D;
									. '<a href="' . $imageDir . $threeDmodels[$x+3] . '" target="_blank"><img  src="' . $imageDir . $threeDmodels[$x+1] . '" style="width:90%;"></a>'
									. '<br>Click Image To Enlarge' 
								. '</td>'
								. '<td class="description" style="height: 80px;">'
									. $threeDmodels[$x+2]
								. '</td>'
							. '</tr>'
							. '<tr>'
								. '<td class="downloadbar">'
									. '<a href="' . $modelDir . $threeDmodels[$x+4] . '" download>Click Here To Download ' . $threeDmodels[$x] . '</a>'
								. '</td>'
							. '</tr>'
						. '</table>'
					. '</td>'
				. '</tr>'
			. '</table>';
	//}
}
?>