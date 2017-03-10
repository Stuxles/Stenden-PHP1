<!DOCTYPE html>
<html>
    <head>
        <title>79</title>
    </head>
    <body>
        <pre>
            <?php
            echo "<h1>1</h1>";
            for ($i = 0; $i <= 9; $i++) {
                for ($ii = 8; $ii >= $i; $ii--) {
                    echo " ";
                }
                for ($iii = 0; $iii <= $i; $iii++) {
                    echo "*";
                }
                echo "</br>";
            }

            echo "<h1>2</h1>";
            for ($i = 1; $i <= 8; $i++) {
                for ($ii = 0; $ii <= $i; $ii++) {
                    echo " ";
                }
                for ($iii = 8; $iii >= $i; $iii--) {
                    echo "*";
                }
                echo "</br>";
            }

            echo "<h1>3</h1>";
            for ($i = 0; $i <= 8; $i += 2) {
                for ($iii = 2; $iii <= $i; $iii += 2) {
                    echo " ";
                }
                for ($ii = 8; $ii >= $i; $ii--) {
                    echo "*";
                }

                echo "</br>";
            }

            echo "<h1>4</h1>";
            for ($i = 0; $i <= 8; $i += 2) {
                for ($iii = 6; $iii >= $i; $iii -= 2) {
                    echo " ";
                }
                for ($ii = 0; $ii <= $i; $ii++) {
                    echo "*";
                }

                echo "</br>";
            }

            echo "<h1>5</h1>";
            for ($i = 0; $i <= 7; $i++) {
                for ($ii = 0; $ii < $i; $ii++) {
                    echo "*";
                }
                echo "</br>";
            }
            for ($i = 0; $i <= 6; $i++) {
                for ($ii = 6; $ii > $i; $ii--) {
                    echo "*";
                }
                echo "</br>";
            }

            echo "<h1>6</h1>";
            for ($i = 0; $i <= 7; $i++) {
                for ($iii = 7; $iii > $i; $iii--) {
                    echo " ";
                }
                for ($ii = 0; $ii < $i; $ii++) {
                    echo "*";
                }
                echo "</br>";
            }
            for ($i = 0; $i <= 6; $i++) {
                for ($iii = 0; $iii <= $i; $iii++) {
                    echo " ";
                }
                for ($ii = 6; $ii > $i; $ii--) {
                    echo "*";
                }
                echo "</br>";
            }

            echo "<h1>7</h1>";
            for ($i = 0; $i < 8; $i++) {
                for ($ii = 0; $ii < $i; $ii++) {
                    echo "*";
                }
                echo "</br>";
            }

            echo "<h1>14 FOR</h1>";
            for ($i = 0; $i <= 8; $i++) {
                for ($ii = 1; $ii <= $i; $ii++) {
                    echo "*";
                }
                for ($iii = 7; $iii >= $i; $iii--) {
                    echo "-";
                }
                echo "</br>";
            }

            echo "<h1>14 DO WHILE</h1>";
            $dw = 0;
            do {
                echo "</br>";
                $dw++;
                $dww = 1;
                do {
                    echo "*";
                    $dww++;
                } while ($dww <= $dw);

                $ddww = 8;
                do {
                    echo "-";
                    $ddww--;
                } while ($ddww >= $dw);
            } while ($dw <= 7);

            echo "<h1>20 FOR</h1>";
            for ($i = 6; $i >= 1; $i--) {
                for ($ii = 1; $ii <= $i; $ii++) {
                    echo "$ii";
                }
                echo "</br>";
            }

            echo "<h1>20 WHILE</h1>";
            $i = 6;
            while ($i >= 1) {
                $ii = 1;
                while ($ii <= $i) {
                    echo "$ii";
                    $ii++;
                }
                echo "</br>";
                $i--;
            }

            echo "<h1>20 DO WHILE</h1>";
            $d = 6;
            do {
                $dd = 1;
                do {
                    echo "$dd";
                    $dd++;
                } while ($dd <= $d);
                echo "</br>";
                $d--;
            } while ($d >= 1);
            ?>
        </pre>
    </body>
</html>