<?php
session_start();



if (isset($_POST["add_book"])){
    $_SESSION["add_book"]=$_POST["add_book"];
}




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

    <form  method="post">
        <input type="text"  name="add_book" value="Le temps des secrets">
        <?php if ($_SESSION["user_login"]): ?>
            <button type="submit">Ajouter au panier</button>
        <?php endif ?>
    </form>

    <form method="post">
        <input type="text" name="add_book" value="La gloire de mon père">
        <?php if ($_SESSION["user_login"]): ?>
            <button type="submit" name="add_one">Ajouter au panier</button>
        <?php endif ?>
    </form>

    <form method="post">
        <input type="text" name="add_book" value="Le chateau de ma mère">
        <?php if ($_SESSION["user_login"]): ?>
            <button type="submit" name="add_one">Ajouter au panier</button>
        <?php endif ?>
    </form>

    <form method="post">
        <input type="text" name="add_book" value="Manon des sources">
        <?php if ($_SESSION["user_login"]): ?>
            <button type="submit" name="add_one">Ajouter au panier</button>
        <?php endif ?>
    </form>

    <form method="post">
        <input type="text" name="add_book" value="Pack des 4 livres">
        <?php if ($_SESSION["user_login"]): ?>
            <button type="submit" name="add_one">Ajouter au panier</button>
        <?php endif ?>
    </form>






</body>

</html>