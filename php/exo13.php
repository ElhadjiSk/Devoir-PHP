<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul TVA</title>
</head>
<body>
    <h2>Calcul TVA</h2>
    
    <form action="traitement.php" method="post">
        <label for="prix_ht">Prix HT :</label>
        <input type="text" id="prix_ht" name="prix_ht" value="<?php echo isset($_POST['prix_ht']) ? $_POST['prix_ht'] : ''; ?>" required><br>

        <label for="taux_tva">Taux de TVA :</label>
        <input type="text" id="taux_tva" name="taux_tva" value="<?php echo isset($_POST['taux_tva']) ? $_POST['taux_tva'] : ''; ?>" required><br>

        <input type="submit" value="Calculer">
    </form>
    
    <?php

    if (isset($_POST['prix_ht']) && isset($_POST['taux_tva'])) {
        $prixHT = floatval($_POST['prix_ht']);
        $tauxTVA = floatval($_POST['taux_tva']);


        $montantTVA = ($prixHT * $tauxTVA) / 100;
        $prixTTC = $prixHT + $montantTVA;


        echo "<h3>Résultat</h3>";
        echo "<p>Montant de la TVA : $montantTVA</p>";
        echo "<p>Prix TTC : $prixTTC</p>";
    }
    ?>
</body>
</html>
<?php
// Redirection vers le formulaire si les données ne sont pas définies
if (!isset($_POST['prix_ht']) || !isset($_POST['taux_tva'])) {
    header('Location: index.html');
    exit();
}
?>
