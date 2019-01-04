<?php

//CSS Used: mapSearchLabel,txtCenter,floatRight,vxlimg

$imagedir='vxl/imgjpg/';//'vxl/image/';
$vxldir='vxl/vxl/';

//require_once('dataArray/grave_voxelArray.php');
require_once('dataArray/grave_voxelArrayJPG.php');
require_once('grave_blockBuilder.php');

function checkUnitType($vxlType){
	global $aerialVoxel,$groundVoxel,$navalVoxel;
	switch($vxlType){
		case "Aerial":
			if($aerialVoxel){
				return true;
			}
			break;
		case "Ground":
			if($groundVoxel){
				return true;
			}
			break;
		case "Naval":
			if($navalVoxel){
				return true;
			}
			break;
	}
	return false;
}

$pageVal=$_GET['page'];

$alliedVoxel=false;
$sovietVoxel=false;
$yuriVoxel=false;
$civilianVoxel=false;
$otherVoxel=false;
$aerialVoxel=true;
$groundVoxel=true;
$navalVoxel=true;

if($_GET['search']=='Search' && $pageVal=='VXL'){
	if(!empty($_GET["allied"])){$alliedVoxel=true;}
	if(!empty($_GET["soviet"])){$sovietVoxel=true;}
	if(!empty($_GET["yuri"])){$yuriVoxel=true;}
	if(!empty($_GET["civilian"])){$civilianVoxel=true;}
	if(!empty($_GET["other"])){$otherVoxel=true;}
	if(empty($_GET["aerial"])){$aerialVoxel=false;}
	if(empty($_GET["ground"])){$groundVoxel=false;}
	if(empty($_GET["naval"])){$navalVoxel=false;}
}

if($pageVal=='Allies' || $pageVal=='Voxel'){$alliedVoxel=true;}
if($pageVal=='Soviet' || $pageVal=='Voxel'){$sovietVoxel=true;}
if($pageVal=='Yuri' || $pageVal=='Voxel'){$yuriVoxel=true;}
if($pageVal=='Civilian' || $pageVal=='Voxel'){$civilianVoxel=true;}
if($pageVal=='Other' || $pageVal=='Voxel'){$otherVoxel=true;}

$cookie_name = "GraveLayoutMadHQ";
$layout='List';

if(isset($_COOKIE[$cookie_name])) {
	$layout = $_COOKIE[$cookie_name];
}

$selectLayoutBox=true;
if($layout=='Grid'){$selectLayoutBox=false;}

echo '<div class="txtCenter">This page contains <span id="voxelCount">?</span> Voxels. Use can use the checkboxes below to narrow selection.'
	. '&nbsp;&nbsp;<div class="mapSearchLabel">Page Layout:</div>&nbsp;<select id="layoutType" onchange="setCookieLayout()">'
	. '<option value="List"' . (($selectLayoutBox)?" selected":"") . '>List</option>'
	. '<option value="Grid"' . (($selectLayoutBox)?"":" selected") . '>Grid</option>'
	. '</select><br>'
	. '<script>function setCookieLayout() {'
	. 'var d = new Date();'
	. 'var exdays=30;'
	. 'var type = document.getElementById("layoutType").value;'
	. 'd.setTime(d.getTime() + (exdays*24*60*60*1000));'
	. 'var expires = "expires="+ d.toUTCString();'
	. 'document.cookie = "' . $cookie_name . '" + "=" + type + ";" + expires + ";path=/";'
	. 'location.reload();'
	. '}</script>'
	. '<form action="index.php" method="GET">'
	. '<input type="hidden" id="page" name="page" value="VXL">'
	. '<div class="divInline"><div class="mapSearchLabel">Voxel Faction: </div>'
	. '<input type="checkbox" name="allied" value="Allied"' . (($alliedVoxel)?' checked':'') . '> Allied '
	. '<input type="checkbox" name="soviet" value="Soviet"' . (($sovietVoxel)?' checked':'') . '> Soviet '
	. '<input type="checkbox" name="yuri" value="Yuri"' . (($yuriVoxel)?' checked':'') . '> Yuri '
	. '<input type="checkbox" name="civilian" value="Civilian"' . (($civilianVoxel)?' checked':'') . '> Civilian '
	. '<input type="checkbox" name="other" value="Other"' . (($otherVoxel)?' checked':'') . '> Other </div>'
	. '&nbsp;&nbsp;<div class="divInline"><div class="mapSearchLabel">Voxel Type: </div>'
	. '<input type="checkbox" name="aerial" value="Aerial"' . (($aerialVoxel)?' checked':'') . '> Aerial '
	. '<input type="checkbox" name="ground" value="Ground"' . (($groundVoxel)?' checked':'') . '> Ground '
	. '<input type="checkbox" name="naval" value="Naval"' . (($navalVoxel)?' checked':'') . '> Naval </div>'
	. '&nbsp;&nbsp;<input type="submit" name="search" value="Search">'
	. '</form></div><br>';

