<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Euros naar centen</title>
</head>
<body>
    <?php
            $Centen = 3691;          // Bedrag in centen
            $x = 100;                // vermenigvuldigt
            $Euros = $Centen / $x;   // Som naar Euros
            echo '<p>Bedrag in Centen: ',$Centen, "</p>";
            echo '<p>Bedrag in Euros: ',$Euros, "</p>";
            ?>
</body>
</html>
