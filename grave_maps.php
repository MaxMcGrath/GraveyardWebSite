<?php

$minimapdir ='maps/mini/';
$fullmapdir ='maps/full/';
$mapdir ='maps/maps/';

$fileName="grave_MAPcounter.txt";
$file = fopen($fileName, "r");
$value=fread($file,filesize($fileName));
fclose($file);

$twomaps=array(//2 player maps
	"Tournament Dune (2)","dune.png","Major face-lift to this map. Old version gone forever!<br>A very simple 2 player tournament desert map.","dune.jpg","dune.zip","desert","75x125"
	,"Isabella Lake (2)
","isabella.png","A 2 player map made from a google maps satellite image.","isabella.jpg","isabella.zip","temperate","75x100"
	,"Factory Canal (2)","fact.png","A 2 player tournament urban map.","fact.jpg","fact.zip","urban","75x75"
	,"Shivering Isles (2)","isles.png","A 2 player island tournament snow map.","isles.jpg","isles.zip","snow","110x145"
	,"Exhausted Isle (2)","exhausted.png","A 2 player island tournament desert map.","exhausted.jpg","exhausted.zip","desert","95x120"
	,"Mirror's Edge (2)","edge.png","A 2 player tournament map.","edge.jpg","edge.zip","newurban","85x110"
	,"Double Apex (2)","apex.png","A 2 player tournament map.","apex.jpg","apex.zip","newurban","81x106"
	,"Cabana Republic (2)","cabana.png","A Red Alert 3 map remake.","cabana.jpg","cabana.zip","temperate","137x124"
	,"Canals of Carnage (2)","carnage.png","A Red Alert 3 map remake.","carnage.jpg","carnage.zip","temperate","75x135"
	,"Blistering Sands (2)","sand.png","Map Originally made for Starcraft2, then remade for RA3 by: Acid_Cr@sh. Now re-made for Ra2.<br>Original map can be found here: <a href='http://www.cnclabs.com/downloads/details.aspx?id=586'>Click here to go to CNCLabs</a>","sand.jpg","sand.zip","temperate","104x108"
	,"Dual Duel (2)","duel.png","Map Originally made for Starcraft2, then remade for RA3 by: Acid_Cr@sh. Now re-made for Ra2.<br>Original map can be found here: <a href='http://www.cnclabs.com/downloads/details.aspx?id=1222'>Click here to go to CNCLabs</a>","duel.jpg","duel.zip","temperate","100x125"
	,"Industrial Strength (2)","strength.png","A Red Alert 3 map remake.","strength.jpg","strength.zip","temperate","108x133"
	,"Haven Conflict (2)","havencon.png","A Red Alert map made for Yuris Revenge.","havencon.jpg","havencon.zip","temperate","100x125"
	,"Keep Off The Grass (2)","grass.png","A Red Alert map made for Yuris Revenge.","grass.jpg","grass.zip","temperate","50x75"
	,"Pond Skirmish (2)","pond.png","A Red Alert map made for Yuris Revenge.","pond.jpg","pond.zip","snow","75x100"
	,"Middle Mayhem (2)","middle.png","A Red Alert map made for Yuris Revenge.","middle.jpg","middle.zip","snow","75x100"
	,"Bay Hostility (2)","hostility.png","A 2 player map basied off the look of Bay of Pigs.","hostility.jpg","hostility.zip","urban","100x75"
	,"The Pentagon (2)","pentagon.png","A 2 player map with made from a google maps satellite image of the Pentagon.","pentagon.jpg","pentagon.zip","urban","75x50"
	,"Infinity Isle (2)","infinity.png","A 2 player Red Alert 3 de-make map.","infinity.jpg","infinity.zip","temperate","92x103"
	,"Siberian Deluge (2)","deluge.png","A 2 player tournament map.","deluge.jpg","deluge.zip","snow","75x75"
	,"Tournament Rift (2)","rift.png","A 2 player tournament style Tiberium Wars map.","rift.jpg","rift.zip","desert","75x100"
	,"Tournament Ridge (2)","ridge.png","A 2 player tournament map.","ridge.jpg","ridge.zip","temperate","100x100"
	,"Tournament Canal (2)","canal.png","A 2 player tournament map set in the farmlands.","canal.jpg","canal.zip","temperate","75x75"
	,"Grinder (2)","map08mini.PNG","A 2 player Red Alert 3 de-make map.","grinder.jpg","grinder.rar","desert","128x127"
	,"Bay War (2)","map10mini.PNG","A 2 player map basied off the look of Bay of Pigs.","baywar.jpg","islwar.rar","urban","128x127"
	,"Black's Big Battle (2)","blkbigmini.PNG","This is one of my favoite maps to play in Tiberium wars.","blackbigbattle.jpg","blkbig.rar","temperate","150x150"
	,"Turtle Village (2)","trlvilgmini.PNG","A map based off a Red Alert 3 map.","turtlevillage.jpg","trlvilg.rar","temperate","128x127"
	,"Urban Bliss (2)","map01mini.png","This is a rather large symmetrical city map for 2 players.","urbanbliss.png","urbanbliss.rar","urban","100x100"
	);

