<?php

//CSS Used: linktab,textRight,textLeft,smallTable,downloadRedText,smallTable

require_once('grave_blockBuilder.php');

echo $blockTopBar
		. 'Debris Maker version 1.0, Created: November 2016, Updated: Not Yet'
	. $blockBody
		. '<a href="tools/debris/debris.html" target="_blank"><table class="linktab">'
		. '<tr><td class="textRight"><img src="tools/debris/images/debris00.png"></td><td>'
			. '<div>Open Debris Maker</div>'
			. '<div>(opens in new tab/window)</div>'
			. '<br><div>HTML5 compliant browser required!</div>'
		. '</td><td class="textLeft"><img src="tools/debris/images/debris00.png"></td></tr></table></a>'
	. $blockEnd . '<br>';

echo $blockTopBar
		. 'About Debris Maker version 1.0'
	. $blockBody
		. '<br><table class="smallTable"><tr><td>'
			. 'This tool may be the cutest tool ever made. The idea of this<br>tool is to create a sprite debris for exploding buildings or units.<br><br><br>'
			. 'As with all tools, it is still in development. I have released<br>it as I feel it is complete enough for others to use.<br>'
		. '</td><td>'
			. '<img src="tools/debris/images/debris02.png">'
		. '</td></tr></table><br>'
			. 'Along with this release, I have released a sample pack of test objects I used while developing. <a href="tools/debris/sample.zip" download><span class="downloadRedText">Click To Download</span></a><br>'
			. 'To use the samples, download and unzip, then load the object text files to have a look.<br><br>'
			. '<img src="tools/debris/images/debris01.png"><br><br>'
			. '<div class="linktab">Current Features</div><br>'
		. '<table class="smallTable"><tr><td>'
			. '<img src="tools/debris/images/debris03.png">'
		. '</td><td class="textLeft"><br>'
			. 'Add Cube - While in this mode you can build a scene with the select color from on the pallet.<br><br>'
			. 'Delete Cube - In this mode the user can select a cube to be deleted.<br><br>'
			. 'Paint Cube - This mode will allow the use to paint a cube with a selected color.<br><br>'
			. 'Nudge All Cube\'s: Left, Right, Forword, Back - Moves the built object in the selected direction.<br><br>'
			. 'New Scene - This button will clear the scene.<br><br>'
			. 'Save Scene - This button will generate a link to download a text file to reuse scene later.<br><br>'
			. 'Select file to load - This will allow the user to load a previously saved scene.<br><br>'
		. '</td></tr></table><br><table class="smallTable"><tr><td class="textLeft"><br>'
			. 'Click for Preview - Create a animated preview of the debris.<br><br>'
			. 'Rotate on: X Axis, Y Axis, Z Axis - Rotates on selected axis during animation.<br><br>'
			. 'Scale - Allows the user to modify the scale of the object.<br><br>'
			. 'Generate download link - Creates a link to download the debris shp file.<br><br>'
		. '</td><td>'
			. '<img src="tools/debris/images/debris04.png">'
		. '</td></tr></table>'
		. '<br><div class="linktab">Recommendations</div><br>'
		. '<div>'
			. 'Center object in scene - To get best results, nudge the object to the center.<br><br>'
			. 'Build big - If an object is small it may look pixelated when rendered/ingame.<br><br>'
			. 'Shadeing - Its best to add custom shading on the build object to keep it looking flat.<br><br>'
			. 'Rotation - Improvements/Additions to rotations in animation.<br><br>'
		. '</div>'
		. '<br><div class="linktab">Future Updates</div><br>'
		. '<div>'
			. 'Bigger Scene - Right now it only allows for 10x20x20.<br><br>'
			. 'MeshPhongMaterial - Will make render look better when feature is added.<br><br>'
			. 'Pixel identification - Currently using binary search for RBG index values, will switch to HSL.<br><br>'
		. '</div>'	
	. $blockEnd;

?>