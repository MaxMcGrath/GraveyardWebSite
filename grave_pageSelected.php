<?php

$page=trim($_GET["page"]);
$modeSelect="Home";

if(!empty($page)){
	$modeSelect=$page;	
}

switch($modeSelect){

	case "Home":
		require_once('grave_news.php');
		break;
	case "Yuri's Revenge":
		require_once('grave_allYRMap.php');
		break;
	case "Ra2/YR Page 1":
	case "1":
		require_once('grave_maps.php');
		break;
	case "Ra2/YR Page 2":
	case "2":
		require_once('grave_maps2.php');
		break;
	case "Ra2/YR Page 3":
	case "3":
		require_once('grave_maps3.php');
		break;
	case "Tiberian Sun":
		require_once('grave_tsmaps.php');
		break;
	case "SHP":
	case "Shape":
		require_once('grave_shp.php');
		break;
	case "VXL":
	case "Voxel":
		require_once('grave_vxl.php');
		break;
	case "Allies":
		$_GET["allied"]='Allied';
		require_once('grave_vxl.php');
		break;
	case "Soviet":
		$_GET["soviet"]='Soviet';
		require_once('grave_vxl.php');
		break;
	case "Yuri":
		$_GET["yuri"] = 'Yuri';
		require_once('grave_vxl.php');
		break;
	case "Civilian":
		$_GET["civilian"]='Civilian';
		require_once('grave_vxl.php');
		break;
	case "Other":
		$_GET["other"]='Other';
		require_once('grave_vxl.php');
		break;
	case "Ra2 Alliances":
		require_once('grave_alliances.php');
		break;
	case "Ra2 Madness":
		require_once('grave_madness.php');
		break;
	case "YR: S.E.W.":
		require_once('grave_sew.php');
		break;
	case "Empire Mod":
		require_once('grave_empire.php');
		break;
	case "SCREEN":
		require_once('grave_gallery.php');
		break;
	case "Permissions":
	case "F.A.Q.":
	case "About":
		require_once('grave_blockBuilder.php');
		require_once('grave_permission.php');
		require_once('grave_faq.php');
		break;
	case "3d Models":
		require_once('grave_3dmodels.php');
		break;
	case "Audio":
		require_once('grave_audio.php');
		break;
	case "Tools":
		require_once('grave_vpledit.php');
		require_once('grave_debris.php');
		break;
	case "VPL Editor":
		require_once('grave_vpledit.php');
		break;
	case "Debris Maker":
		require_once('grave_debris.php');
		break;
	case "All":
		require_once('grave_news.php');
		require_once('grave_maps.php');
		require_once('grave_maps2.php');
		require_once('grave_tsmaps.php');
		require_once('grave_shp.php');
		require_once('grave_vxl.php');
		require_once('grave_alliances.php');
		require_once('grave_madness.php');
		require_once('grave_sew.php');
		require_once('grave_empire.php');
		require_once('grave_gallery.php');//may need to remove
		require_once('grave_blockBuilder.php');
		require_once('grave_permission.php');
		require_once('grave_faq.php');
		require_once('grave_3dmodels.php');
		require_once('grave_audio.php');
		require_once('grave_vpledit.php');
		require_once('grave_debris.php');
		require_once('grave_vpledit.php');
		require_once('grave_debris.php');
		break;
}

?>