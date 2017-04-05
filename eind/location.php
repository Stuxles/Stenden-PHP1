<?php
	include_once("method1/v2/mainIncludeGMap.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Location</title>
</head>
<body>
<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="weer.php">Weer</a></li>
	<li><a href="location.php">Location</a></li>
	<li><a href="form.php">Form</a></li>
</ul>
<?php
	setGoogleMapLocation(500, 500, "van Schaikweg 94",  "Emmen");
?>
</body>
</html>