<?php



$names = ["MadHQ","Zomba","Unknown","Robot Storm","Internal Destruction"];

$audio=[

	["madhq.wav","madhq2.wav","madhq3.wav","madhq4.wav","madhq5.wav","madhq6.wav","madhq7.wav","madhq8.wav","madhq9.wav","madhq10.wav","madhq11.wav"]

	,["zomba.wav","zomba2.wav","zomba3.wav","zomba4.wav","zomba5.wav","zomba6.wav","zomba7.wav"]

	,["25-i000.wav","25-i002.wav","25-i004.wav","25-i006.wav","25-i012.wav","25-i014.wav","25-i016.wav","25-i018.wav","25-i022.wav","25-i024.wav","25-i026.wav"]

	,["ALcommch.wav","ALdecim.wav","ALillstnk.wav","ALvortxbmb.wav","FLbmbtrk.wav","FLdevs.wav","FLkirov.wav","nexusadvtnk.wav","nexuscen.wav","nexusrep.wav"]
	,["rontyp2501.wav","rontyp2502.wav","rontyp2503.wav","rontyp2504.wav","zorgtrop01.wav","zorgtrop02.wav","zorgtrop03.wav","zorgtrop04.wav","zorgtrop05.wav","zorgtrop06.wav","zorgtrop07.wav"]
];


$audioFileName = [
	"madhq"
	,"zomba"
	,"IDsounds"
	,"RSsounds"
	,"otherSounds"
];


$audioDesc = [

	"This is the voice for MadHQ, a unit in one of Allied General mods, Recorded in 2006"
	,"This is the voice for Zomba, a unit in one of Allied General mods, Recorded in 2006"
	,"This is some unknown unit voice, Recorded in 2006"
	,"This is some unit voice test for Robot Storm, none were used..., Recorded in 2006"
	,"This is some unit voice for my Internal Destruction mod, Recorded in 2006"
];


$audioURL="other/sound/";

for($x=0;$x!=count($names);++$x)
{
	echo '<table class="newsblockheader" align="center">'
			. '<tr>'
				. '<td class="newsheader">'
					. $names[$x]
				. '</td>'
			. '</tr>'
		. '</table>'
		. '<table class="newsblockbody" align="center" style="height: 125px;">'
			. '<tr>'
				. '<td class="newsbody">'
					. '<table>'
						. '<tr>'
							. '<td class="imagearea" rowspan="2" style="width: 150px;">'//background-color: #3D3D3D;
								. '<img class="mapimg" src="' . $audioURL . $audioFileName[$x] . '.jpg">'
							. '</td>'
							. '<td class="description" style="height: 80px;">'
								. $audioDesc[$x]
								. '<div style="height: 150px; overflow: scroll; overflow-x: hidden;text-align: center;"><br>';

								//printHTMLAudio($x);


								for($y=0;$y!=count($audio[$x]);++$y)

								{

									echo '<audio style="width: 100%;" controls><source src="' . $audioURL . $audio[$x][$y] . '" type="audio/wav"></audio>';

									echo '<br>';

								}


								echo '</div>'
							. '</td>'
						. '</tr>'
						. '<tr>'
							. '<td class="downloadbar">'
								. '<a href="' . $audioURL . $audioFileName[$x] . '.zip" download>Click Here To Download ' . $names[$x] . '</a>'
							. '</td>'
						. '</tr>'
					. '</table>'
				. '</td>'
			. '</tr>'
		. '</table>';

	echo '<br>';

}


?>