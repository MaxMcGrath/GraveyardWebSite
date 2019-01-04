<?php

//CSS Used: floatRight,modTable,alignTop,modTxtBox

$fileName="grave_SEWcounter.txt";
$value=readCounterFile($fileName);//required in index.php

require_once('grave_blockBuilder.php');

echo '<br>' . $blockTopBar
		. 'Specifications Eliminated Warfare: Release Date: December 2015'
		. '<span class="floatRight">Downloaded ' . $value . ' times&nbsp;</span>'
	. $blockBody
		. '<br>Red Alert 2: Yuris Revenge<br>Specifications Eliminated Warfare: Version 1.0<br>'
		. '<br>This is a very simple mod that removes country specifications, along with a few other changes.<br>'
		. 'Full change log bellow.<br>'
		. '<br>Required to play: factory Red Alert 2: Yuri\'s Revenge.<br>'
		. 'To install mod, unpack .zip file and add contents to ra2/yr directory.<br>'
		. '<br>Faction Unit Tech Tree<br>'
		. '<table class="modTable"><tr><td>Allies</td><td>Soviets</td><td>Yuri</td></tr><tr><td class="alignTop">'
			. '<img class="modImage" src="sew/aunittech.png">'
		. '</td><td class="alignTop">'
			. '<img class="modImage" src="sew/sunittech.png">'
		. '</td><td class="alignTop">'
			. '<img class="modImage" src="sew/yunittech.png">'
		. '</td></tr></table>'
		. '<br>Faction Building Tech Tree<br>'
		. '<table class="modTable"><tr><td>Allies</td><td>Soviets</td><td>Yuri</td></tr><tr><td class="alignTop">'
			. '<img class="modImage" src="sew/abuildtech.png">'
		. '</td><td class="alignTop">'
			. '<img class="modImage" src="sew/sbuildtech.png">'
		. '</td><td class="alignTop">'
			. '<img class="modImage" src="sew/ybuildtech.png">'
		. '</td></tr></table>'
		. '<br><br>'
		. '<table class="modTable"><tr><td>Tech Secret Lab Units</td><td>Change Log</td></tr><tr><td>'
			. '<img class="modImage" src="sew/civitech.png">'
		. '</td><td>'
		. '<div class="modTxtBox">'
			. 'Rules change log:'
			. '<br>-Allied country requirements removed for: Americans Paradrop, Sniper, Tank Destroyer, Black Eagle, Grand Cannon.'
			. '<br>-Soviet country requirements removed for: Terrorist, Desolater, Tesla Tank, Demolitions Truck.'
			. '<br>-Resorted and modified Americans Paradrop team for Allies: Consiting of: 6 GI, 4 Navy Seal, 4 Allied Engineer.'
			. '<br>-Added Chrono Commando, Psi-Corp Trooper, Chrono Ivan to Secret Lab Sections Secret Infantry list, to allow better acceces to these units.'
			. '<br>-Allows Force Shield, Chrono Sphere, Iron Curtain, Genetic Mutator to be built\used weither or not super weapons have been disableable from skimish menu.'
			. '<br>-Removed MCVs requirements of Service Depot (Grinder for Yuri) so they can be built straight from weapons factory.'
			. '<br>-Allow transports to be built from weapons factory instead of naval factory.'
			. '<br><br>AI change log:'
			. '<br>-Changed AITriggerTypes in aimd.ini to allow AI to build all contry spacific units.'
			. '<br><br>String change log:'
			. '<br>-Changed the strings: America to Allies, and Russia to Soviets in ra2md.csf.'
			. '<br><br>Graphics change log:'
			. '<br>-Changed Allies, Soviet, Yuri Skermish menu flags to just logos.'
			. '<br><br>Other change log:'
			. '<br>-Added empty ea_wwlogo.bik file to remove EA\Westwood logo.'
		. '</div>'
		. '</td></tr></table>'
		. '<script>function counter(){window.open("grave_counterControl.php?downloadName=sewMod","_blank");}</script>'
		. $downloadBarStart . 'sew/yr_sew.zip" onclick="counter()"' . $downloadBarMid . $downloadBarEnd
	. '<br><br><br>' . $blockEnd;
?>