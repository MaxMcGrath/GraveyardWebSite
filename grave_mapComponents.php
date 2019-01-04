<?php

require_once('grave_cookieJavaScript.php');

$minimapdir ='maps/minij/';
$fullmapdir ='maps/full/';
$mapdir ='maps/maps/';

$missionMaps=true;
$twoplayerMaps=true;
$threeplayerMaps=true;
$fourplayerMaps=true;
$fiveplayerMaps=true;
$sixplayerMaps=true;
$sevenplayerMaps=true;
$eightplayerMaps=true;
$temperateMaps=true;
$snowMaps=true;
$urbanMaps=true;
$desertMaps=true;
$newurbanMaps=true;

$mapCounter=0;

if($_GET["search"]=="Search"){
	if(empty($_GET["mission"])){$missionMaps=false;}
	if(empty($_GET["twoplayer"])){$twoplayerMaps=false;}
	if(empty($_GET["threeplayer"])){$threeplayerMaps=false;}
	if(empty($_GET["fourplayer"])){$fourplayerMaps=false;}
	if(empty($_GET["fiveplayer"])){$fiveplayerMaps=false;}
	if(empty($_GET["sixplayer"])){$sixplayerMaps=false;}
	if(empty($_GET["sevenplayer"])){$sevenplayerMaps=false;}
	if(empty($_GET["eightplayer"])){$eightplayerMaps=false;}
	if(empty($_GET["temperate"])){$temperateMaps=false;}
	if(empty($_GET["snow"])){$snowMaps=false;}
	if(empty($_GET["urban"])){$urbanMaps=false;}
	if(empty($_GET["desert"])){$desertMaps=false;}
	if(empty($_GET["newurban"])){$newurbanMaps=false;}
}

$cookie_name = "GraveLayoutMapsMadHQ";
$layout='List';

if(isset($_COOKIE[$cookie_name])) {
	$layout = $_COOKIE[$cookie_name];
}

$selectLayoutBox=true;
if($layout=='Grid'){$selectLayoutBox=false;}

function checkType($type){
	global $temperateMaps,$snowMaps,$urbanMaps,$desertMaps,$newurbanMaps,$missionMaps;
	switch($type){
		case "temperate":
			if($temperateMaps){
				return true;
			}
			break;
		case "snow":
			if($snowMaps){
				return true;
			}
			break;
		case "urban":
			if($urbanMaps){
				return true;
			}
			break;
		case "desert":
			if($desertMaps){
				return true;
			}
			break;
		case "newurban":
			if($newurbanMaps){
				return true;
			}
			break;
		case "mission":
			if($missionMaps){
				return true;
			}
			break;
	}
	return false;
}

function buildRedAlertTwoSearch($pageNameValue){
	global $twoplayerMaps,$threeplayerMaps,$fourplayerMaps,$fiveplayerMaps,$sixplayerMaps,$sevenplayerMaps,$eightplayerMaps,$temperateMaps,$snowMaps,$urbanMaps,$desertMaps,$newurbanMaps,$cookie_name,$selectLayoutBox;

	echo '<div class="txtCenter">This page contains <span id="mapCount">?</span> maps. Use can use the checkboxes below to narrow selection.'
		. '&nbsp;&nbsp;<div class="mapSearchLabel">Page Layout:</div>&nbsp;<select id="layoutType" onchange="cookie' .  $cookie_name . '()">'
		. '<option value="List"' . (($selectLayoutBox)?" selected":"") . '>List</option>'
		. '<option value="Grid"' . (($selectLayoutBox)?"":" selected") . '>Grid</option>'
		. '</select><br>'
		. getJavascriptCookie($cookie_name,"layoutType")
		. '<form action="index.php" method="GET">'
		. '<input type="hidden" id="page" name="page" value="' . $pageNameValue . '">'
		. '<div class="divInline"><div class="mapSearchLabel">Number of players: </div> '
		. '<input type="checkbox" id="twoplayer" name="twoplayer" value="two"' . (($twoplayerMaps)?' checked':'') . '> 2 '
		. '<input type="checkbox" id="threeplayer" name="threeplayer" value="three"' . (($threeplayerMaps)?' checked':'') . '> 3 '
		. '<input type="checkbox" id="fourplayer" name="fourplayer" value="four"' . (($fourplayerMaps)?' checked':'') . '> 4 '
		. '<input type="checkbox" id="fiveplayer" name="fiveplayer" value="five"' . (($fiveplayerMaps)?' checked':'') . '> 5 '
		. '<input type="checkbox" id="sixplayer" name="sixplayer" value="six"' . (($sixplayerMaps)?' checked':'') . '> 6 '
		. '<input type="checkbox" id="sevenplayer" name="sevenplayer" value="seven"' . (($sevenplayerMaps)?' checked':'') . '> 7 '
		. '<input type="checkbox" id="eightplayer" name="eightplayer" value="eight"' . (($eightplayerMaps)?' checked':'') . '> 8 </div>'
		. '&nbsp;&nbsp;<div class="divInline"><div class="mapSearchLabel"> Map Type: </div> '
		. '<input type="checkbox" id="temperate" name="temperate" value="Temperate"' . (($temperateMaps)?' checked':'') . '> Temperate '
		. '<input type="checkbox" id="snow" name="snow" value="Snow"' . (($snowMaps)?' checked':'') . '> Snow '
		. '<input type="checkbox" id="urban" name="urban" value="Urban"' . (($urbanMaps)?' checked':'') . '> Urban '
		. '<input type="checkbox" id="desert" name="desert" value="Desert"' . (($desertMaps)?' checked':'') . '> Desert '
		. '<input type="checkbox" id="newurban" name="newurban" value="NewUrban"' . (($newurbanMaps)?' checked':'') . '> New Urban </div>'
		. '&nbsp;&nbsp;<input type="submit" id="search" name="search" value="Search">'
		. '</form></div><br>';
}