$threemaps=array(//3 player maps
	"Laced River (2-3)","laced.png","A 3 player large symmetrical city map.","laced.jpg","laced.zip","urban","100x150"
	,"Two Ocean Lake (2-3)","twoocean.png","A 3 player map made from a google maps satellite image.","twoocean.jpg","twoocean.zip","snow","102x153"
	,"Batchawana Bay (2-3)","batchawana.png","A Red Alert map made for Yuris Revenge.","batchawana.jpg","batchawana.zip","snow","129x166"
	,"Mantinicus Island (2-3)","mantinicus.png","A 3 player map made from a google maps satellite image.","mantinicus.jpg","mantinicus.zip","snow","100x200"
	,"St. Lawrence Island (2-3)","lawrence.png","A 3 player map made from a google maps satellite image.","lawrence.jpg","lawrence.zip","temperate","136x159"
	,"Island Plateau (2-3)","plateau.png","A Red Alert map made for Yuris Revenge.","plateau.jpg","plateau.zip","temperate","83x158"
	,"Pyroclasm (2-3)","pyro.png","A Red Alert 3 map remake.","pyro.jpg","pyro.zip","temperate","100x125"
	,"Arizona Memorial (2-3)","arazona.png","A 3 player map with made from a google maps satellite image of the Arizona Memorial.","arizona.jpg","arazona.zip","urban","100x100"
	,"Liberty Island (2-3)","libritymini.png","A 3 player map with made from a google maps satellite image of Liberty Island.","liberty.jpg","librity.zip","urban","125x125"
	,"Ore Pit Triad (2-3)","triad.png","A 3 player version of Ore Pit.","triad.jpg","triad.zip","desert","75x100"
	,"Rapid Trio (2-3)","rapid.png","A 3 player tournament map.","rapid.jpg","rapid.zip","temperate","75x100"
	,"Hostile Iceberg (2-3)","hsticbrgmini.PNG","A 3 player snow island map.","hostileiceberg.jpg","hsticbrg.rar","snow","124x131"
	);

