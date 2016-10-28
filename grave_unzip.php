<?php
$zip = new ZipArchive;
if ($zip->open('http://zombapro.ppmsite.com/vxl/vxl/holyweird1.zip') === TRUE) {
	$zip->extractTo('http://zombapro.ppmsite.com/temp/');
	$zip->close();
	echo 'ok';
} else {
    echo 'failed';
}


?>