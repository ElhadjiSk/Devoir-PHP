<?php

$nombreInitial = 456;

$tirage = 0;
$nombreTire = 0;

// Boucle while pour les tirages
while ($nombreTire !== $nombreInitial) {
    $nombreTire = mt_rand(100, 999); // Tirage aléatoire entre 100 et 999
    $tirage++;
}

echo "Avec une boucle while :\n";
echo "Nombre initial : $nombreInitial\n";
echo "Nombre de coups réalisés : $tirage\n";
?>

<?php

$nombreInitial = 456;

$nombreTire = 0;

// Boucle for pour les tirages
for ($tirage = 0; $nombreTire !== $nombreInitial; $tirage++) {
    $nombreTire = mt_rand(100, 999); // Tirage aléatoire entre 100 et 999
}

echo "Avec une boucle for :\n";
echo "Nombre initial : $nombreInitial\n";
echo "Nombre de coups réalisés : $tirage\n";
?>
