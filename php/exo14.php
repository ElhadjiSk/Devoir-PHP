<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Immobilière</title>
</head>
<body>
    <h2>Choisissez une action :</h2>
    
    <form action="traitement.php" method="post">
        <input type="submit" name="action" value="Vendre">
        <input type="submit" name="action" value="Acheter">
        <input type="submit" name="action" value="Louer">
    </form>
</body>
</html>
PHP
<?php
// Redirection en fonction du choix
if (isset($_POST['action'])) {
    $choix = $_POST['action'];

    switch ($choix) {
        case 'Vendre':
            header('Location: vendre.php');
            exit();
            break;
        
        case 'Acheter':
            header('Location: acheter.php');
            exit();
            break;
        
        case 'Louer':
            header('Location: louer.php');
            exit();
            break;
        
        default:
            echo "Choix invalide.";
            break;
    }
}
?>
