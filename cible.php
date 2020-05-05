<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Todo List</title>
    </head>
    <body>

    <?php
        $stringTrimmed = trim($_POST['message']);
        $newString = filter_var($stringTrimmed,FILTER_SANITIZE_STRING);
         if ($newString != null AND $newString != false) {
             echo 'Tâche '.$newString.' ajoutée';
         } else {
             echo 'Champ vide ou incorrect';
         }
    ?>

    </body>
</html>