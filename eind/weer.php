<?php
require_once "headerColor.php";
?>
    <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
        <title>Home</title>
    </head>
    <style>
        body {
            background-color: <?php echo $weatherColor ?>;
        }
    </style>
    <body>
    <div class="all">
        <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="weer.php">Weer</a></li>
                <li><a href="location.php">Location</a></li>
                <li><a href="form.php">Form</a></li>
            </ul>
        </div>
        <div class="content">
            <?php
            echo "Het weer in " . $weatherArray[0] . " is momenteel " . $weatherArray[4] . " en het is " . number_format(($weatherArray[2] - 32) / 1.8, 1) . " graden";
            ?>
        </div>
        <?php
        require_once "footer.php";
        ?>
    </div>
    </body>
</html>