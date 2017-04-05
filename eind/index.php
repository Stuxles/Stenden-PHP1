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
        <h1>Interesses</h1>
        <h2>Retro gaming</h2>
        <p><img src="https://upload.wikimedia.org/wikipedia/commons/1/15/Sega-Genesis-Mod2-Set.png" alt="sega"></p>
        <h2>Arcades</h2>
        <p><img src="http://icons.iconarchive.com/icons/100-seedless-penguins/video-game/512/Galaga-Arcade-icon.png" alt="galaga"></p>
    </div>
    <?php
    require_once "footer.php";
    ?>
</div>
</body>
</html>