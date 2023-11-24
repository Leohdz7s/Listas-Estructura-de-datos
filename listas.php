<?php
$nombres = ["Leo", "Omar", "Gabriel", "Benjamin","Cris", "heber"];

echo "Primera Lista:\n";
foreach ($nombres as $nombre) {
    echo $nombre . "\n";
}

$nuevoNombre = "Victor";
$nombres[] = $nuevoNombre;


echo "\nLista actualizada yiyi:\n";
foreach ($nombres as $nombre) {
    echo $nombre . "\n";
}
?>
