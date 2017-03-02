<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
</head>
<body>
    <?php
    $Datum = 14062016;
    $Dag = floor ($Datum / 1000000);
    $Maand = floor ($Datum % 1000000 / 10000);
    $Jaar = floor ($Datum % 10000);
    echo ("<p> De datum is $Dag - $Maand - $Jaar </p>");
    ?>
</body>
</html>
