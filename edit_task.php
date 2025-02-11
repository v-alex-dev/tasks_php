<?php
$filename = __DIR__ . "/data/tasks.json";

$_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$id = $_GET['id'] ?? '';
if ($id) {
    $data = file_get_contents($filename);
    $task = json_decode($data, true);

    if (count($task)) {
        $taskIndex = array_search($id, array_column($task, 'id'));
        $task[$taskIndex]['done'] = !$task[$taskIndex]['done'];
        file_put_contents($filename, json_encode($task));
    }
}

header('Location: /');