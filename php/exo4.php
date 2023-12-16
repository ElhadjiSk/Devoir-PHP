<?php
function calculerPGCD($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function calculerPPCM($a, $b) {
    return ($a * $b) / calculerPGCD($a, $b);
}


echo "Entrez le premier entier : ";
$entier1 = intval(readline());

echo "Entrez le deuxième entier : ";
$entier2 = intval(readline());

$ppcm = calculerPPCM($entier1, $entier2);


echo "Le PPCM de $entier1 et $entier2 est : $ppcm\n";
?>
