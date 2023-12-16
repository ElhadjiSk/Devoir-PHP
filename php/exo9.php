<?php

$personnes = array(
    "Alice" => array(
        "prenom" => "Alice",
        "ville" => "Paris",
        "age" => 25
    ),
    "Bob" => array(
        "prenom" => "Bob",
        "ville" => "Lyon",
        "age" => 30
    ),
    "Charlie" => array(
        "prenom" => "Charlie",
        "ville" => "Marseille",
        "age" => 22
    )
);


foreach ($personnes as $nom => $infos) {
    echo "Nom: $nom\n";
    echo "Prénom: " . $infos["prenom"] . "\n";
    echo "Ville: " . $infos["ville"] . "\n";
    echo "Âge: " . $infos["age"] . "\n";
    echo "\n";
}
?>
