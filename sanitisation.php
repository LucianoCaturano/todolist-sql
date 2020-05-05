<?php
$stringTrimmed = trim($_POST['message']);
$newString = filter_var($stringTrimmed,FILTER_SANITIZE_STRING);
if ($newString != null AND $newString != false) {
    // Connexion à la base de données
    require 'connexion.php';

    require 'requestSQL.php';

    echo '<a href="index.php">Revenir à l\'accueil</a>';
} else {
    echo 'Champ vide ou incorrect';
}

?>