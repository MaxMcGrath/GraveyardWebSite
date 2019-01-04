<?php
$backgroundLoc = "background/";

$backgroundImage = [
	"GGBridge2.jpg","LibertyClose2.jpg","Alert2.jpg","Dropin2.jpg","Liberty2.jpg","SFHarbor2.jpg","finl_etga01502.jpg"
	,"ChronoLegionnaire2.jpg","Desolator2.jpg","Harrier_Strike_Alcatraz2.jpg","Prism_Tanks_Moscow2.jpg","Psychic_Dominator_Egypt2.jpg"
	,"RA2_Chronosphere_Render2.jpg","RA2_Terror_Drones_Grizzly2.jpg","WCD2.jpg"
	,"28hh26b.jpg","alleve.jpg","allgenr.jpg","apoctank.jpg","crazyiven.jpg"
	,"hqdefault.jpg","kari_tanya.jpg","Live_Action_Initiate.jpg","Psychic_Dominator.jpg"
	,"RR2-AKM.jpg","sovtub.jpg","soveve.jpg","sovnavy.jpg","sovprimglobe.jpg"
	,"sovattack.jpg","tanyaenstin.jpg","teslaattack.jpg","yagun.jpg","Yuri_with_Psychic_Beacon_model.jpg"
];//8% opy

$backgroundNumber = rand(0, (count($backgroundImage)-1));

$day = date("j");//20;//
$month = date("n");//9;//
//echo date('d/m/Y == H:i:s');
//Nov 27 Monday	Cyber Monday $centerBanner = 'cybermonbanner.png'; not sure what to do about the date

$leftBanner = 'leftbanner.png';
$centerBanner = 'banner.png';
$rightBanner = 'rightbanner.png';

