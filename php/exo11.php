<?php
// Tableau multidimensionnel associatif avec des tableaux indicés
$personnesIndice = array(
    "Alice" => array("Alice", "Paris", 25),
    "Bob" => array("Bob", "Lyon", 30),
    "Charlie" => array("Charlie", "Marseille", 22)
);

$keysIndice = array_keys($personnesIndice);
$i = 0;

while ($i < count($keysIndice)) {
    $nom = $keysIndice[$i];
    $infos = $personnesIndice[$nom];

    echo "Nom: $nom\n";
    echo "Prénom: " . $infos[0] . "\n";
    echo "Ville: " . $infos[1] . "\n";
    echo "Âge: " . $infos[2] . "\n";
    echo "\n";

    $i++;
}
?>
<?php
// Tableau multidimensionnel associatif avec des tableaux associatifs
$personnesAssoc = array(
    "Alice" => array("prenom" => "Alice", "ville" => "Paris", "age" => 25),
    "Bob" => array("prenom" => "Bob", "ville" => "Lyon", "age" => 30),
    "Charlie" => array("prenom" => "Charlie", "ville" => "Marseille", "age" => 22)
);

$keysAssoc = array_keys($personnesAssoc);
$i = 0;

while ($i < count($keysAssoc)) {
    $nom = $keysAssoc[$i];
    $infos = $personnesAssoc[$nom];

    echo "Nom: $nom\n";
    echo "Prénom: " . $infos["prenom"] . "\n";
    echo "Ville: " . $infos["ville"] . "\n";
    echo "Âge: " . $infos["age"] . "\n";
    echo "\n";

    $i++;
}
?>
