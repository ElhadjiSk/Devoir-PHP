<?php

echo "Entrez le rayon du cercle : ";
$rayon = floatval(readline());


$diametre = 2 * $rayon;
$perimetre = 2 * M_PI * $rayon; 
$surface = M_PI * pow($rayon, 2); 


echo "Diamètre du cercle : $diametre\n";
echo "Périmètre du cercle : $perimetre\n";
echo "Surface du cercle : $surface\n";
?>
