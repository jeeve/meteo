<?php	
//		header("Access-Control-Allow-Origin: *");

    header('Access-Control-Allow-Origin: ctif.com');
	
		$station = '33782285-df4e-4432-a3b3-06ddf1b3680a';

		if ($_GET['station'] != '') {
				$station = $_GET['station'];
		}	
		
		$json = file_get_contents('https://www.weatherlink.com/map/data/station/' . $station);
		
		echo $json;
?>
	
