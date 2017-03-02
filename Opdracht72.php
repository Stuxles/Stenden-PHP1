<!DOCTYPE html>
<html>
    <head>
        <title>7.2</title>
    </head>
    <body>     
        <?php
        echo " <h1>CASE</h1>";

        $cijfer = 87;

        switch ($cijfer) {

            case ($cijfer == 1 OR $cijfer == 2):
                echo"Zeer slecht";
                break;
            case ($cijfer == 4 OR $cijfer == 5):
                echo"onvoldoende";
                break;
            case ($cijfer == 6 OR $cijfer == 7):
                echo"voldoende";
                break;
            case ($cijfer == 8):
                echo "goed";
                break;
            case ($cijfer == 9):
                echo "Zeer goed";
                break;
            case ($cijfer == 10):
                echo "Uitmuntend";
                break;

            default:
                echo "het klopt niet";
        }

        $cijfer = 4;
        echo "</br><h1>IF/ELSE</h1>";
        if ($cijfer == 1 OR $cijfer == 2 OR $cijfer == 3) {
            echo "Zeer slecht";
        } elseif ($cijfer == 4 OR $cijfer == 5) {
            echo "Onvoldoende";
        } elseif ($cijfer == 6 OR $cijfer == 7) {
            echo "Voldoende";
        } elseif ($cijfer == 8) {
            echo "Goed";
        } elseif ($cijfer == 9) {
            echo "Zeer goed";
        } elseif ($cijfer == 10) {
            echo "Uitmuntend";
        } else {
            echo "Ongeldig cijfer";
        }
        ?>



    </body>
</html>