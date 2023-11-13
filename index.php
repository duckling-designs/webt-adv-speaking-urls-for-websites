<?php
header('Content-type: application/json');

require 'src/VideoGameOst.php';
require 'src/Song.php';



$song1 = new Song(1, 'Northern Attitude', 'Noah Kahan & Hozier', 1, '4:27');
$song2 = new Song(2, 'Every Breath You Take', 'The police', 1, '4:13');

$trackList = [$song1, $song2];

$ost = new VideoGameOST(1, 'OST1', 'Video Game 1', 2023, $trackList);

echo json_encode($ost);