<?php

echo "Entrez un nombre : ";
$nombre = intval(readline());


echo "Les diviseurs de $nombre sont : ";

for ($i = 1; $i <= $nombre; $i++) {
    if ($nombre % $i == 0) {
        echo $i . " ";
    }
}

echo "\n";
?>
