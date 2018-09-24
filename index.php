<?php
include "Dijkstra.php";

// graph array
$graph[0][0] = '1->10';
$graph[0][1] = '2->11';
$graph[0][2] = '3->40';

$graph[1][0] = '0->10';
$graph[1][1] = '2->55';
$graph[1][2] = '4->20';

$graph[2][0] = '0->11';
$graph[2][1] = '1->55';
$graph[2][2] = '1->54';

$graph[3][0] = '4->89';
$graph[3][1] = '4->89';

$graph[4][0] = '0->90';
$graph[4][1] = '3->89';


$algo = new Dijkstra();
$json = $algo->jalurTerpendek($graph, 0, 1);
$array= json_decode($json, true);

if($array['status'] == 'success'){
	echo "Jalur terpendek : " . $array['content'];
}else{
	echo "Error : " . $array['teks'];
}
