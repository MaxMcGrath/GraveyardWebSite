<?php

//CSS Used: floatRight,modTable,mapimg

$fileName="grave_madnessCounter.txt";
$value=readCounterFile($fileName);//required in index.php

require_once('grave_blockBuilder.php');

echo '<br>' . $blockTopBar
		. 'Ra2 Madness: Re-Release Date: June 2015'
		. '<span class="floatRight">Downloaded ' . $value . ' times&nbsp;</span>'
	. $blockBody
		. '<br>Ra2 Madness is a crazy mod, developed by me years ago. Though this mod was never finished, it is still kind of fun.<br>'
		. '<br>Caution this mod is very unbalanced, and could be very unstable.<br>'
		. '<br>Required to play: factory Red Alert 2: Yuri\'s Revenge.<br>'
		. 'To install mod, unpack 7zip file and add contents to ra2/yr directory.<br>'
		. '<br>Allies have two factions<br>'
		. '<table class="modTable"><tr><td>Tech</td><td>Robotics</td></tr><tr><td>'
		. '<a href="madness/madnessALIpower.png" target="_blank"><img class="mapimg" src="madness/mini/madnessALIpower.png"></a>'
		. '</td><td>'
		. '<a href="madness/madnessALIrobotics.png" target="_blank"><img class="mapimg" src="madness/mini/madnessALIrobotics.png"></a>'
		. '</td></tr></table>'
		. '<br>Soviets have two factions<br>'
		. '<table class="modTable"><tr><td>Terrorist</td><td>Power</td></tr><tr><td>'
		. '<a href="madness/madnessSOVterrorist.png" target="_blank"><img class="mapimg" src="madness/mini/madnessSOVterrorist.png"></a>'
		. '</td><td>'
		. '<a href="madness/madnessSOVpower.png" target="_blank"><img class="mapimg" src="madness/mini/madnessSOVpower.png"></a>'
		. '</td></tr></table>'
		. '<br>Yuri has two factions<br>'
		. '<table class="modTable"><tr><td>Mind Power</td><td>Brute Power</td></tr><tr><td>'
		. '<a href="madness/madnessYRmind.png" target="_blank"><img class="mapimg" src="madness/mini/madnessYRmind.png"></a>'
		. '</td><td>'
		. '<a href="madness/madnessYRbrute.png" target="_blank"><img class="mapimg" src="madness/mini/madnessYRbrute.png"></a>'
		. '</td></tr></table>'
		. '<script>function counter(){window.open("grave_counterControl.php?downloadName=madnessMod","_blank");}</script>'
		. $downloadBarStart . 'madness/RA2MadnessAlpha.7z" onclick="counter()"' . $downloadBarMid . $downloadBarEnd
	. '<br><br><br>' . $blockEnd;
?>