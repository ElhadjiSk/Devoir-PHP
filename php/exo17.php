<?php
function afficherTableauMultidimensionnel($tableau) {
    echo '<table border="1">';
    echo '<tr>';


    foreach ($tableau as $cle => $element) {
        echo '<th>' . htmlspecialchars($cle) . '</th>';
    }

    echo '</tr>';


    foreach ($tableau as $cle => $element) {
        echo '<tr>';
        foreach ($element as $valeur) {
            echo '<td>' . htmlspecialchars($valeur) . '</td>';
        }
        echo '</tr>';
    }

    echo '</table>';
}

$tableauMultidimensionnel = array(
    'colonne1' => array(1),
    'colonne2' => array(2, 2),
    'colonne3' => array(3, 3, 3),
    'colonne4' => array(4, 4, 4, 4),
    'colonne5' => array(5, 5, 5, 5, 5),
    'colonne6' => array(6, 6, 6, 6, 6, 6),
    'colonne7' => array(7, 7, 7, 7, 7, 7, 7),
    'colonne8' => array(8, 8, 8, 8, 8, 8, 8, 8),
    'colonne9' => array(9, 9, 9, 9, 9, 9, 9, 9, 9),
    'colonne10' => array(10, 10, 10, 10, 10, 10, 10, 10, 10, 10)
);

afficherTableauMultidimensionnel($tableauMultidimensionnel);
?>
