<?php

//CSS Used: txtNoWrap,topbar,headertab,submitbutton,linktab,crossPointer,galyBox,galyTopBar,galyGreyBack,galyBoxDiv,galyButBox,galyImgPre,galyBotBar,spotLightTop,txtCenter,spotLightMid,spotLightImg,spotLightBottom

require_once('dataArray/grave_menuObject.php');

$leftBar='<form action="index.php" method="GET"><table class="txtNoWrap"><tr><td class="topbar"></td></tr>';
for($menuLoop=0,$menuSize=count($menuObj);$menuLoop<$menuSize;++$menuLoop){
	$leftBar.='<tr><td class="headertab">' . $menuObj[$menuLoop][0] . '</td></tr>';

	for($linkLoop=2,$linkSize=count($menuObj[$menuLoop]);$linkLoop<$linkSize;++$linkLoop){
		switch($menuObj[$menuLoop][$linkLoop]){
			case 'Ra2/YR Page 1':
				$leftBar.='<tr><td class="linktab">'
					//. '&nbsp;&nbsp;&nbsp;&nbsp;Yuri\'s Revenge'
					. '<input type="submit" id="page" name="page" class="submitbutton" value="' . 'Yuri\'s Revenge' . '">'
					. '<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;page:'
					. '<input type="submit" id="page" name="page" class="submitbutton" value="1">'
					. '<input type="submit" id="page" name="page" class="submitbutton" value="2">'
					. '<input type="submit" id="page" name="page" class="submitbutton" value="3">';
				$linkLoop+=3;
				break;
			case 'Voxel':
				$leftBar.='<tr><td class="linktab">'
					. '<input type="submit" id="page" name="page" class="submitbutton" value="' . $menuObj[$menuLoop][$linkLoop++] . '">'
					. '<span class="crossPointer" onclick="openVXLTypes()">&nbsp;&nbsp;&nbsp;&#9660;</span>'
					. '<tr><td><div id="spotForVXLType"></div>'
					. '<script>'
					. 'var vxlTypeList = \'<div class="linktab">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="page" name="page" class="submitbutton" value="Allies"></div>'
					. '<div class="linktab">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="page" name="page" class="submitbutton" value="Soviet"></div>'
					. '<div class="linktab">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="page" name="page" class="submitbutton" value="Yuri"></div>'
					. '<div class="linktab">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="page" name="page" class="submitbutton" value="Civilian"></div>'
					. '<div class="linktab">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="page" name="page" class="submitbutton" value="Other"></div>\';'
					. 'var listOpen=false;'
					. 'function openVXLTypes(){'
					. 'if(listOpen){'
						. 'listOpen=false;'
						. 'document.getElementById("spotForVXLType").innerHTML="";'
					. '}else{'
						. 'listOpen=true;'
						. 'document.getElementById("spotForVXLType").innerHTML=vxlTypeList;'
					. '}}</script>';
				break;
			default:
				$leftBar.='<tr><td class="linktab">';
				if(strcmp($menuObj[$menuLoop][0],'Other Sites')){
					$leftBar.='<input type="submit" id="page" name="page" class="submitbutton" value="' . $menuObj[$menuLoop][$linkLoop++] . '">';
				}else{
					$leftBar.='<a class="submitbutton" href="' . $menuObj[$menuLoop][$linkLoop+1] . '" target="_blank">&nbsp;&nbsp;' . $menuObj[$menuLoop][$linkLoop++] . '</a>';
				}
				break;
		}


		$leftBar.='</td></tr>';
	}
}
$leftBar.='<tr><td class="topbar"></td></tr></table></form>';

require_once('dataArray/grave_screenArray.php');
$fileForSmallVeiw = rand(0, (count($imageName)-1));
$fileNameForDisplay = $imageName[$fileForSmallVeiw][0];

echo $leftBar . '<br><table class="galyBox"><tr><td class="galyTopBar">Image Gallery</td></tr>'
	.'<tr class="galyGreyBack"><td><div class="galyBoxDiv"><form  action="index.php" method="get">'
		.'<input name="number" id="number" type="hidden" value="' . $fileForSmallVeiw . '">'
		.'<input name="page" id="page" type="hidden" value="SCREEN">'
		.'<button type="submit" value="Submit" class="galyButBox">'
			.'<img class="galyImgPre" src="screen/mini/' . $fileNameForDisplay . '">'
		.'</button></form></div>'
	.'</td></tr><tr><td class="galyBotBar">Click image for gallery</td></tr></table><br>';

