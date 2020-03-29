<?php

include ("db-link.php");

/**********************************/
/*********** DNC WASH *************/
/**********************************/

$truncatednc="DELETE FROM `vicidial_dnc`";
$conn->query($truncatednc);
 
foreach(glob("dnc-files/*.txt") as $file){

	$handle = fopen($file, "r");

	while(($filesop = fgetcsv($handle, 1000, "	")) !== false){

		$number = str_replace(",","",$filesop[0]);

	 	$insertdnc="INSERT INTO `vicidial_dnc` (`phone_number`) VALUES ('".$number."')";
		$conn->query($insertdnc);

		ini_set('max_execution_time', 450);
		unlink("/srv/www/htdocs/DNC-WASH/dnc-files/".basename($file));

	}
	
	echo basename($file). " imported successfully.<br><br>";
	
}


$executionTime = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];

if($executionTime < 60){
	 $executionTime = number_format($executionTime) ." seconds";
}

else {
	$executionTime =  number_format($executionTime/60) ." minutes";
}
 
echo "This dnc upload took $executionTime to execute.";

?>