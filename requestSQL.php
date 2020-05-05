<?php

    // Insertion du message à l'aide d'une requête préparée
    $req = $bdd->prepare('INSERT INTO Todos (tâche) VALUES(?)');
    $req->execute(array($newString));

?>