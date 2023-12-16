<?php
function formaterTableau(&$tableau) {
    foreach ($tableau as &$element) {
        $element = ucfirst(strtolower($element));
    }
}

$donnees = array("maison", "APParTement", "sTUDio");

formaterTableau($donnees);

print_r($donnees);
?>
