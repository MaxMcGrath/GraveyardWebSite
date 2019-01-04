<?php

require_once('dataArray/grave_mapOneArray.php');
require_once('dataArray/grave_mapTwoArray.php');
require_once('dataArray/grave_mapThreeArray.php');

//$fileName="grave_MAPcounter.txt";
//$value=readCounterFile($fileName);

$infoChunk=7;
$maps=[];

require_once('grave_mapComponents.php');

if($twoplayerMaps){$maps=array_merge($maps,$twoMapsYRPage3,$twoMapsYRPage2,$twoMapsYRPage1);}
if($threeplayerMaps){$maps=array_merge($maps,$threeMapsYRPage3,$threeMapsYRPage2,$threeMapsYRPage1);}
if($fourplayerMaps){$maps=array_merge($maps,$fourMapsYRPage3,$fourMapsYRPage2,$fourMapsYRPage1);}
if($fiveplayerMaps){$maps=array_merge($maps,$fiveMapsYRPage3,$fiveMapsYRPage2,$fiveMapsYRPage1);}
if($sixplayerMaps){$maps=array_merge($maps,$sixMapsYRPage3,$sixMapsYRPage2,$sixMapsYRPage1);}
if($sevenplayerMaps){$maps=array_merge($maps,$sevenMapsYRPage3,$sevenMapsYRPage2,$sevenMapsYRPage1);}
if($eightplayerMaps){$maps=array_merge($maps,$eightMapsYRPage3,$eightMapsYRPage2,$eightMapsYRPage1);}

//functions are in grave_mapComponents.php
buildRedAlertTwoSearch('Yuri\'s Revenge');
buildMapBlock('Yuri\'s Revenge');

?>