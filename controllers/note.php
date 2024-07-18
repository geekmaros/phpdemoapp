<?php
$config = require('config.php');
$db = new Database($config['database']);


$heading = "Notes";
$currentUserId = 3;


$id = $_GET['id'];

$note = $db->query("SELECT * FROM notes WHERE id = :id", ['id'  => $id])->fetch();

if (!$note) {
    abort();
}

if($note['user_id'] !== $currentUserId){
    abort(Response::FORBIDDEN);
}

require "views/note.view.php";

