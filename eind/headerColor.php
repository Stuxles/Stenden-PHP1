<?php
	ob_start();
	include 'method2/getWeatherTempEmmen.php';
	ob_end_clean();

	$weatherArray = explode(" " ,getWeatherStringEmmen());


    if ($weatherArray[2] > 0 && $weatherArray[2] <= 4) {
        $weatherColor = "blue";
    } else if ($weatherArray[2] >= 6 && $weatherArray[2] <= 17) {
        $weatherColor = "grey";
    } else if ($weatherArray[2] >= 19 && $weatherArray[2] <= 30) {
        $weatherColor = "lightgrey";
    } else if ($weatherArray[2] >= 31 && $weatherArray[2] <= 34) {
        $weatherColor = "lightblue";
    } else if ($weatherArray[2] >= 35 && $weatherArray[2] <= 42) {
        $weatherColor = "darkred";
    }
//	echo $weatherArray[2];
//	print_r($weatherArray)
?>