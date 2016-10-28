<?php

$fileName="grave_empireCounter.txt";

$file = fopen($fileName, "r");
$value=fread($file,filesize($fileName));
fclose($file);

echo '<table class="newsblockheader" align="center">'
		. '<tr>'
			. '<td class="newsheader">'
				. 'Empire Of The Rising Sun Mod: Release Date: Fall 2016'
				.'<div style="float: right;">'.$value.'</div>'
			. '</td>'
		. '</tr>'
	. '</table>'
	. '<table class="newsblockbody" align="center">'
		. '<tr>'
			. '<td class="newsbody">'
				. 'Empire Of The Rising Sun Mod, developed by me years ago. Though this mod was never finished, it is still kind of fun.<br>'
				. '<br>Caution this mod is very unbalanced, and could be very unstable.<br>'
				. '<br>Required to play: Red Alert 2: Yuri\'s Revenge.<br>'
				. '*** Note: This mod needs NPatch, I beleave its SE_0022 ***<br>'
				. 'To install mod, unpack .zip file and add contents to ra2/yr directory.<br>'
				. '<br>Empire Mod Images<br>'
				. '<table style="width:10%;" align="center"><tr><td>'
				. '<a href="empireMod/empire.png" target="_blank"><img class="mapimg" src="empireMod/mini/empire.png"></a>'
				. '</td><td>'
				. '<a href="empireMod/c10.png" target="_blank"><img class="mapimg" src="empireMod/mini/c10.png"></a>'
				. '</td></tr><tr><td>'
				. '<a href="empireMod/emp01.jpg" target="_blank"><img class="mapimg" src="empireMod/mini/emp01.jpg"></a>'
				. '</td><td>'
				. '<a href="empireMod/emp02.png" target="_blank"><img class="mapimg" src="empireMod/mini/emp02.png"></a>'
				. '</td></tr></table>'
				. '<script>function counter(){window.open("http://zombapro.ppmsite.com/grave_empireCounter.php","_blank");}</script>'
				. '<br><br><a href="empireMod/empire.zip" style="color:red;font-size:30px;" onclick="counter()" download>'
				. 'Click Here To Download'
				. '</a>'
			. '</td>'
		. '</tr>'
	. '</table>';

?>