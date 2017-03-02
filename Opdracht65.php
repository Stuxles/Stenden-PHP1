<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
</head>
<body>
    <?php
        // 10-02-2017 Dennis Boer
    $tempFahrenheit = 68;
    echo "<p>Temperatuur in Fahrenheit $tempFahrenheit ºF. </p>";
    $tempCelcius = (($tempFahrenheit) - 32) * (5 / 9);
    echo "<p>Temperatuur in graden Celcius $tempCelcius ºC. </p>";
    ?>
</body>
</html>
