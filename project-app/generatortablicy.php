<?php
// Plik generujący tablicę
include 'header.php';
include 'templates/menu.php';

$array = range(1, 100);
shuffle($array);
echo '<pre>';
print_r($array);
echo '</pre>';

include 'footer.php';
?>
