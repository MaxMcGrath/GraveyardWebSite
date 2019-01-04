<?php

//CSS Used: linktab,smallTable,textRight,textLeft,qurtIMG

require_once('grave_blockBuilder.php');

echo $blockTopBar
		. 'VPL Editor: version 1.0: Release date: November 2016'
	. $blockBody
		. '<br><a href="tools/vpleditor/vpleditor.html" target="_blank"><table class="linktab"><tr><td class="textRight">'
			. '<img class="qurtIMG" src="tools/vpleditor/images/vplwheel.png">'
		. '</td><td>'
			. 'Open VPL Editor'
			. '<br>(opens in new tab/window)'
			. '<br>HTML5 compliant browser required!' 
		. '</td><td class="textLeft">'
			. '<img class="qurtIMG" src="tools/vpleditor/images/vplwheel.png">'
		. '</td></tr></table></a><br>'
	. $blockEnd . '<br><br>';

echo $blockTopBar
		. 'About the voxel.vpl file'
	. $blockBody
		. '<br><table class="smallTable"><tr><td>'
			. '<img src="tools/vpleditor/images/specular.png">'
		. '</td><td class="textLeft">'
			. 'What is the voxel.vpl file all about?<br>Simply put "Specular Highlight"'
			. '<br><br>&nbsp;&nbsp;What is Specular Highlight?<br>It is an object\'s bright spot from a light source.'
			. '<br><br>FileStructure{<br>&nbsp;&nbsp;&nbsp;&nbsp;RemapPlayerColorStart; //4 bytes<br>&nbsp;&nbsp;&nbsp;&nbsp;RemapPlayerColorEnd; //4 bytes<br>&nbsp;&nbsp;&nbsp;&nbsp;NumberOfSections; //4 bytes<br>&nbsp;&nbsp;&nbsp;&nbsp;Unknown; //4 bytes'
			. '<br>&nbsp;&nbsp;&nbsp;&nbsp;Pallet=Int[256][3]; //756 bytes<br>&nbsp;&nbsp;&nbsp;&nbsp;Sections=Int[32][256]; //8192 bytes<br>}'
		. '</td></tr></table><br><table class="smallTable"><tr><td>'
			. 'How do you know its specular highlight?'
			. '<br>By editing sections 15-31 of allied colors<br>Replacing gtnk.vxl with a sphere<br>(see image to the right)'
			. '<br><br>As seen, the red spot stays on the south-west<br>side no matter what faceing the unit is in.'
		. '</td><td>'
			. '<img src="tools/vpleditor/images/vpleditor06.png">'
		. '</td></tr></table><br><table class="smallTable"><tr><td>'
			. 'Why should I care? It seems as allot of people complain the voxels in RA2/YR being to bright, this VPL data is the cause.'
			. '<br>So, how does the vpl data work/look? Image below shows sections 0-31 (horizontal) of allied colors 80-95 (vertical).'
			. '<br>As you can see the section data almost looks like a texture with a \'hot spot\' that simulates specular highlight.'
			. '<br>The data itself is a array of integer values that acts as a look up table for color index re-direct.'
		. '</td></tr><tr><td>'
			. '<img src="tools/vpleditor/images/vpleditor03.png">'
		. '</td></tr></table><br>'
	. $blockEnd . '<br><br>';

