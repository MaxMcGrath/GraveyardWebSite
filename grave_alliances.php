<?php

//CSS Used: floatRight,modTable,mapimg

$fileName="grave_alliancesCounter.txt";
$value=readCounterFile($fileName);//required in index.php

require_once('grave_blockBuilder.php');

echo '<br>' . $blockTopBar
		. 'Red Alert 2 Alliances: Version 1/4: Release Date: March 2018'
		. '<span class="floatRight">Downloaded ' . $value . ' times&nbsp;</span>'
	. $blockBody
		. '<br>Red Alert 2 Alliances has been slowly in development for little over a year. This mod is far from complete, and no future release dates are set.<br>'
		. 'Currently the Soviet and Yuri factions have not been touched, and are "Out-of-Box".<br>'
		. '<br>Release 1/4 includes the four Allied Alliances<br>'
		. 'Release 2/4 will include the three Soviet Alliances<br>'
		. 'Release 3/4 will include the two Yuri Alliances<br>'
		. 'Release 4/4 will include final touch ups<br>'
		. '<br><br>Allies have have formed four alliances<br>'
		. '<table class="modTable"><tr><td>Western Alliance</td><td>Royal Kinship</td><td>Steel Talons</td><td>Pacific Legion</td></tr><tr><td>'
		. '<img class="mapimg" src="alliances/mapwestern.png"></a>'
		. '</td><td>'
		. '<img class="mapimg" src="alliances/maproyal.png"></a>'
		. '</td><td>'
		. '<img class="mapimg" src="alliances/mapsteel.png"></a>'
		. '</td><td>'
		. '<img class="mapimg" src="alliances/mappacific.png"></a>'
		. '</td></tr><tr><td colspan="4"><br>Aerial Surveillance of each allied alliance</td></tr><tr><td>'
		. '<a href="alliances/western.png" target="_blank"><img class="mapimg" src="alliances/miniwestern.png"></a>'
		. '</td><td>'
		. '<a href="alliances/royal.png" target="_blank"><img class="mapimg" src="alliances/miniroyal.png"></a>'
		. '</td><td>'
		. '<a href="alliances/steel.png" target="_blank"><img class="mapimg" src="alliances/ministeel.png"></a>'
		. '</td><td>'
		. '<a href="alliances/pacific.png" target="_blank"><img class="mapimg" src="alliances/minipacific.png"></a>'
		. '</td></tr></table>'
		. '<br><br><table class="modTable"><tr><td colspan="4"><br>Random Aerial Surveillance</td></tr><tr><td>'
		. '<a href="alliances/00shot.png" target="_blank"><img class="mapimg" src="alliances/00minishot.png"></a>'
		. '</td><td>'
		. '<a href="alliances/01shot.png" target="_blank"><img class="mapimg" src="alliances/01minishot.png"></a>'
		. '</td><td>'
		. '<a href="alliances/02shot.png" target="_blank"><img class="mapimg" src="alliances/02minishot.png"></a>'
		. '</td><td>'
		. '<a href="alliances/03shot.png" target="_blank"><img class="mapimg" src="alliances/03minishot.png"></a>'
		. '</td></tr></table>'
		. '<br><br><br>Required to play: factory Red Alert 2: Yuri\'s Revenge version 1.001<br>'
		. 'No extra patches required.<br>'
		. 'To install mod, unpack .zip file and add contents to ra2/yr directory.<br>'
		. 'Note* There are alot of public resources used, none have been listed yet.<br>'
		. '<script>function counter(){window.open("grave_counterControl.php?downloadName=allianceMod","_blank");}</script>'
		. $downloadBarStart . 'alliances/alliances.zip" onclick="counter()"' . $downloadBarMid . $downloadBarEnd
	. '<br><br><br>' . $blockEnd;

?>