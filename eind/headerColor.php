<?php
	ob_start();
	include 'method2/getWeatherTempEmmen.php';
	ob_end_clean();

	$weatherArray = explode(" " ,getWeatherStringEmmen());
	echo $weatherArray[2];
//	print_r($weatherArray)
?>