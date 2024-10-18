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
    <h1>Deconnexion</h1>
</body>
</html>