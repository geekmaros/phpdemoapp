<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);


$heading = "Notes";
$currentUserId = 3;


$id = $_GET['id'];

$note = $db->query("SELECT * FROM notes WHERE id = :id", ['id'  => $id])->findOrFail();

authorize($note['user_id'] === $currentUserId);

view("notes/show.view.php", [
    'heading' => "New Note📝",
    'note' => $note
]);
