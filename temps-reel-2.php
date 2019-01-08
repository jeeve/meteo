<?php	
//		header("Access-Control-Allow-Origin: *");

$origin = $_SERVER['HTTP_ORIGIN'];
$allowed_domains = [
    'https://meteo-station.herokuapp.com'
];

if (in_array($origin, $allowed_domains)) {
    header('Access-Control-Allow-Origin: ' . $origin);
}
	
		$station = '33782285-df4e-4432-a3b3-06ddf1b3680a';

		if ($_GET['station'] != '') {
				$station = $_GET['station'];
		}	
		
		$json = file_get_contents('https://www.weatherlink.com/map/data/station/' . $station);
		
		echo $json;
?>
	
