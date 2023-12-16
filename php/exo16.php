<?php
function sinusAngle($mesure, $unite = 'radian') {
    // Convertir la mesure de l'angle en radians
    switch (strtolower($unite)) {
        case 'degre':
            $mesure = deg2rad($mesure);
            break;
        
        case 'grade':
            $mesure = ($mesure * M_PI) / 200; // 1 grade = (pi/200) radians
            break;
    }

    // Calculer le sinus de l'angle
    $sinus = sin($mesure);

    return $sinus;
}

$angleEnRadians = 1.5;
$angleEnDegres = 90;
$angleEnGrades = 100;

echo "Sinus de $angleEnRadians radians : " . sinusAngle($angleEnRadians) . "\n";
echo "Sinus de $angleEnDegres degrés : " . sinusAngle($angleEnDegres, 'degre') . "\n";
echo "Sinus de $angleEnGrades grades : " . sinusAngle($angleEnGrades, 'grade') . "\n";
?>
