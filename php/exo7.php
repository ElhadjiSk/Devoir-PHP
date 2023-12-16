<?php

echo "Entrez un nombre : ";
$nombre = intval(readline());

$sommeDiviseurs = 0;

for ($i = 1; $i < $nombre; $i++) {
    if ($nombre % $i == 0) {
        $sommeDiviseurs += $i;
    }
}

if ($sommeDiviseurs == $nombre) {
    echo "$nombre est un nombre parfait.\n";
} else {
    echo "$nombre n'est pas un nombre parfait.\n";
}
?>
