<?php

$personnes = array(
    "Alice" => array("Alice", "Paris", 25),
    "Bob" => array("Bob", "Lyon", 30),
    "Charlie" => array("Charlie", "Marseille", 22)
);

foreach ($personnes as $nom => $infos) {
    echo "Nom: $nom\n";
    echo "Prénom: " . $infos[0] . "\n";
    echo "Ville: " . $infos[1] . "\n";
    echo "Âge: " . $infos[2] . "\n";
    echo "\n";
}
?>
