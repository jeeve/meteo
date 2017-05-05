<?php
header("Access-Control-Allow-Origin: *");

$postdata = http_build_query(
    array(
        'S_Spot' => 'Lery-Poses',
        'S_SelectedDate' => '2017-05-05',
		'S_StartHour' => '08',
		'S_EndHour' => '18',
        'S_Graphe' => 'Graphe+de+la+vitesse+du+vent',
		'S_Unit' => 'noeud'
    )
);

$opts = array('http' =>
    array(
        'method'  => 'POST',
        'follow_location' => true,
        'header'          => implode("\r\n", ['Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8'
                                                , 'Host: mywindstats.com'
                                                , 'Referer: http://mywindstats.com/'
                                                , 'DNT: 1'
                                                , 'Connection: keep-alive'
                                                , 'Accept-Encoding: gzip, deflate'
                                                , 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8'
                                                , 'Content-Length: 122'
                                                , 'Upgrade-Insecure-Requests: 1'
                                                , 'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:53.0) Gecko/20100101 Firefox/53.0']) . "\r\n",
        'content' => $postdata
    )
);

$context  = stream_context_create($opts);
        
$result = file_get_contents('http://mywindstats.com/windhistory', false, $context);

echo 'toto';
echo $result;
?>