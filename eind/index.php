<?php
	require_once "headerColor.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<style>
	body {
		background-color: <?php $weatherArray[2] ?>;
	}
</style>
<body>
<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="weer.php">Weer</a></li>
	<li><a href="location.php">Location</a></li>
	<li><a href="form.php">Form</a></li>
</ul>
<?php
	echo $weatherArray[2];
	require_once "footer.php";
?>