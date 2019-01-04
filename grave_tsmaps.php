<?php

//need to fix mission search

require_once('dataArray/grave_tsmapOneArray.php');

$infoChunk=7;
$maps=[];

require_once('grave_mapComponents.php');

if($missionMaps){$maps=array_merge($maps,$missionTSMapsPage1);}
if($twoplayerMaps){$maps=array_merge($maps,$twoTSMapsPage1);}
if($threeplayerMaps){$maps=array_merge($maps,$threeTSMapsPage1);}
if($fourplayerMaps){$maps=array_merge($maps,$fourTSMapsPage1);}
if($fiveplayerMaps){$maps=array_merge($maps,$fiveTSMapsPage1);}
if($sixplayerMaps){$maps=array_merge($maps,$sixTSMapsPage1);}
if($sevenplayerMaps){$maps=array_merge($maps,$sevenTSMapsPage1);}
if($eightplayerMaps){$maps=array_merge($maps,$eightTSMapsPage1);}

//functions are in grave_mapComponents.php
buildTibSunSearch('Tiberian Sun');
buildMapBlock('Tiberian Sun');

?>