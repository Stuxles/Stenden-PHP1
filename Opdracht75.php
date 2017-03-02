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
			echo "*";
		};

		echo "<h1>WHILE</h1>";
		$x=0;
		while ($x <= 10) {
			echo "*";
			$x++;
		};

		echo "<h1>DOWHILE</h1>";
		$q=0;
		do {
			echo "*";
			$q++;
		} while ($q <= 10);
		?>
	</pre>
</body>
</html>