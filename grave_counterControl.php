<?php

function sendEmailCounter($fileNameEmail,$valueAt){
	$msgCounterRead = wordwrap("Check Counter for=" .  $fileNameEmail . " Value=" . $valueAt,70);
	mail("max.mcgrath.87@gmail.com",$msgCounterRead,$msgCounterRead);
}

function readCounterFile($fileNameRead){
	$fileNameRead='counters/' . $fileNameRead;
	$fileRead = fopen($fileNameRead, "r");
	if(flock($fileRead,LOCK_EX)){
		$valueRead=fread($fileRead,filesize($fileNameRead));
		flock($fileRead,LOCK_UN); // release lock
	}
	fclose($fileRead);

	//only do if not a back up file
	if(!strpos($fileNameRead,'_backUp')){
		//Yes... I am forced to test a backup file logic for counters... What the hell...
		$backUpFileNameRead=explode(".", $fileNameRead)[0] . "_backUp.txt";
		$fileReadBackUp = fopen($backUpFileNameRead, "r");
		if(flock($fileReadBackUp ,LOCK_EX)){
			$valueReadBackUp=fread($fileReadBackUp ,filesize($backUpFileNameRead));
			flock($fileReadBackUp,LOCK_UN); // release lock
		}
		fclose($fileReadBackUp);

		if($valueRead<$valueReadBackUp){
			sendEmailCounter($fileNameRead, $valueRead);
			$valueRead=$valueReadBackUp;
		}
	}

	return $valueRead;
}

function writeCounterFile($fileNameWrite,$newValueWrite){
	//$oldValueWrite = readCounterFile($fileNameWrite);   /* && $oldValueWrite < $newValueWrite && $backUpValueWrite < $newValueWrite */

	//Yes... I am forced to test a backup file logic for counters... What the hell...
	$backUpFileName=explode(".", $fileNameWrite)[0] . "_backUp.txt";
	$backUpValueWrite = readCounterFile($backUpFileName);

	if($newValueWrite <= $backUpValueWrite){
		sendEmailCounter($fileNameWrite, $newValueWrite);
		$newValueWrite=$backUpValueWrite+1;
	}

	$fileNameWrite = 'counters/' . $fileNameWrite;
	$fileWrite = fopen($fileNameWrite, "w");
	if(flock($fileWrite,LOCK_EX)){
		fwrite($fileWrite,$newValueWrite);
		flock($fileWrite,LOCK_UN); // release lock
	}
	fclose($fileWrite);

	if(($backUpValueWrite+1)<$newValueWrite){
		sendEmailCounter($backUpFileName, $backUpValueWrite);
		$backUpValueWrite=$newValueWrite;
	}

	//Yes... I am forced to test a backup file logic for counters... What the hell...
	$fileWriteBackUp = fopen('counters/' . $backUpFileName, "w");
	if(flock($fileWriteBackUp,LOCK_EX)){
		fwrite($fileWriteBackUp,$backUpValueWrite+1);
		flock($fileWriteBackUp,LOCK_UN); // release lock
	}
	fclose($fileWriteBackUp);

}

//this is only used when this is called from a download click
if(!empty(trim($_GET["downloadName"]))){
	$counterName = trim($_GET["downloadName"]);

	$fileName="";

	switch($counterName){
		case "sewMod":
			$fileName="grave_SEWcounter.txt";
			break;

		case "empireMod":
			$fileName="grave_empireCounter.txt";
			break;

		case "madnessMod":
			$fileName="grave_madnessCounter.txt";
			break;

		case "allianceMod":
			$fileName="grave_alliancesCounter.txt";
			break;

		case "mapPackRa2One":
			$fileName="grave_MAPcounter.txt";
			break;
		case "mapPackRa2Two":
			$fileName="grave_MAP2counter.txt";
			break;
	}

	if(!empty($fileName)){
		$value=readCounterFile($fileName);
		writeCounterFile($fileName,++$value);
		echo '<script>window.close();</script>';
	}
}

?>