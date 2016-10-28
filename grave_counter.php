<!DOCTYPE html>
<html>
<body>
<?php
	//yes this is counter to see if anyone actually downloads this mod.
	$fileName="grave_SEWcounter.txt";

	$file = fopen($fileName, "r");
	$value=fread($file,filesize($fileName));
	fclose($file);

	++$value;

	$file = fopen($fileName, "w");
	fwrite($file, $value);
	fclose($file);
?>
<script>
	window.close();
</script>
</body>
</html>