<?php
/* LOGICAL CODE  */

// CONSTANT VARIABLES
// ERRORS
const ERROR_REQUIRED = "Veuillez renseigner une tâche";
const ERROR_TOO_SHORT = "Veuillez entrer au moins 5 caractères";

// VARIABLES
$error = '';
$filename = __DIR__ . "/data/tasks.json";
$tasks = [];

// CHECK CONTENT INTO TASKS.JSON
if (file_exists($filename)) {
    $data = file_get_contents($filename);
    $tasks = json_decode($data, true) ?? [];
}

// CHECK REQUEST DETECTION
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    // IF IT DOESN'T WORK USE : isset($_POST['task']) ? $_POST['task'] : '';
    $task = $_POST['task'] ?? ''; // /!\ '??' EXIST SINCE PHP 7.0 NOT VALID FOR PROJECTS WITH AN EARLIER VERSION

    // IF TASK DOESN'T EXIST SETUP ERROR
    if (!$task) {
        $error = ERROR_REQUIRED;
    } else if (mb_strlen($task) < 5) {
        $error = ERROR_TOO_SHORT;
    }
}
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
        <?php if ($error): ?>
            <p class="text-danger"><?= $error ?></p>
        <?php endif; ?>
        <div class="task-list"></div>
    </div>
</div>
<?php require_once 'includes/footer.php' ?>
</body>
</html>