<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// cree un tableau des erreur
$errors = [];
// controle de remplissage des champs et de validite des champs
    

if (empty($_POST["user_firstname"])) {
    $errors[] = "Le prénom est obligatoire.";
}elseif (!preg_match("/^[a-zA-Z-' ]*$/",$_POST["user_firstname"])) {
    $errors[] = "le prenom doit seulement comporter des les lettres";
  }

if(empty($_POST[ "user_name"])){
    $errors[] = "il manque le nom";
}elseif (!preg_match("/^[a-zA-Z-' ]*$/",$_POST["user_firstname"])) {
    $errors[] = "le prenom est mal remplis";
}

if(empty($_POST[ "user_mail"])){
    $errors[] = "il manque le mail";
    // controle la validité de l'email
}elseif (!filter_var($_POST["user_mail"], FILTER_VALIDATE_EMAIL)) {
    $errors[] = "le mail est invalide";
}

if(empty($_POST[ "user_phone"])){
    $errors[] = "il manque le numero de telephone";
    // controle que le numero continet bien 10 chiffres
}elseif (!preg_match('/^\d{10}$/', $_POST["user_phone"])) {
        $errors[] = "le numero est invalide";
}

if(empty($_POST[ "user_subject"])){
    $errors[] = "il manque le sujet";

}
if(empty($_POST[ "user_message"])){
    $errors[] = "il manque le msg";
}
 
 
 // si il y a des erreurs affiche les
 //sinon  affiche le message avec les donneés validées.

 if (count($errors)) {
    echo "<p>Erreur(s) dans le formulaire :</p>";
    echo "<ul>";
    foreach ($errors as $error) {
        echo "<li>" . htmlspecialchars($error) . "</li>";
    }
    echo "</ul>";
} else {
    // Affichage du message de remerciement
    echo "<p>Merci " . htmlspecialchars($_POST["user_firstname"]) . " " . htmlspecialchars($_POST["user_name"]) . "
    de nous avoir contacté à propos de " . htmlspecialchars($_POST["user_subject"]) . ".
    Un de nos conseillers vous contactera soit à l’adresse 
    " . htmlspecialchars($_POST["user_mail"]) . " ou par téléphone au " . htmlspecialchars($_POST["user_phone"]) . " dans les plus brefs délais pour traiter votre demande : 
    " . htmlspecialchars($_POST["user_message"]) . ".</p>";
}
?>
</body>
</html>