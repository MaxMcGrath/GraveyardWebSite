<?php

$QnA = array(
	"May I use resource's found on this site?",
	"Of course, I would have not put them up for download if that was not the intention.",
	"May I edit resource's found on this site?",
	"Of course you may edit them.",
	"May I sell resource's found on this site? (IE: used in projects that cost money)",
	"Nope.",
	"Do you have souce mateials from resource's? (IE: 3d Models/Textures)",
	"Some of them I might, Some might have been lost or deleted... either case I will not release source materials.",
	"Do you work on any mods or will you join my mod?",
	"Nope.",
	"Do you take request?",
	"Nope. However, if someone suggests something that seems interesting and can be public. In my own time, I may.",
	"If I email or private message you, can you help me with some thing I am working on?",
	"Most likely no... If you need help head over to PPM's forums and ask publicly there.",
	"What is the best way to contact you?",
	"You can try email (madhq04@gmail.com) or PM'ing me at PPM forums.",
	"Do you have/use MSN, Skype, other type of messaging?",
	"Nope."
	);

echo '<table class="newsblockheader" align="center">'
		. '<tr>'
			. '<td class="newsheader" style="font-size:16px;">'
				. 'Frequently Asked Questions, Created: January 2016, Updated: Not Yet'
			. '</td>'
		. '</tr>'
	. '</table>'
	. '<table class="newsblockbody" align="center">'
		. '<tr>'
			. '<td class="newsbody" style="text-align: left; font-size:14px;">';

for($x=0;$x!=count($QnA);++$x){
	echo '<div class="linktab"><font color="red">Question:</font> ' . $QnA[$x++] . '<br>'
		. '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#8597BC">Answer:</font> ' . $QnA[$x] . '</div><br>';
}

echo '</td></tr></table>';

?>