function buildTibSunSearch($pageNameValue){
	global $missionMaps,$temperateMaps,$snowMaps,$twoplayerMaps,$threeplayerMaps,$fourplayerMaps,$fiveplayerMaps,$sixplayerMaps,$sevenplayerMaps,$eightplayerMaps,$cookie_name,$selectLayoutBox;

	echo '<div class="txtCenter">This page contains <span id="mapCount">?</span> maps. Use can use the checkboxes below to narrow selection.'
		. '&nbsp;&nbsp;<div class="mapSearchLabel">Page Layout:</div>&nbsp;<select id="layoutType" onchange="cookie' .  $cookie_name . '()">'
		. '<option value="List"' . (($selectLayoutBox)?" selected":"") . '>List</option>'
		. '<option value="Grid"' . (($selectLayoutBox)?"":" selected") . '>Grid</option>'
		. '</select><br>'
		. getJavascriptCookie($cookie_name,"layoutType")
		. '<form action="index.php" method="GET">'
		. '<input type="hidden" id="page" name="page" value="Tiberian Sun">'
		. '<div class="divInline"><div class="mapSearchLabel">Number of players: </div> '
		. '<input type="checkbox" id="twoplayer" name="twoplayer" value="two"' . (($twoplayerMaps)?' checked':'') . '> 2 '
		. '<input type="checkbox" id="threeplayer" name="threeplayer" value="three"' . (($threeplayerMaps)?' checked':'') . '> 3 '
		. '<input type="checkbox" id="fourplayer" name="fourplayer" value="four"' . (($fourplayerMaps)?' checked':'') . '> 4 '
		. '<input type="checkbox" id="fiveplayer" name="fiveplayer" value="five"' . (($fiveplayerMaps)?' checked':'') . '> 5 '
		. '<input type="checkbox" id="sixplayer" name="sixplayer" value="six"' . (($sixplayerMaps)?' checked':'') . '> 6 '
		. '<input type="checkbox" id="sevenplayer" name="sevenplayer" value="seven"' . (($sevenplayerMaps)?' checked':'') . '> 7 '
		. '<input type="checkbox" id="eightplayer" name="eightplayer" value="eight"' . (($eightplayerMaps)?' checked':'') . '> 8 </div>'
		. '&nbsp;&nbsp;<div class="divInline"><div class="mapSearchLabel"> Map Type: </div> '
		. '<input type="checkbox" id="temperate" name="temperate" value="Temperate"' . (($temperateMaps)?' checked':'') . '> Temperate '
		. '<input type="checkbox" id="snow" name="snow" value="Snow"' . (($snowMaps)?' checked':'') . '> Snow '
		. '<input type="checkbox" id="mission" name="mission" value="Mission"' . (($missionMaps)?' checked':'') . '> Mission</div>'
		. '&nbsp;&nbsp;<input type="submit" id="search" name="search" value="Search">'
		. '</form><div><br>';
}

function buildMapBlock($mapGameName){
	global $maps,$infoChunk,$minimapdir,$fullmapdir,$mapdir,$mapCounter,$layout;

	require_once('grave_blockBuilder.php');

	$numberOfMaps=count($maps);
	echo '<div class="divCenter">';
	for($x=0;$x<$numberOfMaps;$x+=$infoChunk){
		if(checkType($maps[$x+5])){
			++$mapCounter;
			if($layout == 'List'){
				echo $blockTopBar
						. $mapGameName . ': ' . $maps[$x]
						. '<span class="floatRight">Map Size: ' . $maps[$x + 6] . '&nbsp;&nbsp;</span>'
					. $blockBody
						. $twoColumnTableOne
							. '<a href="' . $fullmapdir . $maps[$x+3] . '" target="_blank"><img class="mapimg" src="' . $minimapdir . $maps[$x+1] . '" alt="Error"></a>'
							. '<br>Click Image To Enlarge'
						. $twoColumnTableTwo
							. $maps[$x+2]
							. $downloadBarStart . $mapdir . $maps[$x+4] . $downloadBarMid . $maps[$x] . $downloadBarEnd
						. $twoColumnTableThree
					. $blockEnd;
			} else {
				echo $layoutGridTitileStart . $layoutGridStart . $maps[$x] . $divTagClose
					. '<br><a href="' . $fullmapdir . $maps[$x+3] . '" target="_blank">'
					. '<img src="' . $minimapdir . $maps[$x+1] .  '" alt="Error" class="imageCenter">'
					. 'Click Image To Enlarge'
					 . '</a>'
					. $bodyLableStart . 'Size: ' . $bodyLableEnd . $maps[$x + 6]
					. $bodyLableStart . 'Description:' . $bodyLableEnd . $maps[$x+2]
					. $downloadBarStart . $mapdir . $maps[$x+4] . $downloadBarEndSml
				. $divTagClose;
			}
		}
	}
	echo '</div>';
	echo '<script>document.getElementById("mapCount").innerHTML="' . $mapCounter . '";</script>';
}

?>