$numberOfVoxel=count($vxl);
$voxelCounter=0;

for($x=0;$x<$numberOfVoxel;$x+=9){
	$buildBlock=false;
	switch($vxl[$x+7]){
		case "Allied":
			if($alliedVoxel){
				if(checkUnitType($vxl[$x+8])){
					$buildBlock=true;
				}
			}
			break;
		case "Soviet":
			if($sovietVoxel){
				if(checkUnitType($vxl[$x+8])){
					$buildBlock=true;
				}
			}
			break;
		case "Yuri":
			if($yuriVoxel){
				if(checkUnitType($vxl[$x+8])){
					$buildBlock=true;
				}
			}
			break;
		case "Civilian":
			if($civilianVoxel){
				if(checkUnitType($vxl[$x+8])){
					$buildBlock=true;
				}
			}
			break;
		case "Other":
			if($otherVoxel){
				if(checkUnitType($vxl[$x+8])){
					$buildBlock=true;
				}
			}
			break;
	}

	if($buildBlock){
		++$voxelCounter;
		if($layout == 'List'){
			echo $blockTopBar
				. '<div class="txtCenter">' . $vxl[$x+7] . ': ' . $vxl[$x]
				. '<span class="floatRight">Type: ' . $vxl[$x+8] . ' Unit</span></div>'
			. $blockBody
				. $threeColumnTableOne
					. '<img class="vxlimg" src="' . $imagedir . $vxl[$x+1] . '">'
					. '<br>Hover cursor over image to enlarge'
				. $threeColumnTableTwo
					. $vxl[$x+2] . ' includes:'
					. '<br><img src="image/' . (($vxl[$x+4]=="0")?'no':'yes') . '.png">VXL/HVA'
					. '<br><img src="image/' . (($vxl[$x+5]=="0")?'no':'yes') . '.png">Cameo'
					. '<br><img src="image/' . (($vxl[$x+6]=="0")?'no':'yes') . '.png">Code'
					. $downloadBarStart . $vxldir . $vxl[$x+3] . $downloadBarMid . $vxl[$x] . $downloadBarEnd
				. $threeColumnTableThree
					. '<a href="#" onclick="window.open(\'vxlrender/vxlrender.php?zipName=' . $vxl[$x+3] . '\', \'newwindow\', \'width=500, height=500\'); return false;">'
						. '<img src="image/render.png"><br>(Opens in new window/tab)'
					 . '</a>'
				. $threeColumnTableFour
			. $blockEnd;
		} else {
			echo $layoutGridTitileStart . $layoutGridStart . $vxl[$x] . $divTagClose
				. '<br><a href="#" onclick="window.open(\'vxlrender/vxlrender.php?zipName=' . $vxl[$x+3] . '\', \'newwindow\', \'width=500, height=500\'); return false;">'
				. '<img src="/vxl/imgjpg/' . $vxl[$x+1] .  '" alt="Error" class="imageCenter">'
				. 'Click for Web3D Render'
				 . '</a>'
				. $bodyLableStart . 'Description:' . $bodyLableEnd . $vxl[$x+2]
				. $bodyLableStart . 'Contains:' . $bodyLableEnd . '<img src="image/' . (($vxl[$x+4]=="0")?'no':'yes') . '.png">VXL/HVA&nbsp;&nbsp;'
				. '<img src="image/' . (($vxl[$x+5]=="0")?'no':'yes') . '.png">Cameo&nbsp;&nbsp;'
				. '<img src="image/' . (($vxl[$x+6]=="0")?'no':'yes') . '.png">Code'
				. $downloadBarStartSml . $vxldir . $vxl[$x+3] . $downloadBarEndSml
			. $divTagClose;
		}
	}
}

echo '<script>document.getElementById("voxelCount").innerHTML="' . $voxelCounter . '";</script>';

?>