echo $blockTopBar
		. 'About the VPL Editor Version 1.0'
	. $blockBody
		. '<br><table class="smallTable"><tr><td>'
			. '<img src="tools/vpleditor/images/vpleditor00.png">'
		. '</td><td class="textLeft">'
			. '3d veiw information:<br>Simple rendering through three.js<br>Only renders frame upon request'
			. '<br><br>&nbsp;&nbsp;3d view renders:<br>Easy to view cylinder<br>All 256 colors from pallet<br>All 32 sections from VPL file'
		. '</td></tr></table><br><table class="smallTable"><tr><td>'
			. '<br><div class="linktab">Selection and Selection Controls:</div>'
			. 'Color Pallet: This is the color pallet that the Ra2/TS game engine use\'s.'
			. '<br>Colors Selected: These are the colors the user can select to edit their respective VPL data. (radio must be selected to assign)'
			. '<br>Gradient Colors: Colors that are used/selected for VPL data to simulate specular highlight. (radio must be selected to assign)'
			. '<br>Controls: This section allows the user to organize, control, or calculate vpl data.'
		. '</td></tr><tr><td>'
			. '<img src="tools/vpleditor/images/vpleditor01.png">'
		. '</td></tr></table><br><table class="smallTable"><tr><td>'
			. '<br><div class="linktab">Show selected VPL data:</div>'
			. 'Once colors have been assigned into the "Colors Selected" section the user can click the "Show selected VPL" button'
			. '<br>and the existing vpl data will be added to the "Gradient Colors" section and the vpl sections area in the bottom left corner.'
		. '</td></tr><tr><td>'
			. '<img src="tools/vpleditor/images/vpleditor02.png">'
		. '</td></tr></table><br><table class="smallTable"><tr><td>'
			. '<br><div class="linktab">Calculate Gradient:</div>'
			. 'Once colors have been assigned into the "Colors Selected" and "Gradient Colors" sections the user can click the'
			. '<br>"Set Gradient Colors" button to re-calculate the specular highlight for all 32 section of the selected colors.'
			. '<br>The curve for the specular highlight is calculated with a cubic b&#233;zier curve formula.'
		. '</td></tr><tr><td>'
			. '<img src="tools/vpleditor/images/vpleditor04.png">'
		. '</td></tr></table><br><table class="smallTable"><tr><td>'
			. '<img src="tools/vpleditor/images/vpleditor05.png">'
		. '</td><td class="textLeft">'
			. '<div class="linktab">Curve Effect Controls: (left image)</div>Show Curve On/Off - this button allows for the curve to be shown'
			. '<br>Specular Highlight slider - changed the strenght of specular level<br>Veritical Shift slider - shifts the curve down to darken'
			. '<br>Noise Level sliders - adds noise to the curve that is generated<br>Brightness Level slider - modifies the brightness of all selected vpl data'
			. '<br><br><div class="linktab">Curve Generator Controls: (image below)</div>Curve Starting Point slider - modifies the starting point to the curve'
			. '<br>Curve End Point slider - modifies the end point to the curve<br>Curve Control Point sliders - modifies the points that generate the curve'
		. '</td></tr></table>'
		. '<img src="tools/vpleditor/images/vpleditor055.png">'
		. '<br><br><br><table class="smallTable"><tr><td class="textLeft">'
			. 'Saveing Changes:<br>"Save Changes To VPL Data" button must be pressed for<br>changes to be saved.'
			. '<br><br>&nbsp;&nbsp;Editing Brushes: toggle on/off with their respective buttons'
			. '<br>Lighten/Darken Brush - single cell modifier<br> - Brush Strength slider - changes the brush intensity'
			. '<br>Replace Color Brush - single cell modifier<br> - Color select drop down - select a color from the pallet'
		. '</td><td class="textLeft">'
			. '<img src="tools/vpleditor/images/vpleditor07.png">'
		. '</td></tr></table>'
		. '<img src="tools/vpleditor/images/vpleditor075.png"><br><br>'
		. '<br><table class="smallTable"><tr><td>'
			. '<img src="tools/vpleditor/images/vpleditor06.png">'
		. '</td><td class="textLeft">'
			. '<div class="linktab">Recommendation/Observation:</div>The 32 VPL sections are not evenly distributed across a voxel'
			. '<br>The image above shows half the allied colors VPL data changed to red'
			. '<br>The image to the left shows the ingame results'
			. '<br>As you can tell the red color is not covering half the voxel'
			. '<br>So, 50% of the vpl data only effects 25% of the voxel'
		. '</td></tr></table><br><table class="smallTable"><tr><td class="textLeft">'
			. '<div class="linktab">Save/Load:</div>Load Custom VPL File button:<br> - Select custom VPL file, then click the "Load File" button'
			. '<br>Load Custom Color Pallet File button:<br> - Select custom Pallet file, then click the "Load File" button'
			. '<br>Reset VPL To Factory Data button:<br> - Reset VPL data to original game data'
			. '<br>Reset Color To Factory Data button:<br> - Reset VPL data to original game data'
			. '<br>Generate VPL file button:<br> - Click the button to create modified data file (a download link will appear)'
		. '</td><td class="textLeft">'
			. '<img src="tools/vpleditor/images/vpleditor11.png">'
		. '</td></tr></table><br>'
	. $blockEnd . '<br><br>';

?>