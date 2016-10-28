<?php

$titles = array("Networks","Other Mods");
$links = array(
	"Perfect Project Mod","http://www.ppmsite.com/",
	"Revora","http://www.revora.net/",
	"Freedom","http://www.freedomstudios.net/",
	"AG's Bunker","http://agbunker.cncguild.net/",
	"Bolt's Tech Center","http://omegabolt.cncguild.net/red_resurrection/",
	"D-Day","http://dday.migeater.net/",
	"Futer Crisis","http://fc.cncguild.net/",
	"Robot Storm","http://rstorm.cncguild.net/"
);

function buildrightheader($title){
	return '<tr><td class="headertab">' . $title . '</td></tr>';
}

echo '<table>';

echo '<tr><td class="topbar"></td></tr>';

for($x=0;$x!=count($links);$x+=2){
	if($x==0){
		echo buildrightheader($titles[0]);
	} else if($x==6){
		echo buildrightheader($titles[1]);
	}

	echo '<tr><td class="linktab"><a href="' . $links[$x+1] . '" target="_blank">' . $links[$x] . '</a></td></tr>';

	//hack in link to PPM forums
	if($x==0){
		echo '<tr><td class="linktab" style="font-size:10px;">&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.ppmforums.com/" target="_blank">Forum</a></td></tr>';
	}
}

echo '<tr><td class="topbar"></td></tr>';

echo '</table>';

require('grave_screen.php');
$fileForSmallVeiw = rand(0, (count($imageName)-1));
$fileNameForDisplay = $imageName[$fileForSmallVeiw][0];

echo '<br><table style="font-size:10px;text-align:center;"><tr><td style="border: 2px inset #8597BC;border-top-left-radius:25px;border-top-right-radius:25px;">Image Gallery</td></tr>'
		.'<tr style="background-color: #545454"><td>'
			.'<div style="max-width:150px;max-height:150px;">'
				.'<form  action="index.php" method="get">'
					.'<input name="number" id="number" type="hidden" value="' . $fileForSmallVeiw . '">'
					.'<input name="page" id="page" type="hidden" value="SCREEN">'
					.'<button type="submit" value="Submit" style="max-width:150px;max-height:150px;padding:0px;border:0px;">'
						.'<img src="screen/mini/' . $fileNameForDisplay . '" style="max-width:150px;max-height:150px;">'
					.'</button>'
				.'</form>'

			.'</div>'
		.'</td></tr><tr><td style="border: 2px inset #8597BC;border-bottom-left-radius:25px;border-bottom-right-radius:25px;">Click image for gallery</td></tr></table>';

?>