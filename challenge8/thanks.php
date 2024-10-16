<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Merci <?php echo $_POST["user_firstname"];echo ' '; echo $_POST["user_name"];?>
    de nous avoir contacté à propos de <?php echo $_POST["user_subject"];?>
    Un de nos conseiller vous contactera soit à l’adresse 
    <?php echo $_POST["user_mail"]; ?> ou par téléphone au <?php echo $_POST["user_phone"]; ?> dans les plus brefs délais pour traiter votre demande : 
    <?php echo $_POST["user_message"]; ?>
</p>

<?php
  //test de la recuperation des donnéees en GET
 // var_dump($_GET);
?>
</body>
</html>