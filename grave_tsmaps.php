<?php

$minimapdir ='maps/mini/';
$fullmapdir ='maps/full/';
$mapdir ='maps/maps/';

$missonmaps=array(//Misson maps
	"MadHQ's Mission","mission.png","A mission map I made for a competition years ago at PPM.<br> Not sure if it works 100%","mission.jpg","mission.zip","temperate"
	);

$twomaps=array(//2 player maps
	"Tournament Rift (2)","tsrift.png","A 2 player tournament style Tiberium Wars map","tsrift.jpg","tsrift.zip","temperate"
	//,"Shivering Isles (2)","isles.png","A 2 player island tournament snow map.","isles.jpg","isles.zip","snow"
	);

$threemaps=array(//3 player maps
	"Ternion Trouble (2-3)","trouble.png","A 3 player symmetrical map","trouble.jpg","trouble.zip","temperate"
	,"Pyroclasm (2-3)","tspyro.png","A Red Alert 3 map remake","tspyro.jpg","tspyro.zip","temperate"
	);

$fourmaps=array(//4 player maps
	"Wrecktropolis (2-4)","tswreck.png","A Tiberium Wars re-map","tswreck.jpg","tswreck.zip","temperate"
	,"Kodiak Down (2-4)","tskodiak.png","A 4 player map with the crashed Kodiak.","tskodiak.jpg","tskodiak.zip","temperate"
	);

$fivemaps=array(//5 player maps
	//"Washington, D.C. (2-5)","whitehouse.png","A 5 player map with made from a google maps satellite image.","whitehouse.jpg","whitehouse.zip","urban"
	//,"No Mans Land (2-5)","noman.png","A symmetrical five player desert map.","noman.jpg","noman.zip","desert"
	);

$sixmaps=array(//6 player maps
	//"Magmageddon (2-6)","mag.png","A Red Alert 3 map remake.","mag.jpg","mag.zip","temperate"
	//,"Sub-Zero (2-6)","zero.png","A Red Alert 3 map remake.","zero.jpg","zero.zip","snow"
	);

$sevenmaps=array(//7 player maps
	//"Requiem (2-7)","requmini.PNG","A symmetrical desert map for 7 players.","requiem.jpg","requm.rar","desert"
	);

$eightmaps=array(//8 player maps
	"Crash Site (2-8)","tstibpit.png","An 8 player map that has all the Tib on the map in the center of the map","tstibpit.jpg","tstibpit.zip","snow"
	//,"Clover Conflict (2-8)","clover.png","A 8 player map that looks like a clover.","clover.jpg","clover.zip","newurban"
	);

session_start();

$_SESSION["misson"]="true";
$_SESSION["twoplayer"]="true";
$_SESSION["threeplayer"]="true";
$_SESSION["fourplayer"]="true";
$_SESSION["fiveplayer"]="true";
$_SESSION["sixplayer"]="true";
$_SESSION["sevenplayer"]="true";
$_SESSION["eightplayer"]="true";
$_SESSION["temperate"]="true";
$_SESSION["snow"]="true";

if($_GET["search"]=="Search"){
	if($_GET["misson"]!='misson'){$_SESSION["misson"]="false";}
	if($_GET["twoplayer"]!='two'){$_SESSION["twoplayer"]="false";}
	if(empty($_GET["threeplayer"])){$_SESSION["threeplayer"]="false";}
	if(empty($_GET["fourplayer"])){$_SESSION["fourplayer"]="false";}
	if(empty($_GET["fiveplayer"])){$_SESSION["fiveplayer"]="false";}
	if(empty($_GET["sixplayer"])){$_SESSION["sixplayer"]="false";}
	if(empty($_GET["sevenplayer"])){$_SESSION["sevenplayer"]="false";}
	if(empty($_GET["eightplayer"])){$_SESSION["eightplayer"]="false";}
	if(empty($_GET["temperate"])){$_SESSION["temperate"]="false";}
	if(empty($_GET["snow"])){$_SESSION["snow"]="false";}
}

$infoChunk=6;

$maps=[];

if($_SESSION["misson"] == "true"){$maps=array_merge($maps,$missonmaps);}
if($_SESSION["twoplayer"] == "true"){$maps=array_merge($maps,$twomaps);}
if($_SESSION["threeplayer"] == "true"){$maps=array_merge($maps,$threemaps);}
if($_SESSION["fourplayer"] == "true"){$maps=array_merge($maps,$fourmaps);}
if($_SESSION["fiveplayer"] == "true"){$maps=array_merge($maps,$fivemaps);}
if($_SESSION["sixplayer"] == "true"){$maps=array_merge($maps,$sixmaps);}
if($_SESSION["sevenplayer"] == "true"){$maps=array_merge($maps,$sevenmaps);}
if($_SESSION["eightplayer"] == "true"){$maps=array_merge($maps,$eightmaps);}

