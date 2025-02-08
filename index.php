<?php
/* LOGICAL CODE  */

// CONSTANT VARIABLES
// ERRORS
const ERROR_REQUIRED = "Veuillez renseigner une tâche";
const ERROR_TOO_SHORT = "Veuillez entrer au moins 5 caractères"


?>
<!--
=== HTML DISPLAY ===
-->
<!doctype html>
<html lang="fr">
<head>
    <?php require_once 'includes/head.php' ?>
    <title>Tasks</title>
</head>
<body class="container">
<?php require_once 'includes/header.php' ?>
<div class="content">
    <div class="task-container">
        <h1>My Tasks</h1>
        <form action="/" method="post" class="task-form">
            <input name="task" type="text">
            <button class="btn btn-primary" type="submit">Ajouter</button>
        </form>
        <div class="task-list"></div>
    </div>
</div>
<?php require_once 'includes/footer.php' ?>
</body>
</html>