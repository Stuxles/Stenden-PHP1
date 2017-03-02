<!DOCTYPE html>
<html>
<head>
	<title>INDEX</title>
</head>
<body>
	<ul>
	<?php
	foreach (glob("Opdracht*.php") as $file) {
	    echo "<li><a href='$file'>$file</a></li>";
	}
	?>
	</ul>
</body>
</html>