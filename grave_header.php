<?php

$backgroundLoc = "background/";
$backgroundImagePNG = [
	"GGBridge2.png","LibertyClose2.png","Alert2.png","Dropin2.png","Liberty2.png","SFHarbor2.png","finl_etga01502.png"
	,"ChronoLegionnaire2.png","Desolator2.png","Harrier_Strike_Alcatraz2.png","Prism_Tanks_Moscow2.png","Psychic_Dominator_Egypt2.png"
	,"RA2_Chronosphere_Render2.png","RA2_Terror_Drones_Grizzly2.png","WCD2.png"
];//8% opy

$backgroundImage = [
	"GGBridge2.jpg","LibertyClose2.jpg","Alert2.jpg","Dropin2.jpg","Liberty2.jpg","SFHarbor2.jpg","finl_etga01502.jpg"
	,"ChronoLegionnaire2.jpg","Desolator2.jpg","Harrier_Strike_Alcatraz2.jpg","Prism_Tanks_Moscow2.jpg","Psychic_Dominator_Egypt2.jpg"
	,"RA2_Chronosphere_Render2.jpg","RA2_Terror_Drones_Grizzly2.jpg","WCD2.jpg"
	,"28hh26b.jpg","alleve.jpg","allgenr.jpg","apoctank.jpg","crazyiven.jpg"
	,"hqdefault.jpg","kari_tanya.jpg","Live_Action_Initiate.jpg","Psychic_Dominator.jpg"
	,"RR2-AKM.jpg","sovattack.jpg","soveve.jpg","sovnavy.jpg","sovprimglobe.jpg"
	,"sovtub.jpg","tanyaenstin.jpg","teslaattack.jpg","yagun.jpg","Yuri_with_Psychic_Beacon_model.jpg"
];//8% opy

$backgroundNumber = rand(0, (count($backgroundImage)-1));

echo '<!DOCTYPE HTML>'
	. '<html lang="en">'
	. '<head>'
	. '<!--Author:Max McGrath date:Summer 2015 -->'
	. '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">'
	. '<title>MadHQ\'s Graveyard</title>'
	. '<link rel="stylesheet" type="text/css" href="grave.css">'
	. '</head>'
	. '<body '
	. 'style="background-image: url(\''
	. $backgroundLoc
	. $backgroundImage[$backgroundNumber]
	. '\');'
	. 'background-repeat: no-repeat;'
	. 'background-size: 100% 100%;'
	. 'background-attachment: fixed;'
	. 'background-position: center; '
	. '">'
	. '<table>'
		. '<tr>'
			. '<td class="leftback">'
			. '</td>'
			. '<td class="pagetitle">'
				. 'MadHQ\'s Graveyard<br>'
			. '</td>'
			. '<td class="rightback">'
			. '</td>'
		. '</tr>'
	. '</table>';

?>