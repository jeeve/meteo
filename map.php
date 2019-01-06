<!DOCTYPE html>
<html>
<head>
<script src="/js/jquery.min.js"></script>
<script>
	function maPosition(position) {		
			var lat = position.coords.latitude;
			var lon = position.coords.longitude;	
			var itineraireSrc = 'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d353971.9888214055!2d2.2661361853305393!3d48.91901435220709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m3!3m2!1d' + lat + '!2d' + lon + '!4m5!1s0x47e1289bac44658f%3A0xe940a5c757b0bf2a!2sL%C3%A9ry-Poses+en+Normandie%2C+CD+110%2C+27740+Poses!3m2!1d49.302783!2d1.209404!5e1!3m2!1sfr!2sfr!4v1546773316328'	;	
			jQuery('#map-poses').attr('src', itineraireSrc);	
	}

	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(maPosition);
	}
	  
	</script>	

</head>
<body>
<iframe id="map-poses" src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d353971.9888214055!2d2.2661361853305393!3d48.91901435220709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m3!3m2!1d48.4061829!2d0.1372031!4m5!1s0x47e1289bac44658f%3A0xe940a5c757b0bf2a!2sL%C3%A9ry-Poses+en+Normandie%2C+CD+110%2C+27740+Poses!3m2!1d49.302783!2d1.209404!5e1!3m2!1sfr!2sfr!4v1546773316328" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</body>	
</html>
		