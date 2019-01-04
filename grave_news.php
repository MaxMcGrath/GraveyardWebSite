<?php

//CSS Used: newsTitleTop,leftback,pagetitle,linktab,rightback,titleOpenBar,floatRight

require_once('dataArray/grave_newsArray.php');
require_once('grave_blockBuilder.php');

echo '<table class="newsTitleTop"><tr><td class="leftback"></td><td class="pagetitle">'
	. '<span class="linktab" onclick="openAll()">Open all <span id="newsCount">?</span> news blocks</span></td>'
	. '<td class="rightback"></td></tr></table><br>';

$newsData='';
$newsCounter=0;

//&#x25B2 up &#x25BC down &#9668; left &#9658; right
for($x=0,$newsNum=count($news);$x<$newsNum;$x+=3){
	echo $divTopOpen . ' id="bar" onclick="newsOpen(' . $newsCounter . ')"' . $divTopClose
			. '<div class="titleOpenBar" id="blockHeader' . $x . '">'
				. 'Posted By: ' . $news[$x] . ' Date: ' . $news[$x+1]
				. '<span class="floatRight">&#9668;Click Bar To Open/Close News Block&nbsp;&nbsp;</span>'
			. $divTagClose
		. $blockBody
			. '<div id="blockNews' . $newsCounter . '"></div>'
		. $divTagClose;
	++$newsCounter;
	$newsData .= '"<br>' . $news[$x+2] . '<br><br>"' . ($x==($newsNum-3)?'':',') ;
}

echo '<script>var news=[' . $newsData . '];'
	. 'function newsOpen(newsIndex){var hold = document.getElementById("blockNews" + newsIndex).innerHTML;'
		. 'if(hold==""){document.getElementById("blockNews"+newsIndex).innerHTML=news[newsIndex];'
		. '}else{document.getElementById("blockNews"+newsIndex).innerHTML="";}'
	. '}function openAll(){for(var x=0,newLen=news.length;x<newLen;++x){document.getElementById("blockNews"+x).innerHTML=news[x];}'
	. "}var trackName=['pd_01_Snow_Falling.mp3','pd_02_Santaphobia.mp3','pd_03_Unpack_Your_Present.mp3','pd_04_The_Turkeys_Last_Dance.mp3','pd_05_The_Elve_Song.mp3','pd_06_Heavy_Christmas.mp3','pd_07_Lazy_Claus.mp3','pd_08_Toy_Factory.mp3'];"
	. "function playAudio(number){document.getElementById('xmasMusic').src='other/music/'+trackName[number];document.getElementById('xmasMusic').play();"
	. '}function openXmasAud(){'
		. 'document.getElementById("audioXmassSet").innerHTML="<audio class=\'fullWidth\' id=\'xmasMusic\' controls><source src=\'other/music/pd_01_Snow_Falling.mp3\' type=\'audio/mpeg\'></audio>";'
	. '}function openZombaAud(){document.getElementById("ZombaAud").innerHTML="<audio controls><source src=\'other/sound/zomba2.wav\' type=\'audio/wav\'></audio><br>'
			. '<audio controls><source src=\'other/sound/zomba4.wav\' type=\'audio/wav\'></audio><br><audio controls><source src=\'other/sound/zomba5.wav\' type=\'audio/wav\'></audio>";'
	. '}function openMadHQAud(){document.getElementById("MadHQAud").innerHTML="<audio controls><source src=\'other/sound/madhq11.wav\' type=\'audio/wav\'></audio><br>'
		. '<audio controls><source src=\'other/sound/madhq3.wav\' type=\'audio/wav\'></audio><br><audio controls><source src=\'other/sound/madhq8.wav\' type=\'audio/wav\'></audio>";'
	. '}';

$numberOfNewToShow=2;//count($news)/3;//rand(2,5);//
for($x=0;$x<$numberOfNewToShow;++$x){
	echo 'newsOpen(' . $x . ');';
}

echo 'document.getElementById("newsCount").innerHTML="' . $newsCounter . '";'
	. '</script>';

?>