$numberOfRandom=1;
$spotLightString='<table><tr><td class="spotLightTop">Random SpotLight</td></tr><tr><td class="txtCenter">';

switch($rightBarMode){
	case 'noMap':
		$pickObjects=[1,2];
		break;
	case 'noVXL':
		$pickObjects=[0,2,0];
		break;
	case 'noSHP':
		$pickObjects=[0,1,0];
		break;
	default:
		$pickObjects=[0,1,0,2,0];
}

$objectType=$pickObjects[rand(0,(count($pickObjects)-1))];
$objects=[];
$randomType='';

switch($objectType){
	case 0:
		$randomType='Map Preview';

		switch(rand(0,2)){
			case 0:
				require_once('dataArray/grave_mapOneArray.php');
				$objects=array_merge($objects,$twoMapsYRPage1,$threeMapsYRPage1,$fourMapsYRPage1,$fiveMapsYRPage1,$sixMapsYRPage1,$sevenMapsYRPage1,$eightMapsYRPage1);
				break;
			case 1:
				require_once('dataArray/grave_mapTwoArray.php');
				$objects=array_merge($objects,$twoMapsYRPage2,$threeMapsYRPage2,$fourMapsYRPage2,$fiveMapsYRPage2,$sixMapsYRPage2,$sevenMapsYRPage2,$eightMapsYRPage2);
				break;
			case 2:
				require_once('dataArray/grave_tsmapOneArray.php');
				$objects=array_merge($objects,$missionTSMapsPage1,$twoTSMapsPage1,$threeTSMapsPage1,$fourTSMapsPage1,$fiveTSMapsPage1,$sixTSMapsPage1,$sevenTSMapsPage1,$eightTSMapsPage1);
				break;
		}
		
		$minidir='maps/minij/';
		$fulldir='maps/full/';
		$downloaddir='maps/maps/';

		$infoChunk=7;

		$fileName=4;
		$smallImageName=1;
		$largeImageName=3;

		$maxSize=(count($objects)/$infoChunk)-1;
		break;
	case 1:
		$randomType='Voxel Preview';
		//require_once('dataArray/grave_voxelArray.php');
		require_once('dataArray/grave_voxelArrayJPG.php');
		$minidir='vxl/imgjpg/';//'vxl/image/';
		$fulldir='vxl/image/';
		$downloaddir='vxl/vxl/';

		$infoChunk=9;

		$objects=$vxl;

		$fileName=3;
		$smallImageName=1;
		$largeImageName=1;

		$maxSize=(count($objects)/$infoChunk)-1;
		break;
	case 2:
		$randomType='Shape Preview';
		require_once('dataArray/grave_shapeArray.php');
		$minidir='shp/imgjpg/';
		$fulldir='shp/imgjpg/';
		$downloaddir='shp/shp/';

		$infoChunk=8;
		$objects=$shp;

		$fileName=3;
		$smallImageName=1;
		$largeImageName=1;

		$maxSize=(count($objects)/$infoChunk)-1;
		break;
}

$spotLightString.='<div class="spotLightMid">';

$randomNumbers=[];

while(count($randomNumbers)<$numberOfRandom){
	$objectNumber=rand(0,$maxSize);
	$checkForDuplicate=false;

	for($y=0;$y!=count($randomNumbers);++$y){
		if($objectNumber==$randomNumbers[$y]){
			$checkForDuplicate = true;
			break;
		}
	}

	if(!$checkForDuplicate){
		array_push($randomNumbers,$objectNumber);

		$spotLightString.="<a href='" . $downloaddir . $objects[($objectNumber*$infoChunk)+$fileName] . "' class='linktab'>" . substr($objects[$objectNumber*$infoChunk],0,24) . "</a><br>"
			. "<a href='" . $fulldir . $objects[($objectNumber*$infoChunk)+$largeImageName]  . "' target='_blank'>"
				. "<img src='" . $minidir . $objects[($objectNumber*$infoChunk)+$smallImageName] . "' class='spotLightImg'>" 
			. "</a><br><br>";
	}
}

echo $spotLightString . '</div></td></tr><tr><td class="spotLightBottom">' . $randomType . '</td></tr></table>';

?>