$fourmaps=array(//4 player maps
	"Gateway Arch (2-4)","gateway.png","A 4 player map made from a google maps satellite image of The Gateway Arch.","gateway.jpg","gateway.zip","urban","100x125"
	,"The Great Belt (2-4)","belt.png","A 4 player map made from a google maps satellite image.","belt.jpg","belt.zip","snow","116x139"
	,"Big Town USA (2-4)","bigtown.png","A 4 player Temperate Map.","bigtown.jpg","bigtown.zip","temperate","75x150"
	,"Central Channel (2-4)","channel.png","A 4 player Urban Map.","channel.jpg","channel.zip","urban","100x100"
	,"Two Faced (2-4)","faced.png","A 4 player island Urban Map.","faced.jpg","faced.zip","urban","135x141"
	,"Polar Oblong (2-4)","oblong.png","A 4 player island Snow Map.","oblong.jpg","oblong.zip","snow","120x145"
	,"Oppidan Cay (2-4)","oppidan.png","A 4 player island New Urban Map.","oppidan.jpg","oppidan.zip","newurban","124x155"
	,"Volcano (2-4)","volcano.png","A Red Alert map made for Yuris Revenge.","volcano.jpg","volcano.zip","temperate","100x125"
	,"Fair And Square (2-4)","square.png","A symmetrical four player map.","square.jpg","square.zip","urban","125x125"
	,"Ivory Wastelands (2-4)","ivory.png","A Red Alert map made for Yuris Revenge.","ivory.jpg","ivory.zip","snow","75x100"
	,"Sleepy Valley (2-4)","sleepy.png","A Red Alert map made for Yuris Revenge.","sleepy.jpg","sleepy.zip","temperate","75x100"
	,"Harvest Problems (2-4)","hrvprbmini.PNG","*CCC's 2nd place winner*<br>I took 2nd place in the CCC contest with this resizing map.","harvprob.jpg","hrvprb.rar","temperate","200x100"
	,"Barren Wasteland (2-4)","brnwstlndmini.PNG","A symmetrical four player desert map.","barrenwasteland.jpg","brnwstlnd.rar","desert","151x104"
	,"For Liberty (2-4)","librtymini.PNG","The Statue of Liberty is still standing tall and loving the slaughter fest.","forliberty.jpg","librty.rar","urban","120x122"
	,"Fort Urban Square (2-4)","map06mini.PNG","A spacious 4 player new urban map with destroyable bridges for cut off points.<br>Also a great map for Naval battles.","urbnsqur.PNG","mapplay.rar","newurban","100x100"
	,"Frosty Canyon (2-4)","frstcynmini.PNG","A symmetrical four player snow map.","frostycanyon.jpg","frstcyn.rar","snow","128x127"
	,"Highway to Hell (2-4)","hllgihmini.PNG","A pretty looking symmetrical urban map for you 2vs2 lovers.","highwaytohell.jpg","hllgih.rar","urban","100x100"
	,"Sessions Pass (2-4)","map07mini.PNG","A tall 4 player snow map designed for 2vs2 play. Has a few nice choke points.","sesonpas.png","winterpipeline.rar","snow","50x150"
	,"Twin Bridge (2-4)","tenbrgmini.PNG","There is only one path to your enemy, better hope its not defended.","twinbridge.jpg","tenbrg.rar","temperate","130x125"
	,"Wrecktropolis (2-4)","map04mini.PNG","A Tiberium Wars re-map.","wrecko.PNG","wrecko.rar","desert","125x125"
	);

$fivemaps=array(//5 player maps
	"Star Reef (2-5)","star.png","A symmetrical five player map.","star.jpg","star.zip","temperate","141x186"
	,"Ragged Island (2-5)","ragged.png","A 5 player map with made from a google maps satellite image.","ragged.jpg","ragged.zip","desert","120x170"
	,"Swans Island (2-5)","swan.png","A 5 player map with made from a google maps satellite image.","swan.jpg","swan.zip","temperate","122x173"
	,"The Pearl-Qatar (2-5)","qatar.png","A 5 player map with made from a google maps satellite image.","qatar.jpg","qatar.zip","newurban","120x180"
	,"Cranberry Island (2-5)","cranberry.png","A 5 player map with made from a google maps satellite image.","cranberry.jpg","cranberry.zip","temperate","148x167"
	,"Sebkhel el Melah (2-5)","melah.png","A 5 player map with made from a google maps satellite image.","melah.jpg","melah.zip","desert","100x155"
	,"Lake of the Woods (2-5)","woods.png","A 5 player map with made from a google maps satellite image.","woods.jpg","woods.zip","snow","159x116"
	,"Jack-O-War (2-5)","jack.png","Happy Halloween!!!<br>A silly halloween themed 5 player map","jack.jpg","jack.zip","desert","130x190"
	,"Washington, D.C. (2-5)","whitehouse.png","A 5 player map with made from a google maps satellite image.","whitehouse.jpg","whitehouse.zip","urban","127x128"
	,"No Mans Land (2-5)","noman.png","A symmetrical five player desert map.","noman.jpg","noman.zip","desert","125x125"
	,"Marooned ll (2-5)","marooned.png","A Red Alert map made for Yuris Revenge.","marooned.jpg","marooned.zip","temperate","114x141"
	);

