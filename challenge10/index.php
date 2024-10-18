<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
</head>

<body>

<?php if($_SESSION["user_login"]):?>

             <nav>
                <a href='cart.php' target="_blank">Panier</a>
                <a href='logout.php' target="_blank">Deconnexion</a>
             </nav> 
             
             <?php endif ?>
    
       
    <h2> 
        <?php 
        if(empty($_SESSION["user_login"])){
            echo "vous n'etes pas connecté"?> <a href="login.php">Connecter vous</a><?php 
        }else{
            echo "bienvenue " . htmlentities($_SESSION['user_login']) . " vous etes connecté.";
    }
    ?>    
</h2>
        
        

    <h2>bibliotheque</h2>

    <form method="post">
        <input type="text" name="book" value="livre 1">
        <button type="submit" name="add_cart">Ajouter livre 1 au panier</button>
    </form>

    <form method="post">
        <input type="text" name="book" value="livre 2">
        <button type="submit" name="add_cart">Ajouter livre 1 au panier</button>
    </form>

    <form method="post">
        <input type="text" name="book" value="livre 3">
        <button type="submit" name="add_cart">Ajouter livre 1 au panier</button>
    </form>

    <form method="post">
        <input type="text" name="book" value="livre 4">
        <button type="submit" name="add_cart">Ajouter livre 1 au panier</button>
    </form>

    <form method="post">
        <input type="text" name="book" value="livre 5">
        <button type="submit" name="add_cart">Ajouter livre 1 au panier</button>
    </form>






</body>

</html>