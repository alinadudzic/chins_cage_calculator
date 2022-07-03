<?php

if (isset($_POST['width'])) {
    $width = $_POST['width'];
}


if (isset($_POST['lenght'])) {
    $lenght = $_POST['lenght'];
}

if (isset($_POST['height'])) {
    $height = $_POST['height'];
}

if (strlen($width) > 1 && strlen($height) > 1 && strlen($lenght) > 1) {
    $result = (int) $width * (int) $height * (int) $lenght;
    if (($result / 112000) >= 1) {
        echo 'Twoja klatka pomieści ';
        $cage = round($result / 112000);
        echo $cage;
        if ($cage > 3) {
            echo ' szynszyli';
        } else {
            echo ' szynszyle';
        }
        echo ' i powinna mieć nie mniej niż ';
        $shelf = 1 + (round($result / 112000));
        echo $shelf;
        if ($shelf > 4) {
            echo ' półek';
        } else {
            echo ' półki';
        }
    } else {
        echo 'Twoja klatka nie nadaje się dla szynszyli';
    }
}