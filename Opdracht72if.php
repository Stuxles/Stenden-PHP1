<!DOCTYPE html>
<html>
<head>
	<title>7.2</title>
</head>
<body>
	<?php

	//IF
	function Cijfertekst($Cijfer)
	{
		if ($Cijfer < 1)
			echo "Ongeldig cijfer<br/>";
		if ($Cijfer == 1)
			echo "Zeer slecht<br/>";
		if ($Cijfer == 2)
			echo "Zeer slecht<br/>";
		if ($Cijfer == 3)
			echo "Zeer slecht<br/>";
		if ($Cijfer == 4)
			echo "Onvoldoende<br/>";
		if ($Cijfer == 5)
			echo "Onvoldoende<br/>";
		if ($Cijfer == 6)
			echo "Voldoende<br/>";
		if ($Cijfer == 7)
			echo "Voldoende<br/>";
		if ($Cijfer == 8)
			echo "Goed<br/>";
		if ($Cijfer == 9)
			echo "Zeer goed<br/>";
		if ($Cijfer == 10)
			echo "Uitmuntend<br/>";
		if ($Cijfer > 10)
			echo "Ongeldig Cijfer<br/>";
	}
	Cijfertekst(8)
	?>
</body>
</html>