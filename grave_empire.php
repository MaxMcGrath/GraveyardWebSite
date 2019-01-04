<?php

//CSS Used: floatRight,modTable,mapimg

$fileName="grave_empireCounter.txt";
$value=readCounterFile($fileName);//required in index.php

require_once('grave_blockBuilder.php');

echo '<br>' . $blockTopBar
		. 'Empire Of The Rising Sun Mod: Release Date: Fall 2016'
		. '<span class="floatRight">Downloaded ' . $value . ' times&nbsp;</span>'
	. $blockBody
		. '<br>Empire Of The Rising Sun Mod, developed by me years ago. Though this mod was never finished, it is still kind of fun.<br>'
		. '<br>Caution this mod is very unbalanced, and could be very unstable.<br>'
		. '<br>Required to play: Red Alert 2: Yuri\'s Revenge.<br>'
		. '*** Note: This mod needs NPatch, I beleave its SE_0022 ***<br>'
		. 'To install mod, unpack .zip file and add contents to ra2/yr directory.<br>'
		. '<br>Empire Mod Images<br>'
		. '<table class="modTable"><tr><td>'
			. '<a href="empireMod/empire.png" target="_blank"><img class="mapimg" src="empireMod/mini/empire.png"></a>'
		. '</td><td>'
			. '<a href="empireMod/c10.png" target="_blank"><img class="mapimg" src="empireMod/mini/c10.png"></a>'
		. '</td></tr><tr><td>'
			. '<a href="empireMod/emp01.jpg" target="_blank"><img class="mapimg" src="empireMod/mini/emp01.jpg"></a>'
		. '</td><td>'
			. '<a href="empireMod/emp02.png" target="_blank"><img class="mapimg" src="empireMod/mini/emp02.png"></a>'
		. '</td></tr></table>'
		. '<script>function counter(){window.open("grave_counterControl.php?downloadName=empireMod","_blank");}</script>'
		. $downloadBarStart . 'empireMod/empire.zip" onclick="counter()"' . $downloadBarMid . $downloadBarEnd
	. '<br><br><br>' . $blockEnd;
?>