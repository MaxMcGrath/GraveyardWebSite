<?php

function getJavascriptCookie($cookie_nameFun,$idName){
	return '<script>function cookie' . $cookie_nameFun . '() {'
		. 'var d = new Date();'
		. 'var exdays=30;'
		. 'var type = document.getElementById("' . $idName . '").value;'
		. 'd.setTime(d.getTime() + (exdays*24*60*60*1000));'
		. 'var expires = "expires="+ d.toUTCString();'
		. 'document.cookie = "' . $cookie_nameFun . '" + "=" + type + ";" + expires + ";path=/";'
		. 'location.reload();'
		. '}</script>';
}

?>