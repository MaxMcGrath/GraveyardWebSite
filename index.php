<?php

session_start();


if(empty($_SESSION["mode"])){
	$_SESSION["mode"]="Home";
}

$page=trim($_GET["page"]);

if(!empty($page)){
	$_SESSION["mode"]=$page;
}

require('grave_header.php');


echo '<table><tr><td class="lefttd">';

require('grave_leftbar.php');


echo '</td><td class="righttd">';

switch(trim($_SESSION["mode"])){
	case "Home":
		require('grave_news.php');

		break;
	case "Yuri's Revenge":
		require('grave_maps.php');

		break;
	case "1":
		require('grave_maps.php');

		break;
	case "2":
		require('grave_maps2.php');

		break;
	case "Tiberian Sun":
		require('grave_tsmaps.php');

		break;
	case "SHP":
		require('grave_shp.php');

		break;
	case "VXL":
		require('grave_vxl.php');

		break;
	case "Allies":
		$_GET["allied"] = 'Allied';
		require('grave_vxl.php');

		break;
	case "Soviet":
		$_GET["soviet"] = 'Soviet';
		require('grave_vxl.php');

		break;
	case "Yuri":
		$_GET["yuri"] = 'Yuri';
		require('grave_vxl.php');

		break;
	case "Other":
		$_GET["other"] = 'Other';
		require('grave_vxl.php');

		break;
	case "Ra2 Madness":
		require('grave_madness.php');

		break;
	case "YR: S.E.W.":
		require('grave_sew.php');

		break;
	case "Empire Mod":
		require('grave_empire.php');

		break;
	case "SCREEN":
		require('grave_gallery.php');
		break;
	case "Permissions":
		require('grave_permission.php');

		break;
	case "F.A.Q.":
		require('grave_faq.php');
		break;
	case "Mirror":
		require('grave_mirror.php');
		buildModArea();
		break;
	case "3d Models":
		require('grave_3dmodels.php');
		break;
	case "Audio":
		require('grave_audio.php');
		break;
	case "VPL Editor":
		require('grave_vpledit.php');
		break;
}
	
echo '</td><td class="lefttd">';

require('grave_rightbar.php');

echo '</td></tr></table>';

require('grave_footer.php');



?>