<?php	
		header("Access-Control-Allow-Origin: *");

		$station = 'troislacs';

		if ($_GET['station'] != '') {
				$station = $_GET['station'];
		}	
		
		$lines = file('http://www.weatherlink.com/user/' . $station . '/index.php?view=summary&amp;headers=1');

		$line = substr($lines[250], 39, 20);
		$p = strpos($line, '<');
		$line = substr($line, 0, $p);
		if ($line == "n/a")
		{
			$vitesseVent = "";
		}
		else
		{
			$vitesseVent = $line;
		}

		$line = substr($lines[225], 39, 20);
		$p = strpos($line, '<');
		$line = substr($line, 0, $p);
		if ($line == "n/a")
		{
			$orientationVent = "";
		}
		else
		{
			$orientationVent = $line;
		}
		
		$line = substr($lines[142], 39, 20);
		$p = strpos($line, '<');
		$line = substr($line, 0, $p);
		if ($line == "n/a")
		{
			$tempAir = "";
		}
		else
		{
			$tempAir = $line;
		}
				
		$line = substr($lines[304], 39, 20);
		$p = strpos($line, '<');
		$line = substr($line, 0, $p);		
		if ($line == "n/a")
		{
			$tempEau = "";
		}
		else
		{
			$tempEau = $line;
		}

		$arr = array('station' => $station, 'vitesseVent' => $vitesseVent, 'orientationVent' => $orientationVent, 'temperatureExterieure' => $tempAir, 'temperatureInterieure' => $tempEau);

		echo json_encode($arr);
?>
	
