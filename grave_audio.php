<?php

//CSS Used: mapimg,audioBox,fullWidth

$audioURL="other/sound/";
$musicURL="other/music/";

require_once('grave_blockBuilder.php');

$names=["MadHQ","Zomba","Unknown","Robot Storm","Internal Destruction","PD's Awesome X-mas soundtrack"];

$audio=[
	["madhq.wav","madhq2.wav","madhq3.wav","madhq4.wav","madhq5.wav","madhq6.wav","madhq7.wav","madhq8.wav","madhq9.wav","madhq10.wav","madhq11.wav"]
	,["zomba.wav","zomba2.wav","zomba3.wav","zomba4.wav","zomba5.wav","zomba6.wav","zomba7.wav"]
	,["25-i000.wav","25-i002.wav","25-i004.wav","25-i006.wav","25-i012.wav","25-i014.wav","25-i016.wav","25-i018.wav","25-i022.wav","25-i024.wav","25-i026.wav"]
	,["ALcommch.wav","ALdecim.wav","ALillstnk.wav","ALvortxbmb.wav","FLbmbtrk.wav","FLdevs.wav","FLkirov.wav","nexusadvtnk.wav","nexuscen.wav","nexusrep.wav"]
	,["rontyp2501.wav","rontyp2502.wav","rontyp2503.wav","rontyp2504.wav","zorgtrop01.wav","zorgtrop02.wav","zorgtrop03.wav","zorgtrop04.wav","zorgtrop05.wav","zorgtrop06.wav","zorgtrop07.wav"]
	,['pd_01_Snow_Falling.mp3','pd_02_Santaphobia.mp3','pd_03_Unpack_Your_Present.mp3','pd_04_The_Turkeys_Last_Dance.mp3','pd_05_The_Elve_Song.mp3','pd_06_Heavy_Christmas.mp3','pd_07_Lazy_Claus.mp3','pd_08_Toy_Factory.mp3']
];

$audioFileName=["madhq","zomba","IDsounds","RSsounds","otherSounds","pd_XMAS"];

$audioDesc=[
	"This is the voice for MadHQ, a unit in one of Allied General mods, Recorded in 2006"
	,"This is the voice for Zomba, a unit in one of Allied General mods, Recorded in 2006"
	,"This is some unknown unit voice, Recorded in 2006"
	,"This is some unit voice test for Robot Storm, none were used..., Recorded in 2006"
	,"This is some unit voice for my Internal Destruction mod, Recorded in 2006"
	,"An Awesome holiday soundtrack! Soundtrack auther is pd"
];

for($x=0,$numberOfSets=count($names);$x<$numberOfSets;++$x){
	$audioBlock=$blockTopBar
			. $names[$x]
		. $blockBody
			. $twoColumnTableOne
				. '<img class="mapimg" src="' . (($x==5)?$musicURL:$audioURL) . $audioFileName[$x] . '.jpg">'
			. $twoColumnTableTwo
				. '<br>' . $audioDesc[$x]
				. '<br><br><div class="audioBox" id="audioSet' . $x . '" onclick="openSounds' . $x . '()">'
				. '<br><br>Click here to open preview player'
				. '<script>var audioList' . $x . ' = \'';

				for($y=0,$audioCount=count($audio[$x]);$y<$audioCount;++$y){
					$audioBlock.='<br><audio class="fullWidth" controls><source src="' . (($x==5)?$musicURL:$audioURL) . $audio[$x][$y] . '" type="audio/' . (($x==5)?'mpeg':'wav') . '"></audio>';
				}

				$audioBlock.='<br><br>\';function openSounds' . $x . '(){'
					. 'document.getElementById("audioSet' . $x . '").innerHTML=audioList' . $x . ';'
					. '}</script></div>'	
					. $downloadBarStart . (($x==5)?$musicURL:$audioURL) . $audioFileName[$x] . '.zip"' . $downloadBarMid . $names[$x] . $downloadBarEnd
			. $twoColumnTableThree
		. $blockEnd;

	echo $audioBlock;
}

?>