<?php

require_once('dataArray/grave_mapOneArray.php');

$fileName="grave_MAPcounter.txt";
$valueMapOne=readCounterFile($fileName);

$infoChunk=7;
$maps=[];

require_once('grave_mapComponents.php');

if($twoplayerMaps){$maps=array_merge($maps,$twoMapsYRPage1);}
if($threeplayerMaps){$maps=array_merge($maps,$threeMapsYRPage1);}
if($fourplayerMaps){$maps=array_merge($maps,$fourMapsYRPage1);}
if($fiveplayerMaps){$maps=array_merge($maps,$fiveMapsYRPage1);}
if($sixplayerMaps){$maps=array_merge($maps,$sixMapsYRPage1);}
if($sevenplayerMaps){$maps=array_merge($maps,$sevenMapsYRPage1);}
if($eightplayerMaps){$maps=array_merge($maps,$eightMapsYRPage1);}

echo '<div class="txtCenter"><img src="maps/pack/mappack01.png"><br>'
	. 'For your convenience you can download all 100 maps on this page with one click! This pack has been downloaded: ' . $valueMapOne . ' times.<br><br>'
	. '<table class="newsblockheader"><tr><td class="newsheader">'
	. '<script>function counter(){window.open("grave_counterControl.php?downloadName=mapPackRa2One","_blank");}</script>'
	. '<a href="maps/pack/mappack1.zip" onclick="counter()" download>Click Here To Download 100 Map Pack</a>'
	. '</td></tr></table><br></div>';

//functions are in grave_mapComponents.php
buildRedAlertTwoSearch('Ra2/YR Page 1');
buildMapBlock('Yuri\'s Revenge');

?>