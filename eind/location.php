<?php
	include_once("method1/v2/mainIncludeGMap.php");
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
            setGoogleMapLocation(500, 500, "van Schaikweg 94",  "Emmen");
        ?>
    </div>
    <?php
    require_once "footer.php";
    ?>
</div>
</body>
</html>