<?php	

		$lines = file('http://www.weatherlink.com/user/troislacs/index.php?view=summary&amp;headers=1');
		$vitesseVent = substr($lines[251], 39, 42);
		$tempAir = substr($lines[143], 39, 42);
		$tempEau = substr($lines[160], 39, 42); 

		$arr = array('vitesseVent' => $vitesseVent, 'temperatureAir' => $tempAir, 'temperatureEau' => $tempEau);

		echo json_encode($arr);
?>
	
