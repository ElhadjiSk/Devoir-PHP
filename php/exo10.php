<?php

$personnesIndicees = array(
    "Alice" => array("Alice", "Paris", 25),
    "Bob" => array("Bob", "Lyon", 30),
    "Charlie" => array("Charlie", "Marseille", 22)
);

$personnesAssociatives = array(
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

echo "Tableau multidimensionnel associatif :\n";
foreach ($personnesIndicees as $nom => $infos) {
    echo "Nom: $nom\n";
    echo "Prénom: " . $infos[0] . "\n";
    echo "Ville: " . $infos[1] . "\n";
    echo "Âge: " . $infos[2] . "\n";
    echo "\n";
}


echo "Tableau avec des tableaux associatifs :\n";
foreach ($personnesAssociatives as $nom => $infos) {
    echo "Nom: $nom\n";
    echo "Prénom: " . $infos["prenom"] . "\n";
    echo "Ville: " . $infos["ville"] . "\n";
    echo "Âge: " . $infos["age"] . "\n";
    echo "\n";
}
?>
