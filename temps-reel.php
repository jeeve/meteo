<?php	

		$lines = file('http://www.weatherlink.com/user/troislacs/index.php?view=summary&amp;headers=1');

		$line = substr($lines[251], 39, 3);
		if ($line == "n/a")
		{
			$vitesseVent = "";
		}
		else
		{
			$vitesseVent = substr($lines[251], 39, 4);
		}

		$line = substr($lines[143], 39, 3);
		if ($line == "n/a")
		{
			$tempAir = "";
		}
		else
		{
			$tempAir = substr($lines[143], 39, 4);
		}
				
		$line = substr($lines[160], 39, 3);
		if ($line == "n/a")
		{
			$tempEau = "";
		}
		else
		{
			$tempEau = substr($lines[160], 39, 6);
		}

		$arr = array('vitesseVent' => $vitesseVent, 'temperatureAir' => $tempAir, 'temperatureEau' => $tempEau);

		echo json_encode($arr);
?>
	
