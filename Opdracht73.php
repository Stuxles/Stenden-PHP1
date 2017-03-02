<!DOCTYPE html>
<html>
<head>
	<title>73</title>
</head>
<body>
	<?php
	function bereken($number){
		if($number > 100) {
			$result = $number . " is greater than 100";
		}
		else {
			$result = $number . " is less than or equal to 100";
		};
		echo "<p>$result</p>";
	}
	bereken(100);
	?>
</body>
</html>