function checkType($type){
	switch($type){
		case "temperate":
			if($_SESSION["temperate"]=="true"){
				return "true";
			}
			break;
		case "snow":
			if($_SESSION["snow"]=="true"){
				return "true";
			}
			break;
	}
	return "false";
}

echo 'Website contains ' . (string)((count($missonmaps)/$infoChunk) + (count($twomaps)/$infoChunk) + (count($threemaps)/$infoChunk) + (count($fourmaps)/$infoChunk) + (count($fivemaps)/$infoChunk) + (count($sixmaps)/$infoChunk) + (count($sevenmaps)/$infoChunk) + (count($eightmaps)/$infoChunk))
	. ' maps. Use can use the checkboxes below to narrow selection.';

echo '<br>'
	. '<form action="index.php" method="GET">'
	. '<div style="border: 1px solid black;color:#9C8F59;display:inline;">Number of players: </div> '
	. '<input type="checkbox" id="twoplayer" name="twoplayer" value="two"' . (($_SESSION["twoplayer"]=="true")?'checked':'') . '> 2 '
	. '<input type="checkbox" id="threeplayer" name="threeplayer" value="three"' . (($_SESSION["threeplayer"]=="true")?'checked':'') . '> 3 '
	. '<input type="checkbox" id="fourplayer" name="fourplayer" value="four"' . (($_SESSION["fourplayer"]=="true")?'checked':'') . '> 4 '
	. '<input type="checkbox" id="fiveplayer" name="fiveplayer" value="five"' . (($_SESSION["fiveplayer"]=="true")?'checked':'') . '> 5 '
	. '<input type="checkbox" id="sixplayer" name="sixplayer" value="six"' . (($_SESSION["sixplayer"]=="true")?'checked':'') . '> 6 '
	. '<input type="checkbox" id="sevenplayer" name="sevenplayer" value="seven"' . (($_SESSION["sevenplayer"]=="true")?'checked':'') . '> 7 '
	. '<input type="checkbox" id="eightplayer" name="eightplayer" value="eight"' . (($_SESSION["eightplayer"]=="true")?'checked':'') . '> 8 '
	. '<div style="border: 1px solid black;color:#9C8F59;display:inline;"> Map Type: </div> '
	. '<input type="checkbox" id="temperate" name="temperate" value="Temperate"' . (($_SESSION["temperate"]=="true")?'checked':'') . '> Temperate '
	. '<input type="checkbox" id="snow" name="snow" value="Snow"' . (($_SESSION["snow"]=="true")?'checked':'') . '> Snow '
	. '<input type="checkbox" id="misson" name="misson" value="misson"' . (($_SESSION["misson"]=="true")?'checked':'') . '> Misson '
	. '<input type="submit" id="search" name="search" value="Search">'
	. '</form><br>';


for($x=0;$x!=count($maps);$x+=$infoChunk){
	if(checkType($maps[$x+5])=="true"){
		if($x>0){
			echo '<br>';
		}
		echo '<table class="newsblockheader" align="center">'
				. '<tr>'
					. '<td class="newsheader">'
						. 'Tiberian Sun: ' . $maps[$x]
					. '</td>'
				. '</tr>'
			. '</table>'
			. '<table class="newsblockbody" align="center" style="height: 125px;">'
				. '<tr>'
					. '<td class="newsbody">'
						. '<table>'
							. '<tr>'
								. '<td class="imagearea" rowspan="2" style="width: 220px;">'//background-color: #3D3D3D;
									. '<a href="' . $fullmapdir . $maps[$x+3] . '" target="_blank"><img class="mapimg" src="' . $minimapdir . $maps[$x+1] . '"></a>'
									. '<br>Click Image To Enlarge'
								. '</td>'
								. '<td class="description" style="height: 80px;">'
									. $maps[$x+2]
								. '</td>'
							. '</tr>'
							. '<tr>'
								. '<td class="downloadbar">'
									. '<a href="' . $mapdir . $maps[$x+4] . '" download>Click Here To Download ' . $maps[$x] . '</a>'
								. '</td>'
							. '</tr>'
						. '</table>'
					. '</td>'
				. '</tr>'
			. '</table>';
	}
}
?>