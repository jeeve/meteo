<?php	

	header("Access-Control-Allow-Origin: *");
	
	function getLigne($tableau, $terme) {
		for ($i = 0; $i < count($tableau); $i++) {
			if (strpos($tableau[$i], $terme)) {
				return $i;
			}
		}
		return false;
	}

	$lines = file('https://www.viewsurf.com/univers/trafic/vue/3254-france-haute-normandie-heudebouville-a13-pres-de-louviers-peage-de-heudebouville-vue-orientee-vers-le-havre-ou-caen');

    $line = getLigne($lines, "src: 'https://filmssite.viewsurf.com/sapn/HEUDEBOUVILLE_S1_MKV/");
	
	echo $line;
	
?>	