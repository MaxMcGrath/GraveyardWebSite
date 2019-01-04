<?php

require_once('grave_cookieJavaScript.php');

$fileNameMain="grave_counter.txt";
$valueFooter=readCounterFile($fileNameMain)+1;
writeCounterFile($fileNameMain,$valueFooter);

$cookie_menuName = "GraveLayoutMenuMadHQ";

echo '<br><table class="pagefooter"><tr><td>'
	. 'Website developed By: <span class="footerTan">Max McGrath</span>'
	. ' Email: <span class="footerTan">MadHQ04@gmail.com</span><br>'
	. ' Created: <span class="footerTan">Summer 2015</span> Updated: <span class="footerTan">Summer 2018</span>'
	. ' Pages Generated: <span class="footerTan">' . $valueFooter . '</span>'
	. '&nbsp;&nbsp;<div class="mapSearchLabel">Menu:</div>&nbsp;<select id="menuType" onchange="cookie' .  $cookie_menuName . '()">'
	. '<option value="Left"' . (($navigationSelection)?" selected":"") . '>Left</option>'
	. '<option value="Top"' . (($navigationSelection)?"":" selected") . '>Top</option>'
	. '</select><br>'
	. getJavascriptCookie($cookie_menuName,"menuType")
	. '<br><br><br><br><br><br><br><br>'
	. '</td></tr></table></body></html>';

?>