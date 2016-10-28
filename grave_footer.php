<?php

$fileName="grave_counter.txt";

$file = fopen($fileName, "r");
$value=fread($file,filesize($fileName));
fclose($file);

++$value;

$file = fopen($fileName, "w");
fwrite($file, $value);
fclose($file);

echo '<table class="pagefooter">'
		. '<tr>'
			. '<td>'
				. '<br>Website developed By: Max McGrath'
				. ' Email: MadHQ04@gmail.com'
				. ' Date: Summer 2015  Site veiwed: ' . $value . ' times.<br><br><br><br><br><br><br>'
			. '</td>'
		. '</tr>'
	. '</table>'
	. '</body>'
	. '</html>';

session_destroy();

?>