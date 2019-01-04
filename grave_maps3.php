<?php

require_once('dataArray/grave_mapThreeArray.php');

//$fileName="grave_MAP2counter.txt";
//$valueMapTwo=readCounterFile($fileName);

$infoChunk=7;
$maps=[];

require_once('grave_mapComponents.php');

if($twoplayerMaps){$maps=array_merge($maps,$twoMapsYRPage3);}
if($threeplayerMaps){$maps=array_merge($maps,$threeMapsYRPage3);}
if($fourplayerMaps){$maps=array_merge($maps,$fourMapsYRPage3);}
if($fiveplayerMaps){$maps=array_merge($maps,$fiveMapsYRPage3);}
if($sixplayerMaps){$maps=array_merge($maps,$sixMapsYRPage3);}
if($sevenplayerMaps){$maps=array_merge($maps,$sevenMapsYRPage3);}
if($eightplayerMaps){$maps=array_merge($maps,$eightMapsYRPage3);}

/*
echo '<div class="txtCenter"><img src="maps/pack/mappack02.png"><br>'
	. 'For your convenience you can download all 100 maps on this page with one click! This pack has been downloaded: ' . $valueMapTwo . ' times.<br><br>'
	. '<table class="newsblockheader"><tr><td class="newsheader">'
	. '<script>function counter(){window.open("grave_counterControl.php?downloadName=mapPackRa2Two","_blank");}</script>'
	. '<a href="maps/pack/mappack2.zip" onclick="counter()" download>Click Here To Download 100 Map Pack</a>'
	. '</td></tr></table><br></div>';
*/

//functions are in grave_mapComponents.php
buildRedAlertTwoSearch('Ra2/YR Page 3');
buildMapBlock('Yuri\'s Revenge');

?>