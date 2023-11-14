<?php
header('Content-Type: application/json');

require 'src/Seeder.php';
require 'src/VideoGameOST.php';
require 'src/Song.php';

$osts = Seeder::getOSTs();

if (isset($_GET['ost'])) {
    foreach ($osts as $ost) {
        if ($ost->ID == $_GET['ost']) {
            echo json_encode($ost);
        }
    }

    if ($_GET['ost'] == 'all') {
        echo json_encode($osts);
    }

} else {
    echo json_encode($osts);
}
