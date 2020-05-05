<?php
// Récupération des tâches ajoutées
$reponse = $bdd->query('SELECT tâche FROM Todos ORDER BY ID asc');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
    echo '<input type="checkbox" name="case" id="case" value="value1"/> <label for="case">'.($donnees['tâche']).'<br></label>';

}
echo '<input type="submit" name="delete" id="delete" value="Enregistrer" />';
$reponse->closeCursor();


?>