switch ($month) {//fix all breaks
	case 1:
		if($day <= 5){ //Jan 1 new year
			newYear:{
				$leftBanner = 'leftbannernewyear.png';
				$centerBanner = 'bannernewyear.png';
				$rightBanner = 'rightbannernewyear.png';
				break;
			}
		}
		if($day >= 16 && $day <= 18){ //January 17 Benjamin Franklin Day
			$centerBanner = 'franklinbanner.png';
			break;
		}
		if($day >= 18 && $day <= 20){ //January 19 is Popcorn Day
			$centerBanner = 'popcornbanner.png';
			break;
		}
		if($day >= 21 && $day <= 23){ //January 22 Hot Sauce Day 
			$centerBanner = 'hotsaucebanner.png';
			break;
		}
		if($day >= 23 && $day <= 25){ //January 24 Belly Laugh Day
			$centerBanner = 'laughbanner.png';
			break;
		}
		if($day >= 30 && $day <= 32){ //January 31 Backwards Day
			$leftBanner = 'rightbanner.png';
			$centerBanner = 'backwardbanner.png';
			$rightBanner = 'leftbanner.png';
			break;
		}
		break;
	case 2:
		if($day <= 4){ //Feb 2 groundhog day
			$leftBanner = 'leftbannergroundhog.png';
			$centerBanner = 'bannergroundhog.png';
			$rightBanner = 'rightbannergroundhog.png';
			break;
		}
		if($day >= 4 && $day <= 6){ //February 5 chinese new year
			$centerBanner = 'chinesebanner.png';
			break;
		}
		if($day >= 6 && $day <= 8){ //February 7 e-Day 2.7182818
			$centerBanner = 'edaybanner.png';
			break;
		}
		if($day >= 10 && $day <= 18){ //Feb 14 valentine day
			$centerBanner = 'bannervalentine.png';
			break;
		}
		break;
	case 3:
		if($day >= 9 && $day <= 11){ //March 10 is Mario Day
			$leftBanner = 'marioleftbanner.png';
			$centerBanner = 'mariobanner.png';
			$rightBanner = 'mariorightbanner.png';
			break;
		}
		if($day >= 13 && $day <= 21){ //Mar 17 St. Patrick's Day
			$leftBanner = 'stpatrickleftbanner.png';
			$centerBanner = 'stpatrickbanner.png';
			$rightBanner = 'stpatrickrightbanner.png';
			break;
		}
		break;
	case 4:
		if($day == 1){ //Apr 1 fools day
			$centerBanner = 'bannerfool.png';
			break;
		}
		if($day >= 11 && $day <= 13){ //April 12 is Yuri’s Night
			$centerBanner = 'yuribanner.png';
			break;
		}
		if($day >= 17 && $day <= 19){ //April 18 albert einstein 
			$leftBanner = 'einsteinleftbanner.png';
			$centerBanner = 'einsteinbanner.png';
			break;
		}
		if($day >= 21 && $day <= 23){ //April 22, Earth Day
			$centerBanner = 'einsteinbanner.png';
			break;
		}
		if($day >= 25 && $day <= 27){ //April 26 Alien Day
			$leftBanner = 'alienleftbanner.png';
			$centerBanner = 'alienbanner.png';
			$rightBanner = 'alienrightbanner.png';
			break;
		}
		break;
	case 5:
		if($day >= 1 && $day <= 2){ //May 1 is Batman Day
			$centerBanner = 'batmanbanner.png';
			break;
		}
		if($day >= 3 && $day <= 5){ //May 4 Star Wars Day
			$centerBanner = 'starwarsbanner.png';
			break;
		}
		if($day >= 17 && $day <= 19){ //may 18 Pizza Party Day
			$centerBanner = 'pizzabanner.png';
			break;
		}
		if($day >= 20 && $day <= 22){ //Yoda Day it is on May 21
			$centerBanner = 'yodabanner.png';
			break;
		}
		if($day >= 26 && $day <= 31){ //May 29 Memorial Day
			$centerBanner = 'memorialbanner.png';
			break;
		}
		break;
	case 6:
		if($day >= 1 && $day <= 3){ //June 1 National Doughnut Day
			$centerBanner = 'doughnutbanner.png';
			break;
		}
		if($day >= 4 && $day <= 8){ //Jun 6 d-day
			$leftBanner = 'leftbannerdday.png';
			$centerBanner = 'bannerdday.png';
			$rightBanner = 'rightbannerdday.png';
			break;
		}
		if($day >= 27 && $day <= 29){ //June 28 Tau Day
			$centerBanner = 'taubanner.png';
			break;
		}
		break;
	case 7:
		if($day >= 1 && $day <= 8){ //Jul 4
			$centerBanner = 'banner4th.png';
			$rightBanner = 'rightbanner4th.png';
			break;
		}
		if($day >= 14 && $day <= 16){ //July 15, Gummi Worm Day
			$centerBanner = 'gummibanner.png';
			break;
		}
		if($day >= 29 && $day <= 31){ //July 30 is National Cheesecake Day
			$centerBanner = 'cheesecakebanner.png';
			break;
		}
		break;
	case 9:
		if($day >= 2 && $day <= 6){ //Sep 4 laber day
			$centerBanner = 'bannerlaber.png';
			$rightBanner = 'rightbannerlaber.png';
			break;
		}
		if($day >= 17 && $day <= 21){ //Sep 19 pirate day
			$leftBanner = 'leftbannerpirate.png';
			$centerBanner = 'bannerpirate.png';
			$rightBanner = 'rightbannerpirate.png';
			break;
		}
		break;
	case 10:
		if($day >= 7 && $day <= 11){ //Oct 9 columbus day
			$centerBanner = 'bannercolumbus.png';
		} else { //halloween random images
			$halloweenBanner = rand(0,10);
			$leftBanner = 'halloween' .  $halloweenBanner . 'leftbanner.png';
			$centerBanner = 'halloween' . $halloweenBanner . 'banner.png';
			$rightBanner = 'halloween' . $halloweenBanner . 'rightbanner.png';
			break;
		}
		break;
	case 11:
		if($day >= 10 && $day <= 12){ //Nov 11 Veterans Day
			$centerBanner = 'veteransbanner.png';
			break;
		}
		if($day >= 20 && $day <= 26){ //Nov 23 Thanksgiving Day
			$leftBanner = 'turkeydayleftbanner.png';
			$centerBanner = 'turkeydaybanner.png';
			$rightBanner = 'turkeydayrightbanner.png';
			break;
		}
		break;
	case 12:
		if($day >= 6 && $day <= 8){ //Dec 7 Pearl Harbor Remembrance Day
			$centerBanner = 'harborbanner.png';
			$rightBanner = 'harborrightbanner.png';
			break;
		}
		if($day <= 27){ //Dec 25 xmas
			$leftBanner = 'leftbannerxmas.png';
			$centerBanner = 'bannerxmas.png';
			$rightBanner = 'rightbannerxmas.png';
			break;
		}
		if($day > 29){ //Jan 1 new year
			goto newYear;
		}
		break;
}

//Vars for testing new banners
//$leftBanner = 'halloween10leftbanner.png';
//$centerBanner = 'halloween10banner.png';
//$rightBanner = 'halloween10rightbanner.png';

$leftBanner = '<img class="bannerImageSide" src="image/' . $leftBanner . '">';
$centerBanner = '<img src="image/' . $centerBanner . '">';
$rightBanner = '<img class="bannerImageSide" src="image/' . $rightBanner . '">';

echo '<!DOCTYPE HTML><html lang="en"><head>'
	. '<!--Author:Max McGrath date:Summer 2015 -->'
	. '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" name="viewport" content="width=device-width, initial-scale=1">'
	. '<title>MadHQ\'s Graveyard</title>'
	. '<link rel="stylesheet" type="text/css" href="grave.min.css">'
	. '</head><body ' // oncontextmenu="return false" onselectstart="return false" ondragstart="return false"
	. 'style="background-image:url(\'' . $backgroundLoc . $backgroundImage[$backgroundNumber] . '\');'
	. 'background-repeat:no-repeat;'
	. 'background-size:100% 100%;'
	. 'background-attachment:fixed;'
	. 'background-position:center; '
	. '"><table class="bannerTotal"><tr>'
			. '<td class="bannerSides">' . $leftBanner . '</td>'
			. '<td class="bannerCenter">' . $centerBanner . '</td>'
			. '<td class="bannerSides">' . $rightBanner . '</td>'
		. '</tr></table>';
?>