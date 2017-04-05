<?php
			function setGoogleMapLocation($street, $place, $windowText)
			{
				require "EasyGoogleMap.class.php";

				$googlemaps_api_key = "AIzaSyCo4DwZ8cySBISE8eleX2uWoAGN1iTWtQQ";

				$gm = & new EasyGoogleMap($googlemaps_api_key);
				
				$gm->SetAddress($street . " , " . $place);
				$gm->SetInfoWindowText($windowText);
				$gm->mMapType = TRUE;
				$gm->SetMapWidth("300");
				$gm->SetMapHeight("300");
				
				echo $gm->GmapsKey();
				
				echo $gm->GetSideClick();
				echo $gm->MapHolder();
				echo $gm->InitJs();
				echo $gm->UnloadMap();
			}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
			setGoogleMapLocation("van Schaikweg 94",  "Emmen", "Stenden University </br> ");
        ?>
    </body>
</html>