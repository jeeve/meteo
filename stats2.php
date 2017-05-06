<?php
header("Access-Control-Allow-Origin: *");

$sUrl = 'http://mywindstats.com/windrose';
    $params = array('http' => array(
    'method' => 'POST',
    'header' => 'Content-type: application/x-www-form-urlencoded\r\n'
    . "Content-Length: " . strlen('S_Spot=Lery-Poses&S_SelectedDate=2017-04-22&S_StartHour=13&S_EndHour=17&S_Graph=Graphe+de+la+vitesse+du+vent&S_Unit=noeud') . "\r\n",
'content' => 'S_Spot=Lery-Poses&S_SelectedDate=2017-04-22&S_StartHour=13&S_EndHour=17&S_Graph=Graphe+de+la+vitesse+du+vent&S_Unit=noeud'
));

$ctx = stream_context_create($params);
$fp = @fopen($sUrl, 'rb', false, $ctx);
if (!$fp)
{
    echo "Problem with";
//throw new Exception("Problem with $sUrl, $php_errormsg");
}

$response = @stream_get_contents($fp);
if ($response === false) 
{
    echo "Problem reading data from";
//throw new Exception("Problem reading data from $sUrl, $php_errormsg");
}

//echo stream_get_line($fp, 20);
echo $response;
echo "titi";
?>