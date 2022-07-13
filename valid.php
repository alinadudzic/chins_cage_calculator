<?php
const SIZE_FACTOR = 112000;

$height = $_POST['height'] ?? 0;

$width = $_POST['width'] ?? 0;

$length = $_POST['length'] ?? 0;

if ($width > 1 && $height > 1 && $length > 1) {
    $cage = cageChecker($height, $length, $width);
    if ($cage >= 1) {
        echo 'Twoja klatka pomieści ';
       
        echo $cage;
        if ($cage > 3) {
            echo ' szynszyli';
        } else {
            echo ' szynszyle';
        }
        echo ' i powinna mieć nie mniej niż ';
        $shelf = 1 + $cage;
        echo $shelf;
        if ($shelf > 4) {
            echo ' półek';
        } else {
            echo ' półki';
        }
    } else {
        echo 'Twoja klatka nie nadaje się dla szynszyli';
    }
} else {
    echo 'Twoja klatka nie nadaje się dla szynszyli';
}



function cageChecker(int $height, int $length, int $width): int 
{ 
  return  $height * $length * $width / SIZE_FACTOR; 
}