$sixmaps=array(//6 player maps
	"BAT-tle (2-6)","bat.png","Happy Halloween!!!<br>A silly halloween themed 6 player map","bat.jpg","bat.zip","temperate","181x114"
	,"Harima-nada (2-6)","nada.png","A 6 player map made from a google maps satellite image.","nada.jpg","nada.zip","temperate","116x139"
	,"Magmageddon (2-6)","mag.png","A Red Alert 3 map remake.","mag.jpg","mag.zip","temperate","146x169"
	,"Sub-Zero (2-6)","zero.png","A Red Alert 3 map remake.","zero.jpg","zero.zip","snow","104x129"
	,"Hazard Island (2-6)","hazard.png","A map inspired by the shape of a hazard symbol.","hazard.jpg","hazard.zip","temperate","118x143"
	,"Final Twist (2-6)","spiral.png","A spiral map you can get lost in. (Path-finding doesnt work great.)","twist.jpg","spiral.zip","temperate","100x150"
	,"Mechanical Island (2-6)","mechanical.png","A map inspired by the shape of a wrench.","mechanical.jpg","mechanical.zip","urban","128x127"
	,"Dead Six (2-6)","map02mini.png","This is a huge symmetrical 6 player snow map based off of C&C3's Dead Six map.","deadsix.png","deadsix.rar","snow","125x125"
	,"Hour Glass (2-6)","hurgllmini.PNG","A map thats great for 2vs2 or 3vs3.","hourglass.jpg","hurgll.rar","temperate","142x113"
	,"Mount Mirage (2-6)","mntmrigmini.PNG","A symmetrical desert map for 6 players.","mountmirage.jpg","mntmrig.rar","desert","125x125"
	);

$sevenmaps=array(//7 player maps
	"Inland Sea (2-7)

","inland.png","A 7 player map made from a google maps satellite image.","inland.jpg","inland.zip","desert","165x155"
	,"Ring Of Death (2-7)

","ring.png","A symmetrical map for 7 players.","ring.jpg","ring.zip","snow","116x162"
	,"Heptagon Havoc (2-7)","heptagon.png","A symmetrical island map for 7 players.","heptagon.jpg","heptagon.zip","temperate","132x183"
	,"Tyrrhenian Sea (2-7)
","tyrrhenian.png","A 7 player map made from a google maps satellite image.","tyrrhenian.jpg","tyrrhenian.zip","snow","71x206"
	,"Nova Scotia (2-7)","nova.png","A 7 player map made from a google maps satellite image.","nova.jpg","nova.zip","temperate","140x140"
	,"Ceram Sea (2-7)
","ceram.png","A 7 player map made from a google maps satellite image.","ceram.jpg","ceram.zip","temperate","195x95"
	,"Requiem (2-7)","requmini.PNG","A symmetrical desert map for 7 players.","requiem.jpg","requm.rar","desert","129x126"
	);

$eightmaps=array(//8 player maps
	"Phantom Island (2-8)","ghost.png","Happy Halloween!!!<br>A silly halloween themed 8 player map","ghost.jpg","ghost.zip","snow","122x173"
	,"Ridge Carnage (2-8)","ridgecarnagev2.png","Ridge Carnage has gotten a face lift!<br><a href='maps/full/ridgecarnage.jpg'>Click Here to see original map</a><br><a href='maps/maps/rdgcrng.rar' download>Click Here to download original map</a>","ridgecarnagev2.jpg","ridgecarnagev2.zip","desert","119x166"
	,"Octennial Frost (2-8)","frost.png","A 8 player symmetrical map","frost.jpg","frost.zip","snow","200x200"
	,"Clover Conflict (2-8)","clover.png","A 8 player map that looks like a clover.","clover.jpg","clover.zip","newurban","145x145"
	,"New New York (2-8)","big.png","A very large urban map for 8 players.","big.jpg","big.zip","urban","100x399"
	,"Stadium (2-8)","stadium.png","A large 8 player map with each starting location being a stadium.","stadium.jpg","stadium.zip","urban","200x200"
	,"Farm Land (2-8)","frmlndmini2.PNG","*CCCII's 1st place winner*<br>I took 1st place in the CCCII contest with this monstrous 8 player map.","farmland.jpg","frmlnd.rar","temperate","399x100"
	,"CrossHair (2-8)","crsshrnmini.PNG","A frosty delight for 8 players.","crosshair.jpg","crosshair.rar","snow","128x127"
	,"Battle Royal (2-8)","map05mini.PNG","This is a huge symmetrical 8 player urban map, great for 2vs2vs2vs2.","urbanbattel.PNG","urbanbattle.rar","urban","125x125"
	,"Hex Bay (2-8)","map09mini.PNG","An 8 player map basied off the look of Bay of Pigs.","hexbay.jpg","hexbay.rar","urban","135x140"
	,"Mirage Oasis (2-8)","map03mini.png","A large desert map for 8 players, tons of ore to collect, made for 4vs4.","mirageoasis.PNG","mirageoasis.rar","desert","125x100"
	,"Ore Pit (2-8)","map11mini.PNG","An 8 player map that has all the ore on the map in the center of the map.","orepit.jpg","orepit.rar","desert","128x127"
	);

