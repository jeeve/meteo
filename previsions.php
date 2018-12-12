<html>
<head>
</head>
<body>
<?php
	header("Access-Control-Allow-Origin: *");
	$station = '581';
	$id = 'wg_fwdg_581_3_1544618768813';
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
    var arg = ["s=<?php echo $station; ?>","m=3","uid=<?php echo $id; ?>","wj=knots","tj=c","odh=8","doh=20","fhours=240","vt=forecasts",
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