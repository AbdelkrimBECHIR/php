<?php
// Démarrage ou restauration de la session
session_start();
// Réinitialisation du tableau de session
// On le vide intégralement
$_SESSION = array();
// Destruction du tableau de session
unset($_SESSION);
// Destruction de la session
session_destroy();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deconnexion</title>
</head>

<body>
    <header>
        <h1>
            <?php
            if (empty($_SESSION["user_login"])) {
                echo "vous etes  déconnecté" ?> <a href="login.php">Connecter vous</a>
            <?php
            } else {
                echo "bienvenue " . htmlentities($_SESSION['user_login']) . " vous etes connecté.";
            }
            ?>
       
    </header>

    


</body>

</html>