<!DOCTYPE html>
<html>
<head>
<script src="/js/jquery.min.js"></script>
<script>

<?php 
		$dest = '1s0x47e1289bac44658f%3A0xe940a5c757b0bf2a!2sL%C3%A9ry-Poses+en+Normandie%2C+CD+110%2C+27740+Poses!3m2!1d49.302783!2d1.209404!5e1!3m2!1sfr!2sfr!4v1546773316328';
		if ($_GET['dest'] != '') {
				$dest = $_GET['dest'];
		}	
?>
		
		
	function maPosition(position) {		
			var lat1 = position.coords.latitude;
			var lon1 = position.coords.longitude;	
			var itineraireSrc = 'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d353971.9888214055!2d2.2661361853305393!3d48.91901435220709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m3!3m2!1d' + lat1 + '!2d' + lon1 + '!4m5!<?php echo $dest; ?>';	
			jQuery('#map-poses').attr('src', itineraireSrc);	
	}

	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(maPosition);
	}
	  
	</script>	

</head>
<body>
<iframe id="map-poses" src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d421188.1259875271!2d1.5370175529156327!3d49.028173071130745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!3m2!1d48.856614!2d2.3522219!4m5!1s0x47e1289bac44658f%3A0xe940a5c757b0bf2a!2sL%C3%A9ry-Poses+en+Normandie%2C+Poses!3m2!1d49.302783!2d1.209404!5e1!3m2!1sfr!2sfr!4v1544558819114" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</body>	
</html>
		