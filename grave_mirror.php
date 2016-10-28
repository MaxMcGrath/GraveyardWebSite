<?php

$modNames = ["LaoTze Units","Allies Revenge 2","I.C.F.R.A.!","Eagle Red AA"];

function buildModArea(){
	global $modNames;

	$mainDir="mirror/";

	$modName=$_GET["mod"];

	$modDir = "";
	$modImages = [];

	switch($modName){
		case $modNames[0]:
			$modNameNumber=0;
			$modDir = "laotze/";
			$modPDF = "Read_Me.doc.pdf";
			$modPDFDisc = "The read me that comes with mod. Lists all of the mods features.";
			$modLink = "http://graveyards.cncguild.net/style.php?page=laodownl";
			break;
		case $modNames[1]:
			$modNameNumber=1;
			$modDir = "alliesrevenge2/";
			$modImages = ["AR200.png","AR201.png"];
			$modImagesDisc = ["Screenshot of Genesis faction","Screenshot of Nemesis faction"];
			$modLink = "http://www.moddb.com/mods/allies-revenge-2";
			break;
		case $modNames[2]:
			$modNameNumber=2;
			$modDir = "icfra/";
			$modImages = ["icfra00.png","icfra01.png"];
			$modImagesDisc = ["Screenshot of Allied faction","Screenshot of Soviet faction"];
			$modLink = "http://www.moddb.com/mods/it-came-from-red-alert";
			break;
		case $modNames[3]:
			$modNameNumber=3;
			$modDir = "eagleredaa/";
			$modImages = ["EredAA00.png","EredAA01.png","EredAA02.png"];
			$modImagesDisc = ["Screenshot of Asian Alliance faction","Screenshot of Allied faction","Screenshot of Soviet faction"];
			$modLink = "http://www.moddb.com/mods/eaglered";
			break;
	}

	echo '<table class="newsblockheader" align="center">'
			. '<tr>'
				. '<td class="newsheader" style="font-size:16px;">'
					. 'Mirrored mod: ' . $modNames[$modNameNumber]
				. '</td>'
			. '</tr>'
		. '</table>'
		. '<table class="newsblockbody" align="center">'
			. '<tr>'
				. '<td class="newsbody" style="text-align: center; font-size:14px;">'
					. '<br>Mod Title: ' . $modNames[$modNameNumber]
					. '<br>Mod for Red Alert 2: Yuris Revenge'
					. '<br><br>Mods last know URL home: <a href="' . $modLink. '" target="_blank">' . $modLink . '</a>'
					. '<br><br>Required to play: factory Red Alert 2: Yuri\'s Revenge.'
					. '<br>To install mod, unpack .zip file and add contents to ra2/yr directory.'
					. '<br><br>';
		
	if(!empty($modPDF)){
		echo $modPDFDisc . '<br>';
		echo '<embed src="' . $mainDir . $modDir . $modPDF . '" style="width:700px;height:500px">';
		echo '<br><a href="' . $mainDir . $modDir . $modPDF . '" target="_blank">(Click here to open PDF in new window/tab)</a><br>';
	}

	if(!empty($modImages)){
		for($x=0 ; $x!=count($modImages) ; ++$x){
			echo $modImagesDisc[$x] . '<br>';
			echo '<a href="' . $mainDir . $modDir . $modImages[$x] . '" target="_blank"><img src="' . $mainDir . $modDir . $modImages[$x] . '" style="max-width:500px;"></a>';
			echo '<br>(Click image to open in new window/tab)<br><br>';
		}
	}

	echo 	'<br><br><a href="" style="color:red;font-size:30px;" download>'
			. 'Click Here To Download'
		. '</a><br><br>'

		. '</td></tr></table>';
}

?>