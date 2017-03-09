<?php	
		header("Access-Control-Allow-Origin: *");

		$station = '2213';

		if ($_GET['station'] != '') {
				$station = $_GET['station'];
		}	
		
		$lines = file('http://www.weatherlink.com/user/' . $station . '/index.php?view=summary&amp;headers=1');

		$line = substr($lines[250], 39, 3);
		if ($line == "n/a")
		{
			$vitesseVent = "";
		}
		else
		{
			$vitesseVent = substr($lines[250], 39, 4);
		}

		$line = substr($lines[142], 39, 3);
		if ($line == "n/a")
		{
			$tempAir = "";
		}
		else
		{
			$tempAir = substr($lines[142], 39, 4);
		}
				
		$line = substr($lines[159], 39, 3);
		if ($line == "n/a")
		{
			$tempEau = "";
		}
		else
		{
			$tempEau = substr($lines[159], 39, 6);
		}

		$arr = array('vitesseVent' => $vitesseVent, 'temperatureAir' => $tempAir, 'temperatureEau' => $tempEau);

		echo json_encode($arr);
?>
	
