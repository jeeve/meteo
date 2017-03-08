<?php	

		$lines = file('http://www.weatherlink.com/user/troislacs/index.php?view=summary&amp;headers=1');
		$vitesseVent = substr($lines[251], 39, 44);
		$tempAir = substr($lines[143], 39, 44);
		$tempEau = substr($lines[160], 39, 44); 

		$arr = array('vitesseVent' => $vitesseVent, 'temperatureAir' => $tempAir, 'temperatureEau' => $tempEau);

		echo json_encode($arr);
?>
	
