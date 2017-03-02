<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<pre>
		<?php 
		echo "<h1>FOR</h1>";
		for ($i=0; $i <= 10; $i++) { 
			for ($ii=0; $ii <= $i; $ii++) { 
				echo "*";
			}
			echo "</br>";
		};

		echo "<h1>WHILE</h1>";
		$x=0;
		while ($x <= 10) {
			$xx=0;
			while ($xx <= $x) {
				echo "*";
				$xx++;
			}
			echo "</br>";
			$x++;
		};

		echo "<h1>DOWHILE</h1>";
		$q=0;
		do {
			$qq=0;
			do {
				echo "*";
				$qq++;
			} while ($qq <= $q);
			echo "</br>";
			$q++;
		} while ($q <= 10);
		?>
	</pre>
</body>
</html>