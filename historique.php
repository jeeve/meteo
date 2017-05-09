<?php
header("Access-Control-Allow-Origin: *");

if ($_GET['graph'] == 'vitesse')
{
    $graphique = 'Graphe de la vitesse du vent';
    $urlGraph = 'windhistory';
}
else
{
    $graphique = 'Rose des vents';
    $urlGraph = 'windrose';
}

$dateSelctionnee = $_GET['date'];// date('y-m-a', $_GET['date']);  
$heureDebut = $_GET['heure-debut'];
$heureFin = $_GET['heure-fin'];

// Données à envoyer
$post = array(
        'S_Spot' => 'Lery-Poses',
        'S_SelectedDate' => $dateSelctionnee,
		'S_StartHour' => $heureDebut,
		'S_EndHour' => $heureFin,
        'S_Graphe' => $graphique,
		'S_Unit' => 'noeud'
);
 
// On effectue la requête avec cURL
$ch = curl_init('http://mywindstats.com/' . $urlGraph);
curl_setopt($ch, CURLOPT_NOBODY, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
$ret = curl_exec($ch);
/*
if (!$ret) {
    echo curl_error($ch);
} else {
    echo 'Envoi OK !';
}
*/
curl_close($ch);

$imgplus = stristr($ret, '<img');
$img = substr($imgplus, 0,  strpos($imgplus, '/>')+2);

echo $img;
?>