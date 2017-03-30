<?php
	include_once("mainIncludeGMap.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>

    <body>
        <?php	
			//Create a Maps object
			//Datatypes				int	  int	  String   String
			//setGoogleMapLocation(Width, Height, Street,  City);
			
			
			setGoogleMapLocation(500, 500, "van Schaikweg 94",  "Emmen");
        ?>

    </body>
</html>