<?php
header('Content-Type: application/json');

require 'src/Seeder.php';
require 'src/VideoGameOst.php';
require 'src/Song.php';

$osts = Seeder::getOSTs();

if (isset($_GET['ost'])) {
    foreach ($osts as $ost) {
        if ($ost->getID() == $_GET['ost']) {
            if (isset($_GET['song'])) {
                foreach ($ost->getTrackList() as $song) {
                    if ($song->getID() == $_GET['song']) {
                        echo json_encode($song);
                    }
                }
            } else {
                echo json_encode($ost);
            }
        }
    }

    if ($_GET['ost'] == 'all') {
        echo json_encode($osts);
    }

} else {
    echo json_encode($osts);
}
