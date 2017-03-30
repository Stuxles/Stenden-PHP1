<?php	
		function setGoogleMapLocation($width, $height, $street, $place)
		{
			require_once("simpleGMapAPI.php");
			require_once("simpleGMapGeocoder.php");

			$map = new simpleGMapAPI();
			$geo = new simpleGMapGeocoder();

			$map->setWidth($width);
			$map->setHeight($height);
			$map->setBackgroundColor('#d0d0d0');
			$map->setMapDraggable(true);
			$map->setDoubleclickZoom(false);
			$map->setScrollwheelZoom(true);

			$map->showDefaultUI(false);
			$map->showMapTypeControl(true, 'DROPDOWN_MENU');
			$map->showNavigationControl(true, 'DEFAULT');
			$map->showScaleControl(true);
			$map->showStreetViewControl(true);

			$map->setZoomLevel(17);
			$map->setInfoWindowBehaviour('SINGLE_CLOSE_ON_MAPCLICK');
			$map->setInfoWindowTrigger('CLICK');

			$map->addMarkerByAddress("$street", "$place", "", "");

			$map->printGMapsJS();

			// showMap with auto zoom disabled
			$map->showMap(false);

		}
?>