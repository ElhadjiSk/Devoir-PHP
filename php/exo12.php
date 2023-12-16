```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Client</title>
</head>
<body>
    <h2>Adresse client</h2>
    <form action="traitement.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br>

        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse" required><br>

        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville" required><br>

        <label for="code_postal">Code Postal :</label>
        <input type="text" id="code_postal" name="code_postal" required><br>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Données Client</title>
</head>
<body>
    <h2>Données Client</h2>

    <?php
 
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $code_postal = $_POST['code_postal'];

  
    echo "<table border='1'>";
    echo "<tr><td>Nom</td><td>$nom</td></tr>";
    echo "<tr><td>Prénom</td><td>$prenom</td></tr>";
    echo "<tr><td>Adresse</td><td>$adresse</td></tr>";
    echo "<tr><td>Ville</td><td>$ville</td></tr>";
    echo "<tr><td>Code Postal</td><td>$code_postal</td></tr>";
    echo "</table>";
    ?>
</body>
</html>
```
