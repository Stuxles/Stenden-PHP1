<!DOCTYPE html>
<html>
<head>
	<title>7.2</title>
</head>
<body>
	<?php

	//CASE
	function Cijfertekstcase($Cijfercase) {
		switch ($Cijfercase) {
			case "1":
			case "2":
			case "3":
			return "Zeer slecht";
			break;
			case "4":
			case "5":
			return "Onvoldoende";
			break;
			case "6":
			case "7":
			return "Voldoende";
			break;
			case "8":
			return "Goed";
			break;
			case "9":
			return "Zeer goed";
			break;
			case "10":
			return "Uitmuntend";
			break;
			default:
			return "Ongeldig cijfer";
			break;
		}
	}

	echo "<p>", Cijfertekstcase("8"), "</p>";
	?>
</body>
</html>