session_start();

$_SESSION["twoplayer"]="true";
$_SESSION["threeplayer"]="true";
$_SESSION["fourplayer"]="true";
$_SESSION["fiveplayer"]="true";
$_SESSION["sixplayer"]="true";
$_SESSION["sevenplayer"]="true";
$_SESSION["eightplayer"]="true";
$_SESSION["temperate"]="true";
$_SESSION["snow"]="true";
$_SESSION["urban"]="true";
$_SESSION["desert"]="true";
$_SESSION["newurban"]="true";

if($_GET["search"]=="Search"){
	if($_GET["twoplayer"]!='two'){$_SESSION["twoplayer"]="false";}
	if(empty($_GET["threeplayer"])){$_SESSION["threeplayer"]="false";}
	if(empty($_GET["fourplayer"])){$_SESSION["fourplayer"]="false";}
	if(empty($_GET["fiveplayer"])){$_SESSION["fiveplayer"]="false";}
	if(empty($_GET["sixplayer"])){$_SESSION["sixplayer"]="false";}
	if(empty($_GET["sevenplayer"])){$_SESSION["sevenplayer"]="false";}
	if(empty($_GET["eightplayer"])){$_SESSION["eightplayer"]="false";}
	if(empty($_GET["temperate"])){$_SESSION["temperate"]="false";}
	if(empty($_GET["snow"])){$_SESSION["snow"]="false";}
	if(empty($_GET["urban"])){$_SESSION["urban"]="false";}
	if(empty($_GET["desert"])){$_SESSION["desert"]="false";}
	if(empty($_GET["newurban"])){$_SESSION["newurban"]="false";}
}

$infoChunk=7;

$maps=[];

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
		case "urban":
			if($_SESSION["urban"]=="true"){
				return "true";
			}
			break;
		case "desert":
			if($_SESSION["desert"]=="true"){
				return "true";
			}
			break;
		case "newurban":
			if($_SESSION["newurban"]=="true"){
				return "true";
			}
			break;
	}
	return "false";
}

echo '<img src="maps/pack/mappack1.png"><br>'
	. 'For your convenience you can download all 100 maps on this page with one click! This pack has been downloaded: ' . $value . ' times.<br><br>'
	. '<table class="newsblockheader" align="center" ><tr><td class="newsheader" style="font-size:20px; ">'//background-color:#3D3D3D;
	. '<script>function counter(){window.open("http://zombapro.ppmsite.com/grave_mapcounter.php","_blank");}</script>'
	. '<a href="maps/pack/mappack1.zip" onclick="counter()" download>Click Here To Download 100 Map Pack</a>'
	. '</td></tr></table><br><br>';

echo 'This page can contain ' . (string)((count($twomaps)/$infoChunk) + (count($threemaps)/$infoChunk) + (count($fourmaps)/$infoChunk) + (count($fivemaps)/$infoChunk) + (count($sixmaps)/$infoChunk) + (count($sevenmaps)/$infoChunk) + (count($eightmaps)/$infoChunk))
	. ' maps. Use can use the checkboxes below to narrow selection.';

echo '<br>'
	. '<form action="index.php" method="GET">'
	. '<input type="hidden" id="page" name="page" value="1"'
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
	. '<input type="checkbox" id="urban" name="urban" value="Urban"' . (($_SESSION["urban"]=="true")?'checked':'') . '> Urban '
	. '<input type="checkbox" id="desert" name="desert" value="Desert"' . (($_SESSION["desert"]=="true")?'checked':'') . '> Desert '
	. '<input type="checkbox" id="newurban" name="newurban" value="NewUrban"' . (($_SESSION["newurban"]=="true")?'checked':'') . '> New Urban '
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
						. 'Yuri\'s Revenge: ' . $maps[$x]
						. '<div style="float: right;">Map Size: ' . $maps[$x + 6] . '&nbsp;&nbsp;</div>'
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