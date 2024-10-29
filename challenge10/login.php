<?php
/*  ce fichier est un formulaire qui donne accées à un panier si on se log
*/
//demarrage session
    session_start();
    

    if (isset($_POST["user_login"])){

    $_SESSION["user_login"]=$_POST["user_login"];
        header('location:index.php');
        exit();
}
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<form  target="_blank" method="post">   
    <input type="text" name="user_login"placeholder="Votre login" >
    <button type="submit">Envoyer</button>  
</form>


<body>
    
</body>
</html>