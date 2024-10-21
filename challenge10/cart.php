<?php
session_start();




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
</head>

<body>

    <header>
        <h1>
            <?php
            if (empty($_SESSION["user_login"])) {
                echo "vous n'etes pas connecté" ?> <a href="login.php">Connecter vous</a>
            <?php
            } else {
                echo "bienvenue " . htmlentities($_SESSION['user_login']) . " vous etes connecté.";
            }
            ?>
        </h1>

        <?php if ($_SESSION["user_login"]): ?>
            <nav>
                <a href='index.php' target="_blank">Bibliothèque</a>
                <a href='logout.php' target="_blank">Deconnexion</a>
                
            </nav>

        <?php endif ?>
    </header>
    <h2>Panier</h2>

</body>

</html>