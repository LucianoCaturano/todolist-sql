<?php
$stringTrimmed = trim($_POST['message']);
$newString = filter_var($stringTrimmed,FILTER_SANITIZE_STRING);
if ($newString != null AND $newString != false) {
    // Connexion à la base de données
    require 'connexion.php';

    require 'requestSQL.php';

    echo 'Tâche ajoutée';
} else {
    echo 'Champ vide ou incorrect';
}

?>