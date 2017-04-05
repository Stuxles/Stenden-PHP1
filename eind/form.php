<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="weer.php">Weer</a></li>
	<li><a href="location.php">Location</a></li>
	<li><a href="form.php">Form</a></li>
</ul>

<h2>Send e-mail to someone@example.com:</h2>

<form action="mailto:someone@example.com" method="post" enctype="text/plain">
	Name:<br>
	<input type="text" name="name"><br>
	E-mail:<br>
	<input type="text" name="mail"><br>
	Comment:<br>
	<input type="text" name="comment" size="50"><br><br>
	<input type="submit" value="Send">
	<input type="reset" value="Reset">
</form>

<?php

?>
</body>
</html>