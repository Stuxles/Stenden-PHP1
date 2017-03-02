<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Euros naar centen</title>
</head>
<body>
	<?php
		$Euros = 36.91;             // Bedrag in euros
		$x = 100;                   //vermenigvuldigt
		$Centen = $Euros * $x;      // Som naar centen
		echo '<p>Bedrag in Euros: ',$Euros, "</p>";
		echo '<p>Bedrag in Centen: ',$Centen, "</p>";
		?>
</body>
</html>