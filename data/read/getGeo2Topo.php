<?php
ini_set("memory_limit","1024M");
ini_set('max_execution_time', 300);
  $geoJSON = $_POST['layers'];
  	//$geoFile = "../../json2booth/floor_data/floor_data.json";
	//$fh = fopen($geoFile, 'w') or die("can't open file: $geoFile");;
	//fwrite($fh, json_encode($geoJSON));
	//fclose($fh);
	//$cmd = "topojson $geoFile";
	//exec($cmd,$output,$return);
	//echo $output[0];
	//$cmd = "rm $geoFile";
	//exec($cmd);
	echo json_encode($geoJSON);