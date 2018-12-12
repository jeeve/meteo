<html>
<head>
</head>
<body>
<?php
	$station = '581';
	$id = 'wg_fwdg_581_3_1544556198330';
		if ($_GET['station'] != '') {
				$station = $_GET['station'];
		}
		if ($_GET['id'] != '') {
				$id = $_GET['id'];
		}
		
?>		
<script id="<?php echo $id; ?>">
(function (window, document) {
  var loader = function () {
    var arg = ["s=<?php echo $station; ?>","m=3","uid=<?php echo $id; ?>","wj=knots","tj=c","odh=0","doh=24","fhours=240","vt=forecasts",
   "p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCPs,RATING"];
    var script = document.createElement("script");
    var tag = document.getElementsByTagName("script")[0];
    script.src = "https://www.windguru.cz/js/widget.php?"+(arg.join("&"));
    tag.parentNode.insertBefore(script, tag);
  };
  window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
})(window, document);
</script>
</body>
</html>