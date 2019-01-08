<?php	
	header("Access-Control-Allow-Origin: *");

     function get_url($url) {
    	$curl = curl_init($url);
    	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_URL, $url);
    	//curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    	//curl_setopt($curl, CURLOPT_HEADER, true);
    	$page = curl_exec($curl);
    	$error = curl_errno($curl);
    	curl_close($curl);

    	if ($error == 0) return $page;
    	return $error;
    }

	$station = '33782285-df4e-4432-a3b3-06ddf1b3680a';

		if ($_GET['station'] != '') {
				$station = $_GET['station'];
		}	
		
		//$json = file_get_contents('https://www.weatherlink.com/map/data/station/' . $station);
		
		$json = get_url('https://www.weatherlink.com/map/data/station/' . $station);
		
		echo $json;
?>
	
