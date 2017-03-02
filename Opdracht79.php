<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<pre>
		<?php 
		echo "<h1>1</h1>";
		for ($i=0; $i <= 9; $i++) { 
			for ($ii=8; $ii >= $i; $ii--) { 
				echo " ";
			}
			for ($iii=0; $iii <= $i; $iii++) { 
				echo "*";
			}
			echo "</br>";
		};

		echo "<h1>2</h1>";
		for ($i=-1; $i <= 8; $i++) { 
			for ($ii=0; $ii <= $i; $ii++) { 
				echo " ";
			}
			for ($iii=8; $iii >= $i; $iii--) { 
				echo "*";
			}
			echo "</br>";
		};

		echo "<h1>3</h1>";
		for ($i=0; $i <= 8; $i+=2) { 
			for ($iii=2; $iii <= $i; $iii+=2) { 
				echo " ";
			}
			for ($ii=8; $ii >= $i; $ii--) { 
				echo "*";
			}

			echo "</br>";
		};

		echo "<h1>4</h1>";
		for ($i=0; $i <= 8; $i+=2) { 
			for ($iii=6; $iii >= $i; $iii-=2) { 
				echo " ";
			}
			for ($ii=0; $ii <= $i; $ii++) { 
				echo "*";
			}

			echo "</br>";
		};

		echo "<h1>5</h1>";
		for ($i=-0; $i <= 7; $i++) { 
			for ($ii=0; $ii < $i; $ii++) { 
				echo "*";
			};
			echo "</br>";
		}
		for ($i=-0; $i <= 6; $i++) { 
			for ($ii=6; $ii > $i; $ii--) { 
				echo "*";
			};
			echo "</br>";
		}

		echo "<h1>6</h1>";
		for ($i=-0; $i <= 7; $i++) { 
			for ($iii=7; $iii > $i; $iii--) { 
				echo " ";
			};
			for ($ii=0; $ii < $i; $ii++) { 
				echo "*";
			};
			echo "</br>";
		}
		for ($i=-0; $i <= 6; $i++) { 
			for ($iii=0; $iii <= $i; $iii++) { 
				echo " ";
			};
			for ($ii=6; $ii > $i; $ii--) { 
				echo "*";
			};
			echo "</br>";
		}

		echo "<h1>7</h1>";
		for ($i=0; $i < 8; $i++) {
			for ($ii=0; $ii < $i; $ii++) { 
				echo "*";
			}
			echo "</br>";
		}
		?>



	</pre>
</body>
</html>