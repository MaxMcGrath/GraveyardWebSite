<?php

$titles = array("Navigation","Maps","Graphics","Mods","Other");
$links = array("Home","Yuri's Revenge","Yuri's Revenge2","Tiberian Sun","SHP","VXL","3d Models","Ra2 Madness","YR: S.E.W.","Empire Mod","Audio","Permissions","F.A.Q.");

function buildheader($title){
	return '<tr><td class="headertab">' . $title . '</td></tr>';
}

echo '<form action="index.php" method="GET"><table>';

echo '<tr><td class="topbar"></td></tr>';

for($x=0;$x!=count($links);++$x){
	if($x==0){
		echo buildheader($titles[0]);
	} else if($x==1){
		echo buildheader($titles[1]);
	} else if($x==4){
		echo buildheader($titles[2]);
	} else if($x==7){
		echo buildheader($titles[3]);
	} else if($x==10){
		echo buildheader($titles[4]);
	}
	if($x == 1){
		echo '<tr><td class="linktab2">Yuri\'s Revenge</td></tr>';
		echo '<tr><td class="linktab" style="font-size:8px;">page: <input type="submit" id="page" name="page" class="submitbutton" value="1" style="font-size:8px;"><input type="submit" id="page" name="page" class="submitbutton" value="2" style="font-size:8px;"></td></tr>';
		++$x;
	} else {
		echo '<tr><td class="linktab"><input type="submit" id="page" name="page" class="submitbutton" value="' . $links[$x] . '"></td></tr>';
	}

	if($x == 5){
		echo '<tr><td class="linktab" style="font-size:8px;">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="page" name="page" class="submitbutton" value="Allies" style="font-size:8px;"></td></tr>';
		echo '<tr><td class="linktab" style="font-size:8px;">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="page" name="page" class="submitbutton" value="Soviet" style="font-size:8px;"></td></tr>';
		echo '<tr><td class="linktab" style="font-size:8px;">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="page" name="page" class="submitbutton" value="Yuri" style="font-size:8px;"></td></tr>';
		echo '<tr><td class="linktab" style="font-size:8px;">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="page" name="page" class="submitbutton" value="Other" style="font-size:8px;"></td></tr>';
	}
}

echo '<tr><td class="topbar"></td></tr>';

echo '</table></form>';

?>