<?php
if (isset($_POST['delete'])) {
    $checks = $_POST['checkbox'];
    foreach ($checks as $id) {
        require 'connexion.php';
        // Suppression de la tâche ou des tâches
        $req = $bdd->query('DELETE FROM Todos WHERE Id='.$id);
        $req->closeCursor();
    }
}
?>
