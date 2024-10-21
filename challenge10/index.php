<?php
session_start();
print_r($_SESSION["user_login"]);




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
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
                <a href="cart.php" target="_blank">Panier</a>
                <a href="logout.php" target="_blank">Deconnexion</a>
            </nav>

        <?php endif ?>
    </header>





    <h2>bibliotheque</h2>

    <form action="add_to_cart" method="post">
        <input type="text" name="add_book" value="livre 1">
        <?php if ($_SESSION["user_login"]): ?>
            <button type="submit">Ajouter livre 1 au panier</button>
        <?php endif ?>
    </form>

    <form method="post">
        <input type="text" name="book" value="livre 2">
        <?php if ($_SESSION["user_login"]): ?>
            <button type="submit" name="add_one">Ajouter livre 1 au panier</button>
        <?php endif ?>
    </form>

    <form method="post">
        <input type="text" name="book" value="livre 3">
        <?php if ($_SESSION["user_login"]): ?>
            <button type="submit" name="add_one">Ajouter livre 1 au panier</button>
        <?php endif ?>
    </form>

    <form method="post">
        <input type="text" name="book" value="livre 4">
        <?php if ($_SESSION["user_login"]): ?>
            <button type="submit" name="add_one">Ajouter livre 1 au panier</button>
        <?php endif ?>
    </form>

    <form method="post">
        <input type="text" name="book" value="livre 5">
        <?php if ($_SESSION["user_login"]): ?>
            <button type="submit" name="add_one">Ajouter livre 1 au panier</button>
        <?php endif ?>
    </form>






</body>

</html>