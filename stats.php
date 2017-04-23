<?php
header("Access-Control-Allow-Origin: *");

$postdata = http_build_query(
    array(
        'S_Spot' => 'Lery-Poses',
        'S_SelectedDate' => '2017-04-22',
		'S_StartHour' => '13:00',
		'S_EndHour' => '17:00',
		'S_Unit' => 'noeud'
    )
);

$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);

$context  = stream_context_create($opts);

$result = file_get_contents('http://mywindstats.com/windrose', false, $context);

echo 'toto';
echo $result;
?>