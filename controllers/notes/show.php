<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);
$user_id = 3;

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $note = $db->query("SELECT * FROM notes WHERE id = :id", ['id' => $_POST['id']])->findOrFail();

    authorize($note['user_id'] === $user_id);

   //delete note
    $db->query("DELETE FROM notes WHERE id = :id AND user_id = :user_id",
        ['id' => $_POST['id'], 'user_id' => $user_id]);

    header('Location: /notes');
    exit();
}else {


    $heading = "Notes";


    $id = $_GET['id'];

    $note = $db->query("SELECT * FROM notes WHERE id = :id", ['id' => $id])->findOrFail();

    authorize($note['user_id'] === $user_id);

    view("notes/show.view.php", [
        'heading' => "New Note📝",
        'note' => $